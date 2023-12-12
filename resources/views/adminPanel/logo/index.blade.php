@extends('adminPanel.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Logo Ayarları</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <table class="table table-responsive-md">
                                            <thead>
                                            <tr>
                                                <th style="width: 15%"></th>
                                                <th style="width: 30%"><strong>Yükle</strong></th>
                                                <th style="width: 40%"><strong>Varolan Logo</strong></th>
                                                <th style="width: 15%"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <form action="/panel/logo_upload/1" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <tr>
                                                    <td>Navbar</td>
                                                    <td>
                                                        <input class="form-control" type="file" style="width: 200px;" name="image">
                                                    </td>
                                                    <td>
                                                        @foreach($images as $image)
                                                            @if($image->type_id == 1)
                                                                <img src="{{ asset('images/' . $image->image) }}" style="width: 150px;">
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <button type="submit" class="btn btn-primary">Kaydet</button>
                                                    </td>
                                                </tr>
                                            </form>
                                            <form action="/panel/logo_upload/2" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <tr>
                                                    <td>Footer</td>
                                                    <td>
                                                        <input class="form-control" type="file" style="width: 200px;" name="image">
                                                    </td>
                                                    <td>
                                                        @foreach($images as $image)
                                                            @if($image->type_id == 2)
                                                                <img src="{{ asset('images/' . $image->image) }}" style="width: 150px;">
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <button type="submit" class="btn btn-primary">Kaydet</button>
                                                    </td>
                                                </tr>
                                            </form>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
