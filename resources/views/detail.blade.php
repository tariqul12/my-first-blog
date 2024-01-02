@extends("master")

@section('title')
    Blog detail
@endsection

@section("body")
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{asset($blog["img"])}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body border-0 bg-transparent">
                        <h1>{{$blog["title"]}}</h1>
                        <p>
                            {{$blog["des"]}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

