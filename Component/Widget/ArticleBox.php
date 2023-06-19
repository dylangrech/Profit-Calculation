<?php

namespace Fatchip\ProfitCalculation\Component\Widget;

class ArticleBox extends ArticleBox_parent
{
    /**
     * Returns true if the user has admin rights
     *
     * @return bool
     */
    public function fcUserHasAdminRights()
    {
        $oUser = \OxidEsales\Eshop\Core\Registry::getSession()->getUser();
        if ($oUser === null) {
            return false;
        }
        if (!$oUser instanceof \OxidEsales\Eshop\Application\Model\User) {
            return false;
        }
        return $oUser->inGroup('oxidadmin');
    }
}