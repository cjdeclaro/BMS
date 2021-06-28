$(document).on('submit', '#loginform', function(e){
    e.preventDefault();

    var username = $('input[name="username"]');
    var password = $('input[name="password"]');

    $.ajax({
        url: base_url + '/api/login/submit',
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        type: 'POST',
        data: $(this).serialize(),
        dataType: 'JSON',
        success: function(data) {
            
        },
        error: function(data) {
            var data = data.responseJSON;

            if(data.messages) {
                var messages = data.messages;

                fieldValidation(username, messages.username);
                fieldValidation(password, messages.password);
            }
            
        },
        beforeSend: function() {

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