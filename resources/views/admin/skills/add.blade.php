@extends('admin.master')

@section('title', "Add Skills")

@section('content')
    <div class="row">
        <div class="col-12">
        <a href="/admin/skills" class="btn btn-primary" style="margin-bottom:20px;">Back</a>
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
                <form action="/admin/skills/add/process" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="skill_name">Skill Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Skill Name" id="skill_name" name="skill_name">
                    </div>
                    <div class="form-group">
                        <label for="color">Color:</label>
                        <select class="form-control" id="color" name="color">
                            <option value="bg-primary">Primary</option>
                            <option value="bg-success">Success</option>
                            <option value="bg-info">Info</option>
                            <option value="bg-warning">Warning</option>
                            <option value="bg-danger">Danger</option>
                            <option value="bg-secondary">Secondary</option>
                            <option value="bg-dark ">Dark</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="percent">Percent:</label>
                        <input type="text" class="form-control" placeholder="Enter Percent" id="percent" name="percent">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>    
          
        </div>
        <!-- /.row -->
    </div>
    
@endsection
