<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" href="/Public/static/admin/images/fenghuang.ico" type="image/x-ico" /> 
        <link rel="shortcut icon" href="/Public/static/admin/images/fenghuang.ico" type="image/x-icon">
        <title>视频锦集详情-上海烽凰后台管理</title>
        <link rel="stylesheet" href="/Public/static/admin/Styles/bootstrap.min.css" />
        <link rel="stylesheet" href="/Public/static/admin/Styles/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="/Public/static/admin/Styles/matrix-style.css" />
        <link rel="stylesheet" href="/Public/static/admin/Styles/matrix-media.css" />
        <link href="/Public/static/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        


    </head>
    <body>
        
<!--Header-part-->
<div id="header">
    <div class="logodiv">
        <img src="/Public/static/admin/images/logo.png" alt="上海烽凰文化传播有限公司"/>
    </div> 
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>
     <span class="text">欢迎你, <strong><?php echo session('username');?></strong></span>
    <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo U('user/index');?>"><i class="icon-user"></i> 用户管理</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo U('login/logout');?>"><i class="icon-key"></i> 退出登录</a></li>
      </ul>
    </li>
       <li class=""><a title="" href="#"><i class="icon icon-cog"></i>当前时间：<span class="text" id="clock"></span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->

<!--start-top-serch close-top-serch-->
<div id="search">
    <form action="<?php echo U('index/search');?>" method="post">
  <input type="text" name="key" placeholder="搜索文章..."/>
  <button type="submit" class="tip-bottom"><i class="icon-search icon-white"></i></button>
        </form>
</div>

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i></a>
  <ul>
      <li><a href="<?php echo U('index/index');?>"><i class="icon icon-home"></i> <span>主页</span></a> </li>
    <li><a href="<?php echo U('intro/index',array('category'=>'1'));?>"><i class="icon icon-home"></i> <span>烽凰简介</span></a>

    </li>
    <li> <a href="<?php echo U('article/index',array('category'=>'0'));?>"><i class="icon icon-inbox"></i> <span>烽凰方法论</span></a>   
    </li>
    <li class="submenu"><a href="#"><i class="icon icon-th"></i> <span>案例赏析</span></a>
          <ul>
            <li><a href="<?php echo U('article/index',array('category'=>'11'));?>">公益营销</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'12'));?>">事件营销</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'13'));?>">危机公关</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'14'));?>">新闻营销</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'15'));?>">娱乐文化营销</a></li>
          </ul>
    </li>
    <li class="submenu"><a href="#"><i class="icon icon-fullscreen"></i> <span>我们的服务</span></a>
          <ul>
            <li><a href="<?php echo U('article/index',array('category'=>'21'));?>">媒体发布</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'22'));?>">公关活动</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'23'));?>">危机公关处理</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'24'));?>">广告代理发布</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'25'));?>">网络推广</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'26'));?>">VI设计</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'27'));?>">全案策划服务</a></li>
          </ul>
    </li>
    <li> <a href="<?php echo U('contact/index');?>"><i class="icon icon-th-list"></i> <span>联系我们</span></a>
    </li>
    <li> <a href="<?php echo U('video/index',array('category'=>'31'));?>"><i class="icon icon-file"></i> <span>视频集锦</span></a>
    </li>
    <li> <a href="<?php echo U('picture/index');?>"><i class="icon icon-file"></i> <span>轮播图片</span></a>
    </li>
      <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>其他操作</span></a>
      <ul>
        <li><a href="http://www.sh-fenghuang.com">返回公司首页</a></li>
        <li><a href="<?php echo U('login/logout');?>">退出登录</a></li>
      </ul>
    </li>
  </ul>
    </div>
</div>
<!--sidebar-menu-->

        

