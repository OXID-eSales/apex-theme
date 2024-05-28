function addToNoticelistAjax(articleid, am = 1, callback) {
    var stoken = document.querySelector('input[name=stoken]').value;
    var url = '/index.php?cl=details&aid=' + articleid + '&anid=' + articleid + '&fnc=tonoticelist&am=' + am + '&stoken=' + stoken;

    // perform ajax call
    var request = new XMLHttpRequest();
    request.open('GET', url, true);

    request.onerror = function () {
        // There was a connection error of some sort
        console.log('error');
    };

    request.onreadystatechange = function () {
        if (typeof callback === 'function' && am.readyState === 4) {
            callback();
        }
    };

    request.send();
}
