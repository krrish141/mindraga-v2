<style>
  .main-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 8px 80px;
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);

    border-bottom: 1px solid rgba(255, 255, 255, 0.15);

    z-index: 1000;
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
    color: #000;
    font-size: 16px;
  }


  /* DROPDOWN WRAPPER */
  .dropdown {
    position: relative;
  }

  /* DROPDOWN MENU */
  .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    min-width: 240px;
    border-radius: 8px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    display: none;
    flex-direction: column;
    overflow: hidden;
    z-index: 1000;

    padding: 24px 0px;
    border: 0.8px solid #D2D5DA;
    background: rgb(255 255 255);
    backdrop-filter: blur(12px);
  }

  /* DROPDOWN LINKS */
  .dropdown-menu a {
    padding: 12px 16px;
    font-size: 16px;
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

  .dropdown-toggle::after {
    display: none;
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

    .main-header {
      padding: 8px;
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
  <a href="index.php">
    <img src="../assets/images/common/logo-black.png" alt="MindRaga">
  </a>
</div>

    <!-- RIGHT MENU -->
    <nav class="nav-menu" id="navMenu">

      <a href="./who-we-are.php">Who We Are</a>

      <div class="dropdown">
        <a href="#" class="dropdown-toggle">For Corporates <i class="fas fa-angle-down"></i></a>

        <div class="dropdown-menu">
          <a href="./leadership-development.php">Leadership Development </a>
          <a href="./personal-development.php">Personal Development</a>
          <a href="./organizational-development.php"> Organizational Development</a>
          <a href="./interpersonal-development.php"> Interpersonal Development</a>
        </div>
      </div>

      <div class="dropdown">
        <a href="#" class="dropdown-toggle">For School <i class="fas fa-angle-down"></i></a>

        <div class="dropdown-menu">
          <a href="./curriculum-design-services.php">Curriculum Design Services  </a>
          <a href="./facilitator-program.php">Facilitator Program </a>
          <a href="./sel-for-students.php">SEL Program for Students </a>
        </div>
      </div>

      <a href="./contact.php" class="btn-mind-primary btn-md d-none-md h-44">
        <span class="btn-text fs-16">CONTACT US</span>
        <span class="btn-icon">
          <img src="../assets/images/common/arrow-right.svg" alt="icon">
        </span>
      </a>

      <a href="./contact.php" class="d-none">Contact Us</a>

    </nav>

    <!-- MOBILE TOGGLE -->
    <div class="menu-toggle" id="menuToggle">
      ☰
    </div>

  </div>
</header>

<script>
  document.addEventListener("DOMContentLoaded", function() {

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