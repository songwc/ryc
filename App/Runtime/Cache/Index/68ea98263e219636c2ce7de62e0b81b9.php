<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta charset="utf-8">
        <title>如意币交易平台</title>
        <meta name="description" content="ruyicoin">
        <meta name="author" content="ruyicoin">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css" />
        <script type="text/javascript" src="__PUBLIC__/js/jquery.min.js">
        </script>
        <script type="text/javascript" src="__PUBLIC__/js/num.js">
        </script>
        <script type="text/javascript" src="__PUBLIC__js/raphael.js">
        </script>
        <script type="text/javascript" src="__PUBLIC__js/init.js">
        </script>
    </head>
    <body>
        <div class="header">
    <div class="topbar">
        <div class="wrap">
            <div class="fl">
                <span>The newest Purchasing Price:0 BTC</span>
            </div>
            <div class="fr">
                <span>Usable BTC:0.00000</span>
                <span>SC:0.00000</span>
                <span>Total Asset: 0.00000 (BitCoin)</span>
            </div>
        </div>
    </div>
    <div class="mainNav">
        <div class="wrap">
            <a href="__APP__">
                <div class="logo" title="ruyicoin">
                    如意币
                </div>
            </a>
            <div class="nav">
                <a href="__ROOT__">网站首页</a>
                <a href="__APP__/Index/Tc/Index">交易中心</a>
                <a href="__APP__/Index/Uc/Index">用户中心</a>
                <a href="__APP__/Index/News/Index">新闻中心</a>
                <a href="__APP__/Index/Help/Index">帮助中心</a>
            </div>
            <div class="qqlogin">
                <a href="http://www.jutaibi.com/qqconnect.php" style="display: block;">用qq账号登录</a>
            </div>
        </div>
    </div>
</div>

        <div class="container">
            <div class="wrap" style="position: relative;">
                <div id="content">
                    <div id="diagram">
                    </div>
                </div>
                <div class="get">
                    <div class="arc">
                        <span class="text">SandCoin</span>
                        <input type="hidden" class="percent" value="100" /><input type="hidden" class="color" value="#DEB21B" />
                    </div>
                </div>
                <div id="circle">
                    <h3>剩余量 </h3>
                    <h2><span id="ssum_x">10000000</span></h2>
                    <em id="span_a">个</em>
                </div>
                <div class="l_info">
                    <h1>Sandcoins are in the first round of panic purchasing…</h1>
                    <p>
                        <font>
                            2014/4/15,Sandcoins began to be subscribed. The subscription price was 0.01mBTC.
                        </font>
                    </p>
                    <p>
                        <font>
                            The initial open subscription of Sandcoin is 10,000,000
                        </font>
                    </p>
                    <p>
                        <font>
                            Every registered user is limited to 2000. Each user will be given 100 more after recommending another user
                        </font>
                    </p>
                    <p>
                        <span class="cRed">（Platform always buy-backs at the price of issuing price）</span>
                    </p>
                    <p>
                        <a href="Login.html" class="btn_R">现在认购</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="wrap">
                <div style="height:400px;">
                    <div class="table_list2 fl" style="width:600px;height:100%;">
                        <h2>最近交易 </h2>
                        <table id="list" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr id='fs'>
                                <th width="140">
                                    交易时间
                                </th>
                                <th>
                                    数量
                                </th>
                                <th>
                                    价格
                                </th>
                                <th>
                                    类型
                                </th>
                                <th>
                                    总额
                                </th>
                            </tr>
                        </table>
                    </div>
                    <div class="login_box fr" style="width:290px;height:100%;">
                        <h2>新闻公告</h2>
                        <ul class="news">
                            <?php if(is_array($news)): foreach($news as $key=>$v): ?><li>
                                <a href='__APP__/Index/News/NewsDetail/id/<?php echo ($v["id"]); ?>'><?php echo ($v["title"]); ?></a>
                                <span><?php echo ($v["createtime"]); ?></span><?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="c">
                </div>
            </div>
        </div>
        <div class="footr">
    <div class="foot_tbl">
        <table>
            <th>
                官方q群
            </th>
            <th>
                网站支持
            </th>
            <th>
                安全认证
            </th>
            <th>
                关于网站
            </th>
            <tr>
                <td width=150px;>
                    一群：2222222222
                    <br/>
                    一群：2222222222
                    <br/>
                    一群：2222222222
                    <br/>
                </td>
                <td width=150px;>
                                        管理：2222222222<br/>
										   技术：2222222222<br/>
										      财务：2222222222<br/>
                </td>
                <td width=150px;>
                        <img style="border: 0px; margin: 0px; padding: 0px;" src="https://seal.wosign.com/Signature/Profiles/Icon/CN/OV_tp1_cn.jpg">
					 
                </td>
                <td style="border:none; text-align:left;">
                   电话：4001231111<br/>
				   地址：湖南省长沙市枫林三路105号<br/>
				   备案：点击查询备案信息<br/>
				   法律支持：ddddd律师<br/>
                </td>
            </tr>
        </table>
    </div>
