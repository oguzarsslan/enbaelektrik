@extends('adminPanel.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Proje Oluştur</h4>
                            <a href="/panel/projeler" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-chevron-left"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="/panel/proje_store" method="post" enctype="multipart/form-data" style="margin-top: 10px;">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 mt-3">
                                            <label class="form-label">Resim Yükle</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control" type="file" style="width: 300px;" name="images[]" multiple class="form-control" accept="image/*">
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
                                                <textarea id="ckeditor" name="body_tr"></textarea>
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
                                                <textarea id="ckeditor2" name="body_en"></textarea>
                                            </div>
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
