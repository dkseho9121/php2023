<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 회원가입 페이지</title>
    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- //skip -->
    <?php include "../include/header.php" ?>
    <!-- //header -->
    <main id="main" class="container">
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/joinEnd01.png, ../assets/img/joinEnd01@2x.png, ../assets/img/joinEnd01@3x.png">
                <img src="assets/img/joinEnd01@2x.png" alt="회원가입 이미지">
            </picture>
            <p class="intro__text">
                회원가입이 완료 되었습니다.
            </p>
            <div class="join__inner">
                <div class="index">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li class="active">3</li>
                    </ul>
                </div>
            </div>
        <!-- intro inner -->
        <button class="bubbly-button"><a href="main.html">관리자 로그인</a></button>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>
<script>
    var animateButton = function(e) {

e.preventDefault;
//reset animation
e.target.classList.remove('animate');

e.target.classList.add('animate');
setTimeout(function(){
  e.target.classList.remove('animate');
},700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
bubblyButtons[i].addEventListener('click', animateButton, false);
}
</script>