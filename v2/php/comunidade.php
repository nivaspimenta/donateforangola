<?php $lang = $_GET['idi']; 

    $xmlnav = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/xml/comunidade.xml');
    
    $juntos='';
    $p1='';
    $p2='';
    $p3='';
    
    $url = strtok($_SERVER["REQUEST_URI"], '?');

    $juntos=$xmlnav->$lang->titulo;
    $p1 = $xmlnav->$lang->p1;
    $p2 = $xmlnav->$lang->p2;
    $p3 = $xmlnav->$lang->p3;
?>
<!DOCTYPE html>
<html>

<header>
    <?php include 'header.php' ?>
    <link rel="stylesheet" href="/css/comunidade.css">
</header>

<body>

    <div id="cont-1">
        
        <div id="img-1"></div>
        <div id="texto">
            <h1><strong style="color: black;">#</strong><?php echo $juntos ?></h1>
            <p><?php echo $p1 ?></p>
            <p><?php echo $p2 ?></p>
            <p><?php echo $p3 ?></p>
        </div>

        <div id="about"></div>
    </div>

    <?php include 'topnav.php'; ?>
</body>    
</html>