<?php
namespace ibc\library;

use Bitrix\Main\Localization\Loc,
    Bitrix\Main\ORM\Data\DataManager,
    Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\Entity;

Loc::loadMessages(__FILE__);

/**
 * Class GapTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> AUTHOR_ID int mandatory
 * <li> BOOK_ID int mandatory
 * </ul>
 *
 * @package Bitrix\Gap
 **/

class GapTable extends Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
        return 'ibc_gap';
    }

    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
        return [
            new Entity\IntegerField(
                'ID',
                [
                    'primary' => true,
                    'autocomplete' => true,
                    'column_name' => 'ID'
                ]
            ),
            new Entity\IntegerField(
                'AUTHOR_ID',
                [
                    'column_name' => 'AUTHOR_ID'
                ]
            ),
            new Entity\IntegerField(
                'BOOK_ID',
                [
                    'column_name' => 'BOOK_ID'
                ]
            ),
        ];
    }
}