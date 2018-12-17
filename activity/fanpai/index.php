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

<!--    "恭喜您获得iPhoneX!",-->
<!--    "恭喜您获得",-->
<!--    "恭喜您获得",-->
<!--    "恭喜您获得",-->
<!--    "恭喜您获得",-->
<!--    "恭喜您获得",-->
<!--    "恭喜您获得",-->
<!--    "恭喜您获得",-->
<!--    ""-->
    <?php
     $jiang = [
         ['name' => "iPhoneX",        'src' => "images/iPhoneX.png"],
         ['name' => "Huawei Mate 20", 'src' => "images/huawei.png"],
         ['name' => "199.99大红包",   'src' => "images/199hongbao.png"],
         ['name' => "30元优惠券",     'src' => "images/30yhq.png"],
         ['name' => "20元优惠券",     'src' => "images/20yhq.png"],
         ['name' => "8.88元现金券",   'src' => "images/8xjq.png"],
         ['name' => "洗衣液",         'src' => "images/xiyiye.png"],
         ['name' => "餐巾纸",         'src' => "images/canjinzhi.png"],
//         ['name' => "谢谢您的参与",   'src' => "images/xiexie.png"]
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
    <div class="change"><span>今日还剩<b>5</b>机会</span></div>
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
                <p>iPhoneX、Huawei Mate 20、199.99大红包、30元优惠券、20元优惠券、8.88元现金券、洗衣液、餐巾纸、谢谢参与</p>

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
    <p class="btn"><img src="images/btn.png" alt="" width="35" height="35" class="close"></p>
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
    <p class="btn"><img src="images/btn.png" alt="" width="35" height="35"></p>
</div>
<script>
    //游戏规则
    //判断机会
    var chance = 9;
    var canChance = 5;
    var useChance = 0;
    var surplus = chance - canChance;
    //设置几率及相应图片文字
    var charsNum = [0,0,0,10,14,2,2,2,70];
    //奖品数量
    var jiangpin = charsNum.length;
    var jiangpinIndex = jiangpin - 1;//对应索引
    var charsSum = 0;
    for(var i = 0; i < jiangpin; i++){charsSum += charsNum[i];}
    var chars = [];
    //一等奖初次中奖概率
    var firstJiangpin = 0.5;
    //设置概率数组
    function setChars(num){
        chars[0]= charsSum*num/(1-num);
        for(i = 1; i < jiangpin; i++){
            chars[i] =  chars[i-1] + charsNum[i];
        }
    }
    //概率组
    setChars(firstJiangpin);
    // 对应索引的文字及图片
    var charsTxt =[<?php foreach ($jiang as $k => $v){echo '"'.$v['name'].'",';} ?>];
    var imgUrl = [<?php foreach ($jiang as $k => $v){echo '"'.$v['src'].'",';} ?>]
    //初始化中奖次数
    var caseNo = [];
    for(i=0;i<jiangpin;i++){
        caseNo.push(0);
    };

    //定义奖品等级变量
    var jiangNo;
    var kuaizhong = false;//是否快中奖变量
    var kuaizhongNo;//快中奖索引
    var zhongjiang = false;//是否中奖了
    var failTan = $("#noWinningTan");

    //初始化
    var fanpaiLi;//点击模块
    var bgImgEven = "";//背景模块
    var jiangpinEven = "";//奖品模块
    var open = "";//点开状态
    var openClass = "";//点开状态类名
    var on = "";//牌可点击状态
    var onClass = "";//牌可点击状态类名
    var suiji;
    var winningTan = $("#winningTan");

    $(function () {
        //游戏开始按钮
        $("#begin").click(function(){
            $(this).attr("src","images/anxia.png");
            $(".zmd,.zmd2").css("animation-duration","0.5s");
            var beginHtml = '';
            var youxiLiHtml = '<li class="on"> <div class="d1"> <img src="imagesbak/weixuanzhong.jpg"> </div> <div class="d2"> <img src=""> </div> </li>';
            var youxiLiHtml2 = '<li class="on mg0"> <div class="d1"> <img src="imagesbak/weixuanzhong.jpg"> </div> <div class="d2"> <img src=""> </div> </li>';
            for(i = 0; i < 9; i++){
                if(i == 0 || i == 3 || i == 6){
                    beginHtml = beginHtml + youxiLiHtml2;
                }else{
                    beginHtml = beginHtml + youxiLiHtml;
                }
            }
            $("#youxiqu").delay(100).fadeOut(function(){
                $(this).html(beginHtml);
                //初始化
                fanpaiLi = $("#youxiqu li.on");//点击模块
                bgImgEven = ".d1 img";//背景模块
                jiangpinEven = ".d2 img";//奖品模块
                open = ".open";//点开状态
                openClass = "open";//点开状态类名
                on = ".on";//牌可点击状态
                onClass = "on";//牌可点击状态类名
                // var chanceD = $("#chance span");//机会显示框
            }).delay(200).fadeIn(function(){
                //记录已翻开的数据
                function jiluNo(i){
                    caseNo[i]++;
                    if(caseNo[0]>0){
                        setChars(0);
                        chars[0] = -1;
                    }
                    if(caseNo[i]==2){
                        kuaizhong = true;
                        kuaizhongNo = i;
                    }
                }

                //判断是否中奖
                function panduan(){
                    for(i=0;i<jiangpin;i++){
                        if(caseNo[i]==3){
                            winningTan.show();
                            console.log('中奖了')
                            caseNo[i]=0;
                            zhongjiang = true;
                            //document.location.href="zhong.php"//中奖跳转页面
                        }
                    }
                }

                //获取随机数
                function suijiNum(){
                    suiji = Math.round(Math.random()*(chars[jiangpinIndex]-1));
                    for(i=0;i<jiangpin;i++){
                        if(suiji<chars[i]){
                            jiangNo = i;
                            break;
                        }
                    };
                }

                //翻牌动画
                function fanpai(bgImg,jiangpinImg,_thisjiangNo){
                    bgImg.animate({width:0},200,"swing",function(){
                        bgImg.parents(".d1").css("height",0).siblings(".d2").css("height","auto");
                        // 记录已翻开的数据
                        jiluNo(_thisjiangNo);
                        jiangpinImg.attr("src",imgUrl[_thisjiangNo]).show().animate({width:"100%"},100,"swing",function(){
                            panduan();
                            fanpaiLi.addClass('on');
                            if(useChance == canChance && !zhongjiang){
                                for (var i = 0; i < surplus; i++) {
                                    chance--;
                                    console.log(i);
                                    for(var j = 0; j < 9; j++){//9宫格
                                        suijiNum();
                                        if(!fanpaiLi.eq(j).is(open)){
                                            var _thisOther = fanpaiLi.eq(j);
                                            var bgImgOther = $(bgImgEven,_thisOther);

                                            var jiangpinImgOther = $(jiangpinEven,_thisOther);
                                            _thisOther.addClass(openClass);
                                            jiangpinImgOther.attr("src",imgUrl[jiangNo]).css("width","100%").delay("500").fadeIn();
                                            bgImgOther.delay("500").fadeOut();
                                            failTan.delay("2000").fadeIn();

                                            console.log("未中奖")
                                            //document.location.href="zhong.php"//未中奖跳转页面

                                            break;
                                        }
                                    }
                                };
                            }
                        });
                        // chanceD.html(chance);
                    })
                }

                //点击翻牌
                fanpaiLi.click(function() {
                    var _this = $(this);
                    var bgImg = $(bgImgEven,_this);//背景img
                    var jiangpinImg = $(jiangpinEven,_this);//奖品img


                    if(!_this.is(open)){
                        if(_this.is('.on')){
                            fanpaiLi.removeClass('on');
                            chance--;
                            useChance++;
                            _this.addClass(openClass);


                            //点击3次后仍未出现相同时
                            if(useChance == 4 && !kuaizhong){
                                var already = [];
                                for(i=0;i<jiangpin;i++){
                                    if(caseNo[i]>0){
                                        already.push(i);
                                    }
                                }
                                console.log("没一样的了:"+already);
                                suiji = Math.round(Math.random()*(already.length-1));
                                jiangNo = already[suiji];
                                fanpai(bgImg,jiangpinImg,jiangNo);
                            }else{
                                //获得几率内的随机数
                                suijiNum();
                                fanpai(bgImg,jiangpinImg,jiangNo);
                            }
                        }
                    }
                });
            });
        });
        //关闭弹窗
        $(".close").click(function () {
            $(this).parents(".tan").hide();
        })
    })

</script>
</body>
</html>