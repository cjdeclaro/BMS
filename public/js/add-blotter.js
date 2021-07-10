$(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    
    $(".next").click(function(){
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;
            
            current_fs.css({
            'display': 'none',
            'position': 'relative'
        });
            next_fs.css({'opacity': opacity});
        },
            duration: 600
        });
    });
    
    $(".previous").click(function(){
    
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
        
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
                
                current_fs.css({
                'display': 'none',
                'position': 'relative'
            });
                previous_fs.css({'opacity': opacity});
            },
                duration: 600
        });
    });
    
    $('.radio-group .radio').click(function(){
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });
    
    $(".submit").click(function(){
        return false;
    })
    
});

$(function() {
    $('#summernote').summernote();
});

$(document).on('submit', '#msform', function(e) {
    e.preventDefault();

    var that = this;

    // Elements
        // Reporting Person Elements
            var rprtng_lname            = $('input[name="reporting[lastname]"]');
            var rprtng_fname            = $('input[name="reporting[firstname]"]');
            var rprtng_mname            = $('input[name="reporting[middlename]"]');
            var rprtng_gender           = $('select[name="reporting[gender]"]');
            var rprtng_nickname         = $('input[name="reporting[nickname]"]');
            var rprtng_citizenship      = $('input[name="reporting[citizenship]"]');
            var rprtng_civil_status     = $('select[name="reporting[civil_status]"]');
            var rprtng_birthday         = $('input[name="reporting[birthday]"]');
            var rprtng_qualifier        = $('input[name="reporting[qualifier]"]');
            var rprtng_phone            = $('input[name="reporting[phone]"]');
            var rprtng_home_no          = $('input[name="reporting[home-no]"]');
            var rprtng_email            = $('input[name="reporting[email]"]');
            var rprtng_address_1        = $('textarea[name="reporting[address-1]"]');
            var rprtng_address_2        = $('textarea[name="reporting[address-2]"]');
            var rprtng_education        = $('input[name="reporting[education]"]');
            var rprtng_occupation       = $('input[name="reporting[occupation]"]');
            var rprtng_id_presented     = $('input[name="reporting[id-presented]"]');

        // Suspect Elements
            var suspct_lname            = $('input[name="suspect[lastname]"]');
            var suspct_fname            = $('input[name="suspect[firstname]"]');
            var suspct_mname            = $('input[name="suspect[middlename]"]');
            var suspct_gender           = $('select[name="suspect[gender]"]');
            var suspct_nickname         = $('input[name="suspect[nickname]"]');
            var suspct_citizenship      = $('input[name="suspect[citizenship]"]');
            var suspct_civil_status     = $('select[name="suspect[civil_status]"]');
            var suspct_birthday         = $('input[name="suspect[birthday]"]');
            var suspct_qualifier        = $('input[name="suspect[qualifier]"]');
            var suspct_phone            = $('input[name="suspect[phone]"]');
            var suspct_home_no          = $('input[name="suspect[home-no]"]');
            var suspct_email            = $('input[name="suspect[email]"]');
            var suspct_address_1        = $('textarea[name="suspect[address-1]"]');
            var suspct_address_2        = $('textarea[name="suspect[address-2]"]');
            var suspct_education        = $('input[name="suspect[education]"]');
            var suspct_occupation       = $('input[name="suspect[occupation]"]');
            var suspct_id_presented     = $('input[name="suspect[id-presented]"]');
            var suspct_height           = $('input[name="suspect[height]"]');
            var suspct_weight           = $('input[name="suspect[weight]"]');
            var suspct_eyes_color       = $('input[name="suspect[eyes-color]"]');
            var suspct_hair_color       = $('input[name="suspect[hair-color]"]');
            var suspct_influence_of     = $('input[name="suspect[influence-of]"]');

        // Victim Elements
            var victim_lname            = $('input[name="victim[lastname]"]');
            var victim_fname            = $('input[name="victim[firstname]"]');
            var victim_mname            = $('input[name="victim[middlename]"]');
            var victim_gender           = $('select[name="victim[gender]"]');
            var victim_nickname         = $('input[name="victim[nickname]"]');
            var victim_citizenship      = $('input[name="victim[citizenship]"]');
            var victim_civil_status     = $('select[name="victim[civil_status]"]');
            var victim_birthday         = $('input[name="victim[birthday]"]');
            var victim_phone            = $('input[name="victim[phone]"]');
            var victim_home_no          = $('input[name="victim[home-no]"]');
            var victim_email            = $('input[name="victim[email]"]');
            var victim_address_1        = $('textarea[name="victim[address-1]"]');
            var victim_address_2        = $('textarea[name="victim[address-2]"]');
            var victim_education        = $('input[name="victim[education]"]');
            var victim_occupation       = $('input[name="victim[occupation]"]');
            var victim_id_presented     = $('input[name="victim[id-presented]"]');

        // Narration Elements
            var incident_type           = $('input[name="incident-type"]');
            var incident_place          = $('input[name="incident-place"]');
            var narration               = $('#summernote');

    var contentStr  = $('#summernote').summernote('code');

    if(contentStr == '<p><br></p>') {
        contentStr = '';
    }

    var formData = $(this).serializeArray();
    formData.push({ name: "narration", value:  contentStr});

    $.ajax({
        url: 'api/blotter/add',
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        type: 'POST',
        data: formData,
        dataType: 'JSON',
        success: function(data) {
            $(that)[0].reset();
            Swal.fire(
                'Success',
                data.message,
                'success'
            );

            setTimeout(() => {
                window.location.href = 'reports';
            }, 2000);
        },
        error: function(data) {
            var data = data.responseJSON;
          
            if(data.messages) {
                var messages = data.messages;

                // Reporting Person Validations
                fieldValidation(rprtng_lname, messages["reporting.lastname"]);
                fieldValidation(rprtng_fname, messages["reporting.firstname"]);
                fieldValidation(rprtng_mname, messages["reporting.middlename"]);
                fieldValidation(rprtng_gender, messages["reporting.gender"]);
                fieldValidation(rprtng_nickname, messages["reporting.nickname"]);
                fieldValidation(rprtng_citizenship, messages["reporting.citizenship"]);
                fieldValidation(rprtng_civil_status, messages["reporting.civil_status"]);
                fieldValidation(rprtng_birthday, messages["reporting.birthday"]);
                fieldValidation(rprtng_qualifier, messages["reporting.qualifier"]);
                fieldValidation(rprtng_phone, messages["reporting.phone"]);
                fieldValidation(rprtng_home_no, messages["reporting.home-no"]);
                fieldValidation(rprtng_email, messages["reporting.email"]);
                fieldValidation(rprtng_address_1, messages["reporting.address-1"]);
                fieldValidation(rprtng_address_2, messages["reporting.address-2"]);
                fieldValidation(rprtng_education, messages["reporting.education"]);
                fieldValidation(rprtng_occupation, messages["reporting.occupation"]);
                fieldValidation(rprtng_id_presented, messages["reporting.id-presented"]);

                // Suspect Validations
                fieldValidation(suspct_lname, messages["suspect.lastname"]);
                fieldValidation(suspct_fname, messages["suspect.firstname"]);
                fieldValidation(suspct_mname, messages["suspect.middlename"]);
                fieldValidation(suspct_gender, messages["suspect.gender"]);
                fieldValidation(suspct_nickname, messages["suspect.nickname"]);
                fieldValidation(suspct_citizenship, messages["suspect.citizenship"]);
                fieldValidation(suspct_civil_status, messages["suspect.civil_status"]);
                fieldValidation(suspct_birthday, messages["suspect.birthday"]);
                fieldValidation(suspct_qualifier, messages["suspect.qualifier"]);
                fieldValidation(suspct_phone, messages["suspect.phone"]);
                fieldValidation(suspct_home_no, messages["suspect.home-no"]);
                fieldValidation(suspct_email, messages["suspect.email"]);
                fieldValidation(suspct_address_1, messages["suspect.address-1"]);
                fieldValidation(suspct_address_2, messages["suspect.address-2"]);
                fieldValidation(suspct_education, messages["suspect.education"]);
                fieldValidation(suspct_occupation, messages["suspect.occupation"]);
                fieldValidation(suspct_id_presented, messages["suspect.id-presented"]);
                fieldValidation(suspct_height, messages["suspect.height"]);
                fieldValidation(suspct_weight, messages["suspect.weight"]);
                fieldValidation(suspct_eyes_color, messages["suspect.eyes-color"]);
                fieldValidation(suspct_hair_color, messages["suspect.hair-color"]);
                fieldValidation(suspct_influence_of, messages["suspect.influence-of"]);

                // Victim Validations
                fieldValidation(victim_lname, messages["victim.lastname"]);
                fieldValidation(victim_fname, messages["victim.firstname"]);
                fieldValidation(victim_mname, messages["victim.middlename"]);
                fieldValidation(victim_gender, messages["victim.gender"]);
                fieldValidation(victim_nickname, messages["victim.nickname"]);
                fieldValidation(victim_citizenship, messages["victim.citizenship"]);
                fieldValidation(victim_civil_status, messages["victim.civil_status"]);
                fieldValidation(victim_birthday, messages["victim.birthday"]);
                fieldValidation(victim_phone, messages["victim.phone"]);
                fieldValidation(victim_home_no, messages["victim.home-no"]);
                fieldValidation(victim_email, messages["victim.email"]);
                fieldValidation(victim_address_1, messages["victim.address-1"]);
                fieldValidation(victim_address_2, messages["victim.address-2"]);
                fieldValidation(victim_education, messages["victim.education"]);
                fieldValidation(victim_occupation, messages["victim.occupation"]);
                fieldValidation(victim_id_presented, messages["victim.id-presented"]);

                // Narration Validations
                fieldValidation(incident_type, messages["incident-type"]);
                fieldValidation(incident_place, messages["incident-place"]);
                fieldValidation(narration, messages.narration);
            }
        },
        beforeSend: function() {
            $('.invalid-feedback').remove();
            $('.form-control').removeClass('is-invalid');
        },
        complete: function() {

        }
    });
});

function inputFeedback(message, type) {
    var feedback = '';
    feedback += '<div class="'+ type +'-feedback d-block">';
        feedback += message;
    feedback += '</div>';

    return feedback;
}

function fieldValidation(fieldElement, message) {
    if(message) {
        fieldElement.addClass('is-invalid');
        fieldElement.after(inputFeedback(message, 'invalid'));
    } else {
        fieldElement.removeClass('is-invalid');
    }
}

$(function() {

    // IF Police Personnel
    $('#if-police-personnel').click(function() {
        if( $(this).prop('checked') == true ) {
            $('#police-personnel-data').show();
        } else {
            $('#police-personnel-data').hide();
        }
    });

    // If Has Previous Criminal Record
    $('#if-w-previous-crim-record').click(function() {
        if( $(this).prop('checked') == true ) {
            $('#previous-case-data').show();
        } else {
            $('#previous-case-data').hide();
        }
    });

});

