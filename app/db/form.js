$('#login').submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    $.ajax({
        type: 'POST',
        url: 'app\\db\\handler.php',
        data: data,
        cache: false,
        contentType: false,
        processData: false,

        success: function (response) {
            swal({
                title: "Great!",
                text: "you are logged in",
                icon: "success",
            }).then(() => {
                location.reload();
            });
        },

        error: function (response, status, error) {
            var errors = response.responseJSON;
            if (errors.errors) {
                errors.errors.forEach(function (data, index) {
                    var field = Object.getOwnPropertyNames(data);
                    var value = data[field];
                    var div = $("#" + field[0]).closest('div');
                    div.addClass('has-danger');
                    div.children('.form-control-feedback').text(value);
                });
            }
        }
    });
});

// ----- Registration -----
$('#registration').submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    $.ajax({
        type: 'POST',
        url: 'app\\db\\handlerreg.php',
        data: data,
        cache: false,
        contentType: false,
        processData: false,

        success: function (response) {
            swal({
                title: "Great!",
                text: "The user has been successfully registered!",
                icon: "success",
            }).then(() => {
                location.reload();
            });
        },

        error: function (response, status, error) {
            var errors = response.responseJSON;
            if (errors.errors) {
                errors.errors.forEach(function (data, index) {
                    var field = Object.getOwnPropertyNames(data);
                    var value = data[field];
                    var div = $("#" + field[0]).closest('div');
                    div.addClass('has-danger');
                    div.children('.form-control-feedback').text(value);
                });
            }
        }
    });
});

// ----- Logout -----
$('#logout').submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    $.ajax({
        type: 'POST',
        url: 'app\\db\\logout.php',
        data: data,
        cache: false,
        contentType: false,
        processData: false,

        success: function (response) {
            swal({
                title: "Logout",
                text: "You are leaving this Page.",
                icon: "error",
            }).then(() => {
                location.reload();
            });
        },

        error: function (response, status, error) {
            var errors = response.responseJSON;
            if (errors.errors) {
                errors.errors.forEach(function (data, index) {
                    var field = Object.getOwnPropertyNames(data);
                    var value = data[field];
                    var div = $("#" + field[0]).closest('div');
                    div.addClass('has-danger');
                    div.children('.form-control-feedback').text(value);
                });
            }
        }
    });
});