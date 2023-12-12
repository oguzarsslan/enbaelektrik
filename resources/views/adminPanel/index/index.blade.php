@extends('adminPanel.layouts.master')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Genel Ayarlar</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="/panel/update_settings" method="post">
                                @csrf
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Site Başlığı TR</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Site Başlığı TR Giriniz" name="site_title_tr" value="{{$settings['site_title_tr']}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Site Başlığı EN</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Site Başlığı EN Giriniz" name="site_title_en" value="{{$settings['site_title_en']}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Telefon</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Telefon Giriniz" name="telefon" value="{{$settings['telefon']}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">E-posta</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="E-posta Adresi Giriniz" name="mail" value="{{$settings['mail']}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Fax</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Fax Giriniz" name="fax" value="{{$settings['fax']}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Adres</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Adres Giriniz" name="acik_adres" value="{{$settings['acik_adres']}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Twitter</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Twitter Adresi Giriniz" name="twitter" value="{{$settings['twitter']}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Youtube</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Youtube Adresi Giriniz" name="youtube" value="{{$settings['youtube']}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Linkedin</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Linkedin Adresi Giriniz" name="linkedin" value="{{$settings['linkedin']}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Facebook</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Facebook Adresi Giriniz" name="facebook" value="{{$settings['facebook']}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Instagram</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Instagram Adresi Giriniz" name="instagram" value="{{$settings['instagram']}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Harita Bilgisi</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Iframe Giriniz" name="iframe" value="{{$settings['iframe']}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Anahtar Kelimeler</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Anahtar Kelimeler Giriniz" name="keywords" value="{{$settings['keywords']}}">
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
