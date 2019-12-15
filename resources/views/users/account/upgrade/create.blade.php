<!-- modal -->
<div class="modal fade" id="upgrade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">	
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            	<form action="{{route('user.account.upgrade.register')}}" method="post" enctype="multipart/form-data">
            		@csrf
	            	<select class="form-control" name="gender">
	            		<option value=""></option>
	            		@foreach(user()->genders() as $gender)
                             <option value="{{$gender->id}}">{{$gender->name}}</option>
	            		@endforeach
	            	</select><br>

	            	<label>Bigraphy</label>
	            	<textarea name="about" cols="50" rows="5" class="form-control" placeholder="Short biography of the schooler"></textarea><br>
                    
                    <label>State</label>
                    <select class="form-control" name="state">
	            		<option value=""></option>
	            		@foreach(user()->states() as $state)
                             <option value="{{$state->id}}">{{$state->name}}</option>
	            		@endforeach
	            	</select><br>

                    <label>Local Government</label>
                    <select class="form-control" name="lga">
	            		<option value=""></option>
	            		@foreach(user()->lgas() as $lga)
                            <option value="{{$lga->id}}">{{$lga->name}}</option>
	            		@endforeach
	            	</select><br>

                    <label>Home Address</label>
                    <input type="text" name="home_address" class="form-control"><br>

                    <label>Alternative Address</label>
                    <input type="text" name="alternative_address" class="form-control"><br>

                    <label>Profile Picture</label>
                    <input type="file" name="image" class="form-control"><br>

	            	<button class="btn ulama-promary-btn btn-block">
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