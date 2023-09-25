@extends('user.layouts.master')
@section('content')
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
