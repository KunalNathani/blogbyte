@extends('frontend.layouts.app')

@section('page-content')
<div class="row">
    @forelse ($posts as $post)
    <div class="col-md-4 col-sm-6 col-xs-12 mb50">
        <h4 class="blog-title"><a href="#">{{ $post->title }}</a></h4>
        <div class="blog-three-attrib">
            <span class="icon-calendar"></span>{{ $post->published_at->diffForHumans() }} |
            <span class=" icon-pencil"></span><a href="#">{{ $post->author->name }}</a>
        </div>
        <img src="{{ asset("frontend/assets/img/$post->image") }}" class="img-responsive" alt="image blog">
        <p class="mt25">{{ $post->excerpt }}</p>
        <a href="{{ route('single-post', $post) }}" class="button button-gray button-xs">Read More <i class="fa fa-long-arrow-right"></i></a>
    </div>
    @empty
        <h2>No Posts Found</h2>
    @endforelse
</div>

<!-- Blog Paging
===================================== -->
<div class="row mt25 animated" data-animation="fadeInUp" data-animation-delay="100">
    <div class="col-md-6">
        <a href="#" class="button button-sm button-pasific pull-left hover-skew-backward">
            Old Entries
        </a>
    </div>
    <div class="col-md-6">
        <a href="#" class="button button-sm button-pasific pull-right hover-skew-forward">New Entries</a>
    </div>
</div>


@endsection

