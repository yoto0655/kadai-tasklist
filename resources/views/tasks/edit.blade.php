@extends('layouts.app')

@section('content')

    @if (Auth::check())
            {{ Auth::user()->name }}

        <h1>id: {{ $task->id }} の内容編集ページ</h1>
        
            <div class="row">
                <div class="col-6">
                    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
                        <div class="form-group">
                            {!! Form::label('status', 'status:') !!}
                            {!! Form::text('status', null, ['class' => 'form-control']) !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('content', '内容:') !!}
                            {!! Form::text('content', null, ['class' => 'form-control']) !!}
                        </div>
        
                        {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
        
                    {!! Form::close() !!}
                </div>
            </div>
    @endif

@endsection