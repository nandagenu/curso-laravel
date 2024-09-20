@extends('site.layout')
@section('title', 'Essa é a página HOME')
@section('conteudo')

{{--Estrutura de Controle--}}
@if ($nome == 'rodrigo')
    true
@else
    false
@endif

@unless ($nome == 'rodrigo') {{--Imprime o true se essa condição for falsa--}}
    true
@else
    false
@endunless

@switch($idade)
    @case(27)
        idade está ok
        @break
    @case(29)
        idade está errada
        @break
    @default
        default
@endswitch

@isset($nome)
    existe
@endisset

@endsection