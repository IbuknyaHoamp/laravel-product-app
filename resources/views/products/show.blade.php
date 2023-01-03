@extends('products.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            {{-- <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div> --}}
        </div>
    </div>

    <div class="card mt-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Detail Product</h5>
            <p class="card-text"><strong>Name :</strong> {{$product->name}}</p>
            <p class="card-text"><strong>Detail :</strong> {{$product->detail}}</p>
            <a href="{{route('products.index')}}" class="card-link btn btn-primary">Back</a>
        </div>
    </div>
    
@endsection