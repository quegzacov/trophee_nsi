<?php

$bdd = new SQLite3($_SERVER["DOCUMENT_ROOT"].'/trophee_nsi/database/posts.db', SQLITE3_OPEN_READWRITE);

if ($_FILES['image']['error'] == 0){
    $append = $bdd->prepare("INSERT INTO posts(title, user, content, image, type, size, date) VALUES(:title, :user, :content, :image, :type, :size, :date)");
    $append->bindValue(':image', file_get_contents($_FILES['image']['tmp_name']));
    $append->bindValue(':size', $_FILES['image']['size']);
    $append->bindValue(':type', $_FILES['image']['type']);
}
else {
    $append = $bdd->prepare("INSERT INTO posts(title, user, content, date) VALUES(:title, :user, :content, :date)");

}
$append->bindValue(':title', $_POST['title']);
$append->bindValue(':user', $_POST['user']);

$append->bindValue(':content', $_POST['content']);

$append->bindValue(':date', $_POST['date']);
$append->execute();

header('location: /trophee_nsi/page/index/index.php')
?>
