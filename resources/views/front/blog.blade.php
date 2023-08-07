@extends('layouts.default')

@section('content')
    <header class="pt-8">
        <div class="contained">
            <h1 data-reveal class="text-4xl font-semibold">Blog</h1>
        </div>
    </header>

    <section class="section">
        <div class="contained">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-12 mb-6 lg:mb-12">
                <article data-reveal>
                    <a href="#" class="flex flex-col gap-2 lg:gap-4">
                            <span class="block zoom-image-container">
                                <img src="/images/events/event-1.jpg" alt="Event 1"
                                     class="w-full object-cover rounded-2xl">
                            </span>
                        <time class="text-slate-500 block font-medium text-xs lg:text-base"
                              datetime="{{ now()->subDays(10)->toIso8601String() }}">{{ now()->subDays(10)->format('d M Y') }}</time>
                        <span class="text-lg lg:text-3xl font-semibold text-gray-900 group-hover:text-accent-500">Consectures Dummy Content Velit officia consequat duis enim velit</span>
                        <span class="block lg:max-w-xl text-sm lg:text-lg text-slate-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit xercitation veniam consequat sunt nostrud amet.</span>
                    </a>
                </article>

                <div class="flex flex-col gap-4 lg:gap-8" data-reveal data-reveal-origin="right">
                    <article>
                        <a href="#" class="flex flex-col md:flex-row group">
                                <span class="block zoom-image-container">
                                    <img src="/images/events/event-1.jpg" alt="Event 1"
                                         class="w-full lg:w-48 lg:h-40 object-cover rounded-2xl">
                                </span>
                            <span class="flex-1 mt-2 md:mt-0 md:ml-6">
                                    <time class="block text-slate-500 text-xs lg:text-base font-medium"
                                          datetime="{{ now()->subDays(10)->toIso8601String() }}">{{ now()->subDays(10)->format('d M Y') }}</time>
                                    <span
                                        class="block text-lg lg:text-xl font-semibold text-gray-900 transition-colors duration-300 group-hover:text-accent-500 mb-2 lg:mb-4">Consectures Dummy Content Velit officia consequat duis enim velit</span>
                                    <span class="block max-w-xl text-sm lg:text-lg text-slate-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</span>
                                </span>
                        </a>
                    </article>
                    <article>
                        <a href="#" class="flex flex-col md:flex-row group">
                                <span class="block zoom-image-container">
                                    <img src="/images/events/event-1.jpg" alt="Event 1"
                                         class="w-full lg:w-48 lg:h-40 object-cover rounded-2xl">
                                </span>
                            <span class="flex-1 mt-2 md:mt-0 md:ml-6">
                                    <time class="block text-slate-500 text-xs lg:text-base font-medium"
                                          datetime="{{ now()->subDays(10)->toIso8601String() }}">{{ now()->subDays(10)->format('d M Y') }}</time>
                                    <span
                                        class="block text-lg lg:text-xl font-semibold text-gray-900 transition-colors duration-300 group-hover:text-accent-500 mb-2 lg:mb-4">Consectures Dummy Content Velit officia consequat duis enim velit</span>
                                    <span class="block max-w-xl text-sm lg:text-lg text-slate-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</span>
                                </span>
                        </a>
                    </article>
                    <article>
                        <a href="#" class="flex flex-col md:flex-row group">
                                <span class="block zoom-image-container">
                                    <img src="/images/events/event-1.jpg" alt="Event 1"
                                         class="w-full lg:w-48 lg:h-40 object-cover rounded-2xl">
                                </span>
                            <span class="flex-1 mt-2 md:mt-0 md:ml-6">
                                    <time class="block text-slate-500 text-xs lg:text-base font-medium"
                                          datetime="{{ now()->subDays(10)->toIso8601String() }}">{{ now()->subDays(10)->format('d M Y') }}</time>
                                    <span
                                        class="block text-lg lg:text-xl font-semibold text-gray-900 transition-colors duration-300 group-hover:text-accent-500 mb-2 lg:mb-4">Consectures Dummy Content Velit officia consequat duis enim velit</span>
                                    <span class="block max-w-xl text-sm lg:text-lg text-slate-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</span>
                                </span>
                        </a>
                    </article>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-12 mb-6 lg:mb-12">
                <article data-reveal class="order-2">
                    <a href="#" class="flex flex-col gap-2 lg:gap-4">
                            <span class="block zoom-image-container">
                                <img src="/images/events/event-1.jpg" alt="Event 1"
                                     class="w-full object-cover rounded-2xl">
                            </span>
                        <time class="text-slate-500 block font-medium text-xs lg:text-base"
                              datetime="{{ now()->subDays(10)->toIso8601String() }}">{{ now()->subDays(10)->format('d M Y') }}</time>
                        <span class="text-lg lg:text-3xl font-semibold text-gray-900 group-hover:text-accent-500">Consectures Dummy Content Velit officia consequat duis enim velit</span>
                        <span class="block lg:max-w-xl text-sm lg:text-lg text-slate-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit xercitation veniam consequat sunt nostrud amet.</span>
                    </a>
                </article>

                <div class="flex flex-col gap-4 lg:gap-8 order-1" data-reveal data-reveal-origin="right">
                    <article>
                        <a href="#" class="flex flex-col md:flex-row group">
                                <span class="block zoom-image-container">
                                    <img src="/images/events/event-1.jpg" alt="Event 1"
                                         class="w-full lg:w-48 lg:h-40 object-cover rounded-2xl">
                                </span>
                            <span class="flex-1 mt-2 md:mt-0 md:ml-6">
                                    <time class="block text-slate-500 text-xs lg:text-base font-medium"
                                          datetime="{{ now()->subDays(10)->toIso8601String() }}">{{ now()->subDays(10)->format('d M Y') }}</time>
                                    <span
                                        class="block text-lg lg:text-xl font-semibold text-gray-900 transition-colors duration-300 group-hover:text-accent-500 mb-2 lg:mb-4">Consectures Dummy Content Velit officia consequat duis enim velit</span>
                                    <span class="block max-w-xl text-sm lg:text-lg text-slate-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</span>
                                </span>
                        </a>
                    </article>
                    <article>
                        <a href="#" class="flex flex-col md:flex-row group">
                                <span class="block zoom-image-container">
                                    <img src="/images/events/event-1.jpg" alt="Event 1"
                                         class="w-full lg:w-48 lg:h-40 object-cover rounded-2xl">
                                </span>
                            <span class="flex-1 mt-2 md:mt-0 md:ml-6">
                                    <time class="block text-slate-500 text-xs lg:text-base font-medium"
                                          datetime="{{ now()->subDays(10)->toIso8601String() }}">{{ now()->subDays(10)->format('d M Y') }}</time>
                                    <span
                                        class="block text-lg lg:text-xl font-semibold text-gray-900 transition-colors duration-300 group-hover:text-accent-500 mb-2 lg:mb-4">Consectures Dummy Content Velit officia consequat duis enim velit</span>
                                    <span class="block max-w-xl text-sm lg:text-lg text-slate-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</span>
                                </span>
                        </a>
                    </article>
                    <article>
                        <a href="#" class="flex flex-col md:flex-row group">
                                <span class="block zoom-image-container">
                                    <img src="/images/events/event-1.jpg" alt="Event 1"
                                         class="w-full lg:w-48 lg:h-40 object-cover rounded-2xl">
                                </span>
                            <span class="flex-1 mt-2 md:mt-0 md:ml-6">
                                    <time class="block text-slate-500 text-xs lg:text-base font-medium"
                                          datetime="{{ now()->subDays(10)->toIso8601String() }}">{{ now()->subDays(10)->format('d M Y') }}</time>
                                    <span
                                        class="block text-lg lg:text-xl font-semibold text-gray-900 transition-colors duration-300 group-hover:text-accent-500 mb-2 lg:mb-4">Consectures Dummy Content Velit officia consequat duis enim velit</span>
                                    <span class="block max-w-xl text-sm lg:text-lg text-slate-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</span>
                                </span>
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
