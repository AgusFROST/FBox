@extends('layouts.dash')

@section('isiDash')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-lg-3 px-4 py-2">
            <div class="bg-primary py-4 border border-3 rounded">
                <div class="text-center text-white">
                    <h5>Jumlah My Post</h5>
                    <hr>
                    <p>{{ $post->count() }} post</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 px-4 py-2">
            <div class="bg-success py-4 border border-3 rounded">
                <div class="text-center text-white">
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit modi nobis quisquam veniam sed odit explicabo. Deleniti deserunt numquam blanditiis fugiat, nam odit impedit laborum soluta, facere inventore modi maxime!</h5>
                    <hr>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
@endsection
