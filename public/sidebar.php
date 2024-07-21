<div class="grid grid-cols-4">
<div class="">

  <div class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900">
        <div class="text-gray-100 text-xl">
            <div class="p-2.5 mt-1 flex items-center">
                <i class="bi bi-app-indicator px-2 py-1 bg-blue-600 rounded-md"></i>
                <h1 class="text-[15px] ml-3 text-xl text-gray-200 font-bold">Admin Dashboard</h1>
            </div>
                <hr class="my-2 text-gray-600">
        </div>

        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600 text-white">
          <a href="index.php" class="no-underline">
          <i class="bi bi-house-door-fill"></i>
          <span class="text-[15px] ml-4 text-gray-200">Home</span>
          </a>
        </div>
        

        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600 text-white">
         <a href="managedata.php" class="no-underline">
            <i class="bi bi-database-fill-add"></i>
            <span class="text-[15px] ml-4 text-gray-200">Manage data</span>
         </a>
        </div>

        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600 text-white">
            <i class="bi bi-clipboard-data-fill"></i>
          <div class="flex justify-between w-full items-center" onclick="dropDown()">
            <span class="text-[15px] ml-4 text-gray-200">View Analysis Result</span>
            <span class="text-sm rotate-180" id="arrow">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>

        <div class=" leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto text-gray-200" id="submenu">
          <a href="w_occur.php"><h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Water Occurance</h1></a>
          <a href="pre.php"><h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Precipitation</h1></a>
          <a href="w_change.php"><h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Water Changes</h1></a>
        </div>

        
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600 text-white">
          <a href="view_user.php" class="no-underline">
            <i class="bi bi-people-fill"></i>
            <span class="text-[15px] ml-4 text-gray-200">View Users</span>
          </a>
        </div>

        <hr class="my-2 text-gray-600">

        <div class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600 text-white content-end">
          <i class="bi bi-box-arrow-in-right"></i>
          <span class="text-[15px] ml-4 text-gray-200">Logout</span>
        </div>
        
        
    </div>

</div>
  


    <script>
         function dropDown() {
                document.querySelector('#submenu').classList.toggle('hidden')
                document.querySelector('#arrow').classList.toggle('rotate-0')
            }
        dropDown()
    </script>