<?php

namespace Fatchip\ProfitCalculation\HelperClass;

/**
 * Class for calculating the gross profit and the margin
 */
class ProfitCalculation
{
    /**
     * Calculates the Gross Profit and returns the value or returns false if purchase price is null
     *
     * @param $oArticle
     * @return false|string
     */
    public function getGrossProfit($oArticle)
    {
        if (!empty($oArticle->oxarticles__oxbprice->value)) {
            $flSellingPriceWithoutVAT = $oArticle->oxarticles__oxprice->value / (1+($oArticle->getArticleVat()/100));
            $flGrossProfit = $flSellingPriceWithoutVAT - $oArticle->oxarticles__oxbprice->value;
            return number_format($flGrossProfit, 2, '.', ',');
        }
        return false;
    }

    /**
     * Calculates the Profit Margin and returns the value or returns false if gross profit is null
     *
     * @param $oArticle
     * @return false|string
     */
    public function getProfitMargin($oArticle)
    {
        $flGrossProfit = $this->getGrossProfit($oArticle);
        if (!empty($flGrossProfit)) {
            $flProfitMargin = ($flGrossProfit/$oArticle->oxarticles__oxprice->value) * 100;
            return number_format($flProfitMargin, 2);
        }
        return false;
    }
}