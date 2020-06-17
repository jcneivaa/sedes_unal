<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'UNAL.SedesUnal',
            'Sedes',
            [
                'Sede' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Sede' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    sedes {
                        iconIdentifier = sedes_unal-plugin-sedes
                        title = LLL:EXT:sedes_unal/Resources/Private/Language/locallang_db.xlf:tx_sedes_unal_sedes.name
                        description = LLL:EXT:sedes_unal/Resources/Private/Language/locallang_db.xlf:tx_sedes_unal_sedes.description
                        tt_content_defValues {
                            CType = list
                            list_type = sedesunal_sedes
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'sedes_unal-plugin-sedes',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:sedes_unal/Resources/Public/Icons/user_plugin_sedes.svg']
			);
		
    }
);
