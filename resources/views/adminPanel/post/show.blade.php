@extends('adminPanel.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{$post->title_tr}} <br> {{$post->title_en}}</h4>
                            <div>
                                <a href="/panel/projeler" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-chevron-left"></i></a>
                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-eye"></i></a>
                                <a onclick="showUpdate()" id="back_button" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                <a href="/panel/delete_proje/{{$post->id}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                        <div class="col-12 card-body">
                            <div class="row" id="show_div">
                                <div class="mb-3">
                                    <label class="form-label">Resim(ler)</label>
                                </div>
                                @foreach($images as $image)
                                    <div class="col-2" style="text-align: -webkit-center;">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="{{ asset('images/' . $image->image) }}" style="width: 200px; height: 200px; object-fit: fill;">
                                            </div>
                                            <div class="col-12">
                                                <a href="/panel/delete_image/{{$image->id}}" class="btn btn-danger shadow btn-xs sharp mt-3"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="mb-3 mt-5">
                                    <label class="form-label">Türkçe</label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">{!! $post->body_tr !!}</label>
                                </div>
                                <div class="mb-3 mt-5">
                                    <label class="form-label">İngilizce</label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">{!! $post->body_en !!}</label>
                                </div>
                            </div>
                            <form class="d-none" id="update_form" action="/panel/proje_update/{{$post->id}}" method="post" enctype="multipart/form-data" style="margin-top: 10px;">
                                @csrf
                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Resim Yükle</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="file" style="width: 300px;" name="images[]" multiple class="form-control" accept="image/*">
                                    </div>
                                </div>
                                <div class="mb-3 mt-5">
                                    <label class="form-label">Türkçe Alanı</label>
                                </div>
                                <div class="mb-3 row">
                                    <div class="">
                                        <input class="form-control" type="text" name="title_tr" value="{{$post->title_tr}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="">
                                        <textarea id="ckeditor" name="body_tr">{!! $post->body_tr !!}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 mt-5">
                                    <label class="form-label">İngilizce Alanı</label>
                                </div>
                                <div class="mb-3 row">
                                    <div class="">
                                        <input class="form-control" type="text" name="title_en" value="{{$post->title_en}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="">
                                        <textarea id="ckeditor2" name="body_en">{!! $post->body_en !!}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-12" style="text-align-last: end;">
                                        <button type="submit" class="btn btn-primary" style="margin-right: 10px">Kaydet</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showUpdate() {
            $("#show_div").addClass("d-none");
            $("#back_button").addClass("d-none");
            $("#update_form").removeClass("d-none").addClass("d-block");
        }
    </script>
@endsection
