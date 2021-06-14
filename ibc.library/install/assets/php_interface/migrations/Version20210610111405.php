<?php

namespace Sprint\Migration;

use Bitrix\Main\Application;
use Bitrix\Main\Entity;

class Version20210610111405 extends Version
{
    protected $description = "";

    protected $moduleVersion = "3.28.7";

    public function up()
    {
        $connection = Application::getConnection();
        $connection->createTable(
            'ibc_author',
            [
                'ID' => new Entity\IntegerField(
                    'ID',
                    [
                        'column_name' => 'ID'
                    ]
                ),
                'FIRST_NAME' => new Entity\StringField(
                    'FIRST_NAME',
                    [
                        'column_name' => 'FIRST_NAME'
                    ]
                ),
                'LAST_NAME' => new Entity\StringField(
                    'LAST_NAME',
                    [
                        'column_name' => 'LAST_NAME'
                    ]
                ),
                'SECOND_NAME' => new Entity\StringField(
                    'SECOND_NAME',
                    [
                        'column_name' => 'SECOND_NAME'
                    ]
                ),'CITY' => new Entity\StringField(
                    'CITY',
                    [
                        'column_name' => 'CITY'
                    ]
                ),
            ],
            ['ID'],
            ['ID']
        );
    }

    public function down()
    {
        $connection = Application::getConnection();
        $connection->dropTable('ibc_author');
    }
}
