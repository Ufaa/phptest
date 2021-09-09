<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>九九表</title>

    <style>

table {
    border-collapse: collapse;
    border: 1px solid coral;
}
th, td {
    width: 50px;
    border: 1px dotted coral;
}
td {
    text-align: center;
}


    </style>
</head>
<body>

<h1>九九表</h1>

<table border="2" style="margin:32px 0 0 32px;">
 
<?php
	//九九の表を見やすくするための空間確保
	echo "<br>";
	echo "<hr>";
 
	//九九の表の縦方向に出力するためのループ
	for( $i = 1 ; $i <= 9 ; $i++ ){
 
		//テーブルの縦方向のタグを出力
		echo "<tr>";
 
		//九九の表の横方向に出力するためのループ
		for( $j = 1 ; $j <= 9 ; $j++ ){
			
			echo "<td style=\"text-align:right;\">";
			
			/*
				計算結果が10未満(数字一桁)なら空間を設けるために
				半角スペースを出力する
			*/
			if( $i * $j < 10) echo "&nbsp;";
	
			//計算結果を出力する
			echo $i * $j;
 
			echo "</td>";
		}
 
		//テーブルの縦方向の閉じタグを出力
		echo "</tr>";
	}
 
?>
</table>



</body>
</html>