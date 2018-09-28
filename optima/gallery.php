<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <?php require_once('head.php');?>

<link rel="stylesheet" href="css/gal.css">



</head>
<body>
<?php require_once('partical.php');?>
<?php require_once('menu.php');?>
<?php require_once('logo.php');?>
<div class="slider" style="padding-top: 0;" id="gal">
        <figure class="slider__item"><img class="slider__image" src="images/IMG_6686.JPG">
          <figcaption class="slider__caption">OPTIMA 2017</figcaption>
        </figure>
        <figure class="slider__item"><img class="slider__image" src="images/b.JPG"/>
          <figcaption class="slider__caption">OPTIMA TEAM 2017</figcaption>
        </figure>
        <figure class="slider__item"><img class="slider__image" src="images/IMG_6937.JPG"/>
          <figcaption class="slider__caption">Debugging Event</figcaption>
        </figure>
        <figure class="slider__item"><img class="slider__image" src="https://unsplash.it/600/360?image=#{itemsImg}"/>
          <figcaption class="slider__caption">Image - 490</figcaption>
        </figure>
        <figure class="slider__item"><img class="slider__image" src="https://unsplash.it/600/360?image=#{itemsImg}"/>
          <figcaption class="slider__caption">Image - 695</figcaption>
        </figure>
        <figure class="slider__item"><img class="slider__image" src="https://unsplash.it/600/360?image=#{itemsImg}"/>
          <figcaption class="slider__caption">Image - 458</figcaption>
        </figure>
        <figure class="slider__item"><img class="slider__image" src="https://unsplash.it/600/360?image=#{itemsImg}"/>
          <figcaption class="slider__caption">Image - 702</figcaption>
        </figure>
      </div>
      <div class="slider__btn"></div>
      <script>
            $(function(){
            var	btn = $(".slider__btn");
            
            btn.on("click",function(){
                $(".slider__item").first().clone().appendTo(".slider");
                $(".slider__image").first().css({transform: "rotateX(-180deg)", opacity: 0});
                setTimeout(function(){
                    $(".slider__item").first().remove();
                },200);
            });
        });
        </script>
</body>
</html>