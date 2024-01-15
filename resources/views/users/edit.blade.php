@extends('layouts.app')
@section('title', 'Edit User')

@section('content')
    <section class=" p-3 sm:p-5 antialiased">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12 flex flex-col items-center">
            @include('users.components.form', [
                'action' => route('users.update', $user),
                'method' => 'PUT',
                'title' => 'Edit User',
                'user' => $user,
            ])
        </div>
    </section>
@endsection
