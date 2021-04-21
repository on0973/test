<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <?php  
    $number = mb_convert_kana($_POST['number'], "n"); 
    ?>
    <br>
    <?php
    switch ($number) {
        case 1:
            echo $number . "が入力されました<br /><br />";
            echo '小吉です。今日は運を溜める一日にしましょう！';
            break;
        case 2:
            echo $number . "が入力されました<br /><br />"; 
            echo '凶です。今日は背後に気を付けて一日を過ごしてくださいね！';
            break;
        case 3:
            echo $number . "が入力されました<br /><br />"; 
            echo 'おめでとうございます！大吉です！文句なしの良い一日をお過ごしください！';
            break;
        case 4:
            echo $number . "が入力されました<br /><br />"; 
            echo '中吉です。ほどよく良い一日を過ごせます！';
            break;
        case '':
            echo "空欄が入力されました<br /><br />"; 
            echo 'せっかちさん！前ページに戻ってもう一度入力してください！';
            break;
        default:
            echo $number . "が入力されました<br /><br />"; 
            echo '１～４の数字を入力してください！';
            break;
    }
    ?>
    <br><br>
    <button type="button" onclick="history.back()">戻る</button>
</body>
</html>