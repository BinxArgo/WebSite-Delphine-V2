

<div id="biographie" class="bio-container">
    <h2>Biographie</h2>

    <div class="mySlidesBio fadeBio">
        <div class="descriptionSlide">
            <p class="BioParag">
                Aorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            </p>
        </div>
        <div class="imgslideBio">
            <img class="imgslideBio" src="https://placekitten.com/400/300">
        </div>

    </div>

    <div class="mySlidesBio fadeBio">
        <div class="descriptionSlide">
            <p class="BioParag">
                borem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            </p>
        </div>
        <div class="imgslideBio">
            <img class="imgslideBio" src="https://placekitten.com/400/300">
        </div>

    </div>



    <br>
    <div class="dotsdivBio">
        <span class="dotBio" onclick="currentSlideBio(1)">2009</span>
        <span class="dotBio" onclick="currentSlideBio(2)">2010</span>
        <span class="dotBio" onclick="currentSlideBio(3)">2011</span>
        <span class="dotBio" onclick="currentSlideBio(4)">2012</span>
        <span class="dotBio" onclick="currentSlideBio(5)">2013</span>
        <span class="dotBio" onclick="currentSlideBio(6)">2014</span>
    </div>

</div>






<script type="text/javascript">
    var slideIndexBio = 1;
    showSlidesBio(slideIndexBio);


    function currentSlideBio(nb) {

        showSlidesBio(slideIndexBio = nb);

    }

    function showSlidesBio(nb) {

        var ib;
        var slidesBio = document.getElementsByClassName("mySlidesBio");
        var dotsBio = document.getElementsByClassName("dotBio");
        if (nb > slidesBio.length) {
            slideIndexBio = 1
        }
        if (nb < 1) {
            slideIndexBio = slidesBio.length
        }
        for (ib = 0; ib < slidesBio.length; ib++) {
            slidesBio[ib].style.display = "none";
        }
        for (ib = 0; ib < dotsBio.length; ib++) {
            dotsBio[ib].className = dotsBio[ib].className.replace(" activeBio", "");
        }
        slidesBio[slideIndexBio - 1].style.display = "flex";
        dotsBio[slideIndexBio - 1].className += " activeBio";

    }

</script>
