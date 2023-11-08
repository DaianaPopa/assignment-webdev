<?php
require_once("includes/config.php");
$queryCourses = "SELECT * from courses";
$resultCourse = $mysqli->query($queryCourses);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Courses</title>
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
      <h2>Our Courses 2022/23</h2>
    </div>
    <section class="twoColumn">
    <div>
        <?php
        while($obj= $resultCourse->fetch_object()){
        echo "<div class=\"Course Title\">";
        echo "<div>";
        echo "<h2>{$obj->CourseTitle}</h2>";
        echo"<p>{$obj->CourseType}</p>";
        echo "</div>";
        echo "<div>";
        echo "<p>{$obj->CourseSummary}</p>";
        echo "</div>";
        echo "</div>";
        }
        ?>
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