<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <!-- Calendly link widget begin -->
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>




    <title>Delphine Harada</title>
</head>

<body>
    <!------------------------- Header with header lang ------------------------>
    @include('header')

    <div class="containerhome">
        <!------------------------------- navbar menu ------------------------------>

        @include('navbar')

        <!------------------------------ Section area ------------------------------>

        @include('section')
        <br><br><br><br>
        <!------------------------------ Mon Parcours & Slideshow ------------------------------>
        @include('slideshow')
        <br>
        <hr class="mainhr">
        <br>
        <!------------------------------ Jobs logos  ------------------------------>
        @include('jobs')

        <!------------------------------ Biographie Slideshow  ------------------------------>

        @include('bio')
        <hr class="mainhr">

        <!------------------------------- Methode area ------------------------------>

        @include('methode')

        <!------------------------------- Tarifs area ------------------------------>
        <br><br><br><br><br>
        @include('tarifs')

        <!------------------------------- Tarifs area ------------------------------>
        <br><br><br><br><br>
        @include('contact')
        <!------------------------------- Footer area ------------------------------>
        <br><br>
        @include('footer')
    </div>


</body>

<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
<script type="text/javascript">
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {

        showSlides(slideIndex += n);

    }

    function currentSlide(n) {

        showSlides(slideIndex = n);

    }

    function showSlides(n) {

        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";


    }
    //BIO SCIRPT 

</script>

<script type="text/javascript">
    $('.container').on('click', function () {
        $('.card').toggleClass('flipped');
    });
    $('.container02').on('click', function () {
        $('.card02').toggleClass('flipped');
    });
    $('.container03').on('click', function () {
        $('.card03').toggleClass('flipped');
    });
    $('.container04').on('click', function () {
        $('.card04').toggleClass('flipped');
    });
    $('.container05').on('click', function () {
        $('.card05').toggleClass('flipped');
    });
    $('.container06').on('click', function () {
        $('.card06').toggleClass('flipped');
    });

</script>

</html>
