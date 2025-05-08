<?php
$current_page = basename($_SERVER['PHP_SELF']);
// echo $current_page;

$age = 12;
// echo $age >= 18 ? "Above age" : "Under age";
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="./tailwind.js"></script>
  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="./charts.js"></script>
</head>

<body>
  <div class="grid grid-cols-12">
    <?php
    include './components/aside.php';
    ?>
    <div class="p-5 bg-[whitesmoke] col-span-7 min-h-[100vh]">


      <!-- ///Job contents -->
      <?php
      include './pages/jobs/jobs.php';
      ?>
    </div>

    <!-- ///details -->

    <div class="p-4  col-span-3 min-h-[100vh]">
      <?php
      include './components/right_aside.php';
      ?>
    </div>
  </div>


</body>

</html>