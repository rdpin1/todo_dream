<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログイン | 夢日記</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="any/asset/reset.css">
    <link rel="stylesheet" href="any/asset/style.css">
</head>

<body>
    <nav class="nav">
      <a class="nav-link active" aria-current="page" href="index.php">ホームに戻る</a>
    </nav>
        <h1 style="text-align: center;">サインイン</h1>

        <div class="row mt-4 px-4">
            <div class="col-12">
                <form action="signin.php" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">サインイン</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>