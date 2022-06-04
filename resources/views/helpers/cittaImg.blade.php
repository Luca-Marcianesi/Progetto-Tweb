@php
        if (empty($imgFile)) {
            $imgFile = 'default.jpg';
        }
     
@endphp
<img class="foto"src="{{ asset('images/products/' . $imgFile) }}">