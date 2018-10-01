@extends('layouts.app')

@section('content')
            <div class="panel panel-info">
                <div class="panel-heading text-center">Create a new discussion</div>

                <div class="panel-body">
                    <form action="{{ route('discussions.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                                <label for="channel_id">Pick a channel</label>
                                <select name="channel_id" id="channel_id" class="form-control">
                                @foreach ($channels as $channel)
                                    @if (old('channel_id') == $channel->id)
                                        <option value="{{ $channel->id }}" selected>{{ $channel->title }}</option>
                                    @else
                                        <option value="{{ $channel->id }}">{{ $channel->title }}</option> 
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="content">Ask a question</label>
                            <textarea name="content" id="content" cols="6" rows="6" class="form-control">{{ old('content') }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success pull-right" type="submit">Create discussion</button>
                        </div>
                    </form>
                
    </div>
</div>
@endsection
