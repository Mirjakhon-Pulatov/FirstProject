@extends('auth.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Создать новые</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Создать новый проект</h4>
                            <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <label for="name" class="col-form-label col-lg-2"><b>Название проекта:</b> </label>
                                    <div class="col-lg-10">
                                        <input type="text" required id="name" name="name" class="form-control"
                                               placeholder="Enter Project Name...">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="type" class="col-form-label col-lg-2"><b>Тип проекта:</b> </label>
                                    <div class="col-lg-10">
                                        <input type="text" required id="type" name="type" class="form-control"
                                               placeholder="Enter Project Type...">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="short_desc" class="col-form-label col-lg-2"><b>Краткое описание:</b>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="text" required id="short_desc" name="short_desc"
                                               class="form-control"
                                               placeholder="Enter Short Description...">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="link" class="col-form-label col-lg-2"><b>Ссылка:</b> </label>
                                    <div class="col-lg-10">
                                        <input type="text" required id="link" name="link" class="form-control"
                                               placeholder="Enter Link...">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="link_title" class="col-form-label col-lg-2"><b>Заголовок ссылки:</b>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="text" required id="link_title" name="link_title"
                                               class="form-control" placeholder="Enter Link Title...">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="body" class="col-form-label col-lg-2"><b>Описание проекта</b>: </label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" required id="long_desc" name="long_desc"
                                                  rows="15"></textarea>
                                    </div>
                                </div>


                                <div class="row mb-4 ">
                                    <label class="col-form-label col-lg-2"><b>Прикрепленные файлы:</b></label>
                                    <div class="col-lg-10  ">

                                        <label>
                                            <input type="file" required class="form-control-file"
                                                   name="image"/>
                                        </label>

                                    </div>
                                </div>


                                <div class="row justify-content-end border-blue-300">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Создать проект</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
@endsection


