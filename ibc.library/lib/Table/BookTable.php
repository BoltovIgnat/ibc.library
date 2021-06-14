<?php
namespace ibc\library;

use Bitrix\Main\Localization\Loc,
    Bitrix\Main\ORM\Data\DataManager,
    Bitrix\Main\ORM\Fields\DatetimeField,
    Bitrix\Main\ORM\Fields\IntegerField,
    Bitrix\Main\ORM\Fields\StringField,
    Bitrix\Main\ORM\Fields\Validators\LengthValidator;
use Bitrix\Main\Entity;

Loc::loadMessages(__FILE__);

/**
 * Class BookTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TITLE string(255) mandatory
 * <li> YEAR datetime mandatory
 * <li> COPIES_CNT int mandatory
 * </ul>
 *
 * @package Bitrix\Book
 **/

class BookTable extends Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
        return 'ibc_book';
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
                'PUBLISHER_ID',
                [
                    'column_name' => 'PUBLISHER_ID'
                ]
            ),
            new Entity\StringField(
                'TITLE',
                [
                    'column_name' => 'TITLE'
                ]
            ),
            new Entity\DatetimeField(
                'YEAR',
                [
                    'column_name' => 'YEAR'
                ]
            ),
            new Entity\IntegerField(
                'COPIES_CNT',
                [
                    'column_name' => 'COPIES_CNT'
                ]
            ),
        ];
    }
}