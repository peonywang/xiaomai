<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>大牌云集</title>
    <link rel="stylesheet" href="/js/swiper/swiper.min.css">
    <link rel="stylesheet" href="famous.css">
</head>
<body>
    <div class="famous w750">
        <div class="top flex">
            <div class="d1"><img src="images/tit.png" alt="2019大牌折扣日"></div>
            <div class="d2">
                <a href="">申请退换</a>
                <a href="">订单查询</a>
            </div>
            <div class="d3">
                <a href=""><img src="images/share.png" alt="分享"></a>
            </div>
        </div>
        <h1 class="banner"><img src="images/banner.jpg" alt="大牌云集"></h1>
<!--        抢购中-->
        <div class="buying">
            <div class="d1 flex">
                <span class="tit">团购大折扣 正在疯抢中</span>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-container"style="margin:0 0.6rem;">
                <div class="swiper-wrapper">
                    <?php for($i=0;$i<3;$i++){ ?>
                    <a class="swiper-slide flex">
                        <img src="images/pro1.jpg" class="pro" alt="商品图">
                        <div class="inf">
                            <div class="name">篮球 男子 哈登场上款篮哈登场上款</div>
                            <div class="pri flex">
                                <div class="rmb">238</div>
                                <div class="join">已有 <sapn class="red">5</sapn> 人参团 </div>
                            </div>
<!--                            倒计时-->
                            <div class="count">
                                距离本轮团购仅剩: <b>12</b>时  <b>34</b>分  <b>56</b>秒
                            </div>
                            <div class="go">
                                <span>立即参团</span>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
<!--        人气大牌.BEST  FOR YOU -->
        <?php $ad = [
                'adidas','converse','newbalance','nike','puma','wans'
        ]; ?>
        <div class="best">
            <h2>人气大牌.BEST  FOR YOU</h2>
            <div class="swiper-container" style="height: 52vw;margin:0 0.6rem;">
                <div class="swiper-wrapper">
                    <?php foreach ($ad as $k => $v){ ?>
                        <a class="swiper-slide" href="list.php"> <img src="images/ad/<?php echo $v; ?>.jpg" alt="<?php //echo $v; ?>"> </a>
                    <?php } ?>
                </div>
            </div>
        </div>
<!--        大牌推荐-->
        <div class="recommend">
            <h2>大牌推荐</h2>
            <a href="list.php" class="banner">
                <img src="images/adidas.jpg" alt="adidas">
            </a>
            <div class="list flex">
                <?php for($i=0;$i<3;$i++){ ?>
                <a href="details.php">
                    <div class="pro"><img src="images/pro<?php echo $i+2;?>.jpg" alt=""></div>
                    <p class="p1">
                        <span class="rmb">248</span>
                        <span class="rmb gray">342</span>
                        <span class="tag">团</span>
                    </p>
                    <p class="p2">三叶草 女子TUBULAR 经典谢 亮白S75155</p>
                </a>
                <?php } ?>
            </div>
            <a href="list.php" class="banner">
                <img src="images/adidas.jpg" alt="adidas">
            </a>
            <div class="list flex">
                <?php for($i=0;$i<3;$i++){ ?>
                <a href="details.php">
                    <div class="pro"><img src="images/pro<?php echo $i+2;?>.jpg" alt=""></div>
                    <p class="p1">
                        <span class="rmb">248</span>
                        <span class="rmb gray">342</span>
                        <span class="tag">团</span>
                    </p>
                    <p class="p2">三叶草 女子TUBULAR 经典谢 亮白S75155</p>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>
    <!--bottom-->
    <div class="bottom w750 flex">
        <a href="" class="btn btn1">申请退换货</a>
        <a href="" class="btn btn2">查询订单</a>
    </div>
    <script src="/js/swiper/swiper.min.js"></script>
    <script>
        var mySwiper1 = new Swiper('.buying .swiper-container', {
            autoplay: true,//可选选项，自动滑动
            loop:true,
            pagination:{
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + '</span>';
                }
            }
        });
        var mySwiper2 = new Swiper('.best .swiper-container',{
            slidesPerView : 3,
            spaceBetween : 10,
            loop:true
        })
    </script>

</body>
</html>