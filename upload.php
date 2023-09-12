<?php        
    $uploaddir = '/var/www/html/uploads/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    $fname = basename( $_FILES['userfile']['name']);

    echo "<p>";
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "Upload successful\n";
        echo "<br><br>";
        echo "filename: " . $fname . "<br><br>";
        echo "md5: ";
        echo hash_file('md5', $uploadfile) . "</br>";
        echo "sha256 :";
        echo hash_file('sha256', $uploadfile) . "</br><br>";

        echo '<a href="http://example.com/uploads/' . $fname . '">' . 'https://example.com/uploads/' . $fname . '</a><br><br>';
        echo '<a href="uploads/">uploads/</a><br><br>';
    } else {
        echo "Upload failed\n";
    }
    
    echo "</p>";
    echo '<pre>';
    echo 'Debuginfo:';
    print_r($_FILES);
    print "</pre>";

?>

