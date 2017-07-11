<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 2 : intval($cid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(); ?>
<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/join.css"/>
<link rel="stylesheet" href="css/common.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/default/js/slideplay.js"></script>
<script type="text/javascript" src="templates/default/js/srcollimg.js"></script>
<script type="text/javascript" src="templates/default/js/loadimage.js"></script>
<script type="text/javascript" src="templates/default/js/top.js"></script>

</head>
<body>
<!-- header-->
<?php require_once('header.php'); ?>
<!-- /header-->
<!--start头部-->
  <header>
      <?php
      $dosql->Execute("SELECT * FROM `#@__infoimg` WHERE classid=13 AND  delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,1");
      while($row = $dosql->GetArray())
       {
        if($row['linkurl'] != '')$gourl = $row['linkurl'];
        else $gourl = 'javascript:;';
      ?>
       <img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>">
      <?php
        }
      ?>
        <div class="myDiv1"><p>加入奥昇</p></div>
        <div class="myDiv2"><p style="text-align: right;">您当前所在位置:<a href="index.php">首页</a>>加入奥昇</p></div>
  </header> 
  <!-- end 头部 -->
<!--加入奥昇内容模块--> 
    <section>
	      <?php
				$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=28 AND  delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,1");
				while($row = $dosql->GetArray())
				{
					if($row['linkurl'] != '')$gourl = $row['linkurl'];
					else $gourl = 'javascript:;';
				?>
	       <p><?php echo $row['title']; ?></p>

	       <div class="preface"><?php echo $row['description']; ?></div>
	        
	        <?php
				  }
				?>
        <form class="form" method="post" action="index.html">
        <div class="formName">
          <p style="font-size: 15px;">请输入职位</p>
          <input type="text" class="" name="keywords" placeholder="关键字..." value="">
        </div>
        <button type="submit" class="">搜索</button>
        </form>
    </section>
    <!--加入奥昇文章内容模块--> 
           <div class="module1">
         <?php
				$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=28 AND  delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,6");
				while($row = $dosql->GetArray())
				{
					if($row['linkurl'] != '')$gourl = $row['linkurl'];
					else $gourl = 'javascript:;';
				?>
           <a href=""><div class="title"><?php echo $row['title']; ?></div></a>
           <div class="describe"><?php echo $row['keywords']; ?></div>
           <p><?php echo $row['description']; ?></p>
           <div class="time"><h4><?php echo GetDateMK($row['posttime']); ?></h4><span>有限时间：</span><p>不限</p></div>
            <?php
				  }
				?>
        </div>

 
        <div class="page">共1页6条记录</div>
<!-- start footer -->
     <div class="footer">
      <div class="container">
         <div class="row">
             <div class="col-lg-9 col-md-9 col-xs-9">
             <?php
                      $dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=20 AND  delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,1");
                      while($row = $dosql->GetArray())
                      {
                        if($row['linkurl'] != '')$gourl = $row['linkurl'];
                        else $gourl = 'javascript:;';
                      ?>
                 <div class="footer-logo">
                      
					           <img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>">
			           
                 </div>
                 <?php
                   }
            ?> 
                 <div class="footer-text">
                    <div class="footer-text">
                  合作热线:4008745099 18307459777 公司地址:湖南省长沙市鹤城区河西政府大楼
                 </div>
                 <div class="footer-text">
                 Copyright@2014-2015 aorise.com All Rights Reservede网站备案 湘ICP备15016651号
                 </div>
                 <div class="footer-text">
                 本栏目文字归aorise.cn所有，任何单位及个人为经许可，不得擅自转摘使用
                 </div>
                 </div>
       
             </div>
             <div class="col-lg-3 col-md-3 col-xs-3">
             <?php
                        $dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=20 AND  delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,1");
                        while($row = $dosql->GetArray())
                        {
                          if($row['linkurl'] != '')$gourl = $row['linkurl'];
                          else $gourl = 'javascript:;';
                    ?>
                 <div class="my-code">
                     
              					 <img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>"> 
                         <div class="name"><?php echo $row['title']; ?></div>
                 </div>
	              <?php
	                   }
				      ?> 
              </div>
         </div> 
      </div>
   </div>
<!-- end footer -->
</body>
</html>