@props(['name'])
<x-form.field1>
    <x-form.label name="{{$name}}"/>
    <textarea class="form-control bg-light border-0 py-3 px-4" rows="5" 
    name='{{$name}}' 
    id="body" 
    placeholder="body" 
    required
    {{$attributes}}
     > {{ $slot ?? old($name) }} </textarea>

    <x-form.error name="{{$name}}"/>
</x-form.field1>