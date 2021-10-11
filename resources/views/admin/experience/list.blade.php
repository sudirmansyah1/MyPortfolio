@extends('admin.master')

@section('title', "Experience")

@section('content')
    <div class="row">
          <div class="col-12">
            <a href="/admin/experience/add" class="btn btn-primary float-right">Add Experience</a><br><br>
            <div class="card">  
              <!-- /.card-header -->
              <div class="card-body">
                <table id="usertable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Company</th>
                    <th>Position</th>
                    <th>From</th>
                    <th>End</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($experience as $ex)
                        <tr>
                            <td>{{$ex->company}}</td>
                            <td>{{$ex->position}}</td>
                            <td>{{$ex->from_date}}</td>
                            <td>{{$ex->end_date}}</td>
                            <td>{!!$ex->description!!}</td>
                            <td><a href="/admin/experience/edit/{{ $ex->id }}">Edit</a> &nbsp; <a href="/admin/experience/delete/{{ $ex->id }}">Delete</a></td>
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

@section('custom_js')
<script>
         $("#usertable").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    </script>
@endsection
