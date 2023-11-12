<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>PHP基礎編</title>
</head>

<body>
	<P>
        	<?php
		// 変数に値を代入する
		$score1 = 80;
		$score2 = 60;
		$score3 = 55;
		$score4 = 40;
		$score5 = 100;
		$score6 = 25;
		$score7 = 80;
		$score8 = 95;
		$score9 = 30;
		$score10 = 60;

		// 変数の中身を出力する
		echo "10人の点数：{$score1},{$score2},{$score3},{$score4},{$score5},{$score6},{$score7},{$score8},{$score8},{$score9},{$score10}";
		echo '<br>';
		?>
	<p>
		<?php
		// 変数の数値計算(合計点、平均点)
		$sum = $score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10;
		$ave = $sum / 10;

		// 計算結果を出力する
		echo "合計：{$sum}";
		echo '<br>';
		echo "平均：{$ave}";
		?>
	</p>
</body>

</html>