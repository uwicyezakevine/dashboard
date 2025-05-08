<div class="px-5">
    <!-- //actions -->
    <div class="flex items-center justify-end gap-7 py-5 text-xl">
        <i class="bi bi-question-circle"></i>
        <i class="bi bi-gear"></i>
        <div class="bg-black rounded-full overflow-hidden">
            <img src="./assets/images/upgrade.png" class="w-[40px]" alt="" srcset="">
        </div>
        <i class="bi bi-caret-down"></i>
    </div>

    <!-- //profile -->
    <div class="my-4">
        <div class="flex justify-center">
            <div class="border-1 border-gray-200 shadow-sm rounded-full overflow-hidden">
                <img src="./assets/images/upgrade.png" class="w-[140px]" alt="" srcset="">
            </div>
        </div>
        <div class="text-center mt-5">
            <p class="text-lg font-bold">Candace Jules</p>
            <p class="my-2 text-sm font-bold text-gray-600">Director of recruiting</p>
            <p class="text-sm text-blue-500"><i class="bi bi-geo-alt-fill"></i> New York, US</p>
        </div>
    </div>

    <div class="flex justify-between items-center my-10">
        <p class="font-bold">Job Posted</p>
        <div class="grid grid-cols-2 gap-2">
            <button class="py-1 px-3 bg-blue-500 text-white rounded-md font-bold">Add</button>
            <button class="py-1 px-3 bg-gray-100 rounded-md font-bold"><i class="bi bi-caret-right"></i></button>
        </div>
    </div>

    <div class="bg-orange-400 rounded-md p-3 relative">
        <div class="flex items-center gap-4 ">
            <div class="bg-orange-200 p-3 rounded-md text-3xl font-bold text-white">
                95
            </div>
            <div>
                <p class="font-bold text-white">Sr. Android developer</p>
                <p class="text-gray-200">Total Applications</p>
            </div>
            <div class="absolute top-2 right-2">
                <?php
                    require './components/switch.php';
                ?>
            </div>
        </div>
    </div>

</div>