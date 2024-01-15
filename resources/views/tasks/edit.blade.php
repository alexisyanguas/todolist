@extends('layouts.app')
@section('title', 'Edit Task')

@section('content')
    <section class=" p-3 sm:p-5 antialiased">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12 flex flex-col items-center">
            @include('tasks.components.form', [
                'action' => route('tasks.update', $task),
                'method' => 'PUT',
                'title' => 'Edit Task',
                'task' => $task,
            ])
        </div>
    </section>
@endsection
