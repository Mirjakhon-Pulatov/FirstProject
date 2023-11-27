@extends('auth.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Edit </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Edit Project</h4>
                            <form action="{{ route('project.update', $projects->id) }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')


                                <div class="row mb-4">
                                    <label for="name" class="col-form-label col-lg-12"> <b>Название проекта:</b>
                                    </label>
                                    <div class="col-lg-12">
                                        <input type="text" required id="name" name="name" class="form-control"
                                               value="{{ $projects->name }}" placeholder="Enter Project Name...">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="type" class="col-form-label col-lg-12"><b>Тип проекта:</b> </label>
                                    <div class="col-lg-12">
                                        <input type="text" required id="type" name="type" class="form-control"
                                               value="{{ $projects->type }}" placeholder="Enter Project Type...">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="short_desc" class="col-form-label col-lg-12"><b>Краткое описание:</b>
                                    </label>
                                    <div class="col-lg-12">
                                        <input type="text" required id="short_desc" name="short_desc"
                                               value="{{ $projects->short_desc }}"
                                               class="form-control" placeholder="Enter Short Description...">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="link" class="col-form-label col-lg-12"><b>Ссылка:</b> </label>
                                    <div class="col-lg-12">
                                        <input type="text" required id="link" name="link" class="form-control"
                                               value="{{ $projects->link }}" placeholder="Enter Link...">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="link_title" class="col-form-label col-lg-12"><b>Заголовок ссылки:</b>
                                    </label>
                                    <div class="col-lg-12">
                                        <input type="text" required id="link_title" name="link_title"
                                               class="form-control"
                                               value="{{ $projects->link_title }}" placeholder="Enter Link Title...">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="long_desc" class="col-form-label col-lg-12"><b>Описание проекта</b>:
                                    </label>
                                    <div class="col-lg-12">
                                        <textarea class="form-control" required id="long_desc" name="long_desc"
                                                  rows="15">{{ $projects->name }}</textarea>
                                    </div>
                                </div>


                                <div class="row mb-4 ">
                                    <label class="col-form-label col-lg-12"><b>Прикрепленные файлы:</b></label>

                                    <div class="col-lg-12 d-flex  flex-column">
                                        <img src="{{ asset('auth/uploads/project/' . $projects->image) }}" alt=""
                                             style="width: 400px; height: 300px;">
                                        <label class="mt-4">
                                            <input type="file" class="form-control-file"
                                                   name="image"/>
                                        </label>
                                    </div>

                                </div>

                                <div class="row justify-content-end border-blue-300">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Информация о контента</h4>
                            <p><b>Создано:</b> {{ $projects->created_at }}</p>
                            <p><b>Обновлено:</b> {{ $projects->updated_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
@endsection

