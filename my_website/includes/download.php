<?php
if(isset($_GET['link'])) {
        $var_1 = $_GET['link']; // "ggg.jpg.png";
    //    $file = "../output/ggg.jpg.png";

    $dir = "../output/"; // trailing slash is important
    $file = $dir . $var_1;
    echo ($_GET['link']);
    // echo ($file);

    // if (file_exists($file)) {
    //     header('Content-Description: File Transfer');
    //     header('Content-Type: application/octet-stream');
    //     header('Content-Disposition: attachment; filename='.basename($file));
    //     header('Expires: 0');
    //     header('Cache-Control: must-revalidate');
    //     header('Pragma: public');
    //     header('Content-Length: ' . filesize($file));
    //     ob_clean();
    //     flush();
    //     readfile($file);
    //     exit;
    //     }
}
?>