<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="flex-container">
        <div class="header">
               <?php include 'logo.inc.php' ?>
               <?php include 'menu.inc.php' ?>
        </div>
        <div class="about_me">
          <h1>  <?php  echo $p  ?> </h1>
            <div class="data">
                <?php include 'me.inc.php' ?>
                <div class="fullname">
                    <p> My name is
                    <?php echo $name, ' ', $surname . ', I am from the ';
                          echo 'city', ' ', $city; ?>
                    </p>
                    <p> I am
                    <?php  echo $age;   ?>
                    years old </p>
                    <p> We can create variables!!! </p>
                    <p> No, we know simple operations with them </p>
                </div>
            </div>
            <div class="knowledge">
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a * $b;
                        echo "10 * 20: $c";
                    ?>   <br>
                     <?php
                        echo "price is: $price <br>";
                        echo $d;
                    ?>
            </div>
            <div class="article">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias!
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </p>
            </div>
        </div>
            <?php include 'footer.inc.php' ?>
    </div>

</body>
</html>
