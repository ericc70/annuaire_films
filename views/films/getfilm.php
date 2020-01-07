<div class="container-fluid my-5">
            <div class="row">
                <div class="contenu-carrousel">
                    <div class="carrousel">
                        <a><img src="/public/media/incendies.jpg"></a>
                        <a><img src="/public/media/tree_of_life.jpg"></a>
                        <a><img src="/public/media/juste_la_fin_dun_monde.jpg"></a>
                    </div>
                </div>
            </div>
            <div class=controle>
                <button onclick="carrousel('-')">❮</button>
                <button onclick="carrousel('')">❯</button>
            </div>         
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <h1 class="text-white text-center"></h1>
                    <div class="col-6 text-center">
                        <p><img src="/<?php echo $films['img']; ?>" class=""></p>
                    </div>
                    <div class="col-6">
                        <p class="h5 mb-4 font-poiret-lg">Date de sortie : <?php echo $films['date']; ?></p>
                        <p class="h5 mb-4 font-poiret-lg">De <?php echo $films['firstname']; echo ' ';  echo $films['lastname']; ?></p>
                        <p class="h5 mb-4 font-poiret-lg">Genre <?php echo $films['GROUP_CONCAT(genre.title)']; ?></p>
                        <p><q class="h3"></q></p>
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <p class="h4 text-white font-prestige"><?php echo $films['synopsis']; ?></p>
            </div>
        </div>


<?php 
// var_dump($films) ;



//  echo $films['title'];
// 


//  <a href="/films/getbyannee/<?php echo $films['date']; ?> "> <?php //echo $films['date']; ?>



