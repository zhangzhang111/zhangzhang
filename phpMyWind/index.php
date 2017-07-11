<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(); ?>
<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/index.css"/>
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
	<!-- start轮播图 -->
   <div id="myCarousel" class="carousel slide">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="images/banner1.jpg" alt="First slide">
        </div>
        <div class="item">
            <img src="images/banner2.jpg" alt="second slide">
        </div>
        <div class="item">
            <img src="images/banner3.jpg" alt="third slide">
        </div>
    </div>
    <!-- 轮播（Carousel）导航 -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
     <img src="images/left-arrow.png" alt=""> 
    </a>
    <a class="carousel-control right" href="#myCarousel" 
        data-slide="next">
        <img src="images/right-arrow.png" alt="">
    </a>
  </div>
    <!-- end 轮播图 -->
    <!--解决方案-->
      <div class="solution">
		<div class="aorise-title">
			<a href="sloution.php">解决方案/Solution More</a>
		</div>
		<div class="aorise-wrap"></div>
		<div class="s-content">
			<div class="container">
				<div class="row">

			<?php
			$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=16   AND  delstate='' AND checkinfo=true ORDER BY orderid ASC   LIMIT 0,3");
			while($row = $dosql->GetArray())
			{
				if($row['linkurl'] != '')$gourl = $row['linkurl'];
				else $gourl = 'javascript:;';
			?>
               <div class="col-lg-4 col-md-4 col-xs-4" >
                        <div class="s-content-image">
							<div class="s-image">
								<img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>">
							</div>
							<a href="solution-details.html"><div class="s-image-title"><?php echo $row['title']; ?></div></a>
						</div>
                    </div>
			 <?php
			         }
			         ?>

				</div>
			</div>		
		</div>
	</div>
	<!--end 解决方案-->
	<!-- start关于我们 -->
   <div class="about-us">
     <div class="aorise-title">
			<a href="aboutUs.php">关于我们/AboutUs More</a>
		</div>
		<div class="aorise-wrap"></div>
		<div class="container">
		    <div class="row">

		          	<?php
			$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=18 AND  delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,4");
			while($row = $dosql->GetArray())
			{
				if($row['linkurl'] != '')$gourl = $row['linkurl'];
				else $gourl = 'javascript:;';
			?>

                    <div class="col-lg-3 col-md-3 col-xs-3" >
								<img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>">
								<a href="<?php echo $gourl; ?>"><div class="a-title"><?php echo $row['title']; ?>
							</div></a>
	                    </div>
	                    <?php
				         }
				         ?>
	          </div>
	        </div>
	   </div>
	<!-- end关于我们 -->
	<!-- start新闻资讯 -->
    <div class="news">
       <div class="aorise-title">
           <a href="news.php">新闻资讯/NEWS More</a>
       </div>
       <div class="aorise-wrap"></div>
       <div class="container">
          <div class="row">
               <div class="col-lg-6 col-md-6 col-xs-6" >
               <?php
			$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=19 AND  delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,1");
			while($row = $dosql->GetArray())
			{
				if($row['linkurl'] != '')$gourl = $row['linkurl'];
				else $gourl = 'javascript:;';
			?>
			 <img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>">
			 
                  <div class="a-artcile">
                  <p><?php echo $row['title']; ?></p>
                  </div> 
              <?php
                 }
			   ?> 
              </div>

               <a href="<?php echo $gourl; ?>"><div class="col-lg-6 col-md-6 col-xs-6" >
                      <?php
			     $dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=4 AND  delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,8");
				while($row = $dosql->GetArray())
				{
					if($row['linkurl'] != '')$gourl = $row['linkurl'];
					else $gourl = 'javascript:;';
				?>
                <div class="triangle1">
                <p><?php echo $row['title']; ?><time style="float: right;">2017-05-25</time></p>
              </div>
               
              <?php
                 }
			   ?> 
         </div>
         </a>
      </div>
    </div> 
   </div>
<!-- end新闻资讯 -->
	<!-- start footer -->
     <div class="footer">
      <div class="container">
         <div class="row">
             <div class="col-lg-9 col-md-9 col-xs-9">
                 <div class="footer-logo">
                      <?php
					$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=20 AND  delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,1");
					while($row = $dosql->GetArray())
					{
						if($row['linkurl'] != '')$gourl = $row['linkurl'];
						else $gourl = 'javascript:;';
					?>
					 <img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>">
			 
                 </div>
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
                 <?php
                   }
			      ?> 
             </div>
             <div class="col-lg-3 col-md-3 col-xs-3">
                 <div class="my-code">
                     <?php
					$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=20 AND  delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,1");
					while($row = $dosql->GetArray())
					{
						if($row['linkurl'] != '')$gourl = $row['linkurl'];
						else $gourl = 'javascript:;';
					?>
					 <img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>">
			 
                 </div>
                 <div class="name">奥昇教育公众号</div>
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
