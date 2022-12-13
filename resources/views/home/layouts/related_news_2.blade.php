<div class="related-news">
    <div class="related-news-heading">
        <h2>Related News</h2>
    </div>

    <div class="related-post-carousel owl-carousel owl-theme">

        @foreach ($related_posts_catagory as $catagory)
            @foreach ($catagory->subCatagories as $sub_catagory)
                @foreach ($sub_catagory->post as $post)
                    <div class="item">
                        <div class="photo">
                            <img src="{{ $post->photo->photo_url }}" alt="">
                        </div>
                        <div class="category">
                            <span class="badge bg-success">{{ $post->subCatagory->sub_catagory_name  }}</span>
                        </div>
                        @php
                           $posts = $post;    
                       @endphp
                      
                        <h3><a href="{{ url('single',$posts)}}">{{ $post->post_title }}</a></h3>
                        <div class="date-user">
                            <div class="user">
                                <a href="">{{ $post->author->name }}</a>
                            </div>
                            <div class="date">
                                <a href="">
                                    {{
                                        \Carbon\Carbon::parse($post->created_at)->toFormattedDateString()
                                    }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        @endforeach

    </div>
</div>