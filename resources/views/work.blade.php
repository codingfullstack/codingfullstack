@extends('layouts.layouts')
@section('content')
    <section>
        <div class="flex  my-20" >
            <div class="w-1/2  ">
                <h2 class="text-4xl">My Work</h2>
            </div>
        </div>
        <div class="py-16 bg-white my-10">
            <div class="container m-auto px-4 text-gray-600 md:px-12 xl:px-4">
                <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                  <div class="md:5/12 lg:w-5/12">
                    <img src="{{ asset('images/test.png') }}" alt="image" loading="lazy" width="" height="">
                  </div>
                  <div class="md:7/12 lg:w-6/12">
                    <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">HTML, CSS,  JavaScript Quiz</h2>
                    <p class="mt-6 text-gray-600">This is a HTML, CSS, JavaScript Quiz were you can answer questions! In every question you have 30 seconds, so you have to answer very fast! Test is made only for people who understand Lithaunia language.</p>
                    <a class="font-bold" target="_blank" href="https://quiz-two-kappa.vercel.app/">Link to "Vercel" version <svg class="fill-current inline text-black w-5 mt-0.5 ml-2" aria-hidden="true" focusable="false" data-prefix="fas"
                        data-icon="long-arrow-alt-right" class="svg-inline--fa fa-long-arrow-alt-right fa-w-14" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                       <path fill="currentColor"
                             d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z">
                       </path>
                   </svg> </a>
                  </div>
                </div>
            </div>
          </div>
          <div class="py-16 bg-white my-10">
            <div class="container m-auto px-4 text-gray-600 md:px-12 xl:px-4">
                <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                  <div class="md:5/12 lg:w-5/12">
                    <img src="{{ asset('images/test2.png') }}" alt="image" loading="lazy" width="" height="">
                  </div>
                  <div class="md:7/12 lg:w-6/12">
                    <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">Simple React Expense Tracker</h2>
                    <p class="mt-6 text-gray-600">This is a " Simple React Expense Tracker with Bootstrap" ! You can see you'r expenses and you'r incomes. You just need to select required infomation. For you the proggram will count expenses or you'r incomes and will put in you'r needing categories!  </p>
                    <a class="font-bold" target="_blank" href="https://money-sand.vercel.app/">Link to "Vercel" version <svg class="fill-current inline text-black w-5 mt-0.5 ml-2" aria-hidden="true" focusable="false" data-prefix="fas"
                        data-icon="long-arrow-alt-right" class="svg-inline--fa fa-long-arrow-alt-right fa-w-14" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                       <path fill="currentColor"
                             d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z">
                       </path>
                   </svg> </a>
                  </div>
                </div>
            </div>
          </div>
          <div class="py-16 bg-white my-10">
            <div class="container m-auto px-4 text-gray-600 md:px-12 xl:px-4">
                <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                  <div class="md:5/12 lg:w-5/12">
                    <img src="{{ asset('images/test3.png') }}" alt="image" loading="lazy" width="" height="">
                  </div>
                  <div class="md:7/12 lg:w-6/12">
                    <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">Simple LARAVEL8 E-Shop with Admin </h2>
                    <p class="mt-6 text-gray-600"> This is a "Simple LARAVEL8 E-Shop with a Admin". Made using LARAVEL8, TAILWIND and LIVEWIRE. This was a job for school. Connection with MySql database! Is adminstration panel. </p>
                  </div>
                </div>
            </div>
          </div>
    </section>
@endsection
