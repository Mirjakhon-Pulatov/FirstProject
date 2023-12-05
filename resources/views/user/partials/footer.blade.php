<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 p-2 px-sm-3 px-md-5" >
    <div class="row pt-5" data-aos="fade-up"
         data-aos-duration="1500">
        <div class="col-lg-3 col-md-6 ">
            <a href="{{ route('index') }}" class="navbar-brand">
{{--                <h1 class="m-0 mt-n2 text-white display-4">Bizzone</h1>--}}
            </a>
            <p>При полном или частичном использовании материала, источник сайта должен быть указан.</p>
            <h6 class="text-uppercase text-white py-2">Mы в социальных сетях</h6>
            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-3">
            <h4 class=" text-white mb-4 mr-2">Контактная информация</h4>
            <p></p>
            <p><i class="fa fa-map-marker-alt text-white mr-2"></i>город Бухара, ул. И.Каримов 6</p>
            <p><i class="fa fa-phone-alt text-white mr-2"></i>+99899 700-83-60</p>
            <p><i class="fa fa-envelope text-white mr-2"></i>uzbizzone@gmail.com</p>
        </div>
        <div class="col-lg-3 col-md-6 mt-3">
            <h4 class=" text-white mb-4">Часто посещаемые страницы</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white-50 mb-2" href="{{ route('index') }}"><i class="fa fa-angle-right text-white mr-2"></i>Главная</a>
                <a class="text-white-50 mb-2" href="{{ route('about') }}"><i class="fa fa-angle-right text-white mr-2"></i>О нас</a>
                <a class="text-white-50 mb-2" href="{{ route('service') }}"><i class="fa fa-angle-right text-white mr-2"></i>Услуги</a>
                <a class="text-white-50 mb-2" href="{{ route('project') }}"><i class="fa fa-angle-right text-white mr-2"></i>Наши работы</a>
                <a class="text-white-50 mb-2" href="{{ route('contact') }}"><i class="fa fa-angle-right text-white mr-2"></i>Контакты</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-3">
            <h4 class=" text-white mb-4">Оставить заявку</h4>
            <p class="mb-4">Свяжитесь с нами, если у вас есть вопросы или комментарии</p>
            <div class="w-100 mb-3">
                <div class="input-group">
                    <div class="input-group-append">
                        <a href="{{ route('contact') }}" class="btn btn-outline-primary px-6">Оставить заявку</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="mt-5 mb-4 text-center text-white-50">&copy; <a href="#"> 2023 Bizzone.uz</a>. Bсе права защищены.</p>
</div>

<!-- Footer End -->
