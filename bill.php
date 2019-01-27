<!doctype html>
<html lang="en">
<head>
  <?php include("comhead.php"); ?>
  <title>结算</title>
  <link rel="stylesheet" href="css/pro.css">
  <link rel="stylesheet" href="css/cart.css">
  <link rel="stylesheet" href="css/bill.css">
</head>
<body>
  <ul class="billD">
    <!-- 收货人信息 -->
    <li class="dress">
      <a href="address.php">
        <h1>收货人信息</h1>
        <p class="p1"><span class="name">李勇闯</span><span class="tel">176****0912</span></p>
        <p class="p1">北京市 大兴区 天宫院小区10号楼2单元502室</p>
      </a>
    </li>
    <!-- 订单信息 -->
    <li class="shoplist">
      <h2>订单信息</h2>
      <ul>
        <?php for ($i =0;$i<1;$i++){ ?>
        <li>
          <a href="index.php" class="d2">
            <img src="images/proImg.png">
          </a>
          <div class="d3">
            <a href="index.php" class="p1">MK休闲女士双肩背包可爱风格夏欢的就隐形的舒适柔软的丢鸡包包MK休闲女士双肩背包可爱风格夏欢的就隐形的舒适柔软的丢鸡包包</a>
            <p class="gray"><span>颜色：黑色</span><span>尺码：xxl</span></p>
            <div class="numD">
              <div class="red">¥189</div>
              <div class="chose">
                <span class="cz" data-type="sub">-</span>
                <input type="tel" value="1" name="num">
                <span class="cz" data-type="add">+</span>
              </div>
            </div>
          </div>
        </li>
        <?php } ?>
      </ul>
    </li>
    <!-- 共计 -->
    <li class="account">
      <ul>
        <li class="ob1">
          <span class="s1">优惠券</span>
          <a href="javascript:;" class="red" onclick="$(youhuiTan).show()">全场通用立减3元</a>
        </li>
        <li class="ob2">
          <span class="s1">配送方式</span>
          <span class="gray2">快递免运费</span>
        </li>
        <li class="ob3">
          <span class="s1">买家留言：</span>
          <input type="text" placeholder="请您填写内容">
        </li>
        <li class="total">
          <span class="gray">共1件商品 小计：</span>
          <span class="red rmb">180.00</span>
        </li>
      </ul>
    </li>
    <!-- 支付方式 -->
    <li class="payment">
      <h2>支付方式</h2>
      <div class="d1">
        <img class="i1" src="images/wechat.png" alt="微信支付">
        <div class="s1">
          <p class="p1">微信支付</p>
          <p class="gray2">推荐已在微信中绑定银行卡的用户使用</p>
        </div>
        <label><input type="checkbox" checked="checked"></label>
      </div>
    </li>
  </ul>
  <!-- 底部功能条 -->
  <div class="botT">
    <div class="d1"><img src="images/dunpai.png" alt="安全防护"></div>
    <div class="d2">
      <p class="p1">
        <b>实付款:</b>
        <span class="s1 red">
          <b class="rmb">180</b>
        </span>
        <span class="s2 red">免运费</span>
      </p>
      <p class="p2 gray">
        <span class="s1">1</span>件商品
        <span class="s2 rmb">189</span>
        <span class="minus"><span class="rmb">3</span></span>
        <span class="minus"><span class="rmb">3</span></span>
        <span class="minus"><span class="rmb">3</span></span>
        <span class="equal">180</span>
      </p>
    </div>
    <a href="activity/tuangou/spellList.php?role=1" class="a3">立即支付</a>
  </div>
  <!-- 优惠券弹窗 -->
  <div class="tan" id="youhuiTan">
    <div class="tanNr choseTan">
      <h2 class="tit">优惠券弹窗</h2>
      <div class="choseD">
        <div class="tit">领券</div>
        <ul class="yh red">
          <?php for ($i = 0;$i <2;$i++){ ?>
          <li>
            <div class="d1">
              <p class="p1">¥<b>10</b> 商品优惠券</p>
              <p class="p2">全场通用</p>
              <p class="p2">有效期 2018.11.01—2018.11.30</p>
            </div>
            <div class="d2">立即领取</div>
          </li>
          <?php } ?>
        </ul>
      </div>
      <div class="btnD"> <a href="javascript:;" onclick="$(youhuiTan).hide()" class="a1">完成</a> </div>
    </div>
  </div>
  <!-- 提示弹出 -->
  <div class="tishiT"><span class="d1">提示弹出</span></div>
  <script>
    // 领取优惠券
    $(function(){
      $(".choseTan ul.yh li").click(function () {
        if(!$(this).is(".ylq")){
          $(".tishiT .d1").text("恭喜您领取成功");
          $(".tishiT").show();
          setTimeout(function () {
            $(".tishiT").hide();
          },1000)
          $(this).addClass("ylq");
        }

      })
    })
  </script>
</body>
</html>
