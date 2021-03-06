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
  'ERR_DELETE_RECORD' => 'Musisz podać numer rekordu, aby usunąć kontrahenta.',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'Wybrana nazwa pracownika',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => 'już istnieje.  Nie można duplikować nazw pracowników. Proszę wybrać inną nazwę.',
  'ERR_LAST_ADMIN_1' => 'Wybrany pracownik "',
  'ERR_LAST_ADMIN_2' => '" jest ostatnim z prawami administratora.  Co najmniej jeden pracownik musi posiadać prawa administratora.',
  'LBL_ADDRESS' => 'Adres',
  'LBL_ADDRESS_CITY' => 'Miejscowość',
  'LBL_ADDRESS_COUNTRY' => 'Kraj',
  'LBL_ADDRESS_INFORMATION' => 'Adres korespondencyjny',
  'LBL_ADDRESS_POSTALCODE' => 'Kod pocztowy',
  'LBL_ADDRESS_STATE' => 'Województwo',
  'LBL_ADDRESS_STREET' => 'Ulica',
  'LBL_ADMIN' => 'Administrator:',
  'LBL_ANY_ADDRESS' => 'Adres:',
  'LBL_ANY_EMAIL' => 'E-mail:',
  'LBL_ANY_PHONE' => 'Telefon:',
  'LBL_AUTHENTICATE_ID' => 'ID autoryzacji',
  'LBL_CITY' => 'Miejscowość:',
  'LBL_COUNTRY' => 'Kraj:',
  'LBL_CREATED_BY_NAME' => 'Stworzone przez',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'Utwórz użytkownika',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'Utwórz użytkownika',
  'LBL_CURRENCY' => 'Waluta:',
  'LBL_DATE_ENTERED' => 'Data wprowadzenia',
  'LBL_DATE_FORMAT' => 'Format daty:',
  'LBL_DATE_MODIFIED' => 'Data modyfikacji',
  'LBL_DEFAULT_TEAM' => 'Domyślny zespół:',
  'LBL_DEFAULT_TEAM_TEXT' => 'Wybiera domyślny zespół dla nowych rekordów',
  'LBL_DELETED' => 'Usunięto',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Czy na pewno mam usunąć pracownika?',
  'LBL_DELETE_USER_CONFIRM' => 'Pracownik jest jednocześnie użytkownikiem. Usunięcie pracownika spowoduje usunięcie rekordu użytkownika, a użytkownik nie będzie miał dostępu do aplikacji. Czy na pewno chcesz usunąć użytkownika?',
  'LBL_DEPARTMENT' => 'Dział:',
  'LBL_DESCRIPTION' => 'Opis',
  'LBL_EMAIL' => 'E-mail:',
  'LBL_EMAIL_ADDRESS' => 'Adres e-mail',
  'LBL_EMAIL_LINK_TYPE' => 'Klient pocztowy',
  'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Klient pocztowy Sugar:</b> Wysyłaj wiadomości poprzez klienta pocztowego aplikacji Sugar.<br><b>Zewnętrzny klient pocztowy:</b> Wysyłaj wiadomości poprzez zewnętrznego klienta pocztowego, np. Microsoft Outlook.',
  'LBL_EMPLOYEE' => 'Pracownicy:',
  'LBL_EMPLOYEE_INFORMATION' => 'Informacje o pracowniku',
  'LBL_EMPLOYEE_NAME' => 'Stanowisko:',
  'LBL_EMPLOYEE_SETTINGS' => 'Ustawienia pracownika',
  'LBL_EMPLOYEE_STATUS' => 'Status zatrudnienia:',
  'LBL_ERROR' => 'Błąd:',
  'LBL_EXT_AUTHENTICATE' => 'Autoryzacja zewnętrzna',
  'LBL_FAVORITE_COLOR' => 'Ulubiony kolor:',
  'LBL_FAX' => 'Faks',
  'LBL_FAX_PHONE' => 'Faks',
  'LBL_FF_CLEAR' => 'Wyczyść',
  'LBL_FIRST_NAME' => 'Imię:',
  'LBL_GROUP' => 'Użytkownik grupowy',
  'LBL_GROUP_USER' => 'Użytkownik grupowy',
  'LBL_HOME_PHONE' => 'Telefon domowy:',
  'LBL_IS_ADMIN' => 'Prawa administratora',
  'LBL_LANGUAGE' => 'Język:',
  'LBL_LAST_NAME' => 'Nazwisko:',
  'LBL_LIST_ACCEPT_STATUS' => 'Status akceptacji',
  'LBL_LIST_ADMIN' => 'Admin',
  'LBL_LIST_DEPARTMENT' => 'Dział',
  'LBL_LIST_DESCRIPTION' => 'Opis',
  'LBL_LIST_EMAIL' => 'E-mail',
  'LBL_LIST_EMPLOYEE_NAME' => 'Stanowisko',
  'LBL_LIST_EMPLOYEE_STATUS' => 'Status zatrudnienia',
  'LBL_LIST_FORM_TITLE' => 'Pracownicy',
  'LBL_LIST_LAST_NAME' => 'Nazwisko',
  'LBL_LIST_NAME' => 'Imię',
  'LBL_LIST_PRIMARY_PHONE' => 'Telefon',
  'LBL_LIST_REPORTS_TO_NAME' => 'Zwierzchnik',
  'LBL_LIST_USER_NAME' => 'Nazwa użytkownika',
  'LBL_LOGIN' => 'Login',
  'LBL_MESSENGER_ID' => 'Identyfikator:',
  'LBL_MESSENGER_TYPE' => 'Typ komunikatora:',
  'LBL_MOBILE_PHONE' => 'Tel. kom.:',
  'LBL_MODIFIED_BY' => 'Zmodyfikowano przez',
  'LBL_MODIFIED_BY_ID' => 'ID modyfikującego',
  'LBL_MODULE_NAME' => 'Pracownicy',
  'LBL_MODULE_NAME_SINGULAR' => 'Pracownik',
  'LBL_MODULE_TITLE' => 'Pracownicy: Strona główna',
  'LBL_MY_TEAMS' => 'Moje zespoły',
  'LBL_NAME' => 'Nazwa:',
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'Utwórz pracownika',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'Utwórz pracownika',
  'LBL_NEW_FORM_TITLE' => 'Utwórz pracownika',
  'LBL_NOTES' => 'Notatki:',
  'LBL_OFFICE_PHONE' => 'Telefon do biura:',
  'LBL_ONLY_ACTIVE' => 'Aktywni pracownicy',
  'LBL_OTHER' => 'Inny:',
  'LBL_OTHER_EMAIL' => 'Dodatkowy e-mail:',
  'LBL_OTHER_PHONE' => 'Inne:',
  'LBL_PASSWORD' => 'Hasło:',
  'LBL_PHOTO' => 'Zdjęcie',
  'LBL_PICTURE_FILE' => 'Zdjęcie',
  'LBL_PORTAL_ONLY' => 'Użytkownik portalu',
  'LBL_PORTAL_ONLY_USER' => 'Użytkownik API portalu',
  'LBL_POSTAL_CODE' => 'Kod pocztowy:',
  'LBL_PRIMARY_ADDRESS' => 'Podstawowy adres:',
  'LBL_PSW_MODIFIED' => 'Ostatnia zmiana hasła',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Wysyłanie powiadomień',
  'LBL_REPORTS_TO' => 'ID zwierzchnika:',
  'LBL_REPORTS_TO_NAME' => 'Zwierzchnik:',
  'LBL_RESET_PREFERENCES' => 'Zastosuj domyślne ustawienia',
  'LBL_SAVED_SEARCH' => 'Opcje widoku',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie pracownika',
  'LBL_SELECT' => 'Wybierz',
  'LBL_SHOW_ON_EMPLOYEES' => 'Wyświetl rekord pracownika',
  'LBL_STATE' => 'Województwo:',
  'LBL_STATUS' => 'Status',
  'LBL_SUGAR_LOGIN' => 'Użytkownik Sugar',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'Hasło wygenerowane przez system',
  'LBL_THEME' => 'Motyw:',
  'LBL_TIMEZONE' => 'Czas bieżący:',
  'LBL_TIME_FORMAT' => 'Format czasu:',
  'LBL_TITLE' => 'Stanowisko:',
  'LBL_USER_HASH' => 'Hasło',
  'LBL_USER_NAME' => 'Nazwa użytkownika:',
  'LBL_USER_TYPE' => 'Typ użytkownika',
  'LBL_WORK_PHONE' => 'Telefon służbowy:',
  'LNK_EDIT_TABS' => 'Edytuj zakładki',
  'LNK_EMPLOYEE_LIST' => 'Pracownicy',
  'LNK_NEW_EMPLOYEE' => 'Utwórz pracownika',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Czy na pewno chces usunąć członkostwo tego pracownika?',
);

