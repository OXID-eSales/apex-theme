// Script to select Wrapping by clicking the image
var wrappingTargetImg = document.querySelectorAll('.wrappingTargetImg');

if (wrappingTargetImg) {
    wrappingTargetImg.forEach((item) => {
        item.addEventListener('click', function () {
            var targetRadio = this.dataset.target;
            document.getElementById(targetRadio).click();
        })
    });
}

// Script to select Greeting Card by clicking the image
var wrapCardImg = document.querySelectorAll('#wrappCard img');

if (wrapCardImg) {
    wrapCardImg.forEach((item) => {
        item.addEventListener('click', function () {
            this.parentNode.parentNode.querySelector('input').click();
    });});
}
