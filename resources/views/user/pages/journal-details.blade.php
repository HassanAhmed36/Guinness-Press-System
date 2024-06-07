@extends('user.layouts.template')
{{--
@section('title', $title)
@section('keywords', $keywords)
@section('description', $description) --}}
@section('banner')
    <section class="detail_bread_crumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bread_crumb">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="journal_detail_section">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <img src="{{ asset($journal->image) }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="details_content">
                        <h3 class="cocogoose_light text-uppercase">
                            {{ $journal->name }}
                        </h3>
                        <div class="access_type">
                            <div class="left_access">
                                <h5 class="text-uppercase">
                                    ISSN NO : {{ $journal->issn_no }}
                                </h5>
                            </div>
                            <div class="right_access">
                                <img src="https://www.guinnesspress.org/bkp/assets/img/open-access-logo.png"
                                    class="img-fluid" />
                            </div>
                        </div>
                        {!! $journal->description !!}
                    </div>
                    <div class="btn-group">
                        <a href="javascript:;" data-fancybox="" data-src="#submitArticlePopup"
                            class="btn btn-light btn-blue red-btn">Submit Your Article</a>
                        <a href="{{ url('/journal', ['journal_name' => $journal->acronym, 'journal_p' => 'editorial-board']) }}"
                            class="btn btn-light btn-blue">Editorial Board</a>
                        <a href="{{ url('/journal', ['journal_name' => $journal->acronym, 'journal_p' => 'join-board']) }}"
                            class="btn btn-light btn-blue">Join Our Editors Board</a>
                    </div>
                </div>
                <!--<div class="col-6 col-lg-2">-->

                <!--<a href="{{ url('/submit-articles') }}" class="btn btn-light btn-blue">Submit your Article</a>-->
                <!--</div>-->
                <!--<div class="col-6 col-lg-2">-->

                <!--</div>-->
                <div class="col-md-4 col-sm-12">
                    <div class="journal_metrics_box">
                        <div class="metrics_header">
                            <i class="fas fa-chart-bar"></i>
                            <span>Journal Metrics</span>
                        </div>
                        <div class="actual-metrics-container has-metrics">
                            <div class="journalcard__metrics border">
                                <span class="metrics_label">Acceptance rate</span>
                                <span class="metrics_value">{{ $journal->journal_matrix->acceptance_rate }}</span>
                            </div>
                            <div class="journalcard__metrics border">
                                <span class="metrics_label">Submission to final decision</span>
                                <span
                                    class="metrics_value">{{ $journal->journal_matrix->submission_to_final_decision }}</span>
                            </div>
                            <div class="journalcard__metrics border">
                                <span class="metrics_label">Acceptance to publication</span>
                                <span class="metrics_value">{{ $journal->journal_matrix->acceptance_to_publication }}</span>
                            </div>
                            <div class="journalcard__metrics border">
                                <span class="metrics_label">DOI Prefix</span>
                                <span class="metrics_value">{{ $journal->journal_matrix->dio_prefix }}</span>
                            </div>
                            <div class="journalcard__metrics border">
                                <span class="metrics_label">Publication Type</span>
                                <span class="metrics_value">{{ $journal->journal_matrix->publication_type }}</span>
                            </div>
                            <div class="journalcard__metrics border">
                                <span class="metrics_label">Publishing Model</span>
                                <span class="metrics_value">{{ $journal->journal_matrix->publishing_model }}</span>
                            </div>
                            <div class="journalcard__metrics border">
                                <span class="metrics_label">Journal Category</span>
                                <span class="metrics_value">{{ $journal->journal_matrix->journal_category }}</span>
                            </div>
                        </div>
                        <div class="journalcard__footer">
                            <div class="apc_label_value">
                                <span class="apc_labels">APC</span>
                                <span class="apc_data">{{ $journal->journal_matrix->acp }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="row">-->

            <!--</div>-->
        </div>
    </section>
@endsection
@section('body')
    <section class="journal_description">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="cocogoose_light text-uppercase other_css_3">
                        Journal overview
                    </h2>
                    <div class="over_view">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-manuscript-tab" data-bs-toggle="pill"
                                    data-bs-target="#manuscript_tab" type="button" role="tab"
                                    aria-controls="manuscript-tab" aria-selected="true">Manuscript Preparation -
                                    Guidelines</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#aims"
                                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">Aims and
                                    scope</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#editorial_policies" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Editorial Policies</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#instructions" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Author's Guidelines</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-eic-tab" data-bs-toggle="pill" data-bs-target="#eic"
                                    type="button" role="tab" aria-controls="pills-eic" aria-selected="false">Role
                                    of EIC</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-eb-tab" data-bs-toggle="pill" data-bs-target="#eb"
                                    type="button" role="tab" aria-controls="pills-eb" aria-selected="false">Role of
                                    EBM</button>
                            </li>
                        </ul>
                        <div class="tab-content mt-3 ">
                            <div class="tab-pane fade" id="manuscript_tab" role="tabpanel"
                                aria-labelledby="manuscript-tab">
                                <ul class="search-results">
                                    <li>
                                        <div class="article-titles">
                                            <p>
                                                Feel free to download the template for your article, designed to meet our
                                                formatting standards. Although it's optional, should you choose not to use
                                                it, our designing team at Guinness Press will still ensure your manuscript
                                                aligns with our requirements upon acceptance.
                                            </p>
                                            <a class="article-tabbtn"
                                                href="https://guinnesspress.org/journals/template-file/ijerm.docx">
                                                <span>Download Template File</span>
                                            </a>
                                            <p>Before submitting your manuscript, please ensure the following:</p>
                                            <ul class="tab-list">
                                                <li><span>Proper attribution is given to the author and permission is
                                                        obtained from the original copyright holder if copyrighted material
                                                        is being used.</span></li>
                                                <li><span>Keywords are included in the manuscript.</span></li>
                                                <li><span>All ethical requirements are met in the manuscript.</span></li>
                                                <li><span>References are complete and cited in sequential order in the text
                                                        section of the manuscript.</span></li>
                                                <li><span>Supplemental files, if applicable, are provided.</span></li>
                                                <li><span>Conflict of interest is declared. Even if there is no conflict of
                                                        interest, it must be reported.</span></li>
                                                <li><span>Figures and Tables, along with their captions if provided, are
                                                        cited in the text section of the manuscript.</span></li>
                                                <li><span>The manuscript is free from grammatical and spelling
                                                        errors.</span></li>
                                            </ul>
                                            <h3>1. Guidelines for Reporting</h3>
                                            <p>Authors are encouraged to adhere to the following guidelines when reporting
                                                their research:</p>
                                            <ul class="tab-list">
                                                <li><span><a
                                                            href="http://www.care-statement.org/resources/checklist">CARE:</a>
                                                        Recommended to use for case reports. </span></li>
                                                <li><span><a href="https://www.nc3rs.org.uk/arrive-guidelines">ARRIVE:</a>
                                                        Recommended to improve the reporting of research using animal
                                                        experiments. </span></li>
                                                <li><span><a
                                                            href="https://academic.oup.com/intqhc/article/19/6/349/1791966">COREQ:</a>
                                                        Recommended for qualitative research. </span></li>
                                                <li><span><a
                                                            href="https://legacyfileshare.elsevier.com/promis_misc/ISSM_MOOSE_Checklist.pdf">MOOSE:</a>
                                                        Recommended for meta-analyses of observational studies in
                                                        Epidemiology </span></li>
                                                <li><span><a href="http://www.stard-statement.org/">STARD</a> and <a
                                                            href="http://www.tripod-statement.org/">TRIPOD:</a> Recommended
                                                        for diagnostic accuracy studies. </span></li>
                                                <li><span><a href="https://www.cdc.gov/trendstatement/">TREND:</a>
                                                        Recommended for non-randomized trials. </span></li>
                                                <li><span><a
                                                            href="https://www.strobe-statement.org/index.php?id=available-checklists">STROBE:</a>
                                                        Recommended for Observational studies. </span></li>
                                                <li><span><a href="http://www.prisma-statement.org/">PRISMA:</a>
                                                        Recommended to follow for systematic review and meta-analyses.
                                                    </span></li>
                                                <li><span><a
                                                            href="http://www.equator-network.org/reporting-guidelines/strobe-strega/">STREGA:</a>
                                                        Recommended for studies of genetic association. </span></li>
                                                <li><span><a
                                                            href="https://www.equator-network.org/wp-content/uploads/2013/04/CHEERS-2022-checklist-1.pdf">CHEERS:</a>
                                                        Recommended for economic evaluations. </span></li>
                                                <li><span><a href="http://www.consort-statement.org/consort-2010">Consolidated
                                                            Standards of Reporting Trials (CONSORT):</a> Recommended for
                                                        randomized controlled trials. </span></li>
                                            </ul>
                                            <h3>2. Submission Process</h3>
                                            <p>
                                                To submit your manuscript to Guinness Press, utilize our dedicated online
                                                submission system available at
                                                https://guinnesspress.org/submit-your-article. The corresponding author is
                                                tasked with the submission and will work closely with the Editorial Office
                                                throughout the process. Prior to submission, the corresponding author must
                                                confirm that all authors listed adhere to the authorship criteria outlined
                                                by the International Committee of Medical Journal Editors (ICMJE) and COPE.
                                            </p>
                                            <h3>3. Cover Letter</h3>
                                            <p>
                                                During manuscript submission, the corresponding author is required to
                                                include a cover letter, outlining the manuscript's significance. This letter
                                                should affirm, on behalf of all authors, that the submission is original and
                                                not under consideration or published elsewhere. Additionally, it should
                                                confirm agreement among all authors regarding authorship and state the
                                                absence of disputes. Please disclose any potential conflicts of interest or
                                                concerns regarding journal policies in the cover letter as well.
                                            </p>
                                            <h3>4. Title:</h3>
                                            <p>
                                                Authors should aim for a concise title for their manuscript, ideally
                                                spanning 10-15 words and directly reflecting the research topic. It's
                                                advisable to refrain from using abbreviations or shortened forms. Kindly
                                                adhere to these guidelines when crafting your submission's title.
                                            </p>
                                            <h3>5. Authors' Name and Affiliation:</h3>
                                            <p>
                                                The title page of the manuscript should list the full names of all authors,
                                                accompanied by their current affiliations, digital identifiers, and email
                                                addresses. Ensuring the accuracy and completeness of this information is
                                                essential for efficient communication and appropriate attribution.
                                            </p>
                                            <h3>6. Article Structure: Subdivision - Numbered Sections</h3>
                                            <p>
                                                Please organize your article into distinct, numbered sections. Subsections
                                                should be labeled as 1.1 (and then 1.1.1, 1.1.2, and so on), 1.2, and so
                                                forth. Note that section numbering excludes the abstract. Utilize this
                                                numbering system for internal cross-references, avoiding vague references to
                                                'the text'. If necessary, provide concise headings for each subsection,
                                                ensuring each heading begins on a separate line.
                                            </p>
                                            <h3>7. Highlights:</h3>
                                            <p>
                                                While optional, we strongly encourage authors to include this section, as it
                                                could enhance the visibility of your articles. We invite you to summarize
                                                the key points of your article in 3 to 5 bullet points, enhancing its
                                                discoverability on search engines. These highlights should be submitted as a
                                                separate, editable file using 'Highlights' in the filename or provided as a
                                                distinct section within the manuscript. Utilizing 3 to 5 bullet points, each
                                                within 85 characters (including spaces), can significantly enhance your
                                                article's online visibility.
                                            </p>
                                            <h3>8. Abstract:</h3>
                                            <p>
                                                The abstract of a research article should be concise, adhering to a strict
                                                350-word limit. It should include a brief introduction, presentation of
                                                results, and a succinct discussion. Avoid citing references within the
                                                abstract and refrain from using abbreviations.
                                            </p>
                                            <h3>9. Keywords:</h3>
                                            <p>
                                                Incorporate a minimum of 6-8 keywords in the manuscript that are directly
                                                relevant to the topic. Choose specific keywords and steer clear of generic
                                                terms such as disease, climate, environment, etc.
                                            </p>
                                            <h3>10. Introduction:</h3>
                                            <p>
                                                The introduction serves as the initial section of the manuscript, providing
                                                an explanation of the significance and background of the topic under
                                                discussion.
                                            </p>
                                            <h3>11. Materials and Methods:</h3>
                                            <p>
                                                This section should furnish details pertaining to the "Materials and
                                                Methods" employed in the research, including the original data source,
                                                materials utilized, study aim, design, and setting. Provide a comprehensive
                                                description of processes, interventions, and comparisons within the
                                                materials and methods section of the manuscript.
                                            </p>
                                            <h3>12. Results:</h3>
                                            <p>
                                                This section should encompass the main and significant findings of the
                                                study. Results of statistical analysis can be presented within the text or
                                                referenced in tables or figures.
                                            </p>
                                            <h3>13. Discussion:</h3>
                                            <p>
                                                Authors are encouraged to interpret the results in the context of previous
                                                studies and working hypotheses. Discuss the findings and their implications
                                                broadly, highlighting the limitations of the work. Future research
                                                directions may also be suggested. This section, "Discussion," may be merged
                                                with the Results section.
                                            </p>
                                            <h3>14. Conclusion:</h3>
                                            <p>
                                                Provide a concise summary of the entire article under the section
                                                "Conclusion."
                                            </p>
                                            <h3>15. List of Abbreviations:</h3>
                                            <p>
                                                If the manuscript contains abbreviations, their full forms should be
                                                provided initially. Authors are advised to include a comprehensive list of
                                                these abbreviations along with their full names under the section "List of
                                                Abbreviations," which should be placed at the end of the article.
                                            </p>
                                            <h3>16. Declarations</h3>
                                            <p>Every research article should encompass the following sections:</p>
                                            <ul class="tab-list">
                                                <li>Approval of ethics and consent to participate</li>
                                                <li>Permission for publication</li>
                                                <li>Availability of data and materials</li>
                                                <li>Disclosure of conflicts of interest</li>
                                                <li>Funding sources</li>
                                                <li>Contributions of authors</li>
                                                <li>Acknowledgments</li>
                                            </ul>
                                            <h3>17. References</h3>
                                            <p>Guinness Press Journals adhere to either APA reference style. Here are key
                                                points to consider when citing articles:</p>
                                            <ul class="tab-list">
                                                <li>Maintain Consistency in Citations: All references cited within figures,
                                                    tables, or text should also be listed in the reference section of the
                                                    manuscript.</li>
                                                <li>Author Count and "et al." Usage: If there are 6 or fewer authors,
                                                    include all their names. For references with more than 6 authors, list
                                                    the names of the first 6 authors followed by "et al." to represent the
                                                    remaining authors.</li>
                                                <li>Include DOIs: Ensure to include the DOI (Digital Object Identifier) for
                                                    all cited articles at the end of your references.</li>
                                                <li>Published Articles: Include only articles that have been published or
                                                    accepted for publication. For published articles, provide the page
                                                    numbers or article numbers.</li>
                                                <li>Accepted Articles: If an article has been accepted for publication but
                                                    is pending publication, indicate its status as "In Press" within
                                                    brackets.</li>
                                                <li>Avoid Citing Data Under Peer Review: Guinness Press discourages citing
                                                    data that is still under peer review by any publisher.</li>
                                            </ul>
                                            <h3>18. Manuscript File Formats</h3>
                                            <p>For submitting manuscripts, the preferred file format is Microsoft Word,
                                                either in DOC or DOCX format. Editable files are essential for the review
                                                and production process. If you initially submit a non-editable file, you
                                                will need to resubmit your manuscript in a Word file.</p>
                                            <p>Consider the following points:</p>
                                            <ul class="tab-list">
                                                <li>Utilize double-line spacing.</li>
                                                <li>Include both line and page numbering in your document.</li>
                                                <li>Ensure that any special characters used are properly embedded within the
                                                    text, as they may be lost during the conversion to PDF.</li>
                                                <li>Avoid using page breaks in your manuscript</li>
                                            </ul>
                                            <h3>19. Figures</h3>
                                            <p>
                                                In accordance with the regulations detailed in the Image Manipulation
                                                section of our Ethical Guidelines, authors must obtain permission prior to
                                                incorporating copyrighted figures or any segment of a figure or table,
                                                ensuring strict adherence to the requirements of relevant licenses.
                                            </p>
                                            <p>
                                                Figures should be positioned near the corresponding text rather than at the
                                                beginning or end of the document, and citations of figures within the text
                                                should follow a sequential order. Figures with multiple parts should be
                                                consolidated into a single file containing all components (a, b, c, etc.),
                                                with each figure not exceeding 10 MB in size. When utilizing graphs, labels
                                                including units should be provided for each axis.
                                            </p>
                                            <p>
                                                If the manuscript is submitted in LaTex format, figures should be submitted
                                                in PDF. Following acceptance of the paper, separate figures may be necessary
                                                for production purposes.
                                            </p>
                                            <p>
                                                Authors are reminded to obtain approval from the original copyright holder
                                                if figures are reproduced from any published content.
                                            </p>
                                            <p>
                                                <u>Image Size and Resolution:</u>
                                            </p>
                                            <p>As the final manuscript version will be in PDF format, figures must be
                                                prepared to align with this format.</p>
                                            <p>
                                                <u>Dimension Requirements:</u>
                                            </p>
                                            <ul class="tab-list">
                                                <li>For single-column figures: Width should be 85mm</li>
                                                <li>For double-column figures: Width should be 180mm</li>
                                            </ul>
                                            <p><b>Resolution:</b> Ensure figures have high resolution (typically 300 dots
                                                per inch or DPI) to maintain quality when printed or viewed on-screen.
                                                Verify resolution by enlarging the figure to 150%. Blurriness indicates
                                                insufficient resolution.</p>
                                            <p><b>Font Size:</b> Ensure text, labels, or legends in figures are legible at
                                                expected dimensions. A font size of 8-10 points is usually suitable.</p>
                                            <p>
                                                <u>Acceptable File Types for Figures:</u>
                                            </p>
                                            <ul class="tab-list">
                                                <li>Microsoft Word (single-page figures)</li>
                                                <li>PowerPoint (single-page figures)</li>
                                                <li>EPS</li>
                                                <li>PDF</li>
                                                <li>TIFF</li>
                                                <li>JPEG</li>
                                                <li>PNG</li>
                                                <li>BMP</li>
                                            </ul>
                                            <p>For Vector drawings, provide EPS or PDF. Chemical structures should be
                                                prepared in CDX (ChemDraw).</p>
                                            <p>
                                                <u>Please Avoid:</u>
                                            </p>
                                            <ul class="tab-list">
                                                <li>Low-quality figures</li>
                                                <li>Files with low resolution for screen use (e.g., BMP, GIF, WPG, PICT)
                                                </li>
                                                <li>Graphics larger than necessary for content</li>
                                            </ul>
                                            <p><b>Figure Captions:</b> Captions should consist of a concise text title
                                                separate from the figure. Provide minimal descriptions with explanations for
                                                abbreviations and symbols used.</p>
                                            <h3>20. Tables</h3>
                                            <ul class="tab-list">
                                                <li><u>Table Citations:</u> <span>Tables should be cited in sequential order
                                                        within the text section of the manuscript. It's essential to include
                                                        all citations, and tables must be provided as editable Word files,
                                                        not images.</span></li>
                                                <li><u>Table Layout:</u> <span>The table caption should be positioned above
                                                        the table, with legends provided underneath.</span></li>
                                                <li><u>Large Files:</u> <span>For large files with multiple parts, they
                                                        should be listed under Supplementary files due to formatting
                                                        considerations.</span></li>
                                                <li><u>Table Numbering:</u> <span>When referring to tables in the text, use
                                                        the format "Table 1," with the number in bold.</span></li>
                                                <li><u>Table Usage:</u> <span>Avoid duplicating information, ensuring that
                                                        results are not repeated elsewhere in the manuscript.</span></li>
                                                <li><u>Formatting:</u> <span>Refrain from using shading or vertical rules in
                                                        table cells.</span></li>
                                            </ul>
                                            <h3>21. Supplementary Materials </h3>
                                            <p>
                                                Guinness Press publishes supplementary material alongside articles to enrich
                                                content and provide readers with valuable resources. For manuscripts with
                                                innovative or extensive methodology sections, we encourage the inclusion of
                                                supplementary online materials, such as equations, data treatment methods,
                                                syntax code, example data, code books, case descriptions, research context,
                                                and detailed narratives. Additionally, images, sound clips, and method
                                                applications can further enhance your work.
                                            </p>
                                            <p>
                                                If any changes are necessary for the provided supplementary file, please
                                                submit a completely new file rather than providing a correction list or
                                                annotating corrections on the previous version. It's important to note that
                                                supplementary files are published as provided, and no formatting is applied
                                                from the Publisher's side.
                                            </p>
                                            <p>
                                                <u>Online Publication Format</u>
                                            </p>
                                            <p>
                                                Please be advised that supplementary material will not be incorporated into
                                                the manuscript but will be linked on our website in the format provided by
                                                the author.
                                            </p>
                                            <p>
                                                <u>File Format and Size</u>
                                            </p>
                                            <p>
                                                It's essential to ensure that each additional file represents a single
                                                table, figure, or movie. Please avoid uploading linked worksheets or PDF
                                                files larger than one sheet. All supporting or supplementary materials
                                                should be consolidated into a single zipped file, not exceeding 4 MB in
                                                size. For data sheets, we recommend using Word, Excel, CSV, CDX, FASTA, PDF,
                                                or Zip formats. Presentations are best provided in PowerPoint, PDF, or Zip
                                                files. Images can be submitted in CDX, JPEG, EPS, TIFF, or PNG formats.
                                            </p>
                                            <p>
                                                For supplementary audio files, kindly provide them in MP3 format, and for
                                                videos, use MOV, MPG, AVI, or MPEG formats. Supplementary images must be in
                                                300 DPI, and RGB color mode should be utilized.
                                            </p>
                                            <h3>22. Language Editing</h3>
                                            <p>
                                                Prior to manuscript submission, authors are encouraged to have their work
                                                reviewed by a native English speaker or to utilize professional language
                                                editing services. This helps minimize the risk of rejection due to language
                                                inconsistencies. Manuscripts containing grammatical or typographical errors
                                                will be deemed ineligible for publication and will be returned to the author
                                                with a recommendation for correction before further consideration in the
                                                publication process. Authors are encouraged to seek professional editing
                                                services to address any language inconsistencies and errors in their
                                                manuscripts.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="aims" role="tabpanel" aria-labelledby="aims-tab">
                                <ul class="search-results">
                                    <li>
                                        <div class="article-titles">
                                            <h2>Aims And Scope</h2>
                                            <h4>Aims</h4>
                                            <p>The International Journal of Empirical Research Methods is dedicated to
                                                promoting and advancing empirical research methodologies across various
                                                disciplines. This journal aims to provide a platform for researchers,
                                                scholars, educators, and practitioners to share insights, methodologies, and
                                                findings that contribute to the improvement of empirical research practices
                                                and the enhancement of evidence-based decision-making.</p>
                                            <h4>Scope</h4>
                                            <p>The International Journal of Empirical Research Methods welcomes original
                                                research articles, methodological reviews, case studies, and technical notes
                                                that explore a wide range of empirical research methods across diverse
                                                fields. Our scope encompasses various aspects of empirical research,
                                                including but not limited to:</p>
                                            <h3>1. Research Design And Methodology:</h3>
                                            <p>Analyses of research design choices, study frameworks, and methodological
                                                approaches employed in empirical investigations.</p>
                                            <h3>2. Quantitative Research:</h3>
                                            <p>Research utilizing quantitative data analysis techniques, statistical
                                                methods, and data-driven interpretations of research questions.</p>
                                            <h3>3. Qualitative Research:</h3>
                                            <p>Studies employing qualitative data collection methods, content analysis,
                                                thematic analysis, and grounded theory approaches.</p>
                                            <h3>4. Mixed Methods Research:</h3>
                                            <p>Investigations that combine both quantitative and qualitative research
                                                methodologies to provide a comprehensive understanding of phenomena.</p>
                                            <h3>5. Survey Design And Analysis:</h3>
                                            <p>Discussions on survey instrument development, sampling techniques, survey
                                                administration, and survey data analysis.</p>
                                            <h3>6. Experimental And Quasi-Experimental Designs:</h3>
                                            <p>Research using controlled experiments, randomized controlled trials (RCTs),
                                                and quasi-experimental approaches.</p>
                                            <h3>7. Data Collection And Measurement:</h3>
                                            <p>Explorations of data collection techniques, measurement instruments, and
                                                strategies for ensuring data validity and reliability.</p>
                                            <h3>8. Statistical Analysis Techniques:</h3>
                                            <p>Studies on advanced statistical methods, multivariate analysis, regression
                                                analysis, and data visualization.</p>
                                            <h3>9. Replication And Reproducibility:</h3>
                                            <p>Analyses on the importance of replicating empirical studies, promoting
                                                transparency, and addressing issues of reproducibility.</p>
                                            <p>The International Journal of Empirical Research Methods seeks to facilitate
                                                the exchange of knowledge, best practices, and innovations in empirical
                                                research methodologies. By showcasing the latest advancements and promoting
                                                rigorous research practices, the journal aims to contribute to the
                                                continuous improvement of empirical research quality and its impact on
                                                scientific knowledge.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="editorial_policies" role="tabpanel"
                                aria-labelledby="editorial-tab">
                                <ul class="search-results">
                                    <li>
                                        <div class="article-titles">
                                            <h2>Editorial Policies</h2>
                                            <p>
                                            </p>
                                            <p>Guinness Press adheres to a strong ethical foundation in scholarly
                                                publishing. Our commitment to ethical practices ensures the integrity of the
                                                publishing process. Our journals are dedicated to maintaining high standards
                                                of ethical behavior by authors, reviewers, and editors. Our editorial staff
                                                is well-trained to identify and address ethical concerns effectively.</p>
                                            <p>Our editorial office diligently investigates ethical matters our readers
                                                raise in line with established procedures. The Editorial Board is
                                                responsible for addressing disputes related to the validity of research
                                                reported in published papers. In cases involving authorship disputes, data
                                                ownership, or author misconduct, we may engage external organizations, such
                                                as university ethics committees, for resolution. Authors are expected to
                                                respond to substantiated allegations as needed.</p>
                                            <p></p>
                                            <h3>Publication Ethics</h3>
                                            <p> We uphold the highest ethical standards in publishing. Plagiarism, data
                                                fabrication, and falsification are strictly prohibited. Authors are required
                                                to submit original work, cite sources appropriately, and adhere to ethical
                                                guidelines.</p>
                                            <h3>Authorship and Acknowledgments</h3>
                                            <p>Authors should have contributed significantly to the research presented. All
                                                contributors should be acknowledged appropriately. Any potential conflicts
                                                of interest should be disclosed.</p>
                                            <h3>Copyright and Licensing</h3>
                                            <p>Authors retain the copyright of their work and grant us a license to publish.
                                                We publish under open-access licenses to ensure broad dissemination of
                                                knowledge while respecting author rights.</p>
                                            <h3>Open Access Policy</h3>
                                            <p>We support open-access publishing to make research freely accessible. Authors
                                                may choose open-access options, ensuring their work reaches a wider
                                                audience.</p>
                                            <h3>Data Sharing and Transparency</h3>
                                            <p>We encourage authors to share data and materials supporting their findings.
                                                Transparent reporting enhances reproducibility and credibility.</p>
                                            <h3>Corrections and Retractions</h3>
                                            <p> We are committed to rectifying errors promptly. Corrections and retractions
                                                will be issued as necessary.</p>
                                            <h3>Conflicts of Interest</h3>
                                            <p> Authors, reviewers, and editors must disclose any conflicts of interest that
                                                may compromise objectivity. Transparency is essential to maintain the
                                                integrity of the review process.</p>
                                            <h3>Appeals and Disputes</h3>
                                            <p>Authors have the right to appeal editorial decisions. Disputes are handled
                                                objectively and transparently, following established procedures.</p>
                                            <h3>Privacy and Confidentiality</h3>
                                            <p> We respect the privacy of authors, reviewers, and readers. Personal
                                                information is treated confidentially and used only for journal-related
                                                purposes.</p>
                                            <h3>Editorial Independence</h3>
                                            <p>Editors make decisions based on academic merit without influence from
                                                advertisers, funders, or other parties. Decisions are transparent and
                                                impartial.</p>
                                            <h3>Diversity and Inclusion</h3>
                                            <p>We are committed to diversity and inclusivity. We welcome submissions from
                                                all researchers, regardless of background, and ensure fair and unbiased
                                                treatment.</p>
                                            <h3>Reviewer Guidelines</h3>
                                            <p>Reviewers must provide constructive, unbiased, and timely feedback.
                                                Confidentiality of manuscripts and reviewer identities is maintained.</p>
                                            <h3>Appeals and Complaints</h3>
                                            <p>Authors and stakeholders may raise concerns through a formal appeals or
                                                complaints process. These concerns will be addressed promptly and
                                                objectively.</p>
                                            <p>We value feedback from authors, reviewers, and readers. We are committed to
                                                ongoing improvements in our processes and the excellence of our
                                                publications.</p>
                                            <p>These editorial policies ensure a transparent, ethical, and high-quality
                                                publication process. Authors, reviewers, and readers must familiarize
                                                themselves with these policies to ensure a smooth and ethical publishing
                                                experience.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="editorial" role="tabpanel" aria-labelledby="editorial-tab">
                                <ul class="search-results">
                                    {{-- {!! $journal->journal_overview->author_guideline ?? '' !!} --}}
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="instructions" role="tabpanel"
                                aria-labelledby="instructions-tab">
                                <ul class="search-results">
                                    <li>
                                        <div class="article-titles">
                                            <h2>Author`s Guidelines</h2>
                                            <p>Please read and follow these author guidelines carefully to ensure the
                                                submission process is as smooth as possible.</p>
                                            <h3>Manuscript Types Accepted</h3>
                                            <p>We accept various types of manuscripts, including:</p>
                                            <p><b>Research Articles : </b>Original research contributions.</p>
                                            <p><b>Review Articles : </b>Comprehensive reviews of specific topics.</p>
                                            <p><b>Short Communications : </b>Concise research findings.</p>
                                            <p><b>Case Studies : </b>In-depth analyses of specific cases.</p>
                                            <p><b>Editorials : </b>Invited commentaries from experts.</p>
                                            <p><b>Letters to the Editor: </b>Short, focused contributions.</p>
                                            <p><b>Book Reviews : </b>Reviews of recent publications in the field.</p>
                                            <h3>Manuscript Preparation</h3>
                                            <p><b>Formatting : </b>Prepare your manuscript according to our journal's
                                                specific formatting guidelines.</p>
                                            <p><b>Language : </b>Manuscripts should be written 'English' and conform to
                                                proper grammar and style.</p>
                                            <p><b>Title:</b>Choose a clear, concise, and informative title that accurately
                                                represents the content of your paper.</p>
                                            <p><b>Abstract : </b>Include an abstract summarizing the objectives,
                                                methodology, results, and conclusions of your research.</p>
                                            <p><b>Keywords : </b>Provide a list of relevant keywords that capture the
                                                essence of your work.</p>
                                            <p><b>Citations and References:</b>Follow a recognized citation style (e.g.,
                                                APA, MLA) for in-text citations and the References section.</p>
                                            <h3>Submission Process</h3>
                                            <p><b>Online Submission : </b>Submit your manuscript through our email address
                                                <a href="mailto: info@guinnesspress.org">info@guinnesspress.org</a>.
                                            </p>
                                            <p><b>Cover Letter : </b>Include a cover letter with your submission, briefly
                                                outlining the significance and originality of your work.</p>
                                            <p><b>Peer Review : </b>All submissions undergo a rigorous peer-review process.
                                                Please be prepared to respond to reviewer comments and make necessary
                                                revisions.</p>
                                            <h3>Publication Ethics</h3>
                                            <p><b>Originality : </b>Ensure your work is original and has not been published
                                                elsewhere.</p>
                                            <p><b>Authorship : </b>Clearly list all authors who have contributed
                                                substantially to the research.</p>
                                            <p><b>Plagiarism : </b>Avoid plagiarism by properly citing and referencing
                                                sources.</p>
                                            <h3>Copyright and Licensing</h3>
                                            <p>Authors retain the copyright to their work but are required to grant
                                                'Guinness Press' a license to publish and distribute their work.</p>
                                            <h3>Publication Fees</h3>
                                            <p>Guinness Press may charge publication fees for production, editing, and
                                                distribution costs. These fees, if applicable, will be communicated upon
                                                acceptance.</p>
                                            <h3>Open Access</h3>
                                            <p>Guinness Press supports open-access publishing.</p>
                                            <h3>After Acceptance</h3>
                                            <p><b>Proofreading : </b> Authors will receive galley proofs for final
                                                proofreading and corrections.</p>
                                            <p><b>Publication : </b> Once published, your work will be available on our
                                                website and, if applicable, in print.</p>
                                            <h3>Contact Information</h3>
                                            <p>For inquiries or assistance, please contact our editorial office at <a
                                                    href="mailto: info@guinnesspress.org">info@guinnesspress.org</a>. We
                                                are here to help you throughout the publication process.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="eic" role="tabpanel"
                                aria-labelledby="instructions-tab">
                                <ul class="search-results">
                                    <li>
                                        <div class="article-titles">
                                            <h2>Role Of EIC</h2>
                                            <p>The Editor-in-Chief (EiC) is the leading role of the journal and makes major
                                                decisions for developing and promoting the journal. The EiC has considerable
                                                knowledge and expertise about the editorial activities of the journal, and
                                                is greatly involved in all key procedures of publication. </p>
                                            <h3>Ensuring Scholarly Excellence</h3>
                                            <p>The EiC is responsible for maintaining and enhancing the journal's scholarly
                                                reputation by ensuring that all published articles meet the highest
                                                standards of quality, accuracy, and academic rigor. </p>
                                            <h3>Editorial Policy Development</h3>
                                            <p>The EiC plays a pivotal role in the development and continuous refinement of
                                                the journal's editorial policies, including ethical guidelines, author
                                                guidelines, and peer review processes. </p>
                                            <h3>Engaging with the Research Community</h3>
                                            <p>The EiC should actively engage with the broader academic and research
                                                community, attending conferences, workshops, and events to promote the
                                                journal, attract submissions, and stay updated with emerging trends.</p>
                                            <h3>Stakeholder Communication</h3>
                                            <p>The EiC should facilitate effective communication between the editorial team,
                                                authors, reviewers, and readers to ensure transparent and efficient
                                                editorial processes. </p>
                                            <h3>Conflict Resolution</h3>
                                            <p>In situations where conflicts or disputes arise, the EiC should serve as a
                                                mediator to find amicable solutions that uphold the journal's integrity and
                                                reputation. </p>
                                            <h3>Editorial Innovation</h3>
                                            <p>Encouraging innovative approaches to publishing, such as multimedia content,
                                                interactive elements, and data visualization, can help enhance the journal's
                                                appeal and reach. </p>
                                            <h3>Mentoring and Development</h3>
                                            <p> The EiC can play a mentoring role for junior members of the editorial team,
                                                providing guidance, support, and opportunities for their professional
                                                growth. </p>
                                            <h3>Building Collaborations</h3>
                                            <p>The EiC can actively seek collaborations with institutions, organizations to
                                                foster knowledge exchange and cross-disciplinary research. </p>
                                            <h3>Suggests/Contributes Special and Themed Issues or Articles: </h3>
                                            <p>The Editor-in-Chief initiates and contributes to special issues, enhancing
                                                the journal's impact through curated topics and insightful articles that
                                                enrich the scholarly discourse.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade show" id="eb" role="tabpanel"
                                aria-labelledby="instructions-tab">
                                <ul class="search-results">
                                    <li>
                                        <div class="article-titles">
                                            <h2>Role Of EBM</h2>
                                            <p>The Editorial board is a panel of researchers with expertise in the relevant
                                                field. They are appointed by the publishers in consent with the
                                                Editor-in-Chief of the journal. Editorial board members are involved in:</p>
                                            <h3>Expert Peer Review:</h3>
                                            <p>Editorial Board Members diligently conduct rigorous peer reviews of submitted
                                                manuscripts, ensuring adherence to the journal's policies and scope. Their
                                                critical evaluations contribute to maintaining the scholarly excellence and
                                                credibility of the published content.</p>
                                            <h3>Curating Cutting-Edge Themes:</h3>
                                            <p>Editorial Board Members take the lead in curating compelling theme issues and
                                                hot topics that align with the journal's focus. By identifying trending
                                                subjects, they drive the exploration of new frontiers in research, fostering
                                                thought-provoking discussions among contributors and readers.</p>
                                            <h3>Engaging Authors and Contributing Expertise:</h3>
                                            <p>Editorial Board Members actively engage with the scholarly community by
                                                extending invitations to potential authors to submit their research.
                                                Additionally, they lead by example by contributing their own valuable
                                                insights through authored articles, enriching the journal's content with
                                                their expertise.</p>
                                            <h3>Expert Review Facilitation:</h3>
                                            <p>Editorial Board Members play a key role in identifying suitable peer
                                                reviewers with specialized knowledge in specific topics. Additionally, they
                                                offer valuable second opinions on papers when needed, ensuring thorough and
                                                comprehensive evaluations that uphold the journal's rigorous review
                                                standards.</p>
                                            <h3>Advocacy and Promotion:</h3>
                                            <p>Editorial Board Members actively champion the journal's visibility by
                                                promoting it among authors, readers, and subscribers. They also inspire
                                                their colleagues to contribute their research, thereby fostering a vibrant
                                                scholarly community that collectively advances the journal's impact and
                                                reach.</p>
                                            <h3>Strengthening Editorial Expertise:</h3>
                                            <p>Editorial Board Members contribute to the growth of the journal by
                                                identifying and suggesting accomplished scholars and experts as potential
                                                board members. Their recommendations enhance the journal's editorial team
                                                with diverse perspectives and expertise, enriching the overall quality of
                                                the publication.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="search-journal-filters search-results explore_jarticles_sec">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row search-titles">
                            <div class="col-md-11 col-xl-11 col-sm-12 m-xl-auto m-md-auto">
                                <h1 class="explore-h">Explore articles</h1>
                            </div>
                        </div>
                        <div class="row search-journal-row">
                            <div class="col-md-11 col-xl-11 col-sm-12 m-xl-auto m-md-auto pt-5">
                                @forelse ($journal->volume as $volume)
                                    <div id="explore_jaccourdian" class="explore_jaccourdian">
                                        <div class="card border-0">
                                            <div class="card-header p-0 border-0" id="heading-{{ $volume->id }}">
                                                <button class="btn btn-link accordion-title border-0 collapse"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-{{ $volume->id }}" aria-expanded="true"
                                                    aria-controls="collapse-{{ $volume->id }}">
                                                    <span class="vol_no">
                                                        Volume {{ $volume->name }}
                                                        ({{ \Carbon\Carbon::parse($volume->created_at)->format('Y') }})
                                                    </span>
                                                    <i
                                                        class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>
                                                </button>
                                            </div>
                                            <div id="collapse-{{ $volume->id }}" class="collapse show"
                                                aria-labelledby="heading-{{ $volume->id }}"
                                                data-bs-parent="#explore_jaccourdian">
                                                @foreach ($volume->issue as $issue)
                                                    <div class="card-body accordion-body">
                                                        <div class="issues_ofvolume">
                                                            <a href="{{ url('publication/journal/' . $journal->acronym . '/issue/' . $issue->issue_id) }}"
                                                                class="issue_link">Issue {{ $issue->name }}:</a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <h5>No Articles</h5>
                                @endforelse
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <script>
        < script >
            $(document).ready(function() {
                $('#pills-tab button').on('click', function(e) {
                    var $this = $(this);
                    if ($this.hasClass('active')) {
                        $this.removeClass('active');
                        $($this.attr('data-bs-target')).removeClass('show active');
                    } else {
                        $('#pills-tab button').removeClass('active');
                        $('.tab-pane').removeClass('show active');
                        $this.addClass('active');
                        $($this.attr('data-bs-target')).addClass('show active');
                    }
                });
            });
    </script>
    </script>
@endsection
