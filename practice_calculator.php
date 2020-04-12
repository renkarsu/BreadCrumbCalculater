<?php
$num = isset($_GET['num']) ? $_GET['num'] : null;
$operator = isset($_GET['operator']) ? $_GET['operator'] : '+';
$num1 = isset($_GET['num1']) ? $_GET['num1'] : null;

if (!is_null($num) && !is_null($num1)) {
    switch ($operator) {
        case '-':
            $answer = $num - $num1;
            break;
        case '*':
            $answer = $num * $num1;
            break;
        case '/':
            $answer = $num / $num1;
            break;
        case '+':
        default:
            $answer = $num + $num1;
            break;
    }
    $result = "{$num} {$operator} {$num1} = {$answer}";
} else {
    $result = '計算されていません。';
}
?>
<!DOCTYPE html>
<html lang = "ja">
  <head>
    <meta charset = "utf-8">
    <title>電卓を作ろう</title>
  </head>

  <body>

    <form action="" method="get">
      <h1>計算してみよう！</h1>
    <p><input name="num" style="width:110px;height:15px;" style="ime_mode:disabled" value="<?php echo $num; ?>" placeholder="半角数字のみ" required autofocus></p>

    <select name="operator">
        <option value="+" <?php if ($operator === '+') { echo 'selected'; } ?>>+</option>
        <option value="-" <?php if ($operator === '-') { echo 'selected'; } ?>>-</option>
        <option value="*" <?php if ($operator === '*') { echo 'selected'; } ?>>*</option>
        <option value="/" <?php if ($operator === '/') { echo 'selected'; } ?>>/</option>
    </select>

    <p><input name="num1" style="width:110px;height:15px" name="num1" style="ime_mode:disabled" value="<?php echo $num1; ?>" placeholder="半角数字のみ" required></p>
    <input type="submit" id="btn" value="計算する">
</form>
<p><?php echo $result; ?></p>
  </body>
</html>