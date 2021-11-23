<?php

// ファイルの読み込み
require_once('Models/Task.php');
require_once('function.php');

// sessionは、ユーザー情報を一時的に保存するもの
// ユーザーがログインしているのかどうかを判断する
session_start();

/* 
ユーザーがログインしていた場合（$_SESSION['user']が定義されている場合）
ユーザーのid, email, passwordなどの情報を$currentUserという変数に代入する
$_SESSION['user']はサインアップまたはサインインする際に定義されている
（signin.php / signup.php参照）
*/
 if(isset($_SESSION['user']))
{
    $curretUser = $_SESSION['user'];
    $email = $_SESSION['user']['email'];
}

$task = new Task();
// 1. 検索機能なし
$tasks = $task->getAll();

// 2. 検索機能を付けた場合
// if (isset($_GET['title'])) {
//     $title = $_GET['title'];
//     $tasks = $task->findByTitle(["%$title%"]);
// } else {
//     $tasks = $task->getAll();
// }
?>

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

        <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="create.php">夢を描く</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="signinForm.php">ログイン</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="signupForm.php">アカウントを作る</a>
        </li>
        </ul>

<div class="all-contents">
    <h1>夢日記2</h1>
</div>
    <div class="index">
        <main class="index-main">

            <?php foreach ($tasks as $task) : ?>
                    <div class="card">
                        <img src="any/image/sky.JPG" class="card-img-top" alt="sky">
                        <div class="card-body">
                            <h5 class="card-title"><?= h($task["title"]); ?></h5>
                            <p class="card-text">
                                <?= h($task["contents"]); ?>
                            </p>
                            <div class="text-right d-flex justify-content-end">
                                <a href="edit.php?id=<?= h($task['id']); ?>" class="btn text-success">編集</a>
                                <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value="<?= h($task['id']); ?>">
                                    <button type="submit" class="btn text-danger">消去</button>
                                </form>
                            </div>
                        </div>
                    </div>
            <?php endforeach; ?>
        </main>


        <aside class="index-aside">
          <h3>夢の意味は？？</h3>
          <p>関連ページでチェック！</p>    
          <div class="aside">
          <a href="https://nonno.hpplus.jp/fortune/dream">夢占い</a>
          <a href="#">夢占い</a>
          <a href="#">夢占い</a>
          <a href="#">夢占い</a>
            </div>
        </aside>
        
    </div>

</body>
</html>