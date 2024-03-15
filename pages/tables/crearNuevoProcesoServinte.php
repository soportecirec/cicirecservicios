<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> </title>
</head>
<body>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"/></script>

    <?php  
error_reporting(0);
$input_episodio = $_POST['input_episodio'];

  try
{

$usuario = "BDCIREC";
$password = "C1r3c2020";
$nombredb = "SCSE";


//para oracle el tipo es oci
$conn =new PDO("oci:dbname".$nombredb,$usuario,$password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch ( PDOException $e )
{  
    echo "Error: ".$e->getMessage( );  

}

$consulta = "Select * from abpac where pacide = '1011256489'";
$result = $conn->query($consulta);


if (!$result) {

    print "    <p class=\"aviso\">Error en la consulta.</p>\n";
} else {


    while($row = $result->fetch()){

                $array =$row;
        }

        echo json_encode($array);

}




   




?>

</body>
</html>

