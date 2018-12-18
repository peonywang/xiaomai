<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- 360 使用Google Chrome Frame -->
    <meta name="renderer" content="webkit">
    <!-- 优先使用 IE 最新版本和 Chrome -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!-- 关闭chrome浏览器下翻译插件 -->
    <meta name="google" value="notranslate"/>
    <!-- 百度禁止转码 -->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <!-- SEO 优化 -->
    <meta name="keywords" content="小麦">
    <meta name="description" content="小麦购物">
    <meta name="author" content="Peony Wang,fhjl1989@163.com">
    <!-- 移动设备添加 viewport -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <script src="js/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>翻牌抽奖</title>
</head>
<body>
<div class="w750">
    <div class="banner">
        <img src="images/banner.jpg" alt="幸运大转盘" class="i1">
        <div class="guize">
            <span class="s1"><img src="images/guize.png" alt="抽中选中的奖品即可获得该图片所显示礼品"></span>
            <p>我的奖品</p>
        </div>
    </div>
    <?php
     $jiang = [
//         ['name' => "iPhoneX",        'src' => "images/iPhoneX.png"],
         ['name' => "Huawei Mate 20", 'src' => "images/huawei.png"],
         ['name' => "199.99大红包",   'src' => "images/199hongbao.png"],
         ['name' => "30元优惠券",     'src' => "images/30yhq.png"],
         ['name' => "20元优惠券",     'src' => "images/20yhq.png"],
         ['name' => "8.88元现金券",   'src' => "images/8xjq.png"],
         ['name' => "洗衣液",         'src' => "images/xiyiye.png"],
         ['name' => "餐巾纸",         'src' => "images/canjinzhi.png"],
         ['name' => "谢谢惠顾",   'src' => "images/xiexie.png"]
     ]
    ?>
    <div class="game">
        <div class="game_tit clearfix">
            <img src="images/puke.png" alt="" class="puke">
            <span onclick="$(rule).show()">查看活动规则</span>
        </div>
        <div class="hezi">
            <img src="images/deng.png" alt="" class="zmd">
            <img src="images/deng2.png" alt="" class="zmd2">
            <ul class="clearfix" id="youxiqu">
                <?php foreach ($jiang as $k => $v){
                    if($k == 4){ ?>
                        <li class="kaishi"><img src="images/kaishi.png" alt="开始" id="begin"></li>
                        <li><img src="<?php echo $v['src']; ?>" alt="<?php echo $v['name']; ?>"></li>
                    <?php }else{ ?>
                    <li><img src="<?php echo $v['src']; ?>" alt="<?php echo $v['name']; ?>"></li>
                <?php }} ?>
            </ul>
        </div>
    </div>
    <div class="chance"><span>今日还剩<b><?php $chance = 1;echo $chance; ?></b>机会</span></div>
    <!--其他人中奖信息-->
    <div class="gun">
        <p class="p1"></p>
        <p class="p4">看看别人都翻到了什么</p>
        <ul class="p6">
            <div id="p6">
                <li><span>130****0796</span><span class="sp">翻到了2%加息劵</span></li>
                <li><span>130****0796</span><span class="sp">翻到了2%加息劵</span></li>
                <li><span>130****0796</span><span class="sp">翻到了2%加息劵</span></li>
                <li><span>130****0796</span><span class="sp">翻到了2%加息劵</span></li>
                <li><span>130****0796</span><span class="sp">翻到了2%加息劵</span></li>
            </div>
            <div class="zan" style="display:none">
                暂无记录
            </div>
        </ul>
        <p class="p5"></p>
    </div>
    <h4>活动最终解释权归光合种子所有</h4>
</div>
<!-- 规则 -->
<div class="tan shuangTan" id="rule" style="display:none;">
    <h2>活动规则</h2>
    <div class="nrk">
        <div class="nr">
            <div class="nrText">
                <h3>▼我们的礼品：</h3>
                <p>iPhoneX、Huawei Mate 20、199.99大红包、30元优惠券、20元优惠券、8.88元现金券、洗衣液、餐巾纸、谢谢惠顾</p>

                <h3>▼如何获得抽奖机会：</h3>
                <ol>
                    <li>1、下载小麦APP</li>
                    <li>2、每天用户可免费获得一次抽奖机会，分享到朋友圈可在免费可再获得抽奖机会！</li>
                    <li>3、邀请好友下载APP增加一次抽奖机会</li>
                </ol>

                <h3>▼抽奖规则：</h3>
                <ol>
                    <li>1.每个九宫格每轮抽奖只能翻动<span>5</span>张，一轮中<span>同时翻出3张相同礼品图片</span>即可获得该礼品。</li>
                    <li>2.客服人员会在<span>获奖后三个工作日</span>内联系获奖用户确定获奖信息并及时安排奖品发放事宜。</li>
                </ol>
            </div>
        </div>
    </div>
    <p class="btn"><img src="images/btn.png" alt="关闭" class="close" width="35" height="35"></p>
