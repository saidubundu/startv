@extends ('layouts.main')
@section('content')
<div class="container"> 
        <div class="row">
        <div class="col-md-8">
                <article class="post-item post-detail">
                @if ($post->image_url)
                    <div class="post-item-image">
        
                            <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
                        
                    </div>
                    @endif

                    <div class="post-item-body">
                        <div class="padding-10">
                            <h1>{{ $post->title }}</h1>

                            <div class="post-meta no-border">
                                <ul class="post-meta-group">
                                    <li><i class="fa fa-user"></i><a href="{{ route('author', $post->author->slug) }}"> {{ $post->author->name }}</a></li>
                                    <li><i class="fa fa-clock-o"></i><time> {{ $post->date }}</time></li>
                                    <li><i class="fa fa-folder"></i><a href="{{ route('category', $post->category->slug) }}"> {{ $post->category->title }}</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                </ul>
                            </div>

                           {!! $post->body_html !!}
                        </div>
                    </div>
                </article>

                <article class="post-author padding-10">
                    <div class="media">
                      <div class="media-left">
                      <?php $author = $post->author; ?>
                        <a href="{{ route('author',$author->slug )}}">
                          <img alt="{{$author->name }}" src="{{$author->gravatar() }}" class="media-object">
                        </a>
                      </div>
                      <div class="media-body">  
                        <h4 class="media-heading"><a href="{{ route('author',$author->slug) }}">{{$author->name }}</a></h4>
                        <div class="post-author-count">
                          <a href="{{ route('author',$author->slug) }}">
                              <i class="fa fa-clone"></i>
                              <?php $postCount =$author->posts()->published()->count() ?>
                              {{ $postCount }} {{ str_plural('post', $postCount) }}
                          </a>
                        </div>
                         {!!$author->bio_html !!}
                      </div>
                    </div>
                </article>

                <article class="post-comments">
                    <h3><i class="fa fa-comments"></i> 5 Comments</h3>

                    <div class="comment-body padding-10">
                        <ul class="comments-list">
                            <li class="comment-item">
                                <div class="comment-heading clearfix">
                                    <div class="comment-author-meta">
                                        <h4>John Doe <small>January 14, 2016</small></h4>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nesciunt nulla est, atque ratione nostrum cumque ducimus maxime, amet enim tempore ipsam. Id ea, veniam ipsam perspiciatis assumenda magnam doloribus!</p>
                                    <p>Quibusdam iusto culpa, necessitatibus, libero sequi quae commodi ea ab non facilis enim vitae inventore laborum hic unde esse debitis. Adipisci nostrum reprehenderit explicabo, non molestias aliquid quibusdam tempore. Vel.</p>
                                </div>
                            </li>

                            <li class="comment-item">
                                <div class="comment-heading clearfix">
                                    <div class="comment-author-meta">
                                        <h4>John Doe <small>January 14, 2016</small></h4>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nesciunt nulla est, atque ratione nostrum cumque ducimus maxime, amet enim tempore ipsam. Id ea, veniam ipsam perspiciatis assumenda magnam doloribus!</p>
                                    <p>Quibusdam iusto culpa, necessitatibus, libero sequi quae commodi ea ab non facilis enim vitae inventore laborum hic unde esse debitis. Adipisci nostrum reprehenderit explicabo, non molestias aliquid quibusdam tempore. Vel.</p>

                                    <ul class="comments-list-children">
                                        <li class="comment-item">
                                            <div class="comment-heading clearfix">
                                                <div class="comment-author-meta">
                                                    <h4>John Doe <small>January 14, 2016</small></h4>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nesciunt nulla est, atque ratione nostrum cumque ducimus maxime, amet enim tempore ipsam. Id ea, veniam ipsam perspiciatis assumenda magnam doloribus!</p>
                                                <p>Quibusdam iusto culpa, necessitatibus, libero sequi quae commodi ea ab non facilis enim vitae inventore laborum hic unde esse debitis. Adipisci nostrum reprehenderit explicabo, non molestias aliquid quibusdam tempore. Vel.</p>
                                            </div>
                                        </li>

                                        <li class="comment-item">
                                            <div class="comment-heading clearfix">
                                                <div class="comment-author-meta">
                                                    <h4>John Doe <small>January 14, 2016</small></h4>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nesciunt nulla est, atque ratione nostrum cumque ducimus maxime, amet enim tempore ipsam. Id ea, veniam ipsam perspiciatis assumenda magnam doloribus!</p>
                                                <p>Quibusdam iusto culpa, necessitatibus, libero sequi quae commodi ea ab non facilis enim vitae inventore laborum hic unde esse debitis. Adipisci nostrum reprehenderit explicabo, non molestias aliquid quibusdam tempore. Vel.</p>

                                                <ul class="comments-list-children">
                                                    <li class="comment-item">
                                                        <div class="comment-heading clearfix">
                                                            <div class="comment-author-meta">
                                                                <h4>John Doe <small>January 14, 2016</small></h4>
                                                            </div>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nesciunt nulla est, atque ratione nostrum cumque ducimus maxime, amet enim tempore ipsam. Id ea, veniam ipsam perspiciatis assumenda magnam doloribus!</p>
                                                            <p>Quibusdam iusto culpa, necessitatibus, libero sequi quae commodi ea ab non facilis enim vitae inventore laborum hic unde esse debitis. Adipisci nostrum reprehenderit explicabo, non molestias aliquid quibusdam tempore. Vel.</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                        
            </div>
            
                @include('layouts.sidebar')
            </div>
    </div>
@endsection

