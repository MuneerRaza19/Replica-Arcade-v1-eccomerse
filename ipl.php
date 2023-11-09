<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="basket.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/65170424e6bed319d0043c7f/1hbgugc2k';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!------ Include the above in your HEAD tag ---------->
    <title>CWC</title>
</head>
<style>
    footer {
            background-color: #222;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        footer p {
            font-size: 16px;
            margin: 0;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
        }

        footer a:hover {
            text-decoration: underline;
        }


/* Add more styles as needed */
</style>

</head>

<body>

<nav class="navbar navbar-expand-sm   navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div style="height: 50px;" class="d-flex align-items-center">
        <!-- Add your logo here with a specific class for styling -->
        <a class="navbar-brand" href="#">
            <img src="logo.png" alt="Your Logo" style=" margin-top:10px; width: 200px; height: auto;"> <!-- Adjust width as needed -->
        </a>
    </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cwc.php">CWC</a>
            </li>
            <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
            Products
            </a>
            <div class="dropdown-menu sm-menu">
              <a class="dropdown-item" href="pak.php">Pakistan Cricket Shirts</a>
              <a class="dropdown-item" href="psl.php">PSL Shirts</a>
              <a class="dropdown-item" href="ipl.php">Indian Cricket Shirts</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://tawk.to/chat/65170424e6bed319d0043c7f/1hbgugc2k">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="help.php">Size Guide</a>
          </li>
           <li class="nav-item dropdown dmenu">
          
          </li> 
          </ul>
          <div class="social-part">
    <a href="cart.php">
        <i class="fa fa-shopping-cart" style="color: red;" aria-hidden="true"></i>
    </a>
</div>
        </div>
      </nav>

    <main>
        <section class="subsection">
            <div class="container">
                <h2>IPL Shirts</h2>
                <div class="product-grid">
                <?php
                include 'config.php'; // Include your database connection configuration

                $stmt = $conn->prepare('SELECT DISTINCT product_name, product_price, product_image, product_code, id FROM ipl'); // Replace 'products' with your actual table name
                $stmt->execute();
                $result = $stmt->get_res// Check if the user has previously accepted
function hasAcceptedPrivacyPolicy($conn, $user_ip) {
    $stmt = $conn->prepare("SELECT * FROM privacy_acceptance WHERE ip_address = ?");
    $stmt->execute([$user_ip]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

$user_ip = $_SERVER['REMOTE_ADDR'];

if (!hasAcceptedPrivacyPolicy($conn, $user_ip)) {
    // Display the pop-up
    echo '<div id="popup" class="popup">
            <div class="popup-content">
                <h2>Privacy Policy and Terms</h2>
                <!-- Include your privacy policy and terms and conditions here -->
                <p>Your privacy policy and terms content here.</p>
                <form method="POST">
                    <input type="submit" name="accept" value="Accept">
                    <input type="submit" name="decline" value="Decline">
                </form>
            </div>
        </div>';

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['accept'])) {
            // Record acceptance in the database
            $stmt = $conn->prepare("INSERT INTO privacy_acceptance (ip_address, accepted_at) VALUES (?, NOW())");
            $stmt->execute([$user_ip]);
        } elseif (isset($_POST['decline'])) {
            // Redirect or display a message for declined users
            header("Location: decline.php"); // Replace with your decline page
            exit;
        }
    }
}

// Close the database connection
$conn = null;
?>ult();

                while ($row = $result->fetch_assoc()):
                    // Fetch available sizes for the current product
                    $product_id = $row['id'];
                    $sizes_query = "SELECT DISTINCT size FROM product WHERE id = $product_id";
                    $sizes_result = $conn->query($sizes_query);
                    $available_sizes = [];
                    while ($size_row = $sizes_result->fetch_assoc()) {
                        $available_sizes[] = $size_row['size'];
                    }
                ?>
                <div class="product">
                    
                    <img src="<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_name']; ?>">
                    <h3><?php echo $row['product_name']; ?></h3>
                    <p class="price">£<?php echo $row['product_price']; ?></p>
                    <form action="cartconfig.php" method="post" class="form-submit">
                        <!-- Quantity input -->
                        <div class="row p-2">
                            
                            <div class="col-md-3 py-1 pl-4">                           
           
        
                                
                            </div>
                            <div class="col-md-6">
                                <b> Size: </b>
                </br>
                            <select name="product_size" class="form-control">
                            <option value="XSmall">Xtra Small</option>
               <option value="small">Small</option>
               <option value="medium">Medium</option>
               <option value="large">Large</option>
               <option value="Xbig">Xtra Big</option>
               <option value="Xxbig">Xtra Xtra Big</option>
           </select> </br>
         <b>Quantity : </b>
                                <input type="number" class="form-control pqty" value="<?= isset($row['product_qty']) ? $row['product_qty'] : 1 ?>" name="product_qty">
                            </div>

                        </div>
                        <!-- Size dropdown menu -->
                
    <br>
   
                        
                        <!-- Include other hidden input fields for product details -->
                        <input type="hidden" class="pid" value="<?= $row['id'] ?>" name="id">
                        <input type="hidden" class="pname" value="<?= $row['product_name'] ?>" name="product_name">
                        <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>" name="product_price">
                        <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>" name="product_image">
                        <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>" name="product_code">
                        <button type="submit" class="btn btn-info btn-block addItemBtn" name="add_to_cart">
                            <i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart
                        </button>
                    </form>
                </div>
                <?php endwhile; ?>
                </div>
            </div>
        </section>
    </main>


    <footer>
        <p>
            <a href="disclaimer.html">Disclaimer</a> |
            |
            <a href="policy.html">Delivery, Return Exchange Policy</a>
            <a href="contact.html">Contact</a> |
            <a href="delivery.html">Delivery Information</a>
        </p>
        <p>
           The products available on this website are replicas inspired by various brands. They are not original branded products. Our designs are distinct and unique, offering an alternative style. We are committed to transparency in our offerings.
        </p>
    </footer>
</body>
<script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
});
</script>

</body>
</html>
