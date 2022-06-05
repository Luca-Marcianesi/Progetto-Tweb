@php
        if (empty($imgFile)) {
            $imgFile = 'default.jpg';
        }
     
@endphp
<img class="imgaffittolocatario"src="{{ asset('images/products/' . $imgFile) }}">