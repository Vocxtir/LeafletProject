
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
					url: 'index.php?control=users&action=testConnect',
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

// Sample code from jQuery UI

  $(function() {
    var dialog, form,
 
      // From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29
      emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
      name = $( "#name" ),
      email = $( "#email" ),
      password = $( "#password" ),
      allFields = $( [] ).add( name ).add( email ).add( password ),
      tips = $( ".validateTips" );
 
    function updateTips( t ) {
      tips
        .text( t )
        .addClass( "ui-state-highlight" );
      setTimeout(function() {
        tips.removeClass( "ui-state-highlight", 1500 );
      }, 500 );
    }
 
    function checkLength( o, n, min, max ) {
      if ( o.val().length > max || o.val().length < min ) {
        o.addClass( "ui-state-error" );
        updateTips( "Length of " + n + " must be between " +
          min + " and " + max + "." );
        return false;
      } else {
        return true;
      }
    }
 
    function checkRegexp( o, regexp, n ) {
      if ( !( regexp.test( o.val() ) ) ) {
        o.addClass( "ui-state-error" );
        updateTips( n );
        return false;
      } else {
        return true;
      }
    }
 
    function addUser() {
      var valid = true;
      allFields.removeClass( "ui-state-error" );
 
      valid = valid && checkLength( name, "username", 3, 16 );
      valid = valid && checkLength( email, "email", 6, 80 );
      valid = valid && checkLength( password, "password", 5, 16 );
 
      valid = valid && checkRegexp( name, /^[a-z]([0-9a-z_\s])+$/i, "Username may consist of a-z, 0-9, underscores, spaces and must begin with a letter." );
      valid = valid && checkRegexp( email, emailRegex, "eg. ui@jquery.com" );
      valid = valid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );
 
      if ( valid ) {
				$.ajax({
                    type: "POST",
					url: 'index.php?control=users&action=signUp',
                    data: dataString,
                    cache: false,
                    beforeSend: function () {
                        $("#login").val('Connecting...');
                    },
                    success: function (data) {
                        if (data)
                        {
							//On peut créer une autre requête $.ajax pour connecter directement après création de compte
							$("#error").html("<span style='color:#cc0000'>Error:</span> Authentification failed ");
                            //$("body").load("Map.tpl").hide().fadeIn(1500).delay(6000);
                        } else
                        {
                            $('#box').shake();
                            $("#login").val('Login')
                            $("#error").html("<span style='color:#cc0000'>Error:</span> Authentification failed ");
                        }
                    }
                });
      }
      return valid;
    }
 
    dialog = $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 300,
      width: 350,
      modal: true,
      buttons: {
        "Create an account": addUser,
        Cancel: function() {
          dialog.dialog( "close" );
        }
      },
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( "ui-state-error" );
      }
    });
 
    form = dialog.find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      addUser();
    });
 
    $( "#create-user" ).button().on( "click", function() {
      dialog.dialog( "open" );
    });
  });

