<?php 
    include ("Traits/Uploader.php");
    include ("Servicess/Parser.php");
    include ("Servicess/InsertToCSV.php");

    if(isset($_POST['fupload']))
    {

        $uploader = new Uploader();
        $xml = $uploader->getFile($_POST['fileToUpload']); 

        $parse = new Parser();
        $parse_document = $parse->parseFile($xml);

        $insert = new InsertToCSV();
        $insert_result = $insert->arrayTocsv($parse_document);

    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP File Uploader</title>
 
    <!-- Bootstrap core CSS -->
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
  </head>
 
  <body>
 
  <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-6 mx-auto">
                <div class="jumbotron">
                   <h1> Successfully!</h1>
                </div>
            </div>
        </div>
    </div>
 
  </body>
</html>

<style>
    body,html {
        height: 100%;
    }
</style>

