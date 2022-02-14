<?php $lang = $_GET['idi'];

    $xmlnav = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/xml/doar.xml');
    
    $plink='';
    $url = strtok($_SERVER["REQUEST_URI"], '?');
    $plink=$xmlnav->pagina;
?>
<!DOCTYPE html>
<html>

<header>
    <?php include 'header.php' ?>
    <link rel="stylesheet" href="/css/doar.css">
</header>

<body>

    <div id="cont-1">
        <iframe id="janela" frameborder="0" src="<?php echo $plink ?>"></iframe>
    </div>

    <?php include 'topnav.php'; ?>
</body>
   
</html>