@extends('layouts.main')

@section('isi')
    <div class="latest d-flex justify-between items-center mb-2">
        <h4 class="text-white position-relative"> Post Categories</h4>
    </div>

    <div class="row row-cols-2 row-cols-lg-5
            g-2 g-lg-3">
        @foreach ($categories as $category)
            <div class="col">
                <div class="border border-light border-opacity-50 rounded">
                    <div class="overflow-hidden position-relative">
                        <a href="/?category={{ $category->slug }}">
                            <img src="/img/category/{{ $category->img }}" alt="{{ $category->name }}"
                                title="{{ $category->name }}" class="img-fluid rounded-top">
                        </a>
                        <div class="px-2 py-2 link text-center">
                            <a href="/?category={{ $category->slug }}">{{ $category->name }}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
