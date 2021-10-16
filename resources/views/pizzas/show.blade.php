ines (20 sloc)  577 Bytes
   
@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
  <h1>Order for {{ $pizza->name }}</h1>
  <p class="type">Type - {{ $pizza->type }}</p>
  <p class="base">Base - {{ $pizza->base }}</p>
  <p class="toppings">Extra toppings:</p>
  <ul>
    @foreach($pizza->toppings as $topping)
      <li>{{ $topping }}</li>
    @endforeach
  </ul>
  <form action="/pizza/{{ $pizza->id }}" method="POST">
  {{ csrf_field() }} 
    {{ method_field('DELETE') }} 
    <button>Complete Order</button>
  </form>
</div>
<a href="/pizza" class="back"><- Back to all pizzas</a>
@endsection