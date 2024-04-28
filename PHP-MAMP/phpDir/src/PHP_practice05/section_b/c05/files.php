<?php
$path = 'img/logo.png';
?>
<?php include 'includes/header.php'; ?>

<!-- // Write you PHP code here -->
<?php
if (file_exists($path)) {
    $fileInfo = pathinfo($path);
    $fileSize = filesize($path);
    $mimeType = mime_content_type($path);
    $folder = dirname($path);
    echo "File Name: {$fileInfo['basename']} <br>";
    echo "File Size: $fileSize bytes <br>";
    echo "MIME Type: $mimeType <br>";
    echo "Folder: $folder <br>";
}else{
    echo "There is no such file.";
}

?>

<?php include 'includes/footer.php'; ?>