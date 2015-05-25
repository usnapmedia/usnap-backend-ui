<? include "includes/header.php" ?>

<main> 
<div class="container">
    <div class="row">
	    <div class="col s12">
	    	<h2>Analytics</h2>
		    <div class="row">
		      <div class="col s12 m5 l3">
		        <div class="card-panel teal">
		          <span class="white-text">TOTAL USERS</span>
		          <h1 class="white-text currentUsers" ><?=$data->users?></h1>
		        </div>
		      </div>
		      <div class="col s12 m5 l3">
		        <div class="card-panel teal">
		          <span class="white-text">CURRENT USERS</span>
		          <h1 class="white-text">--</h1>
		        </div>
		      </div>
		      <div class="col s12 m5 l3">
		        <div class="card-panel teal">
		          <span class="white-text">MEDIA SHARED</span>
		          <h1 class="white-text currentMedia"><?=$data->media?></h1>
		        </div>
		      </div>
		      <div class="col s12 m5 l3">
		        <div class="card-panel teal">
		          <span class="white-text">SOCIAL REACH</span>
		          <h1 class="white-text currentAnalytics"><?=$data->social?></h1>
		        </div>
		      </div>
		    </div>
		  <!--   <div class="row">
		    	<div class="col s12 l6">
			    	<div class="card-panel teal">
			          <span class="white-text">WEEKLY MEDIA DISTRIBUTION (Video vs Photo)</span>
			          <div class="ct-chart media-distribution ct-perfect-fourth"></div>
			        </div>
		    	</div>
		    	<div class="col s12 l6">
		    		<div class="card-panel teal">
			          <span class="white-text">GENDER DISTRIBUTION</span>
			          <div class="ct-chart gender ct-perfect-fourth"></div>
			        </div>
		    	</div> -->
		    	<!-- <div class="col s12 l6">
		    		<div class="card-panel teal">
			          <span class="white-text">GENDER DISTRIBUTION</span>
			          <div class="ct-chart gender ct-perfect-fourth"></div>
			        </div>
		    	</div> -->
		    <!-- </div> -->


		   <!--  <div class="row">
		    	<div class="col s12 l12">
			    	<div class="card-panel teal">
			          <span class="white-text">WEEKLY MEDIA SHARED</span>
			          <div class="ct-chart media-shared ct-perfect-fourth"></div>
			        </div>
		    	</div>
		    	
		    </div> -->

	    </div>
	</div>
</div>
</main>


<? include "includes/footer.php" ?>