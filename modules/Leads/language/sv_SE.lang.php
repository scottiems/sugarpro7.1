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
  'ERR_DELETE_RECORD' => 'Ett objektnummer måste specificeras för att kunna radera leadet.',
  'LBL_ACCOUNT_DESCRIPTION' => 'Organisationsbeskrivning',
  'LBL_ACCOUNT_ID' => 'Organisations ID',
  'LBL_ACCOUNT_NAME' => 'Organisationsnamn:',
  'LBL_ACTIVITIES_COPY' => 'Kopiera Aktiviteter till',
  'LBL_ACTIVITIES_COPY_HELP' => 'Välj vilket protokoll att skapa kopior Leadens av aktiviteter i. Nya Arbetsuppgifter, Samtal, Möten, Anteckningar och Epost kommer skapas för varje valt protokoll. Epost kommer bli relaterade till de valda protokollen.',
  'LBL_ACTIVITIES_MOVE' => 'Fler Aktiviteter till',
  'LBL_ACTIVITIES_MOVE_HELP' => 'Välj vilket protokoll att skicka Leadens aktiviteter till. Arbetsuppgifter, Samtal, Möten, Anteckningar och Epost kommer flyttas till det valda protokollet.',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
  'LBL_ADDRESS_INFORMATION' => 'Adressinformation',
  'LBL_ADD_BUSINESSCARD' => 'Lägg till visitkort',
  'LBL_ALTERNATE_ADDRESS' => 'Annan adress:',
  'LBL_ALT_ADDRESS' => 'Annan adress:',
  'LBL_ALT_ADDRESS_CITY' => 'Alternativ adress stad:',
  'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativ adress land:',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativ adress postnummer:',
  'LBL_ALT_ADDRESS_STATE' => 'Alternativ adress stat:',
  'LBL_ALT_ADDRESS_STREET' => 'Alternativ adress gata:',
  'LBL_ALT_ADDRESS_STREET_2' => 'Alternativ adress gata 2:',
  'LBL_ALT_ADDRESS_STREET_3' => 'Alterantiv adress gata 3:',
  'LBL_ANY_ADDRESS' => 'Någon adress:',
  'LBL_ANY_EMAIL' => 'Någon epost:',
  'LBL_ANY_PHONE' => 'Någon telefon:',
  'LBL_ASSIGNED_TO_ID' => 'Tilldelad användare:',
  'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',
  'LBL_ASSISTANT' => 'Assistent',
  'LBL_ASSISTANT_PHONE' => 'Assistents telefon',
  'LBL_BACKTOLEADS' => 'Tillbaka till leads',
  'LBL_BIRTHDATE' => 'Födelsedag:',
  'LBL_BUSINESSCARD' => 'Konvertera lead',
  'LBL_CAMPAIGN' => 'Kampanj:',
  'LBL_CAMPAIGNS' => 'Kampanjer',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampanjer',
  'LBL_CAMPAIGN_ID' => 'Kampanj Id',
  'LBL_CAMPAIGN_LEAD' => 'Kampanjer',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanjer',
  'LBL_CITY' => 'Stad:',
  'LBL_CLICK_TO_RETURN' => 'Tillbaka till Portal',
  'LBL_CONTACT' => 'Lead:',
  'LBL_CONTACT_ID' => 'Kontakt ID',
  'LBL_CONTACT_INFORMATION' => 'Lead information',
  'LBL_CONTACT_NAME' => 'Lead namn:',
  'LBL_CONTACT_OPP_FORM_TITLE' => 'Lead-Affärsmöjlighet',
  'LBL_CONTACT_ROLE' => 'Roll:',
  'LBL_CONVERTED' => 'Konverterad',
  'LBL_CONVERTED_ACCOUNT' => 'Konverterad organisation:',
  'LBL_CONVERTED_CONTACT' => 'Konverterad kontakt:',
  'LBL_CONVERTED_OPP' => 'Konverterad affärsmöjlighet',
  'LBL_CONVERTLEAD' => 'Konvertera lead',
  'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
  'LBL_CONVERTLEAD_TITLE' => 'Konvertera lead [Alt+V]',
  'LBL_CONVERTLEAD_WARNING' => 'Varning: Statusen har redan den status du försöker ändra till. Kontakt och/eller Konto posterna kan redan ha skapats från ditt lead. Om du önskar fortsätta ändra statusen, klicka "Spara". För att gå tillbaka utan att uppdatera, klicka "Avbryt".',
  'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Möjlig kontakt:',
  'LBL_CONVERT_ADD_MODULE' => 'Lägg till modul',
  'LBL_CONVERT_COPY' => 'Kopiera data',
  'LBL_CONVERT_DELETE' => 'Radera',
  'LBL_CONVERT_EDIT' => 'Redigera',
  'LBL_CONVERT_EDIT_LAYOUT' => 'Ändra konverterings layout',
  'LBL_CONVERT_MODULE_NAME' => 'Modul',
  'LBL_CONVERT_REQUIRED' => 'Obligatorisk',
  'LBL_CONVERT_SELECT' => 'Tillåt val',
  'LBL_COPY_TIP' => 'Om checkad, fält från det lead som ska kopieras kommer att kopieras till fält med samma namn i nyligen skapade poster.',
  'LBL_COUNTRY' => 'Land:',
  'LBL_CREATE' => 'Skapa',
  'LBL_CREATED' => 'Skapad av',
  'LBL_CREATED_ACCOUNT' => 'Skapade ny organisation',
  'LBL_CREATED_CALL' => 'Skapade nytt telefonsamtal',
  'LBL_CREATED_CONTACT' => 'Skapade ny kontakt',
  'LBL_CREATED_ID' => 'Skapad av Id',
  'LBL_CREATED_MEETING' => 'Skapade nytt möte',
  'LBL_CREATED_NEW' => 'Skapade ny',
  'LBL_CREATED_OPPORTUNITY' => 'Skapade ny affärsmöjlighet',
  'LBL_CREATED_USER' => 'Skapad användare',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Leads',
  'LBL_DELETE_TIP' => 'Ta bort denna modul från konverterings layouten.',
  'LBL_DEPARTMENT' => 'Avdelning:',
  'LBL_DESCRIPTION' => 'Beskrivning',
  'LBL_DESCRIPTION_INFORMATION' => 'Beskrivande information',
  'LBL_DO_NOT_CALL' => 'Ring inte:',
  'LBL_DUPLICATE' => 'Liknande leads',
  'LBL_EDITLAYOUT' => 'Redigera layout',
  'LBL_EDIT_INLINE' => 'Redigera',
  'LBL_EDIT_TIP' => 'Ändra konverterings layouten för denna modul.',
  'LBL_EMAIL_ADDRESS' => 'Epost:',
  'LBL_EMAIL_OPT_OUT' => 'Önskar ej utskick:',
  'LBL_ENTERDATE' => 'Fyll i datum',
  'LBL_EXISTING_ACCOUNT' => 'Använde en existerande organisation',
  'LBL_EXISTING_CONTACT' => 'Använde en existerande kontakt',
  'LBL_EXISTING_OPPORTUNITY' => 'Använde en existerande affärsmöjlighet',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tilldelad Användar ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Tilldelat Användarnamn',
  'LBL_EXPORT_CREATED_BY' => 'Skapad av ID',
  'LBL_EXPORT_EMAIL2' => 'Annan Epostadress',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Ändrad av ID',
  'LBL_EXPORT_PHONE_MOBILE' => 'Mobiltelefon',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_FIRST_NAME' => 'Förnamn:',
  'LBL_FULL_NAME' => 'Namn:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
  'LBL_HOME_PHONE' => 'Hemtelefon:',
  'LBL_IMPORT_VCARD' => 'Importera vCard',
  'LBL_IMPORT_VCARDTEXT' => 'Skapa ett lead automatiskt vid import av vCard från ditt filsystem.',
  'LBL_INVALID_EMAIL' => 'Ogiltig epostadress:',
  'LBL_INVITEE' => 'Direkt rapporter',
  'LBL_LAST_NAME' => 'Efternamn',
  'LBL_LEAD_SOURCE' => 'Lead källa:',
  'LBL_LEAD_SOURCE_DESCRIPTION' => 'Lead källa, beskrivning:',
  'LBL_LIST_ACCEPT_STATUS' => 'Acceptera Status',
  'LBL_LIST_ACCOUNT_NAME' => 'Organisationsnamn',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad användare',
  'LBL_LIST_CONTACT_NAME' => 'Lead namn',
  'LBL_LIST_CONTACT_ROLE' => 'Roll',
  'LBL_LIST_DATE_ENTERED' => 'Skapande datum',
  'LBL_LIST_EMAIL_ADDRESS' => 'Epost',
  'LBL_LIST_FIRST_NAME' => 'Förnamn',
  'LBL_LIST_FORM_TITLE' => 'Lista leads',
  'LBL_LIST_LAST_NAME' => 'Efternamn',
  'LBL_LIST_LEAD_SOURCE' => 'Lead källa',
  'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Lead källa, beskrivning',
  'LBL_LIST_MY_LEADS' => 'Mina leads',
  'LBL_LIST_NAME' => 'Namn',
  'LBL_LIST_PHONE' => 'Kontorstelefon',
  'LBL_LIST_REFERED_BY' => 'Refererad av',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_TITLE' => 'Titel',
  'LBL_LOADING' => 'Laddar',
  'LBL_MESSAGE' => 'Vänligen fyll i din information här under. Information och/eller en organisation kommer att skapas för din<br /> Information and/or an account will be created for you ansökan.',
  'LBL_MOBILE_PHONE' => 'Mobil:',
  'LBL_MODIFIED' => 'Uppdaterad av:',
  'LBL_MODIFIED_ID' => 'Uppdaterad av Id',
  'LBL_MODIFIED_USER' => 'Ändrad användare',
  'LBL_MODULE_NAME' => 'Leads',
  'LBL_MODULE_TIP' => 'Modulen att skapa nya poster i.',
  'LBL_MODULE_TITLE' => 'Leads: Hem',
  'LBL_NAME' => 'Namn',
  'LBL_NEW_FORM_TITLE' => 'Nytt lead',
  'LBL_NEW_PORTAL_PASSWORD' => 'Nytt portallösenord:',
  'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Notis: Den nuvarande konvertera leads vyn innehåller specialfält. När du skräddarsyr konvertera leads vyn i Studio första gången så måste du addera specialfält till layouten. Specialfält kommer inte att dyka upp automatiskt i layouten som de gjorde tidigare.',
  'LBL_OFFICE_PHONE' => 'Kontorstelefon',
  'LBL_OPPORTUNITY_AMOUNT' => 'Affärsmöjlighet summa',
  'LBL_OPPORTUNITY_ID' => 'Affärsmöjlighet ID',
  'LBL_OPPORTUNITY_NAME' => 'Namn på affärsmöjligheten:',
  'LBL_OPP_NAME' => 'Namn på affärsmöjligheten:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Annan epost:',
  'LBL_OTHER_PHONE' => 'Annan telefon:',
  'LBL_PHONE' => 'Telefon:',
  'LBL_PHONE_FAX' => 'Telefon fax',
  'LBL_PHONE_HOME' => 'Telefon Hem',
  'LBL_PHONE_MOBILE' => 'Telefon Mobil',
  'LBL_PHONE_OTHER' => 'Telefon Övrig',
  'LBL_PHONE_WORK' => 'Telefon Jobb',
  'LBL_PORTAL_ACTIVE' => 'Portal aktiv:',
  'LBL_PORTAL_APP' => 'Portal applikation:',
  'LBL_PORTAL_INFORMATION' => 'Portal information',
  'LBL_PORTAL_NAME' => 'Portalnamn:',
  'LBL_PORTAL_PASSWORD_ISSET' => 'Portallösenord är satt:',
  'LBL_POSTAL_CODE' => 'Postnummer:',
  'LBL_PRIMARY_ADDRESS' => 'Primär adress:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Primär adress stad:',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primär adress land:',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primär adress postnummer:',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Primär adress stat:',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Primär adress gata:',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primär adress gata 2:',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primär adress gata 3:',
  'LBL_PROSPECT_LIST' => 'Prospektlista',
  'LBL_REFERED_BY' => 'Refererad av:',
  'LBL_REGISTRATION' => 'Registration',
  'LBL_REPORTS_FROM' => 'Rapporter Från:',
  'LBL_REPORTS_TO' => 'Rapporterar till:',
  'LBL_REPORTS_TO_ID' => 'Rapporterar till ID:',
  'LBL_REQUIRED_TIP' => 'Obligatorisk modul måste först skapas eller väljas innan ett lead kan konverteras.',
  'LBL_SALUTATION' => 'Titel:',
  'LBL_SAVED' => 'Tack för din registrering. Din organisation kommer att skapas och någon kommer kontakta dig inom kort.',
  'LBL_SEARCH_FORM_TITLE' => 'Sök lead',
  'LBL_SELECT' => '<b>OR</B> Välj',
  'LBL_SELECTION_TIP' => 'Moduler med ett relationsfält i kontakter kan väljas istället för skapas under lead konverteringsprocessen.',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Välj markerade leads',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Välj markerade leads',
  'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' => 'Vi beklagar, servern är tyvärr ej nåbar för tillfället, var god försök igen senare.',
  'LBL_STATE' => 'Stat:',
  'LBL_STATUS' => 'Status:',
  'LBL_STATUS_DESCRIPTION' => 'Status beskrivning:',
  'LBL_STREET' => 'Gata',
  'LBL_TARGET_BUTTON_KEY' => 'T',
  'LBL_TARGET_BUTTON_LABEL' => 'Targeted',
  'LBL_TARGET_BUTTON_TITLE' => 'Targeted',
  'LBL_TARGET_OF_CAMPAIGNS' => 'Lyckad kampanj:',
  'LBL_THANKS_FOR_SUBMITTING_LEAD' => 'Tack för din prenumeration.',
  'LBL_TITLE' => 'Titel:',
  'LBL_VCARD' => 'vCard',
  'LBL_VIEW_FORM_TITLE' => 'Lead vy',
  'LBL_WEBSITE' => 'Hemsida',
  'LNK_IMPORT_LEADS' => 'Importera leads',
  'LNK_IMPORT_VCARD' => 'Skapa från vCard',
  'LNK_LEAD_LIST' => 'Leads',
  'LNK_LEAD_REPORTS' => 'Lead rapporter',
  'LNK_NEW_ACCOUNT' => 'Skapa organisation',
  'LNK_NEW_APPOINTMENT' => 'Skapa händelse',
  'LNK_NEW_CALL' => 'Logga samtal',
  'LNK_NEW_CASE' => 'Skapa ärende',
  'LNK_NEW_CONTACT' => 'Skapa kontakt',
  'LNK_NEW_LEAD' => 'Skapa lead',
  'LNK_NEW_MEETING' => 'Schemalägg möte',
  'LNK_NEW_NOTE' => 'Skapa anteckning eller bilaga',
  'LNK_NEW_OPPORTUNITY' => 'Skapa affärsmöjlighet',
  'LNK_NEW_TASK' => 'Skapa uppgift',
  'LNK_SELECT_ACCOUNT' => 'Välj organisation',
  'LNK_SELECT_ACCOUNTS' => '<B>ELLER</B> Välj konto',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Kopiera alternativ adress till primär adress',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Kopiera primär adress till alternativ adress',
  'NTC_DELETE_CONFIRMATION' => 'Är du säker på att du vill radera posten?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'När en affärsmöjlighet skapas krävs en organisation.\\n Var god skapa en ny organisation eller välj en existerande.',
  'NTC_REMOVE_CONFIRMATION' => 'Är du säker på att du vill ta bort leadet från ärendet?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Är du säker på att du vill ta bort det här objektet som en direkt rapport?',
  'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
);
