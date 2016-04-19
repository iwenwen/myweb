<?php
    $user=$this->session->userdata('user');
if(!$user){
    redirect('user/login');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Portfolio a Personal Category Flat Bootstarp responsive Website Template| Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Portfolio  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<base href="<?php echo site_url(); ?>">
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

<!------ light-box-script ----->
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" charset="utf-8">
	$(function() {
		$('.about-grid a').Chocolat({linkImages:false});
	});
</script>
<!------ light-box-script ----->
	<style>
		.blog-list{
			list-style: none;
			margin: 0;
			padding: 0;
			float: left;
			width: 350px;
			margin-right: 45px;
		}
		.blog-artical{
			width: 100%;
		}
	</style>

</head>
<body>	
	<!-- container -->
		<!-- header -->
		<?php
		    $user=$this->session->userdata('user');
		?>
		<div id="home" class="header">
            <div class="wrap ">
                 <img src="images/111.jpg" class="all_img" >
                 <img src="images/222.jpg" class="all_img">
                 <img src="images/333.jpg" class="all_img"  >
                 <img src="images/444.jpg"  class="all_img" >
                  <img src="images/555.jpg"  class="all_img" >
                 <div class="nav-icon">
                     <a href="#" class="right_bt" id="activator"><span> </span> </a>
                </div>
                <audio src="images/2.mp3" id="audio" autoplay="autoplay" loop="loop"></audio>
                                <span class="audio play" width="20px" height="20px"></span>



            </div>
            <div class="container">
				<!-- -->
				 <div class="box" id="box">
					 <div class="box_content">        					                         
						<div class="box_content_center">
						 	<div class="form_content">
								<div class="menu_box_list">
									<ul>
                                        <li><a class="login" id="user_log" href="javascript:;"> <?php echo $user->username?> 已登陆</a></li>
                                        <li><a class="login" href="user/logout">注销</a></li>
									    <li><a class="login" href="admin/login">管理员登陆</a></li>
										<li><a class="scroll" href="#about">About</a></li>
										<li><a class="scroll" href="#services">Services</a></li>
										<li><a class="scroll" href="#port">portfolio</a></li>
										<li><a class="scroll" href="#blog">Blog</a></li>
										<li><a class="scroll" href="#contact">Contact</a></li>
										<div class="clear"> </div>
									</ul>
								</div>
								<a class="boxclose" id="boxclose"> <span> </span></a>
							</div>                                  
						</div> 	
					</div> 
				</div>    

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
//                 $(document).ready(function(){
//                                 //Hide (Collapse) the toggle containers on load
//                                 $(".toggle_container").hide();
//                                                 //Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
//                                                 $(".trigger").click(function(){
//                                                     $(this).toggleClass("active").next().slideToggle("slow");
//                                                         return false; //Prevent the browser jump to the link anchor
//                                                 });
//
//                             });
         </script>
          <div class="banner-info text-center ">
             <h1>Videntur Parum</h1>
             <p>Love to Design and capture Photographs :)</p>
             <ul>
                 <li><a href="welcome/contact">Contact Me</a></li>
                 <li><a href="#">Follow Me</a></li>
             </ul>
          </div>
    </div>
