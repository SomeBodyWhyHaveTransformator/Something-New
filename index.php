<!DOCTYPE>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <meta name="theme-color" content="#84200e">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/Main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="JavaScript/bootstrap.js"></script>
    <title>UINUGGET</title>
  </head>
  <body>
    <div id="shadow">
    </div>
    <div id="modal">
      <div id="closeModal">
      </div>
      <div id="buttonForChange">
        <p style="padding-top: 5px;">Поставить на фон!</p>
      </div>
    </div>
    <div id="header" class="header">
      <div class="navbar navbar-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-circle"></i>
              <i class="fa fa-circle"></i>
              <i class="fa fa-circle"></i>
            </button>
            <a class="navbar-brand" href="">UINUGGET</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href=""> Про нас</a></li>
              <li><a href="">Сервисы</a></li>
              <li><a href="">Email</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="description">
        Пейза́ж (фр. Paysage, от pays — страна, местность) — жанр изобразительного искусства (а также отдельные произведения этого жанра), в котором основным предметом изображения является первозданная, либо в той или иной степени преображённая человеком природа. Современные представления о пейзаже сформировались на протяжении столетий с развитием художественных приёмов для его изображения. В пейзажном произведении особое значение придаётся построению перспективы и композиции вида, передаче состояния атмосферы, воздушной и световой среды, их изменчивости.
      </div>
    </div>
    <div style="background-color: #85a8ba" class="imageChoice">
      <div class="container" style="width: 90%;">
        <div style="float: left;">
          <img onclick="ChangeImage(event)" class="change" style="transform: rotate(10deg)" width="300px" height="300px" src="../IMG/background-for-header.jpg" alt="">
          <img onclick="ChangeImage(event)" class="change" style="transform: rotate(20deg);margin-left: -160px" width="300px" height="300px" src="../IMG/gora.jpg" alt="">
          <img onclick="ChangeImage(event)" class="change" style="max-width: 100%;transform: rotate(30deg);margin-left: -160px" width="300px" height="300px" src="../IMG/gory-utro-dymka-sentiabr.jpg" alt="">
        </div>
        <div style="float: right;text-align: left;width: 600px;">
          <p style="font-size: 45px">Изменяй сайт прямо сейчас!</p>
          <p>Ты можешь изменить фон блока выше просто нажав на картинку левее! Выбирай какой хочешь фон, цвет, шрифт для сайта, одним словом - меняй все(кроме конечно кода PHP, ведь, честно говоря, я и сам не знаю как это делается).</p>
          <div style="float: right;margin-top: 0px;background: #2d3e50;" class="buttonForChangeColor" id="buttonForChangeColor">
            <p style="padding-top: 5px;">Сделать цвета потемнее!</p>
          </div>
          <div style="float: right;margin-top: 0px;background: #2d3e50;margin-right: 30px" class="buttonForChangeColor" id="buttonDark">
            <p style="padding-top: 5px;">Погрузится в тьму!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="aboutLife">
      <div class="container" style="width: 90%;">
        <div style="float: left;text-align: left;width: 600px;">
          <p style="font-size: 45px">Это твоя жизнь!</p>
          <p>Ты менял фон блока выше просто нажав на картинку! Тоже самое ты можешь делать и со своей жизню! Задумайся, все твои действия - это нажатия на кнопку с помощью которой ты и меняешь свою жизнь. Меняй все, пусть твоя жизнь будет в ярких красках. Все в твоих руках(кроме конечно кода PHP, ведь, если я не знаю как это делается, то откуда тебе знать?).</p>
        </div>
        <div style="float: right;">
          <img width="250px" height="250px" src="../IMG/life.png" alt="">
        </div>
      </div>
    </div>
    <div class="fear">
      <div class="container" style="width: 90%;">
        <div style="float: left;">
          <img src="../IMG/fear.png" alt="">
        </div>
        <div style="float: right;text-align: left;width: 600px;">
          <p style="font-size: 45px">Не бойся творить!</p>
          <p>Привет, это я, создатель сайта.Можешь называть меня "Мистер Кто-то".Ты знаешь про меня немного, почти ничего.Но, знай, я буду пытаться делать сайты в интернете все ярче и креативнее, чтобы в мире было поменьше серого и чтобы даже после самого рутинного дня в твоей жизни, ты взлянув на сайт улыбнулся.</p>
          <p><b>Всегда ваш Мистер Кто-то )</b></p>
        </div>
      </div>
    </div>
    <div class="create">
      <div class="container" style="width: 90%;">
        <div style="float: left;text-align: left;width: 600px;">
          <p style="font-size: 45px">Создатель</p>
          <p>Привет, это я, создатель сайта.Можешь называть меня "Мистер Кто-то".Ты знаешь про меня немного, почти ничего.Но, знай, я буду пытаться делать сайты в интернете все ярче и креативнее, чтобы в мире было поменьше серого и чтобы даже после самого рутинного дня в твоей жизни, ты взлянув на сайт улыбнулся.</p>
          <p><b>Всегда ваш Мистер Кто-то )</b></p>
        </div>
        <div style="float: right;">
          <img src="../IMG/somebody.png" alt="">
        </div>
      </div>
    </div>
    <div class="commentaries">
      <div class="container" style="width: 90%;">
        <div style="float: left;width: 100%">
          <div id="disqus_thread"></div>
        </div>
      </div>
    </div>
    <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = "http://unnaget:12";  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = "uinugget-com"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://uinugget-com.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
    <script>
      var closeMD = document.getElementById("closeModal");
      var modalForImage = document.getElementById("modal").style;
      var shadow = document.getElementById("shadow").style;
      var changeButton = document.getElementById("buttonForChange");
      var buttonDark = document.getElementById("buttonDark");
      var header = document.getElementById("header");
      var changeColor = document.getElementById("buttonForChangeColor");
      var changeImageBlock = document.getElementsByClassName("imageChoice")[0];
      var description = document.getElementsByClassName("description")[0];
      var navbar = document.getElementsByClassName("navbar")[0];
      var life =  document.getElementsByClassName("aboutLife")[0];
      var create =  document.getElementsByClassName("create")[0];
      var fear =  document.getElementsByClassName("fear")[0];
      var commentaries = document.getElementsByClassName("commentaries")[0];
      buttonDark.onclick = function dark() {
        shadow.opacity = 1;
        shadow.display = 'block';
      }
      changeColor.onclick = function all () {
          if (changeColor.style.background == "rgb(45, 62, 80)") {
            changeColor.style.background = "rgb(133,168,186)";
            changeImageBlock.style.backgroundColor = "#2d3e50";
            navbar.style.backgroundColor = "#2d3e50";
            description.style.backgroundColor = "#27ae60";
            life.style.backgroundColor = "#8e44ad";
            create.style.backgroundColor = "#d35400";
            fear.style.backgroundColor = "#179f85";
            commentaries.style.backgroundColor = "#2a80b9";
            changeColor.innerHTML = "<p style='padding-top: 5px;''>Посветлее?</p>"
          }
          else {
            changeColor.style.background = "rgb(45, 62, 80)";
            changeImageBlock.style.backgroundColor = "#85a8ba";
            navbar.style.backgroundColor = "#85a8ba";
            description.style.backgroundColor = "#2fcb71";
            life.style.backgroundColor = "#9b59b6";
            create.style.backgroundColor = "#e67e22";
            fear.style.backgroundColor = "#1abc9b";
            commentaries.style.backgroundColor = "#3498da";
            changeColor.innerHTML = "<p style='padding-top: 5px;''>Потемнее?</p>"
          }
      };
      function closeModalBlock (){
        modalForImage.display = "none";
        shadow.display = "none";
      };
      changeButton.onclick = function changeBackgroundHeader() {
        var ourBackground = modalForImage.background;
        header.style.background = ourBackground;
        closeModalBlock ();
      };
      closeMD.onclick = (function(){
         closeModalBlock ()
      });
      function ChangeImage(event){
        var image = event.target;
        if(image.className == "change"){
          modalForImage.background = ("url(" + image.src + ")");
          modalForImage.display = "block";
          modalForImage.backgroundRepeat = "no-repeat";
          modalForImage.backgroundSize = "100% 100%";
          shadow.display = "block";
        }
        }

    </script>
  </body>
</html>
