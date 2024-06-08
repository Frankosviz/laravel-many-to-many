@extends('layouts.admin')

@section('title')
<h1 class="green text-uppercase">Good Morning, <strong class="gradientColor">{{ Auth::user()->name }}</strong></h1>
@endsection

@section('content')
<section class="text-center">
</section>
<section>
    <div class="d-flex justify-content-between align-items-center">
        <div class="w-100">
            <table class="f-d-table">
                <tr>
                    <th class="text-center fw-bold gradientColor fs-4">Title</th>
                    <th class="text-center fw-bold gradientColor fs-4">Repo-Url</th>
                    <th class="text-center fw-bold gradientColor fs-4">Status</th>
                    <th class="text-center fw-bold gradientColor fs-4">Start-Date</th>
                    <th class="text-center fw-bold gradientColor fs-4">Detail</th>
                    <th class="text-center fw-bold gradientColor fs-4"><a class="f-d-button"
                            href="{{ route('admin.projects.create') }}"><i class="fa-solid fa-plus"></i></th></a>

                </tr>
                @foreach ($projects as $project)
                    <tr>
                        <td class="green">{{ $project->title }}</td>
                        <td class="green">{{ $project->repository_url }}</td>
                        <td class="green">{{ $project->status }}</td>
                        <td class="green">{{ $project->start_date }}</td>
                        <td class="d-flex align-items-center">
                            <a href="{{ route('admin.projects.show', $project) }}" class="f-d-button">
                                <i class="fa-solid fa-eye">
                                </i>
                            </a>
                        </td>
                        <td>

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


</section>
@endsection

@section('sidebarContent')
@include('partials.sidebar');
@endsection