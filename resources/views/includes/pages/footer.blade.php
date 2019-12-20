
<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/detect.js')}}"></script>
<script src="{{asset('js/fastclick.js')}}"></script>
<script src="{{asset('js/jquery.blockUI.js')}}"></script>
<script src="{{asset('js/waves.js')}}"></script>
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>

<!-- Counter js  -->
<!-- <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="../plugins/counterup/jquery.counterup.min.js"></script> -->

<!--Morris Chart-->
<!-- <script src="../plugins/morris/morris.min.js"></script>
<script src="../plugins/raphael/raphael-min.js"></script> -->

<!-- Dashboard init -->
<script src="{{asset('pages/jquery.dashboard.js')}}"></script>
<!--Summernote js-->
<script src="{{asset('plugins/summernote/summernote.min.js')}}"></script>
<!-- Select 2 -->
<script src="{{asset('plugins/select2/js/select2.min.js')}}"></script>
<!-- Jquery filer js -->
<script src="{{asset('plugins/jquery.filer/js/jquery.filer.min.js')}}"></script>

<!-- page specific js -->
<script src="{{asset('pages/jquery.blog-add.init.js')}}"></script>
<!-- App js -->
<script src="{{asset('js/jquery.core.js')}}"></script>
<script src="{{asset('js/jquery.app.js')}}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    jQuery(document).ready(function(){

        $('.summernote').summernote({
            height: 200,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });
        // Select2
        $(".select2").select2();

        $(".select2-limiting").select2({
            maximumSelectionLength: 2
        });
    });
</script>
