<?php
require_once('../model/entity/GameInfo.php');
require_once('../model/dao/GameInfoDao.php');

$gameInfo = new GameInfo(
    $_POST['title']
    , $_POST['game_date']
    , $_POST['start_time']
    , $_POST['end_time']
    , $_POST['place']
    , $_POST['detail']
);

$gameInfoDao = new GameInfoDao();
if($_POST['id'] == '') {
    $gameInfoDao->insert($gameInfo);
} else {
    $gameInfo->id = $_POST['id'];
    $gameInfoDao->update($gameInfo);
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録完了</title>
</head>
<body>
    <p>登録完了しました。</p>
    <p><a href="index.php">イベント一覧に戻る</a></p>
</body>
</html>