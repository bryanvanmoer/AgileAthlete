<x-layout>
        <article>
            <h1>
               {{ $address->country }}
            </h1>
            <div>
                {{ $address->street }}, {{$address->number}} <br>
                {{ $address->city }}, {{$address->postal_code}}
            </div>
        </article>
        <p><a href="/">Go Back</a></p>
</x-layout>
