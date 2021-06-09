 @extends('layouts.app')
 @section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card-header">{{ __('Pengaturan Harga Laundry') }}</div>


                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} --}}



                      <form method="POST" action="{{ route('ubah-harga', $harga->id ) }}">
                        @method('PUT')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control @error('harga') is-invalid @enderror" name="harga_per_kilo" 
                                value="{{ $harga->harga_per_kilo }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          
                   
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Ubah Harga
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
 
 </div>

            @endsection