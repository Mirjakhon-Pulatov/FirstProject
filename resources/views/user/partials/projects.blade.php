@extends('user.layouts.master')
@section('content')
    <!-- Portfolio Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Наши Проекты</h1>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-duration="3000">
                @foreach($projects as $project)
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item">
                    <div style="width: 330px; height: 250px;" class="position-relative rounded overflow-hidden mb-2 mt-4">
                        <img class="img w-100 h-100" src="{{ asset('auth/uploads/project/'. $project->image ) }}" alt="">
                        <div class=" d-flex align-items-center justify-content-center">
                            <a class="portfolio-btn d-flex align-items-center justify-content-center text-decoration-none" href="{{ route('view', $project->id) }}">
                                <i class="fa fa-2x fa-eye text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Portfolio End -->
@endsection
