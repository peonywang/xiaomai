<!doctype html>
<html lang="en">
<head>
    <?php include("comhead.php");?>
	<title>商品详情</title>
    <!-- 轮播插件 -->
    <link rel="stylesheet" href="../../js/swiper/swiper.min.css">
    <script src="../../js/swiper/swiper.min.js"></script>
    <!-- 详情页样式 -->
    <link rel="stylesheet" href="../../com.css">
    <link rel="stylesheet" href="../../css/pro.css">

    <!-- 活动新加样式 -->
    <link rel="stylesheet" href="css/pro-huodong.css">
</head>
<body>

<!-- 详情页 -->
<div class="proD">
    <?php
    //轮播图片数据
    $banData = ["images/pro.jpg","images/pro.jpg","images/pro.jpg"];
    ?>
    <!-- 轮播 -->
    <div class="banner">
        <div class="swiper-container" id="pro-banner">
            <div class="swiper-wrapper">
                <?php foreach ($banData as $k => $v) { ?>
                    <div class="swiper-slide">
                        <img src="<?php echo $v ?>">
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="swiper-container" id="origin-img">
            <div class="swiper-wrapper"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- 描述 -->
    <div class="dis">
        每日粮食寒水海苔罐装芝麻夹心海苔零食即食品儿童宝宝海苔 罐装海苔52g。
    </div>
    <!-- 价格 -->
    <div class="pri">
        <span class="red">¥<b class="b1">1</b></span>
        <s class="gray">¥399</s>
        <span class="right gray">已售1000</span>
    </div>
    <!-- 活动 -->
    <div class="huodong">
        <div class="tit">活动内容</div>
        <div class="nr">
            <ol>
                <li>1、「声明」由于购买活动特殊性，用户成功支付1元购买后，不能退订退款。</li>
                <li>2、用户支付成功后，邀请5位好友助力支付一元钱。TA支付后，你将获赠兑换权益1份，满6份可领取。</li>
            </ol>
        </div>
    </div>
    <!-- 底部功能条 -->
    <div class="botT">
        <a href="bill.php" class="a3" id="ljgm">立即购买</a>
    </div>
</div>
<script>
    // 轮播
    var mySwiper = new Swiper('#pro-banner', {
        autoplay: true,//可选选项，自动滑动
        pagination: {
            el: '#pro-banner .swiper-pagination',
        },
    })

    // 放大banner轮播图
    var swiperStatus=false;
    // imgsdata 获取banner的图片
    imgs = [<?php foreach ($banData as $k => $v) { echo json_encode($v,JSON_UNESCAPED_SLASHES).','; } ?>];



    var swiper = new Swiper('#origin-img',{
        zoom:true,
        width: window.innerWidth,
        virtual: true,
        spaceBetween:20,
        pagination: {
            el: '#origin-img .swiper-pagination',
            type: 'fraction',
        },
        controller: {
            control: mySwiper, //控制Swiper1
        },
        on:{
            click: function(){
                $('#origin-img').fadeOut('fast');
                this.virtual.slides.length=0;
                this.virtual.cache=[];
                swiperStatus=false;
            },
        },
    });
    $('#pro-banner img').click(function(){
        clickIndex=mySwiper.clickedIndex;
        for(i=0;i<imgs.length;i++){
            swiper.virtual.appendSlide('<div class="swiper-zoom-container"><img src="'+imgs[i]+'" /></div>')
        }
        swiper.slideTo(clickIndex);
        $('#origin-img').fadeIn('fast');
        swiperStatus=true;
    })

    //切换图状态禁止页面缩放
    document.addEventListener('touchstart',function (event) {
        if(event.touches.length>1 && swiperStatus){
            event.preventDefault();
        }
    })
    var lastTouchEnd=0;
    document.addEventListener('touchend',function (event) {
        var now=(new Date()).getTime();
        if(now-lastTouchEnd<=300){
            event.preventDefault();
        }
        lastTouchEnd=now;
    },false)
    document.addEventListener('touchmove',function(e){
        if(swiperStatus){
            e.preventDefault();
        }
    })
</script>
</body>
</html>