</div>
<!-- 中奖记录 -->
<div class="tan shuangTan shuangTan2" id="prize" style="display:none;">
    <h2>中奖记录</h2>
    <div class="nrk" style="width:76%;margin:0 12%">
        <div class="nr">
            <div class="nrText">
                <div class="juan1">
                    <div class="left">
                        <p>2%加息劵</p>
                        <p>已使用</p>
                    </div>
                    <div class="right">已发放</div>
                </div>
                <div class="juan1">
                    <div class="left">
                        <p>2%加息劵</p>
                        <p><a href="">立即使用 〉</a></p>
                    </div>
                    <div class="right">已发放</div>
                </div>
                <div class="juan1">
                    <div class="left">
                        <p>iPhone7plus</p>
                        <p>3个工作日内奖与您联系</p>
                    </div>
                    <div class="right">待发放</div>
                </div>
                <div class="juan1">
                    <div class="left">
                        <p>抽奖码：第1组63</p>
                        <p>关注微信公众号</p>
                    </div>
                    <div class="right">待抽奖</div>
                </div>
            </div>
        </div>
    </div>
    <p class="btn"><img src="images/btn.png" alt="关闭" class="close" width="35" height="35"></p>
</div>
<!-- 中奖弹窗-->
<div class="tan shuangTan winningTan" id="winningTan" style="display: none">
    <h2>哇塞！恭喜您</h2>
    <div class="nrk" style="width:76%;margin:0 12%">
        <div class="nr">
            <div class="nrText t_cent">
                <img class="tit" src="images/zjtit.png" alt="恭喜您中奖了">
                <p class="p1">抽中奖品：<span class="red" id="mywintext"></span></p>
                <p class="p2">分享活动可获得一次抽奖机会</p>
                <div class="btnD"><a href="">去兑换</a><a href="">去分享</a></div>
            </div>
        </div>
    </div>
    <p class="btn"><img src="images/btn.png" alt="关闭" class="close" width="35" height="35"></p>
</div>
<script>
    //游戏规则


    var youxi = $("#youxiqu");// 游戏区
    var winningTan = $("#winningTan");//中奖弹窗
    // 判断机会
    var chance = <?php echo $chance; ?>;
    // 奖品及概率
    var charsTxt =[<?php foreach ($jiang as $k => $v){echo '"'.$v['name'].'",';} ?>];   // 奖品名称
    //var imgUrl = [<?php foreach ($jiang as $k => $v){echo '"'.$v['src'].'",';} ?>];     // 奖品图片
    var charsNum = [0,0,10,14,2,2,2,70]; //奖品概率
    // 设置概率数组及随机数
    var chars = [];
    var suijiNum;
    chars[0] =  charsNum[0];
    for(i = 1; i < charsNum.length; i++){
        chars[i] =  chars[i-1] + charsNum[i];
    }
    // 获取随机数
    function suiji() {
        suijiNum = Math.round(Math.random()*(chars[charsNum.length-1]));
        for(i=0;i<charsNum.length;i++){
            if(suijiNum<chars[i]){
                return i;
                break;
            }
        };
    }
    // 奖品转动动画
    var indexs = [0,1,2,5,8,7,6,3];//奖品li索引

    function donghua(fre,num,callback){ //fre 频率,中奖前转几次; num 中奖单元;
        var time = 100;
        var fre = fre?fre:2;
        var i = 0;
        function zhuanFn() {
            $("li",youxi).eq(indexs[i]).addClass("act").siblings(".act").removeClass("act");
            // 判断是否继续转
            if(fre > 0){
                if (i == 7){i = 0;fre--;time = time + 50;clearInterval(zhuan);zhuan = setInterval(zhuanFn,time);}
                else{i++;}
            }else{
                i++;
                console.log(fre,i);
                if (i == (num + 1)){
                    clearInterval(zhuan);
                    setTimeout(callback,1000);
                }
            }
        }
        var zhuan = setInterval(zhuanFn,time);
    }


    $(function () {
        $("#begin").click(function () {
            if(chance <= 0){
                console.log("没机会了");
                $(".chance b").text(0);
            }else{
                chance--;
                $(".chance b").text(chance);
                var jiangNo = suiji();
                console.log(charsTxt[jiangNo]);
                var num = 0;//需要跳几步
                switch (jiangNo){ //suiji() 奖品索引
                    case 0: num = 0;break;
                    case 1: num = 1;break;
                    case 2: num = 2;break;
                    case 3: num = 7;break;
                    case 4: num = 3;break;
                    case 5: num = 6;break;
                    case 6: num = 5;break;
                    case 7: num = 4;break;
                    default: break;
                }
                donghua(3,num,function () {
                    if(jiangNo<7){
                        $("#mywintext").html(charsTxt[jiangNo]);
                        winningTan.show();
                    }else{
                        $("#mywintext").html(charsTxt[jiangNo]);
                        winningTan.show();
                    }
                });
            }
        })
    })
