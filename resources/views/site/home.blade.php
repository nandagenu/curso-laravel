@extends('site.layout')
@section('title', 'Essa é a página HOME')
@section('conteudo')

@include('includes.mensagem', ['titulo' => 'Mensagem de sucesso!'])

@component('components.sidebar')
@slot('paragrafo')
    Texto qualquer vindo so slot
@endslot
@endcomponent

@endsection