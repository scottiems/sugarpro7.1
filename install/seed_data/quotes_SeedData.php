<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/



require_once('modules/Quotes/Quote.php');
require_once('modules/ProductBundleNotes/ProductBundleNote.php');
require_once('modules/Products/Product.php');

global $current_user;
global $sugar_demodata;

if(!empty($sugar_demodata['quotes_seed_data']['quotes'])) {

   foreach($sugar_demodata['quotes_seed_data']['quotes'] as $key=>$quote) {

		$focus = new Quote();
		$focus->id = create_guid();
    	$focus->new_with_id = true;
		$focus->name = $quote['name'];
		$focus->description = !empty($quote['description']) ? $quote['description'] : '';
		$focus->quote_stage = !empty($quote['quote_stage']) ? $quote['quote_stage'] : '';
		$focus->date_quote_expected_closed = $quote['date_quote_expected_closed'];
		if(!empty($quote['purcahse_order_num'])) {
		   $focus->purchase_order_num = $quote['purcahse_order_num'];
		}
		
   		if(!empty($quote['original_po_date'])) {
		   $focus->original_po_date = $quote['original_po_date'];
		}

   		if(!empty($quote['payment_terms'])) {
		   $focus->payment_terms = $quote['payment_terms'];
		}
		
		$focus->quote_type = 'Quotes';
		$focus->calc_grand_total = 1;
		$focus->show_line_nums = 1;
		$focus->team_id = $current_user->team_id;
		$focus->team_set_id = $current_user->team_set_id;
        $focus->currency_id = '-99';
		
		//Set random account and contact ids
		$sql = 'SELECT * FROM accounts WHERE deleted = 0';
		$result = $GLOBALS['db']->limitQuery($sql,0,10,true,"Error retrieving Accounts");
	    while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
	    	$focus->billing_account_id = $row['id'];
	    	$focus->name = str_replace('[account name]', $row['name'], $focus->name);
	    	$focus->billing_address_street = $row['billing_address_street'];
	    	$focus->billing_address_city = $row['billing_address_city'];
	    	$focus->billing_address_state = $row['billing_address_state'];
	    	$focus->billing_address_country = $row['billing_address_country'];
	    	$focus->billing_address_postalcode = $row['billing_address_postalcode'];
	    	$focus->shipping_address_street = $row['shipping_address_street'];
	    	$focus->shipping_address_city = $row['shipping_address_city'];
	    	$focus->shipping_address_state = $row['shipping_address_state'];
	    	$focus->shipping_address_country = $row['shipping_address_country'];
	    	$focus->shipping_address_postalcode = $row['shipping_address_postalcode'];
	    	break;
	    }

		foreach($quote['bundle_data'] as $bundle_key=>$bundle) {
			$pb = new ProductBundle();
	        $pb->team_id = $focus->team_set_id;
            $pb->team_set_id = $focus->team_set_id;
            $pb->currency_id = $focus->currency_id;
			$pb->bundle_stage = $bundle['bundle_stage'];
			$pb->name = $bundle['bundle_name'];
			
            $product_bundle_id = $pb->save();
            
            //Save the products
            foreach($bundle['products'] as $product_key=>$products) {
            	$sql = 'SELECT * FROM product_templates WHERE name = \'' . $products['name'] . '\'';
	            $result = $GLOBALS['db']->query($sql);
	            while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
	                $product = new Product();
	                
	            	foreach($product->column_fields as $field) {
						if(isset($row[$field])) {
	                       $product->$field = $row[$field];
						}
					}	                
					$product->product_template_id = $row['id'];
					$product->name = $products['name'];
					$product->id = create_guid();
					$product->new_with_id = true;
	                $product->quantity = $products['quantity'];
					$product->currency_id = $focus->currency_id;
					$product->team_id = $focus->team_id;
					$product->team_set_id = $focus->team_set_id;
					$product->quote_id = $focus->id;
					$product->account_id = $focus->billing_account_id;
					$product->status = 'Quotes';
					
					if ($focus->quote_stage == 'Closed Accepted') {
						$product->status='Orders';
					}

					$pb->subtotal += ($product->list_price * $product->quantity);
					$pb->deal_tot += ($product->list_price * $product->quantity);
					$pb->new_sub += ($product->list_price * $product->quantity);
					$pb->total += ($product->list_price * $product->quantity);
					
					$product_id = $product->save();
					$pb->set_productbundle_product_relationship($product_id, $product_key, $product_bundle_id);
					break;
	            } //while
	            
            } //foreach

            $pb->tax = 0;
			$pb->shipping = 0;
            $pb->save();
            
            //Save any product bundle comment
            if(isset($bundle['comment'])) {
				$product_bundle_note = new ProductBundleNote();
				$product_bundle_note->description = $bundle['comment'];
				$product_bundle_note->save();
				$pb->set_product_bundle_note_relationship($bundle_key, $product_bundle_note->id, $product_bundle_id);
	        }
	        
	        $pb->set_productbundle_quote_relationship($focus->id, $product_bundle_id, $bundle_key);
	        
			$focus->tax += $pb->tax;
			$focus->shipping += $pb->shipping;
			$focus->subtotal += $pb->subtotal;
			$focus->deal_tot += $pb->deal_tot;
			$focus->new_sub += $pb->new_sub;
			$focus->total += $pb->total;	        
	        
		} //foreach
		
		//Save the quote
		$focus->save();
   } //foreach
}


?>