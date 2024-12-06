<x-layout>
    <h2>{{ $dojo->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Location:</strong> {{ $dojo->location }}</p>
        <p><strong>About me:</strong> {{ $dojo->description }}</p>
    </div>


    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <p>
            <strong>All my ninjas:</strong>
        <ol>
            @forelse ($dojo->ninja as $ninjas)
                <li>
                    <a href="{{ route('ninja.show', $ninjas->id) }}">
                        {{ $ninjas->name ?? 'No ninja available' }},
                        skill({{ $ninjas->skill ?? 'unknown' }})
                    </a>
                </li>
            @empty
                <li>No ninjas available in this dojo.</li>
            @endforelse
        </ol>
        </p>
    </div>

    <form action="{{ route('dojo.delete', $dojo->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Dojo</button>
    </form>


</x-layout>
