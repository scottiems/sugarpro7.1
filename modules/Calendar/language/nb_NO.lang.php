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
  'LBL_AM' => 'AM',
  'LBL_APPLY_BUTTON' => 'Bruk',
  'LBL_ASSIGNED_TO_NAME' => 'Tilordnet',
  'LBL_BUSY' => 'Opptatt',
  'LBL_CANCEL_BUTTON' => 'Avbryt',
  'LBL_CLOSE_BUTTON' => 'Steng',
  'LBL_CONFIRM_REMOVE' => 'Er du sikker på at du ønsker å fjerne oppføringen?',
  'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Er du sikker på at du ønsker å fjerne alle repeterende oppføringer?',
  'LBL_CONFLICT' => 'Konflikt',
  'LBL_CREATE_CALL' => 'Loggfør oppringningen',
  'LBL_CREATE_MEETING' => 'Planlegg møte',
  'LBL_CREATE_NEW_RECORD' => 'Opprett Aktivitet',
  'LBL_DATE' => 'start dato & tid',
  'LBL_DATE_END_ERROR' => 'Sluttdato er før startdato',
  'LBL_DATE_TIME' => 'Dato og Tid',
  'LBL_DAY' => 'Dag',
  'LBL_DELETE_BUTTON' => 'Slett',
  'LBL_DURATION' => 'Varighet',
  'LBL_EDIT_ALL_RECURRENCES' => 'Endre Alle Gjentakelser',
  'LBL_EDIT_RECORD' => 'Redigér Aktivitet',
  'LBL_EDIT_USERLIST' => 'Brukerliste',
  'LBL_ERROR_LOADING' => 'Feil under lasting',
  'LBL_ERROR_SAVING' => 'Feil under lagring',
  'LBL_FILTER_BY_TEAM' => 'Filtrer brukerliste etter team:',
  'LBL_GENERAL_TAB' => 'Detaljer',
  'LBL_GOTO_DATE' => 'Gå til Dato',
  'LBL_HOURS_ABBREV' => 't',
  'LBL_INFO_DESC' => 'Beskrivelse',
  'LBL_INFO_DUE_DT' => 'Tidsfrist',
  'LBL_INFO_DURATION' => 'Varighet',
  'LBL_INFO_NAME' => 'Emne',
  'LBL_INFO_RELATED_TO' => 'Relatert til',
  'LBL_INFO_START_DT' => 'Startdato',
  'LBL_INFO_TITLE' => 'Tilleggsinformasjon',
  'LBL_LOADING' => 'Laster ......',
  'LBL_MINS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Kalender',
  'LBL_MODULE_TITLE' => 'Kalender',
  'LBL_MONTH' => 'Måned',
  'LBL_NEXT_DAY' => 'Neste dag',
  'LBL_NEXT_MONTH' => 'Neste måned',
  'LBL_NEXT_SHARED' => 'Neste',
  'LBL_NEXT_WEEK' => 'Neste uke',
  'LBL_NEXT_YEAR' => 'Neste år',
  'LBL_NO' => 'Nei',
  'LBL_NO_USER' => 'Ingen treff på feltet: Tildelt',
  'LBL_PARTICIPANTS_TAB' => 'Inviterte',
  'LBL_PM' => 'PM',
  'LBL_PREVIOUS_DAY' => 'Neste dag',
  'LBL_PREVIOUS_MONTH' => 'Forrige måned',
  'LBL_PREVIOUS_SHARED' => 'Forrige',
  'LBL_PREVIOUS_WEEK' => 'Forrige uke',
  'LBL_PREVIOUS_YEAR' => 'Forrige år',
  'LBL_RECURRING_LIMIT_ERROR' => 'Dette repeterende $moduleTitle kan ikke planlegges fordi den overskrider grensen på maks $limit gjentakelser.',
  'LBL_REFRESH' => 'Oppdatér',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Slett Alle Gjentakelser',
  'LBL_REPEAT_COUNT' => 'Antall gjentakelser',
  'LBL_REPEAT_DOW' => 'På',
  'LBL_REPEAT_END' => 'Slutt',
  'LBL_REPEAT_END_AFTER' => 'Etter',
  'LBL_REPEAT_END_BY' => 'Av',
  'LBL_REPEAT_INTERVAL' => 'Hver',
  'LBL_REPEAT_OCCURRENCES' => 'gjentakelser',
  'LBL_REPEAT_TAB' => 'Gjentakelse',
  'LBL_REPEAT_TYPE' => 'Repetér',
  'LBL_REPEAT_UNTIL' => 'Gjenta Til',
  'LBL_SAVE_BUTTON' => 'Lagre',
  'LBL_SAVING' => 'Lagrer ......',
  'LBL_SCHEDULED' => 'Planlagt',
  'LBL_SELECT_USERS' => 'Velg brukere til kalanderen',
  'LBL_SENDING_INVITES' => 'Lagrer og sender Invitasjoner .....',
  'LBL_SEND_INVITES' => 'Lagre & Send Invitasjoner',
  'LBL_SETTINGS' => 'Innstillinger',
  'LBL_SETTINGS_CALLS_SHOW' => 'Vis Anrop:',
  'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Vis tidsluker i Dag og Uke-visninger:',
  'LBL_SETTINGS_TASKS_SHOW' => 'Vis Oppgaver:',
  'LBL_SETTINGS_TIME_ENDS' => 'Sluttid:',
  'LBL_SETTINGS_TIME_STARTS' => 'Starttid:',
  'LBL_SETTINGS_TITLE' => 'Innstillinger',
  'LBL_SHARED' => 'Felles',
  'LBL_SHARED_CAL_TITLE' => 'Felles kalender',
  'LBL_STATUS' => 'Status',
  'LBL_STYLE_ADVANCED' => 'Avansert',
  'LBL_STYLE_BASIC' => 'Grunnleggende',
  'LBL_SUBJECT' => 'Emne',
  'LBL_USERS' => 'Bruker',
  'LBL_USER_CALENDARS' => 'Brukerkalendere',
  'LBL_WEEK' => 'Uke',
  'LBL_YEAR' => 'År',
  'LBL_YES' => 'Ja',
  'LNK_CALL_LIST' => 'Oppringninger',
  'LNK_IMPORT_CALLS' => 'Importer samtaler',
  'LNK_IMPORT_MEETINGS' => 'Importer møter',
  'LNK_IMPORT_TASKS' => 'Importer oppgaver',
  'LNK_MEETING_LIST' => 'Møter',
  'LNK_NEW_APPOINTMENT' => 'Opprett avtale',
  'LNK_NEW_CALL' => 'Opprett oppringning',
  'LNK_NEW_MEETING' => 'Opprett møte',
  'LNK_NEW_TASK' => 'Opprett oppgave',
  'LNK_TASK_LIST' => 'Oppgaver',
  'LNK_VIEW_CALENDAR' => 'I dag',
  'NOTICE_DURATION_TIME' => 'Varigheten i tid må være større enn 0',
);

$mod_list_strings = array (
  'dom_cal_month' => 
  array (
    1 => 'Jan',
    2 => 'Feb',
    3 => 'Mar',
    4 => 'Apr',
    5 => 'Mai',
    6 => 'Jun',
    7 => 'Jul',
    8 => 'Aug',
    9 => 'Sep',
    10 => 'Okt',
    11 => 'Nov',
    12 => 'Des',
  ),
  'dom_cal_month_long' => 
  array (
    1 => 'Januar',
    2 => 'Februar',
    3 => 'Mars',
    4 => 'April',
    5 => 'Mai',
    6 => 'Juni',
    7 => 'Juli',
    8 => 'August',
    9 => 'September',
    10 => 'Oktober',
    11 => 'November',
    12 => 'Desember',
  ),
  'dom_cal_weekdays' => 
  array (
    1 => 'Man',
    2 => 'Tir',
    3 => 'Ons',
    4 => 'Tor',
    5 => 'Fre',
    6 => 'Lør',
  ),
  'dom_cal_weekdays_long' => 
  array (
    1 => 'Mandag',
    2 => 'Tirsdag',
    3 => 'Onsdag',
    4 => 'Torsdag',
    5 => 'Fredag',
    6 => 'Lørdag',
  ),
);
