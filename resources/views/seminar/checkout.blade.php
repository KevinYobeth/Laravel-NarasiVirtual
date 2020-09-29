@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 order-md-1 mb-4">
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
                        <h6 class="my-0"><b>Good Time</b></h6>
                        <small class="text-muted">That's what matters right?</small>
                    </div>
                    <span class="text-muted">Rp0</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong>Rp35.000</strong>
                </li>
            </ul>
            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Checkout</span>
            </h4>
            <label for="cc-name">Name Pentransfer</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <div class="invalid-feedback">
                Name on card is required
            </div>
            <br>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue</button>
            {{-- <ul class="list-group mb-3">
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
                        <h6 class="my-0"><b>Good Time</b></h6>
                        <small class="text-muted">That's what matters right?</small>
                    </div>
                    <span class="text-muted">Rp0</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong>Rp35.000</strong>
                </li>
            </ul> --}}
        </div>
    </div>

</div>
@endsection
