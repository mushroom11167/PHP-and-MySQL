<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>定義網頁</title>
</head>
<body>
    <?php
    /* define (常數名稱,常數值 [,大小寫有沒有要區分，以TRUE與FALSE表示]) */
    /* define 有三部份，通常第三部份可以省略不寫 */

    define("FISHMUSHROOM","佳儀") ;

    /* const 常數名稱 = 常數值 */
    const FISHMUSHROOMUrl = "https://mushroom11167.github.io/my_website/" ; 
    echo "您好，歡迎光臨".FISHMUSHROOM."的網站！<br/>" ;
    echo "網址為：".FISHMUSHROOMUrl. "<br/>" ; 
    echo "目前系統的 PHP 版本為：" ;

    /* PHP_VERSION 是要看目前PHP運行的版本 */
    echo PHP_VERSION. "<br/>" ; 

    /* PHP_OS 是要看目前伺服器的作業系統 */
    echo "目前的作業系統：" .PHP_OS."<br/>" ; 

    /* __FILE__ 是要看檔案的路徑 */
    echo "目前執行檔案的路徑：" ;
    echo __FILE__."<br/>" ;
    ?>
</body>
</html>
