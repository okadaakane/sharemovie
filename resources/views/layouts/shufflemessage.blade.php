<!DOCTYPE html>
<!-- 直接追記　-->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>mainpage</title>
</head>
<body>
<p><?php

$fortune = array(
   "いい感じ！", 
   "この調子で！", 
   "頑張りすぎなくていいんだよ！",
   "今日も達成！",
   "素晴らしい！",
);

$count  = count($fortune);
$random = rand(0, $count - 1);

echo $fortune[$random];

?></p>
</body>
</html>