@extends('admin.master')

@section('title', "Education")

@section('content')
    <div class="row">
          <div class="col-12">
            <a href="/admin/education/add" class="btn btn-primary float-right">Add Education</a><br><br>
            <div class="card">  
              <!-- /.card-header -->
              <div class="card-body">
                <table id="usertable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Institute</th>
                    <th>From</th>
                    <th>End</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($educationlist as $edu)
                        <tr>
                            <td>{{$edu->institute}}</td>
                            <td>{{$edu->from_date}}</td>
                            <td>{{$edu->end_date}}</td>
                            <td><a href="/admin/education/edit/{{ $edu->id }}">Edit</a> &nbsp; <a href="/admin/education/delete/{{ $edu->id }}">Delete</a></td>
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
