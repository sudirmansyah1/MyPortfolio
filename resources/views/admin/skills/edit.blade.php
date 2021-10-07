@extends('admin.master')

@section('title', "Edit Skills")

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
                @foreach($skillsdata as $sd)
                <form action="/admin/skills/add/process" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="sid" value="{{$sd->sid}}">
                    <div class="form-group">
                        <label for="skill_name">Skill Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Skill Name" id="skill_name" name="skill_name" value="{{$sd->skill_name}}">
                    </div>
                    <div class="form-group">
                        <label for="color">Color:</label>
                        <select class="form-control" id="color" name="color">
                            <option value="bg-primary" @if($sd->color == 'bg-primary') selected @endif>Primary</option>
                            <option value="bg-success" @if($sd->color == 'bg-success') selected @endif>Success</option>
                            <option value="bg-info" @if($sd->color == 'bg-info') selected @endif>Info</option>
                            <option value="bg-warning" @if($sd->color == 'bg-warning') selected @endif>Warning</option>
                            <option value="bg-danger" @if($sd->color == 'bg-danger') selected @endif>Danger</option>
                            <option value="bg-secondary" @if($sd->color == 'bg-secondary') selected @endif>Secondary</option>
                            <option value="bg-dark" @if($sd->color == 'bg-dark') selected @endif>Dark</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="percent">Percent:</label>
                        <input type="text" class="form-control" placeholder="Enter Percent" id="percent" name="percent" value="{{$sd->percent}}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @endforeach
            </div>
        </div>    
          
        </div>
        <!-- /.row -->
    </div>
    
@endsection
