<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($seo["title"]); ?> - <?php echo ($seo["subtitle"]); ?></title>
<meta name="keywords" content="<?php echo ($seo["keywords"]); ?>" /> 
<meta name="description" content="<?php echo ($seo["description"]); ?>" /> 
<meta property="wb:webmaster" content="c9fd7603df8ff038" />
<link rel="shortcut icon" href="__STATIC__/public/images/fav.ico" type="image/x-icon">
<style>__SITE_THEME_CSS__</style>
<!--[if gte IE 7]><!-->
    <link href="__STATIC__/public/js/dialog/skins5/idialog.css" rel="stylesheet" />
<!--<![endif]-->
<!--[if lt IE 7]>
    <link href="__STATIC__/public/js/dialog/skins5/idialog.css" rel="stylesheet" />
<![endif]-->
<script>var siteUrl = '__SITE_URL__';</script>
<script src="__STATIC__/public/js/jquery.js" type="text/javascript"></script>
<script src="__STATIC__/public/js/common.js" type="text/javascript"></script>
<script src="__STATIC__/public/js/IK.js" type="text/javascript" data-cfg-autoload="false"></script>
<script src="__STATIC__/public/js/all.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="__STATIC__/public/js/html5.js"></script>
<![endif]-->
<script src="__STATIC__/public/js/dialog/jquery.artDialog.min5.js" type="text/javascript"></script> 
__EXTENDS_JS__
<script src="http://l.tbcdn.cn/apps/top/x/sdk.js?appkey=21509482"></script>
</head>

<body>
<!--头部开始-->
<header>
<?php if($module_name == 'index' && empty($visitor)): ?><div class="hd-wrap">
            <div class="hd">
                <div class="logo">
                    <h1><a href="__SITE_URL__" title="爱客开源">爱客开源</a></h1>
                </div>
                <div class="top-nav-items">
                <ul>
                <li><a href="http://www.ikphp.com" class="lnk-home" target="_blank">爱客首页</a></li>
                <li><a href="<?php echo U('group/index');?>" class="lnk-group" target="_blank">爱客小组</a></li>
                <li><a href="<?php echo U('article/index');?>" class="lnk-article" target="_blank">爱客阅读</a></li>
                <li><a href="<?php echo U('location/index');?>" class="lnk-location" target="_blank">爱客同城</a></li>
                <li><a href="<?php echo U('site/index');?>" class="lnk-site" target="_blank">爱客小站</a></li>
                <li><a href="<?php echo U('mall/index');?>" class="lnk-mall" target="_blank">爱客商城</a></li>
                </ul>
                </div>
            </div>
</div>
<?php else: ?>
<div class="top_nav">
  <div class="top_bd">
    
    <div class="top_info">
        <?php if(empty($visitor)): ?><a href="<?php echo U('user/login');?>">登录</a> | <a href="<?php echo U('user/register');?>">注册</a> | <a href="<?php echo U('oauth/index', array('mod'=>'qq'));?>" target="_blank" style="margin-left:10px"><img  align="absmiddle" title="QQ登录" src="__STATIC__/public/images/connect_qq.png"> 登录</a> | <a href="<?php echo U('oauth/index', array('mod'=>'sina'));?>" target="_blank" style="margin-left:10px"><img  align="absmiddle" title="新浪微博" src="__STATIC__/public/images/connect_sina_weibo.png"> 登录</a>    
        <?php else: ?>
        <a id="newmsg" href="<?php echo U('message/ikmail',array('d'=>'inbox'));?>">新消息(<?php echo ($count_new_msg); ?>)</a> | 
        <a href="<?php echo U('people/index', array('id'=>$visitor['doname']));?>">
        	<?php echo ($visitor["username"]); ?>
        </a> | 
        <a href="<?php echo U('user/setbase');?>">设置</a> | 
        <a href="<?php echo U('user/logout');?>">退出</a><?php endif; ?>
    </div>


    <div class="top_items">
        <ul>
             <li>
             <a href="__SITE_URL__">爱客</a>
             </li>             

             <li>
             <a href="<?php echo U('group/index');?>">小组</a>
             </li>
             
             <li><a href="<?php echo U('article/index');?>">阅读</a></li>  
             <li><a href="<?php echo U('location/index');?>">同城</a></li>
             <li><a href="<?php echo U('mall/index');?>">淘客</a></li>  
             <li><a href="<?php echo U('site/index');?>">小站</a></li>
             <li><a href="<?php echo U('app/index');?>">应用商店</a></li>             
             <li><a href="<?php echo U('help/download');?>" style="color:#fff">IKPHP源码下载</a></li>                                                      

        </ul>
    </div>
  	<div class="cl"></div>
    
  </div>
  
