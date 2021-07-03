@extends('layouts.app')

@section('title', 'rating')
@section('content')

<div class="box-rating">
    <div class="card border-0 shadow mt-3 content-rating " data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-in-out">
        <form action="{{ route('storeRating') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="wraper">
                <div class="text">
                    <p>How is your Experience</p>
                    <p>Using our application?</p>
                </div>
                <div class="rating">
                    <select class="form-select" name="star" id="star">
                        <option value="">Choose Rating...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="form-group comment">
                    <input type="comment" class="form-control" id="comment" name="comment" aria-describedby="emailHelp" placeholder="Add Comment...">
                    <small id="emailHelp" class="form-text text-muted comdetail">We'll never share your Comment with anyone else.</small>
                </div>

                <input type="hidden" name="accomodation_id" value="{{ $_GET['accomodation_id'] }}">

                <div class="d-flex justify-content-center line3 submit">
                    <div class="submit-search-city justify-content-center">
                        <input type="Submit" value="Submit" class="btn btn-submit" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

