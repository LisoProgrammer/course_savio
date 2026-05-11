<div class="top-navbar">

    <!-- LEFT -->
    <div class="left-section">

        <button class="menu-toggle" id="menuToggle">
            ☰
        </button>

        <div class="university-logo">
            <img src="assets/logo-savio-azul.png" alt="UTB">
        </div>

    </div>

    <!-- RIGHT DESKTOP -->
    <div class="right-section desktop-menu">

        <button class="icon-btn" id="themeToggle">
            <img src="assets/moon.png" alt="">
        </button>

        <button class="icon-btn notification">
            <img src="assets/not.png" alt="">
            <span class="badge">3</span>
        </button>

        <button class="icon-btn notification">
            <img src="assets/chat.png" alt="">
            <span class="badge">5</span>
        </button>

        <div class="user-menu">

            <div class="user-avatar">
                L
            </div>

            <div class="user-info">
                <span class="username">LIZAPATA</span>
                <span class="role">Estudiante</span>
            </div>

        </div>

    </div>

</div>

<!-- FULLSCREEN MOBILE MENU -->

<div class="mobile-fullscreen-menu" id="mobileMenu">

    <div class="mobile-header">

        <h2>Menú</h2>

        <button class="close-menu" id="closeMenu">
            ✕
        </button>

    </div>

    <div class="mobile-content">

        <a href="#"><img src="assets/home.png" alt=""> Inicio</a>
        <a href="#"><img src="assets/course.png" alt=""> Cursos</a>
        <a href="#"><img src="assets/people.png" alt=""> Participantes</a>
        <a href="#"><img src="assets/grades.png" alt=""> Calificaciones</a>
        <a href="#"><img src="assets/not.png" alt=""> Notificaciones</a>
        <a href="#"><img src="assets/chat.png" alt=""> Mensajes</a>

        <button class="mobile-theme-btn" id="mobileThemeToggle">
            <img src="assets/moon.png" alt="" style='filter: invert(1)'> Cambiar tema
        </button>

        <div class="mobile-user-card">

            <div class="user-avatar">
                L
            </div>

            <div>
                <h3>LIZAPATA</h3>
                <p>Estudiante</p>
            </div>

        </div>

    </div>

</div>

<script>

    // OPEN MENU
    const menuToggle = document.getElementById("menuToggle");
    const mobileMenu = document.getElementById("mobileMenu");

    menuToggle.addEventListener("click", () => {
        mobileMenu.classList.add("show-mobile-menu");
    });

    // CLOSE MENU
    const closeMenu = document.getElementById("closeMenu");

    closeMenu.addEventListener("click", () => {
        mobileMenu.classList.remove("show-mobile-menu");
    });

    // THEME
    const themeToggle = document.getElementById("themeToggle");
    const mobileThemeToggle = document.getElementById("mobileThemeToggle");
    const logo = document.querySelector(".university-logo img");
    function toggleTheme(){

        document.body.classList.toggle("dark-mode");

        if(document.body.classList.contains("dark-mode")){

            themeToggle.innerHTML = "<img src='assets/sun.png' alt=''>";
            mobileThemeToggle.innerHTML = "<img src='assets/sun.png' alt='' style='filter: invert(1)'> Tema claro";
            logo.style.filter = "grayscale(1) invert(1)";

        }else{

            themeToggle.innerHTML = "<img src='assets/moon.png' alt=''>";
            mobileThemeToggle.innerHTML = "<img src='assets/moon.png' alt='' style='filter: invert(1)'> Tema oscuro";
            logo.style.filter = "none";
        }

    }

    themeToggle.addEventListener("click", toggleTheme);
    mobileThemeToggle.addEventListener("click", toggleTheme);

</script>