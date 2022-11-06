@props(['name', 'type' => 'text', 'placeholder' => ''])
<x-form.field1>
    <div class="control-group">
        <x-form.label name="{{$name}}"/>
        <input
        name = "{{$name}}"
        type="{{$type}}"
        class="form-control bg-light border-1 p-10"
        id="title"
        placeholder="{{$placeholder}}"
         {{$attributes(['value' => old($name)])}}>

       <x-form.error name="{{$name}}"/>
</x-form.field1>
