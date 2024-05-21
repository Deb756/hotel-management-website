<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="food style1.css">
    <link rel="stylesheet" href="food style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz@9..40&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
</head>

<body>
    <!-- Navigation Block -->
    <?php
    require("foodnavigation.php");
?>
        <div class="contactpg">
            <div class="book-table-cont flex-c ">
                <div class="food-menu-cont1  flex-c">
                    <h2 class="font-big">Contact Us</h2>
                    <p class="font">We consider all the drivers of change gives you the components <br> you need to change to create a truly happens.</p>
                </div>
            </div>
        </div>
        <div class="contactpg-2 flex-c">
            <div class="forming inpitem">
                <form action="backend.php" method="post">
                    <div class="forming-1 flex">
                        <div class="name1 flex-c"><label for="Name"><p class="font">Name</p></label>
                            <input type="text" name="Name" id="Name" placeholder="Enter Name"></div>
                        <div class="name1 flex-c"><label for="Email"><p class="font">Email</p></label>
                            <input type="email" name="Email" id="Email" placeholder="Enter Email"></div>

                    </div>
                    <div class="forming-2 flex-c">
                        <label for="subject"><p class="font">subject</p></label>
                        <input type="text" name="subject" id="subject" placeholder="Enter subject">
                        <label for="massage"><p class="font">massage</p></label>
                        <textarea name="massage" id="massage" cols="30" rows="10"></textarea>
                    </div>
                    <button class="btn-nav font">Send
                    </button>
                </form>
            </div>

            <div class="contactinfo flex">
                <div class="contactinfo1">
                    <h2 class="font">Call Us:</h2>
                    <h2 class="font h22">+1-234-567-8900</h2>

                </div>
                <div class="contactinfo1">
                    <h2 class="font">Hours:</h2>
                    <p class="font">Mon-Fri: 11am - 8pm <br> Sat,Sun: 9am - 10pm</p>
                </div>
                <div class="contactinfo1">
                    <h2 class="font">Our Location:</h2>
                    <p class="font">123 Bridge Street <br> Nowhere Land, LA 12345 <br> United States</p>
                </div>
            </div>
        </div>



        <!-- Footer part -->
        <?php
    require("foodfooter.php");
?>
</body>

</html>