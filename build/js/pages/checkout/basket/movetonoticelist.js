document.addEventListener('DOMContentLoaded', function () {
    addToNoticelistEventlisteners();
}, false);

window.addEventListener('basketLoaded', function () {
    addToNoticelistEventlisteners();
}, false);

const addToNoticelistEventlisteners = function () {
    const moveToNoticeList = document.querySelectorAll('button.btn-noticelist');
    if (moveToNoticeList) {
        moveToNoticeList.forEach((btn) => {
            btn.addEventListener('click', function (evt) {

                const articleId = btn.getAttribute('data-articleId');
                const amount = btn.getAttribute('data-amount');
                const action = btn.getAttribute('data-action');

                addToNoticelistAjax(articleId, amount, function () {
                    if (action === 'move') {
                        const basketindex = btn.getAttribute('data-basketid');

                        document.getElementById('aproducts_' + basketindex + '_remove').value = '1'
                    } else {
                        window.location.reload();
                    }
                });
            });
        });
    }
}

const addToNoticelistAjax = function(articleId, am = 1, callback) {
    var stoken = document.querySelector('input[name=stoken]').value;
    var url = '/index.php';

    // Build form data for POST request
    var formData = new FormData();
    formData.append('cl', 'details');
    formData.append('aid', articleId);
    formData.append('anid', articleId);
    formData.append('fnc', 'tonoticelist');
    formData.append('am', am);
    formData.append('stoken', stoken);

    // perform ajax call
    var request = new XMLHttpRequest();
    request.open('POST', url, true);

    request.onerror = function () {
        // There was a connection error of some sort
        console.log('error');
    };

    request.onreadystatechange = function () {
        if (typeof callback === 'function' && request.readyState === 4 && request.status === 200) {
            callback();
        }
    };

    request.send(formData);
}
