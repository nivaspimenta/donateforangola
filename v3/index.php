<!DOCTYPE html>

<html>

<header>
    <?php include 'php/header.php'; ?>
</header>

<body>
    <div class="intro">
        <div class="mensagem" id="mensagem">
            Nos vos remercions pour les dons
        </div>
        <div class="imagem">
        </div>
        <div class="donate-button">
            <a href="#nodonation" class="donate">Donate</a>
        </div>
        <div class="ngo"><strong style="color: white; text-shadow: 1px 1px 2px white;">#</strong>Donate<strong
                style="color: white; text-shadow: 1px 1px 2px white;">For</strong>Angola</div>
    </div>

    <div class="sobrenos">
        <div class="texto">
            Members of the Angolan Community in the Netherlands have come together to set up and implement this project.
            Our mission is to relieve victims of extreme drought in Cuando Cubango, Angola. Through this campaign, we
            want to donate clothing and food to combat the urgent need for basic foodstuffs. We also want to bring the
            local government in Cuando Cubango into contact with Dutch experts in the field of water issues and
            agriculture.
        </div>
        <div class="titulo"><strong style="color: rgb(0, 162, 255)">#</strong>About<strong
                style="color: rgb(0, 162, 255)">Us</strong></div>
        <div class="imagem"></div>
    </div>

    <div class="galeria">
        <div class="corpo">
            <div class="titulo"><strong style="color: white;">#</strong>Comunity<strong strong
                    style="color: white;">In</strong>The<strong strong style="color: white;">Netherlands</strong></div>
            <div class="tela" id="tela"></div>
            <div class="texto">Southern Angola has been experiencing periods of extreme drought.
                Life-threatening situations result from the lack of water, the extinction of cattle and the loss of
                crops.
                We join hands for Cuando Cubango.</div>
        </div>

    </div>

    <div class="rodape">
        <div class="icon"></div>
        <div class="titulo"><strong style="color: rgb(0, 162, 255);">#</strong>Donate<strong
                style="color: rgb(0, 162, 255);">For</strong>Angola</div>
                <div class="ano">20<strong style="color: rgb(0, 162, 255);">21</strong>-20<strong style="color: rgb(0, 162, 255);">22</strong></div>
    </div>

</body>
<script>
function MudarMensagem() {
    const meng = ['Thank you for your donations', 'Nos vos remercions pour les dons', 'Bedankt voor jullie donaties',
        'Obrigado pelas vossas doações', 'Gracias por tus donaciones', 'Vielen Dank für Ihre Spenden'
    ];
    var i = Math.floor(Math.random() * meng.length)
    document.getElementById("mensagem").innerHTML = meng[i];
}

function MudarImagem() {

    // Saber quantos ficheiros estao na pasta
    const images = 14
    //const bg = images[Math.floor(Math.random() * images.length)];
    const bg = "url( '/img/galeria/" + Math.floor(Math.random() * images) + ".jpg')";

    document.getElementById("tela").style.backgroundImage = bg;
}

function Carregar() {
    MudarImagem();
    MudarMensagem();
}
setInterval(MudarImagem, 6000);
setInterval(MudarMensagem, 5000);
</script>

</html>