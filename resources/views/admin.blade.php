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
    <title>Admin</title>
</head>

<body>

    <div class="containerhome">
        <!-----header Espace admin-------->
        <div class="testheader">
            <div class="logout">
                <img src="img\tests\logout.png" alt="logoutIcon">
                <h6 id="labellogout" class="labelsaccounts">Abandonner</h6>
            </div>
            <div class="userlogged">
                <img src="img\tests\usericon.png" alt="userIcon">
                <h6 class="labelsaccounts">User</h6>
            </div>
        </div>
        <!--------TITLE ADMIN SPACE-------------------------->
        <h1 id="testTitle">Gestion des utilisateurs</h1>

        <div class="testpresent">

            <!-------TESTE PRESENTATION PARAGRAPH--------->
            <div class="titleexo">
                <p>Gestion de séances</p>
            </div>
            <!--------ADMIN Google calendar------>
            <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FParis&amp;src=Y29qYS5qYWNxdWVzQGdtYWlsLmNvbQ&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=Y2xhc3Nyb29tMTE2NDQwNDk2MTU2ODEyODgyNDk4QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;src=Y2xhc3Nyb29tMTE2MzE2OTY4MTAwODU2MjUyOTkyQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;src=cHQtYnIuYnJhemlsaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%234285F4&amp;color=%237CB342&amp;color=%23c26401&amp;color=%23202124&amp;color=%230B8043&amp;mode=MONTH" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            <br>
 
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
