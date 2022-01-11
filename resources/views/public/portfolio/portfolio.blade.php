@extends('layouts.portfolio_layout')

@section('title')
Portfolio |
@endsection

@section("content")

<section class="hero-section container" id="portfolio-header">
    <div class="row">
        <div class="col-12">
            <h3 class="all-caps color-red">Découvrez notre portfolio</h3>
            <h1 class="red-dot">Nos réalisations</h1>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#ffffff'])

<section id="portfolio" class="portfolio bg-white">
    <div class="container">
        <div class="row">
            <div class="col" id="projects-tags">
                <div class="tag">
                    <input type="checkbox" name="all" id="all">
                    <label for="all">tous</label>
                </div>
                @foreach ($services as $service)
                <div class="tag">
                    <input type="checkbox" name="{{$service->id}}" id="{{$service->id}}">
                    <label for="{{$service->id}}">{{$service->title}}</label>
                </div>
                @endforeach
            </div>
        </div>
        @foreach ($projects as $project)
            @include('components.include_project_preview', compact('project'))
        @endforeach

        <!-- empty project, in case of no results -->
        <div class="row project" id="empty-project" style="display: none;">
            <div class="col-6">
                <h5><i>Notre portfolio ne comporte pas encore de projet pour cette catégorie. Essayez de modifier vos filtres ;)</i></h5>
            </div>
            <div class="col-4">
                {{-- Spacer, letting the image tag in case we want to put a placeholder image
                    <img src="{{asset($project->images->first()->url)}}" alt="{{$project->title}}">
                --}}
            </div>
        </div>

        <div class="row mb-5" id="show-more-btn">
            <div class="col-lg-6 col-12">
                <button class="btn btn-outline-red btn-100" onclick="showTenMore()">Afficher plus de projets</button>
            </div>
        </div>
    </div>
</section>

@include('layouts.cta-section', [$curve_color = "#fff"])

<script type="text/javascript">
    let maxShownProjects = 10;

    const cbs = document.querySelectorAll('.tag');
    const projects = document.querySelectorAll('.project');

    let checkedFilters = [];


    /*
    Returns an array with the node's filters.
    */
    function getCat(node) {
        if(node.dataset.filters != null) {
            return node.dataset.filters.split(',');
        }
    }

    /*
    Shows ten more projects
    */
    function showTenMore() {
        maxShownProjects += 10;
        updateDisplay(checkedFilters, projects);
    }

    function isInFilters(item, filters) {
        let shown = false;
        let cat = getCat(item);
        if(cat != null) {
            cat.forEach(cat => {
                if(!filters.includes(cat) && !shown) {
                    // does nothing
                } else {
                    shown = true;
                }
            });
        }

        return shown;
    }

    function showAll(items, max=1000) {
        let projPerPage = max < items.length-1 ? max : items.length-1;
        for (let index = 0; index < projPerPage; index++) {
            items[index].style.display = "flex";
            if(max == index) { break; }
        }
        //items.forEach(item => {item.style.display = "flex"});
    }

    /*
    Toggle the visibility of the empty project. If 'flag' is true, the empty project is shown.
    */
    function toggleEmptyProject(flag) {
        let emptyProj = document.getElementById("empty-project");
        flag ? emptyProj.style.display = "flex" : emptyProj.style.display = "none";
    }

    /* 
    Hide all projects
    */
    function hideAll(items) {
        items.forEach(item => { item.style.display = "none"; });
    }

    /*
    Hide or show the experiences, according to the filters
    */
    function updateDisplay(filters, items) {
        // if all projects are already shown (not counting with filters), hiding the show more button.
        if(maxShownProjects >= projects.length -1) {
            document.getElementById("show-more-btn").style.display = "none";
        } else {
            document.getElementById("show-more-btn").style.display = "flex";
        }

        hideAll(items);

        if(filters.length == 0) {
            check(false, cbs);
            checkedFilters = [];
            showAll(items, maxShownProjects);
        } else {
            let nothingToShow = true;
            items.forEach(item => {
                if(isInFilters(item, filters)) {
                    item.style.display = "flex";
                    nothingToShow = false;
                } else {
                    item.style.display = "none";
                }
            });

            toggleEmptyProject(nothingToShow);
        }
    }

    /*
     * Set every checkboxes to 'checked', except 'all' to !'checked'
     */
    function check(checked = true, cbs) {
        cbs.forEach((cb) => {
            cb.children[0].checked = checked;
        });
    
        document.getElementById("all").checked = true;
    }

    updateDisplay(checkedFilters, projects);
    
    // Setting the checkboxes : only 'all' checked
    check(false, cbs);
    
    /*  watch event : on click, either uncheck all but 'all', 
        or uncheck 'all' and checked clicked ones */
    cbs.forEach(cb => cb.addEventListener('change', (evt) => {
        if(cb.children[0].id == "all") {
            check(false, cbs);
            checkedFilters = [];
            showAll(projects);
        } else {
            document.getElementById("all").checked = false;
            // Si un élément est sélectionné, on l'ajoute à l'array
            if(cb.children[0].checked) {
                checkedFilters.push(cb.children[0].id);
            } 

            // Si un élément est désélectionné, on doit l'enlever de l'array
            else {
                let index = checkedFilters.indexOf(cb.children[0].id);
                index !== -1 ? checkedFilters.splice(index, 1) : '';
            }
            updateDisplay(checkedFilters, projects);
        }
    }));
    </script>
@endsection