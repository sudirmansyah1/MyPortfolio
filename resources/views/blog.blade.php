@extends('master')

@section('page_title', "Blog")

@section('hero_title', "Blog")

@section('master_content')

    <section class="body-blog">
        <div class="container">
          @foreach ($bloglist as $blog)
            <a href="/blog/view/{{ $blog->id }}">
              <div class="card">
                  <img class="card-img-top card-img-custom" src="{{ $blog->image }}" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">{{ $blog->title }}</h4>
                    <div style="margin-bottom:15px;">
                      <span class="badge bg-primary">{{ $blog->users->name }}</span> <span class="badge bg-success">{{ $blog->created_at }}</span>
                    </div>
                    <p class="card-text card-text-trim">{{ $blog->text }}</p>
                  </div>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    </section>

@endsection