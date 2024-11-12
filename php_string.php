<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>字串</title>
</head>
<body>
    <?php
    echo "我是一個字串<br/>" ;
    echo "How are you? I'm fine.<br/>" ; 
    echo "PHP 的安裝路徑在 C:\\PHP\\ 中 。<br/>" ;
    echo "這裡是一個'字串'。<br/>" ;
    echo "這裡是一個\"字串\"。<br/>" ;

    /* 宣告變數 */
    $myLanguage = "PHP" ; 
    /* 單引號無法顯示值，而是直接顯示變數名稱 */
    echo '我最喜愛的網頁程式是 $myLanguage <br/>' ; 
    echo "我最喜歡的網頁程式是 $myLanguage <br/>" ;
    /* 以防變數名稱符號與其他符號重疊，利用{}括起來 */
    echo "我最喜歡的網頁程式是 {$myLanguage} <br/>"; 

    //heredoc語法結構表示字串
    /* $變數名稱 ＝ <<<自訂名稱
                  字串內容
        自訂名稱 ; 
    */
    $showStr = <<<Msg
               我最喜歡的程式語言是：{$myLanguage} <br/>
    Msg ;
    echo $showStr ; 

    //nowdoc 語法結構表示串
    $showStr = <<<'Msg'
               我最喜歡的網頁程式是：$myLanguage <br/>
    Msg;
    echo $showStr ;
    ?>
</body>
</html>
