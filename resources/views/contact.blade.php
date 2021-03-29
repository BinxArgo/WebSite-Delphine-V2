<div id="contact" class="contactContainer">
    
    <div class="contactinfo">
        <div class="titlecontact">
            <h3 class="titleContact">Contact</h3>
        </div>
        <br>
        <div class="infoDelphine">
            <br>
            Delphine Harada
            <hr class="hrowContact">
            <br>
            <div class="phone">
                <img class="iconsContact" src="img/mail.png" alt="mailicon">
                contact@delphineharada.com
            </div>
            <br>
            <div class="email">
                 <!--<img class="iconsContact" src="img/phone.png" alt="phoneicon">-->
                
            </div>

        </div>
    </div>
    <br>
    <!---NEWSLETTER FORM------->
    <div class="contactinfo">
        <div class="titlecontact">
            <h3 class="titleSubscribe">S'inscrire à la newsletter</h3>
        </div>


        <form action="{{URL('/newsletter')}}" method="POST">
        @csrf
            <div class="infoDelphine">
                <!--<div class="form__group field">
                    <input class="contactForm" type="text" class="form__field" placeholder="Nom" name="LNAME"/>
                </div>
                <div class="form__group field">
                    <input class="contactForm" type="text" class="form__field" placeholder="Prénom" name="FNAME"/>

                </div>-->
                <div class="form__group field">
                    <input class="contactForm" type="email" class="form__field" placeholder="E-mail" name="EMAIL" required/>

                </div>
                <br>
                <div class="buttonSuscribe">
                            <button type="submit" class="newsbutton">S'inscrire</button>
                        </div>
                    </div>
                <!-----RADIO OPTIONS SUBSCRIPTION----->
                <div class="containerSubscribe">

                   <!-- <div class="">
                        <input type="radio" name="checkprofile" id="1" />
                        <label for="1">
                            <span class="labelcontact">Privé</span>
                        </label>
                    </div>
                    <br>
                    <div class="">
                        <input type="radio" name="checkprofile" id="2" />
                        <label for="2">
                            <span class="labelcontact">Entreprise</span>
                        </label>-->
                        <br><br>

                    <br><br><br>

                </div>
            </div>
        </form>

    </div>
</div>
</div>
