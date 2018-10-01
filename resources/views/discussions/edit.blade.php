@extends('layouts.app')

@section('content')
            <div class="panel panel-info">
                <div class="panel-heading text-center">Update a discussion</div>

                <div class="panel-body">
                    <form action="{{ route('discussion.update', ['id' => $discussion->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="content">Ask a question</label>
                            <textarea name="content" id="content" cols="6" rows="6" class="form-control">{{ $discussion->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success pull-right" type="submit">Save discussion changes</button>
                        </div>
                    </form>
    </div>
</div>
@endsection
