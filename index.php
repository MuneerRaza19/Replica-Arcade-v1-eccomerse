<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="header-styles.css"> <!-- Add a separate CSS file for header styles -->
    <title>Cricket and Football Store</title>
  <!-- Tawk.to Script --><!--Start of Tawk.to Script-->
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
</body>
</html>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <style>

  /* Footer styles */
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

.modern-header .nav li {
    display: inline;
    margin-right: 20px;
}

.modern-header .nav a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}
a {
    text-decoration: none; /* Remove underline */
    color: inherit; /* Use the default text color */
}

/* Add more styles as needed */
</style>

</head>

<body>
   

<script src="sweetalert2.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Check if the user has already accepted the privacy policy (you can use a cookie or database check)
    var hasAcceptedPrivacyPolicy = false; // Change this to your check logic

    if (!hasAcceptedPrivacyPolicy) {
        // Show SweetAlert popup to accept terms and conditions
        Swal.fire({
            title: 'Terms and Conditions',
            html: 'Please accept our <a href="privacy_policy.html">Privacy Policy</a> and <a href="terms_and_conditions.html">Terms and Conditions</a>.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Agree',
            cancelButtonText: 'Decline',
            reverseButtons: true,
        }).then((result) => {
            if (result.isConfirmed) {
                // User has agreed, record the info as you did before (insert into the database)
                var userIP = '<?php echo $_SERVER['REMOTE_ADDR']; ?>';

                // Send userIP to your PHP script to insert into the database
                $.post('record_acceptance.php', { userIP: userIP }, function (response) {
                    // Handle the response if needed
                    console.log(response);
                });

                Swal.fire('Thank you!', 'You have accepted our terms and conditions.', 'success');
            } else {
                Swal.fire('Declined', 'You have declined our terms and conditions.', 'error');
                // You can handle this case as needed, e.g., redirect the user or display a message.
            }
        });
    }
});
</script>
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
<!-- HTML for the user acceptance prompt -->


    <main>
        <!-- Featured Products Section -->
        <section class="subsection" id="featured">
            <div class="container">
                <h2>Featured Products</h2>
                <div class="product-grid">
                    <div class="product">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/eb/2023_CWC_Logo.svg/1200px-2023_CWC_Logo.svg.png"
                            alt="Cricket Product 1">
                        <h3>Cricket World Cup 2023 Replica Fan Jerseys</h3>
                        <p class="price"><del>£65</del> From £32</p>
                        <button><a href="cwc.php">See More</a></button>
                    </div>
                    <!-- Add more featured products as needed -->
                </div>
            </div>
        </section>

        <!-- Cricket Section -->
        <section class="subsection" id="cricket">
            <div class="container">
                <h2>Cricket Replicas</h2>
                <div class="product-grid">
                    <div class="product">
                        <img src="https://theshoppies.pk/wp-content/uploads/2019/02/Islamabad-United-Shirt-2023-PSL-8-R-1536x1536.jpg"
                            alt="Cricket Product 1">
                        <h3>PSL Shirts</h3>
                        <button><a href="psl.php"> SEE MORE</a></button>
                    </div>
                    <div class="product">
                        <img src="https://theshoppies.pk/wp-content/uploads/2022/08/Pakistan-Asia-Cup-Shirt-2023.jpg"
                            alt="Cricket Product 2">
                        <h3>Pakistan Shirts</h3>
                        <button><a href="pak.php"> SEE MORE</a></button>
                    </div>
                    <!-- Add more cricket products as needed -->
                </div>
            </div>
        </section>
    
    
        <section class="subsection" id="football">
            <div class="container">
                <h2>Football Replicas</h2>
                <div class="product-grid">
                    <div class="product">
                        <img src="https://theshoppies.pk/wp-content/uploads/2023/07/AC-Milan-600x720.jpg" alt="Football Product 1">
                        <h3>Football</h3>
                        <button><a href="fb.php"> SEE MORE</a></button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>
            <a href="disclaimer.html">Disclaimer</a> |
            <a href="contact.html">Contact</a> |
            <a href="delivery.html">Delivery Information</a>
            |
            <a href="policy.html">Delivery, Return Exchange Policy</a>
        </p>
        <p>
           The products available on this website are replicas inspired by various brands. They are not original branded products. Our designs are distinct and unique, offering an alternative style. We are committed to transparency in our offerings.
        </p>
    </footer>
</body>



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

</script>
</html>
