﻿<?php
require_once './include.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>怪兽大学</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/header.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="js/jquery-1.11.3.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script src="js/jiazai.js"></script>
  </head>
  <body>
  <div id="preloader"><!-- 开场动画 -->
      <div id="status">
         <img src="images/1.gif" height="250"  alt="">
      </div>
   </div>

<?php
require_once './header.php';
?>
    <!-- 此处插入导航-->

<div class="picture"> <!-- 正文内容 -->
<div class="container-fluid">
<div id="carousel1" class="carousel slide hidden-xs" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1" data-slide-to="1"></li>
    <li data-target="#carousel1" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/jieshao1.jpg" alt="...">

    </div>
    <div class="item">
      <img src="images/jieshao1.jpg" alt="...">

    </div>
    <div class="item">
      <img src="images/jieshao1.jpg" alt="...">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div id="carousel2" class="carousel slide visible-xs-block " data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel2" data-slide-to="1"></li>
    <li data-target="#carousel2" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/jieshao1-1.jpg" alt="...">

    </div>
    <div class="item">
      <img src="images/jieshao1-1.jpg" alt="...">

    </div>
    <div class="item">
      <img src="images/jieshao1-1.jpg" alt="...">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<div class="jieshao">
<div class="container">
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
  <div class="jieshao1">
  <img class="img-responsive" alt="Responsive image" src="images/cloud.png">
  <h3 >欢迎来到怪兽大学</h3>
  <p class="jscontent">怪兽乐园儿童大学是动漫化的O2O互联网创新教育产品，是包括理工学院、怪兽体育学院、怪兽艺术学院和怪兽人文学院的全方位教学体系。它完全摒弃了传统的理工、体育、艺术和人文教育理念，运用先进的教育技术，打造全球顶尖的全方位创造力教育模式。“通识-实践-创新”是怪兽儿童大学独创的教育理念，孩子需要在广泛认识世界的基础上，大胆动手实践，运用组合创新和破坏性创新等方法，开阔思维，达到真正地提高视野和能力，让我们一起体验吧！
</p>
<button  type="button" class="btn btn-primary btn-lg more">了解更多</button>
  </div>
   <img class="img-responsive visible-md-block visible-lg-block pull-right" alt="Responsive image" src="images/bird.png">
  </div>
   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
   <div class="renwu">
   <img class="img-responsive" alt="Responsive image" src="images/renwu.png">
   </div>
   </div>
  </div>
  </div>
</div>
<div class="kechengjs">
<div class="container">

<div class="row">
 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
  <img style="margin-top:-20px;height:80px;" alt="Responsive image" src="images/chuan.png">
  <h3 >课程简介</h3>
 <div class="jieshao2">
<div class="row">
<div class="col-xs-6 col-sm-6  col-md-offset-4 col-md-6 col-lg-6 col--offset-4">
  <img style="width:150px;" alt="Responsive image" src="images/达维恩.png">
  </div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <p class="kechengcontent">
  怪兽大学特有的STEM+ASH教育模式
</p>
  </div>
  </div>
 </div>
 </div>
  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
  <div class="stem">
  <img class="img-responsive " alt="Responsive image" src="images/stem-ash.png">
  </div>
  <img class="img-responsive visible-md-block visible-lg-block  shayu-img" alt="Responsive image" src="images/shayu.png">
  </div>

</div>
</div>
</div>
<div class="yunyingmodel">
<div class="container">
<div class=" yunying-header">
  <h3>产品介绍</h3>
 <img  style="width:150px;margin-top:-20px;margin-left:150px"alt="Responsive image" src="images/222.png">
  </div>

  <div class="yunying_content">

<div class="row">


  <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
  <div class="donghua">
  <a href="#"><img  src="images/11.png">
	<h4 class="bold sparkley">动画</h4></a>
	</div>
	</div>
	 <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
	<div class="shipin">
	<a href="#"><img src="images/12.png">
	<h4 class="bold">视频</h4></a>
	</div>
  </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
  <div class="manhua ">
  <a href="#"><img  src="images/13.png">
	<h4 class="bold">漫画</h4></a>
	</div>
	</div>
	 <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
	<div class="cailiao">
	<a href="#"><img src="images/14.png">
	<h4 class="bold">材料</h4></a>
	</div>
  </div>

</div>
</div>
   <img class="img-responsive building-position " alt="Responsive image" src="images/building2.png">
</div>
</div>
<div class="jingpin">
<div class="container">
<h3>精品课程</h3>
<div class="row">
<div class="jingpin-content">
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="kecheng-img">
  <a href="course.php"><img class="img-responsive" alt="Responsive image" src="images/picture1.png"></a>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
  <div class="description">
  <h3 class="ds-header">《达维恩的古代之行》</h3>
  <p style="max-width:400px;margin-bottom:30px;">小主人公“达维恩”和他的萌宠“卤蛋”穿越时空来到了中国古代的战场，并成功从一名从天而降的“奸细”变成军队英雄的故事。
