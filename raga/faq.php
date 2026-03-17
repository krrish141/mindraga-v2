<section class="faq-section section">
  <div class="container faq-flex">

    <!-- LEFT -->
    <div class="faq-left">
      <div class="faq-card">
        <h6>Frequently<br>Asked Questions</h6>
        <p>Can't find the answer you're looking for?<br>
        Reach out to our team.</p>
      </div>
    </div>

    <!-- RIGHT -->
    <div class="faq-right">

      <div class="faq-item active">
        <div class="faq-question">
          What age groups do you work with?
          <span class="icon">−</span>
        </div>
        <div class="faq-answer">
          We work with children, youth, and adults. Our school programs are tailored for K-12 students, while our corporate and community workshops are designed for adults.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          Are the workshops available online?
          <span class="icon">+</span>
        </div>
        <div class="faq-answer">Yes, we offer both online and offline sessions.</div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          How can I partner with Mind for my school?
          <span class="icon">+</span>
        </div>
        <div class="faq-answer">You can contact us through our form.</div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          Do you offer individual counseling?
          <span class="icon">+</span>
        </div>
        <div class="faq-answer">Yes, we provide personalized counseling sessions.</div>
      </div>

    </div>

  </div>
</section>

<style>
    .faq-section {
  background: #1F1733;
}

/* FLEX */
.faq-flex {
  display: flex;
  gap: 48px;
}

/* LEFT */
.faq-left {
  width: 32%;
}

.faq-card {
  background: url('../assets/images/common/faq-img.png') center/cover no-repeat;
  border-radius: 16px;
  padding:24px 24px 240px;
  color: #fff;
}

.faq-card h6 {
  font-size: 40px;
  margin-bottom: 16px;
  font-family: var(--font-secondary);
  line-height: 120%;
}

.faq-card p {
  font-size: 18px;
  color: #1A46A7;
}

/* RIGHT */
.faq-right {
  width: 68%;
}

/* ITEM */
.faq-item {
  background: #fff;
  border-radius: 10px;
  margin-bottom: 16px;
  border: 1px solid #8C4BE8;
  overflow: hidden;
  font-family: var(--font-secondary);
  transition: box-shadow 0.3s ease;
}

.faq-item.active {
  box-shadow: 0 6px 16px rgba(0,0,0,0.08);
}

/* QUESTION */
.faq-question {
  padding: 16px 20px;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/* ICON */
.icon {
  width: 26px;
  height: 26px;
  background: #eee;
  color: #7E8695;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}

.faq-item.active .icon {
  background: #8C4BE8;
  color: #fff;
  transform: rotate(180deg);
}

/* ANSWER (SMOOTH 🔥) */
.faq-answer {
  max-height: 0;
  overflow: hidden;
  opacity: 0;
  transform: translateY(-5px);
  transition: 
    max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1),
    opacity 0.3s ease,
    transform 0.3s ease;
  padding: 0 20px;
}

.faq-item.active .faq-answer {
  opacity: 1;
  transform: translateY(0);
  padding: 10px 20px 16px;
}


/* =========================
   TABLET (<= 992px)
========================= */
@media (max-width: 992px) {
  .faq-flex {
    flex-direction: column;
    gap: 30px;
  }

  .faq-left,
  .faq-right {
    width: 100%;
  }

  .faq-card {
    padding: 20px 20px 180px;
  }

  .faq-card h6 {
    font-size: 32px;
  }
}

/* =========================
   MOBILE (<= 768px)
========================= */
@media (max-width: 768px) {
  .faq-section {
    padding: 40px 0;
  }

  .faq-card {
    padding: 20px;
    border-radius: 12px;
    background-position: top;
  }

  .faq-card h6 {
    font-size: 26px;
    line-height: 130%;
  }

  .faq-card p {
    font-size: 14px;
  }

  .faq-question {
    font-size: 14px;
    padding: 14px 16px;
  }

  .faq-answer {
    font-size: 13px;
  }

  .icon {
    width: 22px;
    height: 22px;
    font-size: 14px;
  }
}

/* =========================
   SMALL MOBILE (<= 480px)
========================= */
@media (max-width: 480px) {
  .faq-card h6 {
    font-size: 22px;
  }

  .faq-card {
    padding: 16px;
  }

  .faq-question {
    font-size: 13px;
  }

  .faq-answer {
    font-size: 12px;
  }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".faq-item");

  items.forEach(item => {
    const answer = item.querySelector(".faq-answer");

    // Default open
    if (item.classList.contains("active")) {
      answer.style.maxHeight = answer.scrollHeight + "px";
    }

    item.querySelector(".faq-question").addEventListener("click", () => {

      const isOpen = item.classList.contains("active");

      // Close all
      items.forEach(i => {
        i.classList.remove("active");
        i.querySelector(".icon").textContent = "+";
        i.querySelector(".faq-answer").style.maxHeight = null;
      });

      // Toggle current
      if (!isOpen) {
        item.classList.add("active");
        item.querySelector(".icon").textContent = "−";
        answer.style.maxHeight = answer.scrollHeight + "px";
      }

    });
  });
});
</script>