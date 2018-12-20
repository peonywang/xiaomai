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
    <title>翻牌抽奖</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="js/mobileSelect/mobileSelect.css">
    <script src="js/mobileSelect/mobileSelect.js"></script>
</head>
<body>
<div class="w750">
    <div class="banner">
        <img src="images/banner.jpg" alt="幸运大转盘" class="i1">
        <div class="guize">
            <span class="s1"><img src="images/guize.png" alt="抽中选中的奖品即可获得该图片所显示礼品"></span>
            <p onclick="$(prize).show();">我的奖品</p>
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
         ['name' => "抽纸",         'src' => "images/canjinzhi.png"],
         ['name' => "谢谢惠顾",       'src' => "images/xiexie.png"]
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
        <?php
        // 模拟中奖信息
        $LotteryLog = [
            ['usertel'=>'130****0796','jiang'=>'30元优惠券'],
            ['usertel'=>'130****0796','jiang'=>'20元优惠券'],
            ['usertel'=>'130****0796','jiang'=>'8.88元现金券'],
            ['usertel'=>'130****0796','jiang'=>'洗衣液'],
            ['usertel'=>'130****0796','jiang'=>'抽纸'],
        ]
        ?>

        <?php if(count(@$LotteryLog) > 0 && count(@$LotteryLog) < 5) { ?>
            <ul class="p6">
                <?php foreach (@$LotteryLog as $k => $v) { ?>
                    <li>
                        <span><?php echo $v['usertel']; ?></span>
                        <span><?php echo $v['jiang']; ?></span>
                    </li>
                <?php } ?>
            </ul>
        <?php }elseif(count(@$LotteryLog) >= 5){ ?>
            <ul class="p6" id="winningRecordUl">
                <?php foreach (@$LotteryLog as $k => $v) { ?>
                    <li>
                        <span><?php echo $v['usertel']; ?></span>
                        <span><?php echo $v['jiang']; ?></span>
                    </li>
                <?php } ?>
            </ul>
            <script src="js/MSClass.js"></script>
            <script>
            $(function(){
                $("#winningRecordUl").css({"width":"94vw","height":'201px'});
                var w = parseInt($("#winningRecordUl").css("width"))-15;
                new Marquee("winningRecordUl",0,1,w,190,50,0,1000,52);
            })
            </script>
        <?php }else{ ?>
            <ul class="p6">
                <li class="zan">暂无记录</li>
            </ul>
        <?php } ?>
        <p class="p5"></p>
    </div>
    <h4>活动最终解释权归小麦商城所有</h4>
</div>
<!-- 规则 -->
<div class="tan shuangTan" id="rule" style="display:none;">
    <h2>活动规则</h2>
    <div class="nrk">
        <div class="nr">
            <div class="nrText">
                <h3>▼我们的礼品：</h3>
                <p>iPhoneX、Huawei Mate 20、199.99大红包、30元优惠券、20元优惠券、8.88元现金券、洗衣液、抽纸、谢谢惠顾</p>

                <h3>▼如何获得抽奖机会：</h3>
                <ol>
                    <li>1、下载小麦APP</li>
                    <li>2、每天用户可免费获得一次抽奖机会，分享到朋友圈可在免费可再获得抽奖机会！</li>
                    <li>3、邀请好友下载APP增加一次抽奖机会</li>
                </ol>

                <h3>▼抽奖规则：</h3>
                <ol>
                    <li>1.每个九宫格每轮抽奖只能抽中一张</li>
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
                        <p>20元代金券</p>
                        <p>全场通用</p>
                    </div>
                    <div class="right">领取</div>
                </div>
                <div class="juan1 act">
                    <div class="left">
                        <p>20元代金券</p>
                        <p>请到"我的优惠券"里查看</p>
                    </div>
                    <div class="right">领取</div>
                </div>
                <div class="juan1">
                    <div class="left">
                        <p>8.88元红包</p>
                        <p>可提现</p>
                    </div>
                    <div class="right">已领取</div>
                </div>
                <div class="juan1 act">
                    <div class="left">
                        <p>8.88元红包</p>
                        <p>请到"我的钱包"里提现</p>
                    </div>
                    <div class="right">已领取</div>
                </div>
                <div class="juan1">
                    <div class="left">
                        <p>洗衣液</p>
                        <p>填写地址领取</p>
                    </div>
                    <div class="right" onclick="$(addressTan).show();">领取</a></div>
                </div>
                <div class="juan1 act">
                    <div class="left">
                        <p>洗衣液</p>
                        <p>请到"我的订单"里查看</p>
                    </div>
                    <div class="right">领取</div>
                </div>
            </div>
        </div>
    </div>
    <p class="btn"><img src="images/btn.png" alt="关闭" class="close" width="35" height="35"></p>
</div>
<!-- 中奖弹窗 -->
<div class="tan shuangTan winningTan" id="winningTan" style="display: none">
    <h2>哇塞！恭喜您</h2>
    <div class="nrk" style="width:76%;margin:0 12%">
        <div class="nr">
            <div class="nrText t_cent">
                <img class="tit" src="images/zjtit.png" alt="恭喜您中奖了">
                <p class="p1">抽中奖品：<span class="red" id="mywintext"></span></p>
                <p class="p2">分享活动可获得一次抽奖机会</p>
                <div class="btnD"></div>
            </div>
        </div>
    </div>
    <p class="btn"><img src="images/btn.png" alt="关闭" class="close" width="35" height="35"></p>
