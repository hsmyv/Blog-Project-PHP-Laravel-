@props(['name', 'type' => 'text']) 
<x-form.field1>
    <div class="control-group">
        <x-form.label name="{{$name}}"/>

        <input 
        name = "{{$name}}" 
        type="{{$type}}" 
        class="form-control bg-light border-0 p-4" 
        id="title" 
        placeholder="Your title" 
         {{$attributes(['value' => old($name)])}}>
        
       <x-form.error name="{{$name}}"/>
</x-form.field1>
