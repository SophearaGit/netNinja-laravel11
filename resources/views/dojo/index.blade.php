<x-layout>

    <h2>Currently Available Dojos</h2>
    <ul>
        @foreach ($dojo as $dojos)
            <li>
                <x-dojoComponent.card href="{{ route('dojo.show', $dojos->id) }}" :highlight="$dojos->location == 'Alisonville'">
                    <div>
                        <h3>{{ $dojos->name }}</h3>
                        <ol>
                            @foreach ($dojos->ninja as $ninja)
                                <li>{{ $ninja->name }}</li>
                            @endforeach
                        </ol>
                    </div>
                </x-dojoComponent.card>
            </li>
        @endforeach
    </ul>

    {{ $dojo->links() }}

</x-layout>
