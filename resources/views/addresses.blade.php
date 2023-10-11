<x-layout>
    @include('_address-header');


    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-address-featured-card :address="$addresses[0]"/>

{{--        <div class="lg:grid lg:grid-cols-2">
            <x-address-card/>
            <x-address-card/>
        </div>

        <div class="lg:grid lg:grid-cols-3">
            <x-address-card/>
            <x-address-card/>
            <x-address-card/>
        </div>--}}
    </main>

    {{--    @foreach($addresses as $address)
        <article>
            <h1>
                <a href="/addresses/{{ $address->id }}">
                    {{ $address->country }} [{{$address->id}}]
                </a>
            </h1>
            <div>
                {{ $address->street }}, {{$address->number}} <br>
                {{ $address->city }}, {{$address->postal_code}}
            </div>
        </article>
    @endforeach--}}
</x-layout>
