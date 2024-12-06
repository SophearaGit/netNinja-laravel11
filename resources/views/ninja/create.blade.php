<x-layout>
    <form action="{{ route('ninja.store') }}" method="post">
        @csrf

        <h2>Create a New Ninja</h2>
        <label for="name">Ninja Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>

        <label for="skill">Ninja Skill (0-100)</label>
        <input type="number" id="skill" name="skill" value="{{ old('skill') }}" required>

        <label for="bio">Biography:</label>
        <textarea rows="5" id="bio" name="bio" required>{{ old('bio') }}</textarea>

        <label for="dojo_id">Dojo:</label>
        <select name="dojo_id" id="dojo_id" required>
            <option value="" disabled selected>Select a dojo</option>
            @foreach ($dojo as $dojos)
                <option value="{{ $dojos->id }}" {{ $dojos->id == old('dojo_id') ? 'selected' : '' }}>
                    {{ $dojos->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn mt-4">Create Ninja</button>
    </form>

    {{-- validation errors --}}
    @if ($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif






</x-layout>