<div id="content">
    <div id="content-header">
        <div id="breadcrumb">
            <a href="<?php echo U('index/index');?>" title="返回主页" class="tip-bottom"><i class="icon-home"></i> 首页</a>
            <a href="<?php echo U('video/index',array('category'=>'31'));?>" class="current">视频锦集管理</a>
            <a href="#" class="current">视频锦集详情</a>
        </div>
        <h1>视频锦集详情</h1>
  </div>
  <div class="container-fluid">

    <div class="row-fluid">
      <div class="span10">
       
          <div class="widget-title">
            <a href="<?php echo U('video/index',array('category'=>'31'));?>" class="btn btn-primary">返回</a>&nbsp&nbsp&nbsp
              <a href="<?php echo U('video/update',array('id'=>$model['id'],'category'=>'31'));?>" class="btn btn-primary">修改</a>&nbsp&nbsp&nbsp
              <a href="<?php echo U('video/delete',array('id'=>$model['id'],'category'=>'31'));?>" class="btn btn-primary">删除</a>
          </div>
               <div class="span10">
              
                <br/>
               
            </div>
            <div class="span10">
                
                    <div class="span6">
                        <img src="<?php echo ($model["imageurl"]); ?>" alt="<?php echo ($model["title"]); ?>"/>
                   </div>
                   <div class="span4">
                     <p>发表时间：<?php echo ($model["createdate"]); ?></p>
                      <?php if($model['ishome'] == 'yes'): ?><p>已放到首页</p><?php endif; ?>
                    <p><?php echo ($model["intro"]); ?></p>
                   </div>
                
            </div>
           <div class="span10">
              
                <hr/>
               
            </div>
              <div class="span10">
                <?php if($model['flag'] == 0): echo ($model["videourl"]); ?>
                <?php else: ?>
                     <video width="640" height="480" controls>
                          <source src="<?php echo ($model["videourl"]); ?>" type="video/mp4"/>
                          <source src="<?php echo ($model["videourl"]); ?>" type="video/wmv"/>
                          <source src="<?php echo ($model["videourl"]); ?>" type="video/avi"/>
                      </video><?php endif; ?>
                  
               </div>
          
            </div>
      
   
  </div>
</div>
    </div>

        <footer class="row-fluid">
<!--Footer-part-->
  <div id="footer" class="span12">
        <p>
        Copyright &copy; 2016.Company Fenghuang Culture All rights reserved.
        </p>
        <p>
        上海烽凰文化传播有限公司 &copy; 版权所有
        </p>
  </div>
<!--end-Footer-part-->
</footer>




        <script src="/Public/static/admin/Script/excanvas.min.js"></script> 
        <script src="/Public/static/admin/Script/jquery.min.js"></script> 
        <script src="/Public/static/admin/Script/jquery.ui.custom.js"></script> 
        <script src="/Public/static/admin/Script/bootstrap.min.js"></script> 
        <script src="/Public/static/admin/Script/bootstrap-modal.js"></script>
        <script src="/Public/static/admin/Script/jquery.js"></script> 
        <script src="/Public/static/admin/Script/jquery.flot.min.js"></script> 
        <script src="/Public/static/admin/Script/jquery.flot.resize.min.js"></script> 
        <script src="/Public/static/admin/Script/jquery.peity.min.js"></script> 
        <script src="/Public/static/admin/Script/fullcalendar.min.js"></script> 
        <script src="/Public/static/admin/Script/matrix.js"></script> 
        <script src="/Public/static/admin/Script/matrix.dashboard.js"></script> 
        <script src="/Public/static/admin/Script/jquery.gritter.min.js"></script> 
        <script src="/Public/static/admin/Script/matrix.interface.js"></script> 
        <script src="/Public/static/admin/Script/matrix.chat.js"></script> 
        <script src="/Public/static/admin/Script/jquery.validate.js"></script> 
        <script src="/Public/static/admin/Script/matrix.form_validation.js"></script> 
        <script src="/Public/static/admin/Script/jquery.wizard.js"></script> 
        <script src="/Public/static/admin/Script/jquery.uniform.js"></script> 
        <script src="/Public/static/admin/Script/select2.min.js"></script> 
        <script src="/Public/static/admin/Script/matrix.popover.js"></script> 
        <script src="/Public/static/admin/Script/jquery.dataTables.min.js"></script> 
        <script src="/Public/static/admin/Script/matrix.tables.js"></script> 
        
        <script type="text/javascript">
            function showtime(){
            var now=new Date();
            var year=now.getFullYear();
            var month=now.getMonth()+1;
            var day=now.getDate();
            var hours=now.getHours();
            var minutes=now.getMinutes();
            var seconds=now.getSeconds();
            time=year+'/'+month+'/'+day +'/'+hours+':'+minutes+':'+seconds;
            var clock=document.getElementById('clock');
            clock.innerHTML=time;
            }
            function letstart(){
            taskId=setInterval(showtime,500);
            }

            window.onload=function(){
	            /*var div1=document.getElementById('div1');
	            div1.onclick=letstart;*/
	            letstart();
            }
        </script>
        <script type="text/javascript">
            function goPage (newURL) {
                if (newURL != "") {
                    if (newURL == "-" ) {
                        resetMenu();            
                    } 
                    else {  
                    document.location.href = newURL;
                    }
                }
            }
            function resetMenu() {
                 document.gomenu.selector.selectedIndex = 2;
            }
        </script>
    </body>
</html>