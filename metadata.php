<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'          => 'fcprofitcalculation',
    'title'       => [
        'de' => 'Gewinn Berechnung',
        'en' => 'Profit Calculation',
    ],
    'description' => [
        'de' => 'Gewinn berechnen',
        'en' => 'Calculate profit',
    ],
    'thumbnail'   => '/out/admin/src/img/Thumbnail-Icon.png',
    'version'     => '1.0',
    'author'      => 'Dylan Grech',
    'url'         => 'https://www.oxid-esales.com/',
    'email'       => 'dylangrech99@gmail.com',
    'extend'      => [
        OxidEsales\Eshop\Application\Model\Article::class => Fatchip\ProfitCalculation\Model\Article::class,
        OxidEsales\Eshop\Application\Component\Widget\ArticleDetails::class => Fatchip\ProfitCalculation\Component\Widget\ArticleDetails::class,
        OxidEsales\Eshop\Application\Component\Widget\ArticleBox::class => Fatchip\ProfitCalculation\Component\Widget\ArticleBox::class,
    ],
    'blocks'      => [
        ['template' => 'article_main.tpl', 'block' => 'admin_article_main_form', 'file' => 'fc_profit_calculation_article_main_form.tpl'],
        ['template' => 'article_list.tpl', 'block' => 'admin_article_list_item', 'file' => 'fc_profit_calculation_article_list.tpl'],
        ['template' => 'article_list.tpl', 'block' => 'admin_article_list_colgroup', 'file' => 'fc_profit_calculation_article_list_colgroup.tpl'],
        ['template' => 'article_list.tpl', 'block' => 'admin_article_list_sorting', 'file' => 'fc_profit_calculation_article_list_sorting.tpl'],
        ['template' => 'page/details/inc/productmain.tpl', 'block' => 'details_productmain_persparams', 'file' => 'fc_profit_calculation_productmain.tpl'],
        ['template' => 'widget/product/listitem_grid.tpl', 'block' => 'widget_product_listitem_grid_tobasket', 'file' => 'fc_profit_calculation_listitem_grid.tpl'],
        ['template' => 'widget/product/listitem_infogrid.tpl', 'block' => 'widget_product_listitem_infogrid_tobasket', 'file' => 'fc_profit_calculation_listitem_infogrid.tpl'],
    ],
    'events'       => [],
    'settings'     => []
];