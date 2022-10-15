@extends('layouts.main')

@section('isi')
    <div class="text-center">
        <img src="/img/{{ $post->img }}" alt="{{ $post->title }}" title="{{ $post->title }}" class="img-fluid rounded"
            width="400" height="355">
    </div>
    <div class="text-white-50 mt-4">
        <h4>{{ $post->title }}</h4>
        <ul class="list-unstyled">
            <li>
                <strong>Author</strong> : <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                {{-- <strong>Author</strong> : <a href="/?author={{ $post->author->username }}">Key</a> --}}
            </li>
            <li>
                <strong>Category</strong> : <a href="/?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
            </li>
            <li>
                <strong>Update</strong> : {{ $post->created_at->translatedFormat('H:i, l d F Y') }}
            </li>
        </ul>
    </div>

    <div class="mb-4 text-white-50">
        {{-- {{ $post->body }} --}}
        <div class="mt-4 border border-primary rounded">
            <div class="bg-primary rounded-top px-3 py-2">
                <h1 class="text-white fs-5">{{ $post->title }}</h1>
            </div>
            <div class="px-2 py-2">
                <div class="ratio ratio-16x9">
                    <iframe src="{{ $post->stream }}" allowfullscreen frameborder="0" scrolling="NO"></iframe>
                </div>

                <div class="py-2 px-2 mt-2">
                    <div class="d-grid gap-2">
                        <a href="{{ $post->download }}" class="btn btn-primary" target="_blank">Download Video</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h4 class="text-white-50">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                focusable="false" width="1em" height="1em" style="top: -2px; transform: rotate(360deg);"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="iconify relative inline-block"
                data-icon="eva:shuffle-2-fill" data-inline="false">
                <path fill="currentColor"
                    d="M18.71 14.29a1 1 0 0 0-1.42 1.42l.29.29H16a4 4 0 0 1 0-8h1.59l-.3.29a1 1 0 0 0 0 1.42A1 1 0 0 0 18 10a1 1 0 0 0 .71-.29l2-2A1 1 0 0 0 21 7a1 1 0 0 0-.29-.71l-2-2a1 1 0 0 0-1.42 1.42l.29.29H16a6 6 0 0 0-5 2.69A6 6 0 0 0 6 6H4a1 1 0 0 0 0 2h2a4 4 0 0 1 0 8H4a1 1 0 0 0 0 2h2a6 6 0 0 0 5-2.69A6 6 0 0 0 16 18h1.59l-.3.29a1 1 0 0 0 0 1.42A1 1 0 0 0 18 20a1 1 0 0 0 .71-.29l2-2A1 1 0 0 0 21 17a1 1 0 0 0-.29-.71Z">
                </path>
            </svg>
            Terbaru
        </h4>
        <div class="container text-center">
            <div class="row row-cols-2 row-cols-lg-4 g-2">
                @foreach ($terbaru as $post)
                    <div class="col">
                        <div class="border border-light border-opacity-50 rounded">
                            <div class="overflow-hidden position-relative">
                                <a href="/post/{{ $post->slug }}">
                                    <div class="position-absolute bad">
                                        <span
                                            class="bg-primary text-center px-2 text-white bor">{{ $post->category->name }}</span>
                                    </div>
                                    <img src="/img/{{ $post->img }}" alt="{{ $post->title }}"
                                        title="{{ $post->title }}" class="img-fluid rounded-top">
                                </a>
                                <div class="px-2 py-2 link text-center">
                                    <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
