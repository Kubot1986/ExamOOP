<html>
<body>

Suvartota kWh kiekis: <?php echo $_POST["sunaudota"]; ?><br>
1 kWh kaina eur: <?php echo $_POST["kaina"]; ?><br>
<?php if (isset($_POST['dieninis'])){
    echo "Dieninis tarifas";
} else {
    echo "Naktinis tarifas";
}
;?><br>
Iraso suma eur: <?php echo (($_POST["sunaudota"])*$_POST["kaina"]);?><br>
Visu turimu irasu suma: kolkas nera <br>

<button>Deklaruoti ir sumoketi</button>


</body>
</html>