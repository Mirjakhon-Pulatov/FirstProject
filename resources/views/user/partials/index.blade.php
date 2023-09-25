@extends('user.layouts.master')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 px-0" style="margin-bottom: 90px;">
        <div class="row mx-0 align-items-center">
            <div class="col-lg-6 px-md-5 text-center text-lg-left">
                <h1 class="display-2 text-uppercase mb-3" data-aos="fade-up" data-aos-duration="1500"> Bizzone group</h1>
                <p class="text-dark mb-4 text-justify" data-aos="fade-up" data-aos-duration="1500"><b>OOO Bizzone Groupe</b> – IT-компания, которая занимается разработкой комплексных программных решений для автоматизации бизнес-процессов, информационных порталов и база данных.
                    Мы можем разработать программный продукт для вашей компании, выполнить проект по цифровой трансформации бизнеса, создать мобильное приложение. За период своей работы мы успешно выполнили проекты для компаний из разных сфер бизнеса, от промышленности до медицины. Мы разработали решения, которые используют стоматологические клиники, образовательные учреждения и т.д.</p>
            </div>
            <div class="col-lg-6 px-0 text-right" data-aos="fade-up" data-aos-duration="1500">
                <img class="img-fluid mt-5 mt-lg-0" src="{{ asset('user/assets/img/header.png') }}" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


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
                    <p class="text-muted ">ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ (ООО)</p>
                    <h5 class="text-uppercase text-primary mb-3 p-0">Основная деятельность — компания, которая создает веб-сайты, мобильные приложения, CRM и ERP систем и десктопных приложений.</h5>
                    <p class="mb-4 text-justify">Мы помогаем решать проблемы в сфере IT. От разработки программного обеспечения до любой сложности, мы создаем готовые приложения, информационные системы для предприятий и государственных учреждений, порталы, личные учетные записи и мобильные приложения.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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


    <!-- Portfolio Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Наши Проекты</h1>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-duration="3000">
                @foreach($projects as $project)
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item">
                        <div style="width: 330px; height: 250px;" class="position-relative rounded overflow-hidden mb-2 mt-4">
                            <img class="img w-100 h-100" src="{{ asset('storage/'. $project->image ) }}" alt="">
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



    <!-- Contact Start -->
    <div class="container-fluid py-5 px-0" data-aos="fade-up"
         data-aos-duration="2000">
        <h1 class="display-4 text-uppercase text-center mt-5 mb-5">Контакты</h1>
        <p class="text-center mt-5 mb-5 h-2" style="line-height: 40px; font-size: 25px;">
            Позвоните по номерам <a href="tel: +998 (91) 403-07-05">+998 (91) 403-07-05</a>,&nbsp;<a
                href="tel: +998 (99) 700-83-60">+998 (99) 700-83-60</a>
            <br> для соединения с менеджером (с 9:00 до 18:00 кроме вск.)</p>
        <div class="row mx-0">
            <div class="col-12 px-0" style="height: 500px;">
                <div class="position-relative h-100">
                    <iframe class="position-relative w-100 h-100 mt-3"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12266.245305637889!2d64.4307528!3d39.7719566!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfe0a704ea500c09!2z0JrQvtC80L_QsNC90LjRjyAiQml6em9uZSBHcm91cCI!5e0!3m2!1sru!2s!4v1603886506417!5m2!1sru!2s"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="row mx-0 justify-content-center" style="margin-top: -200px;">
            <div class="col-lg-6 col-md-8 col-sm-10 px-0">
                <div class="contact-form bg-white rounded p-5">
                    <div id="success"></div>

                    <form action="{{ route('send_message') }}" method="POST">
                        @csrf
                        <div class="form-row mb-3">
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="text" name="name" class="form-control bg-light border-0 p-4" id="name"
                                           placeholder="Ф.И.О." required="required"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="email" name="email" class="form-control bg-light border-0 p-4"
                                           id="email" placeholder="Почта" required="required"/>
                                </div>
                            </div>
                        </div>
                        <div class="control-group mb-3">
                            <input type="text" name="subject" class="form-control bg-light border-0 p-4" id="subject"
                                   placeholder="Заголовок сообщения" required="required"/>
                        </div>
                        <div class="control-group mb-3">
                            <textarea name="message" class="form-control bg-light border-0 py-3 px-4" rows="5"
                                      id="message" placeholder="Расскажите, чем мы можем вам помочь!" required="required"></textarea>
                        </div>
                        <div class="text-center">
                            {{--<button class="btn btn-primary text-uppercase py-3 px-5" type="submit">
                                Send Message
                            </button>--}}
                            <button type="submit" class="btn btn-primary text-uppercase py-3 px-3">
                                <span class="fa-solid fa-envelope fa-flip" aria-hidden="true"></span> Отправить!
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
