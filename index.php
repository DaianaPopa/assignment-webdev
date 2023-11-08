<?php
require_once("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cantor College :: Home</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link
      rel="stylesheet"
      href="css/desktop.css"
      media="only screen and (min-width : 720px)"
    />
  </head>
  <body>
<?php
include("includes/header.php");
?>
    <div class="mainContainer">
		<main>
      <div class="banner">
        <h2>Where Knowledge comes to life</h2>
        <div> <img src="website-images/cantor-gallery.jpg" alt="Cantor" style= "width:1000px; height:500px;"></div>
      <section class="homePage">
      <h2>Course search</h2>
</div>
    <section class="twoColumn">
      <div>
        <div class="searchForm">
          <form>
            <div>
              <label for="q">Search:</label>
              <input type="text" name="q" />
            </div>
            <div>
              <input type="submit" value="Find a course" />
            </div>
          </form>
      </div>
</div>
      <div class="sideBar">
      <h3><a href= "staffInfo.php">Staff Info</a></h3>
      <h3><a href= "academicInfo.php">Academic Info</a></h3>
      <div> <img src="website-images/street.jpg" alt="Street" style= "width:300px; height:200px;"></div>
      </div>
      </section>
		</main>
    </div>

<?php
include("includes/footer.php");
?>

    <script src="js/main.js"></script>
  </body>
</html>