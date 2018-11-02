<nav aria-label="Portfolio Navigation">
    <ul class="pagination">
        <li class="page-item {{(empty($previous))?'disabled':''}}">
            <a href="{{(!empty($previous))?url('/portfolio/'.$previous->slug):''}}" class="page-link"> 
                <svg id="i-chevron-left" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M20 30 L8 16 20 2" />
                </svg>
                Previous
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="{{url('/portfolio')}}">Full Portfolio</a></li>
        <li class="page-item {{(empty($next))?'disabled':''}}">
            <a href="{{(!empty($next))?url('/portfolio/'.$next->slug):''}}" class="page-link">
                Next
                <svg id="i-chevron-right" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M12 30 L24 16 12 2" />
                </svg>
            </a>
        </li>
    </ul>
</nav>