</div>
    <!-- /header -->
    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <!-- head-section -->
            <div class="head-section text-center">
                <h2>About Me</h2>
                <span></span>
            </div>
            <!-- head-section -->
            <!-- about-grids -->
            <div class="about-grids">
                <div class="col-md-6 about-left-grid">
                    <h3>Videntur Parum</h3>
                    <span>Graphic Designer,UI/UX Expert </span>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla fam.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet purus ipsum. In ante leo, elementum at placerat in, aliquet non lectus. Nam imperdiet magna eu faucibus cursus.</p>
                </div>
                <div class="col-md-6 about-right-grid">
                    <ul class="tab_flow">
                        <li><img src="images/555.jpg"></li>
                        <li><img src="images/666.jpg"></li>
                        <li><img src="images/777.jpg"></li>
                        <li><img src="images/888.jpg"></li>
                        <li><img src="images/555.jpg"></li>
                    </ul>
                </div>
            </div>

            <!-- about-grids -->
        </div>
    </div>
    <!-- about -->

  <!-- services -->
  		<div id="services" class="services">
  			<!-- head-section -->
  				<div class="head-section service-head text-center">
  					<h2>My Services</h2>
  					<span></span>
  				</div>
  				<!-- head-section -->
  				<!-- services-grids -->
  				<div class="service-grids text-center">
  					<div class="container">
  						<div class="col-md-4">
  							<div class="service-grid t-service-grid">
  								<span class="s-cion1"> </span>
  								<h3>PRODUCT DESIGN</h3>
  								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
  							</div>
  						</div>
  						<div class="col-md-4">
  							<div class="service-grid t-service-grid">
  								<span class="s-cion2"> </span>
  								<h3>PRODUCT DESIGN</h3>
  								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
  							</div>
  						</div>
  						<div class="col-md-4">
  							<div class="service-grid t-service-grid">
  								<span class="s-cion3"> </span>
  								<h3>PRODUCT DESIGN</h3>
  								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elised diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquat</p>
  							</div>
  						</div>
  						<div class="col-md-4">
  							<div class="service-grid">
  								<span class="s-cion4"> </span>
  								<h3>PRODUCT DESIGN</h3>
  								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
  							</div>
  						</div>
  						<div class="col-md-4">
  							<div class="service-grid">
  								<span class="s-cion5"> </span>
  								<h3>PRODUCT DESIGN</h3>
  								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
  							</div>
  						</div>
  						<div class="col-md-4">
  							<div class="service-grid">
  								<span class="s-cion6"> </span>
  								<h3>PRODUCT DESIGN</h3>
  								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
  							</div>
  						</div>
  						<div class="clearfix"> </div>
  					</div>
  				</div>
  				<!-- services-grids -->
  		</div>
  		<!-- services -->
    <!-- portfolio -->
    <div id="port" class="portfolio">
        <div class="container">
            <!-- head-section -->
            <div class="head-section text-center">
                <h2>Portfolio</h2>
                <span></span>
            </div>
            <!-- /head-section -->
            <!-- portfolio-grids -->
            <div class="portfolio-grids">
                <div class="portfolio-grid about-grid">
                    <a href="images/22.jpg" title="name" rel="title2">
                        <div class="view view-first">
                          <img src="images/22.jpg" alt=""/>
                          <div class="mask">
                            <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                            <h3>Product Design</h3>
                            <p>"LimeLight"</p>
                          </div>
                        </a> </div>
                </div>
                <div class="portfolio-grid about-grid">
                    <a href="images/11.jpg" title="name" rel="title2">
                        <div class="view view-first">
                          <img src="images/11.jpg" alt=""/>
                          <div class="mask">
                            <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                            <h3>Product Design</h3>
                            <p>"LimeLight"</p>
                          </div>
                        </a> </div>
                </div>
                <div class="portfolio-grid about-grid">
                    <a href="images/33.jpg" title="name" rel="title2">
                        <div class="view view-first">
                          <img src="images/33.jpg"  alt=""/>
                          <div class="mask">
                            <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                            <h3>Product Design</h3>
                            <p>"LimeLight"</p>
                          </div>
                        </a> </div>
                </div>
                <div class="portfolio-grid about-grid">
                    <a href="images/44.jpg" title="name" rel="title2">
                        <div class="view view-first">
                          <img src="images/44.jpg"  alt=""/>
                          <div class="mask">
                            <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                            <h3>Product Design</h3>
                            <p>"LimeLight"</p>
                          </div>
                        </a> </div>
                </div>
                <div class="portfolio-grid about-grid">
                    <a href="images/55.jpg" title="name" rel="title2">
                        <div class="view view-first">
                          <img src="images/55.jpg" alt=""/>
                          <div class="mask">
                            <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                            <h3>Product Design</h3>
                            <p>"LimeLight"</p>
                          </div>
                        </a> </div>
                </div>
                <div class="portfolio-grid about-grid">
                    <a href="images/66.jpg" title="name" rel="title2">
                        <div class="view view-first">
                          <img src="images/66.jpg"  alt=""/>
                          <div class="mask">
                            <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                            <h3>Product Design</h3>
                            <p>"LimeLight"</p>
                          </div>
                        </a> </div>
                </div>
                <div class="portfolio-grid about-grid">
                    <a href="images/77.jpg" title="name" rel="title2">
                        <div class="view view-first">
                          <img src="images/77.jpg"  alt=""/>
                          <div class="mask">
                            <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                            <h3>Product Design</h3>
                            <p>"LimeLight"</p>
                          </div>
                        </a> </div>
                </div>
                <div class="portfolio-grid about-grid">
                    <a href="images/88.jpg" title="name" rel="title2">
                        <div class="view view-first">
                          <img src="images/88.jpg" alt=""/>
                          <div class="mask">
                            <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                            <h3>Product Design</h3>
                            <p>"LimeLight"</p>
                          </div>
                        </a> </div>
                </div>
                <div class="portfolio-grid about-grid">
                                    <a href="images/22.jpg" title="name" rel="title2">
                                        <div class="view view-first">
                                          <img src="images/22.jpg" alt=""/>
                                          <div class="mask">
                                            <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                                            <h3>Product Design</h3>
                                            <p>"LimeLight"</p>
                                          </div>
                                        </a> </div>
                                </div>
                                <div class="portfolio-grid about-grid">
                                    <a href="images/11.jpg" title="name" rel="title2">
                                        <div class="view view-first">
                                          <img src="images/11.jpg" alt=""/>
                                          <div class="mask">
                                            <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                                            <h3>Product Design</h3>
                                            <p>"LimeLight"</p>
                                          </div>
                                        </a> </div>
                                </div>
                                <div class="portfolio-grid about-grid">
                                    <a href="images/33.jpg" title="name" rel="title2">
                                        <div class="view view-first">
                                          <img src="images/33.jpg"  alt=""/>
                                          <div class="mask">
                                            <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                                            <h3>Product Design</h3>
                                            <p>"LimeLight"</p>
                                          </div>
                                        </a> </div>
                                </div>
                                <div class="portfolio-grid about-grid">
                                    <a href="images/44.jpg" title="name" rel="title2">
                                        <div class="view view-first">
                                          <img src="images/44.jpg"  alt=""/>
                                          <div class="mask">
                                            <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                                            <h3>Product Design</h3>
                                            <p>"LimeLight"</p>
                                          </div>
                                        </a> </div>
                                </div>
            </div>
            <!-- portfolio-grids -->
        </div>
    </div>
    <!-- /portfolio -->
    <!-- blog -->
    <div id="blog" class="blog">
        <div class="container">
            <!-- head-section -->
            <div class="head-section text-center">
                <h2>My Blog</h2>
                <span> </span>
            </div>
            <!-- /head-section -->
            <!-- blog-articals -->
            <div class="blog-articals">
                <ul class="blog-list">
                </ul>
                <ul class="blog-list">
                </ul>
                <ul class="blog-list" style="margin-right: 0;">
                </ul>
            </div>
            <div class="clearfix"> </div>
            <!-- blog-articals -->
            <p class="more-articals text-center">Check Out My <a href="#">Blog</a> And Subscribe To Get All The Updates</p>
        </div>
    </div>
    <!-- /blog -->
    <!-- projects -->
    <div class="projects">
        <div class="container">
            <div class="project-grids">
                <div class="cycle">
                    <span> </span>
                </div>
                <div class="project-grid total-project">
                    <p>79</p>
                    <p>Projects</p>
                    <span> <i class="p-icon"> </i></span>
                </div>
                <div class="project-grid clientsgrid">
                    <div>
                    <p>25</p>
                    <p>Clients</p>
                    </div>
                    <span> <i class="p-icon"> </i></span>
                </div>
                <div class="project-grid people-grid">
                    <div>
                    <p>100%</p>
                    <p>Satisfaction</p>
                    </div>
                    <span> <i class="p-icon"> </i></span>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- projects -->
    <div id="contact" class="catch-on text-center">
        <p>Want To Discuss Any Creative Projct ? <a class="catch" href="welcome/contact">Contact Me</a></p>
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
             <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
              <script type="text/javascript">
                         $(document).ready(function() {
                             $().UItoTop({ easingType: 'easeOutQuart' });
                         });
                </script>
        </div>
    <!-- /footer -->
