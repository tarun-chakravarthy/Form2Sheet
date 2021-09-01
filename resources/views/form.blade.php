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
                        <label for="partnerOffering"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
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
                        <label for="partnerOffering1"> <span class="icon">
                            <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?
                            </p>
                            <img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering1" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner1" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner1" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore1"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
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
                        <label for="partnerOffering2"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering2" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner2" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner2" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore2"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
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

        <!-- Configuration Services -->
        <div class="accordion-block row w-100 mx-0 my-auto">
            <div class="accordion bg-red">
                <img class="title-img" src="/images/02_Configuration.svg" alt="" />
                <h3>Configuration Services</h3>
            </div>
            <div class="accordion-content">
                <div class="checklist-forms row">
                    <div class="col-md-8">
                        <p class="s-head-text">
                            Imaging
                        </p>
                        <p class="s-description">
                            Create, Modify, Load customer supplied image to device at factory.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering3"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering3" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner3" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner3" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore3"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore3" id="learnMore">
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
                            Custom BIOS Settings
                        </p>
                        <p class="s-description">
                            Deploy custom Bios requirements from factory & increase deployment.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering4"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering4" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner4" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner4" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore4"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore4" id="learnMore">
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
                            MS Autopilot
                        </p>
                        <p class="s-description">
                            Register device into autopilot program at factory for modern deployment.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering5"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering5" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner5" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner5" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore5"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore5" id="learnMore">
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

        <!-- Deployment Services -->
        <div class="accordion-block row w-100 mx-0 my-auto">
            <div class="accordion bg-violet">
                <img class="title-img" src="/images/03_Deployment.svg" alt="" />
                <h3>Deployment Services</h3>
            </div>
            <div class="accordion-content">
                <div class="checklist-forms row">
                    <div class="col-md-8">
                        <p class="s-head-text">
                            Device Deployment
                        </p>
                        <p class="s-description">
                            Cloud or Physical installation & Set up of new & exisiting equipment.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering6"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering6" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner6" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner6" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore6"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore6" id="learnMore">
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
                            Data Migration
                        </p>
                        <p class="s-description">
                            Transition data from old to new equipment, physical or cloud.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering7"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering7" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner7" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner7" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore7"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore7" id="learnMore">
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
                            Drop in the Box
                        </p>
                        <p class="s-description">
                            Add or remove from box contents to help users get productive sooner.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering8"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering8" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner8" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner8" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore8"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore8" id="learnMore">
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

        <!-- Support Services -->
        <div class="accordion-block row w-100 mx-0 my-auto">
            <div class="accordion bg-sblue">
                <img class="title-img" src="/images/04_Support.svg" alt="" />
                <h3>Support Services</h3>
            </div>
            <div class="accordion-content">
                <div class="checklist-forms row">
                    <div class="col-md-8">
                        <p class="s-head-text">
                            Warranty Support (Premier Support)
                        </p>
                        <p class="s-description">
                            Level 1 and 2 helpdesk support for Hardware & Software, 24*7*365 coverage, parts planning and SLA based deliverables.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering9"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering9" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner9" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner9" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore9"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore9" id="learnMore">
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
                            Accidental Damage Protection
                        </p>
                        <p class="s-description">
                            Insurance for out of warranty breakages caused by customer induced damage.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering10"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering10" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner10" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner10" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore10"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore10" id="learnMore">
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
                            Sealed Battery
                        </p>
                        <p class="s-description">
                            Extended warranty for internal batteries.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering11"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering11" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner11" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner11" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore11"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore11" id="learnMore">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="checklist-forms row">
                    <div class="col-md-8">
                        <p class="s-head-text">
                            Keep Your Drive
                        </p>
                        <p class="s-description">
                            Allows customers to keep their drives after a service event and dispose of business data on their terms.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering12"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering12" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner12" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner12" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore12"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore12" id="learnMore">
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

        <!-- Managed Services -->
        <div class="accordion-block row w-100 mx-0 my-auto">
            <div class="accordion bg-orange">
                <img class="title-img" src="/images/05_Managed.svg" alt="" />
                <h3>Managed Services</h3>
            </div>
            <div class="accordion-content">
                <div class="checklist-forms row">
                    <div class="col-md-8">
                        <p class="s-head-text">
                            CSP & SW Licensing
                        </p>
                        <p class="s-description">
                            Add, remove, or provision licenses through Lenovo anytime within seconds.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering13"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering13" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner13" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner13" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore13"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore13" id="learnMore">
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
                            Image Management
                        </p>
                        <p class="s-description">
                            Build, qualify and maintain custom image.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering14"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering14" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner14" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner14" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore14"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore14" id="learnMore">
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
                            Asset Inventory and Management
                        </p>
                        <p class="s-description">
                            Asset Discovery & reporting, software license mgmt, location tracking & geo fencing.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering15"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering15" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner15" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner15" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore15"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore15" id="learnMore">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="checklist-forms row">
                    <div class="col-md-8">
                        <p class="s-head-text">
                            Compliance
                        </p>
                        <p class="s-description">
                            Password control, config and Bios, encryption.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering16"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering16" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner16" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner16" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore16"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore16" id="learnMore">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="checklist-forms row">
                    <div class="col-md-8">
                        <p class="s-head-text">
                            TCO Management
                        </p>
                        <p class="s-description">
                            Persona Modelling, Device and Service Persona.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering17"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering17" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner17" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner17" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore17"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore17" id="learnMore">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="checklist-forms row">
                    <div class="col-md-8">
                        <p class="s-head-text">
                            Security Management
                        </p>
                        <p class="s-description">
                            Risk Assessment & Response, Endpoint Protection. Secure web browing.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering18"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering18" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner18" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner18" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore18"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore18" id="learnMore">
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

        <!-- Retire Services -->
        <div class="accordion-block row w-100 mx-0 my-auto">
            <div class="accordion bg-green">
                <img class="title-img" src="/images/06_Retire.svg" alt="" />
                <h3>Retire Services</h3>
            </div>
            <div class="accordion-content">
                <div class="checklist-forms row">
                    <div class="col-md-8">
                        <p class="s-head-text">
                            Lenovo Co2 Offset Services
                        </p>
                        <p class="s-description">
                            CO2 compensation is based on realistic emission by product, covering production, shipment, and a typical 5-year usage cycle for new and existing Lenovo devices. I suggest to move this under Config Services as it's an up-front thing, not an end of lifecycle thing.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering19"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering19" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner19" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner19" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore19"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore19" id="learnMore">
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
                            Packaging and Collection
                        </p>
                        <p class="s-description">
                            Lenovo Offer a Single source solution for the secure, environmentally friendly, documented disposition of end-of-life IT assets and data.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering20"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering20" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner20" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner20" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore20"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore20" id="learnMore">
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
                            Logistics (Collection and inspection)
                        </p>
                        <p class="s-description">
                            Lenovo Offer a Single source solution for the secure, environmentally friendly, documented disposition of end-of-life IT assets and data.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering21"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering21" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner21" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner21" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore21"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore21" id="learnMore">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="checklist-forms row">
                    <div class="col-md-8">
                        <p class="s-head-text">
                            Data Wipe
                        </p>
                        <p class="s-description">
                            Lenovo Offer a Single source solution for the secure, environmentally friendly, documented disposition of end-of-life IT assets and data.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering22"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering22" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner22" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner22" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore22"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore22" id="learnMore">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="checklist-forms row">
                    <div class="col-md-8">
                        <p class="s-head-text">
                            Recycling/Disposal/Resale
                        </p>
                        <p class="s-description">
                            Lenovo Offer a Single source solution for the secure, environmentally friendly, documented disposition of end-of-life IT assets and data.
                        </p>
                    </div>
                    <div class="col-md-4 resp-hide">
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        <label for="partnerOffering23"> <span class="icon"> <p class="tool-tip">Is this is an offering which the business partner is capable of delivering to their customer?</p><img src="/images/Info.svg" alt=""></span>Existing Partner Offering</label>
                        <select name="partnerOffering23" id="partnerOffering">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="augmentedPartner23" > <span class="icon"> <p class="tool-tip">Regardless of the answer to the first question, is the business partner interested in reselling Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Augmented partnership with Lenovo</label>
                        <select name="augmentedPartner23" id="augmentedPartner">
                            <optgroup label="Service Options">
                                <option slected="selected">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="learnMore23"> <span class="icon"> <p class="tool-tip">Regardless of the answers to the first two questions, is the business partner interested in learning more about Lenovo's offering?</p><img src="/images/Info.svg" alt=""></span>Keen to learn more!</label>
                        <select name="learnMore23" id="learnMore">
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
    </div>

    <div class="row text-center w-100 mx-auto">
        <div class="col-md-6 btn-margin">
            <button class="btn __outlined __lg" name="export" type="export" value="export">Export as Excel</button>
        </div>
        <div class="col-md-6 btn-margin">
            <button class="btn __primary __lg" name="submit" type="submit" value="submit">Download as PDF</button>
        </div>
    </div>
</form>
