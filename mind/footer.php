<div class="mind-footer-section">

  <!-- Background Big Text -->
  <div class="mind-footer-bg-text">
    <p>Transforming The World</p>
  </div>

  <!-- Footer Card -->
  <footer class="mind-footer" role="contentinfo">
    <div class="container">

      <div class="mind-footer-grid">

        <!-- Logo + Button -->
        <div class="mind-footer-brand mind-footer-logo">
          <a href="/" aria-label="MindRaga Home">
            <img src="../assets/images/common/logo-black.png" class="logo-img" alt="MindRaga Logo">
          </a>

          <a href="./contact.php" class="btn-mind-primary btn-md h-50">
            <span class="btn-text fs-16">Contact Us</span>
            <span class="btn-icon">
              <img src="../assets/images/common/arrow-right.svg" alt="Download">
            </span>
          </a>
        </div>

        <!-- Column 1 -->
        <div class="mind-footer-column">
          <h3>About Us</h3>
          <ul>
            <li><a href="./who-we-are.php"><img src="../assets/images/common/vector.svg">Who We Are</a></li>
            <li><a href="./research-and-credentials.php"><img src="../assets/images/common/vector.svg">Research & Credentials </a></li>
            <li><a href="./harvard-sel-framework.php"><img src="../assets/images/common/vector.svg">Harvard SEL Framework </a></li>
          </ul>
        </div>

        <!-- Column 2 -->
        <div class="mind-footer-column">
          <h3>For Corporates </h3>
          <ul>
            <li><a href="./leadership-development.php"> <img src="../assets/images/common/vector.svg">Leadership Development </a></li>
            <li><a href="./personal-development.php"> <img src="../assets/images/common/vector.svg">Personal Development</a></li>
            <li><a href="./organizational-development.php"><img src="../assets/images/common/vector.svg"> Organizational Development</a></li>
            <li><a href="./interpersonal-development.php"><img src="../assets/images/common/vector.svg"> Interpersonal Development</a></li>


          </ul>
        </div>

        <!-- Column 3 -->
        <div class="mind-footer-column">
          <h3>For School </h3>
          <ul>
              <li><a href="./curriculum-design-services.php"><img src="../assets/images/common/vector.svg"> Curriculum Design Services  </a></li>            
              <li><a href="./facilitator-program.php"><img src="../assets/images/common/vector.svg"> Facilitator Program </a></li>
              <li><a href="./sel-for-students.php"><img src="../assets/images/common/vector.svg"> SEL Program for Students </a></li>
          </ul>
        </div>

        <!-- Column 4 -->
        <div class="mind-footer-column">
          <h3>Our Partner</h3>
          <ul>
            <li><a href="https://tsm.swabhavtechlabs.com/" target="_blank"><img src="../assets/images/common/vector.svg">Mithril Login</a></li>
            <li><a href="https://swabhavtechlabs.com/" target="_blank"><img src="../assets/images/common/vector.svg">Swabhav Techlabs</a></li>
            <li><a href="https://swabhavventurelabs.com/" target="_blank"><img src="../assets/images/common/vector.svg">Swabhav VentureLabs</a></li>
          </ul>
        </div>

      </div>

      <!-- Bottom -->
      <!-- <div class="mind-footer-bottom">
        <ul>
          <li><a href="#">Mithril Login</a></li>
          <li><a href="#">Mindraga</a></li>
          <li><a href="#">Swabhav Techlabs</a></li>
          <li><a href="#">Swabhav VentureLabs</a></li>
        </ul>
      </div> -->

    </div>
  </footer>

  <!-- Copyright -->
  <div class="mind-footer-copyright">
    <p>© 2025 Swabhav Techlabs Pvt. Ltd.</p>
  </div>

</div>

