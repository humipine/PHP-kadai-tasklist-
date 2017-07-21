@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    
        {!! Form::label('status', 'ステータス') !!}
        {!! Form::select('status', ['未着手', '進行中', '完了']) !!}
        
        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('更新') !!}
        
    {!! Form::close() !!}
<br><br>
    {!! link_to_route('tasks.index', 'タスク一覧に戻る') !!}
    
@endsection