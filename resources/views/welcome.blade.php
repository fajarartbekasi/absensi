<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    </head>
    <body class="bg-white">
        <div id="app">
            <main class="">
                @include('layouts.navbar')
                <div class="container pt-3">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <div class="">
                                <h6 class="text-white">
                                    Sistem Absensi & Kehadiran Siswa
                                </h6>
                                <h3 class="font-weight-bold text-white">
                                    Aplikasi Absensi Online Untuk Efisiensi Waktu
                                </h3>
                            </div>

                            <div class="pt-3">
                                <div class="form-check form-switch">
                                    <input type="checkbox" id="flexSwitchChecked" role="checkbox" class="form-check-input" checked>
                                    <label for="flexSwitchChecked" class="text-white">
                                        Semua fitur dalam satu aplikasi
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" id="flexSwitchChecked" role="checkbox" class="form-check-input" checked>
                                    <label for="flexSwitchChecked" class="text-white">
                                        Tidak ada lagi kesalahan input manual
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" id="flexSwitchChecked" role="checkbox" class="form-check-input" checked>
                                    <label for="flexSwitchChecked" class="text-white">
                                        Hemat biaya tanpa perlu mesin fingerprint
                                    </label>
                                </div>
                            </div>
                        </div>
                        {{--  <div class="d-flex justify-content-center">
                            <img src="{{asset('image/undraw_schedule_meeting_52nu.png')}}" alt=""
                                 width="70%"
                                 height="100%" class="">
                        </div>  --}}
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
