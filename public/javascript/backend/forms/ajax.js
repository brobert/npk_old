/* ========================================================================
 * ajax.js
 * Page/renders: forms-ajax.html
 * 
 * NOTE: in this demo i'll use bootstrap alert component to display the 
 * done/fail message. You can always use any other notification components 
 * like modal or gritter to display the message to the users ;)
 * ======================================================================== */

/* global Ladda */

'use strict';

(function (factory) {
    if (typeof define === 'function' && define.amd) {
        define([
            'parsley',
            'ladda',
            'gritter'
        ], factory);
    } else {
        factory();
    }
}(function () {

    // Core function
    // ================================
    var formAjax = function (event) {
        var $form   = $(this),
            $btn    = $form.find('button[name="submit"]'),
            data    = $form.serialize(),
            type    = $form.attr('method'),
            url     = $form.attr('action');

        if ($form.parsley().validate()) {
            
            var jxhr = $.ajax({
                type: type,
                url: url,
                dataType: 'json',
                data: data
            }).done(function (data) {

//                $.gritter.add({
//                    title: data.status || $btn.data('title-s') || 'Succes',
//                    text: $btn.data('msg-s') || 'All setting saved',
//                    time: 1500
//                });
                
            }).fail(function (data) {

                var bsalert = '', 
                    message;

                // construct message base on status code
                switch (data.status) {
                    case 404:
                        message = 'The requested file is not found!';
                    break;
                    case 500:
                        message = 'Internal server / script error!';
                    break;
                }
                
//                $.gritter.add({
//                    title: $btn.data('title-f') || 'Error',
//                    text: $btn.data('msg-f') || 'Something went wrong, try again later',
//                    time: 3000
//                });
            });
        }

        event.preventDefault();
        return false;
    };

    $(function () {
        // Init form
        // ================================
        $('form[name="agency"]').on('submit', formAjax);
        $('form[name="validation"]').on('submit', formAjax);
        $('form[name="404"]').on('submit', formAjax);
        $('form[name="500"]').on('submit', formAjax);
    });

}));