@extends("master")

@section("title")
    Seris Page
@endsection
@section("body")
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body border-0 bg-success shadow">
                        <form action="{{route('make_series')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-lg-3" for="">First Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="first_number" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-3" for="">Last Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="last_number" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-3" for="">Your  Choice</label>
                                <div class="col-md-9">
                                    <label><input type="radio" value="Odd" name="choce"  >odd </label>
                                    <label><input type="radio" value="even" name="choce" >even</label>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-3" for="">Full number</label>
                                <div class="col-md-9">
                                    <textarea class="form-control">{{session('message')}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-3" for=""></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-danger" value="Make Full Name" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
