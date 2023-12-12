@extends('adminPanel.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Genel Hakkımızda Ayarları</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Resim</label>
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
                                </div>
                                <form action="/panel/homeAbout_upload" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 mt-5">
                                            <label class="form-label">Resim Yükle</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control" type="file" name="image">
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="col-sm-12" style="text-align-last: end">
                                                <button type="submit" class="btn btn-primary">Kaydet</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form action="/panel/update_settings" method="post">
                                    @csrf
                                    <div class="mb-3 mt-5">
                                        <label class="form-label" style="color: #000;">Türkçe</label>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Ana Başlık</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="title_1_tr" value="{{$settings['title_1_tr']}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Açıklama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="desc_1_tr" value="{{$settings['desc_1_tr']}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Alt Başlık 1</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="title_2_tr" value="{{$settings['title_2_tr']}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Açıklama 1</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="desc_2_tr" value="{{$settings['desc_2_tr']}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Alt Başlık 2</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="title_3_tr" value="{{$settings['title_3_tr']}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Açıklama 2</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="desc_3_tr" value="{{$settings['desc_3_tr']}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Alt Başlık 3</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="title_4_tr" value="{{$settings['title_4_tr']}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Açıklama 3</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="desc_4_tr" value="{{$settings['desc_4_tr']}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 mt-5">
                                        <label class="form-label" style="color: #000;">İngilizce</label>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Ana Başlık</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="title_1_en" value="{{$settings['title_1_en']}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Açıklama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="desc_1_en" value="{{$settings['desc_1_en']}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Alt Başlık 1</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="title_2_en" value="{{$settings['title_2_en']}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Açıklama 1</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="desc_2_en" value="{{$settings['desc_2_en']}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Alt Başlık 2</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="title_3_en" value="{{$settings['title_3_en']}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Açıklama 2</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="desc_3_en" value="{{$settings['desc_3_en']}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Alt Başlık 3</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="title_4_en" value="{{$settings['title_4_en']}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Açıklama 3</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="desc_4_en" value="{{$settings['desc_4_en']}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-12" style="text-align-last: end">
                                            <button type="submit" class="btn btn-primary">Kaydet</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
