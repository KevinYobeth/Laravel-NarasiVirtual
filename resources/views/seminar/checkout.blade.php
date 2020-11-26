@extends('layouts.app')
@section('title', __('NARASI 2020 - Checkout'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 order-md-0 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0"><b>Seminar: How to take Expressive Photos</b></h6>
                        <small class="text-muted">Seminar tentang bagaimana cara mengambil foto yang
                            berekspresif</small>
                    </div>
                    <span class="text-muted">Rp35.000</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0"><b>Knowledge :D</b></h6>
                        <small class="text-muted">HEHE</small>
                    </div>
                    <span class="text-muted">Rp0</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0"><b>Pop Corn Virtual</b></h6>
                        <small class="text-muted">Nyam Nyam Nyam</small>
                    </div>
                    <span class="text-muted">Rp0</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong>Rp35.000</strong>
                </li>
            </ul>
        </div>
        <div class="col-md-3 order-md-1 mt-4 mb-4">
            <img class="img-fluid" src="{{asset('img/qrBCA.jpg')}}" alt="">
        </div>
        <div class="col-md-3 order-md-1 mt-4 mb-4">
            <h3><b>Metode Pembayaran</b></h3>
            <h5>BCA</h5>
            <p>2880150505 a/n <b>Serafine Cordelia</b></p>
            <p>*Atau scan QR BCA disamping</p>
        </div>
        <div class="col-md-6 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Checkout</span>
            </h4>
            <form action="{{route('uploadPaymentSeminar')}}" method="POST" enctype="multipart/form-data">
                @csrf

                @if(count($errors) > 0)
                <div class=" alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="form-group">
                    <label for="namaRekening">Nama Pemilik Rekening</label>
                    <input type="text" name="namaRekening" class="form-control" id="namaRekening"
                        placeholder="Masukan nama pemilik rekening">
                </div>
                <div class="form-group">
                    <label for="buktiTransfer">Bukti Transfer</label>
                    <input type="file" class="form-control-file" name="buktiTransfer" id="buktiTransfer">
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Konfirmasi Pembayaran</button>
            </form>
        </div>
    </div>
</div>
@endsection