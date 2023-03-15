<!--navigation bar -->
<nav class="sidebar close">
    <header>
        <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

            <div class="text logo-text">
                <span class="name">Hotel Neptune</span>
                <span class="profession">Oui... ça existe</span>
            </div>
        </div>

        <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
        <div class="menu">

            <li class="search-box">
                <i class='bx bx-search icon'></i>
                <input type="text" placeholder="Search...">
            </li>

            <ul class="menu-links">
                <li class="nav-link">
                    <a href="index.php">
                        <i class='bx bx-home-alt icon' ></i>
                        <span class="text nav-text">Accueil</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="chambre.php">
                        <i class='bx bx-bar-chart-alt-2 icon' ></i>
                        <span class="text nav-text">Chambre</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-bell icon'></i>
                        <span class="text nav-text">Réservations</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-pie-chart-alt icon' ></i>
                        <span class="text nav-text">Profil</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-heart icon' ></i>
                        <span class="text nav-text">Connection</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="bottom-content">
            <li class="">
                <a href="#">
                    <i class='bx bx-log-out icon' ></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>

            <li class="mode">
                <div class="sun-moon">
                    <i class='bx bx-moon icon moon'></i>
                    <i class='bx bx-sun icon sun'></i>
                </div>
                <span class="mode-text text">Dark mode</span>

                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>

        </div>
    </div>

</nav>
<!--navigation bar -->




<!--Affichage du contenue -->


<!--Affichage du contenue -->





<!-- nav bar en dark ou light mode-->
<script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");
    texte = body.querySelector(".texte"),

        toggle.addEventListener("click" , () =>{
            sidebar.classList.toggle("close");
        })

    searchBtn.addEventListener("click" , () =>{
        sidebar.classList.remove("close");
    })

    modeSwitch.addEventListener("click" , () =>{
        body.classList.toggle("dark");

        if(body.classList.contains("dark")){
            modeText.innerText = "Light mode";
        }else{
            modeText.innerText = "Dark mode";

        }
    });

    modeSwitch.addEventListener("click", () =>{
        body.classList.toggle("noir")
    })
</script>

