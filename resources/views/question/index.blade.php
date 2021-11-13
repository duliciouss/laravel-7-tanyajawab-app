@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Questions') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('question.create') }}" class="btn btn-primary float-right">Create a Question</a>

                    @if (!$question->count())
                        <p>There's no question that you will answers for now. Please become a first person to create a question!</p>
                    @else
                        @foreach ($question as $questions)
                            <div class="mt-5">
                                <a href="{{ route('question.show', ['question'=>$questions->question_id]) }}"><b>{{ $questions->question_title }}</b>  </a>
                                <p class="text-muted">Created By: {{ $questions->user->username }}</p>
                                <p class="text-muted">{{ $questions->created_at }}</p>  
                            </div>                            
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection