<div class="relative py-5 pl-5 col-span-2 min-h-[100vh]">
    <!-- //logo -->
    <div class="pl-10 flex items-center gap-3 mt-3">
        <img src="./assets/icons/coding.png" alt="" class="w-[50px]" srcset="">
        <p class="font-bold text-[#333]">Applify<span class="text-blue-500 font-bold">.</span></p>
    </div>

    <!-- //links -->
    <div class="my-10 grid gap-5">
        <a href="index.php">
            <div class="relative  flex items-center gap-5 pl-10 <?php echo $current_page == 'index.php' ? "text-blue-500" : "" ?>">
                <i class="bi bi-speedometer"></i>
                <p>Dashboard</p>
                <span class="h-[30px] w-[4px] <?php echo $current_page == 'index.php' ? "bg-blue-500" : "" ?> rounded-l-[10px] absolute right-0"></span>
            </div>
        </a>
        <a href="jobs.php">
            <div class="relative flex items-center gap-5 pl-10 <?php echo $current_page == 'jobs.php' ? "text-blue-500" : "" ?>">
                <i class="bi bi-briefcase"></i>
                <p>Jobs</p>
                <span class="h-[30px] w-[4px] <?php echo $current_page == 'jobs.php' ? "bg-blue-500" : "" ?> rounded-l-[10px] absolute right-0"></span>
         </div>
        </a>
        <a href="schedule.php">
            <div class="relative flex items-center gap-5 pl-10 <?php echo $current_page == 'schedule.php' ? "text-blue-500" : "" ?>">
                <i class="bi bi-calendar-minus"></i>
                <p>Schedule</p>
                <span class="h-[30px] w-[4px] <?php echo $current_page == 'schedule.php' ? "bg-blue-500" : "" ?> rounded-l-[10px] absolute right-0"></span>
            </div>

        </a>

    </div>

    <div class="absolute bottom-10 p-5  bg-blue-400 w-[80%] min-h-[20vh] rounded-[10px]">
        <div class="relative pt-15">
            <img src="./assets/images/upgrade.png" class="w-[150px] absolute top-[-100px] upgrade"  alt="">
            <p class="text-white text-sm text-center font-bold">Upgrade to premium</p>
            <p class="my-3 text-gray-600 text-[10px] text-center">Go to pro to unlock new features</p>
            <div class="flex justify-center">
                <button class="py-1 px-3 text-sm bg-white text-blue-500 font-bold rounded-md">Upgrade</button>
            </div>
        </div>
    </div>
</div>