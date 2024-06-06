@extends('layouts.admin')
@section('title')
<h1 class="green text-uppercase"><strong class="gradientColor">{{ $project->title }}</strong></h1>
@endsection
@section('content')
<table class="f-d-table">
    <tr>
        <th class="text-center fw-bold gradientColor fs-4">Repo-Url</th>
        <th class="text-center fw-bold gradientColor fs-4">Technologies</th>
        <th class="text-center fw-bold gradientColor fs-4">Started at</th>
        <th class="text-center fw-bold gradientColor fs-4">Ended at</th>
        <th class="text-center fw-bold gradientColor fs-4">Status</th>

    </tr>
    <tr>
        <td class="green">{{ $project->repository_url }}</td>
        <td class="green">{{ $project->technologies }}</td>
        <td class="green">{{ $project->start_date }}</td>
        <td class="green">{{ $project->end_date }}</td>
        <td class="green">{{ $project->status }}</td>
    </tr>
</table>
<div class="d-flex justify-content-between">
    <div class="f-d-main-first-container f-d-transparent-layer">
        <p class="lightbrown fs-4 fw-bold">
            Description of the project
        </p>
        <p class="green fw-bold">
            {{ $project->description }}
        </p>
        <!-- <p class="lightbrown fs-4 fw-bold">
            Used Technologies
        </p>
        <p class="green fw-bold">
            {{ $project->technologies_used }}
        </p> -->
        <p class="lightbrown fs-4 fw-bold">
            Url of the project
        </p>
        <div class="d-flex bd-highlight mb-3">
            <p class="green fw-bold me-auto p-2 bd-highlight">
                {{ $project->url }}
            </p>
            <div class="p-2 bd-highlight">
                <a href="{{ route('admin.projects.edit', $project) }}" class="">
                    <button type="submit" class="f-d-button">
                        <i class="fa-solid fa-pen">
                        </i>
                    </button>
                </a>
            </div>
            <div class="p-2 bd-highlight">
                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="f-d-button">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>

            </div>

        </div>
    </div>
    <div class="f-d-main-second-container f-d-transparent-layer">
        <p class="lightbrown fs-4 fw-bold">
            Image of the project
        </p>
        <div class="w-100">
            <img class="f-d-img" src="{{ asset('storage/' . $project->image_path)}}" alt="Project Image">
        </div>
        <p class="text-center">
            <em class="green">Designed by <strong class="gradientColor fs-4">{{ Auth::user()->name }}</strong></em>
        </p>
    </div>
</div>
<!-- <div class="w-100 f-d-transparent-layer">
    <p class="lightbrown fs-4 fw-bold">
        Related Projects
    </p>
</div>
<div class="w-100 f-d-transparent-layer d-flex gap-4 align-items-center">
        <div class="d-flex">
            <a href="{{ route('admin.projects.show', $project->slug) }}"><img class="f-d-img-small"
                    src="{{ $project->image_path }}" alt="imgfirst"></a>
        </div>
</div>  -->
@endsection

@section('sidebarContent')
<div class="f-d-nav-vertical">
    <div>
        <p class="green fs-4 fw-bold">
            User
        </p>
        <a href="{{ route('home') }}" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-chart-line"></i>
            Home
        </a>
        <a href="{{ route('admin.dashboard') }}" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-sliders"></i>
            Dashboard
        </a>
        <a href="{{ route('admin.dashboard') }}" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-list-check"></i>
            Projects
        </a>
    </div>

    <div>
        <p class="green fs-4 fw-bold">
            Data
        </p>
        <a href="#" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-book"></i>
            Documentation
        </a>
        <a href="#" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-chart-line"></i>
            Charts
        </a>
    </div>

    <div>
        <p class="green fs-4 fw-bold">
            Help
        </p>
        <a href="#" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-people-group"></i>
            Community
        </a>
        <a href="#" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-headset"></i>
            Support
        </a>
        <a href="#" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-gear"></i>
            Settings
        </a>
    </div>


</div>
@endsection