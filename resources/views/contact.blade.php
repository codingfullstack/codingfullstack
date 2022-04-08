@extends('layouts.layouts')
@section('content')
    <section class="text-white">
        <div class="flex my-20">
            <div class="w-1/2  ">
                <h2 class="text-6xl">Let's talk.</h2>

            </div>
        </div>
        <!-- component -->
        <div class="block p-6 my-10 opacity-80 rounded-lg shadow-lg bg-black max-w-md">
            @if (Session::has('message_send'))
                <div class="text-red-300 uppercase">
                    {{ Session::get('message_send') }}
                </div>
            @endif
            <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-6">
                    <label class="" for="name">Name:</label>
                    <input name="name" type="name"
                        class="form-control block w-full my-2 px-3 py-1 text-base font-normal  text-gray-300  bg-gray-800 bg-clip-padding   rounded transition  ease-in-out m-0   focus:border-blue-600 focus:outline-none"
                        id="name" placeholder="Name">
                </div>
                <div class="form-group mb-6">
                    <label class="" for="email">Email:</label>
                    <input name="email" type="email"
                        class="form-control block w-full my-2 px-3 py-1 text-base font-normal  text-gray-300 bg-gray-800 bg-clip-padding   rounded transition  ease-in-out m-0   focus:border-blue-600 focus:outline-none"
                        id="email" placeholder="Email address">
                </div>
                <div class="form-group mb-6">
                    <label class="" for="msg">Message:</label>
                    <textarea name="msg" class="form-control block w-full my-2 px-3 py-1 text-base font-normal  text-gray-300  bg-gray-800 bg-clip-padding   rounded transition  ease-in-out m-0   focus:border-blue-600 focus:outline-none"
                        id="msg" rows="3" placeholder="Message"></textarea>
                </div>
                <button type="submit"
                    class=" px-6 py-2.5  text-white font-medium text-xs leading-tight uppercase rounded bg-gray-800 shadow-md hover:bg-gray-600 hover:shadow-lg   focus:shadow-lg focus:outline-none focus:ring-0  active:shadow-lg transition duration-150 ease-in-out">Send</button>
            </form>
        </div>
    </section>
@endsection
