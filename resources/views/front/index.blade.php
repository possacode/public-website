@extends('layouts/default')

@section('content')
    <main>
        <div class="contained px-4 sm:px-6 pt-8 lg:px-8 pb-8 lg:pb-32 text-center">
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:items-center gap-8 w-full">
                <div class="flex flex-col text-left">
                    <h1 data-reveal class="font-semibold tracking-tight leading-[1.1] text-slate-900 text-3xl lg:text-5xl">
                        <span class="text-accent-500">PossaCode, </span>
                        une communauté
                        <span class="text-accent-500"> innovante </span>
                        de <span class="text-accent-500"> développeurs </span>
                        en Afrique.
                    </h1>

                    <p data-reveal data-reveal-delay="150" class="lt-3 lg:mt-6 max-w-2xl text-sm lg:text-xl tracking-tight text-slate-700">
                        Nous somme une association dynamique dédiée à la formation
                        et à l'organisation d'événements de rencontre pour les
                        développeurs en Afrique.
                    </p>

                    <div class="mt-10 flex flex-col lg:flex-row gap-2 lg:gap-6">
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
                <div class="w-full hidden lg:block">
                    <img data-reveal data-reveal-origin="right" src="/images/header-img.png" alt="Header image" class="max-w-full h-auto" />
                </div>
            </div>
        </div>

        <section class="bg-gradient-to-br  from-[#46499c] via-[#2F3162] to-[#1F2151]  relative overflow-hidden py-24 text-white">
            <div class="contained">
                <div class="max-w-3xl mx-auto text-center pb-24">
                    <h2 data-reveal class="font-semibold text-4xl mb-4 leading-snug">
                        Notre Engagement envers l'Excellence Développeur en Afrique
                    </h2>

                    <p data-reveal data-reveal-delay="100" class="text-slate-300 text-lg">
                        Transmettre l'excellence aux futurs développeurs en partageant des parcours
                        inspirants pour encourager la passion technologique et le succès personnel.
                    </p>
                </div>

                <div class="grid grid-cols-2 lg:grid-cols-12 items-center gap-4 mb-24">
                    <div class="col-span-full col-start-1 lg:col-span-5 lg:col-start-7 lg:order-2">
                        <img data-reveal data-reveal-origin="right" src="/images/learning.png" alt="Teaching icon" class="max-w-full h-auto" />
                    </div>
                    <div class="col-start-1 lg:col-start-2 col-span-full lg:col-span-4 lg:order-1">
                        <div data-reveal data-reveal-origin="left" class="text-left flex flex-col">
                            <h3 class="font-semibold tracking-tight text-2xl mb-3 lg:mb-5">Développement des Compétences<br></br> Techniques</h3>
                            <p class="text-slate-300">
                                Chez PossaCode, nous croyons fermement que des compétences techniques solides
                                sont essentielles pour façonner l'avenir de l'Afrique.
                                Nous proposons une variété de formations de pointe, des ateliers pratiques et
                                des hackathons stimulants pour permettre aux développeurs africains de maîtriser
                                les dernières technologies et de rester à la pointe de l'innovation.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="grid grid-cols-2 lg:grid-cols-12 items-center gap-4 mb-24">
                    <div class="col-start-1 lg:col-start-2 col-span-full lg:col-span-4">
                        <img data-reveal data-reveal-origin="left" src="/images/team_collaboration.png" alt="Team collaboration" class="max-w-full h-auto z-10" />
                    </div>
                    <div class="col-span-full col-start-1 lg:col-span-5 lg:col-start-7">
                        <div data-reveal data-reveal-origin="right" class="text-left flex flex-col">
                            <h3 class="font-semibold tracking-tight text-2xl mb-3 lg:mb-5">Une Communauté Collaborative</h3>
                            <p class="text-slate-300">
                                Nous sommes convaincus que le pouvoir du réseau est  inestimable.
                                En organisant des meetups et des conférences techniques,
                                nous créons un espace chaleureux où les développeurs peuvent
                                échanger leurs expériences, partager des connaissances
                                et construire des partenariats fructueux. Ensemble,
                                nous bâtissons une communauté solide et soudée.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="grid grid-cols-2 lg:grid-cols-12 items-center gap-4 mb-24">
                    <div class="col-span-full col-start-1 lg:col-span-5 lg:col-start-7 lg:order-2">
                        <div data-reveal data-reveal-origin="right" class="relative w-full">
                            <div class="-z-[5] absolute w-full h-full scale-[0.2] bg-accent-500 rounded-full left-0 top-0"></div>
                            <div class="-z-10 absolute w-full h-full scale-50 bg-accent-500/70 rounded-full left-[50%] translate-x-[-50%]"></div>

                            <img src="/images/business_decisions.png" alt="Teaching icon" class="max-w-full h-auto z-10" />
                        </div>
                    </div>
                    <div class="col-start-1 lg:col-start-2 col-span-full lg:col-span-4 lg:order-1">
                        <div data-reveal data-reveal-origin="left" class="text-left flex flex-col">
                            <h3 class="font-semibold tracking-tight text-2xl mb-3 lg:mb-5">Une Porte Ouverte sur l'Opportunité</h3>
                            <p class="text-slate-300">
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
        </section>
    </main>
@endsection
