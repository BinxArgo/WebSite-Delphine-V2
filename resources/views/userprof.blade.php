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
    <title>Espace Utilisateur</title>
</head>

<body>

    <div class="containerhome">
        <!-----header Espace Utilisateur-------->
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
        <!--------TITLE USER SPACE-------------------------->
        <h1 id="testTitle">Espace Utilisateur</h1>

        <div class="testpresent">

            <!-------TESTE PRESENTATION PARAGRAPH--------->
            <div class="titleexo">
                <p>Réserver vos séances</p>
            </div>
            <!--------CALENDRLY API CALENDAR BOOKING CLASS------>
            <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/coja-jacques"
                style="min-width:320px;height:630px;"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
            <!-- Calendly inline widget end -->

        </div>
        <br>


        <br><br><br>
        <!----GOOGLE DRIVE FILE BUTTON--------->
        <div class="freecourse-container">

        </div>
        <br><br>


        <br><br><br>

        <!---SECONDARY FOOTER----->
        <footer>
            @include('basicfooterlog')
        </footer>
    </div>


    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
</body>

<br><br><br>

</html>
