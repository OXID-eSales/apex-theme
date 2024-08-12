/**
 * Script for Variantselection
 */
addDropdownLinksEventListeners = () => {
    var aVariantDropdownLinks = document.querySelectorAll('#variants .dropDown .form-select');

    if (aVariantDropdownLinks) {
        aVariantDropdownLinks.forEach((select) => select.addEventListener('change', handleVariantDropdownLinkClick));
    }
};

handleVariantDropdownLinkClick = (e) => {
    e.preventDefault();

    // do ajax stuff
    let reloadForm = document.querySelector('.js-oxWidgetReload');
    let formData = serialize(reloadForm);
    let aSelects = document.querySelectorAll('select[name^=varselid]', 'form.js-oxProductForm');


    aSelects.forEach((select, i) => {
        formData += '&varselid%5B' + i + '%5D=' + select.value;
    });

    // perform ajax call
    var request = new XMLHttpRequest();
    request.open('GET', '/widget.php?' + formData, true);

    request.onload = function () {
        if (this.status >= 200 && this.status < 400) {
            // Success!
            let html = this.response;
            // replace markup
            setOuterHtmlAndExecuteScripts(document.getElementById('details_container'), html);
            // bind event listeners again
            addDropdownLinksEventListeners();
        }
    };

    request.onerror = function () {
        // There was a connection error of some sort
        console.log('error');
    };

    request.send();
};

addDropdownLinksEventListeners();


/*!
 * Serialize all form data into a query string
 * (c) 2018 Chris Ferdinandi, MIT License, https://gomakethings.com
 * @param  {Node}   form The form to serialize
 * @return {String}      The serialized form data
 */
var serialize = function (form) {

    // Setup our serialized data
    var serialized = [];

    // Loop through each field in the form
    for (var i = 0; i < form.elements.length; i++) {

        var field = form.elements[i];

        // Don't serialize fields without a name, submits, buttons, file and reset inputs, and disabled fields
        if (!field.name || field.disabled || field.type === 'file' || field.type === 'reset' || field.type === 'submit' || field.type === 'button') continue;

        // If a multi-select, get all selections
        if (field.type === 'select-multiple') {
            for (var n = 0; n < field.options.length; n++) {
                if (!field.options[n].selected) continue;
                serialized.push(encodeURIComponent(field.name) + "=" + encodeURIComponent(field.options[n].value));
            }
        }

        // Convert field data to a query string
        else if ((field.type !== 'checkbox' && field.type !== 'radio') || field.checked) {
            serialized.push(encodeURIComponent(field.name) + "=" + encodeURIComponent(field.value));
        }
    }

    return serialized.join('&');

};
