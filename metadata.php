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
        OxidEsales\Eshop\Application\Controller\Admin\ArticleMain::class => Fatchip\ProfitCalculation\Controller\Admin\ArticleMain::class,
        OxidEsales\Eshop\Application\Controller\Admin\ArticleList::class => Fatchip\ProfitCalculation\Controller\Admin\ArticleList::class,
    ],
    'blocks'      => [
        ['template' => 'article_main.tpl', 'block' => 'admin_article_main_form', 'file' => 'fc_profit_calculation_article_main_form.tpl'],
        ['template' => 'article_list.tpl', 'block' => 'admin_article_list_item', 'file' => 'fc_profit_calculation_article_list.tpl'],
        ['template' => 'article_list.tpl', 'block' => 'admin_article_list_colgroup', 'file' => 'fc_profit_calculation_article_list_colgroup.tpl'],
        ['template' => 'article_list.tpl', 'block' => 'admin_article_list_sorting', 'file' => 'fc_profit_calculation_article_list_sorting.tpl'],
    ],
    'events'       => [],
    'settings'     => []
];