
@extends('layouts.main')
@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/blog">Blog</a></li>
          </ol>
          <h2>Category : {{ $category }}</h2>
        </div>
    </section><!-- End Breadcrumbs -->

      <!-- ======= Blog Single Section ======= -->
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

          <div class="row">

            <div class="col-lg-8 entries">
            @foreach ($posts as $post)
              <article class="entry entry-single">

                <div class="entry-img">
                  <img src="{{ asset('img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                  <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{ $post->name }}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                     {{ $post->excerpt }}
                  </p>
                  <a href="/posts/{{ $post->slug }}">Read More...</a>
                </div>

                <div class="entry-footer">
                  <i class="bi bi-tags"></i>
                  <ul class="cats">
                    <li><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></li>
                  </ul>
                </div>

              </article><!-- End blog entry -->
            @endforeach
            </div><!-- End blog entries list -->

            <div class="col-lg-4">

              <div class="sidebar">

                <h3 class="sidebar-title">Search</h3>
                <div class="sidebar-item search-form">
                  <form action="">
                    <input type="text">
                    <button type="submit"><i class="bi bi-search"></i></button>
                  </form>
                </div><!-- End sidebar search formn-->

                <h3 class="sidebar-title">Categories</h3>
                <div class="sidebar-item categories">
                  <ul>
                    <li><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}<span>(25)</span></a></li>
                  </ul>
                </div><!-- End sidebar categories-->

                <h3 class="sidebar-title">Recent Posts</h3>
                <div class="sidebar-item recent-posts">
                  <div class="post-item clearfix">
                    <img src="img/blog/blog-recent-1.jpg" alt="">
                    <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>

                  <div class="post-item clearfix">
                    <img src="img/blog/blog-recent-2.jpg" alt="">
                    <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>

                  <div class="post-item clearfix">
                    <img src="img/blog/blog-recent-3.jpg" alt="">
                    <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>

                  <div class="post-item clearfix">
                    <img src="img/blog/blog-recent-4.jpg" alt="">
                    <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>

                  <div class="post-item clearfix">
                    <img src="img/blog/blog-recent-5.jpg" alt="">
                    <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>

                </div><!-- End sidebar recent posts-->

                </div><!-- End sidebar tags-->

              </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

          </div>

        </div>
      </section><!-- End Blog Single Section -->
@endsection

