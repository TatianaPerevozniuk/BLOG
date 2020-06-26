<?php

require 'DbConnector.php';

$sql = "DROP TABLE articles";
$result = DbConnector::getConnection()->query($sql);
if ($result) {
    echo "Таблица удалена";
}
