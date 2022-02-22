var paymentInputs = document.querySelectorAll('#payment .form-check input[type=radio]');

if (paymentInputs) {
    paymentInputs.forEach((item) => {
        item.addEventListener('click', function (evt) {
            document.querySelectorAll('.payment-option', evt.target).forEach((item) => {item.style.display = 'none'});
            var targetParentDl = evt.target.parentNode.parentNode;
            targetParentDl.querySelectorAll('.payment-option').forEach((item) => {item.style.display = 'block'});
        });
    });
}
