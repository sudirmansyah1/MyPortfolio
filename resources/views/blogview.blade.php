@extends('master')

@section('page_title')
  @foreach ($blogview as $blog)
  Blog :: {{ $blog->title }}
  @endforeach
@endsection

@section('hero_title')
  @foreach ($blogview as $blog)
  Blog - {{ $blog->title }}
  @endforeach
@endsection

@section('master_content')

    <section class="body-blog-view">
        <div class="container">
          @foreach ($blogview as $blog)
              <div class="card">
                  <img class="card-img-top" src="{{ $blog->image }}" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">{{ $blog->title }}</h4>
                    <div style="margin-bottom:15px;">
                      <span class="badge bg-primary">{{ $blog->users->name }}</span> <span class="badge bg-success">{{ $blog->created_at }}</span>
                    </div>
                    <p class="card-text text-justify">{!! $blog->text !!}</p>
                  </div>
              </div>
          @endforeach
        </div>
      </div>
    </section>

@endsection