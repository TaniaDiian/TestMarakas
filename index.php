<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Parser</title>
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
                    <form method="post" action="upload.php" enctype="multipart/form-data" class="input-group container pr-5 align-middle"> 
                        <input type="text" name="fileToUpload" id="fileToUpload" class="form-control" style="background:rgba(255,255,255,0.8);" required="required" placeholder="Insert link">
                        <br/>
                        <input class="btn btn-info pl-1" type="submit" name="fupload" id="fupload" >
                    </form>
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