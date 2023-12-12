@extends('adminPanel.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Projeler</h4>
                            <a href="/panel/proje_olustur" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-plus"></i></a>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                <tr>
                                    <th><strong>Proje Adı</strong></th>
                                    <th><strong>Yayınla</strong></th>
                                    <th><strong>Tamamlandı</strong></th>
                                    <th><strong></strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->title_tr}}</td>
                                            <td><input type="checkbox" class="form-check-input" id="seen{{$post->id}}" onclick="showPost({{$post->id}})" {{ $post->seen == 1 ? "checked" : "" }}></td>
                                            <td><input type="checkbox" class="form-check-input" id="completed{{$post->id}}" onclick="completedPost({{$post->id}})" {{ $post->completed == 1 ? "checked" : "" }}></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="/panel/projeler/{{$post->id}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-eye"></i></a>
                                                    <a href="/panel/delete_proje/{{$post->id}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showPost(id) {
            var checked = $('#seen' + id).is(':checked');
            if (checked) {
                var url = '/panel/showPost/' + id;
            } else {
                var url = '/panel/unshowPost/' + id;
            }
            $.ajax({
                url: url,
                type: "get"
            })
        }

        function completedPost(id) {
            var checked = $('#completed' + id).is(':checked');
            if (checked) {
                var url = '/panel/completed/' + id;
            } else {
                var url = '/panel/unCompleted/' + id;
            }
            $.ajax({
                url: url,
                type: "get"
            })
        }
    </script>

@endsection
