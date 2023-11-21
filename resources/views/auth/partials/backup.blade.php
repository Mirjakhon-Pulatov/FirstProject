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

                        <a href="{{ route('export_database') }}" type="button" class="btn btn-outline-primary waves-effect waves-light mb-4">Создать новую резервную копию</a>
                        <table id="datatable" class="table table-bordered table-hover dt-responsive wrap w-100 mt-4">
                            <thead>
                                <tr>
                                    <th style="text-align: center; vertical-align: middle">Время копирования</th>
                                    <th style="text-align: center; vertical-align: middle">Размер файла</th>
                                    <th style="text-align: center; vertical-align: middle">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach($backups as $backup)
                                <tr>
                                    <td style="text-align: center; vertical-align: middle">{{ $backup->time_name }}</td>
                                    <td style="text-align: center; vertical-align: middle">{{ $backup->size }}</td>
                                    <td style="text-align: center; vertical-align: middle">
                                        <a style="margin-right: 10px;" title="Скачать файл" href="{{ route('download_database', $backup->time_name) }}"  class="btn btn-outline-primary"><i class="bx bxs-download"></i>
                                        </a>
                                        <button title="Удалить файл" onclick="OpenModalDelete( '{{ $backup->id }}', '{{ $backup->time_name }}' )" type="button" class="btn btn-outline-danger waves-effect waves-light">
                                            <i class="bx bxs-trash"></i>
                                        </button>
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
<!-- sample modal content -->
<div id="DELETE_MODAL" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Вы уверены, что хотите удалить элемент?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="m-2 d-inline-block" action="{{ route('delete_backups') }}" method="POST">
                @csrf
                @method('DELETE')
                <input id="delete_id" type="hidden" name="backup_id" value="">
                <div class="modal-body">
                    <div class="text-end">
                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Отмена
                        </button>
                        <button type="submit" class="btn btn-danger waves-effect waves-light">Удалить</button>
                    </div>
                </div>


            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
    $(document).ready(function() {
        $('#files-table').DataTable();
    });

    function OpenModalDelete(backup_id, time_name) {

        $('#DELETE_MODAL').modal('show');
        $('#deletetarget').text(time_name);
        $("#delete_id").val(backup_id);
    }

</script>
@endsection
