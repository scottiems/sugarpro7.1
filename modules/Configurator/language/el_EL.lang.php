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
  'ADVANCED' => 'Προηγμένη',
  'CURRENT_LOGO' => 'Τρέχον Λογότυπο:',
  'CURRENT_LOGO_HELP' => 'Αυτό το λογότυπο εμφανίζεται στην αριστερή γωνία του υποσέλιδου της εφαρμογής Sugar.',
  'DEFAULT_CURRENCY' => 'Προεπιλογή νομίσματος',
  'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 κωδικός νομίσματος',
  'DEFAULT_CURRENCY_NAME' => 'Όνομα νομίσματος',
  'DEFAULT_CURRENCY_SYMBOL' => 'Σύμβολο νομίσματος',
  'DEFAULT_DATE_FORMAT' => 'Προεπιλογή μορφής ημερομηνίας',
  'DEFAULT_DECIMAL_SEP' => 'Δεκαδικό σύμβολο',
  'DEFAULT_LANGUAGE' => 'Προεπιλογή Γλώσσας',
  'DEFAULT_NUMBER_GROUPING_SEP' => '1000ς διαχωριστής',
  'DEFAULT_OC_STATUS' => 'Ενεργοποίηση Αποσυνδεδεμένου Client από προεπιλογή',
  'DEFAULT_SYSTEM_SETTINGS' => 'Διεπαφή Χειριστή',
  'DEFAULT_THEME' => 'Προεπιλογή θέματος',
  'DEFAULT_TIME_FORMAT' => 'Προεπιλογή μορφής ώρας',
  'DEVELOPER_MODE' => 'Λειτουργία Προγραμματιστή',
  'DISPLAY_RESPONSE_TIME' => 'Εμφάνιση χρόνου απόκρισης του διακομιστή',
  'ERR_ALERT_FILE_UPLOAD' => 'Λάθος κατά την φόρτωση της εικόνας.',
  'ERR_DELETE_CORE_FILE' => 'ΣΦΑΛΜΑ: Δεν είναι δυνατό να διαγραφεί η βασική γραμματοσειρά.',
  'ERR_EZPDF_DISABLE' => 'Προειδοποίηση: Η κατηγορία EZPDF είναι εκτός λειτουργίας από τον πίνακα διαμόρφωσης και ορίστηκε ως κατηγορία PDF. Παρακαλώ ¨Αποθήκευση" αυτήν την μορφή για να θέσει TCPDF ως κατηγορία PDF και να επιστρέψει σε μία σταθερή κατηγορία.',
  'ERR_FONT_ALREADY_EXIST' => 'ΣΦΑΛΜΑ: Αυτή η γραμματοσειρά υπάρχει ήδη. Επαναφορά...',
  'ERR_FONT_EMPTYFILE' => 'ΣΦΑΛΜΑ: Άδειο όνομα αρχείου!',
  'ERR_FONT_FILE_DO_NOT_EXIST' => 'δεν υπάρχει ή δεν είναι κατάλογος.',
  'ERR_FONT_MAKEFONT' => 'ΣΦΑΛΜΑ: Λάθος Γραμματοσειρά',
  'ERR_FONT_NOT_WRITABLE' => 'δεν είναι εγγράψιμη:',
  'ERR_FONT_UNKNOW_TYPE' => 'ΣΦΑΛΜΑ: Άγνωστος τύπος γραμματοσειράς:',
  'ERR_LOADFONTFILE' => 'ΣΦΑΛΜΑ: Λήψη Γραμματοσειράς Αρχείου!',
  'ERR_MISSING_CIDINFO' => 'Το πεδίο πληροφορίας CID δεν μπορεί να είναι κενό.',
  'ERR_NO_CUSTOM_FONT_PATH' => 'ΣΦΑΛΜΑ: Δεν βρέθηκε προσαρμοσμένη διαδρομή γραμματοσειράς διαθέσιμη!',
  'ERR_NO_FONT_PATH' => 'ΣΦΑΛΜΑ: Δεν βρέθηκε διαδρομή γραμματοσειράς διαθέσιμη!',
  'ERR_PDF_NO_UPLOAD' => 'Λάθος κατά την αποστολή της γραμματοσειράς ή μετρικό αρχείο.',
  'HEAD_MAGNIFICATION' => 'Μεγέθυνση Επικεφαλίδας',
  'HEAD_MAGNIFICATION_INFO' => 'Μεγέθυνση συντελεστή για τίτλους.',
  'IMAGES' => 'Λογότυπα',
  'JS_ALERT_PDF_WRONG_EXTENSION' => 'Αυτό το αρχείο δεν έχει μία καλή επέκταση αρχείου.',
  'K_CELL_HEIGHT_RATIO' => 'Αναλογία Ύψους Κελιών',
  'K_CELL_HEIGHT_RATIO_INFO' => 'Εάν το ύψος ενός κελιού είναι μικρότερο από (Ύψος Γραμματοσειράς χ Αναλογία Ύψος Κελιού), τότε (Ύψος Γραμματοσειράς χ Αναλογία Ύψος Κελιού) χρησιμοποιείται ως ύψος κελιού.<br />(Ύψος Γραμματοσειράς χ Αναλογία Ύψος Κελιού) χρησιμοποιείται επίσης ως ύψος του κελιού όταν δεν είναι έχει καθοριστεί κανένα ύψος.',
  'K_SMALL_RATIO' => 'Μικρός Συντελεστής Γραμματοσειράς',
  'K_SMALL_RATIO_INFO' => 'Μείωση συντελεστή για μικρή γραμματοσειρά.',
  'K_TITLE_MAGNIFICATION' => 'Μεγέθυνση Τίτλου',
  'K_TITLE_MAGNIFICATION_INFO' => 'Μεγέθυνση Τίτλου κύριο μέγεθος γραμματοσειράς.',
  'LBL_ADDFONTRESULT_TITLE' => 'Αποτέλεσμα της διαδικασίας προσθήκης γραμματοσειράς',
  'LBL_ADDFONT_TITLE' => 'Προσθήκη Γραμματοσειράς PDF',
  'LBL_ADD_FONT' => 'Προσθήκη γραμματοσειράς',
  'LBL_ADD_FONT_BUTTON' => 'Προσθήκη',
  'LBL_ADMIN_WIZARD' => 'Οδηγός Διαχειριστή',
  'LBL_ALERT_JPG_IMAGE' => 'Η μορφή του αρχείου της εικόνας πρέπει να είναι JPEG. Ανεβάστε ένα νέο αρχείο με την επέκταση αρχείου .jpg.',
  'LBL_ALERT_SIZE_RATIO' => 'Η αναλογία διάστασης της εικόνας θα πρέπει να είναι μεταξύ 1:1 και 10:1. Η εικόνα θα επαναταξινομηθεί.',
  'LBL_ALERT_SIZE_RATIO_QUOTES' => 'Η αναλογία διάστασης της εικόνας θα πρέπει να είναι μεταξύ 3:1 και 20:1. Φορτώστε ένα νέο αρχείο με αυτήν την αναλογία.',
  'LBL_ALERT_TYPE_IMAGE' => 'Η μορφή του αρχείου της εικόνας πρέπει να είναι JPEG ή PNG. Ανεβάστε ένα νέο αρχείο με την επέκταση αρχείου .jpg ή .png.',
  'LBL_ALL' => 'Όλες',
  'LBL_ALLOW_DEFAULT_SELECTION' => 'Επιτρέπει στους χειριστές να χρησιμοποιούν αυτόν τον λογαριασμό για τα εξερχόμενα email:',
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Με την επιλογή αυτή, όλοι οι χειριστές θα είναι σε θέση να στείλουν τα emails, χρησιμοποιώντας τον ίδιο εξερχόμενο πάροχο ταχυδρομείου που χρησιμοποιείται για να στείλει τις ανακοινώσεις και τις ειδοποιήσεις των συστημάτων. Εάν δεν επιλεχθεί, οι χειριστές μπορούν ακόμα να χρησιμοποιήσουν τον εξερχόμενο κεντρικό υπολογιστή ταχυδρομείου,  μετά την παροχή των πληροφοριών του λογαριασμού τους.',
  'LBL_ALLOW_USER_TABS' => 'Επιτρέπει στους χειριστές να κρύψει τις καρτέλες',
  'LBL_BACK' => 'Πίσω',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Επιλέξτε τον Πάροχο του Email σας:',
  'LBL_CONFIGURE_SETTINGS_TITLE' => 'Ρυθμίσεις Συστήματος',
  'LBL_CONFIG_AJAX' => 'Διαμόρφωση AJAX Περιβάλλον Εργασίας Χειριστή',
  'LBL_CONFIG_AJAX_DESC' => 'Ενεργοποίηση ή απενεργοποίηση της χρήσης του AJAX UI για συγκεκριμένες ενότητες.',
  'LBL_DELETE' => 'Διαγραφή',
  'LBL_DISALBE_CONVERT_LEAD' => 'Απενεργοποίηση δυνατότητας μετατροπής δυνητικού πελάτη',
  'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Αν ο δυνητικός πελάτης έχει ήδη μετατραπεί, η ενεργοποίηση αυτής της επιλογής θα αφαιρέσει την δυνατότητα μετατροπής δυνητικού πελάτη.',
  'LBL_DISPLAYING_LOG' => 'Εμφάνιση Καταγραφής',
  'LBL_ENABLE_ACTION_MENU' => 'Εμφάνιση μενού ενεργειών',
  'LBL_ENABLE_ACTION_MENU_DESC' => 'Επιλέξτε να σας εμφανίσει Προβολή Λεπτομερειών και τις ενέργειες υποπινάκων, μέσα στο αναδυόμενο μενού. Εάν δεν επιλεχθεί, οι ενέργειες θα εμφανιστούν ως χωριστά κουμπιά.',
  'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Εμφάνιση σχετικών επαφών, emails στο Ιστορικό του υποπίνακα για τις ενότητες',
  'LBL_ENABLE_MAILMERGE' => 'Ενεργοποίηση Συγχώνευσης Ταχυδρομείου;',
  'LBL_EXCHANGE_LOGO' => 'Exchange',
  'LBL_EXCHANGE_SMTPPASS' => 'Κωδικός Πρόσβασης Exchange:',
  'LBL_EXCHANGE_SMTPPORT' => 'Θύρα Exchange Server:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
  'LBL_EXCHANGE_SMTPUSER' => 'Όνομα Χειριστή Exchange:',
  'LBL_FONTMANAGER_BUTTON' => 'PDF Διαχείριση Γραμματοσειράς',
  'LBL_FONTMANAGER_TITLE' => 'PDF Διαχείριση Γραμματοσειράς',
  'LBL_FONT_BOLD' => 'Έντονη',
  'LBL_FONT_BOLDITALIC' => 'Έντονη/Πλάγια',
  'LBL_FONT_ITALIC' => 'Πλάγια',
  'LBL_FONT_LIST_CIDINFO' => 'Πληροφορία CID',
  'LBL_FONT_LIST_CIDINFO_INFO' => 'Περισσότερη βοήθεια : www.tcpdf.org',
  'LBL_FONT_LIST_EMBEDDED' => 'Ενσωματωμένη',
  'LBL_FONT_LIST_EMBEDDED_INFO' => 'Έλεγχος για να ενσωματώσει την γραμματοσειρά στο αρχείο PDF',
  'LBL_FONT_LIST_ENC' => 'Κωδικοποίηση',
  'LBL_FONT_LIST_FILENAME' => 'Όνομα Αρχείου',
  'LBL_FONT_LIST_FILESIZE' => 'Μέγεθος Γραμματοσειράς(KB)',
  'LBL_FONT_LIST_NAME' => 'Όνομα',
  'LBL_FONT_LIST_STYLE' => 'Στυλ',
  'LBL_FONT_LIST_STYLE_INFO' => 'Στυλ γραμματοσειράς',
  'LBL_FONT_LIST_TYPE' => 'Τύπος',
  'LBL_FONT_MOVE_DEFFILE' => 'Ορισμός γραμματοσειράς αρχείου κίνηση σε :',
  'LBL_FONT_MOVE_FILE' => 'Γραμματοσειρά αρχείου κίνηση σε :',
  'LBL_FONT_REGULAR' => 'Κανονική',
  'LBL_FONT_TYPE_CID0' => 'CID-0',
  'LBL_FONT_TYPE_CORE' => 'Πυρήνας',
  'LBL_FONT_TYPE_TRUETYPE' => 'Αληθινός Τύπος',
  'LBL_FONT_TYPE_TRUETYPEU' => 'Αληθινός Τύπος Κώδικα',
  'LBL_FONT_TYPE_TYPE1' => 'Τύπος 1',
  'LBL_GMAIL_LOGO' => 'Λογότυπο Gmail',
  'LBL_GMAIL_SMTPPASS' => 'Κωδικός Πρόσβασης Gmail:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail Διεύθυνση Email:',
  'LBL_IGNORE_SELF' => 'Αγνοήστε Αυτό',
  'LBL_IMG_RESIZED' => '(αλλαγή μεγέθους για εμφάνιση)',
  'LBL_IMPORT_MAX_RECORDS' => 'Εισαγωγή - Μέγιστος αριθμός Σειρών:',
  'LBL_IMPORT_MAX_RECORDS_HELP' => 'Καθορίστε πόσες γραμμές επιτρέπονται μέσα στα αρχεία εισαγωγών. Εάν ο αριθμός των γραμμών σε ένα αρχείο εισαγωγής υπερβαίνει τον αριθμό αυτόν, ο χειριστής θα πρέπει να ειδοποιηθεί. Εάν δεν υπάρχει εγγεγραμμένος αριθμός, επιτρέπεται απεριόριστος αριθμός γραμμών.',
  'LBL_IT_WILL_BE_IGNORED' => 'Θα αγνοηθεί',
  'LBL_JS_CONFIRM_DELETE_FONT' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτήν την γραμματοσειρά;',
  'LBL_LDAP_ADMIN_PASSWORD' => 'Κωδικός Πρόσβασης:',
  'LBL_LDAP_ADMIN_USER' => 'Όνομα Χειριστή:',
  'LBL_LDAP_ADMIN_USER_DESC' => 'Χρησιμοποιείται για την αναζήτηση του χειριστή του Sugar. [Μπορεί να χρειαστεί να διαθέτει πλήρη προσόντα] θα δεσμευθεί στα ανώνυμα εφόσον δεν προβλεφθεί.',
  'LBL_LDAP_AUTHENTICATION' => 'Πιστοποίηση',
  'LBL_LDAP_AUTHENTICATION_DESC' => 'Δεσμεύστε τον server LDAP χρησιμοποιώντας τα συγκεκριμένα πιστοποιητικά χειριστών',
  'LBL_LDAP_AUTO_CREATE_USERS' => 'Αυτόματη Δημιουργία Χειριστών:',
  'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Εάν ένας επικυρωμένος χειριστής δεν υπάρχει, ένας θα δημιουργηθεί στο Sugar.',
  'LBL_LDAP_BIND_ATTRIBUTE' => 'Δέσμευση Ιδιότητας',
  'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Για Δέσμευση των LDAP Παραδείγματα Χειριστών:[AD: userPrincipalName] [openLDAP: userPrincipalName] [Mac OS X: uid]',
  'LBL_LDAP_ENABLE' => 'Ενεργοποίηση LDAP',
  'LBL_LDAP_ENC_KEY' => 'Κλειδί Κρυπτογράφησης:',
  'LBL_LDAP_ENC_KEY_DESC' => 'Για SOAP πιστοποίηση όταν χρησιμοποιείται LDAP.',
  'LBL_LDAP_GROUP_ATTR' => 'Ιδιότητα Γκρουπ:',
  'LBL_LDAP_GROUP_ATTR_DESC' => 'Το χαρακτηριστικό του Γκρουπ που θα χρησιμοποιηθεί για το φιλτράρισμα κατά την Ιδιότητα Χειριστή Παράδειγμα:: <em>memberUid</em>',
  'LBL_LDAP_GROUP_DN' => 'DN Γκρουπ:',
  'LBL_LDAP_GROUP_DN_DESC' => 'Παράδειγμα: <em>ou=groups,dc=example,dc=com</em>',
  'LBL_LDAP_GROUP_MEMBERSHIP' => 'Μέλη Γκρουπ:',
  'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Οι χειριστές πρέπει να είναι μέλη ενός συγκεκριμένου γκρουπ',
  'LBL_LDAP_GROUP_NAME' => 'Όνομα Γκρουπ:',
  'LBL_LDAP_GROUP_NAME_DESC' => 'Παράδειγμα cn=sugarcrm',
  'LBL_LDAP_GROUP_USER_ATTR' => 'Ιδιότητα Χειριστή:',
  'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Το μοναδικό αναγνωριστικό του προσώπου που θα χρησιμοποιηθεί για να ελέγξετε αν είναι μέλος του γκρουπ Παράδειγμα: <em>uid</em>',
  'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Ιδιότητα Σύνδεσης',
  'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Για Αναζήτηση του Χειριστή LDAP Παραδείγματα: [AD: userPrincipalName] [openLDAP: dn] [Mac OS X: dn]',
  'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
  'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Παράδειγμα: ldap.example.com or ldaps://ldap.example.com for SSL',
  'LBL_LDAP_SERVER_PORT' => 'Αριθμός Θύρας:',
  'LBL_LDAP_SERVER_PORT_DESC' => 'Παράδειγμα:389 ή 636 για SSL',
  'LBL_LDAP_TITLE' => 'Υποστήριξη Πιστοποίησης LDAP',
  'LBL_LDAP_USER_DN' => 'DN Χειριστή:',
  'LBL_LDAP_USER_DN_DESC' => 'Παράδειγμα: ou=people,dc=example,dc=com',
  'LBL_LDAP_USER_FILTER' => 'Φίλτρο Χειριστή:',
  'LBL_LDAP_USER_FILTER_DESC' => 'Οποιοδήποτε πρόσθετο φίλτρο params για να ισχύει κατά την επικύρωση των χειριστών π.χ. is_sugar_user=1 or (is_sugar_user=1)(is_sales=1)',
  'LBL_LEAD_CONV_OPTION' => 'Επιλογές Μετατροπής Δυνητικού Πελάτη',
  'LBL_LOADING' => 'Φορτώνει...',
  'LBL_LOGGER' => 'Ρυθμίσεις Συνδεδεμένων',
  'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Προεπιλογή μορφή ημερομηνίας',
  'LBL_LOGGER_FILENAME' => 'Όνομα Αρχείου',
  'LBL_LOGGER_FILENAME_SUFFIX' => 'Επισύναψη μετά από το όνομα αρχείου',
  'LBL_LOGGER_FILE_EXTENSION' => 'Επέκταση',
  'LBL_LOGGER_LOG_LEVEL' => 'Επίπεδο Καταγραφής',
  'LBL_LOGGER_MAX_LOGS' => 'Μέγιστος αριθμός συνδέσεων (πριν την κύληση)',
  'LBL_LOGGER_MAX_LOG_SIZE' => 'Μέγιστο μέγεθος αρχείου καταγραφής',
  'LBL_LOGO' => 'Λογότυπο',
  'LBL_LOGVIEW' => 'Προβολή Σύνδεσης',
  'LBL_LOG_NOT_CHANGED' => 'Η σύνδεση δεν έχει αλλάξει',
  'LBL_MAILMERGE' => 'Συγχώνευση Ταχυδρομείου',
  'LBL_MAILMERGE_DESC' => 'Αυτή η σημαία πρέπει να επιλεχθεί μόνο εάν έχετε το SugarPlug-in για Microsoft® Word®.',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Χρήση Πιστοποίησης SMTP;',
  'LBL_MAIL_SMTPPASS' => 'Κωδικός Πρόσβασης SMTP:',
  'LBL_MAIL_SMTPPORT' => 'Θύρα SMTP:',
  'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
  'LBL_MAIL_SMTPTYPE' => 'Τύπος SMTP Server:',
  'LBL_MAIL_SMTPUSER' => 'Όνομα Χειριστή SMTP:',
  'LBL_MAIL_SMTP_SETTINGS' => 'Προδιαγραφές SMTP Server',
  'LBL_MARKING_WHERE_START_LOGGING' => 'Σήμανση Από Πού να Αρχίσει Σύνδεση',
  'LBL_MARK_POINT' => 'Σημείο Σημείωσης',
  'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Αυτόματη Ανανέωση Πίνακα Στοιχείων',
  'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Αυτή είναι η ελάχιστη τιμή που μπορεί κανείς να επιλέξει να έχει στον πίνακα στοιχείων αυτόματης ανανέωσης. Ρυθμίζοντας το πλήκτρο "Ποτέ", απενεργοποιείται  εντελώς η αυτόματη ανανέωση του πίνακα στοιχείων.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* Η ενότητα Αναφορές είναι διαθέσιμη μόνο για το Sugar Mobile εγγενών πελατών',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION2' => '* Η ενότητα των Αναφορών δεν είναι διαθέσιμη για τον περιηγητή-βασισμένη στην προβολή mobile.',
  'LBL_MODULE_FAVICON' => 'Εμφάνιση εικονιδίου ενότητας ως favicon',
  'LBL_MODULE_FAVICON_HELP' => 'Αν είστε σε μια ενότητα με ένα εικονίδιο, χρησιμοποιήστε το εικονίδιο της ενότητας ως favicon, αντί του θέματος favicon, στην καρτέλα μηχανής αναζήτησης.',
  'LBL_MODULE_ID' => 'Διαμόρφωση',
  'LBL_MODULE_NAME' => 'Ρυθμίσεις Συστήματος',
  'LBL_MODULE_NAME_SINGULAR' => 'Ρύθμιση Συστήματος',
  'LBL_MODULE_TITLE' => 'Διεπαφή Χειριστή',
  'LBL_NEXT_' => 'Επόμενο>>',
  'LBL_NOTIFY_FROMADDRESS' => '"Από" Διεύθυνση:',
  'LBL_NOTIFY_SUBJECT' => 'Θέμα Email:',
  'LBL_OC_STATUS' => 'Προεπιλογή Κατάστασης Αποσυνδεδεμένου Client',
  'LBL_OC_STATUS_DESC' => 'Ελέγξτε εδώ, αν θέλετε οποιοσδήποτε χειριστής να έχει πρόσβαση σε Αποσυνδεδεμένο Client. Διαφορετικά, μπορείτε να ρυθμίσετε την πρόσβαση σε επίπεδο χειριστή.',
  'LBL_PDFMODULE_NAME' => 'Ρυθμίσεις PDF',
  'LBL_PDF_ENCODING_TABLE' => 'Πίνακας Κωδικοποίησης',
  'LBL_PDF_ENCODING_TABLE_INFO' => 'Όνομα του πίνακα κωδικοποίησης.<br />Αυτή η επιλογή αγνοείται για TrueType Unicode, OpenType Unicode και συμβολικές γραμματοσειρές.<br />Η κωδικοποίηση καθορίζει την ένωση μεταξύ ενός κώδικα (από 0 σε 255) και ένα χαρακτήρα που περιέχεται στη γραμματοσειρά.<br />Τα πρώτα 128 καθορίζονται και αντιστοιχούν στο ASCII.',
  'LBL_PDF_FONT_FILE' => 'Αρχείο Γραμματοσειράς',
  'LBL_PDF_FONT_FILE_INFO' => '.ttf ή .otf ή .pfb αρχείο',
  'LBL_PDF_INSTRUCTIONS' => 'Οδηγίες',
  'LBL_PDF_METRIC_FILE' => 'Μετρικό Αρχείο',
  'LBL_PDF_METRIC_FILE_INFO' => '.afm ή .ufm αρχείο',
  'LBL_PDF_PATCH' => 'Τροποποίηση',
  'LBL_PDF_PATCH_INFO' => 'Τροποποίηση της προσαρμοσμένης κωδικοποίησης. Γράψτε μία σειρά PHP.<br />Παράδειγμα:<br />ISO-8859-1 δεν περιέχει το σύμβολο ευρώ. Για να το προσθέσετ στην θέση 164, γράψτε "σειρά(164=>\\&#39;Euro\\&#39;)".',
  'LBL_PORTAL_ON' => 'Ενεργοποίηση Portal, Διαχείριση Χειριστών',
  'LBL_PORTAL_ON_DESC' => 'Επιτρέπει στους χειριστές να διαχειρίζονται τις πληροφορίες χειριστή του portal, μέσα σε εγγραφές επαφών. Οι χειριστές του portal, μπορούν να έχουν πρόσβαση σε Υποθέσεις, Σφάλματα, Άρθρα της Βάσης Γνώσεων και άλλα δεδομένα μέσω της εφαρμογής Sugar Portal.',
  'LBL_PORTAL_TITLE' => 'Portal Πελάτη',
  'LBL_PROXY_AUTH' => 'Πιστοποίηση;',
  'LBL_PROXY_HOST' => 'Διεύθυνση Μεσολάβησης',
  'LBL_PROXY_ON' => 'Χρήση server μεσολάβησης;',
  'LBL_PROXY_ON_DESC' => 'Διαμόρφωση διεύθυνσης του διακομιστή μεσολάβησης και ρυθμίσεις ελέγχου πιστοποίησης',
  'LBL_PROXY_PASSWORD' => 'Κωδικός Πρόσβασης',
  'LBL_PROXY_PORT' => 'Θύρα',
  'LBL_PROXY_TITLE' => 'Ρυθμίσεις Μεσολάβησης',
  'LBL_PROXY_USERNAME' => 'Όνομα Χειριστή',
  'LBL_REFRESH_FROM_MARK' => 'Ανανέωση Από Σημείωση',
  'LBL_REG_EXP' => 'Επέκταση Κανονισμού:',
  'LBL_REMOVE' => 'αφαίρεση',
  'LBL_RESTORE_BUTTON_LABEL' => 'Επαναφορά',
  'LBL_SEARCH' => 'Αναζήτηση:',
  'LBL_SESSION_TIMEOUT_TOOLTIP' => 'Η Λήξη Χρονικής Περιόδου της Συνεδρίας του Portal, είναι για τις εκδόσεις του Sugar Portal, διαθέσιμες σε 6.5 και παλαιότερες.',
  'LBL_SKYPEOUT_ON' => 'Επιτρέπει την ενσωμάτωση SkypeOut',
  'LBL_SKYPEOUT_ON_DESC' => 'Επιτρέπει στους χειριστές να καλέσουν σε τηλεφωνικούς αριθμούς χρησιμοποιώντας το SkypeOut. Οι αριθμοί πρέπει να διαμορφωθούν κατάλληλα, για να κάνετε χρήση αυτής της δυνατότητας. Δηλαδή, πρέπει να είναι "+" "Κωδικός Χώρας" "Ο Αριθμός", παράδειγμα +1 (555) 555-1234.',
  'LBL_SKYPEOUT_TITLE' => 'SkypeOut',
  'LBL_STATUS_FONT_ERROR' => 'ΣΦΑΛΜΑ: Η γραμματοσειρά δεν έχει προστεθεί. Κοιτάξτε την σύνδεση παρακάτω.',
  'LBL_STATUS_FONT_SUCCESS' => 'ΕΠΙΤΥΧΙΑ: Η γραμματοσειρά έχει προστεθεί στο SugarCRM.',
  'LBL_SYSTEM_SETTINGS' => 'Ρυθμίσεις Συστήματος',
  'LBL_USE_REAL_NAMES' => 'Εμφάνιση Ονοματεπωνύμων',
  'LBL_USE_REAL_NAMES_DESC' => 'Εμφανίζει τα ονοματεπώνυμα των χειριστών, αντί μόνο των Ονομάτων τους, στα πεδία ανάθεσης.',
  'LBL_VCAL_PERIOD' => 'vCal Χρονική Περίοδος Ενημερώσεων:',
  'LBL_WELCOME' => 'Καλώς Ήλθατε',
  'LBL_WIRELESS_LIST_ENTRIES' => 'Λίστα Προβολής στοιχείων ανά σελίδα',
  'LBL_WIRELESS_SERVER_URL' => 'Sugar Mobile Plus server',
  'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES' => 'Υποκατηγορία στοιχείων ανά σελίδα',
  'LBL_WIZARD_BACK_BUTTON' => '< Πίσω',
  'LBL_WIZARD_CONTINUE_BUTTON' => 'Συνέχεια',
  'LBL_WIZARD_FINISH' => 'Πατήστε <b>Συνέχεια</b> να διαμορφώσετε τις ρυθμίσεις χειριστή.<br/><br /><br />Για να διαμορφώσετε πρόσθετες ρυθμίσεις του συστήματος, πατήστε στην επιλογή <a href="index.php?module=Administration&action=index" target="_blank">εδώ</a>.',
  'LBL_WIZARD_FINISH_BUTTON' => 'Τέλος',
  'LBL_WIZARD_FINISH_TAB' => 'Τέλος',
  'LBL_WIZARD_FINISH_TITLE' => 'Οι Βασικές ρυθμίσεις του συστήματος είναι ολοκληρωμένες',
  'LBL_WIZARD_LOCALE_DESC' => 'Καθορίστε πώς θα θέλατε τα δεδομένα στο Sugar να εμφανίζονται, με βάση την γεωγραφική σας θέση. Οι ρυθμίσεις που παρέχετε εδώ θα είναι οι προεπιλεγμένες ρυθμίσεις. Οι χειριστές θα είναι σε θέση να καθορίσουν τις δικές τους προτιμήσεις.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Επόμενο >',
  'LBL_WIZARD_SKIP_BUTTON' => 'Μετάβαση',
  'LBL_WIZARD_SMTP_DESC' => 'Παρέχετε τον λογαριασμό  email που θα χρησιμοποιηθεί για να στείλει τα emails, όπως οι ανακοινώσεις ανάθεσης και οι νέοι κωδικοί πρόσβασης χειριστών. Οι χειριστές θα λάβουν τα emails από το Sugar, όπως στέλνεται από τον συγκεκριμένο λογαριασμό email.',
  'LBL_WIZARD_SYSTEM_DESC' => 'Παρέχετε το όνομα και το λογότυπο της επιχείρησης σας προκειμένου να είναι αναγνωρίσιμο στο Sugar.',
  'LBL_WIZARD_SYSTEM_TITLE' => 'Μαρκάρισμα',
  'LBL_WIZARD_TITLE' => 'Οδηγός Admin',
  'LBL_WIZARD_WELCOME' => 'Πατήστε <b>Επόμενο</b> για μαρκάρισμα, εντοπισμό και διαμόρφωση του<br /><br /><br /> Sugar τώρα. Εάν θέλετε να διαμορφώσετε το Sugar αργότερα, πατήστε στην επιλογή <b>Μετάβαση</b>.',
  'LBL_WIZARD_WELCOME_TAB' => 'Καλώς Ήλθατε',
  'LBL_WIZARD_WELCOME_TITLE' => 'Καλώς Ήλθατε στο Sugar!',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Κωδικός Πρόσβασης Ταχυδρομείου:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Ταυτότητα Ταχυδρομείου:',
  'LBL_YAHOO_MAIL' => 'Ταχυδρομείο Yahoo',
  'LBL_YOUR_IP_ADDRESS' => 'Η Ταυτότητα Διεύθυνσης σας είναι',
  'LBL_YOUR_PROCESS_ID' => 'Η Ταυτότητα Διεργασίας σας',
  'LDAP_ENC_KEY_NO_FUNC_DESC' => 'The php_mcrypt επέκταση πρέπει να ενεργοποιηθεί στο php.ini αρχείο σας.',
  'LEAD_CONV_OPT_HELP' => '<b>Copy</b> - Δημιουργεί και σχετίζει όλα τα αντίγραφα των δραστηριοτήτων των Δυνητικών Πελατών, σε νέες εγγραφές που έχουν επιλεγεί από τον χειριστή κατά τη διάρκεια της μετατροπής. Δημιουργούνται Αντίγραφα για κάθε μία από τις επιλεγμένες εγγραφές.<br><br><b>Κίνηση</b> - Κινήσεις  των δραστηριοτήτων των Δυνητικών Πελατών σε νέες εγγραφές που έχουν επιλεγεί από τον χειριστή κατά τη διάρκεια της μετατροπής.<br><br><b>Καμία ενέργεια</b> - Καμία ενέργεια των δραστηριοτήτων των Δυνητικών Πελατών κατά τη διάρκεια της μετατροπής. Παραμένουν οι δραστηριότητες που σχετίζονται μόνο με τον Δυνητικό Πελάτη.',
  'LIST_ENTRIES_PER_LISTVIEW' => 'Λίστα Προβολής στοιχείων ανά σελίδα',
  'LIST_ENTRIES_PER_SUBPANEL' => 'Υποπίνακας στοιχείων ανά σελίδα',
  'LOCK_HOMEPAGE' => 'Κλείδωμα διατάξεων της Αρχικής Σελίδας του χειριστή',
  'LOCK_HOMEPAGE_HELP' => 'Αυτή η ρύθμιση είναι για να προστατέψει  <br />1) την προσθήκη νέων σελίδων στις αρχικές σελίδες και πινάκων στοιχείων στην ενότητα Αρχή, <br />2) την προσαρμογή της τοποθέτησης του πίνακα στοιχείων στις αρχικές σελίδες με μεταφορά και απόθεση.',
  'LOCK_SUBPANELS' => 'Αποτροπή χειριστή στην προσαρμογή διάταξης του υποπίνακα',
  'LOG_MEMORY_USAGE' => 'Καταγραφή χρήσης μνήμης',
  'LOG_SLOW_QUERIES' => 'Καταγραφή αργών ερωτημάτων',
  'MAX_DASHLETS' => 'Μέγιστος αριθμός του Πίνακα Στοιχείων στην Αρχική Σελίδα Sugar',
  'NEW_LOGO' => 'Επιλογή Λογότυπου:',
  'NEW_LOGO_HELP' => 'Η μορφή του αρχείου εικόνας μπορεί να είναι .Png ή .Jpg. Το μέγιστο ύψος είναι 17px, και το μέγιστο πλάτος είναι 450px. Οποιαδήποτε εικόνα που φορτώνεται που είναι μεγαλύτερη, θα κλιμακωθεί σε αυτές τις ανώτατες διαστάσεις.',
  'NEW_LOGO_HELP_NO_SPACE' => 'Η μορφή του αρχείου εικόνας μπορεί να είναι είτε .png ή .jpg. Το μέγιστο ύψος είναι 17px, και το μέγιστο πλάτος είναι 450px. Κάθε εικόνα που φορτώθηκε που είναι μεγαλύτερη, θα κλιμακωθεί σε αυτές τις μέγιστες διαστάσεις. Το όνομα του αρχείου της εικόνας δεν πρέπει να περιέχει κενό διάστημα.',
  'NEW_QUOTE_LOGO' => 'Ανεβάστε νέο λογότυπο Προσφορών',
  'NEW_QUOTE_LOGO_HELP' => 'Η απαιτούμενη μορφή αρχείου εικόνας είναι .jpg. Το προτεινόμενο μέγεθος είναι 867x74 px.',
  'PDF_ACL_ACCESS' => 'Έλεγχος Πρόσβασης',
  'PDF_ACL_ACCESS_INFO' => 'Προεπιλογή Ελέγχου Πρόσβασης για τη δημιουργία PDF.',
  'PDF_AUTHOR' => 'Δημιουργός',
  'PDF_AUTHOR_INFO' => 'Ο Δημιουργός εμφανίζεται στις ιδιότητες του εγγράφου.',
  'PDF_COMPRESSION' => 'Συμπίεση',
  'PDF_COMPRESSION_INFO' => 'Ενεργοποιεί ή απενεργοποιεί συμπίεση της σελίδας. Όταν ενεργοποιηθεί, η εσωτερική αναπαράσταση της κάθε σελίδας συμπιέζεται, η οποία οδηγεί σε μια αναλογία συμπίεσης περίπου 2 για το σχετικό έγγραφο που προέκυψε.',
  'PDF_CREATOR' => 'Δημιουργός PDF',
  'PDF_CREATOR_INFO' => 'Καθορίζει τον δημιουργό του εγγράφου.<br />Αυτό είναι  το χαρακτηριστικά όνομα της εφαρμογής που παράγει το PDF.',
  'PDF_FILENAME' => 'Προεπιλογή Ονόματος Αρχείου',
  'PDF_FILENAME_INFO' => 'Προεπιλογή ονόματος αρχείου για τα αρχεία PDF που δημιουργούνται',
  'PDF_GD_WARNING' => 'Δεν έχετε τη βιβλιοθήκη GD εγκατεστημένη για PHP. Χωρίς την βιβλιοθήκη GD εγκατεστημένη, μόνο λογότυπα JPEG μπορείτε να εμφανίσετε στα έγγραφα PDF.',
  'PDF_HEADER_LOGO' => 'Για Προσφορές PDF Εγγράφων',
  'PDF_HEADER_LOGO_INFO' => 'Αυτή η εικόνα εμφανίζεται στην προεπιλογή Επικεφαλίδας στις Προσφορές PDF Εγγράφων.',
  'PDF_HEADER_LOGO_WIDTH' => 'Πλάτος Εικόνας Προσφορών',
  'PDF_HEADER_LOGO_WIDTH_INFO' => 'Αλλαγή της κλίμακας της εικόνας που φορτώθηκε που εμφανίζεται σε Προσφορλες Εγγράφων PDF. (TCPDF μόνο)',
  'PDF_HEADER_STRING' => 'Συμβολοσειρά Επικεφαλίδας',
  'PDF_HEADER_STRING_INFO' => 'Περιγραφή συμβολοσειράς επικεφαλίδας',
  'PDF_HEADER_TITLE' => 'Τίτλος Επικεφαλίδας',
  'PDF_HEADER_TITLE_INFO' => 'Εκτύπωση συμβολοσειράς ως τίτλο για την επικεφαλίδα του εγγράφου',
  'PDF_IMAGE_SCALE_RATIO' => 'Αναλογία κλίμακας εικόνας',
  'PDF_IMAGE_SCALE_RATIO_INFO' => 'Η αναλογία χρησιμοποιείται για την κλίμακα των εικόνων',
  'PDF_INSTRUCTIONS_ADD_FONT' => 'Γραμματοσειρές υποστηρίζονται από το SugarPDF :<br /><ul><br /><li>TrueTypeUnicode (UTF-8 Unicode)</li><br /><li>OpenTypeUnicode</li><br /><li>TrueType</li><br /><li>OpenType</li><br /><li>Type1</li><br /><li>CID-0</li><br /></ul><br /><br><br />Εάν επιλέγετε να μην ενσωματώσετε την γραμματοσειρά σας στο PDF, το παραγμένο αρχείο PDF θα είναι ελαφρύτερο αλλά μια αντικατάσταση θα χρησιμοποιηθεί, εάν η γραμματοσειρά δεν είναι διαθέσιμη στο σύστημα του αναγνώστη σας.<br /><br><br><br />Η προσθήκη μιας γραμματοσειράς PDF στο SugarCRM απαιτεί να ακολουθήσει τα βήματα 1 και 2 από την τεκμηρίωση Γραμματοσειρών TCPDF διαθέσιμη στο τμήμα "DOCS εγγράφων" στο<a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.<br /><br><br>Το pfm2afm και ttf2ufm χρήσιμα είναι διαθέσιμα στις γραμματοσειρές/χρήσιμα στο πακέτο  TCPDF το οποίο μπορείτε να κατεβάσετε στο "DOWNLOAD" τμήμα του <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.<br /><br><br>Φορτώστε το μετρικό αρχείο που παράγεται στο βήμα 2 και το αρχείο γραμματοσειρών σας παρακάτω.',
  'PDF_JPEG_QUALITY' => 'JPEG Ποιότητα (1-100)',
  'PDF_JPEG_QUALITY_INFO' => 'Προεπιλογή ποιότητας συμπίεσης αρχείου JPEG (1-100)',
  'PDF_KEYWORDS' => 'Λέξη Κλειδί(α)',
  'PDF_KEYWORDS_INFO' => 'Συνδυαζόμενες λέξεις κλειδιά με το έγγραφο, συνήθως με τη μορφή "λέξη κλειδί1 λέξη κλειδί2..."',
  'PDF_NEW_HEADER_LOGO' => 'Επιλογή νέας εικόνας για Προσφορές',
  'PDF_NEW_HEADER_LOGO_INFO' => 'Η μορφή του αρχείου μπορεί να είναι είτε .jpg ή .png. (Μόνο .jpg για EZPDF)<br />Το συνιστώμενο μέγεθος 867x60 px.',
  'PDF_NEW_SMALL_HEADER_LOGO' => 'Επιλογή Νέας Εικόνας για Αναφορές',
  'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'Η μορφή του αρχείου μπορεί να είναι .jpg ή .png. (Μόνο .jpg για EZPDF) Το προτεινόμενο μέγεθος είναι 212x40 px.',
  'PDF_OWNER_PASSWORD' => 'Κωδικός Πρόσβασης Ιδιοκτήτη',
  'PDF_OWNER_PASSWORD_INFO' => 'Εάν δεν καθορίσετε οποιοδήποτε κωδικό πρόσβασης, το έγγραφο θα ανοίξει όπως συνήθως.<br />Εάν θέσετε έναν κωδικό πρόσβασης χειριστών, το PDF πριν ανοίξει το έγγραφο θα ζητήσει τον κωδικό.<br />Ο κύριος κωδικός πρόσβασης, εάν διαφέρει από τον έναν χειριστή, μπορεί να χρησιμοποιηθεί για να πάρει την πλήρη πρόσβαση.',
  'PDF_PDF_VERSION' => 'Έκδοση PDF',
  'PDF_PDF_VERSION_INFO' => 'Θέστε την έκδοση PDF (αναφορά ελέγχου PDF για τις έγκυρες τιμές).',
  'PDF_PROTECTION' => 'Προστασία Εγγράφου',
  'PDF_PROTECTION_INFO' => 'Ρυθμίστε την προστασία εγγράφου<br>- αντιγραφή: αντιγραφή κειμένου και εικόνων στο πρόχειρο<br>- εκτύπωση: εκτύπωση του εγγράφου<br>- τροποποίηση: τροποποίηση (εκτός από τους σχολιασμούς και τις μορφές)<br>- σχολιασμοί-φορμών: προσθέστε τους σχολιασμούς και τις μορφές<br>Σημείωση: η προστασία ενάντια στην τροποποίηση, είναι για όσους έχουν το πλήρες Acrobat προϊόν.',
  'PDF_SMALL_HEADER_LOGO' => 'Για Αναφορές PDF Εγγράφων.',
  'PDF_SMALL_HEADER_LOGO_INFO' => 'Αυτή η εικόνα εμφανίζεται στην προεπιλογή Επικεφαλίδα σε Αναφορές PDF Εγγράφων. Αυτή η εικόνα εμφανίζεται επίσης στην πάνω αριστερή γωνία της εφαρμογής Sugar.',
  'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Πλάτος Εικόνας Αναφορών',
  'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Αλλαγή της κλίμακας της εικόνας που φορτώθηκε που εμφανίζεται στις Αναφορές PDF Εγγράφων. (TCPDF μόνο)',
  'PDF_SUBJECT' => 'Θέμα',
  'PDF_SUBJECT_INFO' => 'Το Θέμα εμφανίζεται στις ιδιότητες εγγράφου.',
  'PDF_TITLE' => 'Τίτλος',
  'PDF_TITLE_INFO' => 'Ο Τίτλος εμφανίζεται στις ιδιότητες εγγράφου.',
  'PDF_UNIT' => 'Μονάδα',
  'PDF_UNIT_INFO' => 'μονάδα εγγράφων του μέτρου',
  'PDF_USER_PASSWORD' => 'Κωδικός Πρόσβασης Χειριστή',
  'PDF_USER_PASSWORD_INFO' => 'Εάν δεν καθορίσετε οποιοδήποτε κωδικό πρόσβασης, το έγγραφο θα ανοίξει όπως συνήθως.<br />Εάν θέσετε έναν κωδικό πρόσβασης χειριστών, το PDF πριν ανοίξει το έγγραφο θα ζητήσει τον κωδικό.<br />Ο κύριος κωδικός πρόσβασης, εάν διαφέρει από τον έναν χειριστή, μπορεί να χρησιμοποιηθεί για να πάρει πλήρη πρόσβαση.',
  'QUOTES_CURRENT_LOGO' => 'Λογότυπο Προσφορών',
  'SESSION_TIMEOUT' => 'Χρονική Περίοδος Λειτουργίας Portal',
  'SESSION_TIMEOUT_UNITS' => 'λεπτά',
  'SHOW_DOWNLOADS_TAB' => 'Εμφάνιση Λήψεων Καρτέλας',
  'SHOW_DOWNLOADS_TAB_HELP' => 'Όταν επιλεχθεί, η Λήψη καρτέλας θα εμφανιστεί στις Ρυθμίσεις Χειριστή και θα παρέχει στους χειριστές πρόσβαση στο Sugar plug-ins και σε άλλα διαθέσιμα αρχεία.',
  'SLOW_QUERY_TIME_MSEC' => 'Χρονικό όριο αργών ερωτημάτων (msec)',
  'STACK_TRACE_ERRORS' => 'Εμφάνιση στοίβας λαθών',
  'SUGARPDF_ADVANCED_SETTINGS' => 'Σύνθετες Ρυθμίσεις',
  'SUGARPDF_BASIC_SETTINGS' => 'Ιδιότητες Εγγράφων',
  'SUGARPDF_LOGO_SETTINGS' => 'Εικόνες',
  'SYSTEM_NAME' => 'Όνομα Συστήματος:',
  'SYSTEM_NAME_HELP' => 'Αυτό είναι το όνομα που εμφανίζεται στη γραμμή τίτλου της μηχανής αναζήτησης σας.',
  'SYSTEM_NAME_WIZARD' => 'Όνομα:',
  'UPLOAD_MAX_SIZE' => 'Μέγιστο μέγεθος αρχείου φόρτωσης',
  'VERIFY_CLIENT_IP' => 'Επικύρωση διεύθυνσης ταυτότητας χειριστή',
  'vCAL_HELP' => 'Χρησιμοποιήστε αυτή τη ρύθμιση για τον καθορισμό του αριθμού των μηνών πριν από την τρέχουσα ημερομηνία, οι Ελεύθερες/Πολυάσχολες πληροφορίες για τις κλήσεις και τις συνεδριάσεις δημοσιεύονται. Για να απενεργοποιήσετε την Ελεύθερη/Πολυάσχολη δημοσίευση, εισάγετε "0". Το ελάχιστο είναι 1 μήνας το μέγιστο είναι 12 μήνες.',
);

