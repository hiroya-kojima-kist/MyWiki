@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.my')
@section('title','demo-laravel-crud')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <p>
        {{ __("MyWiki is Kojima's Graduation Works.") }}
    </p>

    <h2>{{ __('How To Use') }}</h2>
    <ul>
        <li>{{ __('1. Make new account to <Register> page.') }}<br>
            {{ __('(You might used to 10minutemail)') }}
        </li>
        <li>{{ __('2. Login to <Login> page.') }}<br>
            {{ __('(TestAccount is mail:foo1@foo.com pass:password)') }}
        </li>
        <li>{{ __('3. Write new Post to <New Post> page.') }}</li>
        <li>{{ __('4. View Posts to <Posts> page.') }}<br>
            {{ __('(Push Titlestring, You read detail)') }}
        </li>
    </ul>
    {{-- <ul>
        <li>
            GitHub:
            <a href="https://github.com/sutara79/demo-laravel-crud" target="_blank">
                https://github.com/sutara79/demo-laravel-crud
            </a>
        </li>
        <li>
            Qiita:
            <a href="http://qiita.com/sutara79/items/ef30fcdfb7afcb2188ea" target="_blank">
                Laravel 5.7で基本的なCRUDを作る
            </a>
        </li>
    </ul>
    <h2>{{ __('Feature') }}</h2>
    <ul>
        <li>{{ __('All visitors can read all posts.') }}</li>
        <li>{{ __('All visitors can read all users\' profile except email address.') }}</li>
        <li>{{ __('All visitors can sign up.') }}</li>
        <li>{{ __('Each the logged in user can post, edit and delete.') }}</li>
        <li>
            {{ __('The admin can edit and delete all users\' accounts and posts.') }}
            <ul>
                <li>
                    {{ __('Admin') }}:
                    <ul>
                        <li>id: 1</li>
                        <li>name: sutara79</li>
                        <li>email: toumin.m7@gmail.com</li>
                        <li>password: 1234</li>
                    </ul>
                </li>
                <li>
                    {{ __('User') }}:
                    <ul>
                        <li>id: 2</li>
                        <li>name: foo1</li>
                        <li>email: foo1@foo.com</li>
                        <li>password: 1234</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul> --}}
</div>
@endsection