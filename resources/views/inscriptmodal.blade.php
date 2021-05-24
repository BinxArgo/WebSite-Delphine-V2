<!--MODAL INSCIRPTION LEVEL TEST--> 

<div id="modalInscription" class="modalContainer">

    <!--Modal Content--> 
    <div class="modal-content">
        <h2>Connexion</h2>
        <p class="textModal01">Entrez vos données pour accéder à votre espace</p><br>

        <br><br><br>
        <div class="formtestContent">
        <input class="testForm" type="email" class="form__field" placeholder="E-mail" name="emailTest" required/><br>
        <input class="testForm" type="password" class="form__field" placeholder="Mot de passe" name="mdpTest" required/><br>
        <button id="" class="starttestBtn">Valider</button>
        </div>        
        <br><br><br>
        @include('basicfooterlog')
    </div>
    <!-------------Basic Logo Footer---------------> 
   
</div>

<script type="text/javascript">


    //Get the modal 
    var modalinscript = document.getElementById("modalInscription");

    //Get the button "Faire un test gratuit" that opens the modal 
    var btninscript = document.getElementById("btnInscription");


    //When the user clicks on the button, open the modalinscript
    btnInscription.onclick =function(){
        modalinscript.style.display = "block";
        document.querySelector("body").style.overflow = 'hidden';
    }
    
    //When the use click the closing button 
    spaninscript.onclick = function(){
        modalinscript.style.display = "none";
        document.querySelector("body").style.overflow = 'visible';
    }
    //Click outside to close it 
    window.onclick = function(event) {
        if (event.target == modalContainer){
            modalContainer.style.display = "none";
            document.querySelector("body").style.overflow = 'visible';
        }
    }
</script>
