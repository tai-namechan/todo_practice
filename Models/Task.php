<?php

require_once('Model.php');

class Task extends Model
{
    // プロパティ
    protected $table = 'tasks';

    // 新規作成に使用するメソッド
    // (引数)
    public function create($data)
    {
        // DBに保存
        // このクラスのインスタンスの
        // db_managerプロパティの
        // DbManagerクラスのインスタンス
        // dbhプロパティの
        // PDOのインスタンス
        // prepareメソッドを実行
        // INSERT INTO (カラム名, ,) VALUES (値, 値, 値,)
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table . ' (title, contents, created) VALUES (?, ?, ?)');
        $stmt->execute($data);
    }
    // * update()を以下に追加する
    // ここで引数として受け取るのがupdate.phpでわたした$title,contents,id
    public function update($data)
    {
        // 準備
        // whereでテーブルの中からどのデータを編集するのか,idでここで受け取ったデータの中の3つめの変数にidがはいる
        $stmt = $this->db_manager->dbh->prepare('UPDATE ' . $this->table . ' SET title = ?, contents = ? WHERE id = ?');
        // 実行
        $stmt->execute($data);
    }



    // * (findByTitle()を以下に追加する)




}