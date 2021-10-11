@extends('admin.master')

@section('title', "Skills")

@section('content')
    <div class="row">
          <div class="col-12">
            <a href="/admin/skills/add" class="btn btn-primary float-right">Add Skills</a><br><br>
            <div class="card">  
              <!-- /.card-header -->
              <div class="card-body">
                <table id="usertable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Skill Name</th>
                    <th>Percent</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($skills as $sk)
                        <tr>
                            <td>{{$sk->skill_name}}</td>
                            <td><div class="progress">
                                    <div class="progress-bar progress-bar-striped {!!$sk->color!!}" style="width:{!!$sk->percent!!}%;"></div>
                                </div></td>
                            <td><a href="/admin/skills/edit/{{ $sk->sid }}">Edit</a> &nbsp; <a href="/admin/skills/delete/{{ $sk->sid }}">Delete</a></td>
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
