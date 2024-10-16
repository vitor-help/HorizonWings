@extends('layouts.app')

@section('content')
<!-- Banner Area -->
<section id="home_seven_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="banner_seven_text">
                    <h1>Take only memories, leave only footprints</h1>
                    <p>Proident dolor aliqua velit ad do elit ea veniam eu duis minim incididunt. Id esse laboris
                        aliquip est ex aliqua ullamco lorem ex sunt ani deserunt fugiat inunt.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form Area -->
<section id="theme_search_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="theme_search_form_area">
                    <div class="theme_search_form_tabbtn">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="flights-tab" data-bs-toggle="tab"
                                    data-bs-target="#flights" type="button" role="tab" aria-controls="flights"
                                    aria-selected="true"><i class="fas fa-plane-departure"></i>Flights</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tours-tab" data-bs-toggle="tab" data-bs-target="#tours"
                                    type="button" role="tab" aria-controls="tours" aria-selected="false"><i
                                        class="fas fa-globe"></i>Tours</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="hotels-tab" data-bs-toggle="tab"
                                    data-bs-target="#hotels" type="button" role="tab" aria-controls="hotels"
                                    aria-selected="false"><i class="fas fa-hotel"></i>Hotels</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="visa-tab" data-bs-toggle="tab"
                                    data-bs-target="#visa-application" type="button" role="tab" aria-controls="visa"
                                    aria-selected="false"><i class="fas fa-passport"></i> Visa</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="apartments-tab" data-bs-toggle="tab"
                                    data-bs-target="#apartments" type="button" role="tab" aria-controls="apartments"
                                    aria-selected="false"><i class="fas fa-building"></i> Apartments</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="bus-tab" data-bs-toggle="tab" data-bs-target="#bus"
                                    type="button" role="tab" aria-controls="bus" aria-selected="false"><i
                                        class="fas fa-bus"></i> Bus</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="cruise-tab" data-bs-toggle="tab"
                                    data-bs-target="#cruise" type="button" role="tab" aria-controls="cruise"
                                    aria-selected="false"><i class="fas fa-ship"></i> Cruise</button>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="flights" role="tabpanel"
                            aria-labelledby="flights-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="flight_categories_search">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="oneway-tab" data-bs-toggle="tab"
                                                    data-bs-target="#oneway_flight" type="button" role="tab"
                                                    aria-controls="oneway_flight" aria-selected="true">One
                                                    Way</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="roundtrip-tab" data-bs-toggle="tab"
                                                    data-bs-target="#roundtrip" type="button" role="tab"
                                                    aria-controls="roundtrip"
                                                    aria-selected="false">Roundtrip</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="multi_city-tab" data-bs-toggle="tab"
                                                    data-bs-target="#multi_city" type="button" role="tab"
                                                    aria-controls="multi_city" aria-selected="false">Multi
                                                    city</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="myTabContent1">
                                <div class="tab-pane fade show active" id="oneway_flight" role="tabpanel"
                                    aria-labelledby="oneway-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="oneway_search_form">
                                                <form action="#!">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                            <div class="flight_Search_boxed">
                                                                <p>From</p>
                                                                <input type="text" value="New York">
                                                                <span>JFK - John F. Kennedy International...</span>
                                                                <div class="plan_icon_posation">
                                                                    <i class="fas fa-plane-departure"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                            <div class="flight_Search_boxed">
                                                                <p>To</p>
                                                                <input type="text" value="London ">
                                                                <span>LCY, London city airport </span>
                                                                <div class="plan_icon_posation">
                                                                    <i class="fas fa-plane-arrival"></i>
                                                                </div>
                                                                <div class="range_plan">
                                                                    <i class="fas fa-exchange-alt"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4  col-md-6 col-sm-12 col-12">
                                                            <div class="form_search_date">
                                                                <div class="flight_Search_boxed date_flex_area">
                                                                    <div class="Journey_date">
                                                                        <p>Journey date</p>
                                                                        <input type="date" value="2022-05-05">
                                                                        <span>Thursday</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                            <div
                                                                class="flight_Search_boxed dropdown_passenger_area">
                                                                <p>Passenger, Class </p>
                                                                <div class="dropdown">
                                                                    <button class="dropdown-toggle final-count"
                                                                        data-toggle="dropdown" type="button"
                                                                        id="dropdownMenuButton1"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        0 Passenger
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown_passenger_info"
                                                                        aria-labelledby="dropdownMenuButton2">
                                                                        <div class="traveller-calulate-persons">
                                                                            <div class="passengers">
                                                                                <h6>Passengers</h6>
                                                                                <div class="passengers-types">
                                                                                    <div class="passengers-type">
                                                                                        <div class="text"><span
                                                                                                class="count pcount">2</span>
                                                                                            <div class="type-label">
                                                                                                <p>Adult</p>
                                                                                                <span>12+
                                                                                                    yrs</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="button-set">
                                                                                            <button type="button"
                                                                                                class="btn-add">
                                                                                                <i
                                                                                                    class="fas fa-plus"></i>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                class="btn-subtract">
                                                                                                <i
                                                                                                    class="fas fa-minus"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="passengers-type">
                                                                                        <div class="text"><span
                                                                                                class="count ccount">0</span>
                                                                                            <div class="type-label">
                                                                                                <p
                                                                                                    class="fz14 mb-xs-0">
                                                                                                    Children
                                                                                                </p><span>2
                                                                                                    - Less than 12
                                                                                                    yrs</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="button-set">
                                                                                            <button type="button"
                                                                                                class="btn-add-c">
                                                                                                <i
                                                                                                    class="fas fa-plus"></i>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                class="btn-subtract-c">
                                                                                                <i
                                                                                                    class="fas fa-minus"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="passengers-type">
                                                                                        <div class="text"><span
                                                                                                class="count incount">0</span>
                                                                                            <div class="type-label">
                                                                                                <p
                                                                                                    class="fz14 mb-xs-0">
                                                                                                    Infant
                                                                                                </p><span>Less
                                                                                                    than 2
                                                                                                    yrs</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="button-set">
                                                                                            <button type="button"
                                                                                                class="btn-add-in">
                                                                                                <i
                                                                                                    class="fas fa-plus"></i>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                class="btn-subtract-in">
                                                                                                <i
                                                                                                    class="fas fa-minus"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cabin-selection">
                                                                                <h6>Cabin Class</h6>
                                                                                <div class="cabin-list">
                                                                                    <button type="button"
                                                                                        class="label-select-btn">
                                                                                        <span
                                                                                            class="muiButton-label">Economy
                                                                                        </span>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="label-select-btn active">
                                                                                        <span
                                                                                            class="muiButton-label">
                                                                                            Business
                                                                                        </span>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="label-select-btn">
                                                                                        <span
                                                                                            class="MuiButton-label">First
                                                                                            Class </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span>Business</span>
                                                            </div>
                                                        </div>
                                                        <div class="top_form_search_button">
                                                            <button class="btn btn_theme btn_md">Search</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="roundtrip" role="tabpanel"
                                    aria-labelledby="roundtrip-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="oneway_search_form">
                                                <form action="#!">
                                                    <div class="row">
                                                        <div class="col-lg-3  col-md-6 col-sm-12 col-12">
                                                            <div class="flight_Search_boxed">
                                                                <p>From</p>
                                                                <input type="text" value="New York">
                                                                <span>JFK - John F. Kennedy International...</span>
                                                                <div class="plan_icon_posation">
                                                                    <i class="fas fa-plane-departure"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3  col-md-6 col-sm-12 col-12">
                                                            <div class="flight_Search_boxed">
                                                                <p>To</p>
                                                                <input type="text" value="London ">
                                                                <span>LCY, London city airport </span>
                                                                <div class="plan_icon_posation">
                                                                    <i class="fas fa-plane-arrival"></i>
                                                                </div>
                                                                <div class="range_plan">
                                                                    <i class="fas fa-exchange-alt"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4  col-md-6 col-sm-12 col-12">
                                                            <div class="form_search_date">
                                                                <div class="flight_Search_boxed date_flex_area">
                                                                    <div class="Journey_date">
                                                                        <p>Journey date</p>
                                                                        <input type="date" value="2022-05-05">
                                                                        <span>Thursday</span>
                                                                    </div>
                                                                    <div class="Journey_date">
                                                                        <p>Return date</p>
                                                                        <input type="date" value="2022-05-08">
                                                                        <span>Saturday</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                            <div
                                                                class="flight_Search_boxed dropdown_passenger_area">
                                                                <p>Passenger, Class </p>
                                                                <div class="dropdown">
                                                                    <button class="dropdown-toggle final-count"
                                                                        data-toggle="dropdown" type="button"
                                                                        id="dropdownMenuButton3"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        0 Passenger
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown_passenger_info"
                                                                        aria-labelledby="dropdownMenuButton4">
                                                                        <div class="traveller-calulate-persons">
                                                                            <div class="passengers">
                                                                                <h6>Passengers</h6>
                                                                                <div class="passengers-types">
                                                                                    <div class="passengers-type">
                                                                                        <div class="text"><span
                                                                                                class="count pcount">2</span>
                                                                                            <div class="type-label">
                                                                                                <p>Adult</p>
                                                                                                <span>12+
                                                                                                    yrs</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="button-set">
                                                                                            <button type="button"
                                                                                                class="btn-add">
                                                                                                <i
                                                                                                    class="fas fa-plus"></i>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                class="btn-subtract">
                                                                                                <i
                                                                                                    class="fas fa-minus"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="passengers-type">
                                                                                        <div class="text"><span
                                                                                                class="count ccount">0</span>
                                                                                            <div class="type-label">
                                                                                                <p
                                                                                                    class="fz14 mb-xs-0">
                                                                                                    Children
                                                                                                </p><span>2
                                                                                                    - Less than 12
                                                                                                    yrs</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="button-set">
                                                                                            <button type="button"
                                                                                                class="btn-add-c">
                                                                                                <i
                                                                                                    class="fas fa-plus"></i>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                class="btn-subtract-c">
                                                                                                <i
                                                                                                    class="fas fa-minus"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="passengers-type">
                                                                                        <div class="text"><span
                                                                                                class="count incount">0</span>
                                                                                            <div class="type-label">
                                                                                                <p
                                                                                                    class="fz14 mb-xs-0">
                                                                                                    Infant
                                                                                                </p><span>Less
                                                                                                    than 2
                                                                                                    yrs</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="button-set">
                                                                                            <button type="button"
                                                                                                class="btn-add-in">
                                                                                                <i
                                                                                                    class="fas fa-plus"></i>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                class="btn-subtract-in">
                                                                                                <i
                                                                                                    class="fas fa-minus"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cabin-selection">
                                                                                <h6>Cabin Class</h6>
                                                                                <div class="cabin-list">
                                                                                    <button type="button"
                                                                                        class="label-select-btn">
                                                                                        <span
                                                                                            class="muiButton-label">Economy
                                                                                        </span>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="label-select-btn active">
                                                                                        <span
                                                                                            class="muiButton-label">
                                                                                            Business
                                                                                        </span>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="label-select-btn">
                                                                                        <span
                                                                                            class="MuiButton-label">First
                                                                                            Class </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span>Business</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="top_form_search_button">
                                                        <button class="btn btn_theme btn_md">Search</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="multi_city" role="tabpanel"
                                    aria-labelledby="multi_city-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="oneway_search_form">
                                                <form action="#!">
                                                    <div class="multi_city_form_wrapper">
                                                        <div class="multi_city_form">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                    <div class="flight_Search_boxed">
                                                                        <p>From</p>
                                                                        <input type="text" value="New York">
                                                                        <span>DAC, Hazrat Shahajalal
                                                                            International...</span>
                                                                        <div class="plan_icon_posation">
                                                                            <i class="fas fa-plane-departure"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                    <div class="flight_Search_boxed">
                                                                        <p>To</p>
                                                                        <input type="text" value="London ">
                                                                        <span>LCY, London city airport </span>
                                                                        <div class="plan_icon_posation">
                                                                            <i class="fas fa-plane-arrival"></i>
                                                                        </div>
                                                                        <div class="range_plan">
                                                                            <i class="fas fa-exchange-alt"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                                    <div class="form_search_date">
                                                                        <div
                                                                            class="flight_Search_boxed date_flex_area">
                                                                            <div class="Journey_date">
                                                                                <p>Journey date</p>
                                                                                <input type="date"
                                                                                    value="2022-05-05">
                                                                                <span>Thursday</span>
                                                                            </div>
                                                                            <div class="Journey_date">
                                                                                <p>Return date</p>
                                                                                <input type="date"
                                                                                    value="2022-05-10">
                                                                                <span>Saturday</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                                    <div
                                                                        class="flight_Search_boxed dropdown_passenger_area">
                                                                        <p>Passenger, Class </p>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="dropdown-toggle final-count"
                                                                                data-toggle="dropdown" type="button"
                                                                                id="dropdownMenuButton5"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                0 Passenger
                                                                            </button>
                                                                            <div class="dropdown-menu dropdown_passenger_info"
                                                                                aria-labelledby="dropdownMenuButton6">
                                                                                <div
                                                                                    class="traveller-calulate-persons">
                                                                                    <div class="passengers">
                                                                                        <h6>Passengers</h6>
                                                                                        <div
                                                                                            class="passengers-types">
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                    <span
                                                                                                        class="count pcount">2</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p>Adult</p>
                                                                                                        <span>12+
                                                                                                            yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                    <span
                                                                                                        class="count ccount">0</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p
                                                                                                            class="fz14 mb-xs-0">
                                                                                                            Children
                                                                                                        </p><span>2
                                                                                                            - Less
                                                                                                            than 12
                                                                                                            yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add-c">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract-c">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                    <span
                                                                                                        class="count incount">0</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p
                                                                                                            class="fz14 mb-xs-0">
                                                                                                            Infant
                                                                                                        </p><span>Less
                                                                                                            than 2
                                                                                                            yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add-in">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract-in">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cabin-selection">
                                                                                        <h6>Cabin Class</h6>
                                                                                        <div class="cabin-list">
                                                                                            <button type="button"
                                                                                                class="label-select-btn">
                                                                                                <span
                                                                                                    class="muiButton-label">Economy
                                                                                                </span>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                class="label-select-btn active">
                                                                                                <span
                                                                                                    class="muiButton-label">
                                                                                                    Business
                                                                                                </span>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                class="label-select-btn">
                                                                                                <span
                                                                                                    class="MuiButton-label">First
                                                                                                    Class </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span>Business</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="multi_city_form">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                    <div class="flight_Search_boxed">
                                                                        <p>From</p>
                                                                        <input type="text" value="New York">
                                                                        <span>DAC, Hazrat Shahajalal
                                                                            International...</span>
                                                                        <div class="plan_icon_posation">
                                                                            <i class="fas fa-plane-departure"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                    <div class="flight_Search_boxed">
                                                                        <p>To</p>
                                                                        <input type="text" value="London ">
                                                                        <span>LCY, London city airport </span>
                                                                        <div class="plan_icon_posation">
                                                                            <i class="fas fa-plane-arrival"></i>
                                                                        </div>
                                                                        <div class="range_plan">
                                                                            <i class="fas fa-exchange-alt"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                                    <div class="form_search_date">
                                                                        <div
                                                                            class="flight_Search_boxed date_flex_area">
                                                                            <div class="Journey_date">
                                                                                <p>Journey date</p>
                                                                                <input type="date"
                                                                                    value="2022-05-05">
                                                                                <span>Thursday</span>
                                                                            </div>
                                                                            <div class="Journey_date">
                                                                                <p>Return date</p>
                                                                                <input type="date"
                                                                                    value="2022-05-12">
                                                                                <span>Saturday</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                                    <div
                                                                        class="flight_Search_boxed dropdown_passenger_area">
                                                                        <p>Passenger, Class </p>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="dropdown-toggle final-count"
                                                                                data-toggle="dropdown" type="button"
                                                                                id="dropdownMenuButton7"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                0 Passenger
                                                                            </button>
                                                                            <div class="dropdown-menu dropdown_passenger_info"
                                                                                aria-labelledby="dropdownMenuButton8">
                                                                                <div
                                                                                    class="traveller-calulate-persons">
                                                                                    <div class="passengers">
                                                                                        <h6>Passengers</h6>
                                                                                        <div
                                                                                            class="passengers-types">
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                    <span
                                                                                                        class="count pcount">2</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p>Adult</p>
                                                                                                        <span>12+
                                                                                                            yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                    <span
                                                                                                        class="count ccount">0</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p
                                                                                                            class="fz14 mb-xs-0">
                                                                                                            Children
                                                                                                        </p><span>2
                                                                                                            - Less
                                                                                                            than 12
                                                                                                            yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add-c">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract-c">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                    <span
                                                                                                        class="count incount">0</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p
                                                                                                            class="fz14 mb-xs-0">
                                                                                                            Infant
                                                                                                        </p><span>Less
                                                                                                            than 2
                                                                                                            yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add-in">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract-in">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cabin-selection">
                                                                                        <h6>Cabin Class</h6>
                                                                                        <div class="cabin-list">
                                                                                            <button type="button"
                                                                                                class="label-select-btn">
                                                                                                <span
                                                                                                    class="muiButton-label">Economy
                                                                                                </span>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                class="label-select-btn active">
                                                                                                <span
                                                                                                    class="muiButton-label">
                                                                                                    Business
                                                                                                </span>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                class="label-select-btn">
                                                                                                <span
                                                                                                    class="MuiButton-label">First
                                                                                                    Class </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span>Business</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="add_multy_form">
                                                                <button type="button" id="addMulticityRow">+ Add
                                                                    another
                                                                    flight</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="top_form_search_button">
                                                        <button class="btn btn_theme btn_md">Search</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tours" role="tabpanel" aria-labelledby="tours-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Destination</p>
                                                        <input type="text" placeholder="Where are you going?">
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="form_search_date">
                                                        <div class="flight_Search_boxed date_flex_area">
                                                            <div class="Journey_date">
                                                                <p>Journey date</p>
                                                                <input type="date" value="2022-05-03">
                                                                <span>Thursday</span>
                                                            </div>
                                                            <div class="Journey_date">
                                                                <p>Return date</p>
                                                                <input type="date" value="2022-05-05">
                                                                <span>Thursday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed dropdown_passenger_area">
                                                        <p>Passenger, Class </p>
                                                        <div class="dropdown">
                                                            <button class="dropdown-toggle final-count"
                                                                data-toggle="dropdown" type="button"
                                                                id="dropdownMenuButton9" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                0 Passenger
                                                            </button>
                                                            <div class="dropdown-menu dropdown_passenger_info"
                                                                aria-labelledby="dropdownMenuButton10">
                                                                <div class="traveller-calulate-persons">
                                                                    <div class="passengers">
                                                                        <h6>Passengers</h6>
                                                                        <div class="passengers-types">
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count pcount">2</span>
                                                                                    <div class="type-label">
                                                                                        <p>Adult</p>
                                                                                        <span>12+
                                                                                            yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count ccount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Children
                                                                                        </p><span>2
                                                                                            - Less than 12
                                                                                            yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add-c">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract-c">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count incount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Infant
                                                                                        </p><span>Less
                                                                                            than 2
                                                                                            yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add-in">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract-in">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cabin-selection">
                                                                        <h6>Cabin Class</h6>
                                                                        <div class="cabin-list">
                                                                            <button type="button"
                                                                                class="label-select-btn">
                                                                                <span
                                                                                    class="muiButton-label">Economy
                                                                                </span>
                                                                            </button>
                                                                            <button type="button"
                                                                                class="label-select-btn active">
                                                                                <span class="muiButton-label">
                                                                                    Business
                                                                                </span>
                                                                            </button>
                                                                            <button type="button"
                                                                                class="label-select-btn">
                                                                                <span class="MuiButton-label">First
                                                                                    Class </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span>Business</span>
                                                    </div>
                                                </div>
                                                <div class="top_form_search_button">
                                                    <button class="btn btn_theme btn_md">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Destination</p>
                                                        <input type="text" placeholder="Where are you going?">
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="form_search_date">
                                                        <div class="flight_Search_boxed date_flex_area">
                                                            <div class="Journey_date">
                                                                <p>Journey date</p>
                                                                <input type="date" value="2022-05-03">
                                                                <span>Thursday</span>
                                                            </div>
                                                            <div class="Journey_date">
                                                                <p>Return date</p>
                                                                <input type="date" value="2022-05-05">
                                                                <span>Thursday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed dropdown_passenger_area">
                                                        <p>Passenger, Class </p>
                                                        <div class="dropdown">
                                                            <button class="dropdown-toggle final-count"
                                                                data-toggle="dropdown" type="button"
                                                                id="dropdownMenuButton11" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                0 Passenger
                                                            </button>
                                                            <div class="dropdown-menu dropdown_passenger_info"
                                                                aria-labelledby="dropdownMenuButton12">
                                                                <div class="traveller-calulate-persons">
                                                                    <div class="passengers">
                                                                        <h6>Passengers</h6>
                                                                        <div class="passengers-types">
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count pcount">2</span>
                                                                                    <div class="type-label">
                                                                                        <p>Adult</p>
                                                                                        <span>12+
                                                                                            yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count ccount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Children
                                                                                        </p><span>2
                                                                                            - Less than 12
                                                                                            yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add-c">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract-c">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count incount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Infant
                                                                                        </p><span>Less
                                                                                            than 2
                                                                                            yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add-in">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract-in">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cabin-selection">
                                                                        <h6>Cabin Class</h6>
                                                                        <div class="cabin-list">
                                                                            <button type="button"
                                                                                class="label-select-btn">
                                                                                <span
                                                                                    class="muiButton-label">Economy
                                                                                </span>
                                                                            </button>
                                                                            <button type="button"
                                                                                class="label-select-btn active">
                                                                                <span class="muiButton-label">
                                                                                    Business
                                                                                </span>
                                                                            </button>
                                                                            <button type="button"
                                                                                class="label-select-btn">
                                                                                <span class="MuiButton-label">First
                                                                                    Class </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span>Business</span>
                                                    </div>
                                                </div>
                                                <div class="top_form_search_button">
                                                    <button class="btn btn_theme btn_md">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="visa-application" role="tabpanel" aria-labelledby="visa-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Select country</p>
                                                        <input type="text" value="United states">
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Your nationality</p>
                                                        <input type="text" value="Bangladesh">
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="form_search_date">
                                                        <div class="flight_Search_boxed date_flex_area">
                                                            <div class="Journey_date">
                                                                <p>Entry date</p>
                                                                <input type="date" value="2022-05-03">
                                                                <span>Thursday</span>
                                                            </div>
                                                            <div class="Journey_date">
                                                                <p>Exit date</p>
                                                                <input type="date" value="2022-05-05">
                                                                <span>Thursday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed dropdown_passenger_area">
                                                        <p>Traveller, Class </p>
                                                        <div class="dropdown">
                                                            <button class="dropdown-toggle final-count"
                                                                data-toggle="dropdown" type="button"
                                                                id="dropdownMenuButton13" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                0 Traveller
                                                            </button>
                                                            <div class="dropdown-menu dropdown_passenger_info"
                                                                aria-labelledby="dropdownMenuButton14">
                                                                <div class="traveller-calulate-persons">
                                                                    <div class="passengers">
                                                                        <h6>Traveller</h6>
                                                                        <div class="passengers-types">
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count pcount">2</span>
                                                                                    <div class="type-label">
                                                                                        <p>Adult</p>
                                                                                        <span>12+
                                                                                            yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count ccount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Children
                                                                                        </p><span>2
                                                                                            - Less than 12
                                                                                            yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add-c">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract-c">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count incount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Infant
                                                                                        </p><span>Less
                                                                                            than 2
                                                                                            yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add-in">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract-in">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span>Business</span>
                                                    </div>
                                                </div>
                                                <div class="top_form_search_button">
                                                    <button class="btn btn_theme btn_md">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="apartments" role="tabpanel" aria-labelledby="apartments-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Destination</p>
                                                        <input type="text" placeholder="Where are you going?">
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="form_search_date">
                                                        <div class="flight_Search_boxed date_flex_area">
                                                            <div class="Journey_date">
                                                                <p>Journey date</p>
                                                                <input type="date" value="2022-05-03">
                                                                <span>Thursday</span>
                                                            </div>
                                                            <div class="Journey_date">
                                                                <p>Return date</p>
                                                                <input type="date" value="2022-05-05">
                                                                <span>Thursday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed dropdown_passenger_area">
                                                        <p>Passenger, Class </p>
                                                        <div class="dropdown">
                                                            <button class="dropdown-toggle final-count"
                                                                data-toggle="dropdown" type="button"
                                                                id="dropdownMenuButton15" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                0 Traveler
                                                            </button>
                                                            <div class="dropdown-menu dropdown_passenger_info"
                                                                aria-labelledby="dropdownMenuButton16">
                                                                <div class="traveller-calulate-persons">
                                                                    <div class="passengers">
                                                                        <h6>Passengers</h6>
                                                                        <div class="passengers-types">
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count pcount">2</span>
                                                                                    <div class="type-label">
                                                                                        <p>Adult</p>
                                                                                        <span>12+
                                                                                            yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count ccount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Children
                                                                                        </p><span>2
                                                                                            - Less than 12
                                                                                            yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add-c">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract-c">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count incount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Infant
                                                                                        </p><span>Less
                                                                                            than 2
                                                                                            yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add-in">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract-in">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cabin-selection">
                                                                        <h6>Cabin Class</h6>
                                                                        <div class="cabin-list">
                                                                            <button type="button"
                                                                                class="label-select-btn">
                                                                                <span
                                                                                    class="muiButton-label">Economy
                                                                                </span>
                                                                            </button>
                                                                            <button type="button"
                                                                                class="label-select-btn active">
                                                                                <span class="muiButton-label">
                                                                                    Business
                                                                                </span>
                                                                            </button>
                                                                            <button type="button"
                                                                                class="label-select-btn">
                                                                                <span class="MuiButton-label">First
                                                                                    Class </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span>Business</span>
                                                    </div>
                                                </div>
                                                <div class="top_form_search_button">
                                                    <button class="btn btn_theme btn_md">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="bus" role="tabpanel" aria-labelledby="bus-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="oneway_search_form">
                                                        <form action="#!">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                    <div class="flight_Search_boxed">
                                                                        <p>From</p>
                                                                        <input type="text" value="Dhaka">
                                                                        <span>Bus Trtminal</span>
                                                                        <div class="plan_icon_posation">
                                                                            <i class="fas fa-plane-departure"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                    <div class="flight_Search_boxed">
                                                                        <p>To</p>
                                                                        <input type="text" value="Cox’s Bazar ">
                                                                        <span>Bus Trtminal</span>
                                                                        <div class="plan_icon_posation">
                                                                            <i class="fas fa-plane-arrival"></i>
                                                                        </div>
                                                                        <div class="range_plan">
                                                                            <i class="fas fa-exchange-alt"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4  col-md-6 col-sm-12 col-12">
                                                                    <div class="form_search_date">
                                                                        <div
                                                                            class="flight_Search_boxed date_flex_area">
                                                                            <div class="Journey_date">
                                                                                <p>Journey date</p>
                                                                                <input type="date"
                                                                                    value="2022-05-05">
                                                                                <span>Thursday</span>
                                                                            </div>
                                                                            <div class="Journey_date">
                                                                                <p>Return date</p>
                                                                                <input type="date"
                                                                                    value="2022-05-08">
                                                                                <span>Saturday</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                                    <div
                                                                        class="flight_Search_boxed dropdown_passenger_area">
                                                                        <p>Passenger, Class </p>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="dropdown-toggle final-count"
                                                                                data-toggle="dropdown" type="button"
                                                                                id="dropdownMenuButton17"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                0 Passenger
                                                                            </button>
                                                                            <div class="dropdown-menu dropdown_passenger_info"
                                                                                aria-labelledby="dropdownMenuButton18">
                                                                                <div
                                                                                    class="traveller-calulate-persons">
                                                                                    <div class="passengers">
                                                                                        <h6>Passengers</h6>
                                                                                        <div
                                                                                            class="passengers-types">
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                    <span
                                                                                                        class="count pcount">2</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p>Adult</p>
                                                                                                        <span>12+
                                                                                                            yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                    <span
                                                                                                        class="count ccount">0</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p
                                                                                                            class="fz14 mb-xs-0">
                                                                                                            Children
                                                                                                        </p><span>2
                                                                                                            - Less
                                                                                                            than 12
                                                                                                            yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add-c">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract-c">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                    <span
                                                                                                        class="count incount">0</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p
                                                                                                            class="fz14 mb-xs-0">
                                                                                                            Infant
                                                                                                        </p><span>Less
                                                                                                            than 2
                                                                                                            yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add-in">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract-in">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cabin-selection">
                                                                                        <h6>Cabin Class</h6>
                                                                                        <div class="cabin-list">
                                                                                            <button type="button"
                                                                                                class="label-select-btn">
                                                                                                <span
                                                                                                    class="muiButton-label">Economy
                                                                                                </span>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                class="label-select-btn active">
                                                                                                <span
                                                                                                    class="muiButton-label">
                                                                                                    Business
                                                                                                </span>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                class="label-select-btn">
                                                                                                <span
                                                                                                    class="MuiButton-label">First
                                                                                                    Class </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span>Business</span>
                                                                    </div>
                                                                </div>
                                                                <div class="top_form_search_button">
                                                                    <button
                                                                        class="btn btn_theme btn_md">Search</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cruise" role="tabpanel" aria-labelledby="cruise-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Destination</p>
                                                        <input type="text" placeholder="Where are you going?">
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Cruise line</p>
                                                        <input type="text" placeholder="American line">
                                                        <span>Choose your cruise</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                    <div class="form_search_date">
                                                        <div class="flight_Search_boxed date_flex_area">
                                                            <div class="Journey_date">
                                                                <p>Journey date</p>
                                                                <input type="date" value="2022-05-03">
                                                                <span>Thursday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="top_form_search_button">
                                                    <button class="btn btn_theme btn_md">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why choose andTour section -->
