<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approach Cards Smooth Hover</title>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Raleway', sans-serif;
            background: #f3f3f3;
        }

        .container {
            width: 1200px;
            margin: auto;
            padding: 80px 0;
        }

        .cards {
            display: flex;
            gap: 30px;
        }

        /* CARD */

        .approach-card {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            width: 100%;
            cursor: pointer;
        }

        .approach-card .bg-image {
            width: 100%;
            height: 380px;
            object-fit: cover;
            display: block;
            transition: transform .6s ease;
        }

        /* YELLOW BOX */

        .card-overlay {

            position: absolute;
            bottom: 15px;
            left: 15px;
            right: 15px;

            background: #f6de6c;
            padding: 20px;
            border-radius: 10px;

            height: 80px;

            display: flex;
            align-items: center;

            transition: all .5s cubic-bezier(.4, 0, .2, 1);

        }

        /* ICON */

        .icon {
            width: 45px;
            height: 45px;
            background: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;

            transition: all .5s cubic-bezier(.4, 0, .2, 1);
        }

        .icon img {
            width: 22px;
        }

        /* HEADING */

        .card-overlay h3 {
            margin-left: 15px;
            font-size: 18px;
            transition: all .5s cubic-bezier(.4, 0, .2, 1);
        }

        /* TEXT */

        .card-overlay p {

            opacity: 0;
            transform: translateY(15px);
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
            line-height: 1.5;
            transition: all .5s cubic-bezier(.4, 0, .2, 1);

        }

        /* HOVER */

        .approach-card:hover .card-overlay {
            height: calc(100% - 20%);
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .approach-card:hover .icon {
            transform: translateY(-5px);
        }

        .approach-card:hover h3 {
            margin-left: 0;
            margin-top: 12px;
            text-align: center;

        }

        .approach-card:hover p {

            opacity: 1;
            transform: translateY(0);

        }

        /* IMAGE ZOOM */

        .approach-card:hover img {

            transform: scale(1.05);

        }
    </style>
</head>

<body>

    <div class="container">

        <div class="cards">

            <!-- CARD 1 -->

            <div class="approach-card">

                <img class="bg-image" src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac">

                <div class="card-overlay">

                    <div class="icon">
                        <img src="https://www.svgrepo.com/show/533817/note.svg">
                    </div>

                    <h3>Narrative Practice</h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Sed do eiusmod tempor incididunt.
                    </p>

                </div>
            </div>


            <!-- CARD 2 -->

            <div class="approach-card">

                <img class="bg-image" src="https://images.unsplash.com/photo-1551836022-d5d88e9218df">

                <div class="card-overlay">

                    <div class="icon">
                        <img src="https://www.svgrepo.com/show/533817/note.svg">
                    </div>

                    <h3>Mindfulness & Inner Work</h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Sed do eiusmod tempor incididunt.
                    </p>

                </div>
            </div>


            <!-- CARD 3 -->

            <div class="approach-card">

                <img class="bg-image" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f">

                <div class="card-overlay">

                    <div class="icon">
                        <img src="https://www.svgrepo.com/show/533817/note.svg">
                    </div>

                    <h3>Inclusion & Equity</h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Sed do eiusmod tempor incididunt.
                    </p>

                </div>
            </div>

        </div>

    </div>

</body>

</html>












