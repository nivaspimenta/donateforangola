<!DOCTYPE html>
<html>

<header>
    <?php include 'php/header.php'; ?>
    <link rel="stylesheet" href="/css/index.css">
</header>

<body onload="tempo(); MudarDeCor()">
    <div id="intro">
        <div id="bemvindo">
            Welkom <br>
            Welcome <br>
            Bem-Vindo
        </div>

        <div id="lang">
            <a id="comecar" href="/php/main.php?idi=nl">Beginnen / Start / Começar 🡢</a>
        </div>

        <div id="donate">
            <strong>#</strong>donate<strong>for</strong>angola<br>
        </div>

        <div id="relogio"></div>
    </div>

    <script>
        function tempo() {
            const today = new Date();
            let h = today.getHours();
            let m = today.getMinutes();
            let d = today.getDay();
            let mo = today.getMonth();
            let y = today.getFullYear();
            h = corrigir(h);
            m = corrigir(m);
            document.getElementById('relogio').innerHTML = d + "/" + mo + "/" + y + " <strong> " + h + ":" + m + "</strong>";
            setTimeout(tempo, 1000);
        }

        function MudarDeCor() {
            const colors = ['rgb(12, 184, 69)', 'rgb(39, 193, 253)', 'rgb(0,0,0)'];
            var i = Math.floor(Math.random() * colors.length)
            document.getElementById('intro').style.backgroundColor = colors[i];
            
            document.getElementById('bemvindo').style.color = (i==0) ? 'black' : 'white';
            document.getElementById('bemvindo').style.borderColor = (i==0) ? 'black' : 'white';
            document.getElementById('donate').style.color = (i==0) ? 'black' : 'white';
            document.getElementById('relogio').style.color = (i==0) ? 'black' : 'white';
            document.getElementById('relogio').style.borderColor = (i==0) ? 'black' : 'white';
            document.getElementById('comecar').style.color = (i==0) ? 'white' : 'black';
            document.getElementById('comecar').style.backgroundColor = (i==0) ? 'black' : 'white';
        }

        function corrigir(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }

        setInterval(MudarDeCor, 7000);
    </script>

</body>

</html>