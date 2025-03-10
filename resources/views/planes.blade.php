@extends('layouts.app')

@section('content')
<div class="allCardsPlanes">
<div class="cardPlanes">
    @foreach ($planes as $plane)
        <!-- component -->

            <div class="card mb-3" style="max-width: 450px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $plane->imgplane }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 infoPlane">
                        <div class="card-body ">
                            <h5 class="card-title">Registration : {{ $plane->registration }}</h5>
                            <p class="card-text">Total Seats : {{ $plane->seats }}</p>
                        </div>
                    </div>
                    <form action="{{ route('planedelete', ['id' => $plane->id]) }}" method="post">
                        @method('delete')
                        @csrf
                        @if(Auth::check() && auth::user()->isAdmin )
                            <button type="submit"
                                class="bt-adm m-1 d-flex justify-content-center align-items-center"
                                onclick="return confirm('¿Estas Seguro de querer eliminar este Avion? {{ $plane->registation }} - ID {{ $plane->id }} ')">
                                🚮
                            </button>
                        @endif
                    </form>
                </div>
            </div>

    @endforeach
</div>

@endsection
