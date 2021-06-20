<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polling Application</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
       <div class="row justify-content-center ">
           <div class="col-lg-8">
               <h2>Polling Application - using PHP and MYSQL</h2>
               <form action="process.php" method="POST" role="form"></form>
                  <div class="form-group">
                     <input type="email" name="email" placeholder="Email Address" class="form-control">
                  </div>
                  <div class="radio" style="display:flex">
                     <label class="radio"> <input type="radio" name="choise" value="PHP"> <img src="image/php.png" width="70"> <h3 style="display: inline-block;">&nbsp;&nbsp;PHP</h3></label>
                     <label class="radio"> <input type="radio" name="choise" value="JAVA"> <img src="image/java.png" width="70"> <h3 style="display: inline-block;">&nbsp;&nbsp;JAVA</h3></label>
                  </div>
                  <div class="form-group">
                     <input type="submit" name="vote" value="VOTE" class="btn btn-primary">
                  </div>
               
           </div>
       </div>
    </div>
</body>
</html>