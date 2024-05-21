<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book A Table</title>
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

        <div class="book-table-cont flex-c">
            <div class="food-menu-cont1  flex-c">
                <h2 class="font-big">Book A Table</h2>
                <p class="font">We consider all the drivers of change gives you the components <br> you need to change to create a truly happens.</p>
            </div>
        </div>

        <div class="book-table-cont2"><div class="positioning flex">
            <div class="tablecont2  grid-2rows">
                <form action="backend.php" method="post">

                    <span class="inpitem">
                <label for="date"><p class="font">Date</p></label> <br>
                <input type="date" name="date" id="date" placeholder="Enter Date"><br>
                <label for="Name"><p class="font">Name</p></label><br>
                <input type="text" name="Name" id="Name" placeholder="Enter Name">
            </span>
                    <span class="inpitem left">
                <label for="Time"><p class="font">Time</p></label> <br>
                <input type="time" name="Time" id="Time" placeholder="Enter Time"><br>
                <label for="Phone"><p class="font">Phone</p></label><br>
                <input type="number" name="Phone" id="Phone" placeholder="Enter Number">
            </span>
                    <div class="inpitem flex-c margin">
                        <label for="Person"><p class="font">Person</p></label>
                        <select name="Person" id="Person">
                <option value="Person">1</option>
                <option value="Person">2</option>
                <option value="Person">3</option>
                <option value="Person">4</option>
                <option value="Person">5</option>
                <option value="Person">6</option>
                <option value="Person">7</option>
            </select>
                    </div>
                    <div class="inpitem flex-c margin">
                        <button class="btn-nav font">Book A Table</button></div>
                </form>
            </div></div>

        
        </div>

        <!-- Footer part -->
        <?php
    require("foodfooter.php");
?>
</body>

</html>