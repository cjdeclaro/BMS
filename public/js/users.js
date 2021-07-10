$(document).ready(function() {
    var userstable = $('#users-table').DataTable({
        'ajax': 'api/users/get-all',
        'columns': [
            {
                'className': 'text-center',
                'orderable': false,
                'data': 'username',
                'defaultContent': ''
            },
            {
                'className': 'text-center',
                'orderable': false,
                'data': 'lastname',
            },
            {
                'className': 'text-center',
                'orderable': false,
                'data': 'firstname',
            },
            {
                'className': 'text-center',
                'orderable': false,
                'data': 'middlename',
            },
            {
                'className': 'text-center',
                'orderable': false,
                'data': 'email',
            },
            {
                'className': 'text-center',
                'orderable': false,
                'data': 'phone',
            },
            {
                'className': 'text-center',
                'orderable': false,
                'data': 'role',
            },
            {
                'className': 'text-center',
                'orderable': false,
                'data': 'action',
            }
        ]
    });

    $('#users-table tbody').on('click', 'td #edit-user-btn', function() {
        var tr      = $(this).closest('tr');
        var row     = userstable.row(tr);
        var data    = row.data();
        var form    = $('#edit-user-form');

        $('#edit-user-modal').modal('show');
        form.find('input[name="username"]').val(data.username);
        form.find('input[name="lastname"]').val(data.lastname);
        form.find('input[name="firstname"]').val(data.firstname);
        form.find('input[name="middlename"]').val(data.middlename);
        form.find('input[name="email"]').val(data.email);
        form.find('input[name="phone"]').val(data.phone);
        form.find('select[name="role"]').val(data.role);
        form.find('input[name="id"]').val(data.id);

    });
});

$(function() {
    $('#add-user-form').on('submit', function(e) {
        e.preventDefault();
        
        var that            = this;
        var el_username     = $('#add-user-form input[name="username"]');
        var el_password     = $('#add-user-form input[name="password"]');
        var el_lastname     = $('#add-user-form input[name="lastname"]');
        var el_firstname    = $('#add-user-form input[name="firstname"]');
        var el_middlename   = $('#add-user-form input[name="middlename"]');
        var el_email        = $('#add-user-form input[name="email"]');
        var el_phone        = $('#add-user-form input[name="phone"]');
        var el_role         = $('#add-user-form select[name="role"]');

        $.ajax({
            url: 'api/users/add-new',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'JSON',
            success: function(data) {
                $('#add-user-modal').modal('hide');
                $('.form-control').removeClass('is-invalid');
                $(that)[0].reset();
                Swal.fire(
                    'Success',
                    data.message,
                    'success'
                );
                $('#users-table').DataTable().ajax.reload(null, false);
            },
            error: function(data) {
                var data = data.responseJSON;
                
                if(data.messages) {
                    var messages = data.messages;

                    fieldValidation(el_username, messages.username);
                    fieldValidation(el_password, messages.password);
                    fieldValidation(el_lastname, messages.lastname);
                    fieldValidation(el_firstname, messages.firstname);
                    fieldValidation(el_middlename, messages.middlename);
                    fieldValidation(el_email, messages.email);
                    fieldValidation(el_phone, messages.phone);
                    fieldValidation(el_role, messages.role);
                }
            },
            beforeSend: function() {
                $('.invalid-feedback').remove();
                $('#add-user-form button[type="submit"]').attr('disabled', 'disabled');
                $('#add-user-form button[type="submit"]').html('<i class="fa fa-spin fa-spinner"></i>');
            },
            complete: function() {
                $('#add-user-form button[type="submit"]').attr('disabled', false);
                $('#add-user-form button[type="submit"]').html('Add');
            }
        });
    });

    $('#edit-user-form').on('submit', function(e) {
        e.preventDefault();
        
        var that            = this;
        var el_username     = $('#edit-user-form input[name="username"]');
        var el_lastname     = $('#edit-user-form input[name="lastname"]');
        var el_firstname    = $('#edit-user-form input[name="firstname"]');
        var el_middlename   = $('#edit-user-form input[name="middlename"]');
        var el_email        = $('#edit-user-form input[name="email"]');
        var el_phone        = $('#edit-user-form input[name="phone"]');
        var el_role         = $('#edit-user-form select[name="role"]');

        $.ajax({
            url: 'api/users/edit',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'JSON',
            success: function(data) {
                $('#edit-user-modal').modal('hide');
                $('.form-control').removeClass('is-invalid');
                $(that)[0].reset();
                Swal.fire(
                    'Success',
                    data.message,
                    'success'
                );
                $('#users-table').DataTable().ajax.reload(null, false);
            },
            error: function(data) {
                var data = data.responseJSON;
                
                if(data.messages) {
                    var messages = data.messages;

                    fieldValidation(el_username, messages.username);
                    fieldValidation(el_lastname, messages.lastname);
                    fieldValidation(el_firstname, messages.firstname);
                    fieldValidation(el_middlename, messages.middlename);
                    fieldValidation(el_email, messages.email);
                    fieldValidation(el_phone, messages.phone);
                    fieldValidation(el_role, messages.role);
                }
            },
            beforeSend: function() {
                $('.invalid-feedback').remove();
                $('#edit-user-form button[type="submit"]').attr('disabled', 'disabled');
                $('#edit-user-form button[type="submit"]').html('<i class="fa fa-spin fa-spinner"></i>');
            },
            complete: function() {
                $('#edit-user-form button[type="submit"]').attr('disabled', false);
                $('#edit-user-form button[type="submit"]').html('Edit');
            }
        });
    })
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
