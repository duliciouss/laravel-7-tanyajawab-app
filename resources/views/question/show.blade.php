@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Question No.{{ $question->question_id }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h5><b>{{ $question->question_title }}</b></h5>
                        <p>{{ $question->question_body }}</p>
                        <p>Tags: {{ $question->question_tag }}</p>
                        <hr class="my-3">
                        <form action="{{ route('answer.update', ['question'=>$question->question_id]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <textarea name="answer_body" id="answer_body" rows="5" class="form-control"></textarea>
                            <button type="submit" class="btn btn-primary mt-3">Answer</button>
                        </form>

                        {{-- @foreach ($question as $questions)
                        {{ $questions->answer()->answer_body }}
                        @endforeach --}}
                        

                        {{-- @if (!$question->answer->count())

                        @else
                            
                        @endif --}}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
