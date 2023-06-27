var cookieNote = document.getElementById('cookieNote');
if (!Cookies.get('displayedCookiesNotification') && cookieNote) {
    cookieNote.removeAttribute("hidden")

    document.getElementById('cookieNoteCloseButton').addEventListener('click', function () {
        Cookies.set('displayedCookiesNotification', 1, {path: '/', expires: 30});
    });
}