<div class="mind-footer-section">

  <!-- Background Big Text -->
  <div class="mind-footer-bg-text">
    <p>Transforming The World</p>
  </div>

  <!-- Footer Card -->
  <footer class="mind-footer" role="contentinfo">
    <div class="mind-footer-container">

      <div class="mind-footer-grid">

        <!-- Logo + Button -->
        <div class="mind-footer-brand mind-footer-logo">
          <a href="/" aria-label="MindRaga Home">
            <img src="../assets/images/common/logo-black.png" class="logo-img" alt="MindRaga Logo">
          </a>

          <a href="#" class="btn-raga-primary btn-md">
            <span class="btn-text fs-16">DOWNLOAD</span>
            <span class="btn-icon">
              <img src="../assets/images/common/arrow-down-tray.svg">
            </span>
          </a>
        </div>

        <!-- Column 1 -->
        <div class="mind-footer-column">
          <h3>About Us</h3>
          <ul>
            <li><a href="#"><img src="../assets/images/common/vector.svg">Who We Are</a></li>
            <li><a href="#"><img src="../assets/images/common/vector.svg">What We Think</a></li>
            <li><a href="#"><img src="../assets/images/common/vector.svg">Inspiration</a></li>
          </ul>
        </div>

        <!-- Column 2 -->
        <div class="mind-footer-column">
          <h3>What We Do</h3>
          <ul>
            <li><a href="#"><img src="../assets/images/common/vector.svg">Technology AI</a></li>
            <li><a href="#"><img src="../assets/images/common/vector.svg">AI Programs</a></li>
            <li><a href="#"><img src="../assets/images/common/vector.svg">Talent Consulting</a></li>
            <li><a href="#"><img src="../assets/images/common/vector.svg">Talent Practice</a></li>
            <li><a href="#"><img src="../assets/images/common/vector.svg">Corporate Fresher</a></li>
          </ul>
        </div>

        <!-- Column 3 -->
        <div class="mind-footer-column">
          <h3>Masterclass</h3>
          <ul>
            <li><a href="#"><img src="../assets/images/common/vector.svg">Agentic AI Masterclass</a></li>
            <li><a href="#"><img src="../assets/images/common/vector.svg">AI For Business Leaders</a></li>
          </ul>
        </div>

        <!-- Column 4 -->
        <div class="mind-footer-column">
          <!-- <h3>About Us</h3> -->
          <ul>
            <li><a href="#"><img src="../assets/images/common/vector.svg">Mithril Login</a></li>
            <li><a href="#"><img src="../assets/images/common/vector.svg">Swabhav Techlabs</a></li>
            <li><a href="#"><img src="../assets/images/common/vector.svg">Swabhav VentureLabs</a></li>
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
  background: url("../assets/images/raga/raga-footer.png") no-repeat center center;
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
  font-size: 116px; /* 👈 key change */
  font-weight: 600;
  font-family: var(--font-primary);
  letter-spacing: 4px;
  margin: 0;
  white-space: nowrap; /* line break na ho */
}
/* ===== FOOTER CARD ===== */
.mind-footer {
  background: #fff;
  border-radius: 16px;
  padding: 80px 40px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.08);
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
  height: 1px;
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
  color:  #494F5A;
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

/* TABLET */
@media (max-width: 992px) {
  .mind-footer-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .mind-footer {
    padding: 40px 25px;
  }

  .mind-footer-bg-text p {
    font-size: 60px;
  }

  .mind-footer-copyright p {
    text-align: center;
  }
}

/* MOBILE */
@media (max-width: 576px) {
  .mind-footer-grid {
    grid-template-columns: 1fr;
    gap: 25px;
  }

  .mind-footer {
    padding: 30px 20px;
  }

  .mind-footer-logo {
    text-align: center;
  }

  .mind-footer-logo .logo-img {
    margin: 0 auto 15px;
  }

  .mind-footer-bg-text p {
    font-size: 36px;
  }

  .mind-footer-bottom ul {
    flex-direction: column;
    align-items: center;
  }

  .mind-footer-copyright p {
    text-align: center;
    font-size: 14px;
  }
}
</style>