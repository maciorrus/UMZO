<?php
session_start();
foreach ($_POST as $k => $v)
    $_SESSION[$k] = $v;

if (!isset($_SESSION['lang']))
    $_SESSION['lang'] = 'en';

if ($_SESSION['lang'] == 'pl')
    include '../language/Polski.php';
else
    include '../language/English.php';

if (!isset($_GET['step']))
    $step = 1;
else
    $step = $_GET['step'];
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->     
    <link rel="stylesheet" href="style.css" />
    <title><?php echo $lang['setup_page'] . ' ' . $step; ?></title> 
    <script src="/js/jquery.js"></script>
</head>
<body>
    <section id="logo"> 
        <img src="/res/logo.png">
    </section>
    <nav id="top">
        <div class="top_nav<?php if ($step == 1) echo ' active'; ?>" >
<?php echo $lang['site_settings']; ?>
        </div>
        <div class="top_nav<?php if ($step == 2) echo ' active'; ?>" >
<?php echo $lang['database_configuration']; ?>
        </div>
        <div class="top_nav<?php if ($step == 3) echo ' active'; ?>" >
<?php echo $lang['admin_data']; ?>
        </div>
    </nav>
    <section id="main">
        <?php
        switch ($step) {
            case 1: include 'site_setts.php';
                break;
            case 2: include 'database_c.php';
                break;
            case 3: include 'basic_data.php';
                break;
        }
        ?>
    </section>
    <footer id="footer">

    </footer>
</body>
</html>
<?php ?>