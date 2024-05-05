<?php
include ("db.php");

if (isset($_POST['name'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];

  $sql = "INSERT INTO `customer`(`name`, `email`, `contact`)
  VALUES ('$name','$email','$contact')";
  if (!$db_conn->query($sql)) {
    echo $db_conn->error;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="https://www.verse.in/img/logox600.jpg">
    <title> VerSe </title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link href="app.css" rel="stylesheet" />
  </head>
  <body>
    <div class="spinner-wrapper">
      <span class="loader"></span>
    </div>
   <?php include ('./navbar.php') ?>


  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <?php
      $query = "select  * from main where type='main'  order by 'id' desc ";
      $result = $db_conn->query($query);
      if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
                  <div class="carousel-item active">
                  <img src="<?php echo $row['image']; ?>" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $row['name']; ?></h5>
                    <p><?php echo $row['description']; ?></p>
                  </div>
                </div>
                  <?php
        }
      }
    ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
      <a id="nature">
      <section class="my-4">
        <div class="py-4">
          <h2  class="text-center">Nature</h2>
        </div>
        <div class="container-fluid">
          <div class="row">
          <?php
          $query = "select  * from main where type='nature' order by 'id' desc ";
          $result = $db_conn->query($query);
          if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
               <div class="col-md-4 col-lg-4 col-12" >
                        <img src="<?php echo $row['image']; ?>" alt="Nature"/>
                        <h5 class="text-center"><?php echo $row['name']; ?></h5>
                    </div>
                <?php
            }
          }

          ?>
        </div>
      </section>
      </a>
      <a id="contact">
      <section class="my-4 mt-4 container-fluid mb-2">
        <div class="py-4">
          <h2 class="text-center">Contact Us</h2>
        </div>
        <div class=" w-50 m-auto mb-5">
          <form method="POST" action="">
            <div class="form-group">
              <label>Name:</label>
              <input type="text" name="name"class="form-control"/>
            </div>
            <div class="form-group">
              <label>Email:</label>
              <input type="email" name="email"class="form-control"/>
            </div>
            <div class="form-group">
              <label>Number:</label>
              <input type="text" name="contact"class="form-control isNumber"/>
            </div>
            <button typ="submit" class="btn btn-success mt-2 float-end">Submit</button>
          </form>
        </div>

      </section>
      </a>
      <a id="about">
        <div class="py-4">
          <h2 class="text-center">About</h2>
        </div>
      </a>

    <section class="my-4 mt-4 grid">
      <div class=" offset-lg-1">
        <h3 class="text-center">VerSe Innovation</h3>
        <p class="text-center"><b>VerSe was founded in the year 2007, as a pioneering expedition in the consumer-facing internet business.

The organisation from its inception was heavily indented towards the leading edge of technological development. It sought to bridge the urban-rural digital divide in the country.

With a substantial footprint in the value-added service ecosystem, VerSe broke new ground in the content and entertainment domain.

This foray was augmented in large part owing to the company’s heavy investment in Artificial Intelligence and Machine Learning.

The efforts resulted in a proprietary technology that powers a platform occupied by 300 million+ users to consume content in their local language.

In continuation with its ability to gauge the pulse of the nation, VerSe engaged its technological tool kit and the brilliant minds that drive this technology to launch India’s leading short video app - Josh, an app that has crossed over 100 million downloads.

Today, VerSe Innovation is a content technology platform company and India’s first tech unicorn focused on local languages.</b></p>
      </div>
      <div class=" offset-lg-2 mt-5">
          <div class="mb-2">
              <span><i class="ti-home"></i></span>
              <div class="media-body">
                  <h3>VerSe Innovation,</h3>
                  <p>11th Floor, Wing E, Helios Business Park Outer Ring Road, Kadubeesanahalli, Bengaluru Karnataka 56013 IN</p>
              </div>
          </div>
          <div>
              <span><i class="ti-tablet"></i></span>
              <div class="media-body">
                  <h3>+1 253 565 2365</h3>
                  <p>Mon to Fri 9am to 6pm</p>
              </div>
          </div>
          <div>
              <span ><i class="ti-email"></i></span>
              <div class="media-body">
                  <h3>contact@verse.in</h3>
                  <p>Send us your query anytime!</p>
              </div>
          </div>
      </div>
    </section>

    <?php include ('./footer.php') ?>
    <!-- Bootstrap JS Bundle -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Script -->
    <script src="./app.js"></script>
  </body>
</html>
