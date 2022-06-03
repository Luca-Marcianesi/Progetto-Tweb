@php
        if (empty($imgFile)) {
            $imgFile = 'default.jpg';
        }
     
@endphp
<img class="annunciimg"src="{{ asset('images/products/' . $imgFile) }}">