<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html>

<body id="body">
    <section id="landing">
        <nav>
            <div class="nav__container">
                <a class="logo" href="index.html">
                    <img class="logo__img" src="image/logo/logo.svg" alt="">
                    <span class="logo__text">Margaux Cacti & Succulents Corner</span>
                </a>
                <ul class="nav__links">
                    <li><a class="nav__link" href="about.html">About</a></li>
                    <li><a class="nav__link" href="browse.html">Browse</a></li>
                    <li>
                        <a class="nav__link nav__cart" href="">
                            <i class="fas fa-cart-shopping" aria-hidden="true"></i>
                            <div class="basket__items--container">
                                <p class="basket__items--text">5</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <button class="menu__btn" onclick="openMenu()">
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
                            <img class="logo__img" src=".image/logo/logo.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <header>
            <div class="header__container">
                <div class="header__description">
                    <h1 class="text-green">Selling plants of the highest quality</h1>
                    <h2>Explore a range of plants with <span class="text-green">Margaux</span></h2>
                    <a href="browse.html">
                        <button class="btn">Browse Plants</button>
                    </a>
                </div>
                <figure class="header__img--container">
                    <img class="header__img" src="image/landing/landing-succ.png" alt="">
                </figure>
            </div>
        </header>
    </section>
    <main>
        <section id="highlights">
            <div>
                <div class="row">
                    <h2 class="section-title">Why choose <span class="text-green">Margaux Cacti & Succulents Corner?</span></h1>
                        <div class="highlight__wrapper">
                            <div class="highlight">
                                <div class="highlight__img">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                <h3 class="highlight__subtitle">Eco-Friendly</h3>
                                <p class="highlight__description">Our products leave no carbon footprint</p>
                            </div>
                            <div class="highlight">
                                <div class="highlight__img">
                                    <i class="fas fa-user"></i>
                                </div>
                                <h3 class="highlight__subtitle">Satisfaction</h3>
                                <p class="highlight__description">We strive to provide quality service to customers</p>
                            </div>
                            <div class="highlight">
                                <div class="highlight__img">
                                    <i class="far fa-thumbs-up"></i>
                                </div>
                                <h3 class="highlight__subtitle">Trusted by many</h3>
                                <p class="highlight__description">Our services are used by over 10,000+ users</p>
                            </div>
                        </div>
                </div>
            </div>
        </section>

        <section id="popular">
            <div class="container popular-container">
                <div class="row">
                    <h2 class="section-title">Most Popular <span class="text-green">Plants</span></h2>
                    <div class="plants__wrapper">
                        <div class="plant__card">
                            <figure class="plant__img--container">
                                <img class="plant__img" src="./assets/peace-lily.png" alt="">
                            </figure>
                            <h3 class="plant__title">Peace Lily</h3>
                            <h4 class="plant__price">£19.99</h4>
                            <button class="plant__btn btn">Add to Basket</button>
                        </div>
                        <div class="plant__card">
                            <figure class="plant__img--container">
                                <img class="plant__img" src="./assets/areca-palm.png" alt="">
                            </figure>
                            <h3 class="plant__title">Areca Palm</h3>
                            <h4 class="plant__price">£19.99</h4>
                            <button class="plant__btn btn">Add to Basket</button>
                        </div>
                        <div class="plant__card">
                            <figure class="plant__img--container">
                                <img class="plant__img" src="./assets/swiss-cheese-plant.png" alt="">
                            </figure>
                            <h3 class="plant__title">Swiss Cheese Plant</h3>
                            <h4 class="plant__price">£19.99</h4>
                            <button class="plant__btn btn">Add to Basket</button>
                        </div>
                        <div class="plant__card">
                            <figure class="plant__img--container">
                                <img class="plant__img" src="./assets/kentia-palm.png" alt="">
                            </figure>
                            <h3 class="plant__title">Kentia P</h3>
                            <h4 class="plant__price">£19.99</h4>
                            <button class="plant__btn btn">Add to Basket</button>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="browse">
            <div class="container">
                <div class="row">
                    <h2>Browse our <span class="text-green">Collection</span></h2>
                    <div class="browse__wrapper">
                        <a href="browse.html">
                            <button class="btn">Browse Plants</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <a href="#">
        <div class="back-to-top" onscroll="BackToTop()">
            <i class="fas fa-up-long"></i>
        </div>
    </a>
    <?php include 'includes/footer.php'; ?>
</body>
</html>