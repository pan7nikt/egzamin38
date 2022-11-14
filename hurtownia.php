<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia komputerowa</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>
    <div id="topl">
        <ul>
            <li>
                Producenci
                <ol>
                    <li>Intel</li>
                    <li>AMD</li>
                    <li>Motorola</li>
                    <li>Corsair</li>
                    <li>ADATA</li>
                    <li>WD</li>
                    <li>Kingstone</li>
                    <li>Patriot</li>
                    <li>Asus</li>
                </ol>
            </li>
        </ul>
    </div>
    <div id="topm">
        <h1>Dystrybucja sprzętu komputerowego</h1>
        <form method="post">
            Wybierz producenta<br>
            <input type="number" name="producent">
            <input type="submit" value="WYŚWIETL">
        </form>
    </div>
    <div id="topr">
        <img src="sprzet.png" alt="Sprzedajemy komputery">
    </div>
    <div id="content">
        <h2>Podzespoły wybranego producenta</h2>
        <!--SKRYPT-->
        <?php
        if(isset($_POST['producent'])){
            $conn = mysqli_connect('localhost','root','','sklep');
            if($_POST['producent']<9 && $_POST['producent']>0)
            {
                $q = mysqli_query($conn,'SELECT `nazwa`,`cena`,`dostepnosc` FROM `podzespoly` WHERE `producenci_id`='.$_POST['producent'].'');
                while($a = mysqli_fetch_array($q))
                {
                    echo($a['nazwa']." CENA: ".$a['cena']);
                    if($a['dostepnosc']){
                        echo(" DOSTĘPNY");
                    }
                    else{
                        echo(" NIEDOSTĘPNY");
                    }
                    echo("<br>");
                }
            }
        }
        ?>
    </div>
    <div id="stopka">
        <!--Indeks-->
        <h4>Zapraszamy od poniedziałku do soboty w godzinach 7:30-16:30</h4>
        Strony partnerów:
        <a href="http://adata.pl/" target="_blank">ADATA</a>
        <a href="http://patriot.pl/" target="_blank">Patriot</a>
        <a href="mailto:biuro@hurt.pl">Napisz</a>
        <p>Stronę wykonał: 01234567890</p>
    </div>
</body>

</html>