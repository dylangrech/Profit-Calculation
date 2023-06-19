<?php

namespace Fatchip\ProfitCalculation\Component\Widget;

class ArticleDetails extends ArticleDetails_parent
{
    /**
     * If the current user has malladmin rights true is returned
     *
     * @return bool
     */
    public function userHasRights()
    {
        $oUser = \OxidEsales\Eshop\Core\Registry::getSession()->getUser();
        if ($oUser->oxuser__oxrights->value === 'malladmin') {
            return true;
        }
        return false;
    }
}