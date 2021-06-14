<?php

namespace Sprint\Migration;

use Bitrix\Main\Application;
use Bitrix\Main\Entity;

class Version20210610124622 extends Version
{
    protected $description = "";

    protected $moduleVersion = "3.28.7";

    public function up()
    {
        $connection = Application::getConnection();
        $connection->createTable(
            'ibc_publisher',
            [
                'ID' => new Entity\IntegerField(
                    'ID',
                    [
                        'column_name' => 'ID'
                    ]
                ),
                'TITLE' => new Entity\StringField(
                    'TITLE',
                    [
                        'column_name' => 'TITLE'
                    ]
                ),
                'CITY' => new Entity\StringField(
                    'CITY',
                    [
                        'column_name' => 'CITY'
                    ]
                ),
                'AUTHOR_PROFIT' => new Entity\IntegerField(
                    'AUTHOR_PROFIT',
                    [
                        'column_name' => 'AUTHOR_PROFIT'
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
        $connection->dropTable('ibc_publisher');
    }
}
