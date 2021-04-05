<?php 
// deleteの処理内容を以下に書く

// 1. ファイルの読み込み
require_once('Models/Task.php');


// 2. データの受け取り
// deleteボタンで飛ばした値
// 受け取ったidを変数の中に代入
$id = $_POST['id'];

// 3. DBからデータの削除
$task = new Task();
// Modele.phpにあるdeleteメソッド
// execute phpの組み込み関数 引数は必ずarray配列でなければならない
$task->delete([$id]);

// 4. リダイレクト
header('location: index.php');
exit;