<section id="home_seven_why_choose" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_heading_seven">
                    <h2>Why choose AndTour</h2>
                </div>
            </div>
        </div>
        <div class="why_choose_andtour">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="why_choose_andtour_card">
                        <div class="choose_img pt-1">
                            <img src="public/assets/img/icon/cost.png" alt="icon">
                        </div>
                        <h3>Minimum cost</h3>
                        <p>Laboris anim duis sunt aliquip tempor qui. Est in laboris jugni lol occaecat duo
                            excepteur voluptate minim.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="why_choose_andtour_card">
                        <div class="choose_img">
                            <img src="public/assets/img/icon/magnific.png" alt="icon">
                        </div>
                        <h3>Worldwide support</h3>
                        <p>Laboris anim duis sunt aliquip tempor qui. Est in laboris jugni lol occaecat duo
                            excepteur voluptate minim.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="why_choose_andtour_card">
                        <div class="choose_img">
                            <img src="public/assets/img/icon/quality.png" alt="icon">
                        </div>
                        <h3>Quality full service</h3>
                        <p>Laboris anim duis sunt aliquip tempor qui. Est in laboris jugni lol occaecat duo
                            excepteur voluptate minim.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="why_choose_andtour_card">
                        <div class="choose_img">
                            <img src="public/assets/img/icon/award.png" alt="icon">
                        </div>
                        <h3>Award winning support</h3>
                        <p>Laboris anim duis sunt aliquip tempor qui. Est in laboris jugni lol occaecat duo
                            excepteur voluptate minim.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trending destinations section -->
