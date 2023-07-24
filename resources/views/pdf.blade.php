<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <title>Services and Opportunity Checklist</title>
        <style type="text/css" media="all">

            @font-face {
                font-family: "GothamM";
                src: url("{{ storage_path('fonts/gotham-medium-webfont.ttf') }}") format('truetype');
            }
        body {
                color: #384047;
                text-transform: capitalize;
                font-family: 'Nunito', sans-serif;
            }
            table {
                min-width: 100%;
                margin: 10px auto;
                font-family: 'Nunito', sans-serif;
            }
            caption {
                font-size: 1.6em;
                font-weight: 400;
                padding: 10px 0;
            }
            thead th {
                font-weight: 400;
                text-transform: capitalize;
                background: #8a97a0;
                color: #FFF;
            }
            tr {
                background: #f4f7f8;
                border-bottom: 1px solid #FFF;
            }
            tr:nth-child(even) {
                background: #e8eeef;
            }

            tbody {
                font-family: 'Nunito', sans-serif;
            }

            tbody th,
            tbody td, {
                font-family: 'Nunito', sans-serif;
            }

            th, td {
                text-align: left;
                padding: 20px;
            }

            th {
                font-weight: 300;
            }

            td {
                font-weight: 200;
            }

            tfoot tr {
            background: none;
            }

            tfoot td {
                padding: 10px 2px;
                font-size: 0.8em;
                color: #a1d1f3;
            }
        </style>
    </head>

    <body>
        {{-- Add client's Logo --}}
        {{-- <div style="min-width: 40px; min-height: 120px; text-align:right;">
            <img src="{{ public_path('images/lenovo-logo.jpeg') }}" style="width: 40px; height: 120px;">
        </div> --}}
        {{-- Client Services Opportunity Checklist --}}
        <div>
            <table>
                <caption>Client Services Opportunity Checklist</caption>
                <tbody>
                    <tr>
                        <th>Who are you speaking to</th>
                        <td>{{ $speakingTo }}</td>
                    </tr>
                    <tr>
                        <th>Business Partner name</th>
                        <td>{{ $partnerName }}</td>
                    </tr>
                    <tr>
                        <th>Client REP</th>
                        <td>{{ $lnvRep }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Discovery & Planning Services --}}
        <div>
            <table>
                <caption>Discovery & Planning Services</caption>
                <thead>
                    <tr>
                        <th>
                            Whiteboard Session & Refresh Planning
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering0 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner0 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore0 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Migration Services
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering1 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner1 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore1 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Persona Modelling (User Grouping)
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering2 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner2 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore2 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Configuration Services --}}
        <div>
            <table>
                <caption>Configuration Services</caption>
                <thead>
                    <tr>
                        <th>
                            Imaging
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering3 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner3 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore3 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Custom BIOS Settings
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering4 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner4 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore4 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Persona Modelling (User Grouping)
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering5 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner5 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore5 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Deployment Services --}}
        <div>
            <table>
                <caption>Deployment Services</caption>
                <thead>
                    <tr>
                        <th>
                            Device Deployment
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering6 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner6 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore6 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Data Migration
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering7 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner7 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore7 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Drop in the Box
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering8 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner8 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore8 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Support Services --}}
        <div>
            <table>
                <caption>Support Services</caption>
                <thead>
                    <tr>
                        <th>
                            Warranty Support (Premier Support)
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering6 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner6 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore6 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Accidental Damage Protection
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering7 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner7 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore7 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Sealed Battery
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering8 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner8 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore8 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Keep Your Drive
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering8 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner8 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore8 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Managed Services --}}
        <div>
            <table>
                <caption>Managed Services</caption>
                <thead>
                    <tr>
                        <th>
                            CSP & SW Licensing
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering13 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner13 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore13 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Image Management
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering14 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner14 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore14 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Asset Inventory and Management
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering15 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner15 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore15 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Compliance
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering16 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner16 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore16 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            TCO Management
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering17 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner17 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore17 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Security Management
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering18 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner18 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore18 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Retire Services  --}}
        <div>
            <table>
                <caption>Retire Services </caption>
                <thead>
                    <tr>
                        <th>
                            Client Co2 Offset Services
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering19 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner19 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore19 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Packaging and Collection
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering20 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner20 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore20 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Logistics (Collection and inspection)
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering21 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner21 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore21 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Data Wipe
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering22 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner22 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore22 }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            Recycling/Disposal/Resale
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Existing Partner Offering</th>
                        <td>{{ $partnerOffering23 }}</td>
                    </tr>
                    <tr>
                        <th>Augmented Partnership With Lenovo</th>
                        <td>{{ $augmentedPartner23 }}</td>
                    </tr>
                    <tr>
                        <th>Keen To Learn More!</th>
                        <td>{{ $learnMore23 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>

</html>
