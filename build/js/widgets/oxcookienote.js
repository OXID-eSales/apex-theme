function setCookieNote(cookieNote) {
    if( !Cookies.get("displayedCookiesNotification") ) {
        Cookies.set("displayedCookiesNotification", 1, { path: '/', expires: 30 });
    } else {
        cookieNote.remove();
    }
}