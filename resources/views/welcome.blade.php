<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body id="xBody" class="overflow-hidden">
    <div id="xWrapper" x-data="{sidebarNav: false, sidebarNavMobile: false, headerFooter : true, showSidebar: true, showSubnav : -1, hideSubnavItems : -1}" class="h-screen flex flex-col md:flex-row w-full overflow-hidden bg-light-blue font-poppins">
        <!-- Sidebars -->
        <div id="xSidebarsWrapper" class="absolute w-auto top-0 left-0 lg:top-auto h-screen lg:h-auto lg:relative flex flex-shrink-0">
            @include('sidebar.sidebar')
            <div id="xRightSidebar" x-show="sidebarNavMobile" @click.away="sidebarNavMobile = false" :class="{'fixed z-40 top-0 right-0 h-full' : sidebarNavMobile, 'w-64' : showSidebar, 'w-14' : !showSidebar}" class="flex lg:hidden flex-col w-64 bg-primary">
                <div class="sidebarTwoMobile flex flex-col flex-grow bg-white overflow-hidden">
                    <div class="flex header px-4 py-3.5">
                        <a id="xrightSidebarLogo" href="#" class="flex-shrink-0 flex items-center space-x-2">
                            <svg class="h-8 text-secondary fill-current" fill="none" viewBox="0 0 35 32" xmlns="http://www.w3.org/2000/svg">
                                <path fill="" d="M15.258 26.865a4.043 4.043 0 01-1.133 2.917A4.006 4.006 0 0111.253 31a3.992 3.992 0 01-2.872-1.218 4.028 4.028 0 01-1.133-2.917c.009-.698.2-1.382.557-1.981.356-.6.863-1.094 1.47-1.433-.024.109.09-.055 0 0l1.86-1.652a8.495 8.495 0 002.304-5.793c0-2.926-1.711-5.901-4.17-7.457.094.055-.036-.094 0 0A3.952 3.952 0 017.8 7.116a3.975 3.975 0 01-.557-1.98 4.042 4.042 0 011.133-2.918A4.006 4.006 0 0111.247 1a3.99 3.99 0 012.872 1.218 4.025 4.025 0 011.133 2.917 8.521 8.521 0 002.347 5.832l.817.8c.326.285.668.551 1.024.798.621.33 1.142.826 1.504 1.431a3.902 3.902 0 01-1.504 5.442c.033-.067-.063.036 0 0a8.968 8.968 0 00-3.024 3.183 9.016 9.016 0 00-1.158 4.244zM19.741 5.123c0 .796.235 1.575.676 2.237a4.01 4.01 0 001.798 1.482 3.99 3.99 0 004.366-.873 4.042 4.042 0 00.869-4.386 4.02 4.02 0 00-1.476-1.806 3.994 3.994 0 00-5.058.501 4.038 4.038 0 00-1.175 2.845zM23.748 22.84c-.792 0-1.567.236-2.226.678a4.021 4.021 0 00-1.476 1.806 4.042 4.042 0 00.869 4.387 3.99 3.99 0 004.366.873A4.01 4.01 0 0027.08 29.1a4.039 4.039 0 00-.5-5.082 4 4 0 00-2.832-1.18zM34 15.994c0-.796-.235-1.574-.675-2.236a4.01 4.01 0 00-1.798-1.483 3.99 3.99 0 00-4.367.873 4.042 4.042 0 00-.869 4.387 4.02 4.02 0 001.476 1.806 3.993 3.993 0 002.226.678 4.003 4.003 0 002.832-1.18A4.04 4.04 0 0034 15.993z"/>
                                <path fill="" d="M5.007 11.969c-.793 0-1.567.236-2.226.678a4.021 4.021 0 00-1.476 1.807 4.042 4.042 0 00.869 4.386 4.001 4.001 0 004.366.873 4.011 4.011 0 001.798-1.483 4.038 4.038 0 00-.5-5.08 4.004 4.004 0 00-2.831-1.181z"/>
                            </svg>
                            <span x-show="showSidebar" class="text-xl  text-secondary font-bold">LoremIpsum</span>
                        </a>
                    </div>
                    <div id="xSidebarWrapper2" class="sidebar-custom-scroll flex-grow flex flex-col" :class="{'overflow-hidden' : !showSidebar, 'overflow-y-scroll' : showSidebar}">
                        <ul id="xSidebar2" x-data="{showMobileSubnav : -1}" class="sidebar-nav flex-1 bg-priamry space-y-1">
                            <li class="relative flex flex-col">
                                <a href="#" :class="{'active' : showMobileSubnav == -1}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                    <span>                     
                                        Home
                                    </span>
                                </a>
                            </li>
                            <li class="relative flex flex-col">
                                <a href="#" @click.prevent="showMobileSubnav == 1 ? showMobileSubnav = -1 : showMobileSubnav = 1" :class="{'active' : showMobileSubnav == 1}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                    <span>                     
                                        File
                                    </span>
                                    <svg :class="{'rotate-90' : showMobileSubnav == 1, 'rotate-0' : showMobileSubnav != 1}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <ul x-show="showMobileSubnav == 1" class="sidebar-subnav-2 flex flex-col">
                                    <li x-data="{showSubnav : false}" class="relative flex flex-col">
                                        <a href="#" @click.prevent="showSubnav = !showSubnav" :class="{'active' : showSubnav}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                            <span class="flex space-x-4 items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"></path>
                                                </svg>                      
                                                <span>Feed</span>
                                            </span>
                                            <svg :class="{'rotate-90' : showSubnav, 'rotate-0' : !showSubnav}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <ul x-show="showSubnav" class="sidebar-subnav-3 flex flex-col">
                                            <li x-data="{showSubnav : false}" class="relative flex flex-col">
                                                <a href="#" @click.prevent="showSubnav = !showSubnav" :class="{'active' : showSubnav}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 1</span>
                                                    </span>
                                                    <svg :class="{'rotate-90' : showSubnav, 'rotate-0' : !showSubnav}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                                <ul x-show="showSubnav" class="sidebar-subnav-4 flex flex-col">
                                                    <li class="relative flex flex-col">
                                                        <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                            <span class="flex space-x-4 items-center">
                                                                <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="2" cy="2" r="2" fill=""/>
                                                                </svg>
                                                                <span>Submenu 4 Item 1</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="relative flex flex-col">
                                                        <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                            <span class="flex space-x-4 items-center">
                                                                <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="2" cy="2" r="2" fill=""/>
                                                                </svg>
                                                                <span>Submenu 4 Item 2</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="relative flex flex-col">
                                                        <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                            <span class="flex space-x-4 items-center">
                                                                <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="2" cy="2" r="2" fill=""/>
                                                                </svg>
                                                                <span>Submenu 4 Item 3</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 2 Item 3</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li x-data="{showSubnav : false}" class="relative flex flex-col">
                                        <a href="#" @click.prevent="showSubnav = !showSubnav" :class="{'active' : showSubnav}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                            <span class="flex space-x-4 items-center">
                                                <svg class="fill-current" width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9258 6C10.2689 6 8.92578 4.65685 8.92578 3C8.92578 1.34315 10.2689 0 11.9258 0C13.5826 0 14.9258 1.34315 14.9258 3C14.9258 4.65685 13.5826 6 11.9258 6ZM11.9258 4C12.4781 4 12.9258 3.55228 12.9258 3C12.9258 2.44772 12.4781 2 11.9258 2C11.3735 2 10.9258 2.44772 10.9258 3C10.9258 3.55228 11.3735 4 11.9258 4ZM10.9258 6H12.9258C14.5826 6 15.9258 7.34315 15.9258 9V10C15.9258 11.6569 14.5826 13 12.9258 13H10.9258C9.26893 13 7.92578 11.6569 7.92578 10V9C7.92578 7.34315 9.26893 6 10.9258 6ZM10.9258 8C10.3735 8 9.92578 8.44771 9.92578 9V10C9.92578 10.5523 10.3735 11 10.9258 11H12.9258C13.4781 11 13.9258 10.5523 13.9258 10V9C13.9258 8.44771 13.4781 8 12.9258 8H10.9258ZM18.9258 15C17.2689 15 15.9258 13.6569 15.9258 12C15.9258 10.3431 17.2689 9 18.9258 9C20.5826 9 21.9258 10.3431 21.9258 12C21.9258 13.6569 20.5826 15 18.9258 15ZM18.9258 13C19.4781 13 19.9258 12.5523 19.9258 12C19.9258 11.4477 19.4781 11 18.9258 11C18.3735 11 17.9258 11.4477 17.9258 12C17.9258 12.5523 18.3735 13 18.9258 13ZM17.9258 15H19.9258C21.5826 15 22.9258 16.3431 22.9258 18V19C22.9258 20.6569 21.5826 22 19.9258 22H17.9258C16.2689 22 14.9258 20.6569 14.9258 19V18C14.9258 16.3431 16.2689 15 17.9258 15ZM17.9258 17C17.3735 17 16.9258 17.4477 16.9258 18V19C16.9258 19.5523 17.3735 20 17.9258 20H19.9258C20.4781 20 20.9258 19.5523 20.9258 19V18C20.9258 17.4477 20.4781 17 19.9258 17H17.9258ZM4.92578 15C3.26893 15 1.92578 13.6569 1.92578 12C1.92578 10.3431 3.26893 9 4.92578 9C6.58264 9 7.92578 10.3431 7.92578 12C7.92578 13.6569 6.58264 15 4.92578 15ZM4.92578 13C5.47807 13 5.92578 12.5523 5.92578 12C5.92578 11.4477 5.47807 11 4.92578 11C4.3735 11 3.92578 11.4477 3.92578 12C3.92578 12.5523 4.3735 13 4.92578 13ZM3.92578 15H5.92578C7.58264 15 8.92578 16.3431 8.92578 18V19C8.92578 20.6569 7.58264 22 5.92578 22H3.92578C2.26893 22 0.925781 20.6569 0.925781 19V18C0.925781 16.3431 2.26893 15 3.92578 15ZM3.92578 17C3.3735 17 2.92578 17.4477 2.92578 18V19C2.92578 19.5523 3.3735 20 3.92578 20H5.92578C6.47807 20 6.92578 19.5523 6.92578 19V18C6.92578 17.4477 6.47807 17 5.92578 17H3.92578Z" />
                                                </svg>                       
                                                <span>Friends</span>
                                            </span>
                                            <svg :class="{'rotate-90' : showSubnav, 'rotate-0' : !showSubnav}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <ul x-show="showSubnav" class="sidebar-subnav-3 flex flex-col">
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 1</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 2 Item 3</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li x-data="{showSubnav : false}" class="relative flex flex-col">
                                        <a href="#" @click.prevent="showSubnav = !showSubnav" :class="{'active' : showSubnav}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                            <span class="flex space-x-4 items-center">
                                                <svg class="fill-current" width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9258 2V1C16.9258 0.447715 17.3735 0 17.9258 0C18.4781 0 18.9258 0.447715 18.9258 1V2H19.9258C21.5826 2 22.9258 3.34315 22.9258 5V8V10V15C22.9258 18.3137 20.2395 21 16.9258 21H6.92578C3.61207 21 0.925781 18.3137 0.925781 15V10V8V5C0.925781 3.34315 2.26893 2 3.92578 2H5.92578V1C5.92578 0.447715 6.3735 0 6.92578 0C7.47807 0 7.92578 0.447715 7.92578 1V2H16.9258ZM2.92578 8H20.9258V5C20.9258 4.44772 20.4781 4 19.9258 4H18.9258C18.9258 4.55228 18.4781 5 17.9258 5C17.3735 5 16.9258 4.55228 16.9258 4H7.92578C7.92578 4.55228 7.47807 5 6.92578 5C6.3735 5 5.92578 4.55228 5.92578 4H3.92578C3.3735 4 2.92578 4.44772 2.92578 5V8ZM2.92578 10V15C2.92578 17.2091 4.71664 19 6.92578 19H16.9258C19.1349 19 20.9258 17.2091 20.9258 15V10H2.92578Z"></path>
                                                </svg>                      
                                                <span>Event</span>
                                            </span>
                                            <svg :class="{'rotate-90' : showSubnav, 'rotate-0' : !showSubnav}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <ul x-show="showSubnav" class="sidebar-subnav-3 flex flex-col">
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 1</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 2 Item 3</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li x-data="{showSubnav : false}" class="relative flex flex-col">
                                        <a href="#" @click.prevent="showSubnav = !showSubnav" :class="{'active' : showSubnav}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                            <span class="flex space-x-4 items-center">
                                                <svg class="fill-current" width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.92578 0H14.4574C15.051 0 15.6139 0.263646 15.9938 0.719631L20.4622 6.08168C20.7617 6.44111 20.9258 6.89418 20.9258 7.36205V18C20.9258 20.2091 19.1349 22 16.9258 22H4.92578C2.71664 22 0.925781 20.2091 0.925781 18V4C0.925781 1.79086 2.71664 0 4.92578 0ZM18.9258 18V8H15.9258C14.8212 8 13.9258 7.10457 13.9258 6V2H4.92578C3.82121 2 2.92578 2.89543 2.92578 4V18C2.92578 19.1046 3.82121 20 4.92578 20H16.9258C18.0304 20 18.9258 19.1046 18.9258 18ZM17.7907 6L15.9258 3.76205V6H17.7907ZM6.92578 13C6.3735 13 5.92578 12.5523 5.92578 12C5.92578 11.4477 6.3735 11 6.92578 11H14.9258C15.4781 11 15.9258 11.4477 15.9258 12C15.9258 12.5523 15.4781 13 14.9258 13H6.92578ZM6.92578 17C6.3735 17 5.92578 16.5523 5.92578 16C5.92578 15.4477 6.3735 15 6.92578 15H12.9258C13.4781 15 13.9258 15.4477 13.9258 16C13.9258 16.5523 13.4781 17 12.9258 17H6.92578ZM6.92578 9C6.3735 9 5.92578 8.55229 5.92578 8C5.92578 7.44772 6.3735 7 6.92578 7H9.92578C10.4781 7 10.9258 7.44772 10.9258 8C10.9258 8.55229 10.4781 9 9.92578 9H6.92578Z"></path>
                                                </svg>                     
                                                <span>Files</span>
                                            </span>
                                            <svg :class="{'rotate-90' : showSubnav, 'rotate-0' : !showSubnav}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <ul x-show="showSubnav" class="sidebar-subnav-3 flex flex-col">
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 1</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 2 Item 3</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="relative flex flex-col">
                                <a href="#" @click.prevent="showMobileSubnav == 2 ? showMobileSubnav = -1 : showMobileSubnav = 2" :class="{'active' : showMobileSubnav == 2}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                    <span>                     
                                        Edit
                                    </span>
                                    <svg :class="{'rotate-90' : showMobileSubnav == 2, 'rotate-0' : showMobileSubnav != 2}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <ul x-show="showMobileSubnav == 2" class="sidebar-subnav-2 flex flex-col">
                                    <li x-data="{showSubnav : false}" class="relative flex flex-col">
                                        <a href="#" @click.prevent="showSubnav = !showSubnav" :class="{'active' : showSubnav}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                            <span class="flex space-x-4 items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"></path>
                                                </svg>                      
                                                <span>Feed</span>
                                            </span>
                                            <svg :class="{'rotate-90' : showSubnav, 'rotate-0' : !showSubnav}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <ul x-show="showSubnav" class="sidebar-subnav-3 flex flex-col">
                                            <li x-data="{showSubnav : false}" class="relative flex flex-col">
                                                <a href="#" @click.prevent="showSubnav = !showSubnav" :class="{'active' : showSubnav}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 1</span>
                                                    </span>
                                                    <svg :class="{'rotate-90' : showSubnav, 'rotate-0' : !showSubnav}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                                <ul x-show="showSubnav" class="sidebar-subnav-4 flex flex-col">
                                                    <li class="relative flex flex-col">
                                                        <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                            <span class="flex space-x-4 items-center">
                                                                <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="2" cy="2" r="2" fill=""/>
                                                                </svg>
                                                                <span>Submenu 4 Item 1</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="relative flex flex-col">
                                                        <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                            <span class="flex space-x-4 items-center">
                                                                <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="2" cy="2" r="2" fill=""/>
                                                                </svg>
                                                                <span>Submenu 4 Item 2</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="relative flex flex-col">
                                                        <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                            <span class="flex space-x-4 items-center">
                                                                <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="2" cy="2" r="2" fill=""/>
                                                                </svg>
                                                                <span>Submenu 4 Item 3</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 2 Item 3</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li x-data="{showSubnav : false}" class="relative flex flex-col">
                                        <a href="#" @click.prevent="showSubnav = !showSubnav" :class="{'active' : showSubnav}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                            <span class="flex space-x-4 items-center">
                                                <svg class="fill-current" width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9258 6C10.2689 6 8.92578 4.65685 8.92578 3C8.92578 1.34315 10.2689 0 11.9258 0C13.5826 0 14.9258 1.34315 14.9258 3C14.9258 4.65685 13.5826 6 11.9258 6ZM11.9258 4C12.4781 4 12.9258 3.55228 12.9258 3C12.9258 2.44772 12.4781 2 11.9258 2C11.3735 2 10.9258 2.44772 10.9258 3C10.9258 3.55228 11.3735 4 11.9258 4ZM10.9258 6H12.9258C14.5826 6 15.9258 7.34315 15.9258 9V10C15.9258 11.6569 14.5826 13 12.9258 13H10.9258C9.26893 13 7.92578 11.6569 7.92578 10V9C7.92578 7.34315 9.26893 6 10.9258 6ZM10.9258 8C10.3735 8 9.92578 8.44771 9.92578 9V10C9.92578 10.5523 10.3735 11 10.9258 11H12.9258C13.4781 11 13.9258 10.5523 13.9258 10V9C13.9258 8.44771 13.4781 8 12.9258 8H10.9258ZM18.9258 15C17.2689 15 15.9258 13.6569 15.9258 12C15.9258 10.3431 17.2689 9 18.9258 9C20.5826 9 21.9258 10.3431 21.9258 12C21.9258 13.6569 20.5826 15 18.9258 15ZM18.9258 13C19.4781 13 19.9258 12.5523 19.9258 12C19.9258 11.4477 19.4781 11 18.9258 11C18.3735 11 17.9258 11.4477 17.9258 12C17.9258 12.5523 18.3735 13 18.9258 13ZM17.9258 15H19.9258C21.5826 15 22.9258 16.3431 22.9258 18V19C22.9258 20.6569 21.5826 22 19.9258 22H17.9258C16.2689 22 14.9258 20.6569 14.9258 19V18C14.9258 16.3431 16.2689 15 17.9258 15ZM17.9258 17C17.3735 17 16.9258 17.4477 16.9258 18V19C16.9258 19.5523 17.3735 20 17.9258 20H19.9258C20.4781 20 20.9258 19.5523 20.9258 19V18C20.9258 17.4477 20.4781 17 19.9258 17H17.9258ZM4.92578 15C3.26893 15 1.92578 13.6569 1.92578 12C1.92578 10.3431 3.26893 9 4.92578 9C6.58264 9 7.92578 10.3431 7.92578 12C7.92578 13.6569 6.58264 15 4.92578 15ZM4.92578 13C5.47807 13 5.92578 12.5523 5.92578 12C5.92578 11.4477 5.47807 11 4.92578 11C4.3735 11 3.92578 11.4477 3.92578 12C3.92578 12.5523 4.3735 13 4.92578 13ZM3.92578 15H5.92578C7.58264 15 8.92578 16.3431 8.92578 18V19C8.92578 20.6569 7.58264 22 5.92578 22H3.92578C2.26893 22 0.925781 20.6569 0.925781 19V18C0.925781 16.3431 2.26893 15 3.92578 15ZM3.92578 17C3.3735 17 2.92578 17.4477 2.92578 18V19C2.92578 19.5523 3.3735 20 3.92578 20H5.92578C6.47807 20 6.92578 19.5523 6.92578 19V18C6.92578 17.4477 6.47807 17 5.92578 17H3.92578Z" />
                                                </svg>                       
                                                <span>Friends</span>
                                            </span>
                                            <svg :class="{'rotate-90' : showSubnav, 'rotate-0' : !showSubnav}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <ul x-show="showSubnav" class="sidebar-subnav-3 flex flex-col">
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 1</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 2 Item 3</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li x-data="{showSubnav : false}" class="relative flex flex-col">
                                        <a href="#" @click.prevent="showSubnav = !showSubnav" :class="{'active' : showSubnav}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                            <span class="flex space-x-4 items-center">
                                                <svg class="fill-current" width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9258 2V1C16.9258 0.447715 17.3735 0 17.9258 0C18.4781 0 18.9258 0.447715 18.9258 1V2H19.9258C21.5826 2 22.9258 3.34315 22.9258 5V8V10V15C22.9258 18.3137 20.2395 21 16.9258 21H6.92578C3.61207 21 0.925781 18.3137 0.925781 15V10V8V5C0.925781 3.34315 2.26893 2 3.92578 2H5.92578V1C5.92578 0.447715 6.3735 0 6.92578 0C7.47807 0 7.92578 0.447715 7.92578 1V2H16.9258ZM2.92578 8H20.9258V5C20.9258 4.44772 20.4781 4 19.9258 4H18.9258C18.9258 4.55228 18.4781 5 17.9258 5C17.3735 5 16.9258 4.55228 16.9258 4H7.92578C7.92578 4.55228 7.47807 5 6.92578 5C6.3735 5 5.92578 4.55228 5.92578 4H3.92578C3.3735 4 2.92578 4.44772 2.92578 5V8ZM2.92578 10V15C2.92578 17.2091 4.71664 19 6.92578 19H16.9258C19.1349 19 20.9258 17.2091 20.9258 15V10H2.92578Z"></path>
                                                </svg>                      
                                                <span>Event</span>
                                            </span>
                                            <svg :class="{'rotate-90' : showSubnav, 'rotate-0' : !showSubnav}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <ul x-show="showSubnav" class="sidebar-subnav-3 flex flex-col">
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 1</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 2 Item 3</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li x-data="{showSubnav : false}" class="relative flex flex-col">
                                        <a href="#" @click.prevent="showSubnav = !showSubnav" :class="{'active' : showSubnav}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                            <span class="flex space-x-4 items-center">
                                                <svg class="fill-current" width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.92578 0H14.4574C15.051 0 15.6139 0.263646 15.9938 0.719631L20.4622 6.08168C20.7617 6.44111 20.9258 6.89418 20.9258 7.36205V18C20.9258 20.2091 19.1349 22 16.9258 22H4.92578C2.71664 22 0.925781 20.2091 0.925781 18V4C0.925781 1.79086 2.71664 0 4.92578 0ZM18.9258 18V8H15.9258C14.8212 8 13.9258 7.10457 13.9258 6V2H4.92578C3.82121 2 2.92578 2.89543 2.92578 4V18C2.92578 19.1046 3.82121 20 4.92578 20H16.9258C18.0304 20 18.9258 19.1046 18.9258 18ZM17.7907 6L15.9258 3.76205V6H17.7907ZM6.92578 13C6.3735 13 5.92578 12.5523 5.92578 12C5.92578 11.4477 6.3735 11 6.92578 11H14.9258C15.4781 11 15.9258 11.4477 15.9258 12C15.9258 12.5523 15.4781 13 14.9258 13H6.92578ZM6.92578 17C6.3735 17 5.92578 16.5523 5.92578 16C5.92578 15.4477 6.3735 15 6.92578 15H12.9258C13.4781 15 13.9258 15.4477 13.9258 16C13.9258 16.5523 13.4781 17 12.9258 17H6.92578ZM6.92578 9C6.3735 9 5.92578 8.55229 5.92578 8C5.92578 7.44772 6.3735 7 6.92578 7H9.92578C10.4781 7 10.9258 7.44772 10.9258 8C10.9258 8.55229 10.4781 9 9.92578 9H6.92578Z"></path>
                                                </svg>                     
                                                <span>Files</span>
                                            </span>
                                            <svg :class="{'rotate-90' : showSubnav, 'rotate-0' : !showSubnav}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <ul x-show="showSubnav" class="sidebar-subnav-3 flex flex-col">
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 1</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 2 Item 3</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="relative flex flex-col">
                                <a href="#" @click.prevent="showMobileSubnav == 3 ? showMobileSubnav = -1 : showMobileSubnav = 3" :class="{'active' : showMobileSubnav == 3}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                    <span>                     
                                        View
                                    </span>
                                    <svg :class="{'rotate-90' : showMobileSubnav == 3, 'rotate-0' : showMobileSubnav != 3}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <ul x-show="showMobileSubnav == 3" class="sidebar-subnav-2 flex flex-col">
                                    <li x-data="{showSubnav : false}" class="relative flex flex-col">
                                        <a href="#" @click.prevent="showSubnav = !showSubnav" :class="{'active' : showSubnav}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                            <span class="flex space-x-4 items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"></path>
                                                </svg>                      
                                                <span>Feed</span>
                                            </span>
                                            <svg :class="{'rotate-90' : showSubnav, 'rotate-0' : !showSubnav}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <ul x-show="showSubnav" class="sidebar-subnav-3 flex flex-col">
                                            <li x-data="{showSubnav : false}" class="relative flex flex-col">
                                                <a href="#" @click.prevent="showSubnav = !showSubnav" :class="{'active' : showSubnav}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 1</span>
                                                    </span>
                                                    <svg :class="{'rotate-90' : showSubnav, 'rotate-0' : !showSubnav}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                                <ul x-show="showSubnav" class="sidebar-subnav-4 flex flex-col">
                                                    <li class="relative flex flex-col">
                                                        <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                            <span class="flex space-x-4 items-center">
                                                                <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="2" cy="2" r="2" fill=""/>
                                                                </svg>
                                                                <span>Submenu 4 Item 1</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="relative flex flex-col">
                                                        <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                            <span class="flex space-x-4 items-center">
                                                                <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="2" cy="2" r="2" fill=""/>
                                                                </svg>
                                                                <span>Submenu 4 Item 2</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="relative flex flex-col">
                                                        <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                            <span class="flex space-x-4 items-center">
                                                                <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="2" cy="2" r="2" fill=""/>
                                                                </svg>
                                                                <span>Submenu 4 Item 3</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 2 Item 3</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li x-data="{showSubnav : false}" class="relative flex flex-col">
                                        <a href="#" @click.prevent="showSubnav = !showSubnav" :class="{'active' : showSubnav}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                            <span class="flex space-x-4 items-center">
                                                <svg class="fill-current" width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9258 6C10.2689 6 8.92578 4.65685 8.92578 3C8.92578 1.34315 10.2689 0 11.9258 0C13.5826 0 14.9258 1.34315 14.9258 3C14.9258 4.65685 13.5826 6 11.9258 6ZM11.9258 4C12.4781 4 12.9258 3.55228 12.9258 3C12.9258 2.44772 12.4781 2 11.9258 2C11.3735 2 10.9258 2.44772 10.9258 3C10.9258 3.55228 11.3735 4 11.9258 4ZM10.9258 6H12.9258C14.5826 6 15.9258 7.34315 15.9258 9V10C15.9258 11.6569 14.5826 13 12.9258 13H10.9258C9.26893 13 7.92578 11.6569 7.92578 10V9C7.92578 7.34315 9.26893 6 10.9258 6ZM10.9258 8C10.3735 8 9.92578 8.44771 9.92578 9V10C9.92578 10.5523 10.3735 11 10.9258 11H12.9258C13.4781 11 13.9258 10.5523 13.9258 10V9C13.9258 8.44771 13.4781 8 12.9258 8H10.9258ZM18.9258 15C17.2689 15 15.9258 13.6569 15.9258 12C15.9258 10.3431 17.2689 9 18.9258 9C20.5826 9 21.9258 10.3431 21.9258 12C21.9258 13.6569 20.5826 15 18.9258 15ZM18.9258 13C19.4781 13 19.9258 12.5523 19.9258 12C19.9258 11.4477 19.4781 11 18.9258 11C18.3735 11 17.9258 11.4477 17.9258 12C17.9258 12.5523 18.3735 13 18.9258 13ZM17.9258 15H19.9258C21.5826 15 22.9258 16.3431 22.9258 18V19C22.9258 20.6569 21.5826 22 19.9258 22H17.9258C16.2689 22 14.9258 20.6569 14.9258 19V18C14.9258 16.3431 16.2689 15 17.9258 15ZM17.9258 17C17.3735 17 16.9258 17.4477 16.9258 18V19C16.9258 19.5523 17.3735 20 17.9258 20H19.9258C20.4781 20 20.9258 19.5523 20.9258 19V18C20.9258 17.4477 20.4781 17 19.9258 17H17.9258ZM4.92578 15C3.26893 15 1.92578 13.6569 1.92578 12C1.92578 10.3431 3.26893 9 4.92578 9C6.58264 9 7.92578 10.3431 7.92578 12C7.92578 13.6569 6.58264 15 4.92578 15ZM4.92578 13C5.47807 13 5.92578 12.5523 5.92578 12C5.92578 11.4477 5.47807 11 4.92578 11C4.3735 11 3.92578 11.4477 3.92578 12C3.92578 12.5523 4.3735 13 4.92578 13ZM3.92578 15H5.92578C7.58264 15 8.92578 16.3431 8.92578 18V19C8.92578 20.6569 7.58264 22 5.92578 22H3.92578C2.26893 22 0.925781 20.6569 0.925781 19V18C0.925781 16.3431 2.26893 15 3.92578 15ZM3.92578 17C3.3735 17 2.92578 17.4477 2.92578 18V19C2.92578 19.5523 3.3735 20 3.92578 20H5.92578C6.47807 20 6.92578 19.5523 6.92578 19V18C6.92578 17.4477 6.47807 17 5.92578 17H3.92578Z" />
                                                </svg>                       
                                                <span>Friends</span>
                                            </span>
                                            <svg :class="{'rotate-90' : showSubnav, 'rotate-0' : !showSubnav}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <ul x-show="showSubnav" class="sidebar-subnav-3 flex flex-col">
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 1</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 2 Item 3</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li x-data="{showSubnav : false}" class="relative flex flex-col">
                                        <a href="#" @click.prevent="showSubnav = !showSubnav" :class="{'active' : showSubnav}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                            <span class="flex space-x-4 items-center">
                                                <svg class="fill-current" width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9258 2V1C16.9258 0.447715 17.3735 0 17.9258 0C18.4781 0 18.9258 0.447715 18.9258 1V2H19.9258C21.5826 2 22.9258 3.34315 22.9258 5V8V10V15C22.9258 18.3137 20.2395 21 16.9258 21H6.92578C3.61207 21 0.925781 18.3137 0.925781 15V10V8V5C0.925781 3.34315 2.26893 2 3.92578 2H5.92578V1C5.92578 0.447715 6.3735 0 6.92578 0C7.47807 0 7.92578 0.447715 7.92578 1V2H16.9258ZM2.92578 8H20.9258V5C20.9258 4.44772 20.4781 4 19.9258 4H18.9258C18.9258 4.55228 18.4781 5 17.9258 5C17.3735 5 16.9258 4.55228 16.9258 4H7.92578C7.92578 4.55228 7.47807 5 6.92578 5C6.3735 5 5.92578 4.55228 5.92578 4H3.92578C3.3735 4 2.92578 4.44772 2.92578 5V8ZM2.92578 10V15C2.92578 17.2091 4.71664 19 6.92578 19H16.9258C19.1349 19 20.9258 17.2091 20.9258 15V10H2.92578Z"></path>
                                                </svg>                      
                                                <span>Event</span>
                                            </span>
                                            <svg :class="{'rotate-90' : showSubnav, 'rotate-0' : !showSubnav}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <ul x-show="showSubnav" class="sidebar-subnav-3 flex flex-col">
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 1</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 2 Item 3</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li x-data="{showSubnav : false}" class="relative flex flex-col">
                                        <a href="#" @click.prevent="showSubnav = !showSubnav" :class="{'active' : showSubnav}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                            <span class="flex space-x-4 items-center">
                                                <svg class="fill-current" width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.92578 0H14.4574C15.051 0 15.6139 0.263646 15.9938 0.719631L20.4622 6.08168C20.7617 6.44111 20.9258 6.89418 20.9258 7.36205V18C20.9258 20.2091 19.1349 22 16.9258 22H4.92578C2.71664 22 0.925781 20.2091 0.925781 18V4C0.925781 1.79086 2.71664 0 4.92578 0ZM18.9258 18V8H15.9258C14.8212 8 13.9258 7.10457 13.9258 6V2H4.92578C3.82121 2 2.92578 2.89543 2.92578 4V18C2.92578 19.1046 3.82121 20 4.92578 20H16.9258C18.0304 20 18.9258 19.1046 18.9258 18ZM17.7907 6L15.9258 3.76205V6H17.7907ZM6.92578 13C6.3735 13 5.92578 12.5523 5.92578 12C5.92578 11.4477 6.3735 11 6.92578 11H14.9258C15.4781 11 15.9258 11.4477 15.9258 12C15.9258 12.5523 15.4781 13 14.9258 13H6.92578ZM6.92578 17C6.3735 17 5.92578 16.5523 5.92578 16C5.92578 15.4477 6.3735 15 6.92578 15H12.9258C13.4781 15 13.9258 15.4477 13.9258 16C13.9258 16.5523 13.4781 17 12.9258 17H6.92578ZM6.92578 9C6.3735 9 5.92578 8.55229 5.92578 8C5.92578 7.44772 6.3735 7 6.92578 7H9.92578C10.4781 7 10.9258 7.44772 10.9258 8C10.9258 8.55229 10.4781 9 9.92578 9H6.92578Z"></path>
                                                </svg>                     
                                                <span>Files</span>
                                            </span>
                                            <svg :class="{'rotate-90' : showSubnav, 'rotate-0' : !showSubnav}" class="arrow transform transition-all duration-200 ease-in-out h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <ul x-show="showSubnav" class="sidebar-subnav-3 flex flex-col">
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 1</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 3 Item 2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative flex flex-col">
                                                <a href="#" class="group flex py-2 px-5 items-center justify-between text-sm">
                                                    <span class="flex space-x-4 items-center">
                                                        <svg class="fill-current" width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="2" cy="2" r="2" fill=""/>
                                                        </svg>
                                                        <span>Submenu 2 Item 3</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="relative flex flex-col">
                                <a href="#" @click.prevent="showMobileSubnav == 4 ? showMobileSubnav = -1 : showMobileSubnav = 4" :class="{'active' : showMobileSubnav == 4}" class="group flex py-2 px-5 items-center justify-between text-sm">
                                    <span>                     
                                        Help
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Overlays to cancel sidebar mobile  -->
            <div id="xSidebarOverlay" x-show="sidebarNav" class="fixed z-30 lg:hidden top-0 right-0 w-full h-full bg-primary bg-opacity-40"> </div>
            <div id="xRightSidebarOverlay" x-show="sidebarNavMobile" class="fixed z-30 lg:hidden top-0 right-0 w-full h-full bg-primary bg-opacity-40"> </div>
        </div>
        <!-- Content Body-->
        <div id="xContentBody" :class="{'lg:ml-64' : showSidebar, 'lg:ml-14' : !showSidebar}" class="relative h-screen w-full bg-grey-lightest">
            <div class="flex flex-col h-full flex-grow">
                <!-- Header -->
                @include('headers.header')
                <!-- Content Wrapper  -->
                <div id="xContentWrapper" class="aabbcc p-5 pb-12 h-full overflow-y-scroll">
                    
                    <?php $abc = '';?>
                    @foreach($feed as $key => $menu)
                        @foreach($menu as $blade)
                            @include("feed.".$key.".".$blade)  
                                       
                        @endforeach
                    @endforeach
                </div>
                <!-- Footer  -->
                @include('footers.footer')
            </div>
        </div>
    </div> 
    <script src="{{asset('js/alpine.js')}}"></script>
    <!-- <script src="{{asset('js/bootstrap.bundle.js')}}"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script>
        function interactiveSidebarShow(e) {
            if(e.classList.contains('one')) {
                document.getElementById('xSidebar').style.width = '16rem';
            }
        }
        function interactiveSidebarHide(e) {
            if(e.classList.contains('one')) {
                document.getElementById('xSidebar').style.width = '3.5rem';
            } 
        }
        function prevState() {
            document.getElementById('xSidebar').style.width = '16rem';
        }
        function menueitem(template) {
            console.log('.div_' + template);
            $('[currentActive=true]').attr('currentActive','false');
            $('.div_' + template).attr('currentActive','true');
            $('[currentActive=true]').show();
            $('[currentActive=false]').hide();
        }
    </script>
</body>
</html>