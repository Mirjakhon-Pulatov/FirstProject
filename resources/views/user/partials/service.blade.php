@extends('user.layouts.master')
@section('content')

    <!-- Services Start -->
    <div class="container-fluid py-5 mt-5" data-aos="fade-up" data-aos-duration="2000">
        <div class="container d-flex-row justify-content-center align-content-center align-items-center">
            <h1 class="display-4 text text-center mb-5">Наши услуги</h1>

            <div class="row display-flex justify-content-center">

                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded" style="display: flex !important;flex-direction: column;flex-wrap: nowrap;align-content: center;justify-content: center;align-items: center;">
                        <i class="fa fa-4x fa-globe fa-fade text-primary mb-4"></i>
                        <h4 class="text-center mb-4">Разработка  <span class="d-block text-body">веб сайтов</span></h4>
                        <p class="m-2 align-text-bottom">(различных сложностей)</p>
                    </div>
                </div>

                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded" style="display: flex !important;flex-direction: column;flex-wrap: nowrap;align-content: center;justify-content: center;align-items: center;">
                        <i class="fa fa-4x fa-gear fa-spin text-primary mb-4"></i>
                        <h4 class="text-center mb-4">Продвижения  <span class="d-block text-body">веб сайтов</span></h4>
                        <p class="m-2 align-text-bottom">(SEO, Оптимизация)</p>
                    </div>
                </div>

                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded" style="display: flex !important;flex-direction: column;flex-wrap: nowrap;align-content: center;justify-content: center;align-items: center;">
                        <i class="fa fa-4x fa-robot fa-bounce text-primary mb-4"></i>
                        <h4 class="text-center mb-4">Разработка  <span class="d-block text-body">телеграм ботов</span></h4>
                        <p class="m-2 align-text-bottom">(Telegram, Plus)</p>
                    </div>
                </div>
            </div>

            <div class="row mt-4 d-flex justify-content-center mb-5">
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded" style="display: flex !important;flex-direction: column;flex-wrap: nowrap;align-content: center;justify-content: center;align-items: center;">
                        <i class="fa fa-4x fa-database fa-flip text-primary mb-4"></i>
                        <h4 class="text-center mb-4">Базы данных <span class="d-block text-body">и системы автоматизации</span></h4>
                        <p class="m-2 align-text-bottom">(CMS, CRM, ERP)</p>
                    </div>
                </div>

                <div class="col-lg-3 mb-2 ">
                    <div class="service-item rounded" style="display: flex !important;flex-direction: column;flex-wrap: nowrap;align-content: center;justify-content: center;align-items: center;">
                        <i class="fa fa-4x fa-desktop fa-beat-fade text-primary mb-4"></i>
                        <h4 class="text-center mb-4">Разработка  <span class="d-block text-body">десктопных &nbsp; приложений</span></h4>
                        <p class="m-2 align-text-bottom">(SEO, Оптимизация)</p>
                    </div>
                </div>

                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded" style="display: flex !important;flex-direction: column;flex-wrap: nowrap;align-content: center;justify-content: center;align-items: center;">
                        <i class="fa-brands fa-4x fa-android fa-shake text-primary mb-4"></i>
                        <h4 class="text-center mb-4">Разработка  <span class="d-block text-body">мобильных <br> приложений</span></h4>
                        <p class="m-2 align-text-bottom">(Android)</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Services End -->
@endsection
