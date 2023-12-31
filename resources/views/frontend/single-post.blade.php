@extends('frontend.layouts.app')

@section('page-content')
    <div class="blog-three-mini">
        <h2 class="color-dark"><a href="#">{{ $post->title }}</a></h2>
        <div class="blog-three-attrib">
            <div><i class="fa fa-calendar"></i>{{ $post->published_at->diffForHumans() }}</div> |
            <div><i class="fa fa-pencil"></i><a href="#">{{ $post->author->name }}</a></div> |
            <div><i class="fa fa-comment-o"></i><a href="#">90 Comments</a></div> |
            <div><a href="#"><i class="fa fa-thumbs-o-up"></i></a>150 Likes</div> |
            <div>
                Share:  <a href="https://www.facebook.com"><i class="fa fa-facebook-official"></i></a>
                <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                <a href="https://in.linkedin.com"><i class="fa fa-linkedin"></i></a>
                <a href="https://in.pinterest.com"><i class="fa fa-pinterest"></i></a>
            </div>
        </div>

        <img src="{{ asset("frontend/assets/img/$post->image")}}" alt="Blog Image" class="img-responsive">
        <p class="lead mt25">
            {{ $post->excerpt }}
        </p>
        <blockquote>
            Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovations.
            <footer><i class="fa fa-quote-right mt25"></i> Steve Job</footer>
        </blockquote>
        <p>
            {{ $post->body }}
        </p>
        <div class="blog-post-read-tag mt50">
            <i class="fa fa-tags"></i> Tags:
            @foreach ($post->tags as $tag)
                <a href="#">{{ $tag->name }}</a>,
            @endforeach
        </div>

    </div>

    <div class="blog-post-author mb50 pt30 bt-solid-1">
        <img src="{{ asset('frontend/assets/img/other/photo-1.jpg') }}" class="img-circle" alt="image">
        <span class="blog-post-author-name">John Boo</span> <a href="https://twitter.com/booisme"><i class="fa fa-twitter"></i></a>
        <p>
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
        </p>
    </div>

    <div class="blog-post-comment-container">
        <h5><i class="fa fa-comments-o mb25"></i> 20 Comments</h5>

        <div class="blog-post-comment">
            <img src="{{ asset('frontend/assets/img/other/photo-2.jpg') }}" class="img-circle" alt="image">
            <span class="blog-post-comment-name">John Boo</span> Jan. 20 2016, 10:00 PM
            <a href="#" class="pull-right text-gray"><i class="fa fa-comment"></i> Reply</a>
            <p>
                Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
            </p>
        </div>

        <div class="blog-post-comment">
            <img src="{{ asset('frontend/assets/img/other/photo-4.jpg') }}" class="img-circle" alt="image">
            <span class="blog-post-comment-name">John Boo</span> Jan. 20 2016, 10:00 PM
            <a href="#" class="pull-right text-gray"><i class="fa fa-comment"></i> Reply</a>
            <p>
                Adipisci velit sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.
            </p>

            <div class="blog-post-comment-reply">
                <img src="{{ asset('frontend/assets/img/other/photo-2.jpg') }}" class="img-circle" alt="image">
                <span class="blog-post-comment-name">John Boo</span> Jan. 20 2016, 10:00 PM
                <a href="#" class="pull-right text-gray"><i class="fa fa-comment"></i> Reply</a>
                <p>
                    Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
                </p>
            </div>

        </div>

        <div class="blog-post-comment">
            <img src="{{ asset('frontend/assets/img/other/photo-1.jpg') }}" class="img-circle" alt="image">
            <span class="blog-post-comment-name">John Boo</span> Jan. 20 2016, 10:00 PM
            <a href="#" class="pull-right text-gray"><i class="fa fa-comment"></i> Reply</a>
            <p>
                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur adipisci velit.
            </p>
        </div>

        <button class="button button-default button-sm center-block button-block mt25 mb25">Load More Comments</button>


    </div>

    <div class="blog-post-leave-comment">
        <h5><i class="fa fa-comment mt25 mb25"></i> Leave Comment</h5>

        <form>
            <input type="text" name="name" class="blog-leave-comment-input" placeholder="name" required>
            <input type="email" name="name" class="blog-leave-comment-input" placeholder="email"  required>
            <input type="url" name="name" class="blog-leave-comment-input" placeholder="website">
            <textarea name="message" class="blog-leave-comment-textarea"></textarea>
            <button class="button button-pasific button-sm center-block mb25">Leave Comment</button>
        </form>

    </div>

</section>

@endsection
