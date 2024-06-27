<?php
include 'partials/header.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Contact Us</title> -->
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
        .header_contect {
            /* background: #333; */
            color: #fff;
            padding: 1em 0;
            text-align: center;
        }

        .header_contect h1 {
            margin: 0;
        }

        .contact-section {
            padding: 2em 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 1em;
            /* background: #fff; */
            border-radius: 5px;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        }

        .container h2 {
            color: #6f6af8;
            margin-bottom: 1em;
        }

        .container p {
            margin-bottom: 1.5em;
        }

        .form-group {
            margin-bottom: 1em;
        }

        label {
            display: block;
            margin-bottom: 0.5em;
            color: #ccc;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 0.5em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 0.5em 1.5em;
            border: none;
            border-radius: 4px;
            background-color: #6f6af8;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #6f6af8;
        }


        @media (max-width: 768px) {
            .container {
                padding: 0   0.5em;
            }
        }

        @media (max-width: 480px) {
            .header_contect h1 {
                font-size: 1.5em;
            }

            h2 {
                font-size: 1.2em;
            }

            label {
                font-size: 1em;
            }

            input[type="submit"] {
                width: 100%;
                padding: 0.5em;
            }
        }
    </style>
</head>

<body>
    <section class="contact-section">
        <div class="header_contect">
            <h1>Contact Us</h1>
        </div>
        <div class="container">
            <h2>Get in Touch</h2>
            <p>If you have any questions or suggestions, feel free to reach out to us using the form below.</p>
            <form action="contact.php" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="6" required></textarea>
                </div>
                <input type="submit" value="Send Message">
            </form>
        </div>
    </section>

    <?php
    include './partials/footer.php';
    ?>

</body>

</html>