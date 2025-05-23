<?php
$employee_name = $_POST['employee_name'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>完了画面</title>
</head>
<body>
  <h2>登録が完了しました</h2>
  <p><?php echo htmlspecialchars($employee_name); ?> さんの情報が登録されました。</p>
  <form action="form.php" method="post">
    <input type="submit" value="戻る">
  </form>
</body>
</html>
