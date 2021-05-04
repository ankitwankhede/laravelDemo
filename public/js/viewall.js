$(document).ready(function () {
    $('td').mouseenter(function () {
        $id = $(this).attr('value');
        $.ajax({
            type: "GET",
            url: "student/" + $id,
            data: 'param:"value"',
            dataType: "json",
            success: function (response) {
                // alert(JSON.stringify(response));
                $('#stid').text(response.id);
                $('#sname').text(response.FirstName + " " + response.LastName);
                $('#mail').text(response.Email);
            }
        });
    });
});