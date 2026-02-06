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
    var formData = 'cl=details&aid=' + encodeURIComponent(articleId) +
        '&anid=' + encodeURIComponent(articleId) +
        '&fnc=tonoticelist&am=' + encodeURIComponent(am) +
        '&stoken=' + encodeURIComponent(stoken);

    // perform ajax call via POST to avoid stoken exposure in URL
    var request = new XMLHttpRequest();
    request.open('POST', '/index.php', true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

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
