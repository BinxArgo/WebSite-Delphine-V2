<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
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
        <!-------TESTE PRESENTATION PARAGRAPH--------->
        <div class="testpresent">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, architecto sint quas ut nisi est ullam
                cupiditate beatae officia harum laboriosam ipsam asperiores dolorem? Ullam ab temporibus deserunt?
                Tenetur autem reiciendis rerum, maiores possimus adipisci a commodi quos et laborum modi, in nisi
                voluptatum reprehenderit itaque sint? Expedita, quod ipsa! Facere cum a tempore qui rerum! Labore
                assumenda distinctio ipsam.</p>
        </div>
        <!--------TITLE TEST-------------------------->
        <h1 id="testTitle">II. Compréhension oral</h1>
        <!-------Banner Test-------------------------->
        <img class="bannertest" src="img\tests\bannertest02.png" alt="bannertest01">

        <div class="test-container">
            <!--------------------------------------------------------------------->
            <!------------------------EXERCICE 01---------------------------------->
            <!--------------------------------------------------------------------->
            <p class="titleexo">1) Articles: complétez avec 'Un', 'Une', ou 'Des':</p>
            <!--Video embeded UL--->
            <div id="player"></div>
            <br><br>
            <!------OPTION 01----->
            <div class="exo-container">
                <select name="" class="selects" id="quest01">
                    <option class="optlabel" value="">Options</option>
                    <option value="un">Un</option>
                    <option value="un">Une</option>
                    <option value="un">Des</option>
                </select>
                <label for="quest01">Fleur</label>
            </div>
            <br>
            <!------OPTION 02----->
            <div class="exo-container">
                <select name="" class="selects" id="quest01">
                    <option class="optlabel" value="">Options</option>
                    <option value="un">Un</option>
                    <option value="un">Une</option>
                    <option value="un">Des</option>
                </select>
                <label for="quest01">habitudes</label>
            </div>
            <br>
            <!------OPTION 03----->
            <div class="exo-container">
                <select name="" class="selects" id="quest01">
                    <option class="optlabel" value="">Options</option>
                    <option value="un">Un</option>
                    <option value="un">Une</option>
                    <option value="un">Des</option>
                </select>
                <label for="quest01">Ami</label>
            </div>


            <br><br><br>

            <!---End Container exercices--->
        </div>
        <br><br>
        <!-------Next exercice button------>
        <div class="buttonstarifs">
            <button class="mainbuttonaction" style="margin-right">Suivant <img src="img/arrowbutton.png"></button>
        </div>

        <footer>
            @include('basicfooterlog')
        </footer>
    </div>
    </div>
    <script>
        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '390',
                width: '640',
                videoId: 'Ssd3FKVOsnw',
                playerVars: {
                    autoplay: 1, // Auto-play the video on load
                    controls: 0, // Show pause/play buttons in player
                    showinfo: 0, // Hide the video title
                    modestbranding: 1, // Hide the Youtube Logo
                    fs: 1, // Hide the full screen button
                    cc_load_policy: 1, // Hide closed captions
                    iv_load_policy: 1, // Hide the Video Annotations
                    start: 32,
                    end: 42,
                    loop: 1, // Run the video in a loop
                    autohide: 1, // Hide video controls when playing
                },
                events: {
                    'onReady': onPlayerReady,
                    //'onStateChange': onPlayerStateChange
                }
            });
        }

        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
            event.target.playVideo();
        }

        // 5. The API calls this function when the player's state changes.
        //    The function indicates that when playing a video (state=1),
        //    the player should play for six seconds and then stop.
        var done = false;

        //function onPlayerStateChange(event) {
           // if (event.data == YT.PlayerState.PLAYING && !done) {
               // setTimeout(stopVideo, 6000);
                //done = false;
            //}
        //}

        function stopVideo() {
            player.stopVideo();
        }

    </script>
</body>

<br><br><br>

</html>
