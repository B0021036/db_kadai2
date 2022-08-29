<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title></title>
</head>
<body>
<p>ようこそ <?php echo $user_name; ?> さん</p>
<?php
  foreach($result as $row) {
    echo '<p>';
    echo $row["name"];
    echo $row["price"];
    echo '</p>';
  }

?>

  <form action="login.php" method="get">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
    <input type="hidden" name="start" value ="<?php echo $start; ?>">
    <input type="hidden" name="size" value ="<?php echo $size; ?>">
    <input type="submit" name="submitBtn" value = "変更">
  </form>

  <form action = "select.php" method="get">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
    <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
    <input type ="hidden" name="start" value="

<?php
  $next = $start -5;
  if ($next < 0) {
    $next = 0;
  }
  echo $next;
?>
    ">

    <input type="hidden" name="size" value="<?php echo $size; ?>">
    <input type="submit" name="submitBtn" value="前へ">
  </form>

  <form action="select.php" method="get">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
    <input type="hidden" name="start" value="<?php echo $start + 5; ?>">
    <input type="hidden" name="size" value="<?php echo $size; ?>">
    <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
    <input type="submit" name="submitBtn" value="次へ">
  </form>

</body>
</html>
