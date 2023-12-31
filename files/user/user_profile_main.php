
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
        }

        div.user-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        div.user-details strong {
            width: 150px;
            display: inline-block;
            font-weight: bold;
        }

        hr {
            margin: 30px 0;
            border: none;
            border-top: 1px solid #ddd;
        }

        h3 {
            color: #555;
            margin-top: 40px;
        }

        a {
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 10px;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h2>User Profile</h2>

<!-- Display User Details -->
<div class="user-details">
    <strong>Name:</strong> <?php echo $user['username']; ?><br>
    <strong>Mobile No:</strong> <?php echo $user['mobile']; ?><br>
    <strong>Email:</strong> <?php echo $user['email']; ?><br>
    <a href="../login/logout.php" style="margin-left: 20px; margin-top:15px;background-color:  #d9534f;">Logout</a>
</div>



<hr>

<!-- Manage Blogs -->
<h3>Manage Blogs</h3>
<a href="create_blog.php">Create New Blog</a>
<a href="edit_blogs.php">Edit My Blogs</a>
<a href="delete_blogs.php">Delete My Blogs</a>

<hr>

<!-- Manage Favorite Wallpapers -->
<h3>Manage Favorite Wallpapers</h3>
<a href="add_favorite_wallpaper.php">Add Favorite Wallpaper</a>
<a href="remove_favorite_wallpaper.php">Remove Favorite Wallpaper</a>

<hr>

<!-- Manage Favorite Memes -->
<h3>Manage Favorite Memes</h3>
<a href="add_favorite_meme.php">Add Favorite Meme</a>
<a href="remove_favorite_meme.php">Remove Favorite Meme</a>

</body>
</html>
