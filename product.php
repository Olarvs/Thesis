<body id="body">
<?php include 'includes/header.php'; ?>
                <button class="btn menu__btn" onclick="openMenu()">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="menu" id="menu">
                    <div class="menu__empty" onclick="closeMenu()"></div>
                    <div class="menu__overlay">
                        <button class="menu__btn--close" onclick="closeMenu()"><i class="fas fa-times"></i></button>
                        <ul class="menu__links">
                            <li class="menu__link--list"><a class="menu__link" onclick="closeMenu()"
                                    href="#header">About</a></li>
                            <li class="menu__link--list"><a class="menu__link" onclick="closeMenu()"
                                    href="#featured">Browse</a></li>
                            <li class="menu__link--list"><a class="menu__link" onclick="closeMenu()" href="">Basket</a>
                            </li>
                        </ul>
                        <div class="img__container--menu">
                            <img class="logo__img" src="./assets/logo.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <main>
        <section id="product">
            <div class="container">
                <div class="row">
                    <div class="product__container">
                        <div class="product__img--wrapper">
                            <img src="./assets//areca-palm.png" alt="" class="product__img">
                        </div>
                        <div class="product__info">
                            <h3 class="product__title">Plant</h3>
                            <p class="product__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor
                                nihil a adipisci est beatae reprehenderit, explicabo dolorem. Quae, modi, et veniam quod
                                dolorem, expedita quidem omnis optio labore reiciendis suscipit?</p>
                            <h4 class="product__price">£19.99</h4>
                            <button class="btn w-100">Add to Basket</button>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>