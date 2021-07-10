$(function() {

    $('#logout-btn').on('click', function(e) {
        e.preventDefault();
        
        Swal.fire({
            title: 'Logout',
            text: "Are you sure you want to logout?",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, logout!'
          }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    url: 'api/login/logout',
                    headers: {'X-Requested-With': 'XMLHttpRequest'},
                    type: 'GET',
                    dataType: 'JSON',
                    success: function(data) {
                        Swal.fire(
                            'Logged Out!',
                            data.message,
                            'success'
                        );

                        setTimeout(() => {
                            location.reload();
                        }, 2000);
                    },
                    error: function(data) {
                        var data = data.responseJSON;
                        console.log(data);
                    }
                });
            }
          });

    });

});