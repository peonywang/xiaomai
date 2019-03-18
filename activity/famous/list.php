<?php
/**
 * Created by wangguohua.
 * User: Administrator
 * Date: 2019/3/17
 * Time: 16:38
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>品牌专场</title>
    <link rel="stylesheet" href="famous.css">
</head>
<body>
    <div class="famous w750">
        <div class="top flex">
            <div class="d1"><img src="images/tit.png" alt="2019大牌折扣日"><span>期待您的光临……</span></div>
            <div class="d3">
                <a href=""><img src="images/share.png" alt="分享"></a>
            </div>
        </div>
        <h1 class="banner"><img src="images/adidas.jpg" alt="adidas"></h1>
<!--        more-->
        <div class="more">
            <h2><img src="images/more.png" alt="more"></h2>
            <?php $ad = [
                'adidas','converse','newbalance','nike','puma','wans'
            ]; ?>
            <div class="d1 flex">
                <?php foreach ($ad as $k => $v){ ?>
                    <a href=""> <img src="images/ad2/<?php echo $v; ?>.jpg" alt="<?php //echo $v; ?>"> </a>
                <?php } ?>
            </div>
        </div>
<!--        list-->
        <div class="recommend recommend2">
            <div class="dis">距离本专场团购活动结束仅剩</div>
            <h2><b>12</b>时  <b>34</b>分  <b>56</b>秒</h2>
            <div class="list flex">
                <?php for($i=0;$i<6;$i++){ ?>
                <a href="details.php">
                    <div class="proI">
                        <img src="images/pro2.jpg" alt="" class="pro">
                        <div class="tag">
                            <img src="images/sales.png" alt="销量第一">
                            <img src="images/hot.png" alt="hot">
                            <img src="images/praise.png" alt="好评">
                        </div>
                        <div class="ongoing">团购正在进行中</div>
                    </div>
                    <p class="p1">
                        <span class="rmb">248</span>
                        <span class="rmb gray">342</span>
                        <span class="size">4色</span>
                    </p>
                    <p class="p2">ADIDASI 三叶草情侣鞋 系列</p>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>
