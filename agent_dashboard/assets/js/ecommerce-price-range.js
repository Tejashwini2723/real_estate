(function () {
    "use strcit";

    /* non linear slider */
    var nonLinearSlider = document.getElementById('nonlinear');
    noUiSlider.create(nonLinearSlider, {
        connect: true,
        behaviour: 'tap',
        start: [8000, 40000],
        range: {
            // Starting at 500, step the value by 500,
            // until 4000 is reached. From there, step by 1000.
            'min': [0],
            'max': [50000]
        }
    });
    var nodes = [
        document.getElementById('lower-value'), // 0
        document.getElementById('upper-value')  // 1
    ];
    // Display the slider value and how far the handle moved
    // from the left edge of the slider.
    nonLinearSlider.noUiSlider.on('update', function (values, handle, unencoded, isTap, positions) {
        nodes[handle].innerHTML = values[handle];
    });
    
    var colorLinks = document.querySelectorAll('.product-colors');

    colorLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevents the default action (going to another page)

            // Remove 'selected' class from all color links
            colorLinks.forEach(function(link) {
                link.classList.remove('selected');
            });

            // Add 'selected' class to the clicked color link
            this.classList.add('selected');
        });
    });
})();