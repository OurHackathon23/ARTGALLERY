<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <style>
        .header_Services {
            color: #fff;
            text-align: center;
            margin-top: 0vw;
        }

        .header_Services h1 {
            margin: 0;
        }

        .services-section {
            padding: 2em 0;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 1em;
            border-radius: 5px;
        }

        .service {
            margin: 2em 0;
            padding: 1em;
            border-left: 4px solid #6f6af8;
            border-radius: 5px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .service h2 {
            color: #5858c8;
            margin-bottom: 0.5em;
        }


        @media (max-width: 768px) {
            .header_Services {
                margin-top: 3.8em;
            }

            .service {
                margin: 1em 0;
            }

            .container {
                padding: 0 0.5em;
            }
        }

        @media (max-width: 480px) {
            .header_Services {
                margin-top: 2.5em;
            }

            .header_Services h1 {
                font-size: 1.5em;
            }

            .service h2 {
                font-size: 1.2em;
            }

            .service p {
                font-size: 0.9em;
            }
        }
    </style>
</head>

<body>
    <?php
    include 'partials/header.php'
    ?>

    <section class="services-section">
        <div class="header_Services">
            <h1>Our Services</h1>
        </div>
        <div class="container">
            <div class="service">
                <h2>Content Creation</h2>
                <p>We provide high-quality content creation services tailored to your needs, including blog posts, articles, and more.</p>
            </div>
            <div class="service">
                <h2>SEO Optimization</h2>
                <p>Optimize your website for search engines with our expert SEO services to improve your visibility and ranking.</p>
            </div>
            <div class="service">
                <h2>Social Media Management</h2>
                <p>Our social media management services help you build a strong presence on platforms like Facebook, Twitter, and Instagram.</p>
            </div>
            <div class="service">
                <h2>Graphic Design</h2>
                <p>Enhance your brand with our professional graphic design services, including logos, banners, and promotional materials.</p>
            </div>
            <div class="service">
                <h2>Web Development</h2>
                <p>We offer web development services to create responsive, user-friendly websites that meet your business needs.</p>
            </div>
            <div class="service">
                <h2>Consulting</h2>
                <p>Our consulting services provide expert advice to help you grow your business and achieve your goals.</p>
            </div>
        </div>
    </section>


    <?php
    include './partials/footer.php';
    ?>

</body>

</html>