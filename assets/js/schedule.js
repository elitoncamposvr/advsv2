$(function () {

    $('#client_add_button').on('click', function (e) {
        e.preventDefault();

        var name = $('#client_name').val();
        var reason = $('#reason').val();
        var schedule_date = $('#schedule_date').val();
        var client_type = $('#client_type').val();

        $.ajax({
            url: BASE_URL + '/ajax/add_client',
            type: 'POST',
            data: { name: name, reason: reason, schedule_date: schedule_date, client_type: client_type},
            dataType: 'json',
            success: function (json) {
                $('#div_form').hide();
                $('#div_success').show();
            }
        });

        return false;

    });

});