<?php

namespace Fatchip\ProfitCalculation\Component\Widget;

class ArticleBox extends ArticleBox_parent
{
    /**
     * Returns true if the user has admin rights
     *
     * @return bool
     */
    public function fcUserCanSeeProfitData()
    {
        $oUser = \OxidEsales\Eshop\Core\Registry::getSession()->getUser();
        if ($oUser && $oUser->inGroup('oxidadmin') === true) {
            return true;
        }
        return false;
    }
}