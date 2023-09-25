@extends('auth.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Сообщения</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 mt-4">
                                <thead>
                                <tr>
                                    <th style="text-align: center; vertical-align: middle">No</th>
                                    <th style="text-align: center; vertical-align: middle">Name</th>
                                    <th style="text-align: center; vertical-align: middle">E-mail</th>
                                    <th style="text-align: center; vertical-align: middle">Subject</th>
                                    <th style="text-align: center; vertical-align: middle">Message</th>
                                    <th style="text-align: center; vertical-align: middle">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($messages as $message)
                                    <tr>
                                        <td style="text-align: center; vertical-align: middle">{{ $message->id }}</td>
                                        <td style="text-align: center; vertical-align: middle">{{ $message->name }}</td>
                                        <td style="text-align: center; vertical-align: middle">{{ $message->email }}</td>
                                        <td style="text-align: center; vertical-align: middle">{{ $message->subject }}</td>
                                        <td style="text-align: center; vertical-align: middle">{{ $message->message }}</td>
                                        <td style="text-align: center; vertical-align: middle">
                                            <form action="{{ route('delete_message', $message->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">
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
