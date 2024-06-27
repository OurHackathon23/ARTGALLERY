<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <link rel="stylesheet" href="../blog/css/style.css">
    <style>
        .header_about {
            color: #fff;
            padding: 0.4em 0 0 0;
            text-align: center;
            margin-top: 8vw;
        }

        .header_about h1 {
            margin: 0;
        }

        .container {
            margin: 0 auto;
            padding: 0 1em;
            border-radius: 5px;
        }

        .container h2 {
            color: #5858c8;
            margin-top: 0.7em;
        }
        .container p{
            margin-left: 1.5em;
        }

        ul {
            list-style-type: disc;
            margin: 1em 0;
            padding-left: 1.5em;
        }

        li {
            margin-top: 0.2vh;
        }

        .team-member {
            margin-top: 2em;
            display: flex;
            align-items: center;
            column-gap: 1.5vw;
        }

        .team-member img {
            width: 30vw;
            height: 25vh;
            border-radius: 50%;
            object-fit: cover;
            object-position: top;
        }

        .team-member h3 {
            width: 18vw;
            color: rgba(242, 242, 254, 0.7);
            font-weight: 500;
        }

        .team-member span {
            width: 20vh;
        }

        .team-member p {
            width: auto;
            color: rgba(242, 242, 254, 0.7);
        }

        .mail_link:hover {
            text-decoration: underline;
            color: orangered;
        }

        @media (max-width: 768px) {
            .header_about {
                margin-top: 5.5em;
            }

            .team-member {
                flex-direction: column;
            }

            .team-member img {
                width: 17vw;
                height: 13vh;
            }

            .team-member h3 {
                width: auto;
                font-size: 5vw;
            }

            .team-member span {
                width: auto;
                font-size: 3vw;
            }



        }

        @media (max-width: 480px) {
            .header_about {
                margin-top: 5em;
            }

            .team-member img {
                width: 12vw;
                height: 6.5vh;
            }

            .team-member h3 {
                width: auto;
                font-size: 5.3vw;
            }

            .team-member span {
                width: auto;
                font-size: 3.2vw;
            }


        }
    </style>
</head>

<body>
    <?php
    include 'partials/header.php'
    ?>


    <section class="about-section">
        <div class="header_about">
            <h1>About Us</h1>
        </div>
        <div class="container">
            <h2>Our Story</h2>
            <p>Welcome to Amazing Blog! We started this blog to share our Knowlage. Our mission is to provide valuable insights, tips, and resources to our readers.</p>

            <h2>Mission</h2>
            <p>Our mission is to inspire and educate our audience by providing high-quality content that is both informative and engaging.</p>

            <h2>Vision</h2>
            <p>Our vision is to become the go-to resource for anyone looking to improve their knowledge and skills.</p>

            <h2>Our Values</h2>
            <ul>
                <li><strong>Integrity:</strong> We uphold the highest standards of integrity in all of our actions.</li>
                <li><strong>Passion:</strong> We are passionate about our work and committed to excellence.</li>
                <li><strong>Community:</strong> We believe in the power of community and strive to build strong relationships with our readers.</li>
                <li><strong>Innovation:</strong> We embrace innovation and are constantly looking for new ways to provide value.</li>
            </ul>

            <h2>Meet the Team</h2>
            <div class="team-member">
                <img src="./images/photo-1480429370139-e0132c086e2a.jpeg" alt="John Doe">
                <h3>John Doe</h3>
                <span>Founder & Chief Editor</span>
                <p>John is an expert in Content Finder with over 20 years of experience. He loves sharing his knowledge with others through engaging and informative content.</p>
            </div>
            <div class="team-member">
                <img src="./images/photo-1610088441520-4352457e7095.jpeg" alt="Jane Smith">
                <h3>Jane Smith</h3>
                <span>Content Strategist</span>
                <p>Jane has a keen eye for detail and a passion for crafting compelling stories. She ensures that our content aligns with our mission and resonates with our audience.</p>
            </div>
            <div class="team-member">
                <img src="./images/photo-1582015752624-e8b1c75e3711.jpeg" alt="Mike Johnson">
                <h3>Mike Johnson</h3>
                <span>Community Manager</span>
                <p>Mike is dedicated to building a vibrant community of readers. He engages with our audience, gathers feedback, and fosters a positive environment.</p>
            </div>
            <!-- Add more team members as needed -->

            <h2>Contact Us</h2>
            <p>If you have any questions or suggestions, feel free to reach out to us at <a href="mailto:contact@yourblog.com" class="mail_link">contact@yourblog.com</a>.</p><br />
        </div>
    </section>

    <?php
    include './partials/footer.php';
    ?>
</body>

</html>