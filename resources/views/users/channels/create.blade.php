<!-- modal -->
<div class="modal fade" id="channel" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
    
            <div class="modal-body">
            	<form action="{{route('user.channel.register')}}" method="post" enctype="multipart/form-data">
            		@csrf

            		<label>Channel Name</label>
	                <input type="text" name="title" class="form-control"><br>

	            	<label>Channel Description</label>
	            	<textarea name="description" cols="50" rows="5" class="form-control" placeholder="Short description of what the channel is about"></textarea><br>
                    
                    <label>Channel Plan</label>
                    <select class="form-control" name="plan">
	            		<option value=""></option>
	            		@foreach(user()->plans() as $plan)
                            <option value="{{$plan->id}}">{{$plan->name}}</option>
	            		@endforeach
	            	</select><br>

	            	<button class="btn ulama-primary-btn btn-block">
		            	Create Channel
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