<style>
  /* ===== SECTION ===== */
  .mind-footer-section {
    position: relative;
    background: url("../assets/images/mind/mind-footer.png") no-repeat center center;
    background-size: cover;
    padding: 0px 20px 20px;
  }

  /* ===== BIG TEXT (FIXED) ===== */

  .mind-footer-bg-text {
    width: 100%;
    text-align: center;
  }

  .mind-footer-bg-text p {
    color: rgba(255, 255, 255, 0.8);
    font-size: 116px;
    /* 👈 key change */
    font-weight: 600;
    font-family: var(--font-primary);
    letter-spacing: 4px;
    margin: 0;
    white-space: nowrap;
    /* line break na ho */
  }

  /* ===== FOOTER CARD ===== */
  .mind-footer {
    background: #fff;
    border-radius: 16px;
    padding: 80px 40px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    border: 4px solid rgb(211 211 211 / 70%);
  }

  /* ===== GRID ===== */
  .mind-footer-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 40px;
  }

  /* ===== LOGO ===== */
  .mind-footer-logo .logo-img {
    width: 180px;
    margin-bottom: 20px;
  }

  /* ===== COLUMN ===== */
  .mind-footer-column h3 {
    margin-bottom: 20px;
    font-size: 18px;
    font-weight: 500;
    font-family: var(--font-secondary);
  }

  .mind-footer-column h3::after {
    content: "";
    width: 100%;
    height: 0.5px;
    background: #000;
    display: block;
    margin-top: 6px;
  }

  .mind-footer-column ul {
    list-style: none;
    padding: 0;
  }

  .mind-footer-column li {
    margin-bottom: 10px;
  }

  .mind-footer-column a {
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    color: var(--dark);
    font-family: var(--font-secondary);
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 160%;
  }

  .mind-footer-column a:hover {
    color: #f7c605;
  }

  /* ===== BOTTOM ===== */
  .mind-footer-bottom {
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid #ddd;
  }

  .mind-footer-bottom ul {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
  }

  .mind-footer-bottom a {
    text-decoration: none;
    color: var(--dark);
    font-size: 14px;
  }

  /* ===== COPYRIGHT ===== */
  .mind-footer-copyright p {
    color: #494F5A;
    text-shadow: 0 4px 6px rgba(0, 0, 0, 0.10), 0 2px 4px rgba(0, 0, 0, 0.06);
    text-align: right;
    font-size: 18px;
    font-style: normal;
    font-weight: 500;
    line-height: 160%;
    font-family: var(--font-secondary);
    padding: 10px 0px;
  }

  /* ===== RESPONSIVE ===== */

  /* ========================= */
  /* TABLET (≤ 1024px) */
  /* ========================= */
  @media (max-width: 1024px) {

    .mind-footer-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 30px;
    }

    .mind-footer {
      padding: 50px 30px;
    }

    .mind-footer-bg-text p {
      font-size: 64px;
      letter-spacing: 2px;
      white-space: normal;
      /* wrap allow */
    }

    .mind-footer-logo {
      grid-column: span 2;
      text-align: center;
    }

    .mind-footer-logo .logo-img {
      margin: 0 auto 20px;
    }

    .mind-footer-column h3 {
      font-size: 17px;
    }

    .mind-footer-column a {
      font-size: 15px;
    }

    .mind-footer-copyright p {
      text-align: center;
    }
  }


  /* ========================= */
  /* MOBILE (≤ 768px) */
  /* ========================= */
  @media (max-width: 768px) {

    .mind-footer-section {
      padding: 40px 16px 16px;
    }

    .mind-footer {
      padding: 35px 20px;
      border-radius: 12px;
    }

    .mind-footer-grid {
      grid-template-columns: 1fr;
      gap: 25px;
    }

    /* BIG TEXT FIX */
    .mind-footer-bg-text p {
      font-size: 34px;
      letter-spacing: 1px;
      white-space: normal;
      line-height: 1.2;
    }

    /* LOGO CENTER */
    .mind-footer-logo {
      text-align: center;
    }

    .mind-footer-logo .logo-img {
      width: 150px;
      margin-bottom: 15px;
    }

    /* BUTTON CENTER */
    .mind-footer-logo .btn-mind-primary {
      margin: 0 auto;
    }

    /* COLUMN */
    .mind-footer-column h3 {
      font-size: 16px;
    }

    .mind-footer-column a {
      font-size: 14px;
    }

    /* ICON SIZE FIX */
    .mind-footer-column img {
      width: 14px;
    }

    /* COPYRIGHT */
    .mind-footer-copyright p {
      text-align: center;
      font-size: 13px;
      padding: 8px 0;
    }

  }


  /* ========================= */
  /* SMALL MOBILE (≤ 480px) */
  /* ========================= */
  @media (max-width: 480px) {

    .mind-footer-bg-text p {
      font-size: 48px;
    }

    .mind-footer {
      padding: 24px 8px;
    }

  }
</style>