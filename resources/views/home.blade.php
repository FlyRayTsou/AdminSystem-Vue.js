@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="https://instagram.ftpe9-1.fna.fbcdn.net/v/t51.2885-19/s150x150/70985486_577637296311063_2240788552625422336_n.jpg?_nc_ht=instagram.ftpe9-1.fna.fbcdn.net&_nc_ohc=hykHA9p_5BQAX_HISaY&oh=209d5f32bae8b33a446c96fc968b382b&oe=5ED1BAD7">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>232</strong> posts</div>
                <div class="pr-5"><strong>232</strong> posts</div>
                <div class="pr-5"><strong>232</strong> posts</div>
            </div>
            <div class="pt-4 font-weight-bold">
                FreecodeCamp.org
            </div>
            <div>
                An article is a word that is used with a noun to specify grammatical definiteness of the noun, and in some languages extending to volume or numerical scope.
            </div>
            <div><a href="#">www.ilong-termcare.com</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="https://instagram.ftpe9-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c2.0.746.746a/s640x640/67559739_629784504178516_8813208697620789350_n.jpg?_nc_ht=instagram.ftpe9-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=4-x-_5NKnOQAX8CS_kH&oh=89d372245d4f40d5bc63d5fb6d480e28&oe=5EDBCB59">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.ftpe9-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.167.1347.1347a/s480x480/66224636_414103902538030_6243089024351039256_n.jpg?_nc_ht=instagram.ftpe9-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=ykCbKLG-YV4AX8S2luU&oh=ffd22feb0fb86d382269ba2cec0f681c&oe=5E9E1C4E">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.ftpe7-3.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.100.800.800a/s640x640/65266892_176338163385050_3225788486614017750_n.jpg?_nc_ht=instagram.ftpe7-3.fna.fbcdn.net&_nc_cat=102&_nc_ohc=w9QvVdRPtGcAX8mZu3a&oh=1816d3d0bc32842ffbadd37502af08f6&oe=5EDA0DDA">
        </div>
    </div>
</div>
@endsection
