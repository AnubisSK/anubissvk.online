<?php
$nazovstranky = 'Domov';
require_once 'inc/hlavicka.php';
require_once 'inc/projekty.php';
require_once 'inc/videa.php';
?>
<div class="py-2 bg-gray-900">
    <h1 class="text-center text-2xl font-bold text-white">Moja práca</h1>
    <p class="text-center text-gray-100">Vytvorené so zručnosťou a starostlivosťou.</p>
</div>
<hr/>
<section class="py-10 bg-gray-900 ">
    <div class="mx-auto grid max-w-6xl  grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    <?php

    for($x = 0; $x < 4; $x++) {
        if(isset($x)) {
            $query = mysqli_query($conn,"SELECT * FROM `projekty` WHERE id = '$idarray[$x]'");
            $res = mysqli_fetch_array($query);
            $image = $res['img'];
            $projekt_title = $res['title'];
            $typprojektu = $res['typprojektu'];
            $projekt_id = $res['id'];
            $odkaznasrc = $res['odkaznasrc'];
            $odkaznaweb = $res['odkaznaweb'];
            ?>
            <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                <a href="#">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                        <img src="<?php echo $image; ?>" alt="<?php echo $projekt_title;?>" />
                    </div>

                    <div class="mt-1 p-2">
                        <h2 class="text-slate-700"><?php echo $projekt_title;?></h2>
                        <p class="mt-1 text-sm text-slate-400"><?php echo $typprojektu;?></p>

                        <div class="mt-3 flex items-end justify-between">
                            <p class="text-lg font-bold text-blue-500"><a href="<?php echo $odkaznasrc;?>">GITHUB</a></p>

                            <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">

                                <button class="text-sm"><a href="<?php echo $odkaznaweb;?>">Odkaz na web</a></button>
                            </div>
                        </div>
                    </div>
                </a>
            </article>
            <?php
        }
    }
    ?>
    </div>
</section>
  <hr />
    <div class="py-2 bg-gray-900">
        <h1 class="text-center text-2xl font-bold text-white">Posledné videá</h1>
        <p class="text-center text-gray-100">Tu nájdeš posledné videá z môjho YouTube kanálu!</p>
    </div>
    <hr />
<section class="px-5 py-5 bg-gray-900">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-10">
    <?php

    for($x = 0; $x < 4; $x++) {
        if(isset($x)) {
            $query = mysqli_query($conn,"SELECT * FROM `youtube_videa` WHERE id = '$idarray[$x]'");
            $res = mysqli_fetch_array($query);
            $image = $res['video'];
            $projekt_title = $res['nazov_videa'];
            $typprojektu = $res['popis_videa'];
            $projekt_id = $res['id'];
            $odkaznayt = $res['odkaznayt'];
            ?>
            <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                <a href="#">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                        <iframe width="560" height="315" src="<?php echo $image; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>

                    <div class="mt-1 p-2">
                        <h2 class="text-slate-700"><?php echo $projekt_title;?></h2>
                        <p class="mt-1 text-sm text-slate-400"><?php echo $typprojektu;?></p>

                        <div class="mt-3 flex items-end justify-between">

                            <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">

                                <button class="text-sm"><a href="<?php echo $odkaznayt;?>">Odkaz na youtube</a></button>
                            </div>
                        </div>
                    </div>
                </a>
            </article>
            <?php
        }
    }
    ?>
    </div>
</section>
  <hr />
<?php include 'inc/footer.php' ?>
<hr />