<section style="height: 40vh;background-color:#fff"></section>

<section class="feature-hero">

    <!-- FIXED BACKGROUND -->
    <div class="feature-bg"></div>

    <!-- FIXED CENTER TEXT -->
    <div class="feature-center">
        <h1>Recognition and Rewards</h1>
    </div>

    <!-- SCROLLING CARDS -->
    <div class="feature-cards">
        <div class="feature-card left blue">A Leader in Reinvention</div>
        <div class="feature-card right red">Driving Innovation Forward</div>
        <div class="feature-card left blue">Future Ready Workforce</div>
        <div class="feature-card right red">Performance that Matters</div>
    </div>

</section>

<section style="height: 40vh;background-color:#fff"></section>



<style>
    /* MAIN SECTION */
    .feature-hero {
        position: relative;
        height: 100vh;
        padding: 100px 0px;
    }

    /* FIXED BACKGROUND IMAGE */
    .feature-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: url("../assets/images/mind/hero-bg.jpg") center/cover no-repeat;
        z-index: -1;
    }

    /* FIXED CENTER TEXT */
    /* FIXED CENTER TEXT */
    .feature-center {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* center exactly */
        display: flex;
        align-items: center;
        justify-content: center;
        /* z-index: 10; */
        width: 100%;
        /* } */
    }

    .feature-center h1 {
        font-size: 80px;
        color: #fff;
        text-align: center;
    }

    /* CARDS CONTAINER */
    .feature-cards {
        position: relative;
        z-index: 2;
        /* 👈 text se niche */
    }


    /* CARD STYLE */
    .feature-card {
        position: absolute;
        width: 50%;
        height: 260px;
        padding: 30px;
        display: flex;
        align-items: flex-end;
        z-index: 2;
        font-size: 22px;
        color: #fff;

        /* Remove animation properties */
        opacity: 1;
        transform: translateY(0);
        transition: none;
    }

    /* COLORS */
    .blue {
        background: #1747e5;
    }

    .red {
        background: #e5092f;
    }

    /* LEFT RIGHT */
    .left {
        left: 5%;
    }

    .right {
        right: 5%;
    }

    /* VERTICAL POSITIONS */
    .feature-card:nth-child(1) {
        top: 70vh;
    }

    .feature-card:nth-child(2) {
        top: 130vh;
    }

    .feature-card:nth-child(3) {
        top: 190vh;
    }

    .feature-card:nth-child(4) {
        top: 250vh;
    }

    /* ANIMATION */
    .feature-card.show {
        opacity: 1;
        transform: translateY(0);
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .feature-card {
            width: 90%;
            left: 5% !important;
            right: auto !important;
        }

        .feature-center h1 {
            font-size: 40px;
        }
    }
</style>

<script>
    const cards = document.querySelectorAll('.card');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, {
        threshold: 0.3
    });

    cards.forEach(card => observer.observe(card));
</script>