<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container-fulid">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-dark bg-dark">
                    <a href="index.php" class="navbar-brand">Todo</a>
                </nav>
            </div>
        </div>

        <div class="row mt-4 px-4">
            <div class="col-12">
                <form action="store.php" method="post">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="contents">Contents</label>
                        <textarea class="form-control" name="contents" id="contents" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">POST</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
<!-- CRUD処理
C:create 
- insert文

R:read
- select文

U: update
- update文

D: delate
- delete文 -->

<!-- create機能を作りたい -->
<!-- 
    →create.phpにフォームがあります
    フォームはデータを送信するもの:form(input)タグ、aタグ
    データの送信方法:POST,GET
    <form action="" method="">
    form:GET,POST
    a:GET

    GET:urlに?が必ずつく
    POST:個人情報

    action:データを飛ばしたい先遷移先 -->