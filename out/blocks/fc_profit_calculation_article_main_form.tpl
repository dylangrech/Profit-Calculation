[{if $edit->oxarticles__oxbprice->value !== '' && $edit->fcGetGrossProfit() != '' && $edit->fcGetProfitMargin() !== '' }]
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
            document.getElementById('grossProfitText').style.margin = '5px 5px';
            document.getElementById('profitMarginText').style.margin = '5px 5px';
        });
    </script>
    <tr style="display: none" id="grossProfit">
        <td class="edittext">
            [{oxmultilang ident="FC_PROFIT_CALCULATION_GROSS_PROFIT_LABEL"}]
        </td>
        <td class="edittext">
            <p id="grossProfitText" style="color: [{if $edit->fcGetGrossProfit() < 0}] red [{/if}]">
                [{$edit->fcGetGrossProfit()}]€
            </p>
        </td>
    </tr>
    <tr style=" display: none" id="profitMargin">
        <td class="edittext">
            [{oxmultilang ident="FC_PROFIT_CALCULATION_PROFIT_MARGIN_LABEL"}]
        </td>
        <td class="edittext">
            <p id="profitMarginText">
                [{$edit->fcGetProfitMargin()}]%
            </p>
        </td>
    </tr>
[{/if}]
[{$smarty.block.parent}]