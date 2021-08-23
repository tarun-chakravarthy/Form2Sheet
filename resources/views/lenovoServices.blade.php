<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <!-- Jquery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ config('app.name', 'lenovo-services') }}</title>
</head>

<body>
    <section class="s-wrapper">
        <div class="lnv-services">
            <!-- hero banner -->
            <div class="hero-banner">
                <img class="ds-img" src="{{ asset('images/hero-img-bg.png') }}" alt="bg-img" />
                <img class="mb-img" src="/images/hero-img-mb-bg.png" alt="bg-img" />
                <span class="hero-text">
                    <h1>Lenovo Services</h1>
                    <h1>Opportunity Checklist</h1>
                </span>
            </div>

            <!-- REP details -->
            <div class="partner-details add-grey">
                <h3 class="details-title">Lorem ipsum</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus
                    facere porro ab dolor fugiat doloremque iure, architecto expedita et
                    tempore doloribus fugit officia, soluta libero, odit delectus
                    necessitatibus recusandae ea!
                </p>
                <hr />

                <form action="" class="service-form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="speaking-to">Who are you speaking to</label>
                            <input type="text" placeholder="" id="speaking-to" />
                        </div>
                        <div class="col-md-6">
                            <label for="speaking-to">Business Partner name</label>
                            <input type="text" placeholder="" id="speaking-to" />
                        </div>
                        <div class="col-md-6">
                            <label for="speaking-to">Lenovo REP</label>
                            <input type="text" placeholder="" id="speaking-to" />
                        </div>
                    </div>
                </form>
            </div>

            <!-- Service Accordion tabs -->
            <div class="add-padding">

                <!-- Discovery and Planning services -->
                <div class="accordion-block row w-100 mx-0 my-auto">
                    <button class="accordion bg-blue">
                        <span class="title-img"><img src="/images/01_Discovery.svg" alt="" /></span>
                        Discovery & Planning Services
                    </button>
                    <div class="accordion-content">
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Whiteboard Session & Refresh Planning
                                </p>
                                <p class="s-description">
                                    Review current processes & offer recommendations on how
                                    these processes can be improved and showcases the benefits.
                                    Persona modelling (User Grouping).
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="augmented-partner">Augmented partnership with Lenovo</label>
                                <select name="augmented-partner" id="augmented-partner">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="learn-more">Keen to learn more!</label>
                                <select name="learn-more" id="learn-more">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                        <hr />
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Migration Services
                                </p>
                                <p class="s-description">
                                    Migration services to move from On Prem to Hybrid/Cloud, Azure health check
                                    workshops & discovery sessions.
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="augmented-partner">Augmented partnership with Lenovo</label>
                                <select name="augmented-partner" id="augmented-partner">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="learn-more">Keen to learn more!</label>
                                <select name="learn-more" id="learn-more">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                        <hr />
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Persona Modelling (User Grouping)
                                </p>
                                <p class="s-description">
                                    Review usages within the customer's organisation, review user groups and map usage
                                    profiles or 'personas' against each user group to assign a persona device per group.
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="augmented-partner">Augmented partnership with Lenovo</label>
                                <select name="augmented-partner" id="augmented-partner">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="learn-more">Keen to learn more!</label>
                                <select name="learn-more" id="learn-more">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Configuration Services -->
                <div class="accordion-block row w-100 mx-0 my-auto">
                    <button class="accordion bg-red">
                        <span class="title-img"><img src="/images/02_Configuration.svg" alt="" />
                            Discovery & Planning Services</span>
                    </button>
                    <div class="accordion-content">
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Whiteboard Session & Refresh Planning
                                </p>
                                <p class="s-description">
                                    Review current processes & offer recommendations on how
                                    these processes can be improved and showcases the benefits.
                                    Persona modelling (User Grouping).
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                        <hr />
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Whiteboard Session & Refresh Planning
                                </p>
                                <p class="s-description">
                                    Review current processes & offer recommendations on how
                                    these processes can be improved and showcases the benefits.
                                    Persona modelling (User Grouping).
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                        <hr />
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Whiteboard Session & Refresh Planning
                                </p>
                                <p class="s-description">
                                    Review current processes & offer recommendations on how
                                    these processes can be improved and showcases the benefits.
                                    Persona modelling (User Grouping).
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Deployment Services -->
                <div class="accordion-block row w-100 mx-0 my-auto">
                    <button class="accordion bg-violet">
                        <span class="title-img"><img src="/images/03_Deployment.svg" alt="" />
                            Discovery & Planning Services</span>
                    </button>
                    <div class="accordion-content">
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Whiteboard Session & Refresh Planning
                                </p>
                                <p class="s-description">
                                    Review current processes & offer recommendations on how
                                    these processes can be improved and showcases the benefits.
                                    Persona modelling (User Grouping).
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                        <hr />
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Whiteboard Session & Refresh Planning
                                </p>
                                <p class="s-description">
                                    Review current processes & offer recommendations on how
                                    these processes can be improved and showcases the benefits.
                                    Persona modelling (User Grouping).
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                        <hr />
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Whiteboard Session & Refresh Planning
                                </p>
                                <p class="s-description">
                                    Review current processes & offer recommendations on how
                                    these processes can be improved and showcases the benefits.
                                    Persona modelling (User Grouping).
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Support Services -->
                <div class="accordion-block row w-100 mx-0 my-auto">
                    <button class="accordion bg-sblue">
                        <span class="title-img"><img src="/images/04_Support.svg" alt="" />
                            Discovery & Planning Services</span>
                    </button>
                    <div class="accordion-content">
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Whiteboard Session & Refresh Planning
                                </p>
                                <p class="s-description">
                                    Review current processes & offer recommendations on how
                                    these processes can be improved and showcases the benefits.
                                    Persona modelling (User Grouping).
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                        <hr />
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Whiteboard Session & Refresh Planning
                                </p>
                                <p class="s-description">
                                    Review current processes & offer recommendations on how
                                    these processes can be improved and showcases the benefits.
                                    Persona modelling (User Grouping).
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                        <hr />
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Whiteboard Session & Refresh Planning
                                </p>
                                <p class="s-description">
                                    Review current processes & offer recommendations on how
                                    these processes can be improved and showcases the benefits.
                                    Persona modelling (User Grouping).
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Managed Services -->
                <div class="accordion-block row w-100 mx-0 my-auto">
                    <button class="accordion bg-orange">
                        <span class="title-img"><img src="/images/05_Managed.svg" alt="" />
                            Discovery & Planning Services</span>
                    </button>
                    <div class="accordion-content">
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Whiteboard Session & Refresh Planning
                                </p>
                                <p class="s-description">
                                    Review current processes & offer recommendations on how
                                    these processes can be improved and showcases the benefits.
                                    Persona modelling (User Grouping).
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                        <hr />
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Whiteboard Session & Refresh Planning
                                </p>
                                <p class="s-description">
                                    Review current processes & offer recommendations on how
                                    these processes can be improved and showcases the benefits.
                                    Persona modelling (User Grouping).
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                        <hr />
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Whiteboard Session & Refresh Planning
                                </p>
                                <p class="s-description">
                                    Review current processes & offer recommendations on how
                                    these processes can be improved and showcases the benefits.
                                    Persona modelling (User Grouping).
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Retire Services -->
                <div class="accordion-block row w-100 mx-0 my-auto">
                    <button class="accordion bg-green">
                        <span class="title-img"><img src="/images/06_Retire.svg" alt="" />
                            Discovery & Planning Services</span>
                    </button>
                    <div class="accordion-content">
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Whiteboard Session & Refresh Planning
                                </p>
                                <p class="s-description">
                                    Review current processes & offer recommendations on how
                                    these processes can be improved and showcases the benefits.
                                    Persona modelling (User Grouping).
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                        <hr />
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Whiteboard Session & Refresh Planning
                                </p>
                                <p class="s-description">
                                    Review current processes & offer recommendations on how
                                    these processes can be improved and showcases the benefits.
                                    Persona modelling (User Grouping).
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                        <hr />
                        <form action="" class="service-form row">
                            <div class="col-md-8">
                                <p class="s-head-text">
                                    Whiteboard Session & Refresh Planning
                                </p>
                                <p class="s-description">
                                    Review current processes & offer recommendations on how
                                    these processes can be improved and showcases the benefits.
                                    Persona modelling (User Grouping).
                                </p>
                            </div>
                            <div class="col-md-4 resp-hide">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="partner-offering">Existing Partner Offering</label>
                                <select name="partner-offering" id="partner-offering">
                                    <optgroup label="Service Options">
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                        <option value="opt-1">Option</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const accordionBtns = document.querySelectorAll(".accordion");


        accordionBtns.forEach((accordion) => {
            accordion.onclick = function () {
                this.classList.toggle("is-open");

                let content = this.nextElementSibling;
                console.log(content);

                if (content.style.maxHeight) {
                    // Accordion is active
                    content.style.maxHeight = null;
                } else {
                    // Accordion is in-active
                    content.style.maxHeight = content.scrollHeight + "px";
                    console.log(content.style.maxHeight)
                }
            }
        })
    </script>
</body>

</html>
