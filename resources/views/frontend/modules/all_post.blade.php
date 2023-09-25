@extends('frontend.layout.master')
@section('Page_title', $title)
@section('banner')
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>{{ $sub_title }}</h4>
                            <h2>{{ $title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('content')
@foreach($posts as $post)
    <div class="col-lg-12">
        <div class="blog-post">
            <div class="blog-thumb">
                <img src="{{ url('image/post/Original/'.$post->photo) }}" alt="{{ $post->title }}">
            </div>
            <div class="down-content">
                <span>{{ $post->category?->name }} <sub class="text-warning">{{ $post->sub_category?->name }}</sub></span>
                <a href="{{ route('Front.single', $post->slug) }}">
                    <h4>{{ $post->title }}</h4>
                </a>
                <ul class="post-info">
                    <li><a href="#">{{ $post->user?->name }}</a></li>
                    <li><a href="#">{{ $post->created_at->format('M d, Y') }}</a></li>
                    <li><a href="#">{{ $post->comment?->count() }} Comments</a></li>
                </ul>
                <div>
                    <p>{!!  Str::limit($post->discription, 500) !!}
                        <a href="{{ Route('Front.single', $post->slug) }}" class="btn btn-sm btn-warning">Read More</a>
                    </p>
                </div>
                <div class="post-options">
                    <div class="row">
                        <div class="col-6">
                            <ul class="post-tags">
                                <li><i class="fa fa-tags"></i></li>
                                @foreach ($post->tag as $tag)
                                <li><a href="{{ route('Front.tag', $tag->slug) }}">{{ $tag->name }}</a>,</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="post-share">
                                <li><i class="fa fa-share-alt"></i></li>
                                <li><a href="#">Facebook</a>,</li>
                                <li><a href="#"> Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @if(count($posts) < 1)
        <h1 class="text-danger">No Post Found</h1>
    @endif

    <div class="col-md-12">
        {{ $posts->links() }}
    </div>

@endsection
