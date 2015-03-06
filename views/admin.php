<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title><?php echo $stitle; ?></title>
<link rel="stylesheet" type="text/css" href="http://kohana.cba.pl/kohana/css/main.css" />
</head>
<body style="top:0px;">

<div id="main_container">
	<div id="header" style="height: auto;">
    	<div class="logo"><img src="http://kohana.cba.pl/kohana/img/logo.png" border="0" alt="" title="" style="height:35px"/></div>       
    </div>
        <div class="menu">
        	<ul>                                                                         
        	<li class="selected"><a href="/kohana/index.php/admin/">Main settings</a></li>
        	</ul>
        </div>
        
    <div class="center_content">
    
     	<div class="center_left">
            <div class="welcome_box">
            <p class="welcome">
<span class="orange">Site settings</span><br />
<?php
echo Form:: open();

echo Form::label('stitle', 'Site title');
echo Form::input('stitle', $stitle);

echo Form::submit('submit', 'Save');

echo FORM:: close();
?>

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
         
         <div class="features">   
            <div class="title">Why use WOWsoft?</div>
                <div class="news_box">
                    <img src="http://kohana.cba.pl/kohana/img/news_icon.gif" />
                    <div class="news_content">
                    Basic version is completely free for personal or commercial purpose. It let you try it, test it. You can also develop it on your own and sell your version. However according to licence, please do not forget to include note that your version is not official.
                    </div>   
                </div>
                <div class="news_box">
                    <img src="http://kohana.cba.pl/kohana/img/news_icon.gif" />
                    <div class="news_content">
                    Very easy usage and fast installation. You do not have to know HTML or anything about web development. Interface is user friendly and intuitive. You should not have any problem with setting your website up. In case of any doubts, check user guide.
                    </div>   
                </div>       
                <div class="news_box">
                    <img src="http://kohana.cba.pl/kohana/img/news_icon.gif" />
                    <div class="news_content">
                    Full compatibility with all official packages, modules and templates. You do not have to worry about it when downloading new feature to your website.
                    </div>   
                </div>       
                <div class="news_box">
                    <img src="http://kohana.cba.pl/kohana/img/news_icon.gif" />
                    <div class="news_content">
                    WOWsoft is growing every day. You will be notified when new CMS version or module will be available. You can add it simply from your admin panel.
                    </div>   
                </div>       

         </div> 
         
         
           
            
            
        </div> 
        
        
        <div class="center_right">
        
  
<!--
       <div class="software_box"><img src="http://kohana.cba.pl/kohana/img/3dbox.gif" alt="" title="" /></div>
-->        
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
        <div class="right_footer"><a href="http://csstemplatesmarket.com"  target="_blank"><img src="http://kohana.cba.pl/kohana/img/csstemplatesmarket.gif" border="0" alt="" title="" /></a>
        </div>   
    
    </div>
    
    
    
</div>
<!-- end of main_container -->

</body>
</html>
