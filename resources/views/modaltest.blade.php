<!--MODAL INSCIRPTION LEVEL TEST--> 

<div id="myModal" class="modal">

    <!--Modal Content--> 
    <div class="modal-content">
    <span class="close">&times;</span><br><br><br>
        <h2>Teste de positionnement</h2>
        <p class="textModal01">Teste interactif pour personnaliser votre apprentissage </p>
        <div class="testinfos">
            <img src="img\timeicon.png" alt="timeicon">
            <span class="textinfo01">30 min</span><br>
            <img src="img\check.png" alt="checkicon">
            <span class="textinfo01">fonctionnement de la langue</span><br>
            <img src="img\check.png" alt="checkicon">
            <span class="textinfo01">Compréhension oral</span><br>
            <img src="img\check.png" alt="checkicon">
            <span class="textinfo01">Compréhension écrite</span>
        </div>
        
    </div>

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
