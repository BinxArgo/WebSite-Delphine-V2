<!--MODAL INSCIRPTION LEVEL TEST--> 

<div id="myModal" class="modal">

    <!--Modal Content--> 
    <div class="modal-content">
    <span class="close">&times;</span><br><br><br>
        <h2>Teste de positionnement</h2>
        <p class="textModal01">Teste interactif pour personnaliser votre apprentissage </p><br>
        <div class="testinfos">
            <div class="timeocntainer">
                <img class="icontime" src="img\timeicon.png" alt="timeicon">
                <span class="textinfoTime">30 min</span><br>
            </div><br>
            <img src="img\check.png" alt="checkicon">
            <span class="textinfo01">fonctionnement de la langue</span><br>
            <img src="img\check.png" alt="checkicon">
            <span class="textinfo01">Compréhension oral</span><br>
            <img src="img\check.png" alt="checkicon">
            <span class="textinfo01">Compréhension écrite</span>
        </div>
<br><br><br>
        <div class="formtestContent">
        <input class="testForm" type="text" class="form__field" placeholder="Prénom" name="prenomTest" required/><br>
        <input class="testForm" type="text" class="form__field" placeholder="Nom" name="nomTest" required/><br>
        <input class="testForm" type="email" class="form__field" placeholder="E-mail" name="emailTest" required/><br>
        <input class="testForm" type="password" class="form__field" placeholder="Mot de passe" name="mdpTest" required/><br>
        <input class="testForm" type="password" class="form__field" placeholder="Confirmation mot de passe" name="confirmMdpTest" required/><br><br>
        <input class="testForm" type="text" class="form__field" placeholder="Télephone" name="telTest" required/><br>
        <input class="testForm" type="text" class="form__field" placeholder="Pays" name="paysTest" required/><br>
        <input class="testForm" type="text" class="form__field" placeholder="Ville" name="villeTest" required/><br><br><br>
        <button id="" class="starttestBtn">Commencer</button>
        </div>        
        <br><br><br>
        @include('basicfooterlog')
    </div>
    <!-------------Basic Logo Footer---------------> 
   
</div>

<script type="text/javascript">


    //Get the modal 
    var modal = document.getElementById("myModal");

    //Get the button "Faire un test gratuit" that opens the modal 
    var btn = document.getElementById("btnTestGratuit");

    //Get the span element to close the modal
    var span = document.getElementsByClassName("close")[0];

    //When the user clicks on the button, open the modal
    btnTestGratuit.onclick =function(){
        modal.style.display = "block";
        document.querySelector("body").style.overflow = 'hidden';
    }
    
    //When the use click the closing button 
    span.onclick = function(){
        modal.style.display = "none";
        document.querySelector("body").style.overflow = 'visible';
    }
    //Click outside to close it 
    window.onclick = function(event) {
        if (event.target == modal){
            modal.style.display = "none";
            document.querySelector("body").style.overflow = 'visible';
        }
    }
</script>
