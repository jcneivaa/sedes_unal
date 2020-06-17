<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'UNAL.SedesUnal',
            'Sedes',
            'Sedes'
        );

        $_EXTKEY='sedes_unal';
        $extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);

        //Por aca se agrega el flexform
        //Pi flexform de sedes

        $frontendpluginName = 'Sedes';
        $pluginSignature = strtolower($extensionName).'_'.strtolower($frontendpluginName);

        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/sedes.xml');


        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'Unal.SedesUnal',
            'web', // Make module a submodule of 'web'
            'Sedessunalbe', // Submodule key
            '', // Position
            [
                'Sede' => 'list, show',
            ],
            [
                'access' => 'user,group',
                'labels' => 'LLL:EXT:sedes_unal/Resources/Private/Language/locallang_plugin_sedes.xlf',
            ]
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('sedes_unal', 'Configuration/TypoScript', 'Sedes UNAL');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_sedesunal_domain_model_sede', 'EXT:sedes_unal/Resources/Private/Language/locallang_csh_tx_sedesunal_domain_model_sede.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_sedesunal_domain_model_sede');
    }
);

