<!doctype html>
<html lang="en">
<head>
    <?php include("comhead.php"); ?>
    <title>分享</title>
    <link rel="stylesheet" href="../../com.css">
    <link rel="stylesheet" href="../../css/pro.css">
    <link rel="stylesheet" href="css/com.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
//根据参数确定身份
$cur_q = parse_url($_SERVER["REQUEST_URI"], PHP_URL_QUERY);
parse_str($cur_q, $myArray);
$role = intval($myArray["role"]); //role 1.发起者；2.被邀请的好友；
?>
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
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <li>
                        <span class="s1">未获得 +</span>
                    </li>
                <?php } ?>
            </ul>
            <p class="p1">TA支付后，你将获赠兑换权益1份，满6份可领取</p>
            <?php if ($role == 1) { ?>
                <div class="btnD"><a href="javascript:;" class="btn">邀请好友帮我支付1元钱</a></div>
            <?php } elseif ($role == 2) { ?>
                <div class="btnD"><a href="javascript:;" class="btn">支付一元，立即帮忙抢</a></div>
            <?php } ?>

            <!-- 方便后台开发使用入口 -->
            <p class="p1">
                前端展示入口
                <?php if ($role == 1) { ?>
                    <a href="share.php?role=2"><u>好友进入页面(微信端)</u></a>
                <?php } elseif ($role == 2) { ?>
                    <a href="share.php?role=1"><u>返回发起人页面(微信端)</u></a>
                <?php } ?>
            </p>
            <!-- end 需删除 方便后台开发使用入口 -->
        </div>
        <h2><img src="images/tit.jpg" alt="热卖推荐专区"></h2>
        <ul class="zhuanqu">
            <?php for ($i = 0; $i < 2; $i++) { ?>
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
<!-- 好友进入的页面-->
<?php if ($role == 2) { ?>
    <!-- 登陆框 -->
    <div class="tan loginD" id="loginTan">
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
    <script>
        // 点击弹窗其他部分隐藏弹窗
        $(".tan").click(function () {
            $(this).hide()
        });
        $(".tan .tanNr").click(function (event) {
            event.stopPropagation();
        });
        $(".close").click(function () {
            $(this).parents(".tan").hide();
        })
    </script>
<?php } ?>
</body>
</html>