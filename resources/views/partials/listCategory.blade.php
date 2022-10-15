<section id="category">
    <div class="d-flex text-white">
        <div class="p-2 w-100">
            <h3>Category</h3>
        </div>
        <div class="p-2 flex-shrink-1 align-self-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="transform: rotate(90deg);"
                fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                <path
                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z">
                </path>
            </svg>
        </div>
    </div>
    <div class="px-2">
        @foreach ($categories as $category)
            <div class="d-flex border-bottom border-light  border-opacity-50 link">
                <div class="p-2 w-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                        <path
                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z">
                        </path>
                    </svg>
                    <a href="/?category={{ $category->slug }}">
                        {{ $category->name }}
                    </a>
                </div>
                <div class="p-2 flex-shrink-1 text-white-50">
                    {{ $category->posts()->count() }}
                </div>
            </div>
        @endforeach
    </div>
</section>
