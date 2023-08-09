@extends('layouts.admin')
@section('title', 'Liste des catégories')

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
                <li class="font-medium text-primary">Catégories</li>
            </ol>
        </nav>
    </div>

    <x-button tag="a" href="{{ route('admin.category.create') }}" class="mb-4">Nouveau</x-button>

    <div class="flex flex-col gap-10">
        <!-- ====== Table Three Start -->
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="max-w-full overflow-x-auto">
                <table class="w-full table-auto">
                    <thead>
                    <tr class="bg-gray-2 text-left dark:bg-meta-4">
                        <th class="min-w-[220px] py-4 px-4 font-medium text-black dark:text-white xl:pl-11">
                            Nom
                        </th>
                        <th class="min-w-[150px] py-4 px-4 font-medium text-black dark:text-white">
                            Slug
                        </th>
                        <th class="min-w-[120px] py-4 px-4 font-medium text-black dark:text-white">
                            Description
                        </th>
                        <th class="py-4 px-4 font-medium text-black dark:text-white">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td class="border-b border-[#eee] py-5 px-4 pl-9 dark:border-strokedark xl:pl-11">
                                <span class="font-medium text-black dark:text-white">{{ $category->name }}</span>
                            </td>
                            <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                <span class="text-black dark:text-white">{{ $category->slug }}</span>
                            </td>
                            <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                <span class="text-black dark:text-white">{{ $category->description }}</span>
                            </td>
                            <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                <div class="flex items-center space-x-3.5">
                                    <a href="{{ route('admin.category.edit', ['category' => $category]) }}" class="flex items-center space-x-1.5 bg-primary px-2.5 py-1.5 rounded text-sm text-white hover:bg-primary/90">
                                        @svg('heroicon-o-pencil', 'w-4 h-4')
                                        <span>Editer</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ====== Table Three End -->
    </div>
@endsection
