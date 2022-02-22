var aListRemoveButton = document.querySelectorAll('.listRemoveButton');

if (aListRemoveButton) {
    aListRemoveButton.forEach((item) => {
        item.addEventListener('click', function (evt) {
            evt.preventDefault();
            var targetForm = this.dataset.triggerform;
            document.querySelector('#' + targetForm).submit();
            return false;
        });
    });
}
