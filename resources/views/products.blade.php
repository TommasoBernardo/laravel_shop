@extends('shop')

@section('content')
    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-4 col-6 mb-4">
                <div class="card">
                    <img src="{{ $book->image }}" alt="{{ $book->name }}" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h4 class="card-title">{{ $book->name }}</h4>
                        <p>{{ $book->author }}</p>
                        <p class="card-text"><strong>Price: </strong> {{ $book->price }}€</p>
                        <p class="btn-holder"><a href="{{ route('addbook.to.cart', $book->id) }}"
                                class="btn btn-outline-success">Add to cart</a> </p>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $books->links() }}
    </div>
@endsection
