<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="food style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz@9..40&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
</head>

<body>
    <!-- Navigation Block -->
    <?php
    require("foodnavigation.php");
?>

        <div class="food-menu-cont flex-c">
            <div class="food-menu-cont1 flex-c">
                <h2 class="font-big">Our Menu</h2>
                <p class="font">We consider all the drivers of change gives you the components <br> you need to change to create a truly happens.</p>
            </div>
            <div class="food-menu-cont2 flex">
                <a href="#"><button class="btn-nav font">All</button></a>
                <a href="#"><button class="btn-nav font">Break Fast</button></a>
                <a href="#"><button class="btn-nav font">Main Dishes</button></a>
                <a href="#"><button class="btn-nav font">Drinks</button></a>
                <a href="#"><button class="btn-nav font">Deserts</button></a>
            </div>
            <div class="food-menu-cont3 flex-c">
                <div class="boxcon1 flex">
                    <div class="menuboxes"><img src="food-menu-img1 (8).png" alt="">
                        <div class="inboxp flex-c">
                            <h2 class="font color">$ 9.99</h2>
                            <h3 class="font" id="size">Fried Eggs</h3>
                            <p class="font">Made with eggs, lettuce, salt, oil and other ingredients.</p>
                        </div>
                    </div>
                    <div class="menuboxes"><img src="food-menu-img2 (7).png" alt="">
                        <div class="inboxp flex-c">
                            <h2 class="font color">$ 15.99</h2>
                            <h3 class="font" id="size">Hawaiian Pizza</h3>
                            <p class="font">Made with eggs, lettuce, salt, oil and other ingredients.</p>
                        </div>
                    </div>
                    <div class="menuboxes"><img src="food-menu-img3 (6).png" alt="">
                        <div class="inboxp flex-c">
                            <h2 class="font color">$ 7.25</h2>
                            <h3 class="font" id="size">Martinez Cocktail</h3>
                            <p class="font">Made with eggs, lettuce, salt, oil and other ingredients.</p>
                        </div>
                    </div>
                    <div class="menuboxes"><img src="food-menu-img41.png" alt="">
                        <div class="inboxp flex-c">
                            <h2 class="font color">$ 20.99</h2>
                            <h3 class="font" id="size">Butterscotch Cake</h3>
                            <p class="font">Made with eggs, lettuce, salt, oil and other ingredients.</p>
                        </div>
                    </div>
                </div>
                <div class="boxcon1 flex">
                    <div class="menuboxes"><img src="food-menu-img4 (5).png" alt="">
                        <div class="inboxp flex-c">
                            <h2 class="font color">$ 5.89</h2>
                            <h3 class="font" id="size">Mint Lemonade</h3>
                            <p class="font">Made with eggs, lettuce, salt, oil and other ingredients.</p>
                        </div>
                    </div>
                    <div class="menuboxes"><img src="food-menu-img5(4).png" alt="">
                        <div class="inboxp flex-c">
                            <h2 class="font color">$ 18.05</h2>
                            <h3 class="font" id="size">Chocolate Icecream</h3>
                            <p class="font">Made with eggs, lettuce, salt, oil and other ingredients.</p>
                        </div>
                    </div>
                    <div class="menuboxes"><img src="food-menu-img6(3).png" alt="">
                        <div class="inboxp flex-c">
                            <h2 class="font color">$ 12.55</h2>
                            <h3 class="font" id="size">Cheese Burger</h3>
                            <p class="font">Made with eggs, lettuce, salt, oil and other ingredients.</p>
                        </div>
                    </div>
                    <div class="menuboxes"><img src="food-menu-img7 (2).png" alt="">
                        <div class="inboxp flex-c">
                            <h2 class="font color">$ 12.99</h2>
                            <h3 class="font" id="size">Classic Waffles</h3>
                            <p class="font">Made with eggs, lettuce, salt, oil and other ingredients.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-cont2 flex">
            <div class="menu2-box1 flex-c">
                <h2 class="font-big">You can order <br> through apps</h2>
                <p class="font">Lorem ipsum dolor sit amet consectetur adipiscing elit enim bibendum sed et aliquet aliquet risus tempor semper.</p>
            </div>
            <div class="menu2-box2 flex-c">
                <div class="menu2imgcls1 flex">
                    <a href="#"><img src="menu2-img1.png" alt=""></a>
                    <a href="#"><img src="menu2-img2.png" alt=""></a>
                    <a href="#"><img src="menu2-img3.png" alt=""></a>
                </div>
                <div class="menu2imgcls1 flex">
                    <a href="#"><img src="menu2-img4.png" alt=""></a>
                    <a href="#"><img src="menu2-img5.png" alt=""></a>
                    <a href="#"><img src="menu2-img6.png" alt=""></a>
                </div>
                <div class="menu2imgcls1 flex">
                    <a href="#"><img src="menu2-img7.png" alt=""></a>
                    <a href="#"><img src="menu2-img8.png" alt=""></a>
                    <a href="#"><img src="menu2-img9.png" alt=""></a>
                </div>
            </div>
        </div>




        <!-- Footer Block -->
        <?php
    require("foodfooter.php");
?>
</body>

</html>