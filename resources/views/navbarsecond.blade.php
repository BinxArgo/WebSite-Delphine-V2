
<div id="fixedNav" class="fixedNavBar hide">
             <!--LOGO-->
    <img id="LogoNavbarFixed" src="img\logoDelphine.jpg" alt="logoDelphineHaradaHome">
    <!--MENU OPTIONS-->
    <div class="menubar">
    <a href="{{ URL::previous() }}">{{__('customlang.accueil')}}</a>
        <a href="#contact"><button id="buttonContactFixed">{{__('customlang.contact')}}</button></a>
    </div>
   <!--------------------------------------DROPDOWN BUTTON----------------------------------------> 
    <div class="dropdown">
            <button  id="buttonMenuFixed" class="dropbtn">
                <img class="menuiconimg" src="img\menu.png" alt="hamburguermenuicon">
            </button>
            <div  class="dropdown-content">
            <a href="{{ URL::previous() }}">{{__('customlang.accueil')}}</a>
            <a href="public"><button id="buttonContactFixed">{{__('customlang.contact')}}</button></a>
            </div>
    </div>
</div>

<nav>
    <!--LOGO-->
    <img id="LogoNavbar" src="img\logoDelphine.jpg" alt="logoDelphineHaradaHome">
    <!--MENU OPTIONS-->
    <div class="menubar">
    <a href="{{ URL::previous() }}">{{__('customlang.accueil')}}</a>
        <a href="#contact"><button id="buttonContact">{{__('customlang.contact')}}</button></a>
    </div>
   <!--------------------------------------DROPDOWN BUTTON----------------------------------------> 
   <div class="dropdown">
            <button  id="buttonMenuFixed" class="dropbtn">
                <img class="menuiconimg" src="img\menu.png" alt="hamburguermenuicon">
            </button>
            <div  class="dropdown-content">
            <a href="{{ URL::previous() }}">{{__('customlang.accueil')}}</a>
            <a href="#contact"><button id="buttonContactFixed">{{__('customlang.contact')}}</button></a>
            </div>
    </div>
</nav>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function dropfunct() {
  document.getElementById("dropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropmenu");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


        fixedNav = document.getElementById("fixedNav");

        var myScrollFunc = function () {
            var y = window.scrollY;
            if (y >= 200) {
                fixedNav.className = "fixedNavBar show"
            } else {
                fixedNav.className = "fixedNavBar hide"
            }
        };
        window.addEventListener("scroll", myScrollFunc);

        
</script>

