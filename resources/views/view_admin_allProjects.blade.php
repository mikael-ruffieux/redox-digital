@extends('template_admin')

@section('title')
    Dashboard
@endsection

@section('content')
<!-- Page content -->
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Nos projets</div>
                    <div class="table-responsive">
                        @include("include_admin_projects_table")
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
