// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    const sliders = document.querySelectorAll('.article-slider');
    Array.prototype.slice.call(sliders)
        .forEach(function (slider) {
            const container = slider.querySelector('.slider-container');
            const right = slider.querySelector('.slide-left');
            const left = slider.querySelector('.slide-right');

            if (left) {
                left.addEventListener('click', function(e){
                    container.scrollLeft += 300;
                });
            }

            if (right) {
                right.addEventListener('click', function(e){
                    container.scrollLeft -= 300;
                });
            }
        });


    /**
     * Form Validation
     * @type {NodeListOf<Element>}
     */

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                event.stopPropagation();

                // unrequire form elements that are not visible
                const aFormElements = form.querySelectorAll('input, select, checkbox, textarea');

                Array.prototype.slice.call(aFormElements)
                    .forEach((formElement) => {
                        if (isDisplayNoneItem(formElement, form)) {
                            if (formElement.required) {
                                formElement.required = false;
                                formElement.dataset.wasrequired = true;
                            }
                        }
                        // needed to reset the customValidity
                        formElement.setCustomValidity('');
                    });

                if (form.checkValidity()) {
                   form.submit();
                } else {
                    // reset form to original state
                    resetFormRequiredFields(form);
                }

                form.classList.add('was-validated')
                clearInvalidFeedbackDivs(form);
                setFormInvalidFeedback();

            }, false)
        })

    /**
     * Resets form to origin state. Removes data-wasrequired and sets required attribute         *
     * @param form
     */
    const resetFormRequiredFields = (form) => {
        const aResetFormElements = form.querySelectorAll('[data-wasrequired]');

        if (aResetFormElements) {
            form.querySelectorAll('[data-wasrequired]').forEach((item) => {
                item.required = true;
                delete item.dataset.wasrequired;
            });
        }
    }

    /**
     * Removes all .invalid-feedback nodes of a form
     * @param form
     */
    const clearInvalidFeedbackDivs = (form) => {
        const aCurrentInvalidMessageDivs = form.querySelectorAll('.invalid-feedback');
        if (aCurrentInvalidMessageDivs.length) {
            aCurrentInvalidMessageDivs.forEach(invDiv => invDiv.remove());
        }
    }

    /**
     * Adds invalid-feedback message
     */
    const setFormInvalidFeedback = () => {
        // set new invalid messages
        const aInvalidFormElements = document.querySelectorAll('.was-validated .form-control:invalid, .was-validated .form-select:invalid');

        if (aInvalidFormElements.length) {
            aInvalidFormElements.forEach((invalidFormElement) => {
                // use Oxid validation messages

                if (invalidFormElement.validity.valueMissing) {
                    invalidFormElement.setCustomValidity(oApex.i18n.DD_FORM_VALIDATION_REQUIRED);
                }

                if (invalidFormElement.validity.valueMissing && invalidFormElement.tagName.toLowerCase() === 'select') {
                    invalidFormElement.setCustomValidity(oApex.i18n.DD_FORM_VALIDATION_CHECKONE);
                }

                if (invalidFormElement.validity.typeMismatch) {
                    invalidFormElement.setCustomValidity(oApex.i18n.DD_FORM_VALIDATION_VALIDEMAIL);
                }


                const invalidMessageDiv = document.createElement('div');
                invalidMessageDiv.classList.add('invalid-feedback');
                invalidMessageDiv.textContent = invalidFormElement.validationMessage;
                invalidFormElement.after(invalidMessageDiv);
            });

            // scroll to first invalid element
            aInvalidFormElements[0].scrollIntoView({block: "center"});
        }
    }


    /**
     * Checks if element or one of it's ancestors is set to display: none
     * @param element source node
     * @param endNode check until
     * @returns {boolean} true if element or one of it's ancestors are display:none
     */
    const isDisplayNoneItem = function (element, endNode) {
        var parent = element.parentNode;

        if (parent.style.display === 'none') return true;

        while (parent && parent != endNode) {
            if (parent.style.display === 'none') {
                return true;
            }
            parent = parent.parentNode;
        }

        return false;
    }


    var changeEmail = document.querySelector('input.oxValidate_enterPass')

    if (changeEmail) {
        var passwordElem = document.querySelector('.oxValidate_pwd');
        var oldMail = changeEmail.value;
        changeEmail.addEventListener('keyup', (e) => {
                if (passwordElem) {
                    if (oldMail != e.target.value) {
                        passwordElem.style.display = "block";
                    }
                    else {
                        if (passwordElem.is(':visible')) {
                            passwordElem.style.display = "none";
                        }
                    }
                }
            }
        );
    }
})();
