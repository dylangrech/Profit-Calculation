<?php

namespace Fatchip\ProfitCalculation\Model;

/**
 * Model for calculating the gross profit and the margin
 */
class ProfitCalculation
{
    /**
     * Calculates the Gross Profit and returns either the correct answer or 0.00 if empty parameters
     *
     * @param $flPurchasePrice
     * @param $flSellingPrice
     * @return string
     */
    public function calculateGrossProfit($flPurchasePrice, $flSellingPrice, $iArticleId)
    {
        if (!empty($flPurchasePrice) && !empty($flSellingPrice)) {
            $flSellingPriceWithoutVAT = $flSellingPrice / (1+($this->getArticleVat($iArticleId)/100));
            $flGrossProfit = $flSellingPriceWithoutVAT - $flPurchasePrice;
            return number_format($flGrossProfit, 2, '.', ',');
        }
        return '0.00';
    }

    /**
     * Function to calculate the Profit Margin which is then returned
     *
     * @param $flPurchasePrice
     * @param $flSellingPrice
     * @return string
     */
    public function calculateProfitMargin($flPurchasePrice, $flSellingPrice, $iArticleId)
    {
        $flGrossProfit = $this->calculateGrossProfit($flPurchasePrice, $flSellingPrice, $iArticleId);
        $flProfitMargin = ($flGrossProfit/$flSellingPrice) * 100;
        return number_format($flProfitMargin, 2);
    }

    /**
     * Get the VAT of a specific article
     *
     * @param $iArticleId
     * @return void
     */
    public function getArticleVat($iArticleId)
    {
        $oArticle = oxNew(\OxidEsales\Eshop\Application\Model\Article::class);
        $oArticle->load($iArticleId);
        $oVatSelector = oxNew(\OxidEsales\Eshop\Application\Model\VatSelector::class);
        return $oVatSelector->getArticleVat($oArticle);
    }
}