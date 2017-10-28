<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\wamp64\www\www.d.com\public/../application/index\view\order_list\order.html";i:1509192060;}*/ ?>
﻿<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script src="__JS_PATH__/jquery-1.8.3.js"></script>
        <script src="__JS_PATH__/jquery.reveal.js"></script>

        <!-- 如果不是没登录有userId，直接通过地址进来这里，直接跳转回首页，代码在account.js判断 -->
       
        <script src="__JS_PATH__/jquery.cookie.js"></script>
       <link rel="icon" href="/static/img/logo-50-50.jpg" type="image/x-icon" /> 
        <!--[if lte IE 10]>
        <script src="__JS_PATH__/requestanimationframe.js"></script>
        <![endif]-->
        <link rel=stylesheet href="__CSS_PATH__/reset.css">
        <link rel=stylesheet href="__CSS_PATH__/common.css">
        <link rel=stylesheet href="__CSS_PATH__/base.css">
        <link rel=stylesheet href="__CSS_PATH__/account.css">
        <link rel=stylesheet href="__CSS_PATH__/header.css">
        <link rel=stylesheet href="__CSS_PATH__/reveal.css">
        <link rel=stylesheet href="__CSS_PATH__/login.css">
        <link rel=stylesheet href="__CSS_PATH__/menu02.css">
        <link rel=stylesheet href="__CSS_PATH__/order.css">
        <link rel=stylesheet href="__CSS_PATH__/footer_2.css">
        <link rel=stylesheet href="__CSS_PATH__/page.css">
        <title>订饭组</title>
    </head>
    <body>
        <!--header部分-->
        <div class="header shadow">
            <div class="search-result"> 
            </div>
            <div class="header-left fl">
                <div class="icon fl"></div>
                <a class="weixin-dingfan fw" href="#">微信订饭</a>
                <a class="logo" href="/"></a>
                <div class="search">
                <img class="search-icon" src="__IMG_PATH__/icon_search.png" width="22" height="22">
                <input id="search-input" class="search-input" type="text" placeholder="请输入楼名" onkeypress="onKeySearch()">
                <span id="search-del" class="search-del">&times;</span> 
                </div>
                <div class="clear"></div>
            </div>
            <div class="header-right fr">
                <div class="login fl">

                    <span class="header-operater">
                    <a href="/">外卖</a>
                    <a href="/index/User/order">我的订单</a>
                    <a href="/about.html?p=lianxiwomen">联系我们</a> 
                    </span> 
                    <a id="header-login" class="navBtn f-radius f-select n" data-reveal-id="myModal" data-animation="fade">
                    登录
                    </a>
                </div>

                <!-- 购物车 -->
                <div id="cart" class="cart fr"> 
                    <img class="cart-icon" src="__IMG_PATH__/icon_cart_22_22.png">
                </div>
                
                <!-- 用户头像 -->
                <div id="user" class="user fr n">
                    <img class="user-icon" src="__IMG_PATH__/icon_my.png"> 
                </div> 
            </div> 
            
            <ul id="subnav" class="subnav subnav-shadow n">
                <li><a href="/index/User/setting" target="">账号设置</a></li>
                <li><a href="/index/User/order" target="">我的订单</a></li>
                <li><a href="/index/User/balance" target="">我的余额</a></li>
                <li><a href="/index/User/score" target="">我的积分</a></li>
                <li><a href="/index/User/address" target="">我的地址</a></li>
                <li><a id="sub-logout" href="" target="">退出</a></li>
            </ul>
        </div>

        <!--------------------------- 购物车展示 -------------------------------->
            <div class="shop-cart shadow n">
                <div class="shop-head">
                    购物车<a class="shop-clear">[清空]</a>
                </div>
                <div class="shop-body">    
                    

                    <div class="isnull">
                        <span></span>
                        <b>购物车空空如也</b>
                    </div>
                </div>
                <div class="shop-bottom">
                    <div class="bottom-price fl">总计：￥<label>32</label>
                    </div>
                    <div class="bottom-icon"></div>
                    <div class="bottom-pay fr">
                        <a id="cart-pay">结算</a>
                    </div>
                </div>
        </div>
