<?php
    $user=$this->session->userdata('user');
if(!$user){
    redirect('user/login');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Portfolio a Personal Category Flat Bootstarp responsive Website Template| Single :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Portfolio  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<base href="<?php echo site_url(); ?>">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
</script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,300,600,500,900,700,100,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
<!---//webfonts--->
</head>
<body>	
	<!-- container -->
		<!-- header -->
		<div id="home" class="single_header">
			<div class="container">
				<!-- -->
				<div class="nav-icon">
					 <a href="#" class="right_bt" id="activator"><span> </span> </a>
				</div>

				 <div class="box" id="box">
					 <div class="box_content">        					                         
						<div class="box_content_center">
						 	<div class="form_content">
								<div class="menu_box_list">
									<ul>
									 <audio src="images/2.mp3" id="audio" autoplay="autoplay" loop="loop"></audio>
                                     <span class="audio play" width="20px" height="20px"></span>
									<li><a class="login" id="user_log" href="javascript:;"> <?php echo $user->username?> 已登陆</a></li>
                                      <li><a class="login" href="user/logout">注销</a></li>
                                     <li><a class="login" href="admin/login">管理员登陆</a></li>
										<li><a class="scroll" href="#about">About</a></li>
										<li><a class="scroll" href="#services">Services</a></li>
										<li><a class="scroll" href="#port">portfolio</a></li>
										<li><a class="scroll" href="#blog">Blog</a></li>
										<li><a href="contact.html">Contact</a></li>
										<div class="clear"> </div>
									</ul>
								</div>
								<a class="boxclose" id="boxclose"> <span> </span></a>
							</div>                                  
						</div> 	
					</div> 
				</div>    
				<!-- script-for-box -->
				 <script type="text/javascript">
					var $ = jQuery.noConflict();
						$(function() {
							$('#activator').click(function(){
								$('#box').animate({'top':'0px'},500);
							});
							$('#boxclose').click(function(){
							$('#box').animate({'top':'-700px'},500);
							});
						});
						$(document).ready(function(){
						//Hide (Collapse) the toggle containers on load
						$(".toggle_container").hide(); 
						//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
						$(".trigger").click(function(){
							$(this).toggleClass("active").next().slideToggle("slow");
								return false; //Prevent the browser jump to the link anchor
						});
											
					});
				</script>
				<!-- script-for-box -->
				<!----->
				
			</div>
		</div>
		<!-- /header -->
		<div class="single">
		   <div class="container">
	 	   	<img src="<?php echo $blog->photp?>" width="100%" height="400" alt=""/>
			   <h2 class="article_title"><?php echo $blog->title?>   <span>written by</span>  <?php echo $blog->  admin_name?></h3>
	 	   	<p class="article"> <?php echo $blog->content?> </p>
	 	    <ul class="comment-list">
				<?php
				   foreach($blog->comments as $comment){
				?>

		  		         <li class="comm_list"><img src="<?php echo $user->url?>" class="img-responsive" alt="">
		  		           <div class="desc">
							   <p>commented by: <a href="javacript:;" title="Posts by admin" rel="author"><?php echo $comment->comm_name?></a></p>
							   <p>time: <a href="javacript:;" title="Posts by admin" rel="author"><?php echo $comment->add_time?></a></p>
							    <p>centent: <a href="javacript:;" title="Posts by admin" rel="author"><?php echo $comment->subject?></a></p>


						   </div>
		  		           <div class="clearfix"></div>
		  		         </li>
				<?php
				}
				?>
		  	</ul>
		  	<div class="comments-area">
		  		        	<h3>Add New Comment</h3>
							<form action="welcome/post_comment" method="post">

								<input type="hidden" name="blog_id" value="<?php echo $blog->blog_id?>">
								<p>
									<label>Name</label>
									<span>*</span>
									<input type="text" value="" name='name'>
								</p>
								<p>
									<label>Email</label>
									<span>*</span>
									<input type="text" value="" name="email">
								</p>
								<p>
									<label>Idea</label>
									<span>*</span>
									<input type="text" value="" name="website">
								</p>
								<p>
									<label>Comment</label>
									<span>*</span>
									<textarea name="subject"></textarea>
								</p>
								<p>
									<input type="submit" value="Submit Comment" >
								</p>
							</form>
					  </div>
		   </div>
		  </div>
		<!-- footer -->
		<div class="container">
		<div class="footer">
				<div class="footer-left">
					<p>Template by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
				</div>
				<div class="footer-right">
					<ul>
						<li><a href="#"><span class="face"> </span></a></li>
						<li><a href="#"><span class="twit"> </span></a></li>
						<li><a href="#"><span class="dri"> </span></a></li>
						<li><a href="#"><span class="tech"> </span></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
									  var audio=true;
                                        var $audio=document.getElementById('audio');
                                        $('.audio').on('click',function(){
                                            if(audio==true){
                                                 $(this).removeClass('play').addClass('pause');
                                                 $audio.pause();
                                                        audio=false;
                                            }
                                            else{
                                                 $(this).removeClass('pause').addClass('play');
                                                 $audio.play();
                                                        audio=true;
                                            }
                                            });

								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
		<!-- /footer -->
	<!-- /container -->
</body>
</html>

