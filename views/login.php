<? include "includes/header.php" ?>

<style>
	.login {
		height: 100vh;

	}
</style>
<div class="row valign-wrapper login">
	<div class="container">
		<div class="col l6 valign">
			<img src="img/usnap-logo.png" alt="" class="responsive-img">
		</div>
		<div class="col l6 valign ">
			<form class="" action="">
			
	      		<div class="row">
			        <div class="input-field col s12">
			          <input id="email" type="email" class="validate">
			          <label for="email">Email</label>
			        </div>
		        </div>

				<div class="row">
			        <div class="input-field col s12">
			          <input id="password" type="password" class="validate">
			          <label for="password">Password</label>
			        </div>
		        </div>	

				<button class="btn waves-effect waves-light" type="submit" name="action">Login
				<i class="mdi-content-send right"></i>
				</button>
  	
			</form>
		</div>
	</div>
</div>



<? include "includes/footer.php" ?>