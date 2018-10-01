@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <img src="{{ $d->user->avatar }}" alt="" width="40px" height="40px">&nbsp;&nbsp;&nbsp;
        <span>{{ $d->user->name }} <b>({{ $d->user->points }})</b> </span>
        @if ($d->hasBestAnswer())
            <span class="btn pull-right btn-success btn-xs">Closed</span>
        @else
            <span class="btn pull-right btn-danger btn-xs">Open</span>
        @endif
        @if (Auth::id() == $d->user->id)
            @if (!$d->hasBestAnswer())
                <a href="{{ route('discussion.edit', ['slug' => $d->slug]) }}" class="btn btn-info pull-right btn-xs" style="margin-right: 8px;">Edit</a>
            @endif
        @endif

        @if (Auth::check())
            @if ($d->is_being_watched_by_auth_user())
                <a href="{{ route('discussion.unwatch', ['id' => $d->id]) }}" class="btn btn-danger pull-right btn-xs" style="margin-right: 8px;">Unwatch</a>
            @else
                <a href="{{ route('discussion.watch', ['id' => $d->id]) }}" class="btn btn-info pull-right btn-xs" style="margin-right: 8px;">Watch</a>
            @endif
        @endif
    </div>
    <div class="panel-body">
        <h4 class="text-center">
            <b>{{ $d->title }}</b>
        </h4>
        <hr>
        <p class="text-center">
            {!! Markdown::convertToHtml($d->content) !!}
        </p>
        <hr>
        @if ($best_answer)
            <div class="text-center" style="padding: 40px;">
                <h3 class="text-center">[BEST ANSWER]</h3>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <img src="{{ $best_answer->user->avatar }}" alt="" width="40px" height="40px">&nbsp;&nbsp;&nbsp;
                        <span>{{ $best_answer->user->name }} <b>({{ $best_answer->user->points }})</b></span>
                    </div>
                    <div class="panel-body">
                        {!! Markdown::convertToHtml($best_answer->content) !!}
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="panel-footer">
        <span>  
            {{ $d->replies->count() }} Replies
        </span>
        <a href="{{ route('channel', ['slug' => $d->channel->slug]) }}" class="btn btn-default pull-right btn-xs">
            {{ $d->channel->title }}
        </a>
    </div>
</div>

@foreach ($d->replies as $r)
<div class="panel panel-default">
    <div class="panel-heading">
        <img src="{{ $r->user->avatar }}" alt="" width="40px" height="40px">&nbsp;&nbsp;&nbsp;
        <span>{{ $r->user->name }} <b>({{ $r->user->points }})</b> </span>
        @if (!$best_answer)
            @if (Auth::id() == $d->user->id)
                <a href="{{ route('discussion.best.answer', ['id' => $r->id]) }}" class="btn btn-xs btn-primary pull-right">Mark as best answer</a>
            @endif
            @if (Auth::id() == $r->user->id)
                @if (!$r->best_answer)
                    <a href="{{ route('reply.edit', ['id' => $r->id]) }}" class="btn btn-info pull-right btn-xs" style="margin-right: 8px;">Edit reply</a>
                @endif
            @endif
        @endif
    </div>
    <div class="panel-body">
        <p class="text-center">
            {!! Markdown::convertToHtml($r->content) !!}
        </p>
    </div>
    <div class="panel-footer">
        <p>
            @if ($r->is_liked_by_auth_user())
                <a href="{{ route('reply.unlike', ['id' => $r->id]) }}" class="btn btn-danger btn-xs">Unlike <span class="badge">{{ $r->likes->count() }}</span></a>
            @else
                <a href="{{ route('reply.like', ['id' => $r->id]) }}" class="btn btn-primary btn-xs">Like <span class="badge">{{ $r->likes->count() }}</span></a>
            @endif
        </p>
    </div>
</div>
@endforeach
@if (!$d->hasBestAnswer())
    <div class="panel panel-default">
    <div class="panel-body">
        @if (Auth::check())
        <form action="{{ route('discussion.reply', ['id' => $d->id]) }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="reply">Leave a reply...</label>
                    <textarea name="reply" id="relpy" cols="6" rows="6" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success pull-right">Leave a reply</button>
                    </div>
                </div>
            </form>
        @else
            <div class="text-center">
                <h2>Sign in to leave a reply</h2>
            </div>
            <div class="text-center">
                <a href="/login" class="btn btn-success">Login</a>
                <a href="/register" class="btn btn-primary">Register</a>
            </div>
        @endif
    </div>
</div>
@endif

@endsection
