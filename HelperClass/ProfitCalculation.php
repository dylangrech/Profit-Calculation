<?php

namespace Fatchip\ProfitCalculation\HelperClass;

/**
 * Class for calculating the gross profit and the margin
 */
class ProfitCalculation
{
    /**
     * Returns the value of a specific key from the profit data array
     *
     * @param $oArticle
     * @param $sKey
     * @return mixed
     */
    public function getProfitDataByKey($oArticle, $sKey)
    {
        if ($oArticle !== null) {
            $oArticle->load($oArticle->oxarticles__oxid->value);
        }

        if (!empty($oArticle->oxarticles__oxbprice->value) && !empty($oArticle->oxarticles__oxprice->value)) {
            $aProfitData = $this->calculateProfitData($oArticle);
        }
        return $aProfitData[$sKey];
    }

    /**
     * Calculate the Profit Data which is then returned as an array
     *
     * @param $oArticle
     * @return array
     */
    public function calculateProfitData($oArticle): array
    {
        $aProfitData = [];
        $flSellingPriceWithoutVAT = $oArticle->oxarticles__oxprice->value / (1+($this->getArticleVAT($oArticle)/100));
        $flGrossProfit = $flSellingPriceWithoutVAT - $oArticle->oxarticles__oxbprice->value;
        $flProfitMargin = ($flGrossProfit/$oArticle->oxarticles__oxprice->value) * 100;
        $aProfitData['GrossProfit'] = number_format($flGrossProfit, 2, '.', ',');
        $aProfitData['ProfitMargin'] = number_format($flProfitMargin, 2);
        return $aProfitData;
    }

    /**
     * Returns the VAT of that particular Article passed in the parameter
     *
     * @param $oArticle
     * @return false|float
     */
    public function getArticleVAT($oArticle)
    {
        return oxNew(\OxidEsales\Eshop\Application\Model\VatSelector::class)->getArticleVat($oArticle);
    }
}