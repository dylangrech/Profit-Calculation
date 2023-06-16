[{if $edit->oxarticles__oxbprice->value !== '' && $edit->oxarticles__oxprice->value !== '' && $oView->fcGetGrossProfit($edit->oxarticles__oxbprice->value, $edit->oxarticles__oxprice->value, $edit->oxarticles__oxid->value) != '0.00' && $oView->fcGetProfitMargin($edit->oxarticles__oxbprice->value, $edit->oxarticles__oxprice->value, $edit->oxarticles__oxid->value) !== 'nan' }]
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let priceInputField = document.querySelector('[name="editval[oxarticles__oxprice]"]');
            let parentElement = priceInputField.parentElement;
            let siblingElement = parentElement.parentElement;
            let grossProfitData = document.getElementById('grossProfit');
            let profitMarginData = document.getElementById('profitMargin');
            siblingElement.insertAdjacentElement('afterend', grossProfitData);
            grossProfitData.insertAdjacentElement('afterend', profitMarginData);
            grossProfitData.style.display = '';
            profitMarginData.style.display = '';
        });
    </script>
    <tr style="display: none" id="grossProfit">
        <td class="edittext">
            [{oxmultilang ident="FC_PROFIT_CALCULATION_GROSS_PROFIT_LABEL"}] ([{$oActCur->sign}])
        </td>
        <td class="edittext">
            <p style="color: [{if $oView->fcGetGrossProfit($edit->oxarticles__oxbprice->value, $edit->oxarticles__oxprice->value, $edit->oxarticles__oxid->value) > 0}] green [{else}] red [{/if}]">
                [{$oView->fcGetGrossProfit($edit->oxarticles__oxbprice->value, $edit->oxarticles__oxprice->value, $edit->oxarticles__oxid->value)}]
            </p>
        </td>
    </tr>
    <tr style="display: none" id="profitMargin">
        <td class="edittext">
            [{oxmultilang ident="FC_PROFIT_CALCULATION_PROFIT_MARGIN_LABEL"}]
        </td>
        <td class="edittext">
            <p style="color: [{if $oView->fcGetProfitMargin($edit->oxarticles__oxbprice->value, $edit->oxarticles__oxprice->value, $edit->oxarticles__oxid->value) > 0}] green [{else}] red [{/if}]">
                [{$oView->fcGetProfitMargin($edit->oxarticles__oxbprice->value, $edit->oxarticles__oxprice->value, $edit->oxarticles__oxid->value)}]
            </p>
        </td>
    </tr>
[{/if}]
[{$smarty.block.parent}]