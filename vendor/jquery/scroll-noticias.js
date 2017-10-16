window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
        document.getElementById("boletin").src = "http://placehold.it/300x170";
    } else {
        document.getElementById("boletin").src = "img/noticias/boletines_imagen_15.jpg";
    }
}
