@extends('master')





@section('page_title', "About")



@section('hero_title', "ABOUT")



@section('master_content')

    <section class="body-about">

      <div class="About">

        <div class="container">

            <div class="row">

                <div class="col-6 About-Col">

                    <center><img class="itsme about-img lozad" data-src="{!! URL::asset('assets/img/sudirmansyah.jpg'); !!}" alt="Sudirmansyah"></center>

                </div>

                <div class="col-6 About-Col">

                    <table cellspacing="0" cellpadding="0" style="margin-bottom: 30px;">

                        <tr>

                            <td style="width: 150px;"><b>Name: </b></td>

                            <td><span>Sudirmansyah</span></td>

                        </tr>

                        <tr>

                            <td style="width: 150px;"><b>Profile: </b></td>

                            <td><span>Web Developer</span></td>

                        </tr>

                        <tr>

                            <td style="width: 150px;"><b>Birthday: </b></td>

                            <td><span>6 December 1999</span></td>

                        </tr>

                        <tr>

                            <td style="width: 150px;"><b>Phone: </b></td>

                            <td><span>+62 857-1294-1083</span></td>

                        </tr>

                        <tr>

                            <td style="width: 150px;"><b>City: </b></td>

                            <td><span>Jakarta, Indonesia</span></td>

                        </tr>

                        <tr>

                            <td style="width: 150px;"><b>Email: </b></td>

                            <td><span>sudirmansyah0612@gmail.com</span></td>

                        </tr>

                    </table>

                   

                   <b>About Me:</b>

                   {{-- <p>Saya merupakan seorang yang baru saja menyelesaikan masa studinya di Universitas Mercu Buana dengan program studi Teknik Informatika. Menjadi mahasiswa membuat saya belajar banyak hal yang diperlukan dalam dunia kerja. Ilmu-ilmu yang saya dapatkan selama kegiatan belajar mengajar membuat saya mendapatkan banyak ilmu khususnya di dunia programming. Selama di bangku kuliah saya cukup aktif dalam berorganisasi baik itu tingkat angkatan maupun fakultas. Kecintaan saya terhadap teknologi menjadikan saya orang yang suka mempelajari suatu hal khususnya di dunia program secara self learning, karena kesukaan saya dalam mempelajari suatu hal tersebut juga membuat saya menjadi orang yang problem solver.</p> --}}
                   <p class="text-justify">I am a recent graduate with a degree in Informatics Engineering from Mercu Buana University. The knowledge that I gained during my study activities in college made me gain a lot of knowledge for my career, especially in programming. During my time in college, I was active in organizing both at the generation and faculty levels. My love of technology makes me a person who likes to learn, especially in programming by self-learning.</p>




                </div>

            </div>

        </div>

      </div>

      

    </section>

@endsection