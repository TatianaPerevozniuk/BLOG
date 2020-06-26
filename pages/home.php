<html lang="eu">
<head>
    <title>article.php</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
</head>
<body>
<h2>My Blog</h2>
<form method="post" action="">
    <?php
    if (isset($error)) {
        echo '<p>' . $error . '</p>';
    }
    ?>
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