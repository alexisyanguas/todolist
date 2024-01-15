@extends('layouts.app')
@section('title', 'Create Task')

@section('content')
    <section class=" p-3 sm:p-5 antialiased">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12 flex flex-col items-center">
            @include('tasks.components.form', [
                'action' => route('tasks.store'),
                'method' => 'POST',
                'title' => 'Create Task',
            ])
        </div>
    </section>
@endsection
