@extends('layouts.main')

@section('isi')
    <div class="latest d-flex justify-between items-center mb-2">
        <h4 class="text-white position-relative"> {{ $judul }}</h4>
    </div>


    @if ($posts->count())
        <div class="row row-cols-2 row-cols-lg-5
    g-2 g-lg-3 mb-5">
            @foreach ($posts as $post)
                <div class="col">
                    <div class="border border-light border-opacity-50 rounded">
                        <div class="overflow-hidden position-relative">
                            <a href="/post/{{ $post->slug }}">
                                <div class="position-absolute bad">
                                    <span
                                         class="bg-primary text-center px-2 text-white bor">{{ $post->category->name }}</span>
                                 </div>
                                <img src="/img/{{ $post->img }}" alt="{{ $post->title }}" title="{{ $post->title }}"
                                    class="img-fluid rounded-top">
                            </a>
                            <div class="px-2 py-2 link text-center">
                                <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center fs-4 text-white-50 mt-4">No Post Found</p>
    @endif

    {{ $posts->links('vendor.pagination.default') }}
@endsection
