@extends('auth.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Настройки профиля</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="checkout-tabs">
                <div class="row">
                    <div class="col-md-6 col-sm-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-shipping" role="tabpanel"
                                         aria-labelledby="v-pills-shipping-tab">

                                        <div>
                                            <h4 class="card-title">Информация профиля</h4>
                                            <p class="card-title-desc">Обновите информацию профиля вашей учетной записи и адрес электронной почты.</p>

                                            <form action="{{route('profile.update', $user->id )}}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <div class="form-group row " >
                                                    <label class=" col-form-label"><b>Имя</b></label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control" name="name"
                                                               value="{{ $user->name }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row ">
                                                    <label for="email" class=" col-form-label"><b>Почта</b></label>
                                                    <div class="col-md-12">
                                                        <input type="email" class="form-control"
                                                               name="email"
                                                               value="{{ $user->email }}">
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-sm-6">
                                                        <div class="text-start">
                                                            <button type="submit"  class="btn btn-success">
                                                                <i class="fa-regular fa fa-floppy-disk"></i>
                                                                Сохранить изменения
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- end row -->
                    </div>

                    <div class="col-md-6 col-sm-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-shipping" role="tabpanel"
                                         aria-labelledby="v-pills-shipping-tab">

                                        <div>
                                            <h4 class="card-title">Обновить пароль</h4>
                                            <p class="card-title-desc text-justify">Убедитесь, что в вашей учетной записи используется длинный случайный пароль, чтобы оставаться в безопасности.</p>
                                            <form action="{{ route('profile.update_password', $user->id) }}" method="POST">
                                                @method('PATCH')
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-form-label"><b>Текущий пароль</b></label>
                                                    <div class="col-md-12">
                                                        <input required type="password" class="form-control" name="password" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="billing-email-address" class="col-form-label">
                                                        <b>Новый пароль</b>
                                                    </label>
                                                    <div class="col-md-12">
                                                        <input required type="password" class="form-control"
                                                               name="new_password"
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-sm-6">
                                                        <div class="text-start">
                                                            <button type="submit" href="" class="btn btn-success">
                                                                <i class="fa-regular fa fa-floppy-disk"></i> Сохранить изменения
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-sm-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-shipping" role="tabpanel"
                                         aria-labelledby="v-pills-shipping-tab">

                                        <div>
                                            <h4 class="card-title">Удалить аккаунта</h4>
                                            <p class="card-title-desc">Безвозвратно удалите свою учетную запись.</p>
                                                <div class="form-group row mb-4 text-justify">
                                                    <p class="text-justify">Как только ваша учетная запись будет удалена, все ее ресурсы и данные будут удалены безвозвратно. Прежде чем удалить свою учетную запись, пожалуйста, загрузите любые данные или информацию, которые вы хотите сохранить.</p>
                                                    <div class="col-md-10 mt-2">
                                                        <form action="{{ route('profile.destroy') }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa-regular fa fa-trash-alt"></i>
                                                                Удалить учетную запись
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection
