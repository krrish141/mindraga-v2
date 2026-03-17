
<style>

/* HEADER */
.main-header {
  background: #616161cc;
  backdrop-filter: blur(12px);
  padding: 8px 0px;
}
/* FLEX ALIGN */
.header-wrapper {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 100%;
}

/* LOGO LEFT */
.logo img {
  width: 160px;
}

/* MENU RIGHT */
.nav-menu {
  display: flex;
  align-items: center;
  gap: 25px;
}

.nav-menu a {
  text-decoration: none;
  color: var(--light);
  font-family: var(--font-secondary);
  font-size: 16px;
}


/* DROPDOWN WRAPPER */
.dropdown {
  position: relative;
  z-index: 1;
}

/* DROPDOWN MENU */
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  min-width: 240px;
  border-radius: 8px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.08);
  display: none;
  flex-direction: column;
  overflow: hidden;
  z-index: 1000;

  padding: 24px 0px;
  border: 0.8px solid  #D2D5DA;
  background: rgba(255, 255, 255, 0.45);
  backdrop-filter: blur(12px);
}

/* DROPDOWN LINKS */
.dropdown-menu a {
  padding: 12px 16px;
  font-size: 14px;
  color: #000;
  transition: 0.3s;
}

.dropdown-menu a:hover {
  background: #f5f5f5;
}

/* HOVER EFFECT (DESKTOP) */
.dropdown:hover .dropdown-menu {
  display: flex;
}


/* MOBILE MENU */
.menu-toggle {
  display: none;
  font-size: 24px;
  cursor: pointer;
}

/* ================= */
/* RESPONSIVE */
/* ================= */

@media (max-width: 768px) {

  .menu-toggle {
    display: block;
  }

  .nav-menu {
    position: absolute;
    top: 70px;
    left: 0;
    width: 100%;
    background: #fff;
    flex-direction: column;
    align-items: flex-start;
    display: none;
    padding: 10px 0;
    border-top: 1px solid #eee;
    z-index: 1;
  }

  .nav-menu a {
    padding: 12px 20px;
    width: 100%;
  }

  .nav-menu.active {
    display: flex;
  }

}

</style>



<header class="main-header">
  <div class="container header-wrapper">

    <!-- LEFT LOGO -->
    <div class="logo">
      <img src="../assets/images/common/logo-white.png" alt="MindRaga">
    </div>

    <!-- RIGHT MENU -->
    <nav class="nav-menu" id="navMenu">
  
    <a href="#">About Us</a>

    <a href="#">Learn with Us </a>

  <!-- DROPDOWN -->
  <div class="dropdown">
    <a href="#" class="dropdown-toggle">Our Courses <i class="fas fa-angle-down"></i></a>

    <div class="dropdown-menu">
      <a href="#">Courses 1</a>
      <a href="#">Courses 2</a>
      <a href="#">Courses 3</a>
    </div>
  </div>

    <a href="#">Blogs</a>

    <a href="#">Book Demo Class</a>


  <a href="#" class="btn-raga-primary btn-md d-none-md">
    <span class="btn-text">CONTACT US</span>
    <span class="btn-icon">
      <img src="../assets/images/common/arrow-down-tray.svg">
    </span>
  </a>

  <a href="#" class="d-none">Contact Us</a>

</nav>

    <!-- MOBILE TOGGLE -->
    <div class="menu-toggle" id="menuToggle">
      ☰
    </div>

  </div>
</header>

<script>
document.addEventListener("DOMContentLoaded", function () {

  const toggle = document.getElementById("menuToggle");
  const nav = document.getElementById("navMenu");

  const dropdownToggle = document.querySelector(".dropdown-toggle");
  const dropdownMenu = document.querySelector(".dropdown-menu");

  // Mobile menu toggle
  if (toggle && nav) {
    toggle.addEventListener("click", () => {
      nav.classList.toggle("active");
    });
  }

  // Dropdown toggle (mobile only)
  if (dropdownToggle && dropdownMenu) {
    dropdownToggle.addEventListener("click", (e) => {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        dropdownMenu.classList.toggle("active");
      }
    });
  }

});
</script>

