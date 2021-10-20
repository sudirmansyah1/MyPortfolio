@extends('admin.master')



@section('title', "Users")



@section('content')

    <div class="row">

          <div class="col-12">

            <a href="/admin/users/add" class="btn btn-primary float-right">Add User</a><br><br>

            <div class="card">  

              <!-- /.card-header -->

              <div class="card-body">

                <table id="usertable" class="table table-bordered table-hover">

                  <thead>

                  <tr>

                    <th style="width: 30px;">Image</th>

                    <th>Username</th>

                    <th>Email</th>

                    <th>Level</th>

                    <th>isActive</th>

                    <th>Action</th>

                  </tr>

                  </thead>

                  <tbody>

                    @foreach($userlist as $users)

                        <tr>

                            <td><img class="lozad" data-src="{{ URL::asset($users->photo) }}" class="img-circle" width="35px" alt="Sudirmansyah"></td>

                            <td>{{$users->name}}</td>

                            <td>{{$users->email}}</td>

                            <td>{{$users->level}}</td>

                            <td>{{$users->isActive}}</td>

                            <td><a href="/admin/users/edit/{{ $users->id }}">Edit</a> &nbsp; <a href="/admin/users/delete/{{ $users->id }}">Delete</a></td>

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

