@extends('master')

@section('page_title', "Resume")

@section('hero_title', "RESUME")

@section('master_content')
    <section class="body-resume">
      <div class="EducationExperience">
        <div class="container">
            <div class="row">
                <div class="col-6 Education-Experience">
                    <li class='title'>Education</li>
                    <div class="Education">
                        @foreach($education as $edu)
                        <div class="card bg-dark text-white">
                            <div class="card-body"><li class='date'>{{$edu->from_date}} - {{$edu->end_date}} </li>
                            <b>{{$edu->institute}} </b></div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-6 Education-Experience">
                    <li class='title'>Experience</li>
                    <div class="Experience">
                        @foreach($experience as $exp)
                        <div class="card bg-dark text-white">
                            <div class="card-body">
                                <li class='date'>{{$exp->from_date}} - {{$exp->end_date}}</li>
                                <b>{{$exp->company}}</b> - <span>{{$exp->position}}</span>
                                <p>{!!$exp->description!!}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
      </div>
      <div class="skills">
        <div class="container">
          <li class='title'>Skills</li>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2">
          @foreach($skills as $sk)
            <div class="col mt-6">
              <b>{{$sk->skill_name}} </b>
              <div class="progress progress-length">
                <div class="progress-bar progress-bar-striped {!! $sk->color ?? 'bg-primary' !!}" style="width:{!!$sk->percent!!}%;"></div>
              </div>
            </div>
          <!-- <br> -->

          @endforeach
          
          </div>
        </div>
      </div>
    </section>
   
@endsection