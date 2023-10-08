<x-layout>
    @foreach($addresses as $address)
        <article>
            <h1>
                <a href="/addresses/{{ $address }}">
                    {{ $address->country }}
                </a>
            </h1>
            <div>
                {{ $address->street }}, {{$address->number}} <br>
                {{ $address->city }}, {{$address->postal_code}}
            </div>
        </article>
    @endforeach
</x-layout>
