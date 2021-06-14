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
 * Class AuthorTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> FIRST_NAME string(255) mandatory
 * <li> LAST_NAME string(255) mandatory
 * <li> SECOND_NAME string(255) mandatory
 * <li> CITY string(255) mandatory
 * </ul>
 *
 * @package Bitrix\Author
 **/

class AuthorTable extends Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
        return 'ibc_author';
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
                'FIRST_NAME',
                [
                    'column_name' => 'FIRST_NAME'
                ]
            ),
            new Entity\StringField(
                'LAST_NAME',
                [
                    'column_name' => 'LAST_NAME'
                ]
            ),
            new Entity\StringField(
                'SECOND_NAME',
                [
                    'column_name' => 'SECOND_NAME'
                ]
            ),
            new Entity\StringField(
                'CITY',
                [
                    'column_name' => 'CITY'
                ]
            ),
        ];
    }
}
?>