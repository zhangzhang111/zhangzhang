<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(); ?>

<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/solution.css"/>
<!-- <link rel="stylesheet" href="css/common.css"/> -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/default/js/slideplay.js"></script>
<script type="text/javascript" src="templates/default/js/srcollimg.js"></script>
<script type="text/javascript" src="templates/default/js/loadimage.js"></script>
<script type="text/javascript" src="templates/default/js/top.js"></script>
<script type="text/javascript"></script>

</head>
<body>
<!-- header-->
    <?php require_once('header.php'); ?>
<!-- /header-->
<!--start头部-->
  <header>
      <?php
			$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=14 AND  delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 4,1");
			while($row = $dosql->GetArray())
			{
				if($row['linkurl'] != '')$gourl = $row['linkurl'];
				else $gourl = 'javascript:;';
			?>
			 <img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>">
			<?php
			  }
			?>
        <div class="myDiv1"><p>解决方案</p></div>
        <div class="myDiv2"><p style="text-align: right;">您当前所在位置:<a href="index.php">首页</a>>解决方案</p></div>
  </header> 
  <!-- end 头部 -->
  <!--start内容-->
  <section>
       <div class="solution"><p>解决方案</p></div>
       <!--start解决方案内容模块--> 
        <?php
				$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=14 AND  delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 4,3");
				while($row = $dosql->GetArray())
				{
					if($row['linkurl'] != '')$gourl = $row['linkurl'];
					else $gourl = 'javascript:;';
				?>
				<div class="content1"> 
           <div class="container">
              <div class="row">                 
                <div class="col-lg-3 col-md-3 col-xs-3">
                   <img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>">
                </div>
                <div class="col-lg-9 col-md-9 col-xs-9">
                  <div class="s-content">
                       <a href="solution-details.php"><?php echo $row['title']; ?></a>
                       <div class="time"><?php echo $row['keywords']; ?></div>
                       <div class="article"><?php echo $row['description']; ?></div>
                </div>
                </div>
                
              </div>
           </div>
          </div>
          <?php
				  }
				?>
    <!--end新闻资讯内容模块--> 
<!-- end 内容 -->
<!-- start footer -->
     <div class="footer">
      <div class="container">
         <div class="row">
             <div class="col-lg-9 col-md-9 col-xs-9">
                 <div class="footer-logo">
                      <?php
					$dosql->Execute("SELECT * FROM `#@__infoimg` WHERE classid=19 AND  delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,1");
					while($row = $dosql->GetArray())
					{
						if($row['linkurl'] != '')$gourl = $row['linkurl'];
						else $gourl = 'javascript:;';
					?>
					 <img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>">
			 
                 </div>
                 <div class="footer-text">
                    <?php echo $row['content']; ?>
                 </div>
                 <?php
                   }
			      ?> 
             </div>
             <div class="col-lg-3 col-md-3 col-xs-3">
                 <div class="my-code">
                     <?php
					$dosql->Execute("SELECT * FROM `#@__infoimg` WHERE classid=19 AND  delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,1");
					while($row = $dosql->GetArray())
					{
						if($row['linkurl'] != '')$gourl = $row['linkurl'];
						else $gourl = 'javascript:;';
					?>
					 <img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>">
			 
                 </div>
                 <div class="name"><?php echo $row['description']; ?></div>
             </div>
	              <?php
	                   }
				      ?> 
         </div> 
      </div>
   </div>
<!-- end footer -->
</body>
</html>