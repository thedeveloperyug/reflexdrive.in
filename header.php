<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/output.css" rel="stylesheet">
  <script src="script.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link href="css/style2.css" rel="stylesheet">
</head>

<body>

  <!-- This example requires Tailwind CSS v2.0+ -->
  <section>
    <div class="relative bg-white overflow-hidden">
      <div class="max-w-full  mx-auto">
        <div class="relative z-20 sm:pb-16 md:pb-20  lg:w-full lg:pb-8 xl:pb-6">
          <div class="">
            <div class="relative pt-8 px-4 sm:px-6">
              <nav class="relative flex items-center justify-items-between  sm:h-10 lg:justify-start" aria-label="Global">
                <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                  <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="#">
                      <span class="sr-only">Logo</span>
                      <img alt="Workflow" class="h-14 lg:h-16 w-auto sm:h-10" src="images/rl_logo.png">
                    </a>
                    <div class="-mr-2 flex items-center md:hidden">
                      <button type="button" onclick='myfun();' class="mnu bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
                <!---------------------- navigation buttons--------------- -->

                <div class="hidden md:block text-lg flex md:ml-10 md:pr-4 md:space-x-4 ">

                  <a href="#" class="font-medium text-gray-600 hover:text-orange-600">Home</a>

                  <div class=" group inline-block ">
                    <button class="bg-transparent text-lg font-semibold py-2 px-4  text-gray-600 hover:text-orange-600">
                      <span class="mr-1">Products</span>
                      <!-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg> -->
                    </button>
                    <ul class="fixed left-40 z-20 hidden text-gray-800 w-96 shadow-lg group-hover:block">
                      <li class="">
                        <a class="rounded-t bg-gray-200 hover:text-white hover:bg-blue-500 hover:font-semibold  py-2 px-4 block whitespace-no-wrap " href="#drone_esc">Drone Esc</a>
                      </li>
                      <li class="">
                        <a class="bg-gray-200 hover:text-white hover:bg-blue-500 hover:font-semibold  py-2 px-4 block whitespace-no-wrap" href="#rad">Robotic Actuator Driver Control Card</a>
                      </li>
                      <li class="">
                        <a class="rounded-b bg-gray-200 hover:text-white hover:bg-blue-500 hover:font-semibold  py-2 px-4 block whitespace-no-wrap" href="#dmc">Dual Motor Controller</a>
                      </li>
                      <li class="">
                        <a class="rounded-b bg-gray-200 hover:text-white hover:bg-blue-500 hover:font-semibold  py-2 px-4 block whitespace-no-wrap" href="#som">SOM</a>
                      </li>
                      <li class="">
                        <a class="rounded-b bg-gray-200 hover:text-white hover:bg-blue-500 hover:font-semibold  py-2 px-4 block whitespace-no-wrap" href="#somb">Breakouts</a>
                      </li>
                      <li class="">
                        <a class="rounded-b bg-gray-200 hover:text-white hover:bg-blue-500 hover:font-semibold  py-2 px-4 block whitespace-no-wrap" href="#type79">BLDC MOTOR CONTROLLER - Type79</a>
                      </li>
                      <li class="">
                        <a class="rounded-b bg-gray-200 hover:text-white hover:bg-blue-500 hover:font-semibold  py-2 px-4 block whitespace-no-wrap" href="#type77">BLDC MOTOR CONTROLLER - Type77</a>
                      </li>
                    </ul>
                  </div>

                  <!-- <a href="#" class="font-medium text-gray-600 hover:text-orange-600">Applications</a> -->
                  <a href="#aboutus" class="font-medium text-gray-600 hover:text-orange-600">About Us</a>

                  <a href="#" class="font-medium hover:bg-blue-500 rounded-full p-4 lg:text-blue-700    hover:text-white">Online Store</a>
                </div>
              </nav>
            </div>


            <div class="mnulist fixed -top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" id='navbarNav'>
              <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                  <div>
                    <img class="h-8 w-auto" src="images/rl_logo.png" alt="">
                  </div>
                  <div class="-mr-2">
                    <button type="button" onclick='myfun()' class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                      <span class="sr-only">Close main menu</span>
                      <!-- Heroicon name: outline/x -->
                      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="px-2 pt-2 pb-3 space-y-1">

                  <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Home</a>

                  <div class=" group inline-block ">
                    <button class="bg-transparent px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                      <span class="mr-1">Products</span>
                      <!-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg> -->
                    </button>
                    <ul class="fixed z-20 hidden text-gray-800 max-w-lg shadow-lg group-hover:block">
                      <li class="">
                        <a class="rounded-t bg-gray-200 hover:text-white hover:bg-blue-500 hover:font-semibold  py-2 px-4 block whitespace-no-wrap " href="#drone_esc1">Drone Esc</a>
                      </li>
                      <li class="">
                        <a class="bg-gray-200 hover:text-white hover:bg-blue-500 hover:font-semibold  py-2 px-4 block whitespace-no-wrap" href="#rad1">Robotic Actuator Driver Control Card</a>
                      </li>
                      <li class="">
                        <a class="rounded-b bg-gray-200 hover:text-white hover:bg-blue-500 hover:font-semibold  py-2 px-4 block whitespace-no-wrap" href="#dmc1">Dual Motor Controller</a>
                      </li>
                      <li class="">
                        <a class="rounded-b bg-gray-200 hover:text-white hover:bg-blue-500 hover:font-semibold  py-2 px-4 block whitespace-no-wrap" href="#som1">SOM</a>
                      </li>
                      <li class="">
                        <a class="rounded-b bg-gray-200 hover:text-white hover:bg-blue-500 hover:font-semibold  py-2 px-4 block whitespace-no-wrap" href="#somb1">Breakouts</a>
                      </li>
                      <li class="">
                        <a class="rounded-b bg-gray-200 hover:text-white hover:bg-blue-500 hover:font-semibold  py-2 px-4 block whitespace-no-wrap" href="#type791">BLDC MOTOR CONTROLLER - Type79</a>
                      </li>
                      <li class="">
                        <a class="rounded-b bg-gray-200 hover:text-white hover:bg-blue-500 hover:font-semibold  py-2 px-4 block whitespace-no-wrap" href="#type771">BLDC MOTOR CONTROLLER - Type77</a>
                      </li>
                    </ul>
                  </div>
                  <!-- <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Applications</a> -->

                  <a href="#aboutus" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">About Us</a>
                </div>
                <div class="px-2 pt-2 pb-3"><a href="#" class="font-medium bg-blue-100 rounded-full p-2  text-gray-600 hover:text-orange-600">Online store</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>