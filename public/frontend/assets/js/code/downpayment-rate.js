$(document).ready(function () {
    $('#down_payment_rate').on('input', function () {
        var downPaymentRate = parseFloat($(this).val());
        var contractPrice = parseFloat($('#contract_price').val());

        if (!isNaN(downPaymentRate) && !isNaN(contractPrice)) {
            var downPaymentAmount = (downPaymentRate / 100) * contractPrice;
            var balance = contractPrice - downPaymentAmount;

            $('#down_payment_amount').val(downPaymentAmount.toFixed(2));
            $('#balance').val(balance.toFixed(2));
        }
    });
});