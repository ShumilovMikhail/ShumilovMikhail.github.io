<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
  <title>Добрая Картон</title>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
      m[i] = m[i] || function() {
        (m[i].a = m[i].a || []).push(arguments)
      };
      m[i].l = 1 * new Date();
      for (var j = 0; j < document.scripts.length; j++) {
        if (document.scripts[j].src === r) {
          return;
        }
      }
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(91900385, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true
    });
  </script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/91900385" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript>
</head>

<body>
  <?php

  include "phpSample/header.php";

  ?>


  <main class="main" id="company">
    <div class="container">
      <div class="main-left hidden-mobile">
        <div class="main-left__slider">
          <img src="img/main/boxes-main.png" alt="boxes" class="main-boxes">
          <img src="img/main/boxes-main-2.png" alt="boxes" class="main-boxes">
        </div>
      </div>
      <div class="main-right">
        <h1 class="main-right-title">
          Производство упаковки из гофрокартона
        </h1>
        <span class="main-tight-sub-title">
          с доставкой по всей России
        </span>
        <div class="main-form">
          <div class="main-form-container">
            <span class="main-form-subt">
              Получите индивидуальное предложение <br>
              на производство и поставку гофропродукции
            </span>
            <br>
            <div class="main-form-title">
              Образцы упаковки бесплатно!
            </div>
            <form action="#source/telegram.php" method="post">
              <input type="tel" placeholder="Введите номер телефона" class="main-form-number" name="user_number">
              <button class="main-form-button">Оставить заявку!</button>
            </form>
            <div class="main-form-postscript">*Минимальный заказ 500шт</div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-background">
      <div class="main-background__img img-first"></div>
      <div class="main-background__img img-second"></div>
    </div>
    <div class="overlay">
      <div class="overlay-block">
        <div class="overlay-block-close">
          <img src="img/modal/close.svg" alt="close" class="overlay-close-icon">
        </div>
        <div class="overlay-header">
          <span class="overlay-header-text">ФОРМА ОБРАТНОЙ СВЯЗИ</span>
        </div>
        <div class="overlay-main">
          <h2 class="overlay-main-title">Получите индивидуальное предложение</h2>
          <div class="overlay-main-suptitle">на производство и поставку изделий</div>
          <div class="overlay-main-number">Введите ваш номер телефона:</div>
          <input class="overlay-main-number-enter" placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ" type="text"></input>
          <button class="overlay-main-button">Оставить заявку!</button>
          <div class="overlay-main-min">*Минимальный заказ 500шт</div>
        </div>
      </div>
    </div>
  </main>
  <section>
    <div class="container">
      <div class="section-advantages" id="advantages">
        <div class="advantages-block">
          <div class="advantages-block__title">5 лет</div>
          <div class="advantages-block__descript">На рынке изделий из гофрокартона</div>
        </div>
        <div class="advantages-block">
          <div class="advantages-block__title">до 5 000 000 м<sup>2</sup></div>
          <div class="advantages-block__descript">Ежемесячный объем производства гофрокартона</div>
        </div>
        <div class="advantages-block">
          <div class="advantages-block__title">4 000 м<sup>2</sup></div>
          <div class="advantages-block__descript">Площадь склада</div>
        </div>
      </div>





      <div class="section-benefits">
        <div class="block-benefit wow animate__animated animate__fadeInUp">
          <div class="block-benefit__left">
            <img src="img/benefit/benefit_icon_1.png" alt="Производство">
          </div>
          <div class="block-benefit__right">
            <div class="benefit-right__title">Производство</div>
            <div class="benefit-right__descript">4 технологические линии спо- собны выполнить любой заказ любой сложности</div>
          </div>
        </div>
        <div class="block-benefit wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
          <div class="block-benefit__left">
            <img src="img/benefit/benefit_icon_2.png" alt="Бесплатные образцы">
          </div>
          <div class="block-benefit__right">
            <div class="benefit-right__title">Бесплатные образцы</div>
            <div class="benefit-right__descript">Бесплатно делаем образцы гофроупаковки - это помогает заранее увидеть упаковку</div>
          </div>
        </div>
        <div class="block-benefit wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
          <div class="block-benefit__left">
            <img src="img/benefit/benefit_icon_3.png" alt="Стабильное качество">
          </div>
          <div class="block-benefit__right">
            <div class="benefit-right__title">Стабильное качество</div>
            <div class="benefit-right__descript">Собственная лаборатория кон- тролирует качество на каждом этапе производства</div>
          </div>
        </div>
        <div class="block-benefit wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
          <div class="block-benefit__left">
            <img src="img/benefit/benefit_icon_4.png" alt="Страховой запас">
          </div>
          <div class="block-benefit__right">
            <div class="benefit-right__title">Страховой запас</div>
            <div class="benefit-right__descript">
              Можем хранить запас гофро- продукции на своих складах и поставлять его партиями</div>
          </div>
        </div>
        <div class="block-benefit wow animate__animated animate__fadeInUp " data-wow-delay="0.8s">
          <div class="block-benefit__left">
            <img src="img/benefit/benefit_icon_6.png" alt="Флексопечать">
          </div>
          <div class="block-benefit__right">
            <div class="benefit-right__title">Флексопечать</div>
            <div class="benefit-right__descript">
              Возможно нанесение вашего логотипа, текста или мани- пуляционных знаков</div>
          </div>
        </div>
        <div class="block-benefit wow animate__animated animate__fadeInUp" data-wow-delay="1s">
          <div class="block-benefit__left">
            <img src="img/benefit/benefit_icon_5.png" alt="Гидрофобные добавки">
          </div>
          <div class="block-benefit__right">
            <div class="benefit-right__title">Гидрофобные добавки</div>
            <div class="benefit-right__descript">
              На производстве реализована технология, которая позволяет гофрокартону стать прочнее</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="section-products" id="products">
    <div class="container">
      <div class="section-products__title">НАША ПРОДУКЦИЯ</div>
      <div class="section-products-block-container">
        <div class="products-block">
          <img src="img/products/products_img_1.png" alt="" class="products-block__img">
          <div class="products-title">Гофрокороб 4-х клапанный</div>
          <button class="products-block__button">Подробнее</button>
          <button class="products-block__button button-o">Получить расчет</button>
        </div>
        <div class="products-block">
          <img src="img/products/products_img_2.png" alt="" class="products-block__img">
          <div class="products-title">Гофролоток</div>
          <button class="products-block__button">Подробнее</button>
          <button class="products-block__button button-o">Получить расчет</button>
        </div>
        <div class="products-block">
          <img src="img/products/products_img_3.png" alt="" class="products-block__img">
          <div class="products-title">Гофрокороб самосборный (сложная высечка)</div>
          <button class="products-block__button">Подробнее</button>
          <button class="products-block__button button-o">Получить расчет</button>
        </div>
        <div class="products-block">
          <img src="img/products/products_img_4.png" alt="" class="products-block__img">
          <div class="products-title">Листовой гофрокартон</div>
          <button class="products-block__button">Подробнее</button>
          <button class="products-block__button button-o">Получить расчет</button>
        </div>
      </div>
    </div>
  </div>
  <div class="section-contacts">
    <div class="container">
      <div class="contacts-title">Получите индивидуальное предложение <span class="contacts-title__sub">на производство и поставку изделий</span></div>
      <div class="contacts-text">Введите ваш номер телефона:</div>
      <input type="text" class="contacts-input" placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ">
      <button class="contacts-button">Оставить заявку!</button>
      <div class="contacts-button__text">*Минимальный заказ 500шт</div>
    </div>
  </div>
  <div class="section-production" id="production">
    <div class="container">
      <div class="production-left">
        <div class="slider">
          <div class="slider__item">
            <img src="img/production/Slider__big/1.jpg" alt="" class="slider-item__img">
          </div>
          <div class="slider__item">
            <img src="img/production/Slider__big/2.jpg" alt="" class="slider-item__img">
          </div>
          <div class="slider__item">
            <img src="img/production/Slider__big/3.jpg" alt="" class="slider-item__img">
          </div>
          <div class="slider__item">
            <img src="img/production/Slider__big/4.jpg" alt="" class="slider-item__img">
          </div>
          <div class="slider__item">
            <img src="img/production/Slider__big/5.jpg" alt="" class="slider-item__img">
          </div>
          <div class="slider__item">
            <img src="img/production/Slider__big/6.jpg" alt="" class="slider-item__img">
          </div>
        </div>
        <div class="small-slider hidden-mobile">
          <div class="small-slider__item">
            <img src="img/production/Slider__small/1.jpg" alt="" class="small-slider__img">
          </div>
          <div class="small-slider__item">
            <img src="img/production/Slider__small/2.jpg" alt="" class="small-slider__img">
          </div>
          <div class="small-slider__item">
            <img src="img/production/Slider__small/3.jpg" alt="" class="small-slider__img">
          </div>
          <div class="small-slider__item">
            <img src="img/production/Slider__small/4.jpg" alt="" class="small-slider__img">
          </div>
          <div class="small-slider__item">
            <img src="img/production/Slider__small/5.jpg" alt="" class="small-slider__img">
          </div>
          <div class="small-slider__item">
            <img src="img/production/Slider__small/6.jpg" alt="" class="small-slider__img">
          </div>
        </div>
      </div>
      <div class="production-right">
        <span class="production-right__title">Производство</span>
        <p class="production-right__paragraph first  ">Современное оборудование позволяет произ- водить до 5 миллионов квадратных метров гофрокартона ежемесячно. Гофрокороба и лотки производятся по ГОСТу или чертежам заказчика.</p>
        <p class="production-right__paragraph">Досконально прорабатываем конструкции коро- бов и составы сырья, учитывая условия хранения, транспортировки и производства вашей продукции.</p>
        <p class="production-right__paragraph">Возможно нанесение цветной флексопечати на поверхность коробов.</p>
      </div>
    </div>
  </div>
  <div class="section-ourclients" id="clients">
    <div class="container">
      <div class="ourclients-title">
        НАШИ КЛИЕНТЫ
      </div>
      <ul class="ourclients-list">
        <li class="ourclients-item">
          <img src="img/ourcontacts/ourcontacts_item__img_1.png" alt="" class="ourclients-item__img">
        </li>
        <li class="ourclients-item">
          <img src="img/ourcontacts/ourcontacts_item__img_2.png" alt="" class="ourclients-item__img">
        </li>
        <li class="ourclients-item">
          <img src="img/ourcontacts/ourcontacts_item__img_3.png" alt="" class="ourclients-item__img">
        </li>
        <li class="ourclients-item">
          <img src="img/ourcontacts/ourcontacts_item__img_4.png" alt="" class="ourclients-item__img">
        </li>
        <li class="ourclients-item">
          <img src="img/ourcontacts/ourcontacts_item__img_5.png" alt="" class="ourclients-item__img">
        </li>
        <li class="ourclients-item">
          <img src="img/ourcontacts/ourcontacts_item__img_6.png" alt="" class="ourclients-item__img">
        </li>
        <li class="ourclients-item">
          <img src="img/ourcontacts/ourcontacts_item__img_7.png" alt="" class="ourclients-item__img">
        </li>
        <li class="ourclients-item">
          <img src="img/ourcontacts/ourcontacts_item__img_8.png" alt="" class="ourclients-item__img">
        </li>
        <li class="ourclients-item">
          <img src="img/ourcontacts/ourcontacts_item__img_9.png" alt="" class="ourclients-item__img">
        </li>
        <li class="ourclients-item">
          <img src="img/ourcontacts/ourcontacts_item__img_10.png" alt="" class="ourclients-item__img">
        </li>
        <li class="ourclients-item">
          <img src="img/ourcontacts/ourcontacts_item__img_11.png" alt="" class="ourclients-item__img">
        </li>
        <li class="ourclients-item">
          <img src="img/ourcontacts/ourcontacts_item__img_12.png" alt="" class="ourclients-item__img">
        </li>
      </ul>
    </div>
  </div>
  <div class="section-rewievs" id="rewievs">
    <div class="container">
      <div class="rewievs-title">Отзывы о сотрудничестве</div>
      <div class="rewievs-slider">
        <img src="img/rewievs/rewies-item.jpg" alt="" class="rewievs-slider__item">
        <img src="img/rewievs/rewies-item-2.jpg" alt="" class="rewievs-slider__item">
        <img src="img/rewievs/rewies-item-3.jpg" alt="" class="rewievs-slider__item">
        <img src="img/rewievs/rewies-item-4.jpg" alt="" class="rewievs-slider__item">
      </div>
    </div>
  </div>
  <?php

  include "phpSample/maps.php";
  include "phpSample/footer.php";
  ?>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <script>
    ymaps.ready(function() {
      var myMap = new ymaps.Map('map', {
          center: [54.752661, 56.002053],
          zoom: 16
        }, {
          searchControlProvider: 'yandex#search'
        }),

        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
          '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
          hintContent: 'Собственный значок метки',
          balloonContent: 'Это красивая метка'
        }, {
          // Опции.
          // Необходимо указать данный тип макета.
          iconLayout: 'default#image',
          // Своё изображение иконки метки.
          iconImageHref: 'img/header/General-logo.svg',
          // Размеры метки.
          iconImageSize: [191, 61],
          // Смещение левого верхнего угла иконки относительно
          // её "ножки" (точки привязки).
          iconImageOffset: [-5, -38]
        });
      myMap.behaviors.disable('scrollZoom');
      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        myMap.behaviors.disable('drag');
      }
      myMap.geoObjects
        .add(myPlacemark)
    });
  </script>
</body>

</html>