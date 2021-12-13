<?php
  if(isset($_POST['submit'])){
    $form_name = $_POST['name'];
    $form_phone = $_POST['phone'];
    $form_email = $_POST['email'];
    $form_study = $_POST['study'];
    $form_lotto = $_POST['loto'];
    $form_subject = $_POST['subject'];

    if(isset($_POST['submit'])){
      $img_name = $_FILES['upload_img']['name'];
      $tmp_img_name = $_FILES['upload_img']['tmp_name'];
      move_uploaded_file($tmp_img_name,"img/".$img_name);
  }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Confirm Your Order</title>
      <link rel="stylesheet" href="formStyle.css">
</head>
<body>
      <div class="container">
            <div class="row">
                  <div class="col-md-12">
                        <!-- <div class="bg">
                        </div> -->
                        <div class="logo">
                              <img src="img/logo.png" alt="">
                        </div>
                        <div class="header-photo">
                              <img src="img/head.png" alt="">
                        </div>
                        <div class="main">
                              <div class="header">
                                    <h2>Customer Information</h2>
                              </div>
                              <div class="photo">
                              <img class="img-img" src= "img/<?php if(isset($img_name)){echo $img_name;}?>" style="width: 0px; height: 0px">
                              <h2 class="customer-name"><?php if(isset($_POST['name'])){echo $form_name;} ?></h2>
                              <h2 class="customer-mobile"><?php if(isset($_POST['phone'])){echo $form_phone;} ?></h2>
                              <h2 class="customer-nid"> <?php if(isset($_POST['email'])){echo $form_email;} ?></h2>
                              <h2 class="customer-amount"><?php if(isset($_POST['study'])){echo $form_study;} ?></h2>
                              <h2 class="customer-lotto"><?php if(isset($_POST['loto'])){echo $form_lotto;} ?></h2>
                              <h2 class="customer-sing"><?php if(isset($_POST['subject'])){echo $form_subject;} ?></h2>
                              
                              </div>
                              <hr>
                              <hr>
                              <hr>
                              <hr>
                              <hr>
                              <div class="singnature">
                                    
                              </div>
                              <div class="author">
                                    <b class="name-author">allegba</b>
                                    <hr class="author-hr">
                                    <p class="author-author">Author</p>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <button class="down" type="button" onclick="window.print()">Download</button>

</body>
</html>