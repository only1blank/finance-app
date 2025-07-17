<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("css/style.css")}}">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="container">
                 <div class="header__row">
            <div class="header__row_logo">
                App
                <img src="" alt="" class="header__logo_item">
            </div>
            <div class="header__row_menu">
                <a href="" class="header__menu_item">Наше приложение</a>
                <a href="" class="header__menu_item">О нас</a>
                <a href="" class="header__menu_item">Контакты</a>
            </div>
            <div class="header__row_auth">
                <a href="" class="header__auth_login">Вход</a>
                <a href="" class="header__auth_reg">Регистрация</a>
            </div>
        </div>
        </div>
    </header>
  
    <section class="hero hero--combined">
        <div class="hero__content container">
                        <span class="hero__badge">Новый финансовый инструмент</span>
                        <h1 class="hero__title">Присоединяйтесь к <count-up data-separator=".">200000</count-up> довольных пользователей</h1>
                        <p class="hero__subtitle">Умное управление бюджетом. 
                            Автоматический учет расходов и инвестиционные советы</p>
                        
                        <form class="hero__form">
                            <input type="email" placeholder="Ваш email" required>
                            <button type="submit" class="btn btn--gradient">Начать бесплатно</button>
                        </form>
                        
                        <div class="hero__stats">
                            <div class="stat-item">
                                <span class="stat-number">4.9</span>
                                <p class="stat-label">Рейтинг в AppStore</p>
                            </div>
                            <div class="stat-item">
                                <count-up class="stat-number" data-separator=".">200000</count-up>
                                <p class="stat-label">Пользователей</p>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">24/7</span>
                                <p class="stat-label">Поддержка</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="hero__media">
                        <div class="hero__video-container">
                            <!-- Замените на ваше видео -->
                            <video autoplay muted loop playsinline class="hero__video">
                                <source src="{{asset("video/business.mp4")}}" type="video/mp4">
                            </video>
                            <div class="video-overlay"></div>
                        </div>
                    </div>
                </section>  
                <div class="main">
        <div class="container">
            {{-- 1 блок с видео --}}
            <div class="main__partners">
                <h1 class="main__partners_headline">Наши партнеры</h1>
 <!-- Swiper -->
 <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="https://cdn.worldvectorlogo.com/logos/ikea.svg" alt=""></div>
      <div class="swiper-slide"><img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/VK_Logo.png" alt=""></div>
      <div class="swiper-slide"><img src="https://cdn.worldvectorlogo.com/logos/ikea.svg" alt=""></div>
      <div class="swiper-slide"><img src="https://cdn.worldvectorlogo.com/logos/ikea.svg" alt=""></div>
      <div class="swiper-slide"><img src="https://cdn.worldvectorlogo.com/logos/ikea.svg" alt=""></div>
      <div class="swiper-slide"><img src="https://cdn.worldvectorlogo.com/logos/ikea.svg" alt=""></div>
      <div class="swiper-slide"><img src="https://cdn.worldvectorlogo.com/logos/ikea.svg" alt=""></div>

    </div>
    <div class="swiper-pagination"></div>
  </div>
            </div>
            <div class="main__advantages">
                <h1 class="main__advantages__headline">Наши преимущества</h1>
                <div class="main__advantages_cards">
                    <div class="main__cards_card">
                        <img class="main__card_img" width="50" height="50" src="https://img.icons8.com/ios/50/iphone14-pro.png" alt="iphone14-pro"/>
                        <div class="main__card_headline">Быстрый доступ</div>
                        <div class="main__card_underline">Доступ к нашему приложению в любой точке мира</div>
                    </div>
                    <div class="main__cards_card">
                        <img class="main__card_img" width="50" height="50" src="https://img.icons8.com/ios/50/iphone14-pro.png" alt="iphone14-pro"/>
                        <div class="main__card_headline">Быстрый доступ</div>
                        <div class="main__card_underline">Доступ к нашему приложению в любой точке мира</div>
                    </div>
                    <div class="main__cards_card">
                        <img class="main__card_img" width="50" height="50" src="https://img.icons8.com/ios/50/iphone14-pro.png" alt="iphone14-pro"/>
                        <div class="main__card_headline">Быстрый доступ</div>
                        <div class="main__card_underline">Доступ к нашему приложению в любой точке мира</div>
                    </div>
                    <div class="main__cards_card">
                        <img class="main__card_img" width="50" height="50" src="https://img.icons8.com/ios/50/iphone14-pro.png" alt="iphone14-pro"/>
                        <div class="main__card_headline">Быстрый доступ</div>
                        <div class="main__card_underline">Доступ к нашему приложению в любой точке мира</div>
                    </div>
                    <div class="main__cards_card">
                        <img class="main__card_img" width="50" height="50" src="https://img.icons8.com/ios/50/iphone14-pro.png" alt="iphone14-pro"/>
                        <div class="main__card_headline">Быстрый доступ</div>
                        <div class="main__card_underline">Доступ к нашему приложению в любой точке мира</div>
                    </div>
                    <div class="main__cards_card">
                        <img class="main__card_img" width="50" height="50" src="https://img.icons8.com/ios/50/iphone14-pro.png" alt="iphone14-pro"/>
                        <div class="main__card_headline">Быстрый доступ</div>
                        <div class="main__card_underline">Доступ к нашему приложению в любой точке мира</div>
                    </div>
                </div>
            </div>
            <div class="main__ourapp">
                <h1 class="main_ourapp_headline">Наше приложение</h1>
                <img style="width: 700px" class="main__ourapp_img" src="{{asset("img/our-app.png")}}" alt="">
            </div>
            <form action="" class="main__form">
                <input type="text" class="main__form_input">
                <input type="text" class="main__form_input">
                <input type="text" class="main__form_input">
                <input type="checkbox" name="" id="" class="main__form_checkbox">Нажимая, вы даёте согласие на обработку персональных данных
            </form>
        </div>

    </div>
    <div class="scroll-progress"></div>

    <style>
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: #4a6cf7;
            z-index: 9999;
            width: 0%;
            transition: width 0.1s ease;
        }
    </style>
    
    <script>
        window.addEventListener('scroll', function() {
            const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPosition = window.pageYOffset;
            const progress = (scrollPosition / scrollHeight) * 100;
            document.querySelector('.scroll-progress').style.width = progress + '%';
        });
    </script>
    <script type="module" src="https://cdn.jsdelivr.net/gh/lekoala/formidable-elements@master/dist/count-up.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 5,
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
        </script>
<script>
let lastScroll = 0;
const header = document.querySelector('.header');
const scrollThreshold = 100;

window.addEventListener('scroll', function() {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll <= 0) {
        header.classList.remove('hidden');
        return;
    }
    
    if (currentScroll > lastScroll && currentScroll > scrollThreshold) {
        // Скролл вниз
        header.classList.add('hidden');
    } else if (currentScroll < lastScroll) {
        // Скролл вверх
        header.classList.remove('hidden');
    }
    
    lastScroll = currentScroll;
});
      
      </script>
</body>
</html>