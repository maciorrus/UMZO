<?php

require_once './config/db.php';
$db = new DB();
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->     
        <link rel="stylesheet" href="css/model/<?php echo $settings[0]['model']; ?>/style.css" />
			<?php 
				$modules = $db->query("SELECT * FROM active_modules", null);
				foreach ($modules as $module){
					?>
					<link rel="stylesheet" href="views/templates/<?php echo $settings['template'].'/'.$settings['model'].'_model/'.$module['position'].'_logo.css'; ?>" />
					<?php 
				}
			?>
        <style>
        </style>
        <title><?php echo $settings[0]['site_title']; ?></title> 
    </head>
    <body>
		<header id="top">
			<?php 
				$modules = $db->query("SELECT * FROM active_modules WHERE position = 'top'", null);
				foreach ($modules as $module){
					require_once 'modules/'.$module['module'].'.php';
					$m = $module_creator->create($module['module'], $module['id']);
					$m->print_out();
				}
			?>
		</header>
		<section id="top_left">
			<?php 
				$modules = $db->query("SELECT * FROM active_modules WHERE position = 'top_left'", null);
				foreach ($modules as $module){
					$m = $module_creator->create($module['module'], $module['id']);
					$m->print_out();
				}
			?>
		</section>
		<section id="top_right">
			<?php 
				$modules = $db->query("SELECT * FROM active_modules WHERE position = 'top_right'", null);
				foreach ($modules as $module){
					$m = $module_creator->create($module['module'], $module['id']);
					$m->print_out();
				}
			?>
		</section>
		<section id="top_2nd">
		
		</section>
		<section id="left">
		
		</section>
		<section id="content">
		
		</section>
		<section id="right">
		
		</section>
		<section id="bottom">
		
		</section>
        <section id="bottom_left">
		
		</section>
        <section id="bottom_right">
		
		</section>
        <footer id="footer">
		
		</footer>
    </body>
</html>

<!-- 


        <article>
            <header>
            	<h1>Nagłówek Artykułu</h1>
            </header>
            <section id="article-content">
                <p>Tutaj właściwa treść artykułu...</p>
            </section>
            <footer>
                <p>Stopka artykułu</p>
            </footer>
        </article>
        <footer>
            <p>Stopka strony</p>
        </footer>
        
        
        
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>WOWsoft CMS</title>
<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>

<div id="main_container">
	<div id="header">
    	<div class="logo"><img src="img/logo.png" border="0" alt="" title="" /></div>       
    </div>
        <div class="menu">
        	<ul>                                                                         
        	<li class="selected"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Contact</a></li>
        	</ul>
        </div>
        
    <div class="center_content">
    
     	<div class="center_left">
            <div class="welcome_box">
            <p class="welcome">
<span class="orange">WOWsoft is new CMS based on kohana PHP framework</span><br />
Basic version is completly free, hovever some packages, templates or modules may not. We do our best to make sure full compatibility of all modules, packages and templates. However, if you notice any bug please do not hesitate to report this.
			</p>
            <a href="#" class="smallButton">Read more</a>          
            </div>
         
<!--
         <div class="features">   
            <div class="title">Main features</div>
            
                    <ul class="list">
                    <li><span>1</span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></li>
                    <li><span>2</span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></li>
                    <li><span>3</span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></li>
                    <li><span>4</span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></li>
                    </ul> 
         </div> 
-->         
 <!--         
         <div class="features">   
            <div class="title">Why use WOWsoft?</div>
                <div class="news_box">
                    <img src="img/news_icon.gif" />
                    <div class="news_content">
                    Basic version is completely free for personal or commercial purpose. It let you try it, test it. You can also develop it on your own and sell your version. However according to licence, please do not forget to include note that your version is not official.
                    </div>   
                </div>
                <div class="news_box">
                    <img src="img/news_icon.gif" />
                    <div class="news_content">
                    Very easy usage and fast installation. You do not have to know HTML or anything about web development. Interface is user friendly and intuitive. You should not have any problem with setting your website up. In case of any doubts, check user guide.
                    </div>   
                </div>       
                <div class="news_box">
                    <img src="img/news_icon.gif" />
                    <div class="news_content">
                    Full compatibility with all official packages, modules and templates. You do not have to worry about it when downloading new feature to your website.
                    </div>   
                </div>       
                <div class="news_box">
                    <img src="img/news_icon.gif" />
                    <div class="news_content">
                    WOWsoft is growing every day. You will be notified when new CMS version or module will be available. You can add it simply from your admin panel.
                    </div>   
                </div>       

         </div> 
         
         
           
            
            
        </div> 
        
        
        <div class="center_right">
        
  
<!--
       <div class="software_box"><img src="img/3dbox.gif" alt="" title="" /></div>
-->        
<!-- 
                        <div class="text_box">
                        <div class="title">Clients login</div>
                            <div class="login_form_row">
                            <label class="login_label">Username:</label><input type="text" name="name" class="login_input" />
                            </div>
                            
                            <div class="login_form_row">
                            <label class="login_label">Password:</label><input type="password" name="pass" class="login_input" />
                            </div>                                     
                            <a href="#" class="smallButton">Login</a>
                        
                        </div>
                        
                        <div class="testimonials">
                        	<div class="title">Downloads</div>
                            <div class="text_box">
                             <p class="testimonial">
                             <a href="#">Basic version 1.0</a>                             
                             </p>
                            
                            
                            </div>                    
                        
                        </div>
        

        </div>  
        
        <div class="clear"></div> 
    
    </div>    

    
    <div id="footer">                                              
        <div class="left_footer"><a href="#">home</a> <a href="#">about</a> <a href="#">privacy policy</a><a href="#">contact</a></div>
        <div class="right_footer"><a href="http://csstemplatesmarket.com"  target="_blank"><img src="img/csstemplatesmarket.gif" border="0" alt="" title="" /></a>
        </div>   
    
    </div>
    
    
    
</div> 
<!-- end of main_container -->
<!-- 
</body>
</html>

-->

