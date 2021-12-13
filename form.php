<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <!-- font-awesome -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Customer Form</title>
	  <link rel="stylesheet" href="style.css">
    <style>

    </style>
  </head>
  <body>

  <div class="container-fluid mx-auto d-inline-block">
    <div class="row">
      <div class="col-md-12">
       <div class="main">
         <div class="head bg-primary w-75 mx-auto">
        <h2 class="text-center text-white">Customer Form</h2>
      </div>

      <form action="card.php" method="POST" enctype="multipart/form-data">
        <div class="container mt-4">
        <h5 class="pl-">Name: <input type="text" class="form-control" name="name" id="name" placeholder="Customer Name">
        </h5>
        </div>
        
        <div class="container mt-2">
        <h5 class="pl-">Mobile: <input type="text" class="form-control" name="phone" id="phone" placeholder="Customer Phone">
        </h5>
        </div>
        
        <div class="container mt-2">
        <h5 class="pl-">NID: <input type="text" class="form-control" name="email" id="email" placeholder="Customer Nid">
        </h5>
        </div>
        
        <div class="container mt-2">
          <h5 class="pl-">Amount: <input type="text" class="form-control" name="study" id="study" placeholder="Customer Amount">
          </h5>
          </div>
          
          <div class="container mt-2">
          <h5>Lottery Name: <input type="text" class="form-control" name="loto" id="loto" placeholder="Customer Lottery">
          </h5>
          </div>
          
          <div class="container mt-2">
          <h5 class="pl-">Sign: <input type="text" class="form-control" name="subject" id="subject" placeholder="Customer Signature">
          </h5>
          </div>

          <div class="container mt-2">
            <h5 class="pl-">Photo: <input type="file" class="form-control" name="upload_img" id="upload_img" placeholder="Customer Photo">
            </h5>
            </div>

            <div class="form-buttons">
              <input type="submit" name="submit" id="submitButton">
            </div>
            </form>

       </div>
      </div>
    </div>
  </div>




	 <!-- Optional JavaScript -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <!-- JQuery Plugin -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <script src="js/custom.js"></script>
  </body>
</html>