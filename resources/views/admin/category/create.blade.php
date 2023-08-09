@extends('layouts.admin')
@section('title', 'Nouvelle catégorie')

@section('content')
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            @yield('title')
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('admin.index')  }}">Dashboard / </a>
                </li>
                <li>
                    <a class="font-medium" href="{{ route('admin.category.index')  }}">Catégories / </a>
                </li>
                <li class="font-medium text-primary">Nouveau</li>
            </ol>
        </nav>
    </div>

    <div class="grid grid-cols-1 gap-9 sm:grid-cols-2">
        <form method="post" action="{{ route('admin.category.create') }}">
            @csrf

            <div class="flex flex-col gap-9">
                <!-- Input Fields -->
                <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark">
                        <h3 class="font-medium text-black dark:text-white">
                            Input Fields
                        </h3>
                    </div>

                    <div class="flex flex-col gap-5.5 p-6.5">

                        <x-input name="name" label="Nom" required />
                        <x-input name="slug" label="Slug" placeholder="Ex: programmation-informatique" />

                        <div>
                            <label for="description" class="mb-3 block text-sm font-medium text-black dark:text-white">Description</label>
                            <textarea id="description" name="description" rows="6" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">{{ old('description') }}</textarea>
                        </div>

                        <x-button>Enregistrer</x-button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
