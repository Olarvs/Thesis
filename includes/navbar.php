<?php include 'includes/header.php'; ?>
<html>
    <body>
    <nav>
            <div class="nav__container">
                <a class="logo" href="index.html">
                    <img class="logo__img" src="image/logo/logo.png" alt="">
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
                            <img class="logo__img" src=".image/logo/logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </nav>
    </body>
</html>