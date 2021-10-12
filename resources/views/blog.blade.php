@extends('master')

@section('page_title', "Blog")

@section('hero_title', "Blog")

@section('master_content')

    <section class="body-blog">
        <div class="container">
          @foreach ($bloglist as $blog)
            <a href="/blog/view/{{ $blog->id }}">
              <div class="card"  style="margin-bottom:25px;">
                  <img class="card-img-top card-img-custom" src="{{ URL::asset($blog->image) }}" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">{{ $blog->title }}</h4>
                    <div style="margin-bottom:15px;">
                      <span class="badge bg-primary">{{ $blog->users->name }}</span> <span class="badge bg-success">@if (is_null($blog->updated_at)) {{ $blog->created_at }} @else Last Change: {{ $blog->updated_at }} @endif </span>
                    </div>
                    <p class="card-text card-text-trim text-justify">{{ $blog->text }}</p>
                  </div>
              </div>
            </a>
          @endforeach
          {!! $bloglist->links('vendor.pagination.bootstrap-4') !!}
        </div>
      </div>
    </section>

@endsection