<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Food Adda</title>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <style>
    body {
      font-family: 'Outfit', sans-serif;
    }
    .anime{
      position: relative;
    }
    .anime::before{
      display: none;
      content: "Explore More →";
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      width: 0;
      padding-top: 0.5rem ;
      height: 100%;
      background: #fff;
      color: rgb( 224, 36, 36) ;
      text-align: center;
      transition: all .6s ease;
    }
    .anime:hover::before{
      display: block;
      width: 100%;
      border-bottom: 2px solid rgb( 224, 36, 36);
    }
  </style>
</head>
<body class="bg-gray-100">
  <?php  include_once ("common/header.php"); ?>
  <main class="w-full h-full py-16">
    <div class="sm:h-[30rem] w-full flex flex-col justify-center items-center gap-8 md:gap-24 md:flex-row absolute top-16 w-full py-4 sm:py-8 px-4 sm:px-16 bg-white">
      <div class="md:basis-2/3 flex flex-col gap-4 py-4 px-8 justify-start items-start">
        <h1 class="capitalize text-2xl sm:text-4xl font-bold">Most tasty food for you.</h1>
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet aspernatur dicta aut iusto sed temporibus, ipsam placeat atque possimus distinctio, odit adipisci! Ad neque earum eius architecto dolores? Amet blanditiis, impedit repudiandae vitae dolores mollitia aliquam vero?.</p>
        <button class="btn py-2 px-4 bg-red-600 text-white text-center anime">Explore Now <i class="fa-solid fa-arrow-right-long"></i></button>
      </div>
      <div class="md:basis-1/3 w-full">
        <img src="<?php echo base_url('assets/images/home-page/food-image.png'); ?>" alt="home-image">
      </div>
    </div>
    
    <!-- our categorie -->
    <div>
      <div>
        <img src="<?php echo base_url('assets/images/category/dessert.jpeg'); ?>" alt="category-image">
      </div>
    </div>
  </main> 

  <!-- <script>
    const dynamicType = document.querySelector("#dy_text");
    let words = ['Hungry?', 'Best taste.', 'Delicious food.'];
    
    let wordIndex = 0;
    let charIndex = 0;
    let isdeleting = false;

    const Effect = () =>{
      let currentWord = words[wordIndex];
      let currentIndex = currentWord.substring(0 , charIndex);
      dynamicType.innerHTML = currentIndex;

      if(!isdeleting && charIndex < currentWord.length){
          //If condition is true , type the next charactor
          charIndex++;
          setTimeout(Effect , 200);
      }
      else if(isdeleting && charIndex > 0){
          //If condition is true , remove the previous charactor
          charIndex--;
          setTimeout(Effect , 100);
      }
      else{
          isdeleting = !isdeleting;
          wordIndex = !isdeleting ? (wordIndex + 1) % words.length : wordIndex;
          setTimeout(Effect , 1200);
      }
    }

    Effect();

  </script> -->
</body>
</html>


<!-- const dynamicType = document.querySelector("h1 span");
const words = [" Love" , " Like" , " Live" , " Life"];

let wordIndex = 0;
let charIndex = 0;
let isdeleting = false;


const Effect = () =>{
    let currentWord = words[wordIndex];
    let currentIndex = currentWord.substring(0 , charIndex);
    dynamicType.innerHTML = currentIndex;

    if(!isdeleting && charIndex < currentWord.length){
        //If condition is true , type the next charactor
        charIndex++;
        setTimeout(Effect , 200);
    }
    else if(isdeleting && charIndex > 0){
        //If condition is true , remove the previous charactor
        charIndex--;
        setTimeout(Effect , 100);
    }
    else{
        isdeleting = !isdeleting;
        wordIndex = !isdeleting ? (wordIndex + 1) % words.length : wordIndex;
        setTimeout(Effect , 1200);
    }
}

Effect();

 -->
