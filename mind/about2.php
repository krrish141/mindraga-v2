<style>
    .approach-card {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
    }

    .bg-image {
        width: 100%;
        height: 420px;
        object-fit: cover;
        border-radius: 10px;
    }

    /* label */

    .card-label {
        position: absolute;
        bottom: 15px;
        left: 15px;
        right: 15px;

        background: linear-gradient(180deg, #f5e27d, #f0c94b);
        padding: 18px;
        border-radius: 10px;

        height: 70px;
        transition: all .45s ease;
        overflow: hidden;
    }

    /* header (icon + title) */

    .card-header {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    /* icon */

    .card-icon {
        width: 40px;
        height: 40px;
        min-width: 40px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-icon img {
        width: 22px;
    }

    /* title */

    .card-header h5 {
        margin: 0;
        font-size: 18px;
    }

    /* description */

    .card-text {
        opacity: 0;
        margin-top: 12px;
        font-size: 14px;
        line-height: 1.6;
        transition: opacity .3s ease;
    }

    /* hover */

    .approach-card:hover .card-label {
        height: 75%;
    }

    .approach-card:hover .card-text {
        opacity: 1;
    }
</style>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


<section class="section approach-section">
    <div class="row">

        <!-- CARD 1 -->

        <div class="col-lg-4 col-md-6 mb-4">

            <div class="approach-card">

                <img class="bg-image" src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac">

                <div class="card-label">

                    <div class="card-header">
                        <div class="card-icon">
                            <img src="https://www.svgrepo.com/show/533817/note.svg">
                        </div>
                        <h5>Narrative Practice</h5>
                    </div>

                    <p class="card-text">
                        Practical, secular mindfulness tools drawn from neuroscience and REBT,
                        designed to reduce reactive decision-making and increase self-regulation
                        under pressure.
                    </p>

                </div>
            </div>
        </div>


        <!-- CARD 2 -->

        <div class="col-lg-4 col-md-6 mb-4">

            <div class="approach-card">

                <img class="bg-image" src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac">

                <div class="card-label">

                    <div class="card-header">
                        <div class="card-icon">
                            <img src="https://www.svgrepo.com/show/533817/note.svg">
                        </div>
                        <h5>Narrative Practice</h5>
                    </div>

                    <p class="card-text">
                        Practical, secular mindfulness tools drawn from neuroscience and REBT,
                        designed to reduce reactive decision-making and increase self-regulation
                        under pressure.
                    </p>

                </div>
            </div>
        </div>


        <!-- CARD 3 -->

        <div class="col-lg-4 col-md-6 mb-4">

            <div class="approach-card">

                <img class="bg-image" src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac">

                <div class="card-label">

                    <div class="card-header">
                        <div class="card-icon">
                            <img src="https://www.svgrepo.com/show/533817/note.svg">
                        </div>
                        <h5>Narrative Practice</h5>
                    </div>

                    <p class="card-text">
                        Practical, secular mindfulness tools drawn from neuroscience and REBT,
                        designed to reduce reactive decision-making and increase self-regulation
                        under pressure.
                    </p>

                </div>
            </div>
        </div>


    </div>
</section>