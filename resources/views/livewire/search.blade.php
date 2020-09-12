<div>
    <?php
        use App\Models\User;
        $user = Auth::user();
    ?>
    <div style="height: 400px;">
        <div style="background-image: url('/img/cooking2.jpg'); background-size:cover; background-position:center" class="h-full">
            <div class="flex items-center justify-center h-full">
                <div 
                    class="relative w-11/12 sm:w-3/4 sm:w-2/4 md:w-2/4"
                    x-data="{ isOpen : true}"
                    @click.away = "isOpen = false">
                    <input id="search"
                        wire:model="search"
                        x-ref="search"
                        @keydown.window="
                            if(event.keyCode === 191){
                                event.preventDefault();
                                $refs.search.focus();
                            }
                        "
                        class="text-teal-500 text-xl font-semibold font-nunito w-full pl-6 pr-16 py-5 rounded-md opacity-75 outline-none focus:opacity-100 transition ease-in duration-300" name="search" placeholder="Search Recipe (Press / to focus)"
                        @focus = "isOpen = true"
                        @keydown.escape.window="isOpen = false"
                    >
                    <div class="absolute right-0 top-0 mt-5 mr-5 text-teal-600">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="search h-8">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    @if($searchResults->count() > 0)
                        <div
                        class="absolute top-16 bg-white rounded-b-md w-full font-nunito font-semibold z-40"
                        x-show.transition.opacity="isOpen">
                            <ul>
                                @foreach($searchResults as $sr)
                                <li>
                                    <a href="{{ route('show-recipe', ['id'=>$sr['id']]) }}" class="flex justify-between bg-white px-6 py-3 rounded-b-md transition hover:bg-gray-200 ease-out duration-200">
                                        <span>{{$sr['title']}}</span>
                                        <span class="text-xs">By {{User::where('id', '=', $sr['user_id'])->value('name')}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    @elseif($search != null && $searchResults->count() <= 0)
                        <div
                        class="absolute top-16 bg-white rounded-b-md w-full mt1 font-nunito font-semibold z-40"
                        x-show.transition.opacity="isOpen">
                            <ul>
                                <li>
                                    <div class="block bg-white px-6 py-3 rounded-b-md">No result found for "{{$search}}"</div>
                                </li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @livewire('content')
</div>