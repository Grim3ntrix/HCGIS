$(document).ready(function () {
    $('#contract_term, #interest_rate').on('input', function () {
        var contractPrice = parseFloat($('#contract_price').val());
        var interestRate = parseFloat($('#interest_rate').val());
        var contractTerm = parseFloat($('#contract_term').val());

        if (!isNaN(contractPrice) && !isNaN(contractTerm) && !isNaN(interestRate)) {
            var annualInterestAmount = contractPrice * interestRate;
            var monthlyInterestAmount = annualInterestAmount / contractTerm;
            var endPrice = (contractPrice * interestRate) * contractTerm;

            $('#annual_interest_amount').val(annualInterestAmount.toFixed(2));
            $('#monthly_interest_amount').val(monthlyInterestAmount.toFixed(2));
            $('#end_price').val(endPrice.toFixed(2));
        }
    });
});
