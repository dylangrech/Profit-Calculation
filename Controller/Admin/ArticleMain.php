<?php

namespace Fatchip\ProfitCalculation\Controller\Admin;

class ArticleMain extends ArticleMain_parent
{
    public function fcGetGrossProfit($flPurchasePrice, $flSellingPrice)
    {
        if ($flPurchasePrice !== '0' && $flSellingPrice !== '0') {
            $flSellingPriceWithoutVAT = $flSellingPrice / 1.19;
            $flAnswer = $flSellingPriceWithoutVAT - $flPurchasePrice;
            return number_format($flAnswer, 2, '.', ',');
        }
        return '0.00';
    }

    public function fcGetProfitMargin($flPurchasePrice, $flSellingPrice)
    {
        $flGrossProfit = $this->fcGetGrossProfit($flPurchasePrice, $flSellingPrice);
        $flProfitMargin = ($flGrossProfit/$flSellingPrice) * 100;
        return number_format($flProfitMargin, 2);
    }
}