</div>
<!-- 地址填写 -->
<div class="tan shuangTan address" id="addressTan" style="display:none;">
    <h2>填写收货地址</h2>
    <div class="nrk">
        <div class="nr">
            <div class="nrText">
                <ul class="dress">
                    <li>
                        <label>
                            <span class="s1">收货人</span>
                            <input type="text" placeholder="填写您的姓名">
                        </label>
                    </li>
                    <li>
                        <label>
                            <span class="s1">手机号</span>
                            <input type="tel" placeholder="填写您的手机号">
                        </label>
                    </li>
                    <li>
                        <label>
                            <span class="s1">所在区域</span>
                            <div class="s2" id="trigger4">选择所在区域</div>
                        </label>
                    </li>
                    <li>
                        <label>
                            <span class="s1">详细地址</span>
                            <input type="textarea" placeholder="填写您的详细地址">
                        </label>
                    </li>
                </ul>
                <div class="btnD">
                    <a href="">提交</a>
                </div>
                <p class="p2 t_cent">请检查好您的地址</p>
            </div>
        </div>
    </div>
    <p class="btn"><img src="images/btn.png" alt="关闭" class="close" width="35" height="35"></p>
</div>
<script>
    //游戏规则
    var youxi = $("#youxiqu");// 游戏区
    var winningTan = $("#winningTan");//中奖弹窗
    var winningTanTxt = $("#mywintext");//中奖文字
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
                if (i == (num + 1)){
                    clearInterval(zhuan);
                    setTimeout(callback,1000);
                }
            }
        }
        var zhuan = setInterval(zhuanFn,time);
    }

    $(function () {
        //开始游戏
        $("#begin").click(function () {
            var jiangBtnD = '';
            var titTxt = '';
            var titImg = '';
            if(chance <= 0){
                $(".chance b").text(0);
                titTxt = '机会用完了!';
                titImg = 'images/jhyw.png';
                jiangBtnD = '<a href="javascript:;" onclick="$(prize).show();winningTan.hide();">我的奖品</a><a href="">去分享</a>';

                $("h2",winningTan).text(titTxt);
                $(".tit",winningTan).attr({"src":titImg,"alt":titTxt});
                $(".btnD",winningTan).html(jiangBtnD);
                $(".p1",winningTan).html('休息一下吧<span class="red" id="mywintext"></span>')
                winningTan.show();
            }else{
                chance--;
                $(".chance b").text(chance);
                var jiangNo = suiji();
                var num = 0;//需要跳几步
                switch (jiangNo){ //suiji() 奖品索引
                    case 0:
                        num = 0;
                        titTxt='哇塞！恭喜您';break;//手机
                    case 1:
                        num = 1;
                        titTxt='哇塞！恭喜您';break;//199红包
                    case 2:
                        num = 2;
                        titTxt='哇塞！恭喜您';
                        titImg='images/zjtit.png';
                        jiangBtnD='<a href="">去兑换</a><a href="">去分享</a>';break;//30元优惠券
                    case 3:
                        num = 7;
                        titTxt='哇塞！恭喜您';
                        titImg='images/zjtit.png';
                        jiangBtnD='<a href="">去兑换</a><a href="">去分享</a>';break;//20元优惠券
                    case 4:
                        num = 3;
                        titTxt='哇塞！恭喜您';
                        titImg='images/zjtit.png';
                        jiangBtnD='<a href="">去兑换</a><a href="">去分享</a>';break;//8.8红包
                    case 5:
                        num = 6;
                        titTxt='哇塞！恭喜您';
                        titImg='images/zjtit.png';
                        jiangBtnD='<a href="">去兑换</a><a href="">去分享</a>';break;//洗衣液
                    case 6:
                        num = 5;
                        titTxt='哇塞！恭喜您';
                        titImg='images/zjtit.png';
                        jiangBtnD='<a href="">去兑换</a><a href="">去分享</a>';break;//抽纸
                    case 7:
                        num = 4;
                        titTxt='呜呜!好难瘦';
                        titImg='images/wzjtit.png';
                        jiangBtnD='<a href="javascript:;" onclick="$(prize).show();winningTan.hide();">我的奖品</a><a href="">去分享</a>';break;//谢谢
                    default: break;
                }
                donghua(3,num,function () {
                    $("h2",winningTan).text(titTxt);
                    $(".tit",winningTan).attr({"src":titImg,"alt":titTxt});
                    $(".btnD",winningTan).html(jiangBtnD);
                    winningTanTxt.html(charsTxt[jiangNo]);
                    winningTan.show();
                });
            }
        });
        //关闭弹窗
        $(".close").click(function () {
            $(this).parents(".tan").hide();
        })
        //地址区域获取
        var mobileSelect = new MobileSelect({
            trigger: '#trigger4',
            title: '所在区域',
            wheels: [
                {data:[
                    {
                        id:'1',
                        value:'省',
                        childs:[
                            {
                                id:'A1',value:'市',childs:[
                                {id:'B1',value:'区'}
                            ]
                            },
                        ]
                    }
                ]},
            ],
            callback:function(indexArr, data){
                mobileSelect.position=[indexArr];
            }

        });

        $.ajax({
            url: 'js/city.json',
            type: 'GET',
            dataType: 'json',
        })
            .done(function(data) {
                var city = [];
                for(var i=0; i<data.length; i++){
                    city[i] = {id:i+1, value:data[i]['name'],childs:[]}
                    for(var i2=0; i2<data[i]['city'].length; i2++){
                        city[i]['childs'][i2] = {id:1,value:data[i]['city'][i2]['name'],childs:[]};
                        for(var i3=0; i3<data[i]['city'][i2]["area"].length; i3++){
                            city[i]['childs'][i2]['childs'][i3] = {id:i3+1,value:data[i]['city'][i2]["area"][i3]}
                        }
                    }
                }
                mobileSelect.updateWheels(city);
                // mobileSelect.updateWheels(data);

            })
            .fail(function() {
                console.log("error");
            })
    });

</script>
</body>
</html>