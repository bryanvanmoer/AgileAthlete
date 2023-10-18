<x-layout>
    @include('_home-header');


    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if($posts->count())
            <x-player-featured-card :player="$players[0]"/>

            @if($posts->count() > 1)
                <div class="lg:grid lg:grid-cols-3">
                    @foreach($players->skip(1) as $user)
                        <x-user-card :post="$post"/>
                    @endforeach
                </div>
            @endif

        @else
            <p class="text-center">No users yet. Please check back later.</p>
        @endif

    </main>
</x-layout>
