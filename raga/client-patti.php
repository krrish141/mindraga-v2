<section class="partners-section section">
  <div class="container">

    <span class="partner-tag">Our Partners</span>
    <p class="partner-subtitle">
      We have been working with some Fortune 500+ clients
    </p>

    <div class="partners-grid">

      <div class="partner-card">
        <img src="../assets/images/common/logo-black.png" alt="partner">
      </div>

      <div class="partner-card">
        <img src="../assets/images/common/logo-black.png" alt="partner">
      </div>

      <div class="partner-card">
        <img src="../assets/images/common/logo-black.png" alt="partner">
      </div>

      <div class="partner-card">
        <img src="../assets/images/common/logo-black.png" alt="partner">
      </div>

      <div class="partner-card">
        <img src="../assets/images/common/logo-black.png" alt="partner">
      </div>

      <div class="partner-card">
        <img src="../assets/images/common/logo-black.png" alt="partner">
      </div>

    </div>
  </div>
</section>

<style>

.partners-section{
  position: relative;
  padding: 100px 0;
  text-align: center;
  background: radial-gradient(84.27% 84.27% at 50% 50%, #41226B 0%, #000 99.04%);
  overflow: hidden;
}

/* Background Image Layer */
.partners-section::before{
  content: "";
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%; /* image size */
  height: 100%;
  background: url("../assets/images/raga/our-client-bg.png") no-repeat center;
  background-size: contain;
  opacity: 0.8; /* light effect */
  z-index: 0;
}

/* Content above background */
.partners-grid,
.partner-tag,
.partner-subtitle{
  position: relative;
  z-index: 2;
}

.partner-tag{
  color:#F1F2F4;
  border-radius:20px;
  font-size:32px;
  font-family: var(--font-secondary);
  display:inline-block;
}

.partner-subtitle{
  margin-top:8px;
  font-size: 16px;
  color:#F1F2F4;
  font-family: var(--font-secondary);
}

.partners-grid{
  margin-top:24px;
  display:flex;
  justify-content:center;
  gap:25px;
  flex-wrap:wrap;
}

.partner-card{
  width: 183px;
  height: 88px;
  display:flex;
  align-items:center;
  justify-content:center;
  transition:0.3s;

  border-radius: 8px;
  border: 1px solid  #E0C9FF;
  background: #FFF;
  box-shadow:  0 2.938px 5.875px 0 rgba(236, 225, 255, 0.25), 0 0 17.625px 5.875px rgba(111, 64, 202, 0.04);

}

.partner-card img{
  max-width:80%;
  max-height:40px;
}

.partner-card:hover{
  transform:translateY(-5px);
  box-shadow:0 5px 10px rgba(0,0,0,0.1);
}

@media(max-width:768px){
.container{
  width:90%;
}

.partner-card{
  width:120px;
  height:60px;
}
}
</style>