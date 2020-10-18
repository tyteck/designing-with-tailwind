@extends('layouts.www')


@section('content')

<div class="mx-auto">
    <div class="container pb-6 md:pb-12 mx-auto">
        <div class="text-center mt-12 mb-8">
            <h1 class="text-3xl md:text-5xl text-white font-semibold">Blog</h1>    
        </div>

        <section class="grid grid-cols-2">
            @include('partials.single_card', ['text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, '])
            @include('partials.single_card', ['text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'])
            @include('partials.single_card', ['text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'])
        </section>
        </div>
    </div>
</div>
@endsection