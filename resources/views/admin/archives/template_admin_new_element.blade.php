@extends('admin.template_admin')

@section('title')
    Nouveau projet
@endsection

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        @yield('form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection