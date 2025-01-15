@extends('layouts.app')

@section('content')
    @foreach ($planes as $plane)
        <!-- component -->
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $plane->imgplane }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Registration : {{ $plane->registration }}</h5>
                        <p class="card-text">Total Seats : {{ $plane->seats }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
