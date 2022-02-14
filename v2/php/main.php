<?php $lang = $_GET['idi']; 

    $xmlnav = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/xml/main.xml');
    
    $aboutus='';
    $p1='';
    $p2='';
    $p3='';
    $p4='';
    
    $url = strtok($_SERVER["REQUEST_URI"], '?');

    $aboutus=$xmlnav->$lang->sn;
    $p1 = $xmlnav->$lang->texto->p1;
    $p2 = $xmlnav->$lang->texto->p2;
    $p3 = $xmlnav->$lang->texto->p3;
    $p4 = $xmlnav->$lang->texto->p4;
?>
<!DOCTYPE html>
<html>

<header>
    <?php include 'header.php' ?>
    <link rel="stylesheet" href="/css/main.css">
</header>

<body>

    <div id="cont-1">
        
        <div id="img-1"></div>
        <div id="texto">
            <h1><strong style="color: black;">#</strong><?php echo $aboutus ?></h1>
            <p><?php echo $p1 ?></p>
            <p><?php echo $p2 ?></p>
            <p><?php echo $p3 ?></p>
            <p><?php echo $p4 ?></p>
        </div>

        <div id="about"></div>
    </div>

    <?php include 'topnav.php'; ?>
</body>
    
</html>