</div>

        <script>
            
            var n = 1;
            var str = '';
            var lastid = 0;
            function orderlist(){
                $.post('/Index/indexjson/', {
                    lastid: lastid
                }, function(date){
                    if (date.list) {
                        $(date.list).each(function(){
                            var type = this.type == 0 ? 'buy' : 'present';
                            str += "<tr class='lts l" + n + "' style='display:none'><td>" + this.email + "</td><td>" + this.snum + "</td><td>฿ " + this.sum + "</td><td>" + type + "</td><td>" + getLocalTime(new Date((this.addtime * 1000))) + "</td></tr>";
                            
                        })
                        $("#fs").after(str);
                        str = '';
                        $(".l" + n).show(1000);
                        $($(".lts")[7]).nextAll().remove();
                        n++;
                        lastid = date.lastid;
                        
                        $(".percent").val((date.coinsum / 10000000) * 100);
                        o.init();
                        $("#ssum_x").animateNumber(date.coinsum, {
                            easing: "easeInOutCirc",
                            duration: 1000,
                            floatStepDecimals: 0
                        });
                    }
                })
                
            }
            
            setInterval('orderlist()', 5000);
            orderlist();
            function getLocalTime(now){
            
                var hour = now.getHours();
                var minute = now.getMinutes();
                var second = now.getSeconds();
                hour = pad(hour, 2);
                minute = pad(minute, 2);
                second = pad(second, 2);
                return hour + ":" + minute + ":" + second;
            }
            
            function pad(num, n){
                var len = num.toString().length;
                while (len < n) {
                    num = "0" + num;
                    len++;
                }
                return num;
            }
            
            $(".btn_facebook").click(function(){
                alert('Open later!')
            });
            
            $('input[type="submit"]').click(function(){
            
                var uname = $("input[name='username']").val();
                var pwd = $("input[name='password']").val();
                if (!uname || !pwd) {
                    $("#status").css('color', 'red');
                    $("#status").text('The form error');
                    return;
                }
                $("#status").css('color', '');
                $("#status").text('Please wait....')
                $.post('/Login', {
                    username: uname,
                    password: pwd
                }, function(data){
                    if (data.status) {
                        window.location.href = data.url;
                    }
                    else {
                        $("#status").css('color', 'red');
                        $("#status").text('Invalid login or password');
                    }
                    
                })
                
            })
            
            function show_date_time(){
                window.setTimeout("show_date_time()", 43);
                BirthDay = new Date("2014/4/15");
                today = new Date();
                timeold = (BirthDay.getTime() - today.getTime());
                sectimeold = timeold / 1000
                secondsold = Math.floor(sectimeold);
                msPerDay = 24 * 60 * 60 * 1000
                e_daysold = timeold / msPerDay
                daysold = Math.floor(e_daysold);
                e_hrsold = (e_daysold - daysold) * 24;
                hrsold = Math.floor(e_hrsold);
                e_minsold = (e_hrsold - hrsold) * 60;
                minsold = Math.floor((e_hrsold - hrsold) * 60);
                e_seconds = (e_minsold - minsold) * 60;
                seconds = Math.floor((e_minsold - minsold) * 60);
                ms = e_seconds - seconds;
                ms = new String(ms)
                ms = ms.substr(2, 2);
                document.getElementById("span_a").innerHTML = daysold + " Day " + (hrsold < 10 ? '0' + hrsold : hrsold) + ":" + (minsold < 10 ? '0' + minsold : minsold) + ":" + (seconds < 10 ? '0' + seconds : seconds) + "." + ms;
            }
            
            //show_date_time(); 
        </script>
        <script>
            (function(i, s, o, g, r, a, m){
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] ||
                function(){
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../www.google-analytics.com/analytics.js'/*tpa=http://www.google-analytics.com/analytics.js*/, 'ga');
            
            ga('create', 'UA-49960168-1', 'http://www.sandcoin.org/sandcoin.org');
            ga('send', 'pageview');
        </script>
    </body>
</html>