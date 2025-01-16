<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>Shoppers can find everything they need in one place, rather than visit multiple stores. eGrocery offer a greater variety of brands and product types, making it easy to find the perfect item. eGrocery now offer organic and healthy food options and a wide selection of international foods. This simply gives shoppers more choice and allows them to find the products that best suit their needs. It is an advantage that smaller stores cannot always offer.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>While smaller stores may offer some discounts, eGrocery usually have the best deals on food and household items. This is because eGrocery's purchase items in bulk, which allows them to get a lower price from suppliers. eGrocery also have generic brands that are often cheaper than well-known brands. This can help shoppers save money on their grocery bills. eGrocery now offer online ordering and home delivery concerning time and convenience. </p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/client/pic-1.png" alt="">
         <p>We are busy people having no time to shop. eGrocery solves our problem by delivering products at door step WHENEVER we want. Thank you eGrocery !!!! </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alok Sharma</h3>
      </div>

      <div class="box">
         <img src="images/client/pic-2.png" alt="">
         <p>It is very difficult for me to go shopping with severe health issues. I recommend online grocery shopping through eGrocery to anyone who have physical issues</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nandini Goyal</h3>
      </div>

      <div class="box">
         <img src="images/client/pic-3.png" alt="">
         <p>eGrocery stands out amongst all the other online grocery stores in Region, because it has a wide variety of items at affordable prices with a friendly and timely service</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rishabh Arora</h3>
      </div>

      <div class="box">
         <img src="images/client/pic-4.png" alt="">
         <p>Now you don't need a long wait to get your groceries every week. You can order just in few mins and get it delivered the same days.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Riya Verma</h3>
      </div>

      <div class="box">
         <img src="images/client/pic-5.png" alt="">
         <p>I love to shop in here. You don't want to do your weekly grocery shopping anywhere else because it could be expensive.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mohit Deshmukh</h3>
      </div>

      <div class="box">
         <img src="images/client/pic-6.png" alt="">
         <p>eGrocery products are VERY VERY GOOD in quality. I could not get these quality product for this price even in Town Hall.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shalini Singh</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>