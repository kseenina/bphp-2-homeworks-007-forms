<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML form</title>
</head>
<body>
    <form action="./upload.php" method="post" enctype="multipart/form-data">
        <label for="file_name">с каким именем сохранить файл на сервере</label>
        <input type="text" name="file_name" id="file_name"><br>
        <label for="content">выберите файл</label>
        <input type="file" name="content" id="content"><br>
        <button type="submit">отправить</button>
    </form>
</body>
</html>