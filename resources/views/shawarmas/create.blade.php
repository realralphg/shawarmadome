@extends('layouts.app')

@section('content')
    <div class="full-height create-shawarma">
        <div class="wrapper">
            <h1>Create a Shawarma</h1>
            <form action="/shawarmas" method="POST">
                @csrf
                <label for="name"> Your name: </label>
                <input type="text" id="name" name="name">

                <label for="type"> Choose type: </label>
                <select name="type" id="type">
                    <option value="jumbo"> Jumbo </option>
                    <option value="regular"> Regular </option>
                    <option value="small"> Small </option>
                </select>

                <label for="price"> View price: </label>
                <select name="price" id="price">
                    <option value="1000"> 1000 </option>
                    <option value="700"> 700 </option>
                    <option value="500"> 500 </option>
                </select>                

                <label for="discount"> View discounts: </label>
                <select name="discount" id="discount">
                    <option value="100"> 100 </option>
                    <option value="50"> 50 </option>
                    <option value="50"> 50 </option>
                </select>
                <input type="submit" value="Place Order">
            </form>
        </div>
    </div>
@endsection
