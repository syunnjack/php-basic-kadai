<?php
$employee_name = $_POST['employee_name'];
$employee_age = $_POST['employee_age'];
$department = $_POST['department'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>確認画面</title>
</head>
<body>
  <h2>入力内容の確認</h2>
  <table border="1">
    <tr><th>社員名</th><td><?php echo htmlspecialchars($employee_name); ?></td></tr>
    <tr><th>年齢</th><td><?php echo htmlspecialchars($employee_age); ?></td></tr>
    <tr><th>所属部署</th><td><?php echo htmlspecialchars($department); ?></td></tr>
  </table>
  <form action="complete.php" method="post">
    <input type="hidden" name="employee_name" value="<?php echo htmlspecialchars($employee_name); ?>">
    <input type="hidden" name="employee_age" value="<?php echo htmlspecialchars($employee_age); ?>">
    <input type="hidden" name="department" value="<?php echo htmlspecialchars($department); ?>">
    <input type="submit" value="確定">
  </form>
  <form action="form.php" method="post">
    <input type="submit" value="キャンセル">
  </form>
</body>
</html>