<section id="trending_destinations_area" class="section_padding_bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_heading_seven">
                    <h2>Trending destinations</h2>
                    <a href="top-destinations.html">See all<img src="public/assets/img/icon/list-arrow.png" alt="icon"></a>
                </div>
                <div class="trending_destinations_wrapper">
                    <div class="trending_item">
                        <div class="treding_img">
                            <a href="top-destinations.html"><img src="public/assets/img/home-seven/destination/paris.png"
                                    alt="img"></a>
                        </div>
                        <h3>Paris</h3>
                        <p>120+ tours</p>
                    </div>
                    <div class="trending_item">
                        <div class="treding_img">
                            <a href="top-destinations.html">
                                <img src="public/assets/img/home-seven/destination/singapore.png" alt="img"></a>
                        </div>
                        <h3>Singapore</h3>
                        <p>82+ tours</p>
                    </div>
                    <div class="trending_item">
                        <div class="treding_img">
                            <a href="top-destinations.html"><img src="public/assets/img/home-seven/destination/rome.png"
                                    alt="img"></a>
                        </div>
                        <h3>Remo</h3>
                        <p>140+ tours</p>
                    </div>
                    <div class="trending_item">
                        <div class="treding_img">
                            <a href="top-destinations.html"><img src="public/assets/img/home-seven/destination/bangkok.png"
                                    alt="img"></a>
                        </div>
                        <h3>Bangkok</h3>
                        <p>247+ tours</p>
                    </div>
                    <div class="trending_item">
                        <div class="treding_img">
                            <a href="top-destinations.html"><img src="public/assets/img/home-seven/destination/bali.png"
                                    alt="img"></a>
                        </div>
                        <h3>Bali</h3>
                        <p>250+ tours</p>
                    </div>
                    <div class="trending_item">
                        <div class="treding_img">
                            <a href="top-destinations.html"><img src="public/assets/img/home-seven/destination/phuket.png"
                                    alt="img"></a>
                        </div>
                        <h3>Phuket</h3>
                        <p>320+ tours</p>
                    </div>
                    <div class="trending_item">
                        <div class="treding_img">
                            <a href="top-destinations.html"><img src="public/assets/img/home-seven/destination/tokyo.png"
                                    alt="img"></a>
                        </div>
                        <h3>Tokyo</h3>
                        <p>70+ tours</p>
                    </div>
                    <div class="trending_item">
                        <div class="treding_img">
                            <a href="top-destinations.html"><img
                                    src="public/assets/img/home-seven/destination/indonesia.png" alt="img"></a>
                        </div>
                        <h3>Indonesia</h3>
                        <p>120+ tours</p>
                    </div>
                    <div class="trending_item">
                        <div class="treding_img">
                            <a href="top-destinations.html"><img src="public/assets/img/home-seven/destination/mexico.png"
                                    alt="img"></a>
                        </div>
                        <h3>Mexico</h3>
                        <p>30+ tours</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- popular tour section -->
