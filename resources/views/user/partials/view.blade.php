@extends('user.layouts.master')
@section('content')

    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h5 class="display-4  text-start">{{ $vproject->name }}</h5>
            <p class="display-5 mt-4"><b class="text-primary">Тип проекта: </b>{{ $vproject->type }}</p>
            <p class="display-5"><b class="text-primary">Описание проекта: </b>{{ $vproject->short_desc }}</p>

            <div class="img mt-4">
                <img class="img-fluid" src="{{ asset('storage/' . $vproject->image) }}" alt="" style="width: 100%; height: 600px;">
            </div>

            <div class="mt-4">
                {{ html_entity_decode($vproject->long_desc)  }}
            </div>

            <p class="text-center mt-4">
                <a class="btn btn-outline-success text-end" target="_blank" href="https://{{ $vproject->link }}">Посмотреть</a>
            </p>

        </div>
    </div>

@endsection
