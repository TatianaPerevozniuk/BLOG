<?php

require 'DbConnector.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $articleTitle = trim($_POST['title']);
    $articleText = $_POST['text'];
    $createdAt = date('Y-m-d H:i:s');

    $result = DbConnector::getConnection()->query("INSERT INTO articles (title, text, createdAt) VALUES ('$articleTitle','$articleText','$createdAt')");
    if (!$result) {
        echo 'Information not entered into the database';
    }
}

$sql = "SELECT * FROM articles ORDER BY createdAt DESC";
$setArticles = DbConnector::getConnection()->query($sql);

?>
<html lang="eu">
<head>
    <title>article.php</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>My Blog</h2>
<form method="post" action="">
    <label for="title">Input title article</label>
    <input id="title" type="text" name="title"/>
    <br><br>
    <label for="text">Input text article:</label>
    <textarea id="text" name="text"></textarea>
    <br>
    <br>
    <input type="submit" value="Submit article"/>
</form>
<?php foreach ($setArticles as $row): ?>
    <h3><?= $row['title'] ?></h3>
    <p><?= $row['text'] ?></p>
    <p><em><?= $row['createdAt'] ?></em></p>
<?php endforeach; ?>
</body>
</html>
