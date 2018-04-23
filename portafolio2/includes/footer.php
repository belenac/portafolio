<div class="seccion footer">
        <p>Diseño y Desarollo.... Yo ;)</p>
    </div>
<script>
$(document).ready(function(){
    $('.ir-arriba').click(function(){
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });
    $(window).scroll(function(){
        if( $(this).scrollTop() > 0 ){
            $('.ir-arriba').slideDown(300);
        } else {
            $('.ir-arriba').slideUp(300);
        }
    });
});
</script>
<script type="text/javascript">
$(function(){
    $('a.smoothScroll').smoothScroll({
        offset: -80,
        scrollTarget: $(this).val()
    });
    // Waypoints
    $('.post_article').waypoint(
        function(direction) {
            if (direction ==='down') {
                var wayID = $(this).attr('id');
            } else {
                var previous = $(this).prev();
                var wayID = $(previous).attr('id');
            }
            $('.current').removeClass('current');
            $('#main_nav a[href=#'+wayID+']').addClass('current');
        }, { offset: '40%' });
    /// StickNav
    var stickyNavTop = $('.nav').offset().top;
    var stickyNav = function(){
        var scrollTop = $(window).scrollTop();
        if (scrollTop > stickyNavTop) {
            $('.nav').addClass('isStuck');
        } else {
            $('.nav').removeClass('isStuck');
        }
    };
    stickyNav();
    $(window).scroll(function() {
        stickyNav();
    });
});
</script>
<script>
window.onscroll = function() {myFunction()};
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
function validarForm(){
    var nombre = $('#nombre').val();
    var mensaje = $('#mensaje').val();
    var mail = $('#email').val();
    var regex_mail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var fono = $('#telefono').val();
    if(nombre == ''){  
        alert('Debe ingresar un nombre');
        return false;
    }
    if(fono == ''){  
        alert('Debe ingresar un teléfono');
        return false;
    }
    if(mail == ''){  
        alert('Debe ingresar un mail');
        return false;
    }
    if (!regex_mail.test(mail)) {
        alert('Debe ingresar un mail válido');
        return false;
    }
    if(mensaje == ''){  
        alert('Debe ingresar el mensaje');
        return false;
    }
    var response = grecaptcha.getResponse();
    if(response.length == 0){
        alert("Captcha no verificado");
        return false;
    } else {
        alert("Captcha verificado");
    }
    return true;
} 
</script>
<script>
function miFuncion() {
}
</script>
</body>
</html>