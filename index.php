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
        <!-- //aside bar -->
        <?php
          include './components/aside.php';
        ?>
        <div class="p-5 bg-[whitesmoke] col-span-7 min-h-[100vh]">
          

            <!-- ///search bar -->
            <div class="flex justify-between items-center my-3">
                <p class="font-bold text-[#555]">Dashboard</p>
                <div class="flex items-center">
                    <input type="text" name="" class="bg-purple-100 py-1 px-3 rounded-[5px] outline-none" id="" placeholder="Search">
                    <button class="bg-purple-400 p-2 rounded-[5px] text-white"><i class="bi bi-search"></i></button>
                </div>
            </div>

            <!-- ///details -->
            <div class="grid gap-4 grid-cols-3 my-6">
                <div class="relative bg-white p-3 rounded-[5px] flex items-center justify-between shadow-sm border-1 border-gray-300">
                    <i class="bi bi-three-dots absolute right-2 top-1 text-gray-300"></i>
                    <div class="grid gap-2">
                      
                        <p class="text-sm text-gray-400">Total Applications</p>
                        <p class="font-bold text-[#444]">6534</p>
                        <div class="text-[11px] flex items-center gap-1  text-purple-600">
                            <div class=" bg-purple-300 rounded-full p-[2px]">
                                <i class="bi bi-arrow-up-right "></i>
                            </div>
                            <small><span class="font-bold">+14</span>% lnc</small>
                        </div>
                    </div>
                    <canvas id="" class="myDoughnutChart max-h-[60px] max-w-[60px]"></canvas>
                </div>
                <div class="relative bg-white p-3 rounded-[5px] flex items-center justify-between shadow-sm border-1 border-gray-300">
                    <i class="bi bi-three-dots absolute right-2 top-1 text-gray-300"></i>
                    <div class="grid gap-2">
                        <p class="text-sm text-gray-400">Total Applications</p>
                        <p class="font-bold text-[#444]">6534</p>
                        <div class="text-[11px] flex items-center gap-1  text-purple-600">
                            <div class=" bg-purple-300 rounded-full p-[2px]">
                                <i class="bi bi-arrow-up-right "></i>
                            </div>
                            <small><span class="font-bold">+14</span>% lnc</small>
                        </div>
                    </div>
                    <canvas id="" class="myDoughnutChartt max-h-[60px] max-w-[60px]"></canvas>
                </div>
                <div class="relative bg-white p-3 rounded-[5px] flex items-center justify-between shadow-sm border-1 border-gray-300">
                    <i class="bi bi-three-dots absolute right-2 top-1 text-gray-300"></i>
                    <div class="grid gap-2">
                        <p class="text-sm text-gray-400">Total Applications</p>
                        <p class="font-bold text-[#444]">6534</p>
                        <div class="text-[11px] flex items-center gap-1  text-purple-600">
                            <div class=" bg-purple-300 rounded-full p-[2px]">
                                <i class="bi bi-arrow-up-right "></i>
                            </div>
                            <small><span class="font-bold">+14</span>% lnc</small>
                        </div>
                    </div>
                    <canvas id="" class="myDoughnutCharttt max-h-[60px] max-w-[60px]"></canvas>
                </div>
              </div>

            <!-- ///charts 1 -->
             <div class="grid grid-cols-12 gap-4">
                <div class="p-5 col-span-8 min-h-[20vh] relative bg-white rounded-[5px] justify-between border-1 border-gray-200">
                  <?php
                    include './components/charts/bar.php';
                  ?>
                </div>
                <div class="p-5  col-span-4 min-h-[20vh] relative bg-white rounded-[5px] justify-between border-1 border-gray-200">
                  <div class="flex items-center justify-between">
                    <p class="font-bold">Acquisitions</p>
                    <p class="text-sm">Month</p>
                  </div>
                    
                    
                </div>

             </div>


            <!-- ///charts 2 -->
             <div></div>

        </div>
        <div class="px-4 pb-4 col-span-3 min-h-[100vh] max-h-[100vh] overflow-y-scroll">
          <?php
            include './components/right_aside.php';
          ?>
        </div>
    </div>

      <script>
          const ctx1 = document.querySelector('.myDoughnutChart').getContext('2d');
          const ctx2 = document.querySelector('.myDoughnutChartt').getContext('2d');
          const ctx3 = document.querySelector('.myDoughnutCharttt').getContext('2d');
          const myDoughnutChart = new Chart(ctx1, {
            type: 'doughnut',
            data: {
              // labels: ['Red', 'Blue', 'Yellow'],
              datasets: [{
                label: 'My Dataset',
                data: [300, 50, 100],
                backgroundColor: ['purple', 'lightblue', 'green']
              }]
            },
            options: {
              responsive: true,
              plugins: {
                legend: {
                  position: 'top',
                },
                title: {
                  // display: true,
                  text: 'Sample Doughnut Chart'
                }
              }
            }
          });
          const myDoughnutChart2 = new Chart(ctx2, {
            type: 'doughnut',
            data: {
              // labels: ['Red', 'Blue', 'Yellow'],
              datasets: [{
                label: 'My Dataset',
                data: [300, 50, 100],
                backgroundColor: ['purple', 'lightblue', 'green']
              }]
            },
            options: {
              responsive: true,
              plugins: {
                legend: {
                  position: 'top',
                },
                title: {
                  // display: true,
                  text: 'Sample Doughnut Chart'
                }
              }
            }
          });

          const myDoughnutChart3 = new Chart(ctx3, {
            type: 'doughnut',
            data: {
              // labels: ['Red', 'Blue', 'Yellow'],
              datasets: [{
                label: 'My Dataset',
                data: [300, 50, 100],
                backgroundColor: ['purple', 'lightblue', 'green']
              }]
            },
            options: {
              responsive: true,
              plugins: {
                legend: {
                  position: 'top',
                },
                title: {
                  // display: true,
                  text: 'Sample Doughnut Chart'
                }
              }
            }
          });
        </script>

</body>
</html>