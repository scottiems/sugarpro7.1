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

	

$mod_strings = array (
  'ERR_DELETE_RECORD' => 'Er moet een recordnummer zijn gespecificeerd om deze organisatie te verwijderen.',
  'LBL_ACCEPT_LINK' => 'Acceptatie Link',
  'LBL_ACCEPT_STATUS' => 'Acceptiestatus',
  'LBL_ACCOUNT_NAME' => 'Organisatie',
  'LBL_ACTIVITIES_REPORTS' => 'Activiteitenrapport',
  'LBL_ADD_BUTTON' => 'Toevoegen',
  'LBL_ADD_INVITEE' => 'Uitnodigen',
  'LBL_ASSIGNED_TO_ID' => 'Toegewezen Gebruiker',
  'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
  'LBL_BLANK' => '-leeg-',
  'LBL_CALL' => 'Telefoongesprek:',
  'LBL_CALL_INFORMATION' => 'Overzicht',
  'LBL_CANCEL_CREATE_INVITEE' => 'Annuleren',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Weet u het zeker dat u alle records in de reeks wilt verwijderen?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Personen',
  'LBL_CONTACT_NAME' => 'Naam Persoon:',
  'LBL_CREATE_AND_ADD' => 'Nieuw & Toevoegen',
  'LBL_CREATE_CONTACT' => 'Als Persoon',
  'LBL_CREATE_INVITEE' => 'Uitnodigen',
  'LBL_CREATE_LEAD' => 'Als Lead',
  'LBL_CREATE_MODULE' => 'Vastleggen Telefoongesprek',
  'LBL_DATE' => 'Begindatum:',
  'LBL_DATE_END' => 'Einddatum',
  'LBL_DATE_END_ERROR' => 'Einddatum ligt voor de Startdatum',
  'LBL_DATE_TIME' => 'Begindatum & tijd:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Telefoongesprekken',
  'LBL_DEL' => 'Verwijderen',
  'LBL_DESCRIPTION' => 'Beschrijving:',
  'LBL_DESCRIPTION_INFORMATION' => 'Beschrijving',
  'LBL_DIRECTION' => 'Richting:',
  'LBL_DURATION' => 'Gespreksduur:',
  'LBL_DURATION_HOURS' => 'Duur (uren):',
  'LBL_DURATION_MINUTES' => 'Duur (minuten):',
  'LBL_EDIT_ALL_RECURRENCES' => 'Wijzig alle herhaalde afspraken',
  'LBL_EMAIL' => 'E-mail',
  'LBL_EMAIL_REMINDER' => 'E-mail Reminder',
  'LBL_EMAIL_REMINDER_SENT' => 'E-mail reminder verstuurd',
  'LBL_EMAIL_REMINDER_TIME' => 'E-mail Reminder Tijd',
  'LBL_EMPTY_SEARCH_RESULT' => 'Helaas werden geen resultaten gevonden. Voeg hieronder aub een gast toe.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Toegewezen gebruikers ID',
  'LBL_EXPORT_CREATED_BY' => 'Aangemaakt door ID',
  'LBL_EXPORT_DATE_START' => 'Startdatum en Tijd',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Gewijzigd door ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Gerelateerd aan Module',
  'LBL_EXPORT_REMINDER_TIME' => 'Reminder Tijd (in minuten)',
  'LBL_FIRST_NAME' => 'Voornaam',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notities',
  'LBL_HOURS_ABBREV' => 'uur',
  'LBL_HOURS_MINUTES' => '(uren/minuten)',
  'LBL_INVITEE' => 'Genodigden',
  'LBL_LAST_NAME' => 'Achternaam',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen aan',
  'LBL_LIST_CLOSE' => 'Sluiten',
  'LBL_LIST_CONTACT' => 'Persoon',
  'LBL_LIST_DATE' => 'Begindatum',
  'LBL_LIST_DIRECTION' => 'Richting',
  'LBL_LIST_DURATION' => 'Gespreksduur',
  'LBL_LIST_FORM_TITLE' => 'Telefoongesprekken',
  'LBL_LIST_MY_CALLS' => 'Mijn Telefoongesprekken',
  'LBL_LIST_RELATED_TO' => 'Gerelateerd aan',
  'LBL_LIST_RELATED_TO_ID' => 'Gerelateerd aan ID',
  'LBL_LIST_SUBJECT' => 'Onderwerp',
  'LBL_LIST_TIME' => 'Aanvangstijd',
  'LBL_LOG_CALL' => 'Log Oproep',
  'LBL_MEMBER_OF' => 'Lid van',
  'LBL_MINSS_ABBREV' => 'min',
  'LBL_MODULE_NAME' => 'Telefoongesprek',
  'LBL_MODULE_NAME_SINGULAR' => 'Telefoongesprek',
  'LBL_MODULE_TITLE' => 'Telefoongesprekken: Start',
  'LBL_NAME' => 'Naam',
  'LBL_NEW_FORM_TITLE' => 'Nieuw Telefoongesprek',
  'LBL_NO_ACCESS' => 'U heeft geen toegang om $module te maken',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Bovenliggende ID',
  'LBL_PHONE' => 'Telefoon',
  'LBL_RECURRENCE' => 'Herhaling',
  'LBL_RECURRING_LIMIT_ERROR' => 'Deze herhaalde afspraak kan niet opgeslagen worden, omdat het maximale toegestane aantal ($limit) herhaalde afspraken overschreven wordt.',
  'LBL_RECURRING_SOURCE' => 'Bron Herhaling',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Gesproken met {{{this}}}',
  'LBL_RELATED_TO' => 'Gerelateerd aan:',
  'LBL_REMINDER' => 'Herinnering:',
  'LBL_REMINDER_EMAIL' => 'E-mail',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-Mail alle genodigden',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Remindertijd',
  'LBL_REMOVE' => 'Verwijderen',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Verwijder alle herhaalde afspraken',
  'LBL_REPEAT_COUNT' => 'Aantal Herhalingen',
  'LBL_REPEAT_DOW' => 'Herhaling',
  'LBL_REPEAT_END' => 'Einde',
  'LBL_REPEAT_END_AFTER' => 'Na',
  'LBL_REPEAT_END_BY' => 'Door',
  'LBL_REPEAT_INTERVAL' => 'Herhalingsinterval',
  'LBL_REPEAT_OCCURRENCES' => 'Herhalingen',
  'LBL_REPEAT_PARENT_ID' => 'Herhaal Bovenliggend ID',
  'LBL_REPEAT_TYPE' => 'Herhalingstype',
  'LBL_REPEAT_UNTIL' => 'Herhalen tot',
  'LBL_SCHEDULING_FORM_TITLE' => 'Inplannen',
  'LBL_SEARCH_BUTTON' => 'Zoeken',
  'LBL_SEARCH_FORM_TITLE' => 'Telefoongesprek zoeken',
  'LBL_SELECT_FROM_DROPDOWN' => 'Selecteer aub uit de gerelateerde keuzelijst.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Opslaan & Versturen Uitnodigingen',
  'LBL_SEND_BUTTON_TITLE' => 'Verstuur Uitnodigingen [ALT+I]',
  'LBL_SEND_INVITES' => 'Verstuur Uitnodigingen',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Onderwerp:',
  'LBL_SYNCED_RECURRING_MSG' => 'Deze afspraak is in een ander systeem gemaakt en is gesynchroniseerd naar Sugar. U kunt deze afspraak daar wijzigen en opnieuw synchroniseren met deze afspraak.',
  'LBL_TIME' => 'Aanvangstijd:',
  'LBL_TIME_END' => 'Eindtijd',
  'LBL_USERS_SUBPANEL_TITLE' => 'Gebruikers',
  'LNK_CALL_LIST' => 'Telefoongesprekken',
  'LNK_IMPORT_CALLS' => 'Importeer Gesprekken',
  'LNK_NEW_ACCOUNT' => 'Nieuwe Organisatie',
  'LNK_NEW_APPOINTMENT' => 'Nieuwe Afspraak',
  'LNK_NEW_CALL' => 'Nieuw Telefoongesprek',
  'LNK_NEW_MEETING' => 'Nieuwe Afspraak',
  'LNK_NEW_OPPORTUNITY' => 'Nieuwe Opportunity',
  'LNK_SELECT_ACCOUNT' => 'Kies een Organisatie',
  'NOTICE_DURATION_TIME' => 'Tijdsduur moet groter zijn dan 0',
  'NTC_REMOVE_INVITEE' => 'Weet u zeker dat u deze uitgenodigde persoon wilt verwijderen bij dit telefoongesprek?',
);

