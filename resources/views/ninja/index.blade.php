<x-layout>

    <h2>Currently Available Ninjas</h2>

    <ul>
        @foreach ($ninja as $ninjas)
            <li>
                <x-ninjaComponent.card href="{{ route('ninja.show', $ninjas->id) }}" :highlight="$ninjas->skill >= 90">
                    <div>
                        <h3>{{ $ninjas->name }}</h3>
                        <span class="badge text-bg-danger">{{ $ninjas->dojo->name }}</span>
                    </div>
                </x-ninjaComponent.card>
            </li>
        @endforeach
    </ul>

    {{ $ninja->links() }}


</x-layout>
