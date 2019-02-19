<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>PHP sample</title>
</head>
<body>
  <h1>日付</h1>
  <?php
    $date = date("Y/m/d H:i:s\n");
    print($date);
  ?>
  <h1>条件分岐</h1>
  <?php
    $a = 5;
    if ($a == 3) {
      print("$a is 3\n");
    } else {
      print("$a is not 3\n");
    }
  ?>
  <h1>繰返処理</h1>
  <?php
    for ($i = 0; $i < 10; $i++){
      print("$i ");
    }
    print("\n");
  ?>
  <h1>関数</h1>
  <?php
    function double_print($text){
      print($text . $text);
    }
    double_print("a");
    double_print("bc");
    print("\n");
  ?>
  <h1>配列</h1>
  <?php
    $a1 = array("one", "two", "three");
    $a1[] = "four";
    $a1[0] = "one?";
    print_r($a1);
    print("\n");
  ?>
  <h1>連想配列</h1>
  <?php
    $hash = array("one" => "いち", "two" => "に", "three" => "さん");
    $hash["four"] = "し";
    $hash[] = "ご";
    $hash["ろく"] = "six";
    print_r($hash);
    foreach ($hash as $key => $val) {
      print("$key is $val.");
      echo nl2br("\n");
    }
  ?>
  <h1>正規表現</h1>
  <?php
    if (preg_match('/(-?)[0-9]+(\.[0-9]+)?/', 'q-0.1p', $m)) {
      print("match: $m[0] ");
      if ($m[1] == "-") {
        print("minus! ");
      }
      if (isset($m[2])) {
        print("decimal!");
      }
    } else {
      print("not match");
    }
  ?>
</body>
</html>
