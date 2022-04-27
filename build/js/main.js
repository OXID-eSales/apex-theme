    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        const sliders = document.querySelectorAll('.article-slider');
        Array.prototype.slice.call(sliders)
            .forEach(function (slider) {
                const container = slider.querySelector('.slider-container');
                const right = slider.querySelector('.slide-left');
                const left = slider.querySelector('.slide-right');

                left.addEventListener('click', function(e){
                    container.scrollLeft += 300;
                });

                right.addEventListener('click', function(e){
                    container.scrollLeft -= 300;
                });
            });


        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
