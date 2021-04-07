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
    <title>Teste de positionnement</title>
</head>

<body>

    <div class="containerhome">
        <!-----header logged user test-------->
        <div class="testheader">
            <div class="logout">
                <img src="img\tests\logout.png" alt="logoutIcon">
                <h6 id="labellogout" class="labelsaccounts">Abandonner</h6>
            </div>
            <div class="userlogged">
                <img src="img\tests\usericon.png" alt="userIcon">
                <h6 class="labelsaccounts">User name</h6>
            </div>
        </div>
        <!--------TITLE TEST-------------------------->
        <h1 id="testTitle">Vouz avez terminé le teste!</h1>

        <div class="testpresent">
            <!--LOGO DELPHINE--->
            <img src="img\horizontallogolg.png" alt="horizontalLogo">
            <!-------TESTE PRESENTATION PARAGRAPH--------->
            <div class="titleexo">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="testpresent">
                <p class="description-result">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, architecto sint quas ut nisi est
                    ullam
                    cupiditate beatae officia harum laboriosam ipsam asperiores dolorem? Ullam ab temporibus deserunt?
                    Tenetur autem reiciendis rerum, maiores possimus adipisci a commodi quos et laborum modi, in nisi
                    voluptatum reprehenderit itaque sint?.</p>
            </div>


        </div>
        <br>

        <div class="result-container">
            <div class="medal-container">
                <img src="img\tests\silvermedal.png" alt="silvermedal">
            </div>
            <div class="resultdescription">
                <span>75/150</span>
                <span>Niveau intermédiaire</span>
            </div>
        </div>
        <br><br><br>

        <div class="freecourse-container">
            <button class="secondarybutton" style="margin-right: 10px;" href=""
                onclick="Calendly.initPopupWidget({url: 'https://calendly.com/coja-jacques/courstestedelphine?text_color=006998&primary_color=ff6600'});return false;"><a
                    style="text-decoration: none; font-size: 40px;">Faire un cours gratuit</a>
            </button>
        </div>
        <br><br>

        <div class="contact-test">
            <img class="inconEmail-test" src="img/tests/mailicon02.png" alt="mailicon">
            <p>contact@delphineharada.com</p>

        </div>
        <div class="info-containerresult">
            <p>Envoyer un email pour plus d'informations!</p>
        </div>



        <br><br><br>
        <br><br>
        <!-------Next exercice button------>
        <div class="buttonstarifs">
            <button class="mainbuttonaction" style="margin-right">Suivant <img src="img/arrowbutton.png"></button>
        </div>
        <!---SECONDARY FOOTER-----> 
        <footer>
            @include('basicfooterlog')
        </footer>
    </div>


    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
</body>

<br><br><br>

</html>
