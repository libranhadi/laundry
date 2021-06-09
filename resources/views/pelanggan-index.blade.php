@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"> 
        @foreach ( $pelanggans as $plg )
            <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h2>
                        {{$plg->pelanggan_nama}}
                    </h2> 
                </div>
                <div class="card-body">
                    <h5>

                        {{ $plg->pelanggan_hp }}
                    </h5>
                    <p class="text-secondary">
                        {{ $plg->pelanggan_alamat }}
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{  route('pelanggan-edit', $plg->id)}}" class="btn btn-info" >edit</a>
                    <form action="{{ route('delete-pelanggan', $plg->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                     {{-- <form action="{{ route('delete-cart', $cart->id) }}" method="post">
                        
                        <button type="submit" class="btn btn-remove-cart">Remove</button>
                      </form> --}}
                </div>
            </div>
        </div>
        @endforeach
        
         {{-- <div class="col-md-3">
            <div class="card">
                <div class="card-header"> header</div>
                <div class="card-body">body</div>
                <div class="card-footer">footer</div>
            </div>
        </div>
         <div class="col-md-3">
            <div class="card">
                <div class="card-header"> header</div>
                <div class="card-body">body</div>
                <div class="card-footer">footer</div>
            </div>
        </div> --}}
    </div>
</div>
@endsection