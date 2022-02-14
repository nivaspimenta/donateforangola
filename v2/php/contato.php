<?php $lang = $_GET['idi']; 

    $xmlnav = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/xml/contato.xml');
    
    $titulo='';
    $nome='';
    $email='';
    $mensagem='';
    $pnome='';
    $pemail='';
    $pmensagem='';
    $submit='';
    
    $url = strtok($_SERVER["REQUEST_URI"], '?');

    $titulo=$xmlnav->$lang->titulo;
    $nome=$xmlnav->$lang->nome;
    $email=$xmlnav->$lang->email;
    $mensagem=$xmlnav->$lang->mensagem;
    $pnome=$xmlnav->$lang->pnome;
    $pemail=$xmlnav->$lang->pemail;
    $pmensagem=$xmlnav->$lang->pmensagem;
    $submit=$xmlnav->$lang->submit;
?>
<!DOCTYPE html>
<html>

<header>
    <?php include 'header.php' ?>
    <link rel="stylesheet" href="/css/contato.css">
</header>

<body>

    <div id="cont-1">
        <h1><?php echo $titulo ?></h1>
        <form action="/php/sendemail.php?idi=<?php echo $_GET['idi']?>" method="post">
            <div id="linha">
                <div id="nome">
                    <label for="name"><?php echo $nome ?>  *</label>
                </div>
                <div id="campo">
                    <input type="text" id="campo-style" name="name" placeholder="<?php echo $pnome ?>" maxlength="50" required>
                </div>
            </div>
            <div id="linha">
                <div id="nome">
                    <label for="email"><?php echo $email ?>    *</label>
                </div>
                <div id="campo">
                    <input type="email" id="campo-style" name="email" placeholder="<?php echo $pemail ?>" maxlength="75" required>
                </div>
            </div>

            <div id="linha-mensagem">
                <div id="nome">
                    <label for="email"><?php echo $mensagem ?>  *</label>
                </div>
                <div id="campo">
                    <textarea type="text" id="campo-mensagem" name="message" placeholder="<?php echo $pmensagem ?>" maxlength="2600" required></textarea>
                </div>
            </div>

            <div id="linha">
                <div id="nome">
                    <label for="submit"></label>
                </div>
                <div id="campo">
                    <input id="btn-submit" type="submit" value="<?php echo $submit ?>">
                </div>
            </div>
        </form>
    </div>

    <?php include 'topnav.php'; ?>
</body>
   
</html>