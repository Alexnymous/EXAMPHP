<?php
if (isset($_POST['montant'])) {
    $montant = $_POST['montant'];
    $montantaConvertir = $_POST['devisedepart'];
    $montantConverti = $_POST['devisefin'];

    $tauxConversion = file_get_contents('http://www.xe.com/ucc/convert.cgi?Amount='.$montant.'&From='.$montantaConvertir.'&To='.$montantConverti.'');
    preg_match('` ([,0-9.]+) '.$montantConverti.'`i', $tauxConversion, $devise);

    $resultat = $devise[1];

    ?>
    <html>
    <body>

    <form name="devise" action="#" method="post">

        Montant : <input type="text" name="montant" value="<?php echo $montant; ?>">
        <br />
        Devise de départ :
        <select name="devisedepart">
            <option value="EUR">Euro</option>
            <option value="USD">Dollar</option>
        </select>
        <br />
        Devise finale :
        <select name="devisefin">
            <option value="EUR">Euro</option>
            <option value="USD">Dollar</option>
        </select>
        <br />
        Conversion :  <?php echo $montant * $tauxConversion;
        var_dump($montant * $tauxConversion);
        ?>


        <br /><br />
        <input type="submit" name="valider" value="valider">
    </form>


    </body>
    </html>
    <?php

}
else
{
    ?>
    <html>
    <body>
    <form name="devise" action="#" method="post">
        Montant : <input type="text" name="montant">
        <br />
        Devise de d&eacute;part :
        <select name="devisedepart">
            <option value="EUR">Euro</option>
            <option value="USD">Dollar</option>
        </select>
        <br />
        Devise finale :
        <select name="devisefin">
            <option value="EUR">Euro</option>
            <option value="USD">Dollar</option>
        </select>
        <br />
        Conversion :
        <br /><br />
        <input type="submit" name="valider" value="valider">
    </form>


    </body>
    </html>
    <?php
}
?>