var showShipAddress = document.getElementById('showShipAddress');

if (showShipAddress) {
    showShipAddress.addEventListener('change', showShipAddressAction);
}

function showShipAddressAction(evt) {
    evt.preventDefault();
    var shippingAddress = document.getElementById('shippingAddress');
    shippingAddress.style.display = (shippingAddress.style.display === 'none' ? 'block' : 'none');
}


var userChangeAddress = document.getElementById('userChangeAddress');

if (userChangeAddress) {
    userChangeAddress.addEventListener('click', userChangeAddressAction);
}

function userChangeAddressAction(evt) {
    evt.preventDefault();
    document.querySelectorAll('#addressForm, #addressText').forEach((item) => {item.style.display = item.style.display === 'none' ? 'block' : 'none'});
    return false;
}


var userChangeShippingAddress = document.getElementById('userChangeShippingAddress')

if (userChangeShippingAddress) {
    userChangeShippingAddress.addEventListener('click', showShipAddressAction);
}

/* CHANGE SHIPPING ADDRESS */

var userEditShippingAddressButton = document.querySelector('.dd-edit-shipping-address');

if (userEditShippingAddressButton) {
    userEditShippingAddressButton.addEventListener('click', userEditShippingAddressButtonAction);
}

function userEditShippingAddressButtonAction(evt) {
    evt.preventDefault();
    var shippingAddressForm = document.getElementById('shippingAddressForm');

    shippingAddressForm.style.display = shippingAddressForm.style.display === 'block' ? 'none' : 'block';

    // scroll to form
    if (shippingAddressForm.style.display === 'block') {
        scrollToShippingAddressForm();
    }
}


/* CREATE NEW SHIPPING ADDRESS */
var ddAddDeliveryAddressButton = document.querySelector('.dd-add-delivery-address');

if (ddAddDeliveryAddressButton) {
    ddAddDeliveryAddressButton.addEventListener('click', ddAddDeliveryAddressButtonAction);
}

function ddAddDeliveryAddressButtonAction(evt) {
    // hide edit buttons
    document.querySelectorAll('.edit-button').forEach((item) => {
      item.remove();
    });

    // empty form
    createNewShippingAddressForm();

    // remove active class from other buttons
    document.querySelectorAll('.setToThisShippingAddress').forEach((item) => {
       item.classList.remove('active');
    });

    // open form
    document.getElementById('shippingAddressForm').style.display = 'block';

    scrollToShippingAddressForm();
}


function createNewShippingAddressForm() {
    // inputs
    document.getElementById('shippingAddressForm').querySelectorAll('input').forEach((inputitem) => {
        inputitem.value = "";
    });

    // select
    document.getElementById('shippingAddressForm').querySelectorAll('select').forEach((selectitem) => {
        selectitem.selectedIndex = 0;
    });

    // force oxaddressid = -1
    var newShippingAddressBtn = document.querySelector('.dd-add-delivery-address label.btn');
    newShippingAddressBtn.classList.add('active');
    newShippingAddressBtn.click();
}


function scrollToShippingAddressForm()
{
    var shippingAddressForm = document.getElementById('shippingAddressForm');
    window.scrollTo(null, shippingAddressForm.offsetTop + 300);
}

/* CHANGE SHIPPING ADDRESS BUTTON */
var setToThisShippingAddress = document.querySelectorAll('.setToThisShippingAddress');

if (setToThisShippingAddress) {
    setToThisShippingAddress.forEach((setToThisShippingAddressItem) => {
        setToThisShippingAddressItem.addEventListener('click', () => {
            // close edit form
            var shippingAddressForm = document.getElementById('shippingAddressForm');
            shippingAddressForm.style.display = 'none';

            // disable form fields
            shippingAddressForm.querySelectorAll('input, select').forEach((inputItem) => {
               inputItem.disabled = true;
            });

            // set radio button to checked (fix for firefox to trigger change)
            setToThisShippingAddressItem.querySelector('input[type="radio"]').checked = true;

            // reset oxaddressid to selected element
            setToThisShippingAddressItem.closest('form').querySelector('input[name="fnc"]').value = "";
            setToThisShippingAddressItem.closest('form').submit();
        });
    });
}



var userFormSubmitBtn = document.querySelector('#userFormSubmit');

if (userFormSubmitBtn) {
    userFormSubmitBtn.addEventListener('click', (item) => {
        item.preventDefault();

        var user_form = document.querySelector('#user_form');
        // dispatch submit event to trigger validation
        user_form.dispatchEvent(new Event('submit'));

        // continue
        if (user_form.checkValidity() === true) {
            user_form.submit();
        }
    });
}

