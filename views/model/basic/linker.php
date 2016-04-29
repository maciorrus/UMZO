<?php

///require_once './config/db.php';
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
        <title><?php echo $settings['site_title']; ?></title> 
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
