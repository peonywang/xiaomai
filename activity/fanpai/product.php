<!doctype html>
<html lang="en">
<head>
  <?php include("comhead.php"); ?>
  <!-- 添加到主屏后的标题（iOS 6 新增） -->
  <meta name="apple-mobile-web-app-title" content="小麦购物-详情页">
  <title>奖品详情</title>
  <!-- 轮播插件 -->
  <link rel="stylesheet" href="js/swiper/swiper.min.css">
  <script src="js/swiper/swiper.min.js"></script>
  <!-- 详情页样式 -->
  <link rel="stylesheet" href="css/pro.css">
</head>
<body>
  <!-- 详情页 -->
  <div class="proD">
    <?php
    //轮播图片数据
    $banData = ["images/proImg.png","images/proImg.png","images/proImg.png"];
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
      1963年第一辆911诞生，50多年来不断超越自己，现在再次用传奇刷新纪录，纯正跑车的理想设计值得你的拥有。
    </div>
    <!-- 价格 -->
    <div class="pri">
      <span class="red">¥<b class="b1">399</b></span>
      <s class="gray">¥499</s>
      <span class="right gray">已售1000</span>
    </div>
    <!-- 详情图 -->
    <div class="proI">
      <img src="images/proImg.png" alt="详情图1">
    </div>
    <!-- 底部功能条 -->
    <div class="botT">
      <a href="javascript:;" class="a3" onclick="$(loginTan).show()">立即领取</a>
    </div>

    <!-- 登陆框 -->
    <div class="tan loginD" id="loginTan" style="display: none;">
      <div class="tanNr">
        <div class="tit">为保证账号安全，请绑定手机号</div>
        <div class="d1">
          <input class="inp1" type="tel" placeholder="请输入手机号码">
        </div>
        <div class="d1 d2">
          <input class="inp1" type="tel" placeholder="请输入验证码">
          <a class="a1" href="javacript:;">获取验证码</a>
        </div>
        <div class="btnD">
          <a href="javascript:;" class="a1" onclick="$(loginTan).hide()">取消</a>
          <a href="javascritp:;" class="a2" onclick="$(loginTan).hide()">确定</a>
        </div>
      </div>
    </div>
    <!-- 提示弹出 -->
    <div class="tishiT" style="display:none;"><span class="d1">提示弹出</span></div>
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