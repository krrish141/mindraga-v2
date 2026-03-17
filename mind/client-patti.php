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
  background: #fffbd123;
  padding:100px 0;
  text-align:center;
}


.partner-tag{
  background:#FFFBD1;
  color:#4a74ff;
  padding:8px 16px;
  border-radius:20px;
  font-size:16px;
  font-family: var(--font-secondary);
  display:inline-block;
}

.partner-subtitle{
  margin-top:15px;
  font-size: 16px;
  color:#000;
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
  border: 1px solid  #FCE94D;
  background: #FFF;
  box-shadow: 0 2.938px 5.875px 0 rgba(236, 225, 255, 0.25), 0 0 17.625px 5.875px rgba(111, 64, 202, 0.04);
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
.partner-card{
  width:148px;
  height:80px;
}
}
</style>