@extends('layouts.home')


@section('content')
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="lnv-services">
        @csrf
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

            <div class="checklist-forms">
                <div class="row">
                    <div class="col-md-6">
                        <label for="speakingTo">Who are you speaking to</label>
                        <input type="text" name="speakingTo" placeholder="" id="speakingTo" required/>
                    </div>
                    <div class="col-md-6">
                        <label for="partnerName">Business Partner name</label>
                        <input type="text" name="partnerName" placeholder="" id="partnerName" required/>
                    </div>
                    <div class="col-md-6">
                        <label for="lnvRep">Lenovo REP</label>
                        <input type="text" name="lnvRep" placeholder="" id="lnvRep" required/>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Accordion tabs -->
        <div class="add-padding">

            <!-- Discovery and Planning services -->
            <div class="accordion-block row w-100 mx-0 my-auto">
                <div class="accordion bg-blue">
                    <img class="title-img" src="/images/01_Discovery.svg" alt="" />
                    <h3>Discovery & Planning Services</h3>
                </div>
                <div class="accordion-content">
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="augmentedPartner">Augmented partnership with Lenovo</label>
                            <select name="augmentedPartner" id="augmentedPartner">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="learnMore">Keen to learn more!</label>
                            <select name="learnMore" id="learnMore">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering1">Existing Partner Offering</label>
                            <select name="partnerOffering1" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="augmentedPartner1">Augmented partnership with Lenovo</label>
                            <select name="augmentedPartner1" id="augmentedPartner">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="learnMore1">Keen to learn more!</label>
                            <select name="learnMore1" id="learnMore">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering2">Existing Partner Offering</label>
                            <select name="partnerOffering2" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="augmentedPartner2">Augmented partnership with Lenovo</label>
                            <select name="augmentedPartner2" id="augmentedPartner">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="learnMore2">Keen to learn more!</label>
                            <select name="learnMore2" id="learnMore">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <!-- Configuration Services -->
            <div class="accordion-block row w-100 mx-0 my-auto">
                <button class="accordion bg-red">
                    <span class="title-img"><img src="/images/02_Configuration.svg" alt="" />
                        Discovery & Planning Services</span>
                </button>
                <div class="accordion-content">
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deployment Services -->
            <div class="accordion-block row w-100 mx-0 my-auto">
                <button class="accordion bg-violet">
                    <span class="title-img"><img src="/images/03_Deployment.svg" alt="" />
                        Discovery & Planning Services</span>
                </button>
                <div class="accordion-content">
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Support Services -->
            <div class="accordion-block row w-100 mx-0 my-auto">
                <button class="accordion bg-sblue">
                    <span class="title-img"><img src="/images/04_Support.svg" alt="" />
                        Discovery & Planning Services</span>
                </button>
                <div class="accordion-content">
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Managed Services -->
            <div class="accordion-block row w-100 mx-0 my-auto">
                <button class="accordion bg-orange">
                    <span class="title-img"><img src="/images/05_Managed.svg" alt="" />
                        Discovery & Planning Services</span>
                </button>
                <div class="accordion-content">
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Retire Services -->
            <div class="accordion-block row w-100 mx-0 my-auto">
                <button class="accordion bg-green">
                    <span class="title-img"><img src="/images/06_Retire.svg" alt="" />
                        Discovery & Planning Services</span>
                </button>
                <div class="accordion-content">
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <div class="checklist-forms row">
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
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="partnerOffering">Existing Partner Offering</label>
                            <select name="partnerOffering" id="partnerOffering">
                                <optgroup label="Service Options">
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option slected="selected">Please select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Option</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

        <div class="row text-center m-5">
            <div class="col-md-6">
                <button class="btn btn-success" name="submit" type="submit" value="submit">Download</button>
            </div>
            <div class="col-md-6">
                <button class="btn btn-primary" name="export" type="export" value="export">Export</button>
            </div>
        </div>
    </form>
@endsection
