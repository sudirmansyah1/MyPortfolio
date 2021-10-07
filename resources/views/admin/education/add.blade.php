@extends('admin.master')

@section('title', "Add Education")

@section('content')
    <div class="row">
        <div class="col-12">
        <a href="/admin/education" class="btn btn-primary" style="margin-bottom:20px;">Back</a>
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
                <form action="/admin/education/add/process" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="institute">Institute:</label>
                        <input type="text" class="form-control" placeholder="Enter Institute" id="institute" name="institute">
                    </div>
                    <div class="form-group">
                        <label for="from_date">From Date:</label>
                        <input type="text" class="form-control date-year" placeholder="Enter From Date" id="from_date" name="from_date">
                    </div>
                    <div class="form-group">
                        <label for="end_date">End Date:</label>
                        <input type="text" class="form-control date-year" placeholder="Enter End Date" id="end_date" name="end_date">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>    
          
        </div>
        <!-- /.row -->
    </div>
    
@endsection

@section('custom_js')
 <script src="{{ URL::asset('AdminLTE/plugins/cleave/cleave.min.js') }}"></script>
<script>
    var cleave = new Cleave('.date-year', {
        date: true,
        datePattern: ['Y']
    });
</script>

@endsection