<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>夢日記</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="any/asset/reset.css">
    <link rel="stylesheet" href="any/asset/style.css">
</head>

<body>
    <nav class="nav">
      <a class="nav-link active" aria-current="page" href="index.php">ホームに戻る</a>
    </nav>

        <div class="row mt-4 px-4">
            <div class="col-12">
                <form action="store.php" method="post">
                    <div class="form-group">
                        <label for="title">登場人物</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="◉◉◉、▲▲▲">
                    </div>
                    <div class="form-group">
                        <label for="contents">夢の内容</label>
                        <textarea class="form-control" name="contents" id="contents" placeholder="東京のおしゃれなバーで飲んだ" cols="30" rows="10"></textarea>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">投稿</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>