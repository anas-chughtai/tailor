$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function () {
    $("#kameez_shalwar").submit(function (e) {
        var form = $(this);
        var submit = form.find("[type=submit]");
        var submitOriginalText = submit.attr("value");
        var formdata = form.serialize(); // here $(this) refere to the form its submitting
        console.log(formdata);
        $.ajax({
            type: 'POST',
            url: '/kameez_shalwar/store',
            data: formdata, // here $(this) refers to the ajax object not form
            success: function (data) {
                console.log(data);
                if (data === 'success') {
                    submit.attr("value", "Submitted");
                    swal({
                        type: 'success',
                        title: 'Congrats!',
                        text: 'Data Successfully Inserted',
                    });
                }
                if (data === 'error') {
                    submit.attr("value", submitOriginalText);
                    submit.prop("disabled", false);
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Data Already Exists For This Customer',
                    });
                }
            },
            beforeSend: function () {
                submit.attr("value", "Loading...");
                submit.prop("disabled", true);
            },
            error: function () {
                submit.attr("value", submitOriginalText);
                submit.prop("disabled", false);
                // show error to end user
            }
        });
        e.preventDefault();
    });

    $("#kameez_trouser").submit(function (e) {
        var form = $(this);
        var submit = form.find("[type=submit]");
        var submitOriginalText = submit.attr("value");
        var formdata = form.serialize(); // here $(this) refere to the form its submitting
        console.log(formdata);
        $.ajax({
            type: 'POST',
            url: "/kameez_trouser/store",
            data: formdata, // here $(this) refers to the ajax object not form
            success: function (data) {
                console.log(data);
                if (data === 'success') {
                    submit.attr("value", "Submitted");
                    swal({
                        type: 'success',
                        title: 'Congrats!',
                        text: 'Data Successfully Inserted',
                    });
                }
                if (data === 'error') {
                    submit.attr("value", submitOriginalText);
                    submit.prop("disabled", false);
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Data Already Exists For This Customer',
                    });
                }
            },
            beforeSend: function () {
                submit.attr("value", "Loading...");
                submit.prop("disabled", true);
            },
            error: function () {
                submit.attr("value", submitOriginalText);
                submit.prop("disabled", false);
                // show error to end user
            }
        });
        e.preventDefault();
    });

    $("#shirt").submit(function (e) {
        var form = $(this);
        var submit = form.find("[type=submit]");
        var submitOriginalText = submit.attr("value");
        var formdata = form.serialize(); // here $(this) refere to the form its submitting
        console.log(formdata);
        $.ajax({
            type: 'POST',
            url: "/shirt/store",
            data: formdata, // here $(this) refers to the ajax object not form
            success: function (data) {
                console.log(data);
                if (data === 'success') {
                    submit.attr("value", "Submitted");
                    swal({
                        type: 'success',
                        title: 'Congrats!',
                        text: 'Data Successfully Inserted',
                    });
                }
                if (data === 'error') {
                    submit.attr("value", submitOriginalText);
                    submit.prop("disabled", false);
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Data Already Exists For This Customer',
                    });
                }
            },
            beforeSend: function () {
                submit.attr("value", "Loading...");
                submit.prop("disabled", true);
            },
            error: function () {
                submit.attr("value", submitOriginalText);
                submit.prop("disabled", false);
                // show error to end user
            }
        });
        e.preventDefault();
    });

    $("#two_piece").submit(function (e) {
        var form = $(this);
        var submit = form.find("[type=submit]");
        var submitOriginalText = submit.attr("value");
        var formdata = form.serialize(); // here $(this) refere to the form its submitting
        console.log(formdata);
        $.ajax({
            type: 'POST',
            url: "/two_piece/store",
            data: formdata, // here $(this) refers to the ajax object not form
            success: function (data) {
                console.log(data);
                if (data === 'success') {
                    submit.attr("value", "Submitted");
                    swal({
                        type: 'success',
                        title: 'Congrats!',
                        text: 'Data Successfully Inserted',
                    });
                }
                if (data === 'error') {
                    submit.attr("value", submitOriginalText);
                    submit.prop("disabled", false);
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Data Already Exists For This Customer',
                    });
                }
            },
            beforeSend: function () {
                submit.attr("value", "Loading...");
                submit.prop("disabled", true);
            },
            error: function () {
                submit.attr("value", submitOriginalText);
                submit.prop("disabled", false);
                // show error to end user
            }
        });
        e.preventDefault();
    });

    $("#three_piece").submit(function (e) {
        var form = $(this);
        var submit = form.find("[type=submit]");
        var submitOriginalText = submit.attr("value");
        var formdata = form.serialize(); // here $(this) refere to the form its submitting
        console.log(formdata);
        $.ajax({
            type: 'POST',
            url: "/three_piece/store",
            data: formdata, // here $(this) refers to the ajax object not form
            success: function (data) {
                console.log(data);
                if (data === 'success') {
                    submit.attr("value", "Submitted");
                    swal({
                        type: 'success',
                        title: 'Congrats!',
                        text: 'Data Successfully Inserted',
                    });
                }
                if (data === 'error') {
                    submit.attr("value", submitOriginalText);
                    submit.prop("disabled", false);
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Data Already Exists For This Customer',
                    });
                }
            },
            beforeSend: function () {
                submit.attr("value", "Loading...");
                submit.prop("disabled", true);
            },
            error: function () {
                submit.attr("value", submitOriginalText);
                submit.prop("disabled", false);
                // show error to end user
            }
        });
        e.preventDefault();
    });

    $("#waist_coat").submit(function (e) {
        var form = $(this);
        var submit = form.find("[type=submit]");
        var submitOriginalText = submit.attr("value");
        var formdata = form.serialize(); // here $(this) refere to the form its submitting
        console.log(formdata);
        $.ajax({
            type: 'POST',
            url: "/waist_coat/store",
            data: formdata, // here $(this) refers to the ajax object not form
            success: function (data) {
                console.log(data);
                if (data === 'success') {
                    submit.attr("value", "Submitted");
                    swal({
                        type: 'success',
                        title: 'Congrats!',
                        text: 'Data Successfully Inserted',
                    });
                }
                if (data === 'error') {
                    submit.attr("value", submitOriginalText);
                    submit.prop("disabled", false);
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Data Already Exists For This Customer',
                    });
                }
            },
            beforeSend: function () {
                submit.attr("value", "Loading...");
                submit.prop("disabled", true);
            },
            error: function () {
                submit.attr("value", submitOriginalText);
                submit.prop("disabled", false);
                // show error to end user
            }
        });
        e.preventDefault();
    });

    $("#sherwani").submit(function (e) {
        var form = $(this);
        var submit = form.find("[type=submit]");
        var submitOriginalText = submit.attr("value");
        var formdata = form.serialize(); // here $(this) refere to the form its submitting
        console.log(formdata);
        $.ajax({
            type: 'POST',
            url: "/sherwani/store",
            data: formdata, // here $(this) refers to the ajax object not form
            success: function (data) {
                console.log(data);
                if (data === 'success') {
                    submit.attr("value", "Submitted");
                    swal({
                        type: 'success',
                        title: 'Congrats!',
                        text: 'Data Successfully Inserted',
                    });
                }
                if (data === 'error') {
                    submit.attr("value", submitOriginalText);
                    submit.prop("disabled", false);
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Data Already Exists For This Customer',
                    });
                }
            },
            beforeSend: function () {
                submit.attr("value", "Loading...");
                submit.prop("disabled", true);
            },
            error: function () {
                submit.attr("value", submitOriginalText);
                submit.prop("disabled", false);
                // show error to end user
            }
        });
        e.preventDefault();
    });

    $("#coat").submit(function (e) {
        var form = $(this);
        var submit = form.find("[type=submit]");
        var submitOriginalText = submit.attr("value");
        var formdata = form.serialize(); // here $(this) refere to the form its submitting
        console.log(formdata);
        $.ajax({
            type: 'POST',
            url: "/coat/store",
            data: formdata, // here $(this) refers to the ajax object not form
            success: function (data) {
                console.log(data);
                if (data === 'success') {
                    submit.attr("value", "Submitted");
                    swal({
                        type: 'success',
                        title: 'Congrats!',
                        text: 'Data Successfully Inserted',
                    });
                }
                if (data === 'error') {
                    submit.attr("value", submitOriginalText);
                    submit.prop("disabled", false);
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Data Already Exists For This Customer',
                    });
                }
            },
            beforeSend: function () {
                submit.attr("value", "Loading...");
                submit.prop("disabled", true);
            },
            error: function () {
                submit.attr("value", submitOriginalText);
                submit.prop("disabled", false);
                // show error to end user
            }
        });
        e.preventDefault();
    });

    $("#prince_coat").submit(function (e) {
        var form = $(this);
        var submit = form.find("[type=submit]");
        var submitOriginalText = submit.attr("value");
        var formdata = form.serialize(); // here $(this) refere to the form its submitting
        console.log(formdata);
        $.ajax({
            type: 'POST',
            url: "/prince_coat/store",
            data: formdata, // here $(this) refers to the ajax object not form
            success: function (data) {
                console.log(data);
                if (data === 'success') {
                    submit.attr("value", "Submitted");
                    swal({
                        type: 'success',
                        title: 'Congrats!',
                        text: 'Data Successfully Inserted',
                    });
                }
                if (data === 'error') {
                    submit.attr("value", submitOriginalText);
                    submit.prop("disabled", false);
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Data Already Exists For This Customer',
                    });
                }
            },
            beforeSend: function () {
                submit.attr("value", "Loading...");
                submit.prop("disabled", true);
            },
            error: function () {
                submit.attr("value", submitOriginalText);
                submit.prop("disabled", false);
                // show error to end user
            }
        });
        e.preventDefault();
    });

    $("#safari_suite").submit(function (e) {
        var form = $(this);
        var submit = form.find("[type=submit]");
        var submitOriginalText = submit.attr("value");
        var formdata = form.serialize(); // here $(this) refere to the form its submitting
        console.log(formdata);
        $.ajax({
            type: 'POST',
            url: "/safari_suite/store",
            data: formdata, // here $(this) refers to the ajax object not form
            success: function (data) {
                console.log(data);
                if (data === 'success') {
                    submit.attr("value", "Submitted");
                    swal({
                        type: 'success',
                        title: 'Congrats!',
                        text: 'Data Successfully Inserted',
                    });
                }
                if (data === 'error') {
                    submit.attr("value", submitOriginalText);
                    submit.prop("disabled", false);
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Data Already Exists For This Customer',
                    });
                }
            },
            beforeSend: function () {
                submit.attr("value", "Loading...");
                submit.prop("disabled", true);
            },
            error: function () {
                submit.attr("value", submitOriginalText);
                submit.prop("disabled", false);
                // show error to end user
            }
        });
        e.preventDefault();
    });

    $("#pant").submit(function (e) {
        var form = $(this);
        var submit = form.find("[type=submit]");
        var submitOriginalText = submit.attr("value");
        var formdata = form.serialize(); // here $(this) refere to the form its submitting
        console.log(formdata);
        $.ajax({
            type: 'POST',
            url: "/pant/store",
            data: formdata, // here $(this) refers to the ajax object not form
            success: function (data) {
                console.log(data);
                if (data === 'success') {
                    submit.attr("value", "Submitted");
                    swal({
                        type: 'success',
                        title: 'Congrats!',
                        text: 'Data Successfully Inserted',
                    });
                }
                if (data === 'error') {
                    submit.attr("value", submitOriginalText);
                    submit.prop("disabled", false);
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Data Already Exists For This Customer',
                    });
                }
            },
            beforeSend: function () {
                submit.attr("value", "Loading...");
                submit.prop("disabled", true);
            },
            error: function () {
                submit.attr("value", submitOriginalText);
                submit.prop("disabled", false);
                // show error to end user
            }
        });
        e.preventDefault();
    });

});