<!-- /container -->
<script>
    $(function(){
        $blogHeadSection = $('#blog .head-section');
        var iHeadSectionTop = $blogHeadSection.offset().top,
            iHeadSectionHeight = $blogHeadSection.height();
        var bLoad = true;//判断是否该加载新数据
        var bLoaded = false;//判断本次请求的数据是不是加载完毕
        var isEnd = false;//判断是不是加载完数据库中的所有数据
        var page = 0;//控制分页
        function getMinUl(){
            $blogList = $('.blog-list');
            var $minUl =  $blogList.eq(0);
            for(var i=1; i<$blogList.length; i++){
                if($blogList.eq(i).height() < $minUl.height()){
                    $minUl = $blogList.eq(i);
                }
            }
            return $minUl;
        }
        $(window).on('scroll', function(){
            if($(window).height()+$(window).scrollTop() >= iHeadSectionTop+iHeadSectionHeight && !isEnd){
                if(bLoad){
                    bLoad = false;
                    var body=document.body;
                    $load=$('<div class="blog_load">Loading...</div>');
                   $(body).append($load);
                    $.get('welcome/get_articles?page='+page, function(res){
                        if(res.data.length>0){
                            for(var i=0; i<res.data.length; i++){
                                var blog = res.data[i];
                                var number=Math.random(0,1)*100+20;
                                var count_comm=blog.comments;
                                var text=blog.content.substring(0,number)+'...[查看更多]';
                                var html = '<li class="blog-artical text" >'
                                                + '<div class="blog-artical-pic">'
                                                    + '<a href="welcome/detail/'+blog.blog_id+'"><img src="'+blog.photp+'" title="name" height="200px"/></a>'
                                                + '</div>'
                                                + '<div class="blog-artical-info">'
                                                    + '<h3><a href="welcome/detail/'+blog.blog_id+'">'+blog.title+'</a></h3>'
                                                    + '<span>'+blog.admin_name+' | <a href="welcome/detail/'+blog.blog_id+'">'+blog.comm+'&nbsp;comments</a></span>'
                                                    + '<p>'+text+'</p>'
                                                    + '<a class="more-btn" href="welcome/detail/'+blog.blog_id+'">See More</a>'
                                                    + '<div class="clearfix"> </div>'
                                                + '</div>'
                                            + '</li>';
                                var $minUl = getMinUl();
                                $minUl.append(html);
                                            $load.remove();
                            }
                            bLoaded = true;
                            page += 6;
                        }else{
                            isEnd = true;
                                $load.remove();
                        }
                    }, 'json');
                }
                var $minUl = getMinUl();
                if($(window).height()+$(window).scrollTop() >= $minUl.offset().top+$minUl.height() && bLoaded){
                    bLoad = true;
                    bLoaded = false;
                }
            }
        });

    });
    var $ul=$(".about-right-grid ul");
    var $li=$(".about-right-grid ul li");
    $ul.css({'width':$li.eq(0).width()*$li.length});

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
</body>
</html>

