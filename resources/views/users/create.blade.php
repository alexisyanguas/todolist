@extends('layouts.app')
@section('title', 'Create User')

@section('content')
    <section class=" p-3 sm:p-5 antialiased">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12 flex flex-col items-center">
            @include('users.components.form', [
                'action' => route('users.store'),
                'method' => 'POST',
                'title' => 'Create User',
            ])
        </div>
    </section>
@endsection
