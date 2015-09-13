@extends("admin.__layout")
@section("styles")
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/input_image/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
@stop
@section("scripts")
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="assets/input_image/js/fileinput.js" type="text/javascript"></script>
<script src="assets/input_image/js/fileinput_locale_fr.js" type="text/javascript"></script>
<script src="assets/input_image/js/fileinput_locale_es.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
<script>
    $('#file-vi').fileinput({
        language: 'vi',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif']
    });
</script>
@stop
@section("mainbody")
<form enctype="multipart/form-data">
    <div class="form-group">
        <input id="file-vi" type="file" class="file" data-upload-url="#">
    </div>
</form>
@stop