<section id="popular-tour" class="section_padding_bottom">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <div class="section_heading_seven">
                    <h2>Find the popular tours</h2>
                    <a href="tour-search.html">See all<img src="public/assets/img/icon/list-arrow.png" alt="icon"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="common_card_seven">
                    <div class="common_card_seven_img">
                        <a href="tour-search.html">
                            <img src="public/assets/img/home-seven/tour/popular-tour-1.png" alt="img">
                        </a>
                    </div>
                    <div class="common_card_seven_text">
                        <h3><a href="tour-search.html">Aliqua irure</a></h3>
                        <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                        <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                        <div class="common_card_seven_bottom">
                            <div class="common_card_seven_bottom_left">
                                <p>4.8/5 Excellent</p>
                                <h6>(1214 reviewes)</h6>
                            </div>
                            <div class="common_card_seven_bottom_right">
                                <h4>$99.00 <sub>/Per person</sub></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="common_card_seven">
                    <div class="common_card_seven_img">
                        <a href="tour-search.html">
                            <img src="public/assets/img/home-seven/tour/popular-tour-2.png" alt="img">
                        </a>
                    </div>
                    <div class="common_card_seven_text">
                        <h3><a href="tour-search.html">Anim minim dolore</a></h3>
                        <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                        <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                        <div class="common_card_seven_bottom">
                            <div class="common_card_seven_bottom_left">
                                <p>4.8/5 Excellent</p>
                                <h6>(1214 reviewes)</h6>
                            </div>
                            <div class="common_card_seven_bottom_right">
                                <h4>$99.00 <sub>/Per person</sub></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="common_card_seven">
                    <div class="common_card_seven_img">
                        <a href="tour-search.html">
                            <img src="public/assets/img/home-seven/tour/popular-tour-3.png" alt="img">
                        </a>
                    </div>
                    <div class="common_card_seven_text">
                        <h3><a href="tour-search.html">Mollit eiusmod qui</a></h3>
                        <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                        <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                        <div class="common_card_seven_bottom">
                            <div class="common_card_seven_bottom_left">
                                <p>4.8/5 Excellent</p>
                                <h6>(1214 reviewes)</h6>
                            </div>
                            <div class="common_card_seven_bottom_right">
                                <h4>$99.00 <sub>/Per person</sub></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="common_card_seven">
                    <div class="common_card_seven_img">
                        <a href="tour-search.html">
                            <img src="public/assets/img/home-seven/tour/popular-tour-4.png" alt="img">
                        </a>
                    </div>
                    <div class="common_card_seven_text">
                        <h3><a href="tour-search.html">Qui nisi irure iru</a></h3>
                        <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                        <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                        <div class="common_card_seven_bottom">
                            <div class="common_card_seven_bottom_left">
                                <p>4.8/5 Excellent</p>
                                <h6>(1214 reviewes)</h6>
                            </div>
                            <div class="common_card_seven_bottom_right">
                                <h4>$99.00 <sub>/Per person</sub></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="common_card_seven">
                    <div class="common_card_seven_img">
                        <a href="tour-search.html">
                            <img src="public/assets/img/home-seven/tour/popular-tour-5.png" alt="img">
                        </a>
                    </div>
                    <div class="common_card_seven_text">
                        <h3><a href="tour-search.html">Aliqua irure</a></h3>
                        <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                        <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                        <div class="common_card_seven_bottom">
                            <div class="common_card_seven_bottom_left">
                                <p>4.8/5 Excellent</p>
                                <h6>(1214 reviewes)</h6>
                            </div>
                            <div class="common_card_seven_bottom_right">
                                <h4>$99.00 <sub>/Per person</sub></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="common_card_seven">
                    <div class="common_card_seven_img">
                        <a href="tour-search.html">
                            <img src="public/assets/img/home-seven/tour/popular-tour-6.png" alt="img">
                        </a>
                    </div>
                    <div class="common_card_seven_text">
                        <h3><a href="tour-search.html">Anim minim dolore</a></h3>
                        <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                        <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                        <div class="common_card_seven_bottom">
                            <div class="common_card_seven_bottom_left">
                                <p>4.8/5 Excellent</p>
                                <h6>(1214 reviewes)</h6>
                            </div>
                            <div class="common_card_seven_bottom_right">
                                <h4>$99.00 <sub>/Per person</sub></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="common_card_seven">
                    <div class="common_card_seven_img">
                        <a href="tour-search.html">
                            <img src="public/assets/img/home-seven/tour/popular-tour-7.png" alt="img">
                        </a>
                    </div>
                    <div class="common_card_seven_text">
                        <h3><a href="tour-search.html">Mollit eiusmod qui</a></h3>
                        <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                        <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                        <div class="common_card_seven_bottom">
                            <div class="common_card_seven_bottom_left">
                                <p>4.8/5 Excellent</p>
                                <h6>(1214 reviewes)</h6>
                            </div>
                            <div class="common_card_seven_bottom_right">
                                <h4>$99.00 <sub>/Per person</sub></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="common_card_seven">
                    <div class="common_card_seven_img">
                        <a href="tour-search.html">
                            <img src="public/assets/img/home-seven/tour/popular-tour-8.png" alt="img">
                        </a>
                    </div>
                    <div class="common_card_seven_text">
                        <h3><a href="tour-search.html">Qui nisi irure iru</a></h3>
                        <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                        <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                        <div class="common_card_seven_bottom">
                            <div class="common_card_seven_bottom_left">
                                <p>4.8/5 Excellent</p>
                                <h6>(1214 reviewes)</h6>
                            </div>
                            <div class="common_card_seven_bottom_right">
                                <h4>$99.00 <sub>/Per person</sub></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- discount area -->
