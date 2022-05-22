@extends('layouts.masterCreate')
@section('style')
    <link rel="stylesheet" href="\css\material.css">
@endsection

@section('form')

    <form class="contact2-form validate-form" action="/order/create" method="post">
        @csrf
        @include('layouts.err')-
        <span class="contact2-form-title">  Order</span>

        <div class="wrap-input2 validate-input">

            <select class="custom-select" name="user_id">
                @foreach($users as $user)
                    @if(auth()->id() == $user->id)
                        <option value="{{ $user->id  }}">{{ $user->name  }}</option>
                        @break
                    @endif
                @endforeach

            </select>

        </div>


        <div class="wrap-input2 validate-input">

            <select class="custom-select" name="item_id" id="selectEvents" multiple>
                @foreach($items as $item)
                    <option value="{{ $item->id  }}">{{ $item->name  }}</option>
                @endforeach
            </select>

        </div>

        <div class="container-contact2-form-btn">
            <div class="wrap-contact2-form-btn">
                <div class="contact2-form-bgbtn"></div>
                <button class="contact2-form-btn" type="submit">
                    Create
                </button>
            </div>
        </div>
    </form>

@endsection

@section('script')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>

        $("#selectEvents").select2();

    </script>
@endsection