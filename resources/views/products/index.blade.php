@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <h2>Products App</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <td width="5%">No</td>
                <td width="20%">Name</td>
                <td >Detail</td>
                <td width="25%">Action</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->detail }}</td>
                    <td>
                        <form action="{{route('products.destroy', $product->id)}}" method="POST">
                            <a href="{{route('products.show', $product->id)}}" class="btn btn-info text-white">Show</a>
                            <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning text-white">Edit</a>

                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" >Deleteasdasd</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="alert alert-warning" colspan="4"><div class="alert alert-warning d-flex justify-content-center align-items-center mt-0 mb-0">No Product Here</div></td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection