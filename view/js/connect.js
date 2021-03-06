
$(document).ready(function () {

    $("#loginForm").submit(function () { // FORMULAIRE CONNEXION
        $.ajax({// FONCTION AJAX
            type: "POST", // methode de transmission des données au fichier php
            url: "control/users.php", // url du fichier php
            data: {
                username: $("#username").val(),
                password: $("#password").val(),
                action: $("#action").val()
            }, // données à transmettre
            success: function (msg2) { // Si l'appel ajax fonctionne
                console.log(msg2);
                if (msg2 == 1) // si la connexion a fonctionnée (echo 1) 
                {
                    $("body").html("<div id=\"box\">L'aventure commence maintenant !\
                                    <form method=\"post\" action=\"index.php?control=users&action=play\">\
                                    <input class=\"button button-primary\"style=\"margin : 0 75px;\" type=\"submit\" value=\"Prêt !!!!\"\>\
                                    </form><div>\
                                    ").hide().fadeIn(1500).delay(6000);
                    //$("body").load("view/map.tpl").hide().fadeIn(1500).delay(6000); //Chargement de la map

                } else { // si la connexion en php n'a pas fonctionnée

                    $('#box').shake();
                    $("#username").val('Login');
                    $("#error").html("<span style='color:#cc0000'>Error:</span> Authentification failed ");
                    // on affiche un message d'erreur 
                }
            }
        });
        return false; // permet de rester sur la même page à la soumission du formulaire
    });
    $("#signinForm").submit(function () { // FORMULAIRE INSCRIPTION
        $.ajax({// fonction permettant de faire de l'ajax
            type: "POST", // methode de transmission des données au fichier php
            url: "control/users.php", // url du fichier php
            data: {
                username: $("#usernameSign").val(),
                password: $("#passwordSign").val(),
                action: $("#action2").val()
            }, // données à transmettre
            success: function (msg2) { // si l'appel a bien fonctionné
                console.log(msg2);
                if (msg2 == 1) // si la connexion en php a fonctionnée
                {
                    $("body").html("<div id=\"box\">Inscription réussi, préparez vous pour l'aventure !\
				<form method=\"post\" action=\"index.php?control=users&action=play\">\
				<input class=\"button button-primary\"style=\"margin : 0 75px;\" type=\"submit\" value=\"Prêt !!!!\"\>\
				</form></div\
				");
                } else // si la connexion en php n'a pas fonctionnée
                {
                    $('.boxHidden').shake();
                    $("#usernameSign").val('Login');
                    $("#errorSign").html("<span style='color:#cc0000'>Error:</span> Sign in failed ");
                    // on affiche un message d'erreur dans le span prévu à cet effet
                }
            }
        });
        return false; // permet de rester sur la même page à la soumission du formulaire
    });
//    $("#signIn").onclick(function () {
//        var form = document.getElementById("signinForm");
//        form.innerHTML = "<label>Username</label>\
//                        <input type=\"text\" name=\"usernameSign\" class=\"input\" autocomplete=\"off\" id=\"usernameSign\" />\
//                        <label>Password </label>\
//                        <input type=\"password\" name=\"passwordSign\" class=\"input\" autocomplete=\"off\" id=\"passwordSign\"/></br>\
//                        <input type = \"submit\" class=\"button button-primary\" value=\"Sign in\" id=\"buttonSign2\"/>";
//
//    });
});

function signIn() {
    var form = document.getElementById("signinForm");
    form.innerHTML = "<label>Username</label>\
                        <input type=\"text\" name=\"usernameSign\" class=\"input\" autocomplete=\"off\" id=\"usernameSign\" />\
                        <label>Password </label>\
                        <input type=\"password\" name=\"passwordSign\" class=\"input\" autocomplete=\"off\" id=\"passwordSign\"/></br>\
                        <input type = \"submit\" class=\"button button-primary\" value=\"Sign in\" id=\"buttonSign2\"/>\n\
                        <input type=\"hidden\" id=\"action2\" value=\"signin\" /> ";
    var buttonSign = document.getElementById("signIn");
    buttonSign.style.visibility = "hidden"; //Pour cacher le bouton Sign dans le formulaire de connexion
}

function validateEmail(email) // verifivation du mail
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

