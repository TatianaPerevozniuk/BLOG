<?php

require 'DbConnector.php';

$sql = "DROP TABLE articles";
$result = $pdo->query($sql);
if ($result) {
    echo "Таблица удалена";
}
