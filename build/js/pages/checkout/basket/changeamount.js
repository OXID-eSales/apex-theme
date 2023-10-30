document.addEventListener('DOMContentLoaded', function () {
    addBasketAmountEventlisteners();
}, false);


const addBasketAmountEventlisteners = function () {
    const aAmountButtons = document.querySelectorAll('.js-amount button');
    const aAmountInputs = document.querySelectorAll('input[name^="aproducts"][name$="[am]"]');
    const aRemoveButtons = document.querySelectorAll('#basket_form .js-remove');
    const productLabelInputs = document.querySelectorAll('#basket_form .persParam');

    if (aAmountButtons) {
        aAmountButtons.forEach((btn) => {
            btn.addEventListener('click', function (evt) {
                evt.preventDefault();
                mode = btn.classList.contains('js-decreaseAmount') ? 'sub' : 'add';
                changeInputAmount(btn, mode);
            })
        });
    }

    if (aAmountInputs) {
        aAmountInputs.forEach((input) => {
            input.addEventListener('change', function (evt) {
                evt.preventDefault();
                changeInputAmountAjax();
            })
        });
    }

    if (aRemoveButtons) {
        aRemoveButtons.forEach((btn) => {
            btn.addEventListener('click', function (evt) {
                evt.preventDefault();
                const amountInput = btn.closest('.basketitemrow').querySelector('input[name^="aproducts"][name$="[am]"]');
                amountInput.value = 0;
                amountInput.dispatchEvent(new Event('change'));
            })
        });
    }

    if (productLabelInputs) {
        productLabelInputs.forEach((input) => {
            input.addEventListener('change', function (evt) {
                evt.preventDefault();
                updateProductLabel(input);
            })
        });
    }
}


const changeInputAmount = function (button, mode) {
    const amountWrapper = button.closest('.js-amount');
    if (amountWrapper) {
        const amountInput = amountWrapper.querySelector('input[name^="aproducts"][name$="[am]"]');
        if (!amountInput) {
            return;
        }
        mode === 'sub' ? amountInput.value = Math.max(0, parseInt(amountInput.value, 10) - 1) : null;
        mode === 'add' ? amountInput.value = parseInt(amountInput.value, 10) + 1 : null;
        // trigger ajax
        debounceCall(function () {
            addLoadingSpinner(amountWrapper.closest('.list-group-item'));
            amountInput.dispatchEvent(new Event('change'));
        }, 350);
    }
}

const updateProductLabel = function (input) {
    debounceCall(function () {
        const row = input.closest('.basketitemrow');
        if (row) {
            addLoadingSpinner(row);
        }
        changeInputAmountAjax();
    }, 350);
};


const addLoadingSpinner = function (row) {
    const sLoadingSpinner = '<div style="position: absolute; left: 0; right: 0; top: 0; bottom: 0; z-index: 10; --bs-bg-opacity: .75;" class="loadingShadowMinibasket bg-secondary"><div class="spinner-border text-primary"><span class="visually-hidden">Loading...</span></div></div>';
    const newDoc = new DOMParser().parseFromString(sLoadingSpinner, 'text/html');
    const nLoadingSpinner = newDoc.body.querySelector('.loadingShadowMinibasket');

    row.prepend(nLoadingSpinner);
}


const changeInputAmountAjax = function () {
    const data = new FormData(document.getElementById('basket_form'));

    fetch("/index.php", {
        method: "POST",
        body: data
    }).then(function (response) {
        if (response.ok) {
            return response.text();
        }
        return Promise.reject(response);
    }).then(function (response) {
        const newDoc = new DOMParser().parseFromString(response, 'text/html');
        const nWrapper = newDoc.body;
        document.querySelector('body').replaceWith(nWrapper);
        addBasketAmountEventlisteners();
    }).catch(function (error) {
        console.log(error);
    });
}


const debounceCall = (function () {
    let timer = 0;
    return function (callback, ms) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
    };
})();
