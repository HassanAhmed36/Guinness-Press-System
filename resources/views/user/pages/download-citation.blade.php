@extends('user.layouts.template')

@section('title', 'Download Citation')

@section('body')
    <section class="main_banner inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_content white_text">
                        <h3 class="cocogoose_light">
                            Want To Get A Service?
                        </h3>
                        <h1 class="cocogoose_light">
                            Search your journal
                        </h1>
                        <p class="poppins_fonts">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                        </p>
                        <form>
                            <div class="form-group">
                                <input class="form-control banner_input" type="text" />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-light">Find Your Journals</button>
                                <button type="submit" class="btn btn-light">Submit your Article</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
