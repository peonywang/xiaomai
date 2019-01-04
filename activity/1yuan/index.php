<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>1元购</title>
  <link rel="stylesheet" href="css/com.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="yuanD">
    <h1 class="top">
      <img src="images/top.jpg" alt="助力1元购">
    </h1>
    <!-- 商品 -->
    <div class="main">
      <h2><img src="images/tit.jpg" alt="热卖推荐专区"></h2>
      <div class="zhuanqu">
        <?php for($i=0;$i<4;$i++){ ?>
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
        <?php } ?>
      </div>
    </div>
    <!-- 规则 -->
    <div class="rule">
      <h2>活动规则</h2>
      <p>▼抽奖规则：</p>
      <ol>
        <li>「声明」由于购买活动特殊性，用户成功支付1元购买后，不能退订退款。</li>
        <li>用户邀请好友助力，帮助自己支付1元钱助力，被成功助力后用户可获得兑换的奖品。</li>
        <li>活动奖品数量有限，先到先得。用户在活动中仅可支付一次，即自己支付或帮好友支付一次。</li>
        <li>用户在本活动不可使用优惠券购买活动奖品，奖品配送地区不包括港澳台地区，请谅解。</li>
      </ol>
    </div>
  </div>
</body>
</html>