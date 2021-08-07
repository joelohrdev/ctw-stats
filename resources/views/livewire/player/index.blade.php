<div>
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 text-center sm:px-6 lg:px-8 lg:py-12">
            <div class="space-y-8 sm:space-y-12">
                <div class="space-y-5 sm:mx-auto sm:max-w-xl sm:space-y-4 lg:max-w-5xl">
                    <h2 class="text-ctwBlue text-3xl font-extrabold tracking-tight sm:text-4xl">10U 2021-2022</h2>
                </div>
                <ul class="mx-auto grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-4 md:gap-x-6 lg:max-w-5xl lg:gap-x-8 lg:gap-y-12 xl:grid-cols-6">
                    @foreach($players as $player)
                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="{{ $player->avatar ?? 'https://cdn.codm.gg/assets/dummy-avatar.jpg' }}" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3 class="text-ctwBlue">{{ $player->name }}</h3>
                                    @if($player->number)<p class="text-ctwOrange">#{{ $player->number }}</p>@endif
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</div>