</div>

<!--header-->


<div id="header">
    
	<div class="site_nav">
        <div class="<?php echo ($logo[style]); ?>">
            <a href="<?php echo ($logo[url]); ?>"><?php echo ($logo[name]); ?></a>
        </div>
		<div class="appnav">
			    <ul id="nav_bar">
                    <?php if(is_array($arrNav)): foreach($arrNav as $key=>$item): ?><li><a href="<?php echo ($item[url]); ?>" class="a_<?php echo ($key); ?>"><?php echo ($item[name]); ?></a></li><?php endforeach; endif; ?>
			    </ul>
		   <form onsubmit="return searchForm(this);" method="GET" action="<?php echo U('search/index');?>">
                <input type="hidden" value="all" name="type">
                <div id="search_bar">
                    <div class="inp"><input type="text" placeholder="小组、话题、日志、成员、小站" value="" class="key" name="q"></div>
                    <div class="inp-btn"><input type="submit" class="search-button" value="搜索"></div>
                </div>
		    </form>
		</div>

        <div class="cl"></div>

	</div>
        
</div><?php endif; ?>

<!--APP NAV-->

</header>

<div class="midder">


    <div class="mc">
    
   	    <h1><?php echo ($seo["title"]); ?></h1>
       
        <div class="cleft w700">

            <div class="mod">
                <h2 class="tit-1">我管理的 <?php echo ($count_Admingroup); ?> 个小组</h2>
                <div class="indent obssin">
                
                <div class="groups">
                        <ul>
                            <?php if(is_array($arrMyAdminGroup)): foreach($arrMyAdminGroup as $key=>$item): ?><li class="item">
                                <div class="pic">
                                    <a href="<?php echo U('group/show',array('id'=>$item[groupid]));?>"><img alt="<?php echo ($item[groupname]); ?>" class="m_sub_img" src="<?php echo ($item[icon_48]); ?>" width="48" height="48"></a>
                                </div>
                            
                                <div class="info">
                                    <a href="<?php echo U('group/show',array('id'=>$item[groupid]));?>" title="<?php echo ($item[groupname]); ?>"><?php echo getsubstrutf8(t($item[groupname]),0,12) ?></a><br> 
                                    <span class="num">(<?php echo ($item[count_user]); ?>)</span><br>
                            </div>
                            </li><?php endforeach; endif; ?>
                        </ul>
                </div>
                </br>
                </div>
            </div>
            
			<div class="mod">
                <h2 class="tit-1">我加入的 <?php echo ($count_mygroup); ?> 个小组 </h2>
                <div class="indent obssin">
                
                <div class="groups">
                        <ul>
                            <?php if(is_array($arrMyGroup)): foreach($arrMyGroup as $key=>$item): ?><li class="item">
                                <div class="pic">
                                    <a href="<?php echo U('group/show',array('id'=>$item[groupid]));?>"><img alt="<?php echo ($item[groupname]); ?>" class="m_sub_img" src="<?php echo ($item[icon_48]); ?>"  width="48" height="48"></a>
                                </div>
                            
                                <div class="info">
                                    <a href="<?php echo U('group/show',array('id'=>$item[groupid]));?>" title="<?php echo ($item[groupname]); ?>"><?php echo getsubstrutf8(t($item[groupname]),0,12) ?></a><br> 
                                    <span class="num">(<?php echo ($item[count_user]); ?>)</span><br>
                            	</div>
                            </li><?php endforeach; endif; ?>
                        </ul>
                </div>
                </br>
                </div>
            </div>

    	</div>
    
        <div class="cright w250" id="cright">   
              
			<div class="mod" id="g-user-profile">

    <div class="usercard">
      <div class="pic">
            <a href="<?php echo U('people/index',array('id'=>$strUser[doname]));?>"><img alt="<?php echo ($strUser[username]); ?>" src="<?php echo ($strUser[face]); ?>"></a>
      </div>
      <div class="info">
           <div class="name">
               <a href="<?php echo U('people/index',array('id'=>$strUser[doname]));?>"><?php echo ($strUser[username]); ?></a>
           </div>
                <?php if($strUser[area] != ''): echo ($strUser[area][areaname]); else: ?>火星<?php endif; ?>                        
                 <br>
       </div>
    </div>
               
    <div class="group-nav">
     <ul>
		<?php if($action_name == 'my_group_topics'): ?><li class="on"><a href="<?php echo U('group/my_group_topics');?>">我的小组话题</a></li>
		<?php else: ?>
		<li class=""><a href="<?php echo U('group/my_group_topics');?>">我的小组话题</a></li><?php endif; ?>
        
		<?php if($action_name == 'my_topics'): ?><li class="on"><a href="<?php echo U('group/my_topics');?>">我发起的话题</a></li>
		<?php else: ?>
		<li class=""><a href="<?php echo U('group/my_topics');?>">我发起的话题</a></li><?php endif; ?>
        		
		<?php if($action_name == 'my_replied_topics'): ?><li class="on"><a href="<?php echo U('group/my_replied_topics');?>">我回应的话题</a></li>
		<?php else: ?>
		<li class=""><a href="<?php echo U('group/my_replied_topics');?>">我回应的话题</a></li><?php endif; ?>
		
		<?php if($action_name == 'my_collect_topics'): ?><li class="on"><a href="<?php echo U('group/my_collect_topics');?>">我喜欢的话题</a></li>
		<?php else: ?>
		<li class=""><a href="<?php echo U('group/my_collect_topics');?>">我喜欢的话题</a></li><?php endif; ?>
		
		<?php if($action_name == 'mine'): ?><li class="on"><a href="<?php echo U('group/mine');?>">我管理/加入的小组</a></li>
		<?php else: ?>
		<li class=""><a href="<?php echo U('group/mine');?>">我管理/加入的小组</a></li><?php endif; ?>
     </ul>
    </div>
             