<!--------------------------- 购物车展示结束 -------------------------------->

        <!--主体-->
        <div class="content">
            <!--左侧导航-->
            <div class="content-left fl">
                <div class="menu-left">
                    <dl>
                        <dt>个人中心</dt>
                        <dd class="menu-item active">
                            <span class="left-icon">
                                <img src="__IMG_PATH__/icon_order.png" width="18px" height="18px">
                            </span>
                        <a href="/index/OrderList/order">我的订单</a>
                        </dd>
                        <dd class="menu-item">
                            <span class="left-icon">
                                <img src="__IMG_PATH__/icon_address.png" width="18px" height="18px">
                            </span>
                        <a href="address">送餐地址</a>
                        </dd> 
                        <dd class="menu-item">
                            <span class="left-icon">
                                <img src="__IMG_PATH__/icon_score.png" width="18px" height="18px">
                            </span>
                        <a href="score">我的积分</a>
                        </dd>
                        <dd class="menu-item">
                            <span class="left-icon">
                                <img src="__IMG_PATH__/icon_balance.png" width="18px" height="18px">
                            </span>
                        <a href="balance">店铺收藏</a>
                        </dd>
                        <dd class="menu-item ">
                            <span class="left-icon">
                                <img src="__IMG_PATH__/icon_settings.png" width="18px" height="18px">
                            </span>
                        <a href="setting">账户设置</a>
                        </dd>
                    </dl>
                </div>
            </div>

            <!--右侧内容-->
            <div class="content-right fl">
                <div class="summary fl">
                    <a href="" style="color: #333;font-size: 18px;font-weight: 400px">最新订单</a>
                    <span> &ensp;&ensp;|&ensp;&ensp; </span> 
                    <a href="" style="color: red;font-size: 18px;font-weight: 400px">历史订单</a>
                </div>
                
                <!-- 隐藏域，直接赋值用户手机号 -->
               <!--  <input id="hidden" type="hidden" value="">
                <script>
                    $(function(){
                        var username = $.cookie('userId');
                        $('#hidden').val(username);
                    });
                </script> -->
                    
                <div class="order-content-wrap">
    
                <!-- 订单信息 -->
                    <div class="order-content">

                    <?php foreach($res as $val): if($val['username'] = $username): ?>
                        <div class="order-meal">
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="3">
                                            <a href=''  class="shop-name"></a>
                                            <p class="shop-info">
                                            <!-- <span class="phone-icon"></span> -->
                                            商家电话：<?php echo $val['shop_tel']; ?>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                        <!-- 商品信息 -->
                            <?php foreach($item as $v): ?>                                  
                               <tr style="color: #999">
                                   <td><?php echo $v['name']; ?></td>
                                   <td>X<?php echo $v['count']; ?></td>
                                   <td>单价：<?php echo $v['price']; ?></td>
                               </tr>
                            <?php endforeach; ?>

                                </tbody>

                            </table>

                            <div class="order-price">
                                积分抵现:
                                <span class="ft-red">￥<?php echo $jifen; ?></span> &ensp;&ensp;|&ensp;&ensp;
                                总价：<span class="ft-red">￥<?php echo $val['sf_price']; ?></span>
                            </div>

                            <div class="order-delivery">
                                <div class="receive-info">
                                    <span>订单编号：<?php echo $val['order_id']; ?></span>
                                    <span>送餐地址：<?php echo $val['order_address']; ?></span>
                                    <span>联系人：<?php echo $val['order_name']; ?></span>
                                    <span>电话：<?php echo $val['order_phone']; ?></span>
                                    <span>送达时间：<?php echo $val['order_arrived_time']; ?></span>
                                    <span>备注信息：<?php echo $val['order_liuyan']; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; endforeach; ?>

                        <div class="order-info">
                            <div class="delivery-info">
                                <div class="delivery-card ">
                                    <div class="card-header nick-selected">
                                        <div class="round">
                                        </div>
                                        <div class="line-through ">
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="status-msg">
                                            订单提交成功
                                        </div>
                                        <div class="prompt"> 订单号：
                                        </div>
                                        <div class="time">
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="delivery-card ">
                                    <div class="card-header nick-selected">
                                        <div class="round">
                                        </div>
                                        <div class=line-through></div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="status-msg">
                                     
                                        </div>
                                        <div class="prompt"> 
                                    
                                        </div>
                                        <div class="time">
                                      
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card-header nick-selected">
                                        <div class="round">
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="status-msg">
                                        
                                        </div>
                                        <div class="prompt"> 
                                       
                                        </div>
                                        <div class="time">
                                           
                                        </div>
                                    </div>
                                </div> 


                                <div class="order-operator " >
                                    <div class="operator-btns">
                                       <a class=pay-btn onclick="orderPay()">支付</a><a class=pay-btn onclick="orderCancel()">取消</a>
                                            <a class=pay-btn onclick="orderCancel()">取消</a>
                                        
                                            <a class=pay-btn onclick="urgeOrder()">催单</a>
                                            <a class=pay-btn>评价</a><a href='' class=pay-btn>再买一次</a>
                                        
    
                                    </div>
                                </div>
                                <!-- <div class="clear"></div> -->
                            </div>
                        </div>
                    </div>
                   
         <!-- 分页  -->
                    <div class="page">

                    </div>

                </div>



            </div>
            <!-- 右侧内容结束 -->
            
            <div class="clear"></div>
        </div>

        <!-- 页脚部分 -->
       <div class="footer-content">
              <div class="footer-content-entrance">
                <a class="footer-content-link" href="/about.html?p=guanyuwomen">关于我们</a>
                <span class="footer-content-separator">|</span>
                <a class="footer-content-link footer-content-weixing">关注微信
                <img class="weixin-pic" src="__IMG_PATH__/qr_code.jpg">
                </a>
                <span class="footer-content-separator">|</span> 
                <a class="footer-content-link" href="/about.html?p=tousujianyi">投诉建议</a>
                <span class="footer-content-separator">|</span>
                <a class="footer-content-link kaidian_address" href="/about.html?p=shangjiaruzhu">商家入驻</a>

              </div>
              <div class="footer-content-copyright">©2016 dingfanzu.com <a target="_blank">京ICP证020666号</a> </div>
        </div>

        <!--提示框-->
        <div id="alertModel" class="alertModel" >
        <a id="alert" data-reveal-id="alertModel" data-animation="fade"></a>
        <span id="alert-msg"></span>
        <button id="btn-ok" class="btn">知道了</button>
        <a id="btn-close" class="close-reveal-modal"><img src="__IMG_PATH__/icon_close.png" height="24" width="24"></a>
        </div>

        <script src="__JS_PATH__/common.js"></script>
        <script src="__JS_PATH__/md5.js"></script>
        <script src="__JS_PATH__/login.js"></script>   
        <script src="__JS_PATH__/cart.lib.js"></script>
        <script src="__JS_PATH__/cart.js"></script>
        <script src="__JS_PATH__/common.js"></script>
        <script src="__JS_PATH__/header.js"></script>
        <script src="__JS_PATH__/account.js"></script>
        <script src="__JS_PATH__/footer.js"></script>

         <!-- 如果用户名存在且cookie没有过期 -->
        <script>
            if($.cookie('userId'))
            {
                var userId=$.cookie('userId');
                $('#header-user').html('hi，'+userId);
                $('#header-user').show();
                $('#header-login').hide(); 
                $('#user').show();
            }
        </script>

        <script>
        $(function(){
             //初始化购物车
                    // initCart();

                    //购物车相关 
                    var shopCartWidth=$(".shop-cart").width(); 

                    //默认隐藏购物车
                    $(".shop-cart,.shop-bottom").css("right",-shopCartWidth); 
                    var mRight=-shopCartWidth;
                    
                    $("#cart").click(function(){
                        $('.shop-cart').show(); 
                        //适配购物车
                        processShopItem();
                        
                        shopCartWidth=$(".shop-cart").width();
                        if(mRight=='0px'){
                            mRight=-shopCartWidth;
                            $(".shop-cart,.shop-bottom").animate({right:mRight},200);
                        }
                        else{
                            mRight='0px';
                            $(".shop-cart,.shop-bottom").animate({right:mRight},200);
                        }
                    });

        });



        //取消订单
        function orderCancel(orderId,username){
            var postUrl="/ajax/orderCancel.php";  
            $.post(postUrl,  
                {
                    orderId:orderId,
                    username:username
                },
                function(data,status,xhr) {    
                   if(status=="success"){  
                        $res= $.parseJSON(data); 
                        if($res.code=="0"){ 
                            showAlert("取消成功","/account/order"); 
                        }else if($res.code=="1"){
                            showAlert($res.msg,"/account/order"); 
                        }
                   }else{
                        showAlert("服务器异常","/account/order");
                   }
               }); 
        }
        //支付订单。
        function orderPay(orderId,orderTime){
            var timestamp = Date.parse(new Date());
            var nowTime=timestamp/1000;
            var dis=nowTime-orderTime; 
            if(dis>15*60){ 
                showAlert("超过15分钟未支付，订单已取消","/account/order"); 
            }else{
                showAlert("去支付页");
            }
        }

        //催单
        function urgeOrder(orderId,username){
            var postUrl="/ajax/urgeOrder.php";  
            $.post(postUrl,  
                {
                    orderId:orderId,
                    username:username
                },
                function(data,status,xhr) {    
                   if(status=="success"){  
                        $res= $.parseJSON(data); 
                        if($res.code=="0"){ 
                            showAlert("已通知商家"); 
                        }else if($res.code=="1"){
                            showAlert($res.msg);
                        }
                   }else{
                        showAlert("服务器异常");
                   }
               }); 
        }
        </script>
    </body>
</html>