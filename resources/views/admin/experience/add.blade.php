@extends('admin.master')

@section('title', "Add Experience")

@section('content')
    <div class="row">
        <div class="col-12">
        <a href="/admin/experience" class="btn btn-primary" style="margin-bottom:20px;">Back</a>
        @if (count($errors) > 0)
            <div class="alert alert-danger" style="margin-bottom:20px;">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="/admin/experience/add/process" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="company">Company:</label>
                        <input type="text" class="form-control" placeholder="Enter Company" id="company" name="company">
                    </div>
                    <div class="form-group">
                        <label for="position">Position:</label>
                        <input type="text" class="form-control" placeholder="Enter Position" id="position" name="position">
                    </div>
                    <div class="form-group">
                        <label for="from_date">From Date:</label>
                        <input type="text" class="form-control" placeholder="Enter From Date" id="from_date" name="from_date">
                    </div>
                    <div class="form-group">
                        <label for="end_date">End Date:</label>
                        <input type="text" class="form-control" placeholder="Enter End Date" id="end_date" name="end_date">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea id="description" class="form-control" name="description">

                        </textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>    
          
        </div>
        <!-- /.row -->
    </div>
    
@endsection

@section('custom_js')
<script src="{{ URL::asset('AdminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
  $(function () {
    // Summernote
    $('#description').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
@endsection

@section('custom_css')
<link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/summernote/summernote-bs4.min.css') }}">
@endsection