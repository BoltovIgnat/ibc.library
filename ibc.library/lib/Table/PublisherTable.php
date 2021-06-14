<?php
namespace ibc\library;

use Bitrix\Main\Localization\Loc,
    Bitrix\Main\ORM\Data\DataManager,
    Bitrix\Main\ORM\Fields\IntegerField,
    Bitrix\Main\ORM\Fields\StringField,
    Bitrix\Main\ORM\Fields\Validators\LengthValidator;
use Bitrix\Main\Entity;

Loc::loadMessages(__FILE__);

/**
 * Class PublisherTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TITLE string(255) mandatory
 * <li> CITY string(255) mandatory
 * <li> AUTHOR_PROFIT int mandatory
 * </ul>
 *
 * @package Bitrix\Publisher
 **/

class PublisherTable extends Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
        return 'ibc_publisher';
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
            new Entity\StringField(
                'TITLE',
                [
                    'column_name' => 'TITLE'
                ]
            ),
            new Entity\StringField(
                'CITY',
                [
                    'column_name' => 'CITY'
                ]
            ),
            new Entity\IntegerField(
                'AUTHOR_PROFIT',
                [
                    'column_name' => 'AUTHOR_PROFIT'
                ]
            ),
        ];
    }
}