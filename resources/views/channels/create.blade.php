@extends('layouts.app')

@section('content')
            <div class="panel panel-info">
                <div class="panel-heading text-center">Create a new channel</div>

                <div class="panel-body">
                    <form action="{{ route('channels.store') }}" method="POST" >
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="channel">Channel Name</label>
                            <input type="text" name="channel" id="channel" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                
    </div>
</div>
@endsection
