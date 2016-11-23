<?php

$link = mysqli_connect("mysql", "root", "my-secret-pw", "db") or die("Impossible de se connecter : " . mysql_error());
echo 'Connexion réussie';
$res = mysqli_query($link,"SELECT * FROM user");
if ($res) {
  while ($row = mysqli_fetch_assoc($res)) {
      echo $row['id'];
      echo $row['name'];
  }
}
mysqli_close($link);
