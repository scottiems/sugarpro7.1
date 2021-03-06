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
  'COLUMN_DISABLE_NUMBER_FORMAT' => 'Désactiver le formatage',
  'COLUMN_TITLE_AUDIT' => 'Audit',
  'COLUMN_TITLE_AUTOINC_NEXT' => 'Auto incrément valeur suivante',
  'COLUMN_TITLE_COMMENT_TEXT' => 'Commentaire',
  'COLUMN_TITLE_DATA_TYPE' => 'type de donnée',
  'COLUMN_TITLE_DEFAULT_EMAIL' => 'Valeur par défaut',
  'COLUMN_TITLE_DEFAULT_VALUE' => 'Valeur par défaut',
  'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# enregistrements affichés',
  'COLUMN_TITLE_DISPLAY_LABEL' => 'Libellé affiché',
  'COLUMN_TITLE_DUPLICATE_MERGE' => 'Fusion de doublons',
  'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Activer la recherche par intervale',
  'COLUMN_TITLE_EXT1' => 'Meta additionnel champ 1',
  'COLUMN_TITLE_EXT2' => 'Meta additionnel champ 2',
  'COLUMN_TITLE_EXT3' => 'Meta additionnel champ 3',
  'COLUMN_TITLE_FRAME_HEIGHT' => 'Hauteur iFrame',
  'COLUMN_TITLE_FTS' => 'Recherchable en Full Text',
  'COLUMN_TITLE_GLOBAL_SEARCH' => 'Recherche globale',
  'COLUMN_TITLE_HELP_TEXT' => 'Texte d&#39;aide',
  'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
  'COLUMN_TITLE_IMPORTABLE' => 'Importable',
  'COLUMN_TITLE_LABEL' => 'Libellé système',
  'COLUMN_TITLE_LABEL_COLS' => 'Colonnes',
  'COLUMN_TITLE_LABEL_ROWS' => 'Lignes',
  'COLUMN_TITLE_LABEL_VALUE' => 'Valeur du libellé',
  'COLUMN_TITLE_MASS_UPDATE' => 'Mise à jour globale',
  'COLUMN_TITLE_MAX_SIZE' => 'Taille max',
  'COLUMN_TITLE_MAX_VALUE' => 'Valeur max',
  'COLUMN_TITLE_MIN_VALUE' => 'Valeur min',
  'COLUMN_TITLE_NAME' => 'Nom du champ',
  'COLUMN_TITLE_PRECISION' => 'Précision',
  'COLUMN_TITLE_REPORTABLE' => 'Utilisable dans rapports',
  'COLUMN_TITLE_REQUIRED_OPTION' => 'Champ obligatoire',
  'COLUMN_TITLE_URL' => 'URL par défaut',
  'COLUMN_TITLE_VALIDATE_US_FORMAT' => 'Format U.S.',
  'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Ce nom est déjà utilisé par un autre champ',
  'ERR_NO_MODULE_INCLUDED' => 'Aucun module inclus, sauvegarde impossible',
  'ERR_RESERVED_FIELD_NAME' => 'Mot clef réservé',
  'ERR_SELECT_FIELD_TYPE' => 'Veuillez sélectionner un type de champ',
  'LBL_ADDING_COLUMN' => 'Ajout de la colonne {0} à',
  'LBL_ADD_FIELD' => 'Ajouter champ:',
  'LBL_AUDITED' => 'Audité',
  'LBL_BTN_ADD' => 'Ajouter',
  'LBL_BTN_EDIT' => 'Editer',
  'LBL_BTN_EDIT_VISIBILITY' => 'Editer la visibilité',
  'LBL_CALCULATED' => 'Calculé',
  'LBL_DATA_TYPE' => 'Type de donnée',
  'LBL_DEFAULT_VALUE' => 'Valeur par défaut',
  'LBL_DEPENDENT' => 'Dépendant',
  'LBL_DEPENDENT_CHECKBOX' => 'Dépendant',
  'LBL_DEPENDENT_TRIGGER' => 'Déclencheur',
  'LBL_DONE' => 'Terminer',
  'LBL_DROPPING_COLUMN' => 'Suppression de la colonne {0} de {1} pour le module',
  'LBL_DROP_DOWN_LIST' => 'Liste déroulante',
  'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Dépendant',
  'LBL_EDIT_VIS' => 'Editer la visibilité',
  'LBL_ENFORCED' => 'Forcé',
  'LBL_EXE_NON_SIM_MODE' => 'Exécution en mode non-simulation',
  'LBL_FIELD_MISSING' => 'champ(s) manquant(s) pour',
  'LBL_FIX_COLUMN_TYPE' => 'Ajustement de type pour la colonne {0} de {1} à',
  'LBL_FORMULA' => 'Formule',
  'LBL_GENERATE_URL' => 'Générer l&#39;URL',
  'LBL_HAS_PARENT' => 'A un parent',
  'LBL_HELP' => 'Aide',
  'LBL_IMAGE_BORDER' => 'Bordure',
  'LBL_IMAGE_HEIGHT' => 'Hauteur',
  'LBL_IMAGE_WIDTH' => 'Largeur',
  'LBL_LABEL' => 'Libellé',
  'LBL_LINK_TARGET' => 'Ouvrir Link In',
  'LBL_MODULE' => 'Module',
  'LBL_MODULE_SELECT' => 'Module à éditer',
  'LBL_MULTI_SELECT_LIST' => 'Liste multivaleur',
  'LBL_PARENT_DROPDOWN' => 'Liste des parents',
  'LBL_RADIO_FIELDS' => 'Bouton radio',
  'LBL_REPORTABLE' => 'Utilisable dans rapports',
  'LBL_SCAN_MODULE' => 'Analyse',
  'LBL_SEARCH_FORM_TITLE' => 'Rechercher Module',
  'LBL_SIMULATION_MODE' => 'MODE SIMULATION - AUCUN CHANGEMENT NE SERA EFFECTUE HORMIS LE NETTOYAGE DU CACHE',
  'LBL_VISIBLE_IF' => 'Visible si',
  'LNK_CALL_LIST' => 'Appels',
  'LNK_EMAIL_LIST' => 'Emails',
  'LNK_MEETING_LIST' => 'Réunions',
  'LNK_NEW_CALL' => 'Planifier Appel',
  'LNK_NEW_EMAIL' => 'Archiver Email',
  'LNK_NEW_MEETING' => 'Planifier Réunion',
  'LNK_NEW_NOTE' => 'Créer Note',
  'LNK_NEW_TASK' => 'Créer Tâche',
  'LNK_NOTE_LIST' => 'Notes',
  'LNK_REPAIR_CUSTOM_FIELD' => 'Réparer les champs personnalisés',
  'LNK_SELECT_CUSTOM_FIELD' => 'Sélectionner le champ personnalisé',
  'LNK_TASK_LIST' => 'Tâches',
  'MSG_DELETE_CONFIRM' => 'Etes-vous sûr de vouloir effacer cet élément ?',
  'POPUP_EDIT_HEADER_TITLE' => 'Editer champ personnalisé',
  'POPUP_INSERT_HEADER_TITLE' => 'Ajouter champ personnalisé',
);

