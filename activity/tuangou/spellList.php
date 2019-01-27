<!doctype html>
<html lang="en">
<head>
    <?php include("../comhead.php"); ?>
    <!-- 添加到主屏后的标题（iOS 6 新增） -->
    <meta name="apple-mobile-web-app-title" content="小麦购物-拼团">
    <title>拼团详情</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="sellD">
    <div class="shoplist">
        <a href="/index.php" class="d2">
            <img src="/images/proImg.png">
        </a>
        <div class="d3">
            <a href="/index.php" class="p1">MK休闲女士双肩背包可爱风格夏欢的就隐形的舒适柔软的丢鸡包包MK休闲女士双肩背包可爱风格夏欢的就隐形的舒适柔软的丢鸡包包</a>
            <p class="gray"><span>颜色：黑色</span><span>尺码：xxl</span></p>
            <div class="numD">
                <div class="red">¥189</div>
                <div class="pinNum">
                    <span class="red">2</span>人团
                </div>
            </div>
        </div>
    </div>
    <!-- 参与拼团 -->
    <div class="joinTan joinSell">
        <div class="tanNr">
            <div class="dis">还差 <span class="red">1</span> 人，剩余 <span class="reTime">16:59:00</span> 结束</div>
            <div class="userD">
                <div class="userI userMaster">
                    <img src="images/user.png" alt="拼团者头像">
                </div>
                <div class="userI">
                    <img src="images/wait.png" alt="待拼团">
                </div>
            </div>
            <div class="btnD">
                <a href="" class="btn">邀请好友参团</a>
                <a href="" class="btn btn2">下载APP获得更多福利</a>
            </div>
        </div>
    </div>
    <!-- 商品推荐 -->
    <div class="recommend">
        <div class="tit"><b>商品推荐</b><span class="dis">你喜欢的都在这里，好物尽选</span></div>
        <?php
            $por = [
                [
                    'img' => 'images/pro1.png',
                    'name' => '手提包',
                    'dis' => 'Aj 13 ‘He Got Game’时隔5年 复刻形貌配色人气款情侣'
                ],
                [
                    'img' => 'images/pro2.png',
                    'name' => '多功能智能手表',
                    'dis' => 'Aj 13 ‘He Got Game’时隔5 年复刻形貌配'
                ],
                [
                    'img' => 'images/pro1.png',
                    'name' => '手提包',
                    'dis' => 'Aj 13 ‘He Got Game’时隔5年 复刻形貌配色人气款情侣'
                ],
                [
                    'img' => 'images/pro2.png',
                    'name' => '多功能智能手表',
                    'dis' => 'Aj 13 ‘He Got Game’时隔5 年复刻形貌配'
                ],
            ];
        ?>
        <div class="porlist">
            <?php foreach ($por as $k => $v){ ?>
            <a href="">
                <div class="imgD"><img src="<?php echo $v['img']?>" alt="<?php echo $v['name']?>"></div>
                <div class="name"><?php echo $v['name']?></div>
                <div class="dis"><?php echo $v['dis']?></div>
            </a>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>