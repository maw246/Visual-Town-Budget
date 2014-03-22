<!DOCTYPE HTML>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>Arlington Visual Budget</title>
  <meta name="description" content="An interactive tool to learn more about Arlington County, VA." />

 
  <?php
    $dataSections = array('revenues', 'expenses'); //, 'funds');
    require_once './includes/imports.php';
  ?>

<script>
$(document).ready(initialize);
</script>

</head>

<body>

  <?php
    //require_once './includes/home.php';
    require_once './includes/navbar.php';
    require_once './includes/container.php';
    require_once "./includes/footer.php";
    require_once './includes/templates.php';
    require_once "./includes/datafiles.php";
  ?>

<script>
	//Google Analytics Code Goes Here
	
</script>

</body>

</html>
