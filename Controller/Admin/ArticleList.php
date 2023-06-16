<?php

namespace Fatchip\ProfitCalculation\Controller\Admin;

use Fatchip\ProfitCalculation\Model\ProfitCalculation;
use OxidEsales\EshopCommunity\Core\Price;

class ArticleList extends ArticleList_parent
{
    /**
     * Returns the profit margin or an N/A string if value is 0.00 or nan
     *
     * @param $flPurchasePrice
     * @param $flSellingPrice
     * @return string
     */
    public function fcGetProfitMargin($flPurchasePrice, $flSellingPrice, $iArticleId)
    {
        $oProfitCalculation = new ProfitCalculation();
        $profitMargin = $oProfitCalculation->calculateProfitMargin($flPurchasePrice, $flSellingPrice, $iArticleId);
        if ($profitMargin == '0.00' || $profitMargin === 'nan') {
            return 'N/A';
        }
        return $profitMargin . '%';
    }

}