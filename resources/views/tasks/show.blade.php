@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
        <?php $str_status = ''; ?>
        <?php if (is_null($task->status) || $task->status == '') { ?>
        <?php     $str_status = ''; ?>
        <?php } elseif ($task->status >= 0 && $task->status <= 2) { ?>
        <?php    $str_status = $arr_status[ $task->status ]; ?>
        <?php } ?>
                    
    <p>ステータス: {{ $str_status }}</p>
    <p>タスク: {{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'このメッセージ編集', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete', 'onsubmit' => 'return DeleteChk()' ]) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
        <br><br>
    {!! link_to_route('tasks.index', 'タスク一覧に戻る') !!}
    
@endsection