<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<div class="container">
	<?php get_header(); ?>
	<button id="users-list-btn" class="btn btn-primary">Load users</button>
	<table class="table">
	  <thead>
	    <tr>
	    	<th>ID</th>
	      	<th scope="col">First Name</th>
	      	<th>UserName</th>
	    </tr>
	  </thead>
	  <tbody id="users-lists-container" data-toggle="modal" data-target="#exampleModal">
	  </tbody>
	</table>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <span><strong>Username: </strong><p id="username"></p></span>
	        <span><strong>Address: </strong><p id="address"></p></span>
	        <span><strong>Phone: </strong><p id="phone"></p></span>
	        <span><strong>Email: </strong><p id="email"></p></span>
	        <span><strong>Company: </strong><p id="company"></p></span>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close();">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
</div>
<?php get_footer(); ?>