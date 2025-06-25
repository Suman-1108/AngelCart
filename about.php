<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/mainstyle.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/23.png" alt="">
      </div>

      <div class="content">
         <h3>Developer's Message:</h3>
         <p>Hey There ! I'm Suman. A Student of B.Sc in Computer Science Department from GVN College [Batch : 2025] . I love designing websites and exploring new things. Learning new things is my hobby.</p>

         <p>I would like to thank <a href="#" target="_blank">Mr Gopinath</a> Sir for guiding me through the session and making me able to develop projects like this. </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>
   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews.</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-5.jpg" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, ex earum molestiae saepe et ipsum pariatur, id ipsam repudiandae aliquid voluptatem atque, veritatis optio sapiente cum voluptatibus doloremque commodi dolor voluptate? Sequi consectetur obcaecati fugit dolorem iure veritatis, a illo? Nisi ipsam officiis culpa vel rerum dolores corrupti adipisci debitis!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> <a href="#"  target="_blank">Shusuka</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-1.jpg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, neque officiis minus vitae alias ea nihil omnis ducimus deleniti distinctio eveniet asperiores unde ab repellat earum fugiat officia voluptatum autem delectus iste. Dolore sequi vel eos soluta praesentium deleniti, rerum explicabo unde quas eius eaque, obcaecati fuga sit doloribus blanditiis.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="#" target="_blank">Doreamon</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.jpg" alt="">
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores cumque in beatae nisi vero ex aliquid aut quo officiis possimus id eaque sunt architecto laborum dignissimos, nobis odit labore quis.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="#" target="_blank">nobita</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-7.jpg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A saepe quisquam illum tempora at magnam alias distinctio dolorem quo, nulla delectus adipisci ipsa ex possimus suscipit blanditiis eveniet ab, non laboriosam deleniti, sint quis sapiente molestiae. Cupiditate vero laudantium, quisquam odit architecto corporis totam qui, accusamus nam expedita illo fugiat?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="#" target="_blank">Giyan</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.jpg" alt="">
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla cum dicta praesentium ut, officia sequi ipsum repudiandae? Unde quibusdam, natus aut id, vitae, laudantium distinctio accusamus similique corporis nam laborum optio quia tenetur odio fuga neque doloribus cumque. Natus iusto porro numquam enim itaque voluptates doloribus quibusdam! Omnis, voluptas dolores.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="#" target="_blank">Suneeyo</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.jpg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aliquam itaque ex voluptatem laudantium in laborum excepturi officia exercitationem. Tenetur, aspernatur. Eos vero tenetur praesentium nobis necessitatibus? Ducimus eaque maxime magnam eveniet consectetur consequuntur? Numquam corrupti cum ad deleniti fugiat neque earum assumenda, eveniet expedita, iure et ab autem nulla.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="#" target="_blank">Mr Suresh</a></h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>