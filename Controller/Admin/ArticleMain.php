<?php

namespace Fatchip\ProfitCalculation\Controller\Admin;

use Fatchip\ProfitCalculation\HelperClass\ProfitCalculation;

class ArticleMain extends ArticleMain_parent
{
    /**
     * Gets the Gross Profit of a particular article
     *
     * @param $oArticle
     * @return mixed
     */
    public function fcGetGrossProfit($oArticle)
    {
        $oProfitCalculation = oxNew(ProfitCalculation::class);
        return $oProfitCalculation->getProfitDataByKey($oArticle, 'GrossProfit');
    }

    /**
     * Gets the Profit Margin of a particular article
     *
     * @param $oArticle
     * @return mixed
     */
    public function fcGetProfitMargin($oArticle)
    {
        $oProfitCalculation = oxNew(ProfitCalculation::class);
        return $oProfitCalculation->getProfitDataByKey($oArticle, 'ProfitMargin');
    }
}