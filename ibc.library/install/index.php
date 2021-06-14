<?php
defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();

use Bitrix\Main\Application;
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;
use Bitrix\Main\IO\Directory;
use Bitrix\Main\Access\Exception;
use Sprint\Migration\Installer;

Loc::loadMessages(__FILE__);

if (class_exists('ibc_library')) {
    return;
}

class ibc_library extends CModule
{
    /** @var string */
    public $MODULE_ID;

    /** @var string */
    public $MODULE_VERSION;

    /** @var string */
    public $MODULE_VERSION_DATE;

    /** @var string */
    public $MODULE_NAME;

    /** @var string */
    public $MODULE_DESCRIPTION;

    /** @var string */
    public $MODULE_GROUP_RIGHTS;

    /** @var string */
    public $PARTNER_NAME;

    /** @var string */
    public $PARTNER_URI;

    public function __construct()
    {
        $this->MODULE_ID = 'ibc.library';
        $this->MODULE_VERSION = '1.0.0';
        $this->MODULE_VERSION_DATE = '2021-06-07 12:00:00';
        $this->MODULE_NAME = 'Библиотека';
        $this->MODULE_DESCRIPTION = 'Библиотека';
        $this->MODULE_GROUP_RIGHTS = 'N';
        $this->PARTNER_NAME = "Пивоваров Петр";
        $this->PARTNER_URI = "https://www.ibc.ru/";
    }

    public function doInstall()
    {
        if (\CModule::IncludeModule('sprint.migration')) {
            try {
                (new Sprint\Migration\Installer(
                    [
                        'migration_dir' => '/local/modules/ibc.library/install/assets/php_interface/migrations/',
                    ]
                ))->up();
            } catch (\Exception $e) {
                global $APPLICATION;
                $APPLICATION->ThrowException($e->getMessage());
                return false;
            }
        }
        ModuleManager::registerModule($this->MODULE_ID);
        $this->installFile();
    }

    public function doUninstall()
    {
        if (\CModule::IncludeModule('sprint.migration')) {
            try {
                (new Sprint\Migration\Installer(
                    [
                        'migration_dir' => '/local/modules/ibc.library/install/assets/php_interface/migrations/',
                    ]
                ))->down();
            } catch (\Exception $e) {
                global $APPLICATION;
                $APPLICATION->ThrowException($e->getMessage());
                return false;
            }
        }

        $this->uninstallFile();
        ModuleManager::unregisterModule($this->MODULE_ID);
    }

    public function installFile()
    {

        $oldfolder =  $_SERVER['DOCUMENT_ROOT'].'/local/modules/ibc.library/install/assets/php_interface/';
        $newfolder = $_SERVER['DOCUMENT_ROOT'].'/local/php_interface/';

        CopyDirFiles(
            $oldfolder,
            $newfolder,
            true,
            true
        );

        $oldfolder =  $_SERVER['DOCUMENT_ROOT'].'/local/modules/ibc.library/install/assets/section/';
        $newfolder = $_SERVER['DOCUMENT_ROOT'];

        CopyDirFiles(
            $oldfolder,
            $newfolder,
            true,
            true
        );
    }

    public function uninstallFile()
    {
        Directory::deleteDirectory(
            $_SERVER['DOCUMENT_ROOT'].'/local/php_interface/migrations/'
        );
        Directory::deleteDirectory(
            $_SERVER['DOCUMENT_ROOT'].'/local/php_interface/migrations.archive/'
        );
        Directory::deleteDirectory(
            $_SERVER['DOCUMENT_ROOT'].'/library/'
        );
    }
}