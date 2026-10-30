<?php
declare(strict_types=1);
if ($_POST['file_name'] === '' || $_FILES['content']['error'] !== UPLOAD_ERR_OK) {
    header('Location: ./index.php');
    exit;
} else {
    $path = './upload/' . $_POST['file_name'];
    move_uploaded_file($_FILES['content']['tmp_name'], $path);
    echo 'Путь к файлу: ' . $path . '<br>' . 'Размер файла: ' . filesize($path) . ' байт';
}