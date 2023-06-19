[{if $oView->userHasRights() === true}]
    <p>
        [{oxmultilang ident="FC_PROFIT_CALCULATION_GROSS_PROFIT_LABEL"}]
        <span style="color: [{if $oDetailsProduct->fcGetGrossProfit() < 0}] red [{/if}]">
            [{$oDetailsProduct->fcGetGrossProfit()}]€
        </span>
    </p>
    <p>
        [{oxmultilang ident="FC_PROFIT_CALCULATION_PROFIT_MARGIN_LABEL"}][{$oDetailsProduct->fcGetProfitMargin()}]%
    </p>
[{/if}]
[{$smarty.block.parent}]