//    var chance = 9;
//    var canChance = 5;
//    var useChance = 0;
//    var surplus = chance - canChance;
//    //设置几率及相应图片文字
//    var charsNum = [0,0,0,10,14,2,2,2,70];
//    //奖品数量
//    var jiangpin = charsNum.length;
//    var jiangpinIndex = jiangpin;//对应索引
//    var charsSum = 0;
////    console.log(jiangpinIndex);
//    for(var i = 0; i < jiangpin; i++){charsSum += charsNum[i];}
//    var chars = [];
//    //一等奖初次中奖概率
//    var firstJiangpin = 0.3;
//    //设置概率数组
//    function setChars(num){
//        chars[0]= charsSum*num/(1-num);
//        for(i = 1; i < jiangpin; i++){
//            chars[i] =  chars[i-1] + charsNum[i];
//            console.log(chars[i]);
//        }
//    }
//    //概率组
//    setChars(firstJiangpin);
//    // 对应索引的文字及图片
//    var charsTxt =[<?php //foreach ($jiang as $k => $v){echo '"'.$v['name'].'",';} ?>//];
//    var imgUrl = [<?php //foreach ($jiang as $k => $v){echo '"'.$v['src'].'",';} ?>//]
//    //初始化中奖次数
//    var caseNo = [];
//    for(i=0;i<jiangpin;i++){
//        caseNo.push(0);
//    };
//
//    //定义奖品等级变量
//    var jiangNo;
//    var kuaizhong = false;//是否快中奖变量
//    var kuaizhongNo;//快中奖索引
//    var zhongjiang = false;//是否中奖了
//    var failTan = $("#noWinningTan");
//
//    //初始化
//    var fanpaiLi;//点击模块
//    var bgImgEven = "";//背景模块
//    var jiangpinEven = "";//奖品模块
//    var open = "";//点开状态
//    var openClass = "";//点开状态类名
//    var on = "";//牌可点击状态
//    var onClass = "";//牌可点击状态类名
//    var suiji;
//    var winningTan = $("#winningTan");

    $(function () {
        //游戏开始按钮
//        $("#begin").click(function(){
//            $(this).attr("src","images/anxia.png");
//            $(".zmd,.zmd2").css("animation-duration","0.5s");
//            var beginHtml = '';
//            var youxiLiHtml = '<li class="on"> <div class="d1"> <img src="images/weixuanzhong.jpg"> </div> <div class="d2"> <img src=""> </div> </li>';
//            // var youxiLiHtml2 = '<li class="on mg0"> <div class="d1"> <img src="images/weixuanzhong.jpg"> </div> <div class="d2"> <img src=""> </div> </li>';
//            for(i = 0; i < 9; i++){
//                beginHtml = beginHtml + youxiLiHtml;
//            }
//            $("#youxiqu").delay(100).fadeOut(function(){
//                $(this).html(beginHtml);
//                //初始化
//                fanpaiLi = $("#youxiqu li.on");//点击模块
//                bgImgEven = ".d1 img";//背景模块
//                jiangpinEven = ".d2 img";//奖品模块
//                open = ".open";//点开状态
//                openClass = "open";//点开状态类名
//                on = ".on";//牌可点击状态
//                onClass = "on";//牌可点击状态类名
//                // var chanceD = $("#chance span");//机会显示框
//            }).delay(200).fadeIn(function(){
//                //记录已翻开的数据
//                function jiluNo(i){
//                    caseNo[i]++;
//                    if(caseNo[0]>0){
//                        setChars(0);
//                        chars[0] = -1;
//                    }
//                    if(caseNo[i]==2){
//                        kuaizhong = true;
//                        kuaizhongNo = i;
//                    }
//                }
//
//                //判断是否中奖
//                function panduan(){
//                    for(i=0;i<jiangpin;i++){
//                        if(caseNo[i]==3){
//                            $("#mywintext").html(charsTxt[i]);
//                            winningTan.show();
//                            console.log('中奖了')
//                            caseNo[i]=0;
//                            zhongjiang = true;
//                            //document.location.href="zhong.php"//中奖跳转页面
//                        }
//                    }
//                }
//
//                }
//
//                //点击翻牌
//                fanpaiLi.click(function() {
//                    var _this = $(this);
//                    var bgImg = $(bgImgEven,_this);//背景img
//                    var jiangpinImg = $(jiangpinEven,_this);//奖品img
//
//
//                    if(!_this.is(open)){
//                        if(_this.is('.on')){
//                            fanpaiLi.removeClass('on');
//                            chance--;
//                            useChance++;
//                            _this.addClass(openClass);
//
//
//
//                        }
//                    }
//                });
//            });
//        });
        //关闭弹窗
        $(".close").click(function () {
            $(this).parents(".tan").hide();
        })
    })

</script>
</body>
</html>