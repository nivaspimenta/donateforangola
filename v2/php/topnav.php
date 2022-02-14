<?php $lang = $_GET['idi']; 

    $xmlnav = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/xml/topnav.xml');
    
    $comunidade='';
    $contato='';
    $doar='';
    $casa='';
    
    $url = strtok($_SERVER["REQUEST_URI"], '?');

    $casa=$xmlnav->$lang->inicio;
    $comunidade = $xmlnav->$lang->comunidade;
    $contato = $xmlnav->$lang->contacto;
    $doar = $xmlnav->$lang->doar;
?>

<head>

    <div id="container">
        <div id="fundo">
            <a id="ling" href="/index.php"> <a id="nl" href="<?php echo $url.'?idi=nl'; ?>">NL</a> <a id="en" href="<?php echo $url.'?idi=en'; ?>">EN</a> <a id="pt" href="<?php echo $url.'?idi=pt'; ?>">PT</a> </a>
            <a id="doar" href="/php/doar.php?idi=<?php echo $_GET['idi']?>"> <?php echo $doar; ?> </a>
            <a id="cont" href="/php/contato.php?idi=<?php echo $_GET['idi']?>"> <?php echo $contato; ?> </a>
            <a id="com" href="/php/comunidade.php?idi=<?php echo $_GET['idi']?>"> <?php echo $comunidade; ?> </a>
            <a id="hom" href="/php/main.php?idi=<?php echo $_GET['idi']?>"> <?php echo $casa; ?> </a>
        </div>
    </div>    

</head>

<!--
<div id="fundo">
        <a id="ling" href="/index.php"> <a id="nl" href="<?php echo $url.'?idi=nl'; ?>">NL</a> <a id="en" href="<?php echo $url.'?idi=en'; ?>">EN</a> <a id="pt" href="<?php echo $url.'?idi=pt'; ?>">PT</a> </a>
        <a id="doar" href="#doar"> <?php echo $doar; ?> </a>
        <a id="cont" href="#contato"> <?php echo $contato; ?> </a>
        <a id="com" href="#comunidade"> <?php echo $comunidade; ?> </a>
        <a id="hom" href="/php/main.php?idi=<?php echo $_GET['idi']?>"> <?php echo $casa; ?> </a>
</div>
-->