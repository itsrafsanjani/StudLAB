<?php

include 'upload.php';

session_start();

$message = '';

if ($_SESSION['id'] == NULL) {
    header('location:signin.php');
} else {
    if (isset($_GET['logoutbtn'])) {
        session_destroy();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('location:signin.php');
    }
}

?>


<!-- HTML Starts From Here -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - StudLAB</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>

    /* a {
        margin-top: 20px;
        font-size: 20px;
        float: right;
        text-decoration: none;
        background-color: #66bb6a;
        color: white;
        border-bottom: none;
        width: 80px;
        padding: 15px 30px;
        border-radius: 5px;
        text-align: center;
    } */

    .form-submit-1{
        background-color: #ED5E68;
        float: right;
        text-align: center;
        font-size: 17px;
    }

    .form-submit-1:hover {
        background-color: #EC4133;
        float: right;
        text-align: center;
    }

    .gallery {
        width: 100%;
        margin: 5px;
        border: 1px solid #ccc;
        display: flex;
        flex-wrap: wrap;
    }

    .gallery img {
        width: 25%;
        height: auto;
    }

    .gallery img:hover {
        transition: 3s;
        transform: scale(1.2);
        height: auto;
    }

    .desc {
        font-size: 20px;
        background-color: #66bb6a;
        color: white;
        padding: 12px;
        text-align: center;
        border-radius: 5px;
    }

    input {
        background-color: #66bb6a;
        font-size: 20px;
        width: 400px;
        border: none;
        padding: 6px 30px;
        font-family: Poppins;
        box-sizing: border-box;
        border-radius: 5px;
        margin-top: 10px;
        padding: 15px 10px;
    }
</style>
</head>

<body>
    <h2>Welcome  <?php echo $_SESSION['name']; ?> </h2>

    <a href="?logoutbtn=true" class="form-submit-1">Logout</a>


    <!-- Upload Files Form -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select Image File to Upload:
        <input type="file" name="file">
        <input type="submit" name="submit" class="form-submit-2" value="Upload">
    </form>
    <!-- Upload Files Form End -->



    <!-- View Images -->
    <div class="desc">List of images in database..</div>
    <div class="gallery">
        <?php
        // Include the database configuration file
        include 'dbConfig.php';

        // Get images from the database
        $query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $imageURL = 'uploads/' . $row["file_name"];
        ?>
                <img src="<?php echo $imageURL; ?>" alt="" />
            <?php }
        } else { ?>
            <p>No image(s) found...</p>
        <?php } ?>
    </div>
</body>

</html>