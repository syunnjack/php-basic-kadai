<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
// 独自のソート関数：TRUEなら昇順、FALSEなら降順でソート
function sort_2way($array, $order) {
  if ($order === true) {
    sort($array); // 昇順ソート
  } else {
    rsort($array); // 降順ソート
  }

  // ソート結果を表示（課題では戻り値なし）
  foreach ($array as $value) {
    echo $value . "<br>";
  }
}

// ソート対象の配列を宣言
$nums = [15, 4, 18, 23, 10];

// 昇順でソート
echo "昇順ソート結果：<br>";
sort_2way($nums, true);

echo "<br>";

// 降順でソート
echo "降順ソート結果：<br>";
sort_2way($nums, false);
?>

    </p>
</body>

</html>