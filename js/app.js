$(document).ready(function() {

    let grid = $('.grid');

    grid.imagesLoaded(function() {

        grid.masonry({
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            percentPosition: true,
            isFitWidth: true
        });

    });

})