<section id="discount_area" class="section_padding_bottom">
    <div class="container">
        <div class="discount_area_wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="discount_left_area">
                        <h2>Grab up to 50% discount on your favorite destination</h2>
                        <p>Proident dolor aliqua velit ad do elit ea veniam eu duis minim incididunt. Id esse
                            laboris
                            aliquip est ex.</p>
                        <a class="btn btn_theme btn_md discount-btn" href="top-destinations-details.html">Grab your
                            destinations</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="discount_img">
                        <img src="public/assets/img/home-seven/common/discount-right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Amazing tour area -->
<section id="amazing_tour_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_heading_seven">
                    <h2>Amazing things to do</h2>
                    <a href="top-destinations-details.html">See all<img src="public/assets/img/icon/list-arrow.png"
                            alt="icon"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="amazing_tour_box">
                    <a href="top-destinations-details.html">
                        <img src="public/assets/img/home-seven/tour/amazing-tour-1.png" alt="img">
                        <div class="amazing_tour_box_content">
                            <div class="amazing_tour_content">
                                <div class="rating_outof">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <h5>5 Out of 5</h5>
                                </div>
                                <h3>Historical places</h3>
                                <h5>10+ places</h5>
                            </div>
                        </div>
                        <div class="top_ratings">
                            <p><i class="fas fa-star"></i> <span>4.8</span></p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="amazing_middle_area">
                    <div class="amazing_tour_box">
                        <a href="top-destinations-details.html">
                            <img src="public/assets/img/home-seven/tour/amazing-tour-2.png" alt="img">
                            <div class="amazing_tour_box_content">
                                <div class="amazing_tour_content">
                                    <div class="rating_outof">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <h5>5 Out of 5</h5>
                                    </div>
                                    <h3>City tours</h3>
                                    <h5>1k+ places</h5>
                                </div>
                            </div>
                            <div class="top_ratings">
                                <p><i class="fas fa-star"></i> <span>4.8</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="amazing_tour_box">
                        <a href="top-destinations-details.html">
                            <img src="public/assets/img/home-seven/tour/amazing-tour-3.png" alt="img">
                            <div class="amazing_tour_box_content">
                                <div class="amazing_tour_content">
                                    <div class="rating_outof">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <h5>5 Out of 5</h5>
                                    </div>
                                    <h3>Mountain</h3>
                                    <h5>50+ peak points</h5>
                                </div>
                            </div>
                            <div class="top_ratings">
                                <p><i class="fas fa-star"></i> <span>4.8</span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="amazing_end_area">
                    <div class="amazing_tour_box">
                        <a href="top-destinations-details.html">
                            <img src="public/assets/img/home-seven/tour/amazing-tour-4.png" alt="img">
                            <div class="amazing_tour_box_content">
                                <div class="amazing_tour_content">
                                    <div class="rating_outof">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <h5>5 Out of 5</h5>
                                    </div>
                                    <h3>Beach tours</h3>
                                    <h5>114+ beaches</h5>
                                </div>
                            </div>
                            <div class="top_ratings">
                                <p><i class="fas fa-star"></i> <span>4.8</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="amazing_end_bottom">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="amazing_tour_box">
                                    <a href="top-destinations-details.html">
                                        <img src="public/assets/img/home-seven/tour/amazing-tour-5.png" alt="img">
                                        <div class="amazing_tour_box_content">
                                            <div class="amazing_tour_content">
                                                <div class="rating_outof">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <h5>5 Out of 5</h5>
                                                </div>
                                                <h3>Food</h3>
                                                <h5>800+ restaurants</h5>
                                            </div>
                                        </div>
                                        <div class="top_ratings">
                                            <p><i class="fas fa-star"></i> <span>4.8</span></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="amazing_tour_box">
                                    <a href="top-destinations-details.html">
                                        <img src="public/assets/img/home-seven/tour/amazing-tour-6.png" alt="img">
                                        <div class="amazing_tour_box_content">
                                            <div class="amazing_tour_content">
                                                <div class="rating_outof">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <h5>5 Out of 5</h5>
                                                </div>
                                                <h3>hiking</h3>
                                                <h5>250+ places</h5>
                                            </div>
                                        </div>
                                        <div class="top_ratings">
                                            <p><i class="fas fa-star"></i> <span>4.8</span></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trending tours -->
