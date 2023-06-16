<?php

namespace Fatchip\ProfitCalculation\Controller\Admin;

use Fatchip\ProfitCalculation\Model\ProfitCalculation;
use OxidEsales\Eshop\Core\UtilsVatSelector;

class ArticleMain extends ArticleMain_parent
{
    /**
     * Returns the Gross Profit
     *
     * @param $flPurchasePrice
     * @param $flSellingPrice
     * @return string
     */
    public function fcGetGrossProfit($flPurchasePrice, $flSellingPrice, $iArticleId)
    {
        $oProfitCalculation = new ProfitCalculation();
        return $oProfitCalculation->calculateGrossProfit($flPurchasePrice, $flSellingPrice, $iArticleId);
    }

    /**
     * Returns the Profit Margin
     *
     * @param $flPurchasePrice
     * @param $flSellingPrice
     * @return string
     */
    public function fcGetProfitMargin($flPurchasePrice, $flSellingPrice, $iArticleId)
    {
        $oProfitCalculation = new ProfitCalculation();
        return $oProfitCalculation->calculateProfitMargin($flPurchasePrice, $flSellingPrice, $iArticleId);
    }
}