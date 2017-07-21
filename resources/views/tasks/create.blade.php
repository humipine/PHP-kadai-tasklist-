@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
        {!! Form::label('status', 'ステータス') !!}
        {!! Form::select('status', ['未着手', '進行中', '完了']) !!}
        
        {!! Form::label('content', 'タスク') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('投稿') !!}
        
    {!! Form::close() !!}
    <br><br>
    
    {!! link_to_route('tasks.index', 'タスク一覧に戻る') !!}
@endsection