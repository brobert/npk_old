/* ========================================================================
 * login.js
 * Page/renders: page-login.html
 * Plugins used: parsley
 * ======================================================================== */

'use strict';

(function (factory) {
    if (typeof define === 'function' && define.amd) {
        define([
            'parsley'
        ], factory);
    } else {
        factory();
    }
}(function () {

    $(function () {
        // Login form function
        // ================================
        var $form    = $('form[name=form-login]');

        // On button submit click
        $form.on('click', 'button[type=submit]', function (e) {
            var $this = $(this);

            // Run parsley validation
            if ($form.parsley().validate()) {
                // Disable submit button
                $this.prop('disabled', true);

                // start nprogress bar
                NProgress.start();

                // you can do the ajax request here
                // this is for demo purpose only
                debugger;
                $.ajax({
                    type: $form.attr('method'),
                    url: $form.attr('action'),
                    data: $form.serialize(),
                    success: success,
                    dataType: dataType
                })
                setTimeout(function () {
                    // done nprogress bar
                    NProgress.done();

                    // redirect user
                    location.href = '/';
                }, 500);
            } else {
                // toggle animation
                $form
                    .removeClass('animation animating shake')
                    .addClass('animation animating shake')
                    .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                        $(this).removeClass('animation animating shake');
                    });
            }
            // prevent default
            e.preventDefault();
        });
    });

}));