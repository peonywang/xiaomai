<!doctype html>
<html lang="en">
<head>
  <?php include("comhead.php");?>
  <title>分享</title>
  <link rel="stylesheet" href="css/com.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="yuanD">
  <h1 class="top">
    <img src="images/success1.jpg" alt="助力1元购步骤">
  </h1>
  <!-- 商品 -->
  <div class="main">
    <div class="jindD">
      <h2>助力进度 <span class="s1">1</span>/6</h2>
      <ul class="jdUl">
        <li>
          <img src="images/pro.jpg" alt="产品" class="i1">
          <img src="images/user.png" alt="头像" class="user">
        </li>
        <?php for($i=0;$i<5;$i++){ ?>
        <li>
          <span class="s1">未获得 +</span>
        </li>
        <?php } ?>
      </ul>
      <p class="p1">TA支付后，你将获赠兑换权益1份，满6份可领取</p>
      <div class="btnD"><a href="javascript:;" class="btn">邀请好友帮我支付1元钱</a></div>
      <!-- 方便后台开发使用入口 -->
      <p class="p1">前端展示入口 <a href="share.php?role=2"><u>好友进入页面(微信端)</u></a></p>
      <!-- end 需删除 方便后台开发使用入口 -->
    </div>
    <h2><img src="images/tit.jpg" alt="热卖推荐专区"></h2>
    <ul class="zhuanqu">
      <?php for($i=0;$i<2;$i++){ ?>
        <li class="li1">
          <a class="a1" href="pro.php">
            <div class="d1">
              <div class="name">新疆和田大枣思路红和田骏五星红枣特产500g</div>
              <div class="pri">
                <span class="s1">助力价格：</span>
                <b>1</b>
                <span class="btn">立即订购 &gt;</span>
              </div>
            </div>
            <div class="d2">
              <img src="images/pro.jpg" alt="商品图">
            </div>
          </a>
        </li>
      <?php } ?>
    </ul>
  </div>
</div>
</body>
</html>