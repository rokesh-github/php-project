<?php
require_once('config/db.php');


$db = db_obj();
$query = "select * from shopping";
$result = mysqli_query($db, $query);
var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>flexbox</title>
</head>

<body>
    <section>
        <h1 class="heading">Fresh Vegetables</h1>
    </section>
    <main class="container">
        <section class="product">
            <!-- card 1 -->
            <div class="product-items">
                <div class="image-contain">
                    <img src="assets/img/broccoli.jpg" class="image">
                </div>
                <h3 class="topic">Broccoli</h3>
                <p class="gram">each-approx.330g</p>
                <p class="text">La manna Fresh</p>
                <p class="price">$1.98</p>
                <p class="high-price">$5.99perkg</p>
                <div class="buy1">
                    <button class="buy">Add for $1.98</button>
                </div>
            </div>
            <!-- card 2 -->
            <div class="product-items">
                <div class="image-contain">
                    <img src="assets/img/broccoli.jpg" class="image">
                </div>
                <h3 class="topic">Broccoli</h3>
                <p class="gram">each-approx.330g</p>
                <p class="text">La manna Fresh</p>
                <p class="price">$1.98</p>
                <p class="high-price">$5.99perkg</p>
                <div class="buy1">
                    <button class="buy">Add for $1.98</button>
                </div>
            </div>
            <!-- card 3 -->
            <div class="product-items">
                <div class="image-contain">
                    <img src="assets/img/broccoli.jpg" class="image">
                </div>
                <h3 class="topic">Broccoli</h3>
                <p class="gram">each-approx.330g</p>
                <p class="text">La manna Fresh</p>
                <p class="price">$1.98</p>
                <p class="high-price">$5.99perkg</p>
                <div class="buy1">
                    <button class="buy">Add for $1.98</button>
                </div>
            </div>
            <!-- card 4 -->
            <div class="product-items">
                <div class="image-contain">
                    <img src="assets/img/broccoli.jpg" class="image">
                </div>
                <h3 class="topic">Broccoli</h3>
                <p class="gram">each-approx.330g</p>
                <p class="text">La manna Fresh</p>
                <p class="price">$1.98</p>
                <p class="high-price">$5.99perkg</p>
                <div class="buy1">
                    <button class="buy">Add for $1.98</button>
                </div>
            </div>
            <!-- card 5 -->
            <div class="product-items">
                <div class="image-contain">
                    <img src="assets/img/broccoli.jpg" class="image">
                </div>
                <h3 class="topic">Broccoli</h3>
                <p class="gram">each-approx.330g</p>
                <p class="text">La manna Fresh</p>
                <p class="price">$1.98</p>
                <p class="high-price">$5.99perkg</p>
                <div class="buy1">
                    <button class="buy">Add for $1.98</button>
                </div>
            </div>
            <!-- card 6 -->
            <div class="product-items">
                <div class="image-contain">
                    <img src="assets/img/broccoli.jpg" class="image">
                </div>
                <h3 class="topic">Broccoli</h3>
                <p class="gram">each-approx.330g</p>
                <p class="text">La manna Fresh</p>
                <p class="price">$1.98</p>
                <p class="high-price">$5.99perkg</p>
                <div class="buy1">
                    <button class="buy">Add for $1.98</button>
                </div>
            </div>
            <!-- card 7 -->
            <div class="product-items">
                <div class="image-contain">
                    <img src="assets/img/broccoli.jpg" class="image">
                </div>
                <h3 class="topic">Broccoli</h3>
                <p class="gram">each-approx.330g</p>
                <p class="text">La manna Fresh</p>
                <p class="price">$1.98</p>
                <p class="high-price">$5.99perkg</p>
                <div class="buy1">
                    <button class="buy">Add for $1.98</button>
                </div class="buy1">
            </div>
            <!-- card 8 -->
            <div class="product-items">
                <div class="image-contain">
                    <img src="assets/img/broccoli.jpg" class="image">
                </div>
                <h3 class="topic">Broccoli</h3>
                <p class="gram">each-approx.330g</p>
                <p class="text">La manna Fresh</p>
                <p class="price">$1.98</p>
                <p class="high-price">$5.99perkg</p>
                <div class="buy1">
                    <button class="buy">Add for $1.98</button>
                </div>
            </div>
            <!-- card 9 -->

            <div class="product-items">
                <div class="image-contain">
                    <img src="assets/img/broccoli.jpg" class="image">
                </div>
                <h3 class="topic">Broccoli</h3>
                <p class="gram">each-approx.330g</p>
                <p class="text">La manna Fresh</p>
                <p class="price">$1.98</p>
                <p class="high-price">$5.99perkg</p>
                <div class="buy1">
                    <button class="buy">Add for $1.98</button>
                    <?php
                    $product_items['brocolli,each-approx.330g,La maana Fresh,$1.98,$5.99perkg'];
                    $uList .= "<ul>";
                    foreach($product_items as $product_item) {
                        $uList .= "<li>$product_item</li>";
                    }
                    $uList .= "</ul>";
                    echo $uList;

                    ?>

                    <tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <td><?php echo $row['id']  ?> </td>
                            <td><?php echo $row['name']  ?> </td>
                            <td><?php echo $row['category']  ?> </td>
                            <td><?php echo $row['price']  ?> </td>
                            <td><?php echo $row['weight']  ?> </td>
                            <td><?php echo $row['price_per_kg']  ?> </td>
                            <td><?php echo $row['image_url']  ?> </td>
                    </tr>
                <?php
                        }
                ?>
                </div>
            </div>
        </section>
        <section>
            <?php
            if (isset($_POST['submit'])) {
                if (!empty($_POST['name']) && isset($_POST['name'])) {
                    $name = $_POST['name'];
                    $value = "INSERT INTO form(name) VALUES ('$name')";
                    $output = mysqli_query($db, $value);
                    if ($output) {
                        echo $name . 'is inserted ';
                    } else {
                        echo 'Name is not inserted..';
                    }
                } else {
                    echo 'enter a valid name';
                }
                //phone number
                if (!empty($_POST['number']) && isset($_POST['number'])) {
                    $number = $_POST['number'];
                    $value = "INSERT INTO form(number) VALUES ('$number')";
                    $output = mysqli_query($db, $value);
                    if ($output) {
                        echo $number . 'is inserted ';
                    } else {
                        echo 'Number is not inserted..';
                    }
                } else {
                    echo 'enter a valid phone number';
                }
            }

            ?>
            <!-- <form action="index.php" method="post">
                <label>Name:</label>
                <input type="text" name="name" />

                <br>
                <label>phone number:</label>
                <input type="number" name="name" />

                <br>
                <label>E-mail:</label>
                <input type="email" name="name" />

                <br>

                <label>Gender</label>
                <input type="radio" name="gender" value="female" />Female
                <input type="radio" name="gender" value="male" />Male
                <input type="radio" name="gender" value="other" />other
                <br>

                <br>
                <input type="submit" name="submit" value="submit" />
            </form> -->
        </section>
    </main>
</body>

</html>