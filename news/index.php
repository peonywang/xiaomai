<?php
/**
 * Created by PhpStorm.
 * User: wangguohua
 * Date: 2019/3/9
 * Time: 9:18
 */
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sneaker Bar Detroit</title>
    <link rel="stylesheet" href="news.css">
    <script src="../js/jquery-1.11.3.min.js"></script>
</head>
<body>
    <div class="news">
        <!-- 信息 -->
        <div class="inf">
            <h1 class="d1">
                The Baby Eaglein ChinaNo DataRetention. Access Content from Anywhere. 24/7 Live Support.expressvpn
            </h1>
            <div class="time">Dec 12.28.2018 11:13 AM</div>
        </div>
        <!-- 详情 -->
        <div class="dis">
            <p>The baby eagle liked the nest. It was the only world he had ever known. It was warm and comfortable, had a great view, and even better, he had all the food and love and attention that a great mother eagle could provide.</p>
            <img src="images/pro1.jpg" alt="pro">
            <p>Once upon a time there was a baby eagle living in a nest perched on a cliff overlooking a beautiful valley with waterfalls and streams, trees and lots of little animals, scurrying1 about enjoying their lives</p>
            <p>The baby eagle liked the nest. It was the only world he had ever known. It was warm and comfortable, had a great view, and even better, he had all the food and love and attention that a great mother eagle could provide.</p>
            <div class="more"><img src="images/more.png" alt="more"></div>
        </div>
        <!-- 分享 -->
        <div class="share">
            <h2><span>Shared COINS Have Been Read As Rewards</span></h2>
            <div class="shareD">
                <a href=""><img src="images/Facebook.png" alt="Facebook">Facebook</a>
                <a href=""><img src="images/Twitter.png" alt="Twitter">Twitter</a>
                <a href=""><img src="images/Goodle+.png" alt="Goodle+">Goodle+</a>
                <a href=""><img src="images/Linkedin.png" alt="Linkedin">Linkedin</a>
            </div>
        </div>
        <!-- 热卖 -->
        <div class="hot">
            <h2>HOT NEWS</h2>
            <a class="list" href="">
                <div class="imgD"><img src="images/pro2.jpg" alt="pro2"></div>
                <div class="d2">
                    <p class="p1">Sneaker News</p>
                    <p class="p2">The Nike Kyrie 5 ‘Chinges’New Year Featurse tradutuonal Bai Jia Yi</p>
                </div>
            </a>
            <a class="list" href="">
                <div class="imgD"><img src="images/pro3.jpg" alt="pro3"></div>
                <div class="d2">
                    <p class="p1">Sneaker Bar Detroit</p>
                    <p class="p2">Nike Chinese New Year Collection Shoes Monarch IVSymbolic</p>
                </div>
            </a>
        </div>
        <!-- 底部功能按钮 -->
        <div class="bottom">
            <div class="shuru">
                <input type="text" placeholder="Let me asy something">
            </div>
            <a class="comment" href="#comment"></a>
            <a class="gotop" href="#gotop"></a>
            <span class="collect"></span>
            <a class="buy" href="">Buy</a>
        </div>
    </div>
    <script>
        $(function () {
            // 展开详情
            $(".dis .more").click(function () {
                $(this).parents(".dis").toggleClass("show")
            })
            // 收藏
            $(".collect").click(function () {
                $(this).toggleClass("act");
            })
        })
    </script>
</body>
</html>
