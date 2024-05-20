<footer>
    <div id="footer-top">
        <div class="container">
            <ul>
            @foreach ($links_top['links'] as $link )
                <li>
                    <img src="{{ $link['images']}}" alt="{{ $link['title']}}">
                    <p> {{ $link ['title']}}</p>
                </li>
            @endforeach 
            </ul>
            
        </div>
    </div>
    <div class="footer-middle">

    </div>
    <div class="footer-bottom">

    </div>
</footer>