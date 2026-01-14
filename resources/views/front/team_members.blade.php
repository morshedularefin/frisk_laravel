@extends('front.layouts.master')

@section('main_content')

<div class="breadcumb-wrapper " data-bg-src="{{ asset('dist/front/img/bg/breadcumb-bg1-3.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Team Members</h1>
        </div>
    </div>
</div>

<div class="team-area-1 space overflow-hidden">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            @foreach($team_members as $team_member)
            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset('uploads/'.$team_member->photo) }}" alt="Team Image">
                    </div>
                    <div class="team-card_content">
                        <h3 class="team-card_title"><a href="{{ route('team_member',$team_member->slug) }}">{{ $team_member->name }}</a></h3>
                        <span class="team-card_desig">{{ $team_member->position }}</span>
                    </div>
                </div>
            </div>
            @endforeach

            @if ($team_members->hasPages())
            <div class="col-lg-12">
                <div class="pagination-wrap mt-50">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination list-wrap">
                            {{-- Previous Page Link --}}
                            @if (!$team_members->onFirstPage())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $team_members->previousPageUrl() }}">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                </li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($team_members->getUrlRange(1, $team_members->lastPage()) as $page => $url)
                                <li class="page-item {{ ($page == $team_members->currentPage()) ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($team_members->hasMorePages())
                                <li class="page-item next-page">
                                    <a class="page-link" href="{{ $team_members->nextPageUrl() }}">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
            @endif




        </div>
    </div>
</div>


@include('front.layouts.footer_1')
@endsection