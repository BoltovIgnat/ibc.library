<?php

namespace Sprint\Migration;

use Bitrix\Main\Application;
use Bitrix\Main\Entity;

class Version20210612152831 extends Version
{
    protected $description = "";

    protected $moduleVersion = "3.28.7";

    public function up()
    {
        $connection = Application::getConnection();
        $connection->createTable(
            'ibc_gap',
            [
                'ID' => new Entity\IntegerField(
                    'ID',
                    [
                        'column_name' => 'ID'
                    ]
                ),
                'AUTHOR_ID' => new Entity\IntegerField(
                    'AUTHOR_ID',
                    [
                        'column_name' => 'AUTHOR_ID'
                    ]
                ),
                'BOOK_ID' => new Entity\IntegerField(
                    'BOOK_ID',
                    [
                        'column_name' => 'BOOK_ID'
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
        $connection->dropTable('ibc_gap');
    }
}
