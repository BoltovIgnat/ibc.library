<?php
$arClasses = [
    '\Ibc\library\AuthorTable' => 'lib/Table/AuthorTable.php',
    '\Ibc\library\BookTable' => 'lib/Table/BookTable.php',
    '\Ibc\library\PublisherTable' => 'lib/Table/PublisherTable.php',
    '\Ibc\library\GapTable' => 'lib/Table/GapTable.php',
//    '\Ibc\Znp\Visit' => 'lib/Orm/Visit.php',
//    '\Ibc\Znp\Company' => 'lib/Orm//Company.php',
];

\Bitrix\Main\Loader::registerAutoLoadClasses('ibc.library', $arClasses);