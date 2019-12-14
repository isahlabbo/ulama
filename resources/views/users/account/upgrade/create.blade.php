<!-- modal -->
<div class="modal fade" id="upgrade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">	
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            	<form action="#" method="post">
            		@csrf
	            	<select class="form-control" name="remark">
	            		<option value="">Gender</option>
	            	</select><br>

	            	<label>Bigraphy</label>
	            	<textarea name="about" cols="50" rows="5" class="form-control" placeholder="Short biography of the schooler"></textarea><br>
                    
                    <label>State</label>
                    <select class="form-control" name="remark">
	            		<option value=""></option>
	            	</select><br>

                    <label>Local Government</label>
                    <select class="form-control" name="remark">
	            		<option value=""></option>
	            	</select><br>

                    <label>Address</label>
                    <input type="text" name="address" class="form-control"><br>

                    <label>Profile Picture</label>
                    <input type="file" name="image" class="form-control"><br>

	            	<button class="btn ulama-success-btn btn-block">
		            	Upgrade Now
		            </button>
	            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->