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
       	 <h1>发现宝贝 </h1>
    <div class="wall_wrap clearfix">
        <div id="J_waterfall" class="wall_container clearfix" data-uri="">
            <div class="J_item wall_tag">
                <h3>热门标签：</h3>
                <div class="atags clearfix">
                    	<a href="<?php echo U('mall/album');?>" title="" class="on">全部</a>
                        <a href="<?php echo U('mall/album',array('cid'=>1));?>" title="">甜美</a>
                        <a href="<?php echo U('mall/album',array('cid'=>1));?>" title="">街拍</a>
                        <a href="<?php echo U('mall/album',array('cid'=>1));?>" title="">欧美</a>
                        <a href="<?php echo U('mall/album',array('cid'=>1));?>" title="">美女</a>
                        <a href="<?php echo U('mall/album',array('cid'=>1));?>" title="">个性</a>
                </div>
            </div>
            
    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>
    
    
    
    
    
    
    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>

    <div class="J_item wall_item">


        <a href="javascript:;" class="J_unlike del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>"></a>



        <a href="javascript:;" class="J_delitem del_item" title="<?php echo L('delete');?>" data-id="<?php echo ($item["id"]); ?>" data-aid="<?php echo ($album["id"]); ?>"></a>


        <!--图片-->
        <ul class="pic">
            <li>
                <a href="<?php echo U('item/index', array('id'=>$item['id']));?>" title="<?php echo ($item["title"]); ?>" target="_blank">
                <img alt="<?php echo ($item["title"]); ?>" class="J_img J_decode_img" data-uri="" src="http://s0.img.guang.com/p/4288444_1_1900313_210X210.jpg">
                </a>
                <span class="p">¥999</span>
                <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
            </li>
        </ul>
        <!--操作-->
        <div class="favorite"> 
            <a href="javascript:;" class="J_likeitem like" data-id="<?php echo ($item["id"]); ?>" >12</a>
            <div class="J_like_n like_n"><a href="" target="_blank">55</a><i></i></div>
            
            <?php if($item['comments'] > 0): ?><span class="creply_n">(<a href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">2</a>)</span><?php endif; ?>
            <a class="creply" href="<?php echo U('item/index', array('id'=>$item['id']));?>" target="_blank">777</a> 
        </div>
        <!--作者-->

        <div class="author clearfix">
            <a href="#" target="_blank">
                <img class="J_card avt fl r3" src="http://www.ikphp.com/data/upload/face/000/00/00/c81e728d9d4c2f636f067f89cc14862c_48_48.jpg?v=1368699000" data-uid="<?php echo ($item["uid"]); ?>" />
            </a>
             <a href="#" class="J_card clr6 bold" target="_blank" data-uid="<?php echo ($item["uid"]); ?>">小麦</a><br>
        </div>

        <!--说明-->
        <p class="intro clr6">[满49包邮]南极人包芯丝加档连裤袜丝袜 露趾袜鱼嘴袜 T档连裤袜</p>
        <!--评论-->

        <ul class="rep_list">


            <li class="rep_f">
                <a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" target="_blank">
                    <img src="http://s8.mogujie.cn/pic/130516/52957_kqyw6vklnjbg2stwgfjeg5sckzsew_272x275.jpg" class="J_card avt fl r3" alt="<?php echo ($item['comment_list'][$i]['uname']); ?>" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">
                </a>
                <p class="rep_content"><a href="<?php echo U('space/index', array('uid'=>$item['comment_list'][$i]['uid']));?>" class="J_card n" target="_blank" data-uid="<?php echo ($item['comment_list'][$i]['uid']); ?>">dfas</a>  你发的东西确实很好看哦</p>
            </li>

        </ul>

    </div>


        </div>
    </div>
		
        
    	
     
        
    </div>
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