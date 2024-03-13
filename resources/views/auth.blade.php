@extends('layouts.app')
@section('content')
    <div class="col-md-5 mx-auto">
        <section id="numbers">
            <h2 class="text-center mb-0 mt-3 mt-md-5 fw-bold text-white">Numbers in Sign language</h2>
            <div class="section-body" style="padding: 0;">
                <div class="upper">
                    <img src="./images/numbers.jpg" />
                </div>
                <div class="d-flex gap-4  mt-4">
                    <button class="signup" data-next-target="#letters">Next</button>
                    <a href="{{ route('logout') }}" class="text-decoration-none">
                        <button class="signup">Logout</button>
                    </a>
                </div>
            </div>
        </section>
        <section id="letters" class="hide d-none">
            <h2 class="text-center mb-0 mt-3 mt-md-5 fw-bold text-white">Letters in Sign language</h2>
            <div class="section-body" style="padding: 0;">
                <div class="upper">
                    <img src="./images/letters.jpg" />
                </div>
                <div>
                    <a href="{{ route('logout') }}" class="text-decoration-none">
                        <button class="signup">Logout</button>
                    </a>
                    <button class="signup mt-4" data-next-target="#numbers">Back</button>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('js')
<script src="./assets/index-YQRDazKY.js"></script>
@endpush