/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

document.addEventListener("DOMContentLoaded", function() {
    const zoomContainers = document.querySelectorAll('.zoom-container-magnifier');

    zoomContainers.forEach(container => {
        const img = container.querySelector('img');
        const lens = container.querySelector('.lens');
        const result = container.querySelector('.zoom-result-magnifier');
        const resultImg = result.querySelector('img');

        resultImg.src = img.src;

        container.addEventListener('mousemove', function(e) {
            lens.style.display = 'block';
            result.style.display = 'block';

            const containerRect = container.getBoundingClientRect();
            const imgRect = img.getBoundingClientRect();
            const x = e.clientX - containerRect.left;
            const y = e.clientY - containerRect.top;

            moveLens(lens, img, resultImg, containerRect, imgRect, x, y);
        });

        container.addEventListener('mouseleave', function() {
            lens.style.display = 'none';
            result.style.display = 'none';
        });

        function moveLens(lens, img, resultImg, containerRect, imgRect, x, y) {
            const lensWidth = lens.offsetWidth;
            const lensHeight = lens.offsetHeight;
            const cx = result.offsetWidth / lensWidth;
            const cy = result.offsetHeight / lensHeight;

            let lensX = x - lensWidth / 2;
            let lensY = y - lensHeight / 2;

            // Calculate image offset within the container
            const imgOffsetX = (containerRect.width - imgRect.width) / 2;
            const imgOffsetY = (containerRect.height - imgRect.height) / 2;

            // Adjust lens position to be within the image boundaries
            if (lensX < imgOffsetX) lensX = imgOffsetX;
            if (lensY < imgOffsetY) lensY = imgOffsetY;
            if (lensX > imgOffsetX + imgRect.width - lensWidth) lensX = imgOffsetX + imgRect.width - lensWidth;
            if (lensY > imgOffsetY + imgRect.height - lensHeight) lensY = imgOffsetY + imgRect.height - lensHeight;

            lens.style.left = `${lensX}px`;
            lens.style.top = `${lensY}px`;

            const transformX = -((lensX - imgOffsetX) * cx);
            const transformY = -((lensY - imgOffsetY) * cy);

            // Calculate dynamic top and translateY offsets for the result image
            const topOffset = ((imgRect.height * cy) - result.offsetHeight) / 2;
            const translateYOffset = - topOffset - ((lensY - imgOffsetY) * cy);

            resultImg.style.width = `${imgRect.width * cx}px`;
            resultImg.style.height = `${imgRect.height * cy}px`;
            resultImg.style.top = `${topOffset}px`;
            resultImg.style.transform = `translate(${transformX}px, ${translateYOffset}px)`;
        }
    });
});
