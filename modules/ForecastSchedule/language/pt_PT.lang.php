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
  'ERR_FORECAST_AMOUNT' => 'Registar um valor é obrigatório e necessita de ser um número',
  'LBL_BEST_CASE' => 'Melhor Cenário:',
  'LBL_COMMIT_HEADER' => 'Registar Previsão',
  'LBL_COMMIT_MESSAGE' => 'Tem a certeza de que pretende registar estes valores',
  'LBL_COMMIT_NOTE' => 'Introduza os valores que pretende registados para o Período Temporal seleccionado',
  'LBL_CREATED_BY' => 'Criado por',
  'LBL_CURRENCY' => 'Moeda',
  'LBL_CURRENCY_RATE' => 'Taxa da Moeda',
  'LBL_DATE_COMMITTED' => 'Data Registada',
  'LBL_DATE_ENTERED' => 'Data Introduzida',
  'LBL_DATE_MODIFIED' => 'Data Modificada',
  'LBL_DELETED' => 'Eliminado',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Oportunidades da Previsão',
  'LBL_DV_FORECAST_PERIOD' => 'Período Temporal da Previsão',
  'LBL_DV_FORECAST_ROLLUP' => 'Revisão da Previsão',
  'LBL_DV_HEADER' => 'Previsões: Folha de Trabalho',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Último Valor de Registo:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Última Data de Registo:',
  'LBL_DV_MY_FORECASTS' => 'As Minhas Previsões',
  'LBL_DV_MY_TEAM' => 'A Previsão das Minhas Equipas',
  'LBL_DV_TIMEPERIOD' => 'Períodos Temporais',
  'LBL_DV_TIMEPERIODS' => 'Períodos Temporais:',
  'LBL_DV_TIMPERIOD_DATES' => 'Intervalos de Datas:',
  'LBL_EDIT_LAYOUT' => 'Editar Layout',
  'LBL_EXPECTED_AMOUNT' => 'Montante Esperado',
  'LBL_EXPECTED_BEST_CASE' => 'O Melhor Caso Esperado',
  'LBL_EXPECTED_LIKELY_CASE' => 'O Caso Provável Esperado',
  'LBL_EXPECTED_OPPORTUNITIES' => 'Oportunidades Esperadas',
  'LBL_EXPECTED_WORST_CASE' => 'O Pior Caso Esperado',
  'LBL_FC_START_DATE' => 'Data de Início',
  'LBL_FC_USER' => 'Calendarizar para',
  'LBL_FDR_ADJ_AMOUNT' => 'Valor Ajustado',
  'LBL_FDR_COMMIT' => 'Valor Registado',
  'LBL_FDR_C_BEST_CASE' => 'Melhor Cenário',
  'LBL_FDR_C_LIKELY_CASE' => 'Cenário Mais Provável',
  'LBL_FDR_C_WORST_CASE' => 'Pior Cenário',
  'LBL_FDR_DATE_COMMIT' => 'Data Registada',
  'LBL_FDR_OPPORTUNITIES' => 'Oportunidades na Previsão:',
  'LBL_FDR_USER_NAME' => 'Relatório Directo',
  'LBL_FDR_WEIGH' => 'Valores Ponderados das Oportunidades:',
  'LBL_FDR_WK_BEST_CASE' => 'Melhor Cenário Estimado',
  'LBL_FDR_WK_LIKELY_CASE' => 'Cenário Mais Provável Estimado',
  'LBL_FDR_WK_WORST_CASE' => 'Pior Cenário Estimado',
  'LBL_FORECAST_HISTORY' => 'Previsões: Histórico',
  'LBL_FORECAST_HISTORY_TITLE' => 'Previsões: Histórico',
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_OPP_BEST_CASE' => 'Melhor Cenário',
  'LBL_FORECAST_OPP_COMMIT' => 'Cenário Mais Provável',
  'LBL_FORECAST_OPP_COUNT' => 'Oportunidades',
  'LBL_FORECAST_OPP_WEIGH' => 'Valor Ponderado',
  'LBL_FORECAST_OPP_WORST' => 'Pior Cenário',
  'LBL_FORECAST_TIME_ID' => 'Id do Período Temporal',
  'LBL_FORECAST_TYPE' => 'Tipo de Previsão',
  'LBL_FORECAST_USER' => 'Utilizador',
  'LBL_FS_CASCADE' => 'Cascata?',
  'LBL_FS_CREATED_BY' => 'Criado por',
  'LBL_FS_DATE_ENTERED' => 'Data de Introdução',
  'LBL_FS_DATE_MODIFIED' => 'Data de Modificação',
  'LBL_FS_DELETED' => 'Eliminado',
  'LBL_FS_END_DATE' => 'Data de Fim',
  'LBL_FS_FORECAST_FOR' => 'Calendarizado para:',
  'LBL_FS_FORECAST_START_DATE' => 'Data de Início da Previsão',
  'LBL_FS_MODULE_NAME' => 'Calendarização de Previsão',
  'LBL_FS_START_DATE' => 'Data de Início',
  'LBL_FS_STATUS' => 'Estado',
  'LBL_FS_TIMEPERIOD' => 'Período Temporal',
  'LBL_FS_TIMEPERIOD_ID' => 'Id Período Temporal',
  'LBL_FS_USER_ID' => 'Id Utilizador',
  'LBL_INCLUDE_EXPECTED' => 'Incluir a informação de Dados Esperados',
  'LBL_LIKELY_CASE' => 'Cenário Mais Provável:',
  'LBL_LIST_FORM_TITLE' => 'Previsões Registadas',
  'LBL_LV_COMMIT' => 'Valor Registado',
  'LBL_LV_COMMIT_DATE' => 'Data de Registo',
  'LBL_LV_OPPORTUNITIES' => 'Oportunidades',
  'LBL_LV_TIMPERIOD' => 'Período Temporal',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Data Final',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Data de Início',
  'LBL_LV_TYPE' => 'Tipo de Previsão',
  'LBL_LV_WEIGH' => 'Valor Ponderado',
  'LBL_MODULE_NAME' => 'Previsões',
  'LBL_MODULE_NAME_SINGULAR' => 'Previsão',
  'LBL_MODULE_TITLE' => 'Previsões',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Não existem Períodos Temporais activos para a Previsão.',
  'LBL_OW_ACCOUNTNAME' => 'Entidade',
  'LBL_OW_DESCRIPTION' => 'Descrição',
  'LBL_OW_MODULE_TITLE' => 'Folha de Registo de Oportunidades',
  'LBL_OW_NEXT_STEP' => 'Próximo Passo',
  'LBL_OW_OPPORTUNITIES' => 'Oportunidade',
  'LBL_OW_PROBABILITY' => 'Probabilidade',
  'LBL_OW_REVENUE' => 'Valor',
  'LBL_OW_TYPE' => 'Tipo',
  'LBL_OW_WEIGHTED' => 'Valor Ponderado',
  'LBL_QC_COMMIT_BEST_CASE' => 'Valor Registado (Melhor Cenário)',
  'LBL_QC_COMMIT_BUTTON' => 'Registado:',
  'LBL_QC_COMMIT_LIKELY_CASE' => 'Valor Registado (Cenário Mais Provável)',
  'LBL_QC_COMMIT_VALUE' => 'Valor Registado:',
  'LBL_QC_COMMIT_WORST_CASE' => 'Valor Registado (Pior Cenário)',
  'LBL_QC_DIRECT_FORECAST' => 'As Minhas Previsões Directas',
  'LBL_QC_HEADER_DELIM' => 'Para',
  'LBL_QC_LAST_BEST_CASE' => 'Último valor registado (Melhor Cenário)',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Valor do Último Registo:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Data do Último Registo:',
  'LBL_QC_LAST_LIKELY_CASE' => 'Último valor registado (Cenário Mais Provável)',
  'LBL_QC_LAST_WORST_CASE' => 'Último valor registado (Pior Cenário)',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Contador de Oportunidades:',
  'LBL_QC_ROLLUP_FORECAST' => 'Os Meus Grupos de Previsão',
  'LBL_QC_ROLL_BEST_VALUE' => 'Revisão do valor registado (Melhor Cenário)',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Valor Registado Revisto',
  'LBL_QC_ROLL_LIKELY_VALUE' => 'Revisão do valor registado (Cenário Mais Provável)',
  'LBL_QC_ROLL_WORST_VALUE' => 'Revisão do valor registado (Pior Cenário)',
  'LBL_QC_TIME_PERIOD' => 'Período Temporal:',
  'LBL_QC_UPCOMING_FORECASTS' => 'As Minhas Previsões',
  'LBL_QC_WEIGHT_VALUE' => 'Valor Ponderado:',
  'LBL_QC_WORKSHEET_BUTTON' => 'Folha de Trabalho',
  'LBL_REPORTS_TO_USER_NAME' => 'Reporta a',
  'LBL_RESET_CHECK' => 'Todas as Folhas de Trabalho para os Períodos Temporais seleccionados e utilizadores autenticados serão removidos, continuar?',
  'LBL_RESET_WOKSHEET' => 'Reiniciar a Folha de Trabalho',
  'LBL_SAVE_WOKSHEET' => 'Gravar Folha de Trabalho',
  'LBL_SEARCH' => 'Seleccionar',
  'LBL_SEARCH_LABEL' => 'Seleccionar',
  'LBL_SVFS_CASCADE' => 'Relatórios em Cascata?',
  'LBL_SVFS_FORECASTDATE' => 'Calendarizar Data de Início',
  'LBL_SVFS_HEADER' => 'Calendarização da Previsão',
  'LBL_SVFS_STATUS' => 'Estado',
  'LBL_SVFS_USER' => 'Para',
  'LBL_TIMEPERIOD_NAME' => 'Período Temporal',
  'LBL_USER_NAME' => 'Nome do Utilizador',
  'LBL_WORST_CASE' => 'Pior Cenário:',
  'LB_FS_BEST_CASE' => 'Melhor Cenário',
  'LB_FS_KEY' => 'Id',
  'LB_FS_LIKELY_CASE' => 'Cenário Mais Provável',
  'LB_FS_WORST_CASE' => 'Pior Cenário',
  'LNK_FORECAST_LIST' => 'Histórico de Previsões',
  'LNK_NEW_OPPORTUNITY' => 'Criar Oportunidade',
  'LNK_NEW_TIMEPERIOD' => 'Criar Período Temporal',
  'LNK_QUOTA' => 'Objectivos',
  'LNK_TIMEPERIOD_LIST' => 'Períodos Temporais',
  'LNK_UPD_FORECAST' => 'Folha de Registo das Previsões',
);

