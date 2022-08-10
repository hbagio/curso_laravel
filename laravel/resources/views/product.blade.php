@extends('layouts.main')

@section('title', 'Produto Novo')

@section('content')

@if($id != null)
 <p>Exibindo produto id: {{$id}}
@endif


@endsection
