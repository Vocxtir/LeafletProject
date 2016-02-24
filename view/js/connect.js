/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    $('#login').click(function ()
    {
        var username = $("#username").val();
        var password = $("#password").val();
        var dataString = 'username=' + username + '&password=' + password;

        if ($.trim(username).length > 0 && $.trim(password).length > 0)
        {
            if (!validateEmail(username)) {
                $('#box').shake();
                $("#login").val('Login')
                $("#error").html("<span style='color:#cc0000'>Error:</span> Authentification failed ");

            } else {

                $.ajax({
                    type: "POST",
					url: 'index.php?control=user&action=whatWasOriginalyThere',
                    data: dataString,
                    cache: false,
                    beforeSend: function () {
                        $("#login").val('Connecting...');
                    },
                    success: function (data) {
                        if (data == 1)
                        {
                            $("body").load("Map.tpl").hide().fadeIn(1500).delay(6000);
                        } else
                        {
                            $('#box').shake();
                            $("#login").val('Login')
                            $("#error").html("<span style='color:#cc0000'>Error:</span> Authentification failed ");
                        }
                    }
                });
            }

        }

        return false;


    });


});

function validateEmail(email)
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

