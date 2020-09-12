<div class="bg-white shadow-lg z-50">
    <nav>
        <div class="flex items-center justify-between px-4 py-4 sm:px-8 md:px-16">
            <ul class="flex items-center">
                <li>
                    <a class="flex items-center" href="{{ route('home')}}">
                        <svg class="h-16 fill-current text-teal-500" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                            <path d="M58.888 42.617a11.3 11.3 0 01-10.055 1.44 1 1 0 00-.915.127l-4.5 3.191 1.158 1.631 4.083-2.9a13.366 13.366 0 0011.345-1.833 14.191 14.191 0 001.671-1.322l-1.356-1.47a12.051 12.051 0 01-1.431 1.136z"/>
                            <path d="M48.818 27.693a9.093 9.093 0 00-4.141 8.672L32 44.491 19.321 36.37a9.052 9.052 0 00-4.145-8.67 9.561 9.561 0 00-6.52-1.626 7.4 7.4 0 00-6.378 9.454 9.554 9.554 0 003.951 5.432 9.05 9.05 0 009.6.593l9.841 6.987-9.365 6.005a3.919 3.919 0 00-1.142 5.507 3.926 3.926 0 005.525 1L32 53.03l11.312 8.028a3.93 3.93 0 104.388-6.514l-9.376-6 9.848-6.99a9.05 9.05 0 009.6-.591c4.11-2.774 5.452-8.008 2.989-11.668s-7.824-4.376-11.943-1.602zM19.53 59.425a1.974 1.974 0 01-2.712-.495 1.921 1.921 0 01.561-2.7l10.049-6.444 2.839 2.014zm27.94-1.963a1.93 1.93 0 01-3.006 1.965l-28.039-19.9a1 1 0 00-1.168.008 6.93 6.93 0 01-7.91-.233 7.562 7.562 0 01-3.136-4.29 5.4 5.4 0 014.7-6.959 7.563 7.563 0 015.152 1.3 6.93 6.93 0 013.174 7.247 1 1 0 00.43 1.087l28.954 18.542a1.912 1.912 0 01.849 1.233zM56.65 39.3a6.931 6.931 0 01-7.911.231 1 1 0 00-1.168-.008l-11.063 7.854-2.652-1.7 12.474-8a1 1 0 00.43-1.085 6.965 6.965 0 013.178-7.247c3.2-2.157 7.314-1.681 9.163 1.058s.748 6.74-2.451 8.897zM12.927 3.833L11.82 2.167a13 13 0 00-5.077 15.167l1.885-.668a11 11 0 014.3-12.833zM10.75 20.268A11.125 11.125 0 019.476 18.5l-1.731 1a13.115 13.115 0 001.505 2.09z"/>
                            <path d="M42.98 36.2l2.847-14.234A9 9 0 0045 4a8.888 8.888 0 00-5.568 1.935 8.986 8.986 0 00-14.864 0A8.888 8.888 0 0019 4a9 9 0 00-.827 17.962L21.02 36.2l1.96-.392L22.42 33h19.16l-.56 2.8zM38.153 31l.837-5.858-1.98-.284L36.133 31H33V20h-2v11h-3.133l-.877-6.142-1.98.284.837 5.858H22.02l-2.04-10.2A1 1 0 0019 20a7 7 0 010-14 6.931 6.931 0 015.083 2.2 1 1 0 001.626-.25 6.986 6.986 0 0112.582 0 1 1 0 001.626.25A6.931 6.931 0 0145 6a7 7 0 010 14 1 1 0 00-.98.8L41.98 31z"/>
                        </svg>  
                        <span class="font-bold font-lora italic text-3xl tracking-tight text-teal-700 ml-3 pb-1">Ourecipe</span>
                    </a>
                </li>
            </ul>
            @if (Route::has('login'))
            <div class="flex">
                @auth
                    <div class="mb-1 flex items-center">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex text-sm border-2 border-transparent rounded-full hover:border-teal-500 focus:outline-none focus:border-teal-500 transition duration-150 ease-in-out">
                                    <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="" />
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Manage Account
                                </div>

                                <x-jet-dropdown-link href="/user/profile">
                                    Profile
                                </x-jet-dropdown-link>

                                <x-jet-dropdown-link href="{{ route('my-recipe') }}">
                                    My Recipe
                                </x-jet-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="/user/api-tokens">
                                    API Tokens
                                </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                <!-- Team Management -->
                                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Manage Team
                                </div>

                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="/teams/{{ Auth::user()->currentTeam->id }}">
                                    Team Settings
                                </x-jet-dropdown-link>

                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-dropdown-link href="/teams/create">
                                    Create New Team
                                </x-jet-dropdown-link>
                                @endcan

                                <div class="border-t border-gray-100"></div>

                                <!-- Team Switcher -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Switch Teams
                                </div>

                                @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" />
                                @endforeach

                                <div class="border-t border-gray-100"></div>
                                @endif

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                        Logout
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @else
                    <div class="flex items-center">
                        <a href="{{ route('login') }}" class="font-semibold font-nunito border border-teal-600 text-teal-600 rounded-md hover:bg-teal-600 hover:text-white px-5 py-1 transition ease-in duration-300">LOGIN</a>
                    </div>
                @endif
                </div>
            @endif
        </div>
    </nav>
</div>