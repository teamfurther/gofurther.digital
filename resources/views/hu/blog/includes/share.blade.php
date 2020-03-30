<div class="post__share social-sharer">
    <div class="social-icons">
        <a href="http://www.facebook.com/share.php?u={{ localizedRoute('blog.view', ['slug' => $slug]) }}&title={{ str_replace(' ', '+', $title) }}+by+@Further" rel="nofollow" target="_blank"><span class="icon icon--facebook"></span></a>
        <a href="http://twitter.com/intent/tweet?status={{str_replace(' ', '+', $title) }}+by+@Further+{{ localizedRoute('blog.view', ['slug' => $slug]) }}" rel="nofollow" target="_blank"><span class="icon icon--twitter"></span></a>
        <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ localizedRoute('blog.view', ['slug' => $slug]) }}&title={{ str_replace(' ', '+', $title) }}+by+@Further&source={{ localizedRoute('home') }}" rel="nofollow" target="_blank"><span class="icon icon--linkedin"></span></a>
    </div>
</div>


@push('content-scripts')
<script>
    // set position fixed to sharer
    let sharer = document.querySelector('.post__share');
    let post = document.querySelector('.post__content');
    function toggleFixed() {
        let postPos = post.getBoundingClientRect();

        if (postPos.top <= 95) {
            sharer.classList.add('is-fixed');
        } else {
            sharer.classList.remove('is-fixed');
        }
        if (postPos.bottom <= 225) {
            sharer.classList.add('is-absolute');
        } else {
            sharer.classList.remove('is-absolute');
        }
    }
    window.addEventListener('scroll', toggleFixed);
    window.addEventListener('load', toggleFixed);
</script>
@endpush
