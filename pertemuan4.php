<!-- $_GET untuk isi url -->

<?php 
    require 'Tabung.php';
    
    
// $_POST['nama']="Clarisssa"
// var_dump($_POST)
// if (isset($_POST['btnSubmit'])) {
//     if (strlen($_POST['Angka']) > 0) {
//         echo "login !";
//     } else {
//         echo "Isi diameter terlebih dahulu";
//     }
//     var_dump($_POST);
//     echo 'Submitted';
// }
// $luas=0;
// $volume=0;
$tabung = new Tabung;

if (isset($_POST['btnSubmit'])){
    $tabung->setDiameter($_POST['diameter']);
    $tabung->setTinggi($_POST['tinggi']);
}   


    // $diameter=$_POST['diameter'];
    // $tinggi=$_POST['tinggi'];
    // $r = $diameter/2;
    // $luas=3.14*$diameter*$tinggi;
    // $volume=3.14*$r*$r*$tinggi;
    // echo"Diameter $diameter <br/>";
    // echo"Tinggi $tinggi <br/>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Nama <?php echo $_GET['Nama'];?></h1>
    <h1>Nama <?php echo isset ($_GET['Nama']) ? $_GET['Nama']:'';?></h1>
    <form action="" method="post">
    <input type="text" name="Angka" value="">
    <button name="btnSubmit">Submit</button>
    </form> -->
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name="btnSubmit">Hitung</button>
    </form> 
    <hr>
        <ul>
            <li>Luas Selimut : <?php echo $tabung->getLuasSelimut() ?></li>
            <li>Volume : <?php ?></li>
        </ul>
</body>
</html>