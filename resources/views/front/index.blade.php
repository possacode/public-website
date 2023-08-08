@extends('layouts/default')

@section('content')
    <main>
        <section class="relative overflow-hidden contained px-4 sm:px-6 pt-8 lg:px-8 pb-8 lg:pb-32 text-center">
            <div class="block lg:grid grid-cols-1 lg:grid-cols-2 lg:items-center gap-8 w-full">
                <div class="flex flex-col text-left">
                    <h1 data-reveal
                        class="mb-3 lg:mb-0 font-semibold tracking-tight !leading-[1.2] text-slate-900 text-3xl lg:text-5xl">
                        <span class="text-accent-500">PossaCode, </span>
                        une communauté
                        <span class="text-accent-500 font-dm"> innovante </span>
                        de <span class="text-accent-500 font-dm"> développeurs </span>
                        en Afrique.
                    </h1>

                    <p data-reveal data-reveal-delay="150"
                       class="lg:mt-6 max-w-2xl text-base lg:text-xl tracking-tight text-slate-700">
                        Nous somme une association dynamique dédiée à la formation
                        et à l'organisation d'événements de rencontre pour les
                        développeurs en Afrique.
                    </p>

                    <div class="mt-5 lg:mt-10 flex flex-col md:flex-row gap-2 lg:gap-6">
                        <a data-reveal data-reveal-delay="150" class="hero-cta animated-button" href="#">
                            <span>Rejoingnez-nous</span>
                            @svg('heroicon-o-arrow-right')
                        </a>

                        <a data-reveal data-reveal-delay="200" class="hero-cta outlined animated-button" href="#">
                            <span>Soutenez-nous</span>
                            @svg('heroicon-o-heart', 'w-6 h-6')
                        </a>
                    </div>
                </div>
                <div class="absolute lg:relative top-0 -right-[30%] lg:right-0 w-full -z-10">
                    <div class="relative w-full">
                        <img data-reveal data-reveal-origin="right" src="/images/header-img.png" alt="Header image"
                             class="max-w-full h-auto"/>
                        <div class="block lg:hidden absolute top-0 w-full h-full bg-white/70"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="activities"
                 class="section bg-gradient-to-br from-[#46499c] via-[#2F3162] to-[#1F2151] relative overflow-hidden text-white">
            <div class="contained">
                <div class="max-w-3xl mx-auto text-center pb-12 lg:pb-24">
                    <h2 data-reveal class="h2">
                        Notre Engagement envers <span>l'Excellence</span> pour <span>l'Afrique</span>
                    </h2>

                    <p data-reveal data-reveal-delay="100" class="text-slate-200 text-base lg:text-lg">
                        Transmettre l'excellence aux futurs développeurs en partageant des parcours
                        inspirants pour encourager la passion technologique et le succès personnel.
                    </p>
                </div>

                <div class="flex flex-col gap-8 lg:gap-16">
                    <div class="grid grid-cols-2 md:grid-cols-12 items-center gap-4">
                        <div class="col-span-full col-start-1 lg:col-span-5 lg:col-start-7 lg:order-2">
                            <img data-reveal data-reveal-origin="right" src="/images/learning.png" alt="Teaching icon"
                                 class="w-[200px] lg:w-auto max-w-full h-auto"/>
                        </div>

                        <div class="col-start-1 lg:col-start-2 col-span-full lg:col-span-4 lg:order-1">
                            <div data-reveal data-reveal-origin="left" class="text-left flex flex-col">
                                <h3 class="font-semibold tracking-tight text-lg lg:text-2xl mb-3 lg:mb-5">Développement
                                    des Compétences<br>Techniques</h3>
                                <p class="text-slate-300 text-sm lg:text-base">
                                    Chez PossaCode, nous croyons fermement que des compétences techniques solides
                                    sont essentielles pour façonner l'avenir de l'Afrique.
                                    Nous proposons une variété de formations de pointe, des ateliers pratiques et
                                    des hackathons stimulants pour permettre aux développeurs africains de maîtriser
                                    les dernières technologies et de rester à la pointe de l'innovation.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 lg:grid-cols-12 items-center gap-4">
                        <div class="col-start-1 lg:col-start-2 col-span-full lg:col-span-4">
                            <img data-reveal data-reveal-origin="left" src="/images/team_collaboration.png"
                                 alt="Team collaboration" class="w-[200px] lg:w-auto max-w-full h-auto"/>
                        </div>
                        <div class="col-span-full col-start-1 lg:col-span-5 lg:col-start-7">
                            <div data-reveal data-reveal-origin="right" class="text-left flex flex-col">
                                <h3 class="font-semibold tracking-tight text-lg lg:text-2xl mb-3 lg:mb-5">Une Communauté
                                    Collaborative</h3>
                                <p class="text-sm lg:text-base text-slate-300">
                                    Nous sommes convaincus que le pouvoir du réseau est inestimable.
                                    En organisant des meetups et des conférences techniques,
                                    nous créons un espace chaleureux où les développeurs peuvent
                                    échanger leurs expériences, partager des connaissances
                                    et construire des partenariats fructueux. Ensemble,
                                    nous bâtissons une communauté solide et soudée.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="grid grid-cols-2 lg:grid-cols-12 items-center gap-4">
                        <div class="col-span-full col-start-1 lg:col-span-5 lg:col-start-7 lg:order-2">
                            <div data-reveal data-reveal-origin="right" class="relative w-full">
                                <div
                                    class="-z-[5] absolute w-full h-full scale-[0.2] bg-accent-500 rounded-full left-0 top-0"></div>
                                <div
                                    class="-z-10 absolute w-full h-full scale-50 bg-accent-500/70 rounded-full left-[50%] translate-x-[-50%]"></div>

                                <img src="/images/business_decisions.png" alt="Teaching icon"
                                     class="w-[200px] lg:w-auto max-w-full"/>
                            </div>
                        </div>
                        <div class="col-start-1 lg:col-start-2 col-span-full lg:col-span-4 lg:order-1">
                            <div data-reveal data-reveal-origin="left" class="text-left flex flex-col">
                                <h3 class="font-semibold tracking-tight text-lg lg:text-2xl mb-3 lg:mb-5">Une Porte
                                    Ouverte sur l'Opportunité</h3>
                                <p class="text-sm lg:text-base text-slate-300">
                                    En organisant des meetups et des conférences techniques,
                                    nous façonnons un espace chaleureux où les développeurs
                                    peuvent échanger leurs expériences, partager des connaissances
                                    et tisser des partenariats fructueux. Ensemble,
                                    nous construisons une communauté solide et soudée.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="latest-events" class="section">
            <x-background-shape />
            <div class="contained">
                <div class="grid grid-cols-12 gap-4 lg:gap-8">
                    <div
                        class="relative order-2 lg:order-1 col-span-full lg:col-span-6 grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-8">
                        <img src="/images/dots-full-orange.svg" class="hidden lg:block absolute left-0 xl:left-auto xl:right-0 bottom-0 ml-2 md:ml-4 xl:-mr-12 -mb-4 md:-mb-8 xl:-mb-20 w-12 h-12 md:w-24 md:h-24 xl:w-56 xl:h-56">
                        <img src="/images/dots-full-green.svg" class="hidden lg:block absolute left-0 xl:left-auto xl:right-0 -top-10 ml-2 md:ml-4 xl:-mr-12 -mb-4 md:-mb-8 xl:-mb-20 w-12 h-12 md:w-24 md:h-24 xl:w-56 xl:h-56">
                        <div data-reveal class="zoom-image-container translate-y-0 lg:-translate-y-8">
                            <img src="/images/events/event-1.jpg" alt=""
                                 class="l-[250px] lg:h-full max-w-full w-full rounded-xl object-cover">
                        </div>
                        <div class="flex lg:flex-col gap-4">
                            <div data-reveal data-reveal-delay="150" class="zoom-image-container">
                                <img src="/images/events/event-2.jpg" alt=""
                                     class="w-full lg:min-h-[320px] h-auto object-cover rounded-xl">
                            </div>
                            <div data-reveal data-reveal-delay="150" class="zoom-image-container">
                                <img src="/images/events/event-3.jpg" alt=""
                                     class="w-full lg:min-h-[320px] h-auto object-cover rounded-xl">
                            </div>
                        </div>
                    </div>

                    <div data-reveal data-reveal-origin="right"
                         class="order-1 lg:order-2 col-start-1 lg:col-start-8 col-span-full lg:col-span-4 mb-0 lg:mb-4">
                        <h2 class="h2">Notre dernier <span>Événement</span></h2>
                        <p class="text-slate-600 text-sm lg:text-lg mb-4 lg:mb-8">
                            Plongez-vous dans l'univers captivant du développement lors de nos événements,
                            où l'innovation, le partage de connaissances et le réseautage
                            ouvrent de nouvelles perspectives pour votre parcours professionnel.
                        </p>
                        <div class="flex flex-col divide-y divide-slate-200">
                            <div class="flex gap-6 items-center py-2 lg:py-4 text-sm lg:text-base">
                                @svg('heroicon-o-megaphone', 'h-4 w-5 lg:h-6 lg:w-6 text-slate-600')
                                <span class="text-slate-500">Theme : </span>
                                <span class="flex-1 line-clamp-1">Première retrouvaille</span>
                            </div>

                            <div class="flex gap-6 items-center py-2 lg:py-4 text-sm lg:text-base">
                                @svg('heroicon-o-map-pin', 'h-4 w-5 lg:h-6 lg:w-6 text-slate-600')
                                <span class="text-slate-500">Lieu : </span>
                                <span class="flex-1 line-clamp-1">Entraide Congo, Brazzaville</span>
                            </div>

                            <div class="flex gap-6 items-center py-2 lg:py-4 text-sm lg:text-base">
                                @svg('heroicon-o-user-group', 'h-4 w-5 lg:h-6 lg:w-6 text-slate-600')
                                <span class="flex-1 line-clamp-1">250 Participants</span>
                            </div>
                        </div>
                        <a href="#"
                           class="block text-center lg:inline-block py-2.5 px-8 rounded-full mt-3 lg:mt-6 bg-accent-500 animated-button font-medium text-white">
                            <span>Voir tous les événements</span>
                            @svg('heroicon-o-arrow-right')
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="latest-news" class="section bg-orange-50 overflow-hidden">
            <img src="/images/star-circle-right.svg"
                 class="hidden lg:block absolute top-0 right-0 xl:mt-10 -mr-24 lg:-mr-0">

            <div class="relative px-4 mx-auto contained">
                <h2 data-reveal class="h2 text-center mb-6 md:mb-12 lg:mb-24">Les dernières <span>Nouvelles</span></h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-12 mb-6 lg:mb-12">
                    <article data-reveal>
                        <a href="#" class="flex flex-col gap-2 lg:gap-4">
                            <span class="block zoom-image-container">
                                <img src="/images/events/event-1.jpg" alt="Event 1"
                                     class="w-full object-cover rounded-2xl">
                            </span>
                            <time class="text-slate-500 block font-medium text-xs lg:text-base"
                                  datetime="{{ now()->subDays(10)->toIso8601String() }}">{{ now()->subDays(10)->format('d M Y') }}</time>
                            <span class="text-lg lg:text-2xl font-semibold text-gray-900 group-hover:text-accent-500">Consectures Dummy Content Velit officia consequat duis enim velit</span>
                            <span class="block lg:max-w-xl text-sm lg:text-base text-slate-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit xercitation veniam consequat sunt nostrud amet.</span>
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
                                    <time class="block text-slate-500 text-xs lg:text-sm font-medium"
                                          datetime="{{ now()->subDays(10)->toIso8601String() }}">{{ now()->subDays(10)->format('d M Y') }}</time>
                                    <span
                                        class="block text-base lg:text-lg font-semibold text-gray-900 transition-colors duration-300 group-hover:text-accent-500 mb-2 lg:mb-4">Consectures Dummy Content Velit officia consequat duis enim velit</span>
                                    <span class="block max-w-xl text-sm lg:text-base text-slate-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</span>
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
                                    <time class="block text-slate-500 text-xs lg:text-sm font-medium"
                                          datetime="{{ now()->subDays(10)->toIso8601String() }}">{{ now()->subDays(10)->format('d M Y') }}</time>
                                    <span
                                        class="block text-base lg:text-lg font-semibold text-gray-900 transition-colors duration-300 group-hover:text-accent-500 mb-2 lg:mb-4">Consectures Dummy Content Velit officia consequat duis enim velit</span>
                                    <span class="block max-w-xl text-sm lg:text-base text-slate-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</span>
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
                                    <time class="block text-slate-500 text-xs lg:text-sm font-medium"
                                          datetime="{{ now()->subDays(10)->toIso8601String() }}">{{ now()->subDays(10)->format('d M Y') }}</time>
                                    <span
                                        class="block text-base lg:text-lg font-semibold text-gray-900 transition-colors duration-300 group-hover:text-accent-500 mb-2 lg:mb-4">Consectures Dummy Content Velit officia consequat duis enim velit</span>
                                    <span class="block max-w-xl text-sm lg:text-base text-slate-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</span>
                                </span>
                            </a>
                        </article>
                    </div>
                </div>

                <div class="flex justify-center">
                    <a href="#"
                       class="block text-center lg:inline-block py-2.5 px-8 rounded-full bg-accent-500 animated-button font-medium text-white">
                        <span>Voir plus de nouvelles</span>
                        @svg('heroicon-o-arrow-right')
                    </a>
                </div>

            </div>
        </section>
    </main>
@endsection
