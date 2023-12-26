@props(["trigger"])
<div x-data="{show: false}" @click.away="show= false">
<div @click="show=!show">
{{$trigger}}
</div>

    <div x-show="show" class="pt-2 pb-2 rounded-lg w-full absolute mt-2 bg-gray-100 text-sm font-semibold z-50 overflow-auto max-h-52" style="display:none">
        {{$slot}}
    </div>
    
</div>