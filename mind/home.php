<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mind</title>

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Add Bootstrap 5 CSS in <head> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/mind.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">


</head>

<body>
    <?php include('header.php') ?>

    <!-- Hero Section Start -->
    <section class="hero ">
        <div class="container hero-content">

            <div class="hero-left">

                <div class="hero-glass">
                    <h1>
                        Mind builds the <span class="underline-dot">
                            emotional infrastructure
                        </span>that drives
                        performance.
                    </h1>

                    <p>
                        We partner with <span class="text-white"> organizations </span> and <span class="text-white"> schools</span> to develop emotionally intelligent, resilient, and high-performing people, through evidence-based, experientially delivered programs.
                    </p>
                </div>

                <!-- Buttons -->
                <div class="hero-buttons">
                    <a href="#" class="btn-mind-primary text-uppercase btn-md gap-10">
                        <span class="btn-text">Explore our Programs</span>
                        <span class="btn-icon">
                            <img src="../assets/images/common/arrow-down-tray.svg">
                        </span>
                    </a>

                    <a href="#" class="btn-mind-secondary text-uppercase btn-md">
                        <span class="btn-text">Partner with us</span>
                    </a>
                </div>

            </div>


            <div class="hero-quote">
                <p>
                    Consciously we teach what we know.<br>
                    Unconsciously, we teach who we are.
                </p>
            </div>

        </div>

    </section>
    <!--Hero Section End  -->

       <div class="section ">

        <div class="row ">

              <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">

                <div class="vision-image">

                    <img src="../assets/images/mind/hero-bg.jpg" alt="Vision">

                    <div class="vision-glass">

                        <p>
                            “When people feel safe, heard, and empowered,
                            they lead with courage, care, and creativity”
                        </p>

                    </div>

                </div>

            </div>

              <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">

                <div class="vision-content">

                    <span class="yellow-badge">The Vision</span>

                    <h2>
                        Thriving people. High-performing organizations.
                    </h2>

                    <p>
                        Mind transforms workplaces and schools by designing and delivering
                        Social & Emotional Learning (SEL) programs that build self-awareness,
                        resilience, and relational strength at every level.
                    </p>

                    <p>
                        Through experiential facilitation and inclusive learning design,
                        we cultivate inner leadership and collective wellbeing,
                        because culture is not a soft metric. It is your greatest
                        competitive advantage.
                    </p>

                </div>

            </div>

        </div>

    </div>

    <style>
        /* LEFT IMAGE */

        .vision-image {
            position: relative;
            width: 100%;
            height: 100%;
            border-radius: 12px;
            overflow: hidden;
        }

        .vision-image img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            top: 0;
            left: 0;
        }

        @media (max-width: 768px) {
  .vision-image img {
            position: relative; }
}

        /* GLASS TEXT */

        .vision-glass {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 75%;
            padding: 40px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            border-radius: 10px;
        }

        .vision-glass p {
            color: #fff;
            font-size: 28px;
            line-height: 1.4;
            margin: 0;
        }

        /* RIGHT CONTENT */

        .vision-content {
            padding: 10px;
        }

        .yellow-badge {
            background: #FCFA93;
            padding: 8px 16px;
            width: 154px;
            text-align: center;
            border-radius: 20px;
            font-size: 14px;
            display: inline-block;
            margin-bottom: 15px;
            color: #2563EB;
            font-weight: 700;
        }

        .vision-content h2 {
            font-size: 24px;
            margin-bottom: 16px;
        }

        .vision-content p {
            font-size: 16px;
            line-height: 1.7;
            color: #555;
            margin-bottom: 27px;
        }
    </style>

     <section class="reach-section section">

        <span class="white-badge">The Reach</span>

        <h2 class="reach-title">
            Growing People, Strengthening Workplaces.
        </h2>

        <div class="reach-grid">

            <div class="reach-card">
                <div class="reach-number">200+</div>
                <div class="reach-text">People Evolved</div>
            </div>

            <div class="reach-card">
                <div class="reach-number">50+</div>
                <div class="reach-text">Hours of Sessions</div>
            </div>

            <div class="reach-card">
                <div class="reach-number">4.9+</div>
                <div class="reach-text">Training Rating</div>
            </div>

            <div class="reach-card">
                <div class="reach-number">3+</div>
                <div class="reach-text">Organizations Impacted</div>
            </div>

            <div class="reach-card">
                <div class="reach-number">20+</div>
                <div class="reach-text">Programs Delivered</div>
            </div>

        </div>

    </section>

    <style>
        .reach-section {
            text-align: center;

            background:
                linear-gradient(rgba(255, 230, 80, 0.8), rgba(255, 230, 80, 0.8)),
                url("https://www.transparenttextures.com/patterns/brushed-alum.png");

            background-size: cover;
        }

        /* BADGE */

        .white-badge {
            display: inline-block;
            width: 154px;
            padding: 8px 18px;
            border-radius: 20px;
            background: #FFFEDE;
            color: #2563EB;
            font-size: 14px;
            margin-bottom: 20px;
        }

        /* HEADING */

        .reach-title {
            font-size: 24px;
            margin-bottom: 50px;
            color: #333;
        }

        /* GRID */

        .reach-grid {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        /* CARD */

        .reach-card {
            background: #fff;
            padding: 35px 30px;
            border-radius: 18px;
            width: 217px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .reach-number {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .reach-text {
            font-size: 14px;
            color: #666;
        }
    </style>


    <?php include("./client-patti.php") ?>


 
    <!-- CTA Section Start -->
    <section class="cta-section section">
        <div class="cta-container">
            <p class="cta-small-text fs-18">From inner balance to outer brilliance.</p>

            <h2 class="fs-24 fw-400 mb-5">
                If your organization is ready to invest in the human infrastructure that drives sustained performance,
                or if your school is ready to give students the emotional skills that last a lifetime.
                let's build it together.
            </h2>


            <div class="cta-buttons">
                <a href="#" class="btn-mind-primary text-uppercase btn-md gap-10">
                    <span class="btn-text">Start a conversation</span>
                    <span class="btn-icon">
                        <img src="../assets/images/common/arrow-down-tray.svg">
                    </span>
                </a>

                <a href="#" class="btn-mind-secondary text-uppercase btn-md">
                    <span class="btn-text">View All Programs</span>
                </a>
            </div>
        </div>
    </section>
    <!-- CTA Section End -->


    <?php include('footer.php') ?>
</body>

</html>