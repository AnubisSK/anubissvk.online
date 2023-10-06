<?php
session_start();
require_once 'nastavenie.php';

echo ' <!DOCTYPE html> ';
echo ' <html> ';
echo ' <head> ';
echo ' <title>'. $menowebu. ' | '. $nazovstranky .'</title> ';
echo ' <meta name="keywords" content="anubissvk, web developer"> ';
echo ' <meta name="description" content="WEBSITE DEVELOPER"> ';
echo ' <meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo ' <meta http-equiv="X-UA-Compatible" content="ie=edge"> ';
echo ' <link href="'. $linkwebu .'assets/css/style.css" rel="stylesheet" /> ';
echo ' <link href="'. $linkwebu .'assets/img/favicon.ico" rel="icon" type="image/x-icon" /> ';
echo ' <script src="https://cdn.tailwindcss.com"></script> ';
echo ' <script src="https://kit.fontawesome.com/41ddfa8847.js" crossorigin="anonymous"></script> ';
echo ' <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';
echo ' </head> ';
include 'copy.php';
echo ' <body class="bg-gray-900"> ';
echo ' <nav class="flex justify-between bg-gray-900 text-white w-screen"> ';
echo ' <div class="px-5 xl:px-12 py-6 flex w-full items-center"> ';
echo ' <a class="text-3xl font-bold font-heading" href="'. $linkwebu .'">ANUBISSVK</a> ';
echo ' <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12"> ';
echo ' <li><a class="hover:text-gray-200" href="'. $linkwebu .'">Domov</a></li> ';
echo ' <li><a class="hover:text-gray-200" href="'. $linkwebu .'projekty.php">Projekty</a></li> ';
echo ' <li><a class="hover:text-gray-200" href="'. $linkwebu .'videa.php">Videá</a></li> ';
echo ' </ul> ';
echo ' <div class="hidden xl:flex items-center space-x-5 items-center"> ';
echo  ' <a href="https://www.youtube.com/AnubisSVK"><i class="fa-brands fa-youtube" style="color: #ff0000; "></i></a>';
echo  ' <a href="https://www.instagram.com/anubissvk.jpg/"><i class="fa-brands fa-instagram"></i></a>';
echo ' </div> ';
echo ' </div> ';
echo ' </nav> ';
echo ' <hr/> ';
?>

<div
    class="relative overflow-hidden rounded-lg bg-cover bg-no-repeat p-12 text-center"
    style="background-image: url('https://i.ibb.co/tw0tm6Y/Banner-Web.png'); height: 400px">
    <div
        class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
        style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="flex h-full items-center justify-center">
            <div class="text-white">
                <h2 class="mb-4 text-4xl font-semibold"><?php echo $menowebu ?></h2>
                <h4 class="mb-6 text-xl font-semibold"><?php echo $podnadpis ?></h4>
                <button
                    type="button"
                    class="rounded border-2 border-neutral-50 px-7 pb-[8px] pt-[10px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    <a href="https://youtube.com/AnubisSVK"><i class="fa-brands fa-youtube" style="color: #ff0000;"></i> Youtube</a>
                </button>
            </div>
        </div>
    </div>
</div>