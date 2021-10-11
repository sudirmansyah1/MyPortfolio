@extends('admin.master')

@section('title', "Portfolio")

@section('content')
    <div class="row">
          <div class="col-12">
            <a href="/admin/portfolio/add" class="btn btn-primary float-right">Add Project</a><br><br>
            <div class="card">  
              <!-- /.card-header -->
              <div class="card-body">
                <table id="usertable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Project Name</th>
                    <th>Project Link</th>
                    <th>Project Image</th>
                    <th>Project Platform</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($projects as $pj)
                        <tr>
                            <td>{{$pj->project_name}}</td>
                            <td><a href="{{$pj->project_link}}">Open Project</a></td>
                            <td><a href="{{$pj->project_image}}">Show Image</a></td>
                            <td>{{$pj->project_code}}</td>
                            <td><a href="/admin/portfolio/edit/{{ $pj->pid }}">Edit</a> &nbsp; <a href="/admin/portfolio/delete/{{ $pj->pid }}">Delete</a></td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    
@endsection
