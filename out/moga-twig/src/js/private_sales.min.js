/* *********************************
         * Private Sales Login
         * *********************************/

var checkAgb = document.getElementById('ord_agb');
var checkAgbSubmit = document.getElementById('ord_agb_accept');

if (checkAgb) {
    checkAgb.addEventListener('click', function (evt) {
        document.querySelectorAll('input[name=ord_agb]').forEach((item) => {item.value = this.checked ? '1' : '0'});
        if( checkAgbSubmit.disabled == true)
        {
            checkAgbSubmit.disabled = false;
        }
        else
        {
            checkAgbSubmit.disabled = true;
        }
    });
}
