<section id="cta">
    @include('layouts.curves.curve-small-top-right', ['color' => isset($curve_color) ? $curve_color : "#2b2323"])
    <div id="particles-cta-cache"></div>
    <div id="particles-js-cta"></div>

    <div class="cta-content container">
        <h2>Parlons maintenant de votre projet</h2>
        <h3>Ne soyez pas timide</h3>
        <a href="{{route('contact.intro')}}" class="btn btn-outline-white"><i class="fas fa-arrow-right"></i></a>
    </div>

    @include('layouts.curves.curve-small-bottom-left', ['color' => '#2b2323'])
</section>