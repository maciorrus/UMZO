<?php
session_start();

function getSValue($name){
    if(isset($_SESSION[$name]))
        return $_SESSION[$name];
    else
        return "";
}
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
            <a href="index.php">
                <?php echo $lang['site_settings']; ?>
            </a>
        </div>
        <div class="top_nav<?php if ($step == 2) echo ' active'; ?>" >
            <?php 
                if(isset($_SESSION['host_name'])){
                    echo '<a href="index.php?step=2">';
                    echo $lang['database_configuration'];
                    echo '</a>';
                }else{
                    echo $lang['database_configuration'];
                }
            ?>
        </div>
        <div class="top_nav<?php if ($step == 3) echo ' active'; ?>" >
            <?php 
                if(isset($_SESSION['admin_login'])){
                    echo '<a href="index.php?step=3">';
                    echo $lang['admin_data'];
                    echo '</a>';
                }else{
                    echo $lang['admin_data'];
                }
            ?>
        </div>
        <div class="top_nav<?php if ($step == 4) echo ' active'; ?>" >
<?php echo $lang['installation']; ?>
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
            case 4: include 'install.php';
                break;
        }
        ?>
    </section>
    <footer id="footer">

    </footer>
</body>
</html>