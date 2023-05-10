<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main">
        <div class="intro__inner container bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/intro01.png, ../assets/img/intro01@2x.png 2x, assets/img/intro01@3x.png 3x" />
                <img src="../assets/img/intro01.png" alt="소개이미지">
            </picture> 
            <p class="intro__text">
                하루도 배우지 않은 것이 있다면 그것은 큰 손실이다.
                나는 내가 모르는 것을 인정하며, 그러한 것을 배우기 위해 노력한다.
                나는 지식이 인생에서 가장 중요한 것 중 하나임을 안다. 나는 인생에서 계속해서 성장하고 발전하기 위해 배우는 것이 중요하다고 믿는다.<br> 
                -링컨
            </p>
        </div>

        <!-- <div class="sliders__inner"></div>
        <div class="banners__inner"></div>
        <div class="cards__inner"></div>
        <div class="images__inner"></div>
        <div class="ads__inner"></div>
        <div class="texts__inner"></div>
        <div class="login__inner"></div>
        <div class="join__inner"></div>
        <div class="bolg__inner"></div> -->
    </main>
    <!-- //main -->
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>