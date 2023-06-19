<?php

namespace Fatchip\ProfitCalculation\Model;

class Article extends Article_parent
{
    /**
     * Calculates the Gross Profit and returns the value or returns false if purchase price is null
     *
     * @return false|string
     */
    public function fcGetGrossProfit()
    {
        if (!empty($this->oxarticles__oxbprice->value)) {
            $flSellingPriceWithoutVAT = $this->oxarticles__oxprice->value / (1+($this->getArticleVat()/100));
            $flGrossProfit = $flSellingPriceWithoutVAT - $this->oxarticles__oxbprice->value;
            return number_format($flGrossProfit, 2, '.', ',');
        }
        return false;
    }

    /**
     * Calculates the Profit Margin and returns the value or returns false if gross profit is null
     *
     * @return false|string
     */
    public function fcGetProfitMargin()
    {
        $flGrossProfit = $this->fcGetGrossProfit();
        if (!empty($flGrossProfit)) {
            $flProfitMargin = ($flGrossProfit/$this->oxarticles__oxprice->value) * 100;
            return number_format($flProfitMargin, 2);
        }
        return false;
    }
}