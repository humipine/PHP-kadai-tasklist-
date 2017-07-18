@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
    
    <p>タスク: {{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'このメッセージ編集', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete', 'onsubmit' => 'return DeleteChk()' ]) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
        <br><br>
    {!! link_to_route('tasks.index', 'タスク一覧に戻る') !!}
    
@endsection