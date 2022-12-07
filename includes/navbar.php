
<html>
    <body>
    <!-- navigation starts here -->
    <nav>
            <div class="nav__container">

                <!-- dito ung logo -->
                <a class="logo" href="index.php">
                    <img class="logo__img" src="image/logo/logo.png" alt="">
                    <span class="logo__text">Margaux Cacti & Succulents Corner</span>
                </a>

                <!-- dito ung mga link ng pages -->
                <ul class="nav__links">
                    
                    <!-- about -->
                    <li><a class="nav__link" href="about.html">About</a></li>
                    
                    <!-- Category -->
                    <li class="nav-item dropdown"><a class="nav__link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                    <!-- <li class="nav__link nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category <span class="caret"></span></a> -->
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <?php

                            $conn = $pdo->open();
                             try{

                                $stmt = $conn->prepare("SELECT * FROM category");
                                $stmt->execute();
                                foreach($stmt as $row){
                                    echo "
                                    <li><a class='dropdown-item' href='category.php?category=".$row['cat_slug']."'>".$row['name']."</a></li>
                                    ";                  
                                }
                            }
                            catch(PDOException $e){
                                echo "There is some problem in connection: " . $e->getMessage();
                            }

                            $pdo->close();

                         ?>
                    </ul>

                    </li>
                    <!-- login -->
                    <li>
                        <a class="nav__link login" href="login.php">Login</a>
                    </li>
                    
                    <!-- sign up -->
                    <li>
                        <a class="nav__link login" href="signup.php">Sign up</a>
                    </li>

                    <!-- dito ung cart -->
                    <li>
                        <a class="nav__link nav__cart" href="">
                            <i class="fas fa-cart-shopping" aria-hidden="true"></i>
                            <div class="basket__items--container">
                                <p class="basket__items--text">0</p>
                            </div>
                        </a>
                    </li>

                    <!-- search bar -->
                    <li>
                        <form action="index.php" method="post"></form>
                    </li>
                </ul>
                <form method="POST" class="navbar-form navbar-left" action="search.php">
                    <div class="input-group">
                        <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search for Product" required>
                        <span class="input-group-btn" id="searchBtn" style="display:none;">
                        <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i> </button>
                        </span>
                    </div>
                </form>
                <!-- link of pages ends here -->

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
                                    href="#featured">Category</a></li>
                            <li class="menu__link--list"><a class="menu__link" onclick="closeMenu()" href="">Basket</a>
                            </li>
                        </ul>

                        <div class="img__container--menu">
                            <img class="logo__img" src=".image/logo/logo.png" alt="">
                        </div>
                    </div>
                </div>

            <!-- div navbar ends here -->
            </div>
    </nav>
    </body>
</html>