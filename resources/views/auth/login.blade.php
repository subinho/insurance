<x-layout>
  <div class="form-control-md">
    <div class="jumbotron text-center mt-5">
      <h2 class="display-2">Sign in</h2>
    </div>
    <form class="p-3 mt-5 col-md-7 mx-auto" method="POST" action="/login">
      @csrf

<div class="card p-5 mb-5">

  <x-form-field class="mb-4">
    <x-form-label for="email">E-mail</x-form-label>
    <x-form-input type="email" name="email" id="email" placeholder="example@mail.com" :value="old('email')" required />
  </x-form-field>

    <x-form-field class="mb-4">
      <x-form-label for="password">Password</x-form-label>
      <x-form-input type="password" name="password" id="password" placeholder="Password" maxlength="20" pattern="[a-zA-Z0-9]{,20}" required />
    </x-form-field>

    <div class="mt-2">
      @if($errors->any())
        <ul>
          @foreach($errors->all() as $error)
          <li class="alert alert-danger">{{$error}}</li>
          @endforeach
        </ul>
      @endif
    </div>
  <div class="d-flex justify-content-between">
    <a href='/' class="btn btn-dark ">Cancel</a>
    <x-form-button class="btn-primary">Log in</x-form-button>
  </div>

</div>


</form>
</div>
</x-layout>