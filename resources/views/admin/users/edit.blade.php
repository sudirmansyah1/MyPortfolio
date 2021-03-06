@extends('admin.master')



@section('title', "Edit Users")



@section('content')

    <div class="row">

        <div class="col-12">

        <a href="/admin/users" class="btn btn-primary" style="margin-bottom:20px;">Back</a>

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

                @foreach($user as $u)

                <form action="/admin/users/edit/process" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <input type="hidden" name="id"  value="{{$u->id}}">

                    <div class="form-group">

                        <label for="name">Username:</label>

                        <input type="text" class="form-control" placeholder="Enter Username" id="name" value="{{$u->name}}" name="username">

                    </div>

                    <div class="form-group">

                        <label for="email">Email:</label>

                        <input type="email" class="form-control" placeholder="Enter email" id="email" value="{{$u->email}}" name="email">

                    </div>

                    <div class="form-group">

                        <label for="level">Level:</label>

                        <select class="form-control" id="level" name="level">

                            <option value="Management" @if($u->level == 'Managment') selected @endif >Management</option>

                            <option value="Admin"  @if($u->level == 'Admin') selected @endif >Admin</option>

                        </select>

                    </div>

                    <div class="form-group">

                        <label for="pwd">Password:</label>

                        <input type="text" class="form-control" placeholder="Enter password" id="pwd" name="password">

                    </div>

                    <div class="form-group">

                        <label for="pwd">Is Active?</label><br>

                        <div class="form-check-inline">

                            <label class="form-check-label">

                                <input type="radio" class="form-check-input" name="isActive" value="1" @if($u->isActive == '1') checked="1" @endif>Active

                            </label>

                        </div>

                        <div class="form-check-inline">

                            <label class="form-check-label">

                                <input type="radio" class="form-check-input" name="isActive" value="0" @if($u->isActive == '0') checked="1" @endif>Inactive

                            </label>

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="photo">Photo:</label>

                        <br>

                        @if (!is_null($u->photo))

                            <img class="lozad" data-src="{{ URL::asset($u->photo) }}" width="200px" alt="Sudirmansyah">

                            <input type="hidden" name="lastphoto" value="{{$u->photo}}">

                        @endif

                        <input type="file" class="form-control-file border" id="photo" name="photofile">

                    </div>

                    <br>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

                @endforeach

            </div>

        </div>    

          

        </div>

        <!-- /.row -->

    </div>

    

@endsection



