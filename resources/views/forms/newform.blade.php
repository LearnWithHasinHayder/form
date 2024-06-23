<x-layout title="Normal Form">
    <hgroup>
        <h1>Form Example</h1>
        <p>Form Validation Example</p>
    </hgroup>

    <form enctype="multipart/form-data" action="{{ route('form.post') }}" method="POST">
        @csrf
        <label>Name</label>
        <input name="name" value='{{ old('name') }}'>
        <p>
            @error('name')
                {{ $message }}
            @enderror
        </p>
        <label>Email</label>
        <input name="email" value='{{ old('email') }}'>
        <p>
            @error('email')
                {{ $message }}
            @enderror
        </p>
        <br />
        <label>Price</label>
        <input name="price" type=number value='{{ old('price') }}'>
        <button type="submit">Submit</button>

        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        {{-- @if ($errors->any())
            @foreach ($errors->all() as $key => $error)
                <p>{{ $key }} : {{ $error }}</p>
            @endforeach
        @endif --}}

    </form>
</x-layout>
