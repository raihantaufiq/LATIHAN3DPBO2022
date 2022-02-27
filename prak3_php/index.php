<?php
include "Pc.php";
?>

<html>

<head>
    <title>Computer</title>
</head>

<body>
    <!-- form untuk masukan -->
    <form method="post">
        <strong>Processor</strong>
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="proc_name"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td>:</td>
                <td><input type="number" min="0" name="proc_price"></td>
            </tr>
        </table>
        <strong>Disk</strong>
        <table>
            <tr>
                <td>Type</td>
                <td>:</td>
                <td><input type="text" name="disk_type"></td>
            </tr>
            <tr>
                <td>Capacity</td>
                <td>:</td>
                <td><input type="number" min="0" name="disk_capacity"> GB</td>
            </tr>
            <tr>
                <td>Price</td>
                <td>:</td>
                <td><input type="number" min="0" name="disk_price"></td>
            </tr>
        </table>
        <strong>RAM</strong>
        <table>
            <tr>
                <td>Capacity</td>
                <td>:</td>
                <td><input type="number" min="0" name="ram_capacity"> GB</td>
            </tr>
            <tr>
                <td>Price</td>
                <td>:</td>
                <td><input type="number" min="0" name="ram_price"></td>
            </tr>
        </table>

        <input type="submit">
    </form>
</body>


</html>

<?php
//masukkan data yang diambil dari form
//processor
$processor = new Processor("", 0);
if(!empty($_POST["proc_name"])){//jika data dari form tidak kosong
    $processor->setName($_POST["proc_name"]);
}
if(!empty($_POST["proc_price"])){
    $processor->setPrice($_POST["proc_price"]);
}

//disk
$disk = new Disk("", "", 0);
if(!empty($_POST["disk_type"])){
    $disk->setType($_POST["disk_type"]);
}
if(!empty($_POST["disk_capacity"])){
    $disk->setCapacity($_POST["disk_capacity"]." GB");
}
if(!empty($_POST["disk_price"])){
    $disk->setPrice($_POST["disk_price"]);
}

//ram
$ram = new Ram("", 0);
if(!empty($_POST["ram_capacity"])){
    $ram->setCapacity($_POST["ram_capacity"]." GB");
}
if(!empty($_POST["disk_price"])){
    $ram->setPrice($_POST["ram_price"]);
}

//pc
$computer = new Pc($processor, $disk, $ram);


//tampilkan
$computer->show();

?>
