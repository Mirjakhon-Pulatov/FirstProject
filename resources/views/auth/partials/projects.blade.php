@extends('auth.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Проекты</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <a href="{{ route('project.create') }}" type="button" class="btn btn-outline-primary waves-effect waves-light mb-4">Создать проект</a>
                            <table id="datatable" class="table table-bordered table-hover dt-responsive wrap w-100 mt-4">
                                <thead>
                                <tr>
                                    <th style="text-align: center; vertical-align: middle">No</th>
                                    <th style="text-align: center; vertical-align: middle">Image</th>
                                    <th style="text-align: center; vertical-align: middle">Name</th>
                                    <th style="text-align: center; vertical-align: middle">Type</th>
                                    <th style="text-align: center; vertical-align: middle;width: 182px;">Short_desc</th>
                                    <th style="text-align: center; vertical-align: middle">Link_title</th>
                                    <th style="text-align: center; vertical-align: middle">Action</th>
                                </tr>
                                </thead>

                                <tbody>

                                @foreach($projects as $project)
                                <tr>
                                    <td style="text-align: center; vertical-align: middle">{{ $project->id }}</td>
                                    <td style="text-align: center; vertical-align: middle">
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="" style="width: 200px; height: 150px">
                                    </td>
                                    <td style="text-align: center; vertical-align: middle">{{ $project->name }}</td>
                                    <td style="text-align: center; vertical-align: middle">{{ $project->type }}</td>
                                    <td style="text-align: center; vertical-align: middle">{{ $project->short_desc }}</td>
                                    <td style="text-align: center; vertical-align: middle">{{ $project->link_title }}</td>
                                    <td style="text-align: center; vertical-align: middle">
                                        <a href="{{ route('project.edit', $project->id) }}" type="submit" class="btn btn-warning" title="Edit">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <form action="{{ route('project.destroy', $project->id) }}" method="POST" class="mt-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" title="Delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->



        </div> <!-- container-fluid -->
    </div>
@endsection
