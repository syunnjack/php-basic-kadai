<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>社員情報入力フォーム</title>
</head>
<body>
  <h2>社員情報入力フォーム</h2>
  <form action="confirm.php" method="post">
    <p>社員名：<input type="text" name="employee_name"></p>
    <p>年齢：<input type="text" name="employee_age"></p>
    <p>所属部署：
      <select name="department">
        <option value="開発部">開発部</option>
        <option value="営業部">営業部</option>
        <option value="人事部">人事部</option>
      </select>
    </p>
    <input type="submit" value="送信">
  </form>
</body>
</html>
