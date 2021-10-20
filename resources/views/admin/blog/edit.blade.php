@extends('admin.master')

@section('title', "Edit Blog")

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
                    @foreach ($blogdata as $blog)
                        <form action="/admin/blog/edit/process" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $blog->id }}">
                            <div class="row">
                                <div class="col-sm-8 col-md-6 col-lg-8">
                                    <div class="form-group">
                                        <label for="title">Title:</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}">
                                    </div>
                
                                    <div class="form-group">            
                                        <label for="summernote">Text:</label>            
                                        <textarea name="text" id="summernote" cols="30" rows="10">
                                            {!! $blog->text !!}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="image">Cover Image:</label>
                                        <input type="file" class="form-control-file border" id="image" name="image">
                                        <img class="lozad" data-src="{{ URL::asset($blog->image) }}" height="100px" style="margin-top:10px;" alt="Sudirmansyah">    
                                    </div>
                
                                    <button type="submit" class="btn btn-primary">Post</button>
                                </div>
                            </div>                  
                        </form>
                    @endforeach
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

