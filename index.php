<?
require "./pages/vendor/connect.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" size="32x32" href="./img/icon.png">
    <title>CARNEWS</title>
</head>
<header>
    <a href="./index.php" class="logo">
        <img src="./img/logo.png" alt="logo">
    </a>
    <nav class="navbar">
        <!-- Ссылки навбара -->
        <a href="./pages/gibdd.php">ГИБДД</a>
        <a href="./pages/test.php">Тест-драйвы</a>
        <a href="./pages/dtp.php">ДТП</a>
        <a href="./pages/pdd.php">ПДД</a>
        <a href="./pages/kredit.php">Кредит</a>
    </nav>
    <!-- Иконка бургер меню -->
    <div class="burger">
        <img src="./img/burger menu.png" alt="">
    </div>
    <div class="user"></div>
</header>
<div class="wrapper">
    <h1 class="h1">НОВОСТИ</h1>
    <!-- Сортировка -->
    <div id="sort">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.9842 15C12.9842 15.5523 13.4319 16 13.9842 16C14.3416 16 14.6552 15.8125 14.832 15.5305L17.5196 12.8429C17.9101 12.4524 17.9101 11.8192 17.5196 11.4287C17.1291 11.0382 16.4959 11.0382 16.1054 11.4287L14.9842 12.5499L14.9842 5C14.9842 4.44771 14.5364 4 13.9842 4C13.4319 4 12.9842 4.44772 12.9842 5L12.9842 14.9506C12.984 14.9597 12.984 14.9688 12.9842 14.9779V15Z" fill="currentColor" />
            <path d="M11.016 9C11.016 8.44771 10.5682 8 10.016 8C9.65856 8 9.34496 8.18748 9.16813 8.46947L6.48052 11.1571C6.08999 11.5476 6.08999 12.1808 6.48051 12.5713C6.87104 12.9618 7.5042 12.9618 7.89473 12.5713L9.01596 11.4501L9.01596 19C9.01596 19.5523 9.46367 20 10.016 20C10.5682 20 11.016 19.5523 11.016 19L11.016 9.04945C11.0161 9.04033 11.0161 9.03121 11.016 9.02208V9Z" fill="currentColor" />
        </svg>
        Сортировка
    </div>
    <!-- контейнер с блоками новостей -->
    <div class="news-count">
        <!-- блок новостей -->
        <div class="news-block">
            <div class="news-block-img">
                <img src="./img/мерс.jpg" alt="" class="new">
            </div>
            <div class="news-info-block">
                <div class="news-block-h2">
                    <h2>Lorem rem rem ipsum dolor sit amet.</h2>
                </div>
                <div class="news-block-date-and-like">
                    <div class="news-block-span">
                        <span class="block-data">Data: 22.08.2023 </span>
                    </div>
                    <div class="news-like-block">
                        <div class="user-likes">
                            <svg width="25" height="25" viewBox="0 0 18 18" fill="red" xmlns="http://www.w3.org/2000/svg" id="icon">
                                <g id="favorite">
                                    <path id="Vector" class="vector" d="M9 16.0125L7.9125 15.0225C4.05 11.52 1.5 9.21 1.5 6.375C1.5 4.065 3.315 2.25 5.625 2.25C6.93 2.25 8.1825 2.8575 9 3.8175C9.8175 2.8575 11.07 2.25 12.375 2.25C14.685 2.25 16.5 4.065 16.5 6.375C16.5 9.21 13.95 11.52 10.0875 15.03L9 16.0125Z" fill="#A7A7A7" />
                                </g>
                            </svg>
                            <div class="likesCounter"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="news-block">
            <div class="news-block-img">
                <img src="./img/мерс.jpg" alt="" class="new">
            </div>
            <div class="news-info-block">
                <div class="news-block-h2">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                </div>
                <div class="news-block-date-and-like">
                    <div class="news-block-span">
                        <span class="block-data">Data: 21.08.2023 </span>
                    </div>
                    <div class="news-like-block">
                        <div class="user-likes">
                            <svg width="25" height="25" viewBox="0 0 18 18" fill="red" xmlns="http://www.w3.org/2000/svg" id="icon">
                                <g id="favorite">
                                    <path id="Vector" class="vector" d="M9 16.0125L7.9125 15.0225C4.05 11.52 1.5 9.21 1.5 6.375C1.5 4.065 3.315 2.25 5.625 2.25C6.93 2.25 8.1825 2.8575 9 3.8175C9.8175 2.8575 11.07 2.25 12.375 2.25C14.685 2.25 16.5 4.065 16.5 6.375C16.5 9.21 13.95 11.52 10.0875 15.03L9 16.0125Z" fill="#A7A7A7" />
                                </g>
                            </svg>
                            <div class="likesCounter"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="news-block">
            <div class="news-block-img">
                <img src="./img/мерс.jpg" alt="" class="new">
            </div>
            <div class="news-info-block">
                <div class="news-block-h2">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                </div>
                <div class="news-block-date-and-like">
                    <div class="news-block-span">
                        <span class="block-data">Data: 20.08.2023 </span>
                    </div>
                    <div class="news-like-block">
                        <div class="user-likes">
                            <svg width="25" height="25" viewBox="0 0 18 18" fill="red" xmlns="http://www.w3.org/2000/svg" id="icon">
                                <g id="favorite">
                                    <path id="Vector" class="vector" d="M9 16.0125L7.9125 15.0225C4.05 11.52 1.5 9.21 1.5 6.375C1.5 4.065 3.315 2.25 5.625 2.25C6.93 2.25 8.1825 2.8575 9 3.8175C9.8175 2.8575 11.07 2.25 12.375 2.25C14.685 2.25 16.5 4.065 16.5 6.375C16.5 9.21 13.95 11.52 10.0875 15.03L9 16.0125Z" fill="#A7A7A7" />
                                </g>
                            </svg>
                            <div class="likesCounter"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="news-block">
            <img src="./img/мерс.jpg" class="news-block-img" alt="">
            <div class="news-info-block">
                <h2 class="news-block-h2">Lorem ipsum dolor sit amet.</h2>
                <div class="news-block-date-and-like">
                    <div class="news-block-span">
                        <span class="block-data">Data: 19.08.2023 </span>
                    </div>
                    <div class="news-like-block">
                        <div class="user-likes">
                            <svg width="25" height="25" viewBox="0 0 18 18" fill="red" xmlns="http://www.w3.org/2000/svg" id="icon">
                                <g id="favorite">
                                    <path id="Vector" class="vector" d="M9 16.0125L7.9125 15.0225C4.05 11.52 1.5 9.21 1.5 6.375C1.5 4.065 3.315 2.25 5.625 2.25C6.93 2.25 8.1825 2.8575 9 3.8175C9.8175 2.8575 11.07 2.25 12.375 2.25C14.685 2.25 16.5 4.065 16.5 6.375C16.5 9.21 13.95 11.52 10.0875 15.03L9 16.0125Z" fill="#A7A7A7" />
                                </g>
                            </svg>
                            <div class="likesCounter"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<footer>
    <div class="social">
        <a href="https://vk.com/gurgen_me"><i class="icon ion-social-vkontakte"><img src="./img/vk.png" alt="vk"></i></a>
        <a href="https://github.com/Gurgen-me"><i class="icon ion-social-github"><img src="./img/github.png" alt="git"></i></i></a>
        <a href="https://t.me/carnews93"><i class="icon ion-social-telegram"><img src="./img/tg.png" alt="tg"></i></a>
        <a href="https://www.instagram.com/gurgen.me/"><i class="icon ion-social-instagram"><img src="./img/instagram.png" alt="inst"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100029114281798"><i class="icon ion-social-facebook"><img src="./img/facebook.png" alt="facebook"></i></a>
    </div>
    <p class="copyright">&copy; Melkonyan Gurgen 2023</p>
</footer>
<script src="./js/script.js"></script>
</body>

</html>