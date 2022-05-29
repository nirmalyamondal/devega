<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

call_user_func(function () {
		\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
			(
			new \B13\Container\Tca\ContainerConfiguration(
				'devegatheme-2cols66', // CType
				'2 Spalten Element 6-6', // label
				'2 Spalten Element für den Hauptinhalt', // description
				[
					[
						['name' => 'Linke Spalte', 'colPos' => 101],
						['name' => 'Rechte Spalte', 'colPos' => 102]
					]
				] // grid configuration
			)
			)
				// set an optional icon configuration
				->setIcon('EXT:container/Resources/Public/Icons/container-2col.svg')
		);

		\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
			(
			new \B13\Container\Tca\ContainerConfiguration(
				'devegatheme-2cols84', // CType
				'2 Spalten Element 8-4', // label
				'2 Spalten Element für den Hauptinhalt', // description
				[
					[
						['name' => 'Linke Spalte', 'colPos' => 101],
						['name' => 'Rechte Spalte', 'colPos' => 102]
					]
				] // grid configuration
			)
			)
				// set an optional icon configuration
				->setIcon('EXT:container/Resources/Public/Icons/container-2col.svg')
		);

		\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
			(
			new \B13\Container\Tca\ContainerConfiguration(
				'devegatheme-2cols84mit', // CType
				'2 Spalten Element 8-4 mit Abstand', // label
				'2 Spalten Element für den Hauptinhalt', // description
				[
					[
						['name' => 'Linke Spalte', 'colPos' => 101],
						['name' => 'Rechte Spalte', 'colPos' => 102]
					]
				] // grid configuration
			)
			)
				// set an optional icon configuration
				->setIcon('EXT:container/Resources/Public/Icons/container-2col.svg')
		);

		\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
			(
			new \B13\Container\Tca\ContainerConfiguration(
				'devegatheme-2cols48', // CType
				'2 Spalten Element 4-8', // label
				'2 Spalten Element für den Hauptinhalt', // description
				[
					[
						['name' => 'Linke Spalte', 'colPos' => 101],
						['name' => 'Rechte Spalte', 'colPos' => 102]
					]
				] // grid configuration
			)
			)
				// set an optional icon configuration
				->setIcon('EXT:container/Resources/Public/Icons/container-2col.svg')
		);

		\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
			(
			new \B13\Container\Tca\ContainerConfiguration(
				'devegatheme-3cols', // CType
				'3 Spalten Element', // label
				'3 Spalten Element für den Hauptinhalt', // description
				[
					[
						['name' => 'Linke Spalte', 'colPos' => 101],
						['name' => 'Mitte Spalte', 'colPos' => 102],
						['name' => 'Rechte Spalte', 'colPos' => 103]
					]
				] // grid configuration
			)
			)
				// set an optional icon configuration
				->setIcon('EXT:container/Resources/Public/Icons/container-3col.svg')
		);

		\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
			(
			new \B13\Container\Tca\ContainerConfiguration(
				'devegatheme-4cols', // CType
				'4 Spalten Element', // label
				'4 Spalten Element für den Hauptinhalt', // description
				[
					[
						['name' => 'Linke Spalte', 'colPos' => 101],
						['name' => 'Mitte Eins Spalte', 'colPos' => 102],
						['name' => 'Mitte Zwei Spalte', 'colPos' => 103],
						['name' => 'Rechte Spalte', 'colPos' => 104],
					]
				] // grid configuration
			)
			)
				// set an optional icon configuration
				->setIcon('EXT:container/Resources/Public/Icons/container-3col.svg')
		);
});
