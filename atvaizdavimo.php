<html>
<body>
<?php $parinktaData = $_POST["data"];
$date1 = new DateTime($parinktaData);
$dateTimeNow = new DateTime();
if ($date1 >= $dateTimeNow) {
    echo 'Mokejimas atliekamas per anksti';
    die;

} elseif ($date1 < $dateTimeNow->modify('-1 month')) {
    $intervalas = ($date1->diff($dateTimeNow));
    $kazkiek = $intervalas->days;

    echo "Veluoji sumoketi $kazkiek dienu";
    die;

}else {
    $postJson = json_encode($_POST, JSON_PRETTY_PRINT);
    file_put_contents('./submit.json', $postJson);

}

?>
Pasirinkta data:<?php echo $_POST["data"]; ?><br>
Suvartota kWh kiekis: <?php echo $_POST["sunaudota"]; ?><br>
1 kWh kaina eur: <?php echo $_POST["kaina"]; ?><br>
<?php if (isset($_POST['dieninis'])) {
    echo "Dieninis tarifas";
} else {
    echo "Naktinis tarifas";
}; ?><br>
Iraso suma eur: <?php echo(($_POST["sunaudota"]) * $_POST["kaina"]); ?><br>
Visu turimu irasu suma: kolkas nera <br>

<button>Deklaruoti ir sumoketi</button>



</body>
</html>