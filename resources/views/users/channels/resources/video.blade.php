<!-- modal -->
<div class="modal fade" id="{{$userChannel->id}}_channel_video" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="p-20">
                            <div class="">
                                <form  method="post" action="{{route('user.channel.resource.video.register')}}">
                                    @csrf
                                    <div class="form-group m-b-20">
                                        <label for="exampleInputEmail1">Video Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter title">
                                    </div>
                                    <div class="form-group m-b-20">
                                        <label>Description</label>
                                        <div class="summernote">
                                        </div>
                                    </div>
                                    <div class="form-group m-b-20">
                                        <label>File Uploads</label>
                                        <input type="file" name="files[]" id="filer_input1"
                                                       multiple="multiple">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Upload</button>
                                </form>
                            </div>
                        </div> <!-- end p-20 -->
                    </div> <!-- end col -->
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
















