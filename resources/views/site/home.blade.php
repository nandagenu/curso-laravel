@extends('site.layout')
@section('title', 'Essa é a página HOME')
@section('conteudo')

{{--Estruturas de Repetição--}}

@for ($i = 0; $i < $count; $i++)
    valor atual é {{ $i }} <br>
@endfor

@php $i = 0;
@endphp

@while ($i <= 15)
    valor atual é {{ $i }} <br>
    @php $i++ @endphp
@endwhile

@foreach ($frutas as $fruta)
    {{ $fruta }} <br>
@endforeach

@endsection
