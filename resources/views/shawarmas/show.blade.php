@extends('layouts.app')

@section('content')
    <div class="full-height shawarma-details">
        <div >
            <div class="title">
                Order for {{$shawarma->name}}
            </div>

            <div class="shawarma-details-items">
                <p>Type - {{$shawarma->type}}</p>
                <p>Price - {{$shawarma->price}}</p>
                <p>Discount - {{$shawarma->discount}}</p>

                <a href="{{ route('shawarmas.index')}}" class="back"><< Back </a>
            </div>            
        </div>

        <!-- Do a Delete here - Small form -->
        <form action="{{ route('shawarmas.destroy', $shawarma->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Complete Order</button>
        </form>
    </div>
@endsection
