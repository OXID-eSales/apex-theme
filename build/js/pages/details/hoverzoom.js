/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

document.addEventListener("DOMContentLoaded", function() {
    const zoomContainers = document.querySelectorAll('.zoom-container-hover');

    zoomContainers.forEach(container => {
        const img = container.querySelector('img');

        //Disable zoom on touch for mobile
        img.addEventListener('touchstart', function(e) {
            e.preventDefault();
        });

        img.addEventListener('mouseover', function() {
            img.classList.add('zoom');
        });

        container.addEventListener('mouseout', function() {
            img.classList.remove('zoom');
        });

        img.addEventListener('mousemove', function(e) {
            if (img.classList.contains('zoom')) {
                const rect = img.getBoundingClientRect();
                const x = e.clientX - rect.left; // X-coordinate relative to the image
                const y = e.clientY - rect.top;  // Y-coordinate relative to the image

                // Calculate percentage positions for transform origin
                const xPercent = (x / rect.width) * 100;
                const yPercent = (y / rect.height) * 100;

                // Set transform origin
                img.style.transformOrigin = `${xPercent}% ${yPercent}%`;
            }
        });
    });
});