<section id="trending_tour" class="section_padding slider_btn">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_heading_seven">
                    <h2>Trending tours</h2>
                    <a href="tour-search.html">See all<img src="public/assets/img/icon/list-arrow.png" alt="icon"></a>
                </div>
                <div class="trending_tour_seven_slider owl-theme owl-carousel">
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-1.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Aliqua irure</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-2.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Anim minim dolore</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-3.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Mollit eiusmod qui</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-4.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Qui nisi irure iru</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-1.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Aliqua irure</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-2.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Anim minim dolore</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-3.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Mollit eiusmod qui</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-4.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Qui nisi irure iru</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-1.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Aliqua irure</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-2.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Anim minim dolore</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-3.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Mollit eiusmod qui</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-4.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Qui nisi irure iru</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- client feedback area -->
<section id="client_feedback" class="slider_btn">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="client_feedback_heading text-center">
                    <h2>Here Are Some Feedback From Clients</h2>
                </div>
                <div class="client_feedback_slider owl-theme owl-carousel">
                    <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-1.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Commodo aliqua minim id do aute aliquip ex aliquip ali
                            qua nostrud ipsum. Esse et conseq dolor anim esse dolore. Voluptate consectetur denorus
                            consectetur ven
                            iam ad aliqua houston.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>David connley</h3>
                                <p>General Manager</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Awesome service</p>
                            </div>
                        </div>
                    </div>
                    <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-2.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Commodo aliqua minim id do aute aliquip ex aliquip poli aliqua nostrud ipsum. Esse et
                            conseq dolor anim es
                            se dolore. Voluptate consectetur consectetur veniam ad aliqua koilom none.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>Selina Madis</h3>
                                <p>Operation Officer</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Great delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-3.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Commodo aliqua minim id do aute aliquip ex aliquip poli aliqua nostrud ipsum. Esse et
                            conseq dolor anim es
                            se dolore. Voluptate consectetur consectetur veniam ad aliqua koilom none.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>Harry Gonzelo</h3>
                                <p>General Manager</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Very efficient</p>
                            </div>
                        </div>
                    </div>
                    <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-1.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Commodo aliqua minim id do aute aliquip ex aliquip ali
                            qua nostrud ipsum. Esse et conseq dolor anim esse dolore. Voluptate consectetur denorus
                            consectetur ven
                            iam ad aliqua houston.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>David connley</h3>
                                <p>General Manager</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Awesome service</p>
                            </div>
                        </div>
                    </div>
                    <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-2.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Commodo aliqua minim id do aute aliquip ex aliquip jui aliqua nostrud ipsum. Esse et
                            conseq dolor anim esse dolore. Voluptate consectetur consectetur guir veniam
                            ad aliqua.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>Selina Madis</h3>
                                <p>Operation Officer</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Great delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-3.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Commodo aliqua minim id do aute aliquip ex aliquip poli aliqua nostrud ipsum. Esse et
                            conseq dolor anim es
                            se dolore. Voluptate consectetur consectetur veniam ad aliqua koilom none.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>Harry Gonzelo</h3>
                                <p>General Manager</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Very efficient</p>
                            </div>
                        </div>
                    </div>
                    <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-1.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Commodo aliqua minim id do aute aliquip ex aliquip ali
                            qua nostrud ipsum. Esse et conseq dolor anim esse dolore. Voluptate consectetur denorus
                            consectetur ven
                            iam ad aliqua houston.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>David connley</h3>
                                <p>General Manager</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Awesome service</p>
                            </div>
                        </div>
                    </div>
                    <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-2.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Commodo aliqua minim id do aute aliquip ex aliquip jui aliqua nostrud ipsum. Esse et
                            conseq dolor anim esse dolore. Voluptate consectetur consectetur guir veniam
                            ad aliqua.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>Selina Madis</h3>
                                <p>Operation Officer</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Great delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-3.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Commodo aliqua minim id do aute aliquip ex aliquip poli aliqua nostrud ipsum. Esse et
                            conseq dolor anim es
                            se dolore. Voluptate consectetur consectetur veniam ad aliqua koilom none.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>Harry Gonzelo</h3>
                                <p>General Manager</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Very efficient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Area -->
