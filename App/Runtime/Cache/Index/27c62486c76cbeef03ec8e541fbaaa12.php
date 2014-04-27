<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>用户中心</title>
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css" />
        <script src="__PUBLIC__/js/jquery.min.js">
        </script>
		
        <script>
            $(document).ready(function(){
                $("#sidebaritem2").addClass('current');
            });
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

        <div class="content">
            <div class="mem-wrap">
                <div class='mem-sidebar' style='width:160px;min-height:500px;float:left;'>
                    <dl>
                        <dt class="my-trade">
                            <span>用户中心</span>
                        </dt>
                        <?php if(is_array($menus)): foreach($menus as $key=>$v): ?><dd id='sidebaritem<?php echo ($v["id"]); ?>'>
                                <a href="__APP__/<?php echo ($v["url"]); ?>"><?php echo ($v["mname"]); ?></a>
                            </dd><?php endforeach; endif; ?>
                    </dl>
                </div>
                <div class='mem-main' style='float:right;width:707px;min-height:470px;'>
                    <h2 class="mem-hd mem-deal">充值中心</h2>
                    <div class="con">
                        <p class="mem-tip">
                            买入挂单总额：<span class="cred">0</span>元 &nbsp;&nbsp; 买入挂单总量：<span class="cgreen">0</span>个币 &nbsp;&nbsp;| &nbsp;&nbsp; 卖出挂单总额：<span class="cred">0</span>元  &nbsp;&nbsp; 卖出挂单总量：<span class="cgreen">0</span>个币
                        </p>
                    </div>
                </div>
                <div style='clear:both;'>
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

    </body>
</html>