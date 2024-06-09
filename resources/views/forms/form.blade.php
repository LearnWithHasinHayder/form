<x-layout title="Normal Form">
    <hgroup>
        <h1>Form Example</h1>
        <p>How to create and handle forms in Laravel</p>
    </hgroup>

    <form enctype="multipart/form-data" action="{{ route('form.post') }}" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name">
        <label>Email</label>
        <input name="email">
        <label>Profile Picture</label>
        <input type="file" name="profile_picture">
        <br />
        <button type="submit">Submit</button>

        <p>
            @if (session('profile_picture'))
                <img src="{{ session('profile_picture') }}" alt="">
            @endif
        </p>

        <p>
            @if($errors->any())
                <p>{{ $errors->first() }}</p>
            @endif
        </p>

        {{-- <p>{{session("success")}}</p>
        <p>{{session("name")}}</p>
        <p>{{session("email")}}</p> --}}
        {{-- <p>{{ session("error") }}</p> --}}
    </form>
</x-layout>
