<?php

// ファイルの読み込み
require_once('Models/Task.php');
// 新規作成を行うときにcreateというメソッドを使いたいからtask.phpのファイルが必要

// CREATE機能の追加

// データの受け取り
// create.phpからのデータの受け取り
// 欲しい内容はtitleとcontentsの内容
// スーパーグローバル変数
$title = $_POST['title'];
$contents = $_POST['contents'];
// 行われたときの時間を記録する
// date関数
// YYYY西暦
$currentTime = date("Y/m/d H:i:s");

// ちゃんとデータが送られてきたかvar_dump()で確認するがstore.phpは見えないから
// var_dump($title);
// die;
// で処理を終わらせちゃう

// DBへのデータ保存
// task.phpの中にあるメソッドを実行する
$task = new Task();
// taskのモデルの中のcreateメソッドを実行
$task->create([$title, $contents, $currentTime]);
// リダイレクト
// create.php → store.php → index.php
// create.php → index.php
// Postボタンを押した後に最初のトップページに戻るコード
header('location:index.php');
// ここで処理終了の合図
// DBの接続の終了の合図で書かれている
exit;