达维恩是怎么做到的呢？那是因为他发挥自己的聪明才智和想象力，将雷蒙老师课上所教的知识应用到现实中，成功改进了“投不高也投不远”的投石车，帮助军队打了胜仗。小朋友们我们是不是也试试呢
</p>
<a class="btn btn-success btn-lg" href="order.php" role="button">赶快订阅哦</a>
  </div>
</div>
</div>
</div>
<div class="other">
<h3>其他课程</h3>
<p class="morevideo"><a href="course.php" class="yanse" >更多>></a></p>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
<div class="mokuai">
 <img class="img-responsive" alt="Responsive image" src="images/picture2.png">
 <div class="mokuai-content">
 <h5>随便说点<h5>
 <p>....</p>
 <p><a href="order.php" class="btn btn-success" role="button">订阅</a></p>
 </div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
<div class="mokuai">
  <img class="img-responsive" alt="Responsive image" src="images/picture2.png">
 <div class="mokuai-content">
 <h5>随便说点<h5>
 <p>....</p>
 <p><a href="order.php" class="btn btn-success" role="button">订阅</a></p>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
<div class="mokuai">
  <img class="img-responsive center-block" alt="Responsive image" src="images/picture2.png">
 <div class="mokuai-content">
 <h5>随便说点<h5>
 <p>....</p>
 <p><a href="order.php" class="btn btn-success" role="button">订阅</a></p>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="contact">
<div class="container">
<div class="contact-header">
<h3>联系我们</h3>
<img class="logopipi" src="images/pipi.png">
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="contact-content">
<p class="address-other"><span class="bold">南京</span><br><br>南京星梦教育科技有限将公司
南京市鼓楼区南京大学21栋创业园203</p>
<p class="address-other"><span class="bold">苏州</span><br><br>苏州梦工坊信息科技公司
苏州市干将东路178号苏州大学记住创业广场1号</p>
<p class="tele-contact"><span class=" icon-envelope-alt" aria-hidden="true"></span> whale.li@futuredreamlab.com<br><span class=" icon-phone" aria-hidden="true"></span> 13770680000</p>
<p class="rexian"><a href="#" class="btn btn-info btn-lg" role="button"><span class=" icon-phone" aria-hidden="true"></span> 热线电话： 400-9669-881</a></p>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="map hidden-xs">
	 <img class="img-responsive center-block xiayi" alt="Responsive image" src="images/rope.png">
  <div class="center-block ditusize" style=" width: 500px;
 height: 350px;" id="dituContent"></div>
</div>
<div class="map visible-xs-block">
	 <img class="img-responsive center-block xiayi" alt="Responsive image" src="images/rope1.png">
  <div class="center-block " style="width:300px;height:180px;border:solid 2px #333333;" id="dituother"></div>
</div>
</div>
</div>
</div>
</div>
<div class="footer"> <!-- 页脚 -->
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
<div class="liuyanimg">
 <img style="width:200px;"class= center-block " alt="Responsive image" src="images/liuyan.png">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
<div class="liuyanms">
<form>
<div class="form-group">
<button type="submit" class="btn btn-warning">提交</button>
</div>
<div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">message</label>
    <textarea class="form-control" rows="8" placeholder="说点什么吧...."></textarea>
 </div>
</form>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
<div class="information">
<img style="width:250px;" class=" center-block" alt="Responsive image" src="images/dreamlogo.png">
<img style="width:150px;margin-top:10px;" class=" center-block" alt="Responsive image" src="images/erweima.png">
<div class="lianjie">
<p>苏州梦工坊信息科技有限公司   苏ICP备15010631号<br>
未来梦工坊-3~16岁青少年素质创新教育开拓者<br>
 </p>
</div>
</div>
</div>
<div class="col-md-offset-3 col-md-6">
<p style="text-align:center;letter-spacing: 2px;">CopyRight © 2014-2015 未来梦工坊 All Rights Reserved. </p>
</div>
</div>
</div>
</div>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }

    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(118.78713,32.059873);//定义一个中心点坐标
        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
		   var mapother = new BMap.Map("dituother");//在百度地图容器中创建一个地图
        var pointother = new BMap.Point(118.78713,32.059873);//定义一个中心点坐标
        mapother.centerAndZoom(pointother,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.mapother = mapother;//将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
		mapother.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        mapother.enableScrollWheelZoom();//启用地图滚轮放大缩小
        mapother.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        mapother.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }

    //标注点数组
    var markerArr = [{title:"我的标记",content:"我的备注",point:"118.786295|32.059261",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });

			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }

    initMap();//创建和初始化地图
</script>
<script type="text/javascript">
			$(".to-signup").on("click",function(){
				$(".box-size").css("margin-left","0px")
			});
			$(".to-login").on("click",function(){
				$(".box-size").css("margin-left","-300px")
			});
			$("#login").on("click",function(){
				$(".box-size").css("margin-left","-300px")
			});
			$("#reg").on("click",function(){
				$(".box-size").css("margin-left","0px")
			});
		
			
</script>
  </body>
</html>