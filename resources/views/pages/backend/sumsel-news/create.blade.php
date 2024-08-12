<x-app-layout>
    <x-slot name="styles">
        {{-- tinymce5 --}}
        <script src="{{ asset('src/libs/tinymce5/jquery.tinymce.min.js') }}" data-navigate-track></script>
        <script src="{{ asset('src/libs/tinymce5/tinymce.min.js') }}" data-navigate-track></script>
    </x-slot>

    <div class="layout-fluid">

        {{-- Page header --}}
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col-6">
                        <div class="text-muted mb-1">
                            <div class="d-flex">
                                <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
                                    <li class="breadcrumb-item">
                                        <a wire:navigate href="{{ route('area.sumsel_news.index') }}">
                                            Berita Sumsel
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        <a href="javascript:void(0);">Tambah</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <h2 class="page-title">Tambah Artikel Berita Sumsel</h2>
                    </div>
                    <div class="col-auto ms-auto">
                        <a wire:navigate href="{{ route('area.sumsel_news.index') }}" class="btn btn-info">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M5 12l6 6" />
                                <path d="M5 12l6 -6" />
                            </svg>
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page body -->
        <div class="page-body pb-2">
            <div class="container-xl">
                <livewire:app.backend.sumsel-news.create />
            </div>
        </div>
    </div>
</x-app-layout>
