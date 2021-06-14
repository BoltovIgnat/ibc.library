<?php

namespace Sprint\Migration;

use Bitrix\Main\Application;
use Bitrix\Main\Entity;

class Version20210610124624 extends Version
{
    protected $description = "";

    protected $moduleVersion = "3.28.7";

    public function up()
    {
        $connection = Application::getConnection();
        $connection->createTable(
            'ibc_book',
            [
                'ID' => new Entity\IntegerField(
                    'ID',
                    [
                        'column_name' => 'ID'
                    ]
                ),
                'PUBLISHER_ID' => new Entity\IntegerField(
                    'PUBLISHER_ID',
                    [
                        'column_name' => 'PUBLISHER_ID'
                    ]
                ),
                'TITLE' => new Entity\StringField(
                    'TITLE',
                    [
                        'column_name' => 'TITLE'
                    ]
                ),
                'YEAR' => new Entity\DatetimeField(
                    'YEAR',
                    [
                        'column_name' => 'YEAR'
                    ]
                ),
                'COPIES_CNT' => new Entity\IntegerField(
                    'COPIES_CNT',
                    [
                        'column_name' => 'COPIES_CNT'
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
        $connection->dropTable('ibc_book');
    }
}
