<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>サンプルサイト</title>
    <link href="./assets/css/styles.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/main.js"></script>
</head>
<body>
    <header class="header">
        <div class="header_inner">
            <div class="header_logo">
                <h1><a href="/"><img src="./assets/img/common/logo@2x.png" alt="BISTRO CALME"></a></h1>
            </div>

            <div class="header_desc"><p>サイトのキャッチフレーズ</p></div>

            <form class="header_search">
                <input type="text" placeholder="キーワードを入力">
                <i class="fas fa-search"></i>
            </form>
        </div>

        <div class="header_links">
            <nav class="gnav">
                <ul class="">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">わたしたちについて</a></li>
                    <li><a href="#">アクセス</a></li>
                    <li><a href="#">最新情報</a></li>
                    <li><a href="#">お問い合わせ</a></li>
                </ul>
            </nav>

            <ul class="header_sns">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
        </div>

        <svg class="header_menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
            <defs><clipPath id="clip-path"><rect width="30" height="30" fill="none"/></clipPath></defs>
            <g clip-path="url(#clip-path)">
                <rect class="header_border header_border-1" width="30" height="2" transform="translate(0 0)"/>
                <rect class="header_border header_border-2" width="30" height="2" transform="translate(0 10)"/>
                <rect class="header_border header_border-3" width="30" height="2" transform="translate(0 20)"/>
            </g>
        </svg>
    </header>

    <h2 class="pageTitle">メニュー<span>MENU</span></h2>

    <main class="main">
        <section class="sec">
            <div class="container">
                <div class="article article-menu">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h2 class="article_title">春キャベツのオムレツ</h2>
                            <div class="content">
                                <p>
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="article_pic">
                                <img src="./assets/img/menu/menu-1-lg@2x.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info">
                <div class="container">
                    <ul class="info_list">
                        <li>
                            <b>価格</b>
                            <span>800円</span>
                        </li>
                        <li>
                            <b>カロリー</b>
                            <span>680 kcal</span>
                        </li>
                        <li>
                            <b>アレルギー</b>
                            <span>小麦、そば</span>
                        </li>
                        <li>
                            <b>予約</b>
                            <span>必要あり</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <section class="sec">
            <div class="container">
                <div class="sec_header">
                    <h2 class="title title-jp">その他のフード</h2>
                    <span class="title title-en">FOOD</span>
                </div>
                <div class="row justify-content-center">

                    <div class="col-md-3">
                        <section class="menu">
                            <a href="#">
                                <figure class="menu_pic">
                                    <img src="./assets/img/menu/menu-1@2x.jpg" alt="">
                                </figure>
                                <h3 class="menu_title">メニュー名が入ります</h3>
                                <p class="menu_price">800円</p>
                                <div class="menu_desc">
                                    <p>
                                        概要が入ります。概要が入ります。概要が入ります。概要が入ります。
                                    </p>
                                </div>
                            </a>
                        </section>
                    </div>

                    <div class="col-md-3">
                        <section class="menu">
                            <a href="#">
                                <figure class="menu_pic">
                                    <img src="./assets/img/menu/menu-2@2x.jpg" alt="">
                                </figure>
                                <h3 class="menu_title">メニュー名が入ります</h3>
                                <p class="menu_price">800円</p>
                                <div class="menu_desc">
                                    <p>
                                        概要が入ります。概要が入ります。概要が入ります。概要が入ります。
                                    </p>
                                </div>
                            </a>
                        </section>
                    </div>

                    <div class="col-md-3">
                        <section class="menu">
                            <a href="#">
                                <figure class="menu_pic">
                                    <img src="./assets/img/menu/menu-3@2x.jpg" alt="">
                                </figure>
                                <h3 class="menu_title">メニュー名が入ります</h3>
                                <p class="menu_price">800円</p>
                                <div class="menu_desc">
                                    <p>
                                        概要が入ります。概要が入ります。概要が入ります。概要が入ります。
                                    </p>
                                </div>
                            </a>
                        </section>
                    </div>

                    <div class="col-md-3">
                        <section class="menu">
                            <a href="#">
                                <figure class="menu_pic">
                                    <img src="./assets/img/menu/menu-4@2x.jpg" alt="">
                                </figure>
                                <h3 class="menu_title">メニュー名が入ります</h3>
                                <p class="menu_price">800円</p>
                                <div class="menu_desc">
                                    <p>
                                        概要が入ります。概要が入ります。概要が入ります。概要が入ります。
                                    </p>
                                </div>
                            </a>
                        </section>
                    </div>

                    <div class="col-12">
                        <div class="sec_btn">
                            <a href="" class="btn btn-default">メニュー一覧<i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>

    <footer class="footer">
        <div class="container">
            <div class="footer_inner">
                <nav>
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">わたしたちについて</a></li>
                        <li><a href="#">アクセス</a></li>
                        <li><a href="#">最新情報</a></li>
                        <li><a href="#">お問い合わせ</a></li>
                    </ul>
                </nav>
                <div class="footer_copyright">
                    <small>&copy; BISTRO CALME All rights reserved.</small>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
