<? include "includes/header.php" ?>

<main> 
<div class="container">
    <div class="row">
    <div class="col s12">
    	<h2>Feed</h2>
    	 <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">TOP</a></li>
        <li class="tab col s3"><a href="#test2">LIVE</a></li>
       
      </ul>
    </div>
    <div id="test1" class="col s12">
    		<table class="striped">
        <thead>
          <tr>
              <th data-field="id">Image</th>
              <th data-field="name">Username</th>
              <th data-field="price">uSnap Score</th>
              <th data-field="price">Actions</th>
          </tr>
        </thead>

        <tbody>
          <? foreach ($data['top']->response as $image) { ?>
			 <tr>
            <td><img  class="materialboxed" width="200" src="<?=$image->url?>"></td>
            <td><?=$image->email?></td>
            <td><?=$image->fb_likes?></td>
          </tr>

		<? } ?>
        </tbody>
      </table>
            	
    </div>

    <div id="test2" class="col s12">

    	<table class="striped">
        <thead>
          <tr>
              <th data-field="id">Image</th>
              <th data-field="name">Username</th>
              <th data-field="price">uSnap Score</th>
              <th data-field="price">Actions</th>
          </tr>
        </thead>

        <tbody class="live-table">
		<? foreach ($data['live']->response as $image) { ?>
			<tr>
            <td><img  class="materialboxed" width="200" src="<?=$image->url?>"></td>
            <td><?=$image->email?></td>
            <td><?=$image->fb_likes?></td>
          </tr>

		<? } ?>

          
        </tbody>
      </table>
    	
    </div>
   
  </div>



    </div>
      
      </div>
    </div>
</main>


<? include "includes/footer.php" ?>