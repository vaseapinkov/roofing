@props(['content'])

{{-- A random string is appednd to the class name to fake componet scoped styles --}}
@php($hash = Str::random(5))

{{-- Apply the following styles only on "Privacy Policy" and "Terms and Conditions" pages --}}
@if(in_array(URL::current(), [URL::to('privacy-policy'), URL::to('terms-and-conditions')]))
    <style>
        .hash-{{$hash}} p{
            color: black;
        }

        .hash-{{$hash}} ul{
            list-style-image: unset;
        }
    </style>
@endif

<div class="container mx-auto py-[90px] content hash-{{$hash}}">
    {!! $content !!}
</div>
