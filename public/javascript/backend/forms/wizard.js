/* ========================================================================
 * wizard.js
 * Page/renders: forms-wizard.html
 * Plugins used: steps, inputmask, parsley
 * ======================================================================== */

'use strict';

(function (factory) {
    if (typeof define === 'function' && define.amd) {
        define([
            'jquery-steps',
            'parsley',
            'inputmask'
        ], factory);
    } else {
        factory();
    }
}(function () {
    $(function () {

        // Form wizard with validation
        // ================================
        $('#wizard-validate').steps({
            headerTag: '.wizard-title',
            bodyTag: '.wizard-container',
            transitionEffect: 'fade',
			labels: {
				finish: 'Zapisz',
			},
            onStepChanging: function (event, currentIndex, newIndex) {
                debugger;
                // Allways allow previous action even if the current form is not valid!
                if (currentIndex > newIndex) {
                    return true;
                }


                // NOTE: Use parsley group(data-parsley-group) to validate form group
                // and move to next container if validation is passed. No need to init
                // parsley validation plugin on the form. Just put the parsley built-in
                // validator(eg:data-parsley-required='true') to the form input.
                // ======================================================================
                // SAMPLE: <input type='text' name='first-name' class='form-control' placeholder='First Name' data-parsley-group='{group-name}' data-parsley-required>

                // validate 'order' section: data-parsley-group='order'
                if ((currentIndex === 0)) {
                    return $(this).parsley().validate('basic');
                }

                // validate 'information' section: data-parsley-group='information'
                if ((currentIndex === 1)) {
                    return $(this).parsley().validate('advance');
                }

            },
            onStepChanged: function (event, currentIndex, priorIndex) {
                // Used to skip the 'Warning' step if the user is old enough.
                if (currentIndex === 2 && Number($('#age-2').val()) >= 18) {
                    $('#form-3').steps('next');
                }

                // Used to skip the 'Warning' step if the user is old enough and wants to the previous step.
                if (currentIndex === 2 && priorIndex === 3) {
                    $('#form-3').steps('previous');
                }
            },
            onFinishing: function (event, currentIndex, newIndex) {
                // revalidate the whole form
                return $(this).parsley().validate();
            },
            onFinished: function () {
                // yayyy! all validation is pass.. now we can send data to server
                // or display message ;)
                alert('submitted!');
            }
        });
    });

}));