<?php
if (!empty($realisateurs)){ 
?>

<div class="container-fluid my-5" id="director">
        <div class="container">
          <div class="row">
<?php


$nb_li =0;
$nb_max =4;

foreach ($realisateurs as $realisateur) :
    if($nb_li == 0){
        ?>
           <div class="col-4">
                <ul class="border-left">
       <?php
       }
    ?>
                  <li class="mt-5"><a href="/films/getbyrealisateur/<?php echo $realisateur['id']; ?>"><img src="<?php echo $realisateur['img'];?>" alt="<?php echo $realisateur['alt_img'];?>" width="300" height="400"></a></li>
<?php 
                
                $nb_li++;  
               // echo $nb_li;
                if($nb_li == $nb_max)
                {
                    $nb_li=0;
                ?>
                </ul>
            </div>
             <?php
         
                            }
                     ?>
<?php endforeach ;?>
</div>
</div>
</div>
<?php
}
else {echo "aucun resultat";}