<?php
  $conn = mysqli_connect("localhost", "root", "", "wedkarstwo");
  $query = "INSERT INTO zawody_wedkarskie (Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES (0, '{$_POST['lowisko']}', '{$_POST['year']}', '{$_POST['sedzia']}')";
  $result = mysqli_query($conn,$query);
  mysqli_close($conn);
  echo "Thanks for the application!!!"
?>