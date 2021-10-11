@extends('admin.master')

@section('title', "Add Portfolio")

@section('content')
    <div class="row">
        <div class="col-12">
        <a href="/admin/portfolio" class="btn btn-primary" style="margin-bottom:20px;">Back</a>
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
                <form action="/admin/portfolio/add/process" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="project_name">Project Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Project Name" id="project_name" name="project_name">
                    </div>
                    <div class="form-group">
                        <label for="project_link">Link:</label>
                        <input type="text" class="form-control date-year" placeholder="Enter Link" id="project_link" name="project_link">
                    </div>
                    <div class="form-group">
                        <label for="project_code">Platform:</label>
                        <input type="text" class="form-control date-year" placeholder="Enter End Date" id="project_code" name="project_code">
                    </div>
                    <div class="form-group">
                        <label for="project_image">Image:</label>
                        <input type="file" class="form-control-file border" id="project_image" name="project_image">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>    
          
        </div>
        <!-- /.row -->
    </div>
    
@endsection
