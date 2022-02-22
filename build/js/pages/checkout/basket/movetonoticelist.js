function addToNoticelist(articleid) {
    var stoken = document.querySelector('input[name=stoken]').value;
    var url = '/index.php?cl=details&aid=' + articleid + '&fnc=tonoticelist&am=1&stoken=' + stoken;

    // perform ajax call
    var request = new XMLHttpRequest();
    request.open('GET', url, true);

    request.onerror = function () {
        // There was a connection error of some sort
        console.log('error');
    };

    request.send();
}