</div> 
         
<div class="mod">
<?php if($visitor): ?><div class="create-group">
<a href="<?php echo U('group/create');?>"><i>+</i>申请创建小组</a>
</div><?php endif; ?>
</div>                       
        
        </div>
    
    </div><!--//mc-->


</div>



<!--footer-->
<footer>
<div id="footer">
	<div class="f_content">
        <span class="fl gray-link" id="icp">
            &copy; 2012－2015 IKPHP.COM, all rights reserved <span><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备13018602号</a></span>
        </span>
        
        <span class="fr">
            <a href="<?php echo U('help/about');?>">关于爱客</a>
            · <a href="<?php echo U('help/contact');?>">联系我们</a>
            · <a href="<?php echo U('help/agreement');?>">用户条款</a>
            · <a href="<?php echo U('help/privacy');?>">隐私申明</a>
        </span>
        <div class="cl"></div>
        <p>Powered by <a class="softname" href="<?php echo (IKPHP_SITEURL); ?>"><?php echo (IKPHP_SITENAME); ?></a> <?php echo (IKPHP_VERSION); ?>  目前有 <?php echo ($count_online_user); ?> 人在线<br />
        <span style="font-size:0.83em;">{__RUNTIME__}          </span>

        <script src="http://s6.cnzz.com/stat.php?id=5262498&web_id=5262498" language="JavaScript"></script>
       
        </p>   
    </div>
</div>
</footer>
</body>
</html>