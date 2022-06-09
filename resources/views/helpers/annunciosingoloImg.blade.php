@php
        if (empty($imgFile)) {
            $imgFile = 'default.jpg';
        }
     
@endphp
<img class="imgaffitto"src="{{ asset('images/products/' . $imgFile) }}">