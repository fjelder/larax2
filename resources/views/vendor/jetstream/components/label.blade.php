@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-secondary-700 dark:text-secondary-500']) }}>
  {{ $value ?? $slot }}
</label>
