$(document).on('submit', '#loginform', function(e){
    e.preventDefault();

    var username = $('input[name="username"]');
    var password = $('input[name="password"]');

    $.ajax({
        url: 'api/login/submit',
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        type: 'POST',
        data: $(this).serialize(),
        dataType: 'JSON',
        success: function(data) {
            $('<div class="alert alert-success">'+ data.success +' <i class="fa fa-spin fa-spinner"></i></div>').insertAfter('.logo');
            setTimeout(() => {
                location.reload();
            }, 2000);
        },
        error: function(data) {
            var data = data.responseJSON;

            if(data.messages) {
                var messages = data.messages;

                fieldValidation(username, messages.username);
                fieldValidation(password, messages.password);

                if(messages.error) {
                    $('<div class="alert alert-danger">'+ messages.error +'</div>').insertBefore('#loginform');
                }
            }
            
        },
        beforeSend: function() {
            $('.alert').remove();
            $('.invalid-feedback').remove();
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