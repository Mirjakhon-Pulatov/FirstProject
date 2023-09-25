@extends('user.layouts.master')
@section('content')


    {{--<!-- Page Header Start -->
    <div class="page-header  bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase ">О нас</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="{{ route('index') }}">Главная</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">О нас</h6>
        </div>
    </div>
    <!-- Page Header Start -->--}}


    <!-- About Start -->
    <div class="container-fluid pt-5" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="display-4 text text-center mb-5">О нас</h1>
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <img style="width: 800px;"  class="img-fluid mb-lg-0" src="{{ asset('user/assets/img/img_1.jpg') }}" alt="">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 text-uppercase mb-2">OOO Bizzone Group</h1>
                    <p class="text-muted">ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ (ООО)</p>
                    <h5 class="text-uppercase text-primary mb-3 p-0">Основная деятельность — компания, которая создает веб-сайты, мобильные приложения, CRM и ERP систем и десктопных приложений.</h5>
                    <p class="mb-4 text-justify">Мы помогаем решать проблемы в сфере IT. От разработки программного обеспечения до любой сложности, мы создаем готовые приложения, информационные системы для предприятий и государственных учреждений, порталы, личные учетные записи и мобильные приложения.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- About Info Start -->
    <div class="container-fluid py-5 mt-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light rounded mb-4 px-5" style="height: 150px;">
                        <i class="fa fa-3x fa-location-dot fa-beat text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-uppercase">Адрес </h5>
                            <p class="m-0">город Бухара, ул. И.Каримов 6</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light rounded mb-4 px-5" style="height: 150px;">
                        <i class="fa fa-3x fa-envelope-open fa-bounce text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-uppercase">Почта </h5>
                            <p class="m-0">uzbizzone@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light rounded mb-4 px-5" style="height: 150px;">
                        <i class="fas fa-3x fa-phone-alt fa-shake text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-uppercase">Телефон </h5>
                            <p class="m-0">+99891 403-07-05   +99899 700-83-60</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Info End -->
@endsection
