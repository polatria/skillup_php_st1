<?php
  $dsn = 'pgsql:dbname=TEST;host=pgsql;port=5432';
  $user = 'postgres';
  $pass = 'example';

  try {
    // connect to DB
    $dbh = new PDO($dsn, $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // process query
    // queryメソッド(SELECT)
    $query_result = $dbh->query('SELECT * FROM test_comments');

    // prepareメソッド(INSERT)
    $sth = $dbh->prepare('INSERT INTO test_comments (name, comment, color) VALUES (?, ?, ?)');

    // prepareメソッド(SELECT)
    $sth_select = $dbh->prepare('SELECT * FROM test_comments WHERE name = ?');

    // disconnect to DB
    $dbh = null;
  } catch (PDOException $e) {
    // when error occurred during connecting network
    print "DB ERROR: ".$e->getMessage()."<br/>";
    die();
  }
?>
<?php
  // foreach ($query_result as $row) {
  //   print $row["name"].": ".$row["comment"]."</br>";
  // }
  $name = 'John';
  $text = 'Power to the People';
  $color = 0;
  // try {
  //   $sth->execute(array($name, $text, $color));
  // } catch (PDOException $e) {
  //   print "DB ERROR: ".$e->getMessage()."<br/>";
  //   die();
  // }
  $sth_select->execute(array($name));
  $prepare_result = $sth_select->fetchAll();
  foreach ($prepare_result as $row) {
    print $row["name"].": ".$row["comment"]."<br/>";
  }
?>
