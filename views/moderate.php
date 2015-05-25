<? include "includes/header.php" ?>

<main> 
<div class="container">
    <div class="row">
        <div class="col s12">
        	<h2>Moderate</h2>

        	 <div class="row">
            <div class="col s 12">
              <p>You have <span class="count"><?=$data->count?></span> pictures to moderate</p>
            </div> 
           </div>

          

<div class="row">
<? foreach ($data->response as $image) { ?>
    <div class="col s4">
      
      <div class="row">
      <div class="col s6 left-align">
      <a class="waves-effect waves-light btn red moderate" data-status="2" data-id="<?=$image->id;?>">DECLINE</a>
      </div>
      <div class="col s6 right-align"> 
      <a class="waves-effect waves-light btn moderate" data-status="1" data-id="<?=$image->id;?>">APPROVE</a>
      </div>
      </div>
      <img class="responsive-img media-moderated" data-id="12" src="<?=$image->url;?>" >
    </div>
<? } ?>
</div>
           
          

            



        </div>
      
      </div>
    </div>
</main>


<? include "includes/footer.php" ?>