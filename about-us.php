<?php

include("template/header.php");

?>
<br><br><br><br><br><br>
<div class="container">
	<h2 class="text-center">we want to hear from you!</h2>
</div>
<br><br><br><br>
<div class="row">
	<div class="col-12 col-md-6 col-lg-6">
		<form>
			  	<label>Name</label>
		  <div class="row">

		    <div class="col">
		      <input type="text" class="form-control" placeholder="First name">
		    </div>
		    <div class="col">
		      <input type="text" class="form-control" placeholder="Last name">
		    </div>
		  </div>

		  <label>Comment</label>
		   <input type="email" name="email" class="form-control">

		    <label>Email</label>
		   <textarea class="form-control"></textarea>
		</form>
	</div>

	<div class="col-12 col-md-6 col-lg-6">
		Our location
		
			<div class="mapouter embed-responsive-item"><div class="gmap_canvas"><iframe width="500px" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=linkpro%20philippines&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style></style>
			</div>
		
	</div>
</div>
<br><br><br><br><br>


<?php

include("template/footer.php");

?>