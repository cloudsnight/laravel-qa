@extends('layouts.app')

@section('content')

@include ('layouts._messages')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="d-flex align-items-center">
                        <h1>{{ $question->title }}</h1>
                            <div class="ml-auto">
                                <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to All Questions</a>
                            </div>
                        </div>
                    </div>
                    <hr>
    
                    <div class="media">
                        {{-- Voting system --}}
                        {{-- @include ('shared._vote', [
                            'model' => $question
                        ]) --}}

                    <vote :model="{{ $question }}" name="question"></vote>

                        <div class="media-body">
                            {!! $question->body_html !!}
    
                            {{-- Gavatar --}}
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4"></div>
                                <div class="col-4">
                                    
                                <user-info :model="{{ $question }}" label="Asked"></user-info>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <answers :question="{{ $question }}"></answers>

        @include ('answers._create')
</div>
@endsection
