@props(["active"=>false])
@php
$classes="block text-left px-3 text-sm leading-6 hover:bg-blue-400 focus:bg-blue-400";
if($active) $classes.=" bg-blue-500 text-white";
@endphp
<a {{$attributes(['class'=>$classes])}}>
    {{$slot}}</a>
