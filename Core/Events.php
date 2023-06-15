<?php

namespace Fatchip\AddressValidation\Core;

use OxidEsales\Eshop\Core\DbMetaDataHandler;
use OxidEsales\Eshop\Core\Registry;

class Events
{
    /**
     * Updates the views in the database
     *
     * @return void
     */
    public static function rebuildViews()
    {
        if (Registry::getSession()->getVariable('malladmin')) {
            $metaData = oxNew(DbMetaDataHandler::class);
            $metaData->updateViews();
        }
    }

    /**
     * On activating the module, table is created
     *
     * @return void
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public static function onActivate()
    {
        self::rebuildViews();
    }

}