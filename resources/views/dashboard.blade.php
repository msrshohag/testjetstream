<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ Auth::user()->name }} -- {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}

                @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->utype === 'ADM')

                            <livewire:admin.admin-dashboard />

                        @elseif (Auth::user()->utype === 'EMP')

                            <livewire:employee.employee-dashboard />

                        @elseif (Auth::user()->utype === 'USR')

                            <livewire:user.user-dashboard />

                        @else
                        
                            {{ Auth::user()->name }}
                            ---
                            <a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>

                        @endif
                    @else
                        <li class="menu-item"><a title="Login" href="{{ route('login') }}">Login</a></li>
                        <li class="menu-item"><a title="Register" href="{{ route('register') }}">Register</a></li>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </x-app-layout>
