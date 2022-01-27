@extends("layouts.master")

@section("content")
<section class="content">
	<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data {{$res['modul']}}</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover" id="order">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Customer</th>
                                <th>Tujuan</th>
                                <th>Harga</th>
                                <th>Nama Penerima</th>
                                <th>Marketing</th>
                                <th>Deskripsi</th>
                                <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id='data'>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section("script")

@endsection