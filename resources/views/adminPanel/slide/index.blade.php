@extends('adminPanel.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Slide Ayarları</h4>
                        </div>
                        <div class="col-12 card-body">
                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label">Resim(ler)</label>
                                </div>
                                @foreach($slides as $slide)
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-2" style="text-align: -webkit-center;">
                                                    <div class="row">
                                                        @foreach($slide->images as $image)
                                                            <div class="col-12">
                                                                <img src="{{ asset('images/' . $image->image) }}" style="width: 200px; height: 200px; object-fit: fill;">
                                                            </div>
                                                        @endforeach
                                                        <div class="col-12">
                                                            <a href="/panel/delete_slide/{{$slide->id}}" class="btn btn-danger shadow btn-xs sharp mt-3"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="mb-3">
                                                    <label class="form-label" style="color: #000;">Türkçe</label>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">{{$slide->title_tr}}</label>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">{{$slide->desc_tr}}</label>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" style="color: #000;">İngilizce</label>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">{{$slide->title_en}}</label>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">{{$slide->desc_en}}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <form action="/panel/upload_slide" method="post" enctype="multipart/form-data" style="margin-top: 10px;">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 mt-5">
                                        <label class="form-label">Slide Yükle</label>
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
                                        <input class="form-control" type="text" name="title_tr" placeholder="Başlık">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="">
                                        <input class="form-control" type="text" name="desc_tr" placeholder="Açıklama">
                                    </div>
                                </div>
                                <div class="mb-3 mt-5">
                                    <label class="form-label">İngilizce Alanı</label>
                                </div>
                                <div class="mb-3 row">
                                    <div class="">
                                        <input class="form-control" type="text" name="title_en" placeholder="Başlık">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="">
                                        <input class="form-control" type="text" name="desc_en" placeholder="Açıklama">
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

@endsection
