@extends('layouts.app')

@section('content')

    <H1>タスク一覧</H1>

            
    @if (count($tasks) > 0)
        
        <?php $str_status = ''; ?>
        
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <?php if (is_null($task->status) || $task->status == '') { ?>
                    <?php     $str_status = ''; ?>
                    <?php } elseif ($task->status >= 0 && $task->status <= 2) { ?>
                    <?php    $str_status = $arr_status[ $task->status ]; ?>
                    <?php } ?>
                    
                    {!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $str_status }} > {{ $task->content }}
                </li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('tasks.create', '新規タスクの登録') !!}
    
@endsection