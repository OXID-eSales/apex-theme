var checkAgbTop = document.getElementById('checkAgbTop');
var oxdownloadableproductsagreement = document.getElementById('oxdownloadableproductsagreement');
var oxserviceproductsagreement = document.getElementById('oxserviceproductsagreement');

if (checkAgbTop) {
    checkAgbTop.addEventListener('click', function (evt) {
        document.querySelectorAll('input[name=ord_agb]').forEach((item) => {item.value = this.checked ? '1' : '0'});
    });
}

if (oxdownloadableproductsagreement) {
    oxdownloadableproductsagreement.addEventListener('click', function (evt) {
        document.querySelectorAll('input[name=oxdownloadableproductsagreement]').forEach((item) => {item.value = this.checked ? '1' : '0'});
    });
}

if (oxserviceproductsagreement) {
    oxserviceproductsagreement.addEventListener('click', function (evt) {
        document.querySelectorAll('input[name=oxserviceproductsagreement]').forEach((item) => {item.value = this.checked ? '1' : '0'});
    });
}
