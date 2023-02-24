<?php
$connection=mysqli_connect("localhost","root","","tours_travels");
$query = 'SELECT username,email,phone
  FROM user_tbl
  ORDER BY username';
$result = mysqli_query($connection, $query);
while ($record = mysqli_fetch_assoc($result))
{

  echo '<hr>';
  echo '<h2>' . $record['username'] . '</h2>';
  echo '<p>' . $record['email'] . '</p>';

  echo '<pre>';
  print_r($record);
  echo '</pre>';

}

?>