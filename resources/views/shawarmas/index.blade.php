@extends('layouts.app')

@section('content')
    <div class="full-height shawarma-index">
        <div >
            <div class="title">
                Shawarma Orders!
            </div>

            @foreach($shawarmas as $shawarma)
                <div class="shawarma-index-items">
                    <img src="/img/shawarma.jpg" alt="shawarma logo">
                    <a href="/shawarmas/{{ $shawarma->id }}">  {{ $shawarma->name}} </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
