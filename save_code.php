<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filename = $_POST['filename'];
    $code = $_POST['code'];

    // Save the code to the specified file
    if ($filename && $code) {
        file_put_contents($filename, $code);
        echo 'Code saved successfully';
    } else {
        echo 'Filename or code is missing!';
    }
}
?>
