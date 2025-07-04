@extends('appmain')

@section('title', 'Currency Exchange')

@section('content')

    <div class="flex items-center justify-center mr-10 mt-15 min-h-[20vh]">
        @livewire('currency-converter')
    </div>

@endsection

