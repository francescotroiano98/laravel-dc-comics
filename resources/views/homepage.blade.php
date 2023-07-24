@extends('layouts.app')

@section('title', 'Welcome')

@section('main-bottom')

<section class="container d-flex flex-wrap justify-content-between py-4">
    @foreach($serieslist as $singleserie)
        <div class="d-flex series-container">
        
            <div class="image-container">
                <img src="{{ $singleserie['thumb'] }}" alt="">
            </div>
            <div class="title-container">
                <p>{{ $singleserie['series'] }}</p>
            </div>
        
        
        </div>
    @endforeach
</section>
    

@endsection

@section('footer-top')


@endsection

@section('footer-bottom')

            <section class="footer-bottom">
                    <section class="container">
                        <div>
                            <button class="btn ">SIGN-UP NOW!</button>
                        </div>
                        <div>
                            <div>
                                <h3>FOLLOW US</h3>
                            </div>
                            <nav>
                                <ul>
                                    <li>

                                    </li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </section>    
            </section>
@endsection