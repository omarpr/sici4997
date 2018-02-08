$(document).ready(function() {
    //alert('Ya cargue');
    
    $('[name=registerButton]').click(function (e) {
        var errors = "";
        var password1 = $('[name=password1]');
        var password2 = $('[name=password2]');
        var username = $('[name=username]');
        var email = $('[name=email]');
        
        if (username.val().trim() == "") {
            errors += '<div class="alert alert-danger" role="alert">El usuario es requerido.</div>';
        }
        
        if (!validateEmail(email.val())) {
            errors += '<div class="alert alert-danger" role="alert">El formato del email es incorrecto.</div>';
        }
        
        if (password1.val() != password2.val()) {
            errors += '<div class="alert alert-danger" role="alert">Los password no son iguales.</div>';
        }
        
        $('div[name=registerErrors]').fadeOut('slow', function() {
            $('div[name=registerErrors]').html('&nbsp;');
            
            if (errors != "") {
                $('div[name=registerErrors]').html(errors);
                $('div[name=registerErrors]').fadeIn('slow');
            }
        });
        
        if (errors != "") {
            e.preventDefault();
        }
    });
});

function validateEmail(email) {
    var re_email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    return re_email.test(email);
}