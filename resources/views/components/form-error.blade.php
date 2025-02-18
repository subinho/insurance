@props(['name'])

@error($name)
  <p {{ $attributes->merge(['class' => 'alert alert-danger'])}}>{{ $message }}</p>
@enderror