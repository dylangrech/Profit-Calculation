<?php

namespace Fatchip\ProfitCalculation\Controller\Admin;

use Fatchip\ProfitCalculation\HelperClass\ProfitCalculation;

class ArticleList extends ArticleList_parent
{
    /**
     * Gets the Profit Margin of a particular article
     *
     * @param $oArticle
     * @return string
     */
    public function fcGetProfitMargin($oArticle)
    {
        $oProfitCalculation = oxNew(ProfitCalculation::class);
        $sProfitMargin = $oProfitCalculation->getProfitMargin($oArticle);
        return !empty($sProfitMargin) ? $sProfitMargin.'%' : '';
    }
}