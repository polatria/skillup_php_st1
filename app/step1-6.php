<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Xch commentboard</title>
</head>
<body>
  <?php
    if (isset($_POST["name"])) {
      $name = htmlspecialchars($_POST["name"]);
      echo 'Name:<strong>'.$name.'</strong>';
      if ($_POST["mail"] != '') {
        $mail = htmlspecialchars($_POST["mail"]);
        echo '['.$mail.']';
      }
      echo ' '.date('Y/m/d H:i:s');
    }
    $com_colors = ["black", "red", "blue", "green"];
    if (isset($_POST["comment"])) {
      $comment = htmlspecialchars($_POST["comment"]);
      echo "<p style=\"color:".$com_colors[$_POST["color"]].";\">".nl2br($comment)."</p>";
    } else {
  ?>
      <h2>Comment here</h2>
      <form method="POST" action="index.php">
        <p>
        <input type="text" name="name" value="Nanashi">
        <input type="text" name="mail" placeholder="xxx@mail.com">
        </p>
        <textarea name="comment" rows="4" cols="60"></textarea>
        <p>
        Text color: <select name="color">
        <option value=0 style="color:black;">Black</option>
        <option value=1 style="color:red;">Red</option>
        <option value=2 style="color:blue;">Blue</option>
        <option value=3 style="color:green;">Green</option>
        </select>
        </p>
        <p>
        <input type="submit" value="Send">
        </p>
      </form>
  <?php
    }
  ?>
</body>
</html>
