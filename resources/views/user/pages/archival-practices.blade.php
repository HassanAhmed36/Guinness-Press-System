@extends('user.layouts.template')
@section('title', 'Unlocking Knowledge: Explore Our Article Archive & Research Article Database')
@section('keywords', 'article archive research, article database')
@section('description', 'Delve into our extensive article archive and research article database at Guinness Press. Access a wealth of scholarly resources for comprehensive research endeavors.')

@section('banner')
<section class="main_banner inner_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner_content white_text">
                    <h3 class="cocogoose_light">
                        Practices
                    </h3>
                    <h1 class="cocogoose_light">
                        Archival Practices
                    </h1>
                    <p class="poppins_fonts">
                        Guinness Press ensures the long-term preservation and accessibility of scholarly work. Through robust archiving, all published content remains available for future researchers.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('body')
<section class="sec_3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec_3_content">
                    <h3 class="cocogoose_light">
                        Practices
                    </h3>
                    <h1 class="cocogoose_light">
                        ARCHIVAL PRACTICES
                    </h1>
                    <p class="poppins_fonts">
                        Guinness Press is committed to the long-term preservation and accessibility of the scholarly work published in our journals. We follow a robust archiving policy to ensure that all published content remains available and accessible for future generations of researchers, scholars, and readers.
                    </p>
                    <h5>
                        Key aspects of our archiving policy include:
                    </h5>
                    <p class="poppins_fonts">
                        Digital Preservation: We employ advanced digital archiving techniques to safeguard our content against technological obsolescence or data loss.
                    </p>
                    <p class="poppins_fonts">
                        Third-Party Archives: We collaborate with reputable third-party archival services to ensure redundancy and further secure the preservation of our published materials.
                    </p>
                    <p class="poppins_fonts">
                        DOI Permanence: Digital Object Identifiers (DOIs) assigned to our publications are registered with CrossRef, providing a permanent and stable link to each article.
                    </p>
                    <p class="poppins_fonts">
                        Backup and Redundancy: Multiple copies of our archived content are maintained in geographically distributed locations to safeguard against unforeseen events.
                    </p>
                    <p class="poppins_fonts">
                        For more details or specific inquiries regarding our archiving policy, please <a href="{{url('/contact-us')}}">contact us</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
