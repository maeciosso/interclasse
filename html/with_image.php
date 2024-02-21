<?php

// Set the directory where the images are located
$directory = './interclasse/imagens/';

// Open the directory
if ($handle = opendir($directory)) {

    // Loop through the directory
    while (($file = readdir($handle)) !== false) {

        // Check if the file is an image
        if (preg_match('/\.(jpg|jpeg|png|gif)$/', $file)) {

            // Display the image
            // Display the delete button
            echo '<form method="post" action="">';
            echo '<img src="' . $directory . '/' . $file . '" id="img" alt="Image">';
            echo '<input type="hidden" name="image" value="' . $file . '">';
            echo '<input type="submit" value="Delete" name="delete">';
            echo '</form>';
        }
    }

    // Close the directory
    closedir($handle);
}

// If the delete button was clicked
if (isset($_POST['delete'])) {

    // Get the image filename
    $image = $_POST['image'];

    // Delete the image from the directory
    unlink($directory . '/' . $image);

    header('location: imagens.php');
}

?>