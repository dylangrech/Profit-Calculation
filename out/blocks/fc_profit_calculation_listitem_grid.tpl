[{if $oView->fcUserCanSeeProfitData() === true}]
    [{if $product->fcGetGrossProfit() !== false}]
        <p>
            [{oxmultilang ident="FC_PROFIT_CALCULATION_GROSS_PROFIT_LABEL"}]
            <span style="color: [{if $product->fcGetGrossProfit() < 0}] red [{/if}]">
                [{$product->fcGetGrossProfit()}]€
            </span>
        </p>
        <p>
            [{oxmultilang ident="FC_PROFIT_CALCULATION_PROFIT_MARGIN_LABEL"}][{$product->fcGetProfitMargin()}]%
        </p>
    [{/if}]
[{/if}]
[{$smarty.block.parent}]