@extends('layouts.app')

@section('titulo')
    Titulo
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css"/>
@endpush

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-6/12 md:items-center">
            <form action="{{route("image.store")}}" method="POST" enctype="multipart/form-data" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 
            rounded flex flex-col justify-center items-center">
            @csrf
            </form>
        </div>
        <div class="md:w-6/12 md:items-center bg-white p-6 rounded-lg shadow-xl mt-10 md:mt-0 ">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf

                <div class="mb-5">
                    <label for="title" class="mb-2 block uppercase text-gray-500 font-bold">
                        Title
                    </label>
                    <input id="title" name="title" type="text" placeholder="Title"
                        class="border p-3 w-full rounded-lg @error('title')border-red-500 @enderror"
                        value={{ old('title') }}>
                    @error('title')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="description" class="mb-2 block uppercase text-gray-500 font-bold">
                        Description
                    </label>
                    <textarea id="description" name="description" type="text" placeholder="Public Description"
                        class="border p-3 w-full rounded-lg @error('description')border-red-500 
                        @enderror">{{ old('description')}}</textarea>

                    @error('description')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>
                <input
                type="submit"
                value="Create Post"
                class="bg-sky-600 hover:bg:sky:700 transition-colors cursor-pointer
                uppercase font-bold  w-full p-3 text-white rounded-lg"/>

            </form>

        </div>

    </div>
@endsection
