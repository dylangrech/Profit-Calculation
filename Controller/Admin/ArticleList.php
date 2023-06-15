<?php

namespace Fatchip\ProfitCalculation\Controller\Admin;

class ArticleList extends ArticleList_parent
{
    public function fcGetProfitMargin($flPurchasePrice, $flSellingPrice)
    {
        $oArticleMain = new ArticleMain();
        $profitMargin = $oArticleMain->fcGetProfitMargin($flPurchasePrice, $flSellingPrice);
        if ($profitMargin === '0.00' || $profitMargin === 'nan') {
            return 'N/A';
        }
        return $profitMargin . '%';
    }
}