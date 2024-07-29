document.addEventListener("DOMContentLoaded", function() {
    const zoomContainers = document.querySelectorAll('.carousel-item');

    zoomContainers.forEach(container => {
        const img = container.querySelector('img');

        img.addEventListener('click', function(e) {
            if (img.classList.contains('zoom')) {
                img.classList.remove('zoom')
            } else {
                img.classList.add('zoom')
            }
        });

        img.addEventListener('mousemove', function(e) {
            const rect = img.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            // Calculate percentage positions for transform origin
            const xPercent = (x / rect.width) * 100;
            const yPercent = (y / rect.height) * 100;

            // Set transform origin
            img.style.transformOrigin = `${xPercent}% ${yPercent}%`;
        });
    });

    const zoomModal = document.getElementById('zoomModal')
    zoomModal.addEventListener('hidden.bs.modal', function (event) {
        const modalZoomImages = document.querySelectorAll('.carousel-item img.zoom');
        modalZoomImages.forEach(img => {
            img.classList.remove('zoom');
        });

    })
});
