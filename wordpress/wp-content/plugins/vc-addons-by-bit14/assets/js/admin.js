if (typeof (jQuery) != 'undefined') {

    jQuery.noConflict(); // Reverts '$' variable back to other JS libraries

    (function ($) {
        "use strict";

        $(function () {

            $(document.body).on('change', '.wpb-select.theme_style', function () {
                $('.bit14-testimonial-style').attr('src', assets_url + 'images/' + $(this).val() + '.jpg');
            });
        });

    }(jQuery));
}