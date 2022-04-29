@props([
'bg' => 'bg-secondary-100',
'disabled' => false,
'label' => 'label',
'value' => 'value'
])
<div class="relative mt-5 {{$bg}}">

  <input type="text" name="name" id="name" placeholder="" value="{{$value}}" {!! $attributes->merge([
  'class' => !$disabled? 'peer z-20 w-full border p-2 text-base text-gray-500 outline-none focus:border-b-primary-500
  focus:ring-0 focus:border-b-2
  focus:outline-none border-secondary-300 focus:border-secondary-300 bg-transparent' : 'peer z-20 w-full border p-2
  text-base text-gray-500 outline-none focus:border-b-primary-500 focus:ring-0
  focus:outline-none border-secondary-300 focus:border-secondary-300 bg-secondary-200/50' ]) !!}
  {{ $disabled ? 'disabled=disabled' : '' }} />
  <label for="{{$label}}"
    class="absolute left-2 origin-[0] -translate-y-3 transform bg-inherit px-3 text-sm font-semibold text-gray-400 transition-all peer-placeholder-shown:z-10 peer-placeholder-shown:translate-y-2 peer-focus:z-10 peer-focus:-translate-y-3"
    onclick="this.previousElementSibling.focus()">
    {{$label}}</label>
</div>
