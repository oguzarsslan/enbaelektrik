@extends('adminPanel.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hakkımızda Ayarları</h4>
                        </div>
                        <div class="col-12 card-body">
                            <div class="row">
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
                            </div>
                            <form action="/panel/update_hakkimizda" method="post" enctype="multipart/form-data" style="margin-top: 10px;">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 mt-5">
                                        <label class="form-label">Resim Yükle</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="file" style="width: 300px;" name="images[]" multiple class="form-control" accept="image/*">
                                    </div>
                                </div>
                                <div class="mb-3 mt-5">
                                    <label class="form-label">Hakkımızda Türkçe</label>
                                </div>
                                <div class="mb-3 row">
                                    <div class="">
                                        <input class="form-control" type="text" name="hakkimizda_title_tr" value="{{$settings['hakkimizda_title_tr']}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="">
                                        <textarea id="ckeditor" name="hakkimizda_desc_tr">{!! $settings['hakkimizda_desc_tr'] !!}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 mt-5">
                                    <label class="form-label">Hakkımızda İngilizce</label>
                                </div>
                                <div class="mb-3 row">
                                    <div class="">
                                        <input class="form-control" type="text" name="hakkimizda_title_en" value="{{$settings['hakkimizda_title_en']}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="">
                                        <textarea id="ckeditor2" name="hakkimizda_desc_en">{!! $settings['hakkimizda_desc_en'] !!}</textarea>
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
