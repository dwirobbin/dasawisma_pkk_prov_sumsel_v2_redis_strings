<x-app-layout>
    <div class="page-center">
        <div class="page-body">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-lg">
                        <div class="container container-tight">
                            <div class="text-center mb-4">
                                <img src="{{ asset('src/img/logo-favicon/prov-sumsel.png') }}" height="36" class="avatar avatar-md shadow-none"
                                    alt="">
                                <img src="{{ asset('src/img/logo-favicon/logo-pkk.png') }}" height="36" class="avatar avatar-md shadow-none"
                                    alt="">
                            </div>

                            @if (session()->has('message'))
                                <div class="alert alert-important alert-{{ session('message')['type'] }} alert-dismissible" role="alert">
                                    <div class="d-flex">
                                        @if (session('message')['type'] == 'success')
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check me-2"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                <path d="M9 12l2 2l4 -4"></path>
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon me-1" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="12" cy="12" r="9"></circle>
                                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                            </svg>
                                        @endif
                                        <div>{{ session('message')['text'] }}</div>
                                    </div>
                                    <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
                                </div>
                            @endif

                            <div class="card card-md">
                                <div class="card-body">
                                    <h2 class="text-center mb-4">Cek Email Anda</h2>
                                    <div class="text-center text-muted">
                                        <p class="fs-h3">
                                            Kami telah mengirimkan tautan reset password ke email <strong>{{ $email }}</strong>.<br />
                                            Silahkan klik tautan tersebut untuk mengatur ulang kata sandi akun anda.
                                        </p>
                                        <p class="mt-3">
                                            Email tidak masuk? Periksa folder spam.<br />
                                            Email salah atau tautan sudah tidak berlaku? klik tombol di bawah ini untuk mengirim tautan baru.
                                        </p>
                                    </div>
                                    <div class="form-footer">
                                        <a wire:navigate href="{{ route('password.request') }}" class="btn btn-primary w-100">
                                            Kirim Ulang
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg d-none d-lg-block">
                        <img src="{{ asset('src/svg/undraw_new_message_re_fp03.svg') }}" height="300" class="d-block mx-auto" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name='scripts'>
        <script>
            $(document).ready(function() {
                setTimeout(() => {
                    $(".alert").slideUp(500, () => $(this).remove());
                }, 5000);
            });
        </script>
    </x-slot>
</x-app-layout>
