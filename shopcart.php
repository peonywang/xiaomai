<!doctype html>
<html lang="en">
<head>
  <?php include("comhead.php"); ?>
  <!-- 添加到主屏后的标题（iOS 6 新增） -->
  <meta name="apple-mobile-web-app-title" content="小麦购物-购物车">
  <title>购物车</title>
  <link rel="stylesheet" href="css/cart.css">
</head>
<body>
  <div class="cartD">
    <div class="backD">
      <a href="javascript:history.back(-1);" class="back"></a>
      <span class="tit">购物车</span>
      <span class="numD">共<b>2</b>件宝贝</span>
    </div>
    <!-- 列表 -->
    <ul class="shoplist">
      <li class="null">
        <img src="images/null.png" alt="null">
        <p>亲，您的购物车还没有宝贝哦~</p>
      </li>
      <?php for ($i =0;$i<3;$i++){ ?>
      <li>
        <label class="d1">
          <input type="checkbox">
        </label>
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
        <span class="close"></span>
      </li>
      <?php } ?>

    </ul>
  </div>
  <!-- 底部功能条 -->
  <div class="botT">
    <label class="d1"><input type="checkbox">全选</label>
    <div class="d2">总计：<span class="red">300</span></div>
    <a href="bill.php" class="a3">结算</a>
  </div>
  <script>
    $(".shoplist .close").click(function () {
      $(this).parents("li").remove();
    })
  </script>
</body>
</html>