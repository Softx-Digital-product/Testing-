<?php
if (isset($_GET['filename'])) {
    $filename = $_GET['filename'];

    // Check if the file exists
    if (file_exists($filename)) {
        echo file_get_contents($filename);
    } else {
        http_response_code(404);
        echo 'File not found!';
    }
}
?>
