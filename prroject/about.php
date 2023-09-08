<?php

include 'config.php';

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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="shortcut icon" type="image" href="https://github.githubassets.com/pinned-octocat.svg" >
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoviBhtl-pxhe1KHxsbbYRzpFXXIcTVYekRA&usqp=CAU);" >
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/book.jfif" alt="">
      </div>

      <div class="content">
         <h3>Why choose us!!??</h3>
         <p>
         OUR Book is an online platfrom the provide an extensive library of books in digital format for free to every one around the world.

with our book you have access to all kind of educational, motivation and career book to keep you going in any areas.

Over this years, we are still going strong in our mission to provide a valuable service to readers. our book has grown into a platform where self-publishing authors have the opportunity to introduce their work to our community.

if you have any questions or feedback, don't hesitate to contact our editor info@ourbook.com .
         </p>
         <a href="contact.php" class="btn"style="background-color:  #00a8e2;">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/alexander.jfif" alt="">
         <p>Nobody likes to spend money on a new book only to face that overwhelming feeling of disappointment when it doesn't live up to your expectations.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alexander Felming</h3>
      </div>

      <div class="box">
         <img src="images/ahmed.jfif" alt="">
         <p>The solution is to check out a few book review sites before you hit the shops. The greater the diversity of opinions you can gather, the more confidence you can have that you'll enjoy the title.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ahmed khaled tawfik</h3>
      </div>

      <div class="box">
         <img src="images/dahih.jfif" alt="">
         <p>No one can deny that the books is more benfit than any another things like social media and phones.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>El Da7i7</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I think I was about 35 when I reached the same conclusion as the crime writer Mark Billingham: if you’re not enjoying a book after the first 20 pages, give up.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alexis</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>All the evidence suggests he wasn’t just trying to sound kooky or clever. Interviewing Bowie on the set of his film The Man Who Fell to Earth in 1975.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John dark</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>In recent days, however, the author behind bestsellers such as Misery, Carrie and The Stand heard a story he found truly shocking. Maine’s largest newspaper, the Portland Press Herald, would no longer be running reviews of works by local authors.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title"> Authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/peter.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Peter parker</h3>
      </div>

      <div class="box">
         <img src="images/tomas.jfif" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Tomas shelpy</h3>
      </div>

      <div class="box">
         <img src="images/thor.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Thor</h3>
      </div>

      <div class="box">
         <img src="images/panther.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Black panther</h3>
      </div>

      <div class="box">
         <img src="images/alexander.jfif" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Alexander felming 1928</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Null</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>