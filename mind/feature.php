<section style="height: 40vh;background:#fff;"></section>

<section class="feature-hero">

    <!-- STICKY CENTER TEXT -->
    <div class="feature-center">
        <h1>Recognition and Rewards</h1>
    </div>

    <!-- SCROLL AREA -->
    <div class="feature-scroll">
        <div class="feature-cards">
            <div class="feature-card blue">A Leader in Reinvention</div>
            <div class="feature-card red">Driving Innovation Forward</div>
            <div class="feature-card blue">Future Ready Workforce</div>
            <div class="feature-card red">Performance that Matters</div>
        </div>
    </div>

</section>

<section style="height: 40vh;background:#fff;"></section>

<style>
/* MAIN SECTION */
.feature-hero {
    position: relative;
    height: 300vh; /* 👈 scroll space */
    background: #000;
}

/* STICKY CENTER TEXT */
.feature-center {
    position: sticky;
    top: 0;
    height: 100vh;

    display: flex;
    align-items: center;
    justify-content: center;

    z-index: 2;
}

.feature-center h1 {
    font-size: 60px;
    color: #fff;
    text-align: center;
    z-index: 1;
}

/* SCROLL WRAPPER */
.feature-scroll {
    position: relative;
    margin-top: -100vh; /* overlap start */
}

/* CARDS */
.feature-cards {
    display: flex;
    flex-direction: column;
    gap: 80px;
    padding-top: 100vh; /* start after first screen */
    padding-bottom: 100vh;
}

/* CARD */
.feature-card {
    width: 60%;
    height: 200px;
    padding: 30px;
    display: flex;
    align-items: flex-end;
    font-size: 22px;
    color: #fff;
    border-radius: 12px;
    z-index: 2;
}

/* LEFT RIGHT */
.feature-card:nth-child(odd) {
    align-self: flex-start;
}

.feature-card:nth-child(even) {
    align-self: flex-end;
}

/* COLORS */
.blue {
    background: #1747e5;
}

.red {
    background: #e5092f;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .feature-center h1 {
        font-size: 36px;
    }

    .feature-card {
        width: 90%;
        align-self: center !important;
    }
}
</style>