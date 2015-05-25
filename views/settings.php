<? include "includes/header.php" ?>

<main> 
<div class="container">
    <div class="row">
    <div class="col s12">
    	<h2>Settings</h2>
    	<p>The admin can control their app settings and social connect from here.</p>
		<button class="btn waves-effect waves-light" id="saveSettings" type="submit" name="action">Save
		<i class="mdi-content-send right"></i>
		</button>
    	<hr>
    	<h5>Company Profile</h5>
    	<div class="row">
	    	<div class="input-field col s6">
	          <input id="company-name" type="text" class="validate companyName" value="<?=$data->name?>">
	          <label for="company-name">Company Name</label>
	        </div>
        </div>

        <h5>App Details</h5>
        <div class="row">
	    	<div class="input-field col s6">
	          <input id="api-key" type="text" class="validate" value="<?=$data->api_key?>" >
	          <label for="api-key">API Key</label>
	        </div>
        </div>
        <div class="row">
	    	<div class="input-field col s4">
	          <input id="color-1" type="text" class="validate" >
	          <label for="color-1">Color #1</label>
	        </div>
	        <div class="input-field col s4">
	          <input id="color-2" type="text" class="validate">
	          <label for="color-2">Color #2</label>
	        </div>
	        <div class="input-field col s4">
	          <input id="color-3" type="text" class="validate">
	          <label for="color-3">Color #3</label>
	        </div>
        </div>

        <h5>Social</h5>
        <p>Moderation</p>
        <div class="switch">
		    <label>
		      Post-Social
		      <input type="checkbox">
		      <span class="lever"></span>
		      Pre-Social
		    </label>
	  	</div>

	  	<h5>Media</h5>
	  	<div class="row">
	    	<div class="input-field col s6">
	          <input id="company-logo-url" type="text" class="validate watermarkUrl" value="<?=$data->watermark?>">
	          <label for="company-logo-url">Company Logo URL</label>
	        </div>
        </div>

		<h5>Connect</h5>
	  	<div class="row">
	  		<div class="col s12">
		  		<p>Facebook</p>
		  		<div class="row">
			    	<div class="input-field col s6">
			          <input id="fb-app-id" type="text" class="validate" value="<?=$data->fb_api_id?>">
			          <label for="fb-app-id">App ID</label>
			        </div>
			        <div class="input-field col s6">
			          <input id="fb-app-secret" type="text" class="validate" value="<?=$data->fb_api_secret?>">
			          <label for="fb-app-secret">App Secret</label>
			        </div>
		        </div>
	    	</div>
        </div>



    </div>
      
      </div>
    </div>
</main>


<? include "includes/footer.php" ?>