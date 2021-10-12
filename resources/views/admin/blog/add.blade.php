@extends('admin.master')

@section('title', "Add Blog")

@section('content')
    <div class="row">
        <div class="col-12">
            <a href="/admin/blog" class="btn btn-primary" style="margin-bottom:20px;">Back</a>
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
                    <form action="/admin/blog/add/process" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-8 col-md-6 col-lg-8">
                                <div class="form-group">
                                    <label for="project_name">Title:</label>
                                    <input type="text" class="form-control" placeholder="Enter Project Name" id="project_name" name="project_name">
                                </div>
            
                                <div class="form-group">            
                                    <label for="project_link">Text:</label>            
                                    <textarea name="" id="summernote" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="project_image">Cover Image:</label>
                                    <input type="file" class="form-control-file border" id="project_image" name="project_image">        
                                </div>
            
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                        </div>                  
                    </form>
                </div>
            </div>    
        </div>
        <!-- /.row -->
    </div>
@endsection

@section('custom_css')
  <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- CodeMirror -->
  <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/codemirror/codemirror.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/codemirror/theme/monokai.css') }}">
@endsection

@section('custom_js')
    <script src="{{ URL::asset('AdminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- CodeMirror -->
    <script src="{{ URL::asset('AdminLTE/plugins/codemirror/codemirror.js') }}"></script>
    <script src="{{ URL::asset('AdminLTE/plugins/codemirror/mode/css/css.js') }}"></script>
    <script src="{{ URL::asset('AdminLTE/plugins/codemirror/mode/xml/xml.js') }}"></script>
    <script src="{{ URL::asset('AdminLTE/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
    <script>
        $(function () {
            // Summernote
            $('#summernote').summernote({
                height: 400,   //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                }
            })
        })
    </script>
@endsection