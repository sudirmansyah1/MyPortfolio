@extends('admin.master')



@section('title', "Blog")



@section('content')

    <div class="row">

          <div class="col-12">

            <a href="/admin/blog/add" class="btn btn-primary float-right">Add Blog</a><br><br>

            <div class="card">  

              <!-- /.card-header -->

              <div class="card-body">

                <table id="usertable" class="table table-bordered table-hover">

                  <thead>

                  <tr>

                    <th>Title</th>

                    <th>Date</th>

                    <th>Text</th>

                    <th>Writer</th>

                    <th>Action</th>

                  </tr>

                  </thead>

                  <tbody>

                    @foreach($bloglist as $blog)

                        <tr>

                            <td><img src="{{ URL::asset($blog->image) }}" height="35px" alt="{{$blog->title}}"> {{$blog->title}}</td>

                            <td>{{ $blog->created_at }}</td>

                            <td class="short-text-blog">{{ $blog->text }}</td>

                            <td>{{ $blog->users->name }}</td>

                            <td><a href="/admin/blog/edit/{{ $blog->id }}">Edit</a> &nbsp; <a href="/admin/blog/delete/{{ $blog->id }}">Delete</a></td>

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
        $( document ).ready(function() {
          $(".short-text-blog").each(function() {
              var lengthtrim = 120;
              if ($(this).text().length > lengthtrim) {
                  $(this).text($(this).text().substr(0, lengthtrim));
                  $(this).append('...');
              }
          });
        });

    </script>

@endsection

