<section class="process-section">

    <div class="process-sticky">

        <div class="container">

            <!-- HEADING -->
            <div class="text-center mb-5">
                <span class="light-yellow-badge fs-16">Our Process</span>

                <p class="fs-40 fw-500 mb-2">
                    A rigorous, phased approach <span class="blue"> to lasting transformation. </span>
                </p>

                <p class="fs-18 w-60 grey-7e8695">
                    Organizational change is not an event. It is a sustained process...
                </p>
            </div>

            <!-- TIMELINE -->
            <div class="timeline">

                <!-- ITEM 1 -->
                <div class="timeline-item active">
                    <div class="timeline-left">
                        <div class="line"></div>
                        <div class="dot"></div>
                        <div class="phase">
                            <p class="fs-40 fw-600">01</p>
                            <span>Phase One</span>
                        </div>
                    </div>

                    <div class="timeline-card">
                        <h4>Organizational Diagnosis</h4>
                    </div>
                </div>

                <!-- ITEM 2 -->
                <div class="timeline-item">
                    <div class="timeline-left">
                        <div class="line"></div>
                        <div class="dot"></div>
                        <div class="phase">
                            <p class="fs-40 fw-600">02</p>
                            <span>Phase Two</span>
                        </div>
                    </div>

                    <div class="timeline-card">
                        <h4>Strategy Co-Design</h4>
                    </div>
                </div>

                <!-- ITEM 3 -->
                <div class="timeline-item">
                    <div class="timeline-left">
                        <div class="line"></div>
                        <div class="dot"></div>
                        <div class="phase">
                            <p class="fs-40 fw-600">03</p>
                            <span>Phase Three</span>
                        </div>
                    </div>

                    <div class="timeline-card">
                        <h4>Intervention Delivery</h4>
                    </div>
                </div>

                <!-- ITEM 4 -->
                <div class="timeline-item">
                    <div class="timeline-left">
                        <div class="line"></div>
                        <div class="dot"></div>
                        <div class="phase">
                            <p class="fs-40 fw-600">04</p>
                            <span>Phase Four</span>
                        </div>
                    </div>

                    <div class="timeline-card">
                        <h4>Embedding & Sustaining</h4>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>
<style>
    /* SECTION HEIGHT */
.process-section {
  position: relative;
  height: 400vh;
}

/* STICKY */
.process-sticky {
  position: sticky;
  top: 0;
  height: 100vh;
  overflow: hidden;
  background: #fff;
}

/* TIMELINE */
.timeline {
  position: relative;
  height: 100%;
}

/* ITEMS */
.timeline-item {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  gap: 40px;

  opacity: 0;
  visibility: hidden;
  pointer-events: none;
  transition: all 0.5s ease;
}

/* ACTIVE */
.timeline-item.active {
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
  z-index: 3;
}

/* NEXT (peek effect) */
.timeline-item.next {
  opacity: 0.4;
  visibility: visible;
  z-index: 2;
  transform: translateY(80px);
}

/* LEFT */
.timeline-left {
  width: 20%;
}

/* CARD */
.timeline-card {
  width: 80%;
  background: #fff;
  border-radius: 16px;
  padding: 40px;
  box-shadow: 0 10px 40px rgba(0,0,0,0.08);
}
</style>
<script>
const items = document.querySelectorAll(".timeline-item");

window.addEventListener("scroll", () => {

  const section = document.querySelector(".process-section");
  const rect = section.getBoundingClientRect();

  const scrollProgress = -rect.top / (section.offsetHeight - window.innerHeight);

  const total = items.length;

  const activeIndex = Math.min(
    total - 1,
    Math.max(0, Math.floor(scrollProgress * total))
  );

  items.forEach((item, index) => {

    item.classList.remove("active", "next");

    if (index === activeIndex) {
      item.classList.add("active");
    } 
    else if (index === activeIndex + 1) {
      item.classList.add("next");
    }

  });

});
</script>