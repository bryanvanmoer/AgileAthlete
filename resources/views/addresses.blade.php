<x-layout>
    @foreach($addresses as $address)
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
    @endforeach
</x-layout>