<section id="counter_seven_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="counter_seven_area_wrapper">
                    <div class="row justify-content-evenly">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="countre_seven_item">
                                <h3><span class="counter">8</span>k</h3>
                                <h5>Project Complete</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="countre_seven_item">
                                <h3><span class="counter">750</span>+</h3>
                                <h5>Happy Clients</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="countre_seven_item">
                                <h3><span class="counter">29</span></h3>
                                <h5>Total Countries</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="countre_seven_item">
                                <h3><span class="counter">124</span></h3>
                                <h5>Win Awards</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- home seven latest news and blog section -->
<section id="latest_blog_home_seven" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_heading_seven">
                    <h2>Read our latest news and blogs to</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="home_seven_news_box">
                    <a href="news-details.html">
                        <img src="public/assets/img/home-seven/news/news-seven-1.png" alt="img">
                    </a>
                    <div class="home_seven_news_content">
                        <div class="news_content_top">
                            <div class="news_date">
                                <img src="public/assets/img/icon/date.png" alt="icon">
                                <p><span>Date :</span> 20 Dec, 2021</p>
                            </div>
                            <div class="news_admin">
                                <img src="public/assets/img/icon/admin.png" alt="icon">
                                <p><span>by :</span> Admin</p>
                            </div>
                        </div>
                        <h3><a href="news-details.html">Exercitation velit cillum sunt duis veniam deserunt
                                ipsum adipisicing</a></h3>
                        <p>Enim adipisicing magna ccaecat laboris dolore conseq occ. <a
                                href="news-details.html">Read more...</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home_seven_news_box">
                    <a href="news-details.html">
                        <img src="public/assets/img/home-seven/news/news-seven-2.png" alt="img">
                    </a>
                    <div class="home_seven_news_content">
                        <div class="news_content_top">
                            <div class="news_date">
                                <img src="public/assets/img/icon/date.png" alt="icon">
                                <p><span>Date :</span> 20 Dec, 2021</p>
                            </div>
                            <div class="news_admin">
                                <img src="public/assets/img/icon/admin.png" alt="icon">
                                <p><span>by :</span> Admin</p>
                            </div>
                        </div>
                        <h3><a href="news-details.html">Velit cillum sunt duis veniam deserunt sicing</a></h3>
                        <p><a href="news-details.html">Read more...</a></p>
                    </div>
                </div>
                <div class="home_seven_news_bottom">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="home_seven_news_box">
                                <a href="news-details.html">
                                    <img src="public/assets/img/home-seven/news/news-seven-3.png" alt="img">
                                </a>
                                <div class="home_seven_news_content">
                                    <div class="news_content_top">
                                        <div class="news_date">
                                            <img src="public/assets/img/icon/date.png" alt="icon">
                                            <p><span>Date :</span> 20 Dec, 2021</p>
                                        </div>
                                        <div class="news_admin">
                                            <img src="public/assets/img/icon/admin.png" alt="icon">
                                            <p><span>by :</span> Admin</p>
                                        </div>
                                    </div>
                                    <h3><a href="news-details.html">Velit cillum sunt duis
                                            veniam sicing</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="home_seven_news_box">
                                <a href="news-details.html">
                                    <img src="public/assets/img/home-seven/news/news-seven-4.png" alt="img">
                                </a>
                                <div class="home_seven_news_content">
                                    <div class="news_content_top">
                                        <div class="news_date">
                                            <img src="public/assets/img/icon/date.png" alt="icon">
                                            <p><span>Date :</span> 20 Dec, 2021</p>
                                        </div>
                                        <div class="news_admin">
                                            <img src="public/assets/img/icon/admin.png" alt="icon">
                                            <p><span>by :</span> Admin</p>
                                        </div>
                                    </div>
                                    <h3><a href="news-details.html">Cillum sunt duis fury gui veniam sicing</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection