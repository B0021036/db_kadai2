  <?php
  $user_id = $_GET["user_id"];
  $start = $_GET["start"];
  $size = $_GET["size"];
  $user_name = $_GET["user_name"];

  try {
    // データベースに接続
    $pdo = new PDO(
      // ホスト名、データベース名
      'mysql:host=localhost;dbname=order;charset=utf8;',
      // ユーザー名
      'root',
      // パスワード
      '',
      // レコード列名をキーとして取得させる
      [ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ]
    );  

        //5件だけ検索
        $query = 'SELECT * FROM products ORDER BY product_id limit :start, :size';

        $stmt = $pdo->prepare($query);
        $stmt->bindParam('start', $start, PDO::PARAM_INT);
        $stmt->bindParam('size', $size, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll();

        require_once 'viewSelect_tpl.php';
      

  } catch (PDOEeception $e) {
    //例外が発生したら無視
    require_once 'exception_tpl.php';
    echo $e->getMessage();
    exit();
  }
?>