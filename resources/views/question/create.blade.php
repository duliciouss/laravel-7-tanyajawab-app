@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create a question') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('question.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="question_title">Question Title</label>
                          <input type="text" class="form-control" id="question_title" name="question_title" placeholder="Question title">
                        </div>
                        <textarea name="question_body" id="question_body" cols="30" rows="10" class="form-control"></textarea>
                        <div class="form-group mt-2">
                            <label for="question_tag">Question Tag</label>
                            <input type="text" class="form-control" id="question_tag" name="question_tag" placeholder="Question Tag">
                          </div>
                        <button type="submit" class="btn btn-success">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection