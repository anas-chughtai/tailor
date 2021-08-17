$(document).ready(function () {

    $('#btn-kameez-shalwar').click(function () {
        $('#row_kameez_shalwar').show(1000);
        $('#row_kameez_trouser').hide();
        $('#row_shirt').hide();
        $('#row_two_piece').hide();
        $('#row_three_piece').hide();
        $('#row_waist_coat').hide();
        $('#row_sherwani').hide();
        $('#row_coat').hide();
        $('#row_prince_coat').hide();
        $('#row_safari_suite').hide();
        $('#row_pant').hide();
    });
    $('#btn-kameez-trouser').click(function () {
        $('#row_kameez_shalwar').hide();
        $('#row_kameez_trouser').show(1000);
        $('#row_shirt').hide();
        $('#row_two_piece').hide();
        $('#row_three_piece').hide();
        $('#row_waist_coat').hide();
        $('#row_sherwani').hide();
        $('#row_coat').hide();
        $('#row_prince_coat').hide();
        $('#row_safari_suite').hide();
        $('#row_pant').hide();
    });
    $('#btn-shirt').click(function () {
        $('#row_kameez_shalwar').hide();
        $('#row_kameez_trouser').hide();
        $('#row_shirt').show(1000);
        $('#row_two_piece').hide();
        $('#row_three_piece').hide();
        $('#row_waist_coat').hide();
        $('#row_sherwani').hide();
        $('#row_coat').hide();
        $('#row_prince_coat').hide();
        $('#row_safari_suite').hide();
        $('#row_pant').hide();
    });
    $('#btn-two-piece').click(function () {
        $('#row_kameez_shalwar').hide();
        $('#row_kameez_trouser').hide();
        $('#row_shirt').hide();
        $('#row_two_piece').show(1000);
        $('#row_three_piece').hide();
        $('#row_waist_coat').hide();
        $('#row_sherwani').hide();
        $('#row_coat').hide();
        $('#row_prince_coat').hide();
        $('#row_safari_suite').hide();
        $('#row_pant').hide();
    });
    $('#btn-three-piece').click(function () {
        $('#row_kameez_shalwar').hide();
        $('#row_kameez_trouser').hide();
        $('#row_shirt').hide();
        $('#row_two_piece').hide();
        $('#row_three_piece').show(1000);
        $('#row_waist_coat').hide();
        $('#row_sherwani').hide();
        $('#row_coat').hide();
        $('#row_prince_coat').hide();
        $('#row_safari_suite').hide();
        $('#row_pant').hide();
    });
    $('#btn-waist-coat').click(function () {
        $('#row_kameez_shalwar').hide();
        $('#row_kameez_trouser').hide();
        $('#row_shirt').hide();
        $('#row_two_piece').hide();
        $('#row_three_piece').hide();
        $('#row_waist_coat').show(1000);
        $('#row_sherwani').hide();
        $('#row_coat').hide();
        $('#row_prince_coat').hide();
        $('#row_safari_suite').hide();
        $('#row_pant').hide();
    });
    $('#btn-sherwani').click(function () {
        $('#row_kameez_shalwar').hide();
        $('#row_kameez_trouser').hide();
        $('#row_shirt').hide();
        $('#row_two_piece').hide();
        $('#row_three_piece').hide();
        $('#row_waist_coat').hide();
        $('#row_sherwani').show(1000);
        $('#row_coat').hide();
        $('#row_prince_coat').hide();
        $('#row_safari_suite').hide();
        $('#row_pant').hide();
    });
    $('#btn-coat').click(function () {
        $('#row_kameez_shalwar').hide();
        $('#row_kameez_trouser').hide();
        $('#row_shirt').hide();
        $('#row_two_piece').hide();
        $('#row_three_piece').hide();
        $('#row_waist_coat').hide();
        $('#row_sherwani').hide();
        $('#row_coat').show(1000);
        $('#row_prince_coat').hide();
        $('#row_safari_suite').hide();
        $('#row_pant').hide();
    });
    $('#btn-prince-coat').click(function () {
        $('#row_kameez_shalwar').hide();
        $('#row_kameez_trouser').hide();
        $('#row_shirt').hide();
        $('#row_two_piece').hide();
        $('#row_three_piece').hide();
        $('#row_waist_coat').hide();
        $('#row_sherwani').hide();
        $('#row_coat').hide();
        $('#row_prince_coat').show(1000);
        $('#row_safari_suite').hide();
        $('#row_pant').hide();
    });
    $('#btn-safari-suite').click(function () {
        $('#row_kameez_shalwar').hide();
        $('#row_kameez_trouser').hide();
        $('#row_shirt').hide();
        $('#row_two_piece').hide();
        $('#row_three_piece').hide();
        $('#row_waist_coat').hide();
        $('#row_sherwani').hide();
        $('#row_coat').hide();
        $('#row_prince_coat').hide();
        $('#row_safari_suite').show(1000);
        $('#row_pant').hide();
    });
    $('#btn-pant').click(function () {
        $('#row_kameez_shalwar').hide();
        $('#row_kameez_trouser').hide();
        $('#row_shirt').hide();
        $('#row_two_piece').hide();
        $('#row_three_piece').hide();
        $('#row_waist_coat').hide();
        $('#row_sherwani').hide();
        $('#row_coat').hide();
        $('#row_prince_coat').hide();
        $('#row_safari_suite').hide();
        $('#row_pant').show(1000);
    });

});