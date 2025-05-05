@extends('layouts.nav')

@section('content')
    <body class="bg-image">  
        <div class="quotation-container">
            <div class="quotation-box">
                <div class="quotation-img">
                    <img src="img/home- lived dream 3d 1.png" alt="img">
                </div>
                <span class="text">Start Creating a New Quotation</span>
                <div class="d-grid  col-6 ">
                    <a href="{{ route('quotations.new_quotation') }}" class="btn btn-create">+Create</a>
                   
                </div>
            </div>
        </div>
    </body>

    

@endsection
