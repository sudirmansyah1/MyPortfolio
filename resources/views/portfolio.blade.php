@extends('master')

@section('page_title', "Recent Works")

@section('hero_title', "RECENT WORKS")

@section('master_content')
<section class="body-portfolio">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                @foreach($portfolio as $pf)
                <div class="col mt-3">
                    
                    <div class="rounded-5  h-100" style="background-image: url('{{ URL::asset($pf->project_image) }}'); background-size: 120% auto;" class="lazy" data-bg="{!!URL::asset($pf->project_image)!!}">
                        <div class="filter-card h-100">
                        <a href="{{$pf->project_link}}">
                            <div class="card card-cover overflow-hidden text-white shadow-lg" style="background: rgba(0,0,0,0);">
                                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">{{$pf->project_name}}</h2>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="me-auto">
                                        <img src="{{ URL::asset('assets/img/sudirmansyah.jpg'); }}" class="lazy" data-src="{!! URL::asset('assets/img/sudirmansyah.jpg'); !!}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                        </li>
                                        <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                        <!-- <small>Earth</small> -->
                                        </li>
                                        <li class="d-flex align-items-center">
                                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                                        <small><span class="badge bg-success">{{$pf->project_code}}</span></small>
                                        </li>
                                    </ul>
                                    </div>
                            </div>    
                        </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
   
@endsection