<?php
if (!empty($genres)){ 
?>
<div class="container-fluid my-5" id="category">
        <div class="container">
          <div class="row">
<?php
//echo var_dump($genres);

$nb_li =0;
$nb_max =3;

foreach ($genres as $genre) :
    if($nb_li == 0){
        ?>
           <div class="col-4">
                <ul class="border-left">
       <?php
       }
    ?>
                  <li class="mt-5"><a href="/films/getbygenre/<?php echo $genre['id']; ?>"><img src="<?php echo $genre['img'];?>" alt="<?php echo $genre['alt_img'];?>" width="300" height="400"></a></li>
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