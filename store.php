<?php

// ファイルの読み込み
require_once('Models/Task.php');
// 新規作成を行うときにcreateというメソッドを使いたいからtask.phpのファイルが必要

// CREATE機能の追加

// データの受け取り
// create.phpからのデータの受け取り
// 欲しい内容はtitleとcontentsの内容
$title = $_POST['title'];
$contents = $_POST['contents'];
// 行われたときの時間を記録する
$currentTime = date("Y/m/d H:i:s");
// DBへのデータ保存
// task.phpの中にあるメソッドを実行する
$task = new Task();
// taskのモデルの中のcreateメソッドを実行
$task->create([$title, $contents, $currentTime]);
// リダイレクト
// Postボタンを押した後に最初のトップページに戻るコード
header('location:index.php');

exit;