<x-layout>
  <div class="form-control-md">
    <div class="jumbotron text-center mt-5">
      <h2 class="display-2">Register new user</h2>
    </div>
    <form class="p-3 mt-5 col-md-7 mx-auto" method="POST" action="/register">
      @csrf

<div class="card p-5 mb-5">

  <div class="jumbotron mb-5">
    <h2 class="display-6">Account information</h2>
    <p class="lead">Fill out your desired login information</p>
    <hr>
  </div>
  <x-form-field class="mb-4">
    <x-form-label for="email">E-mail</x-form-label>
    <x-form-input type="email" name="email" id="email" placeholder="example@mail.com" required />
  </x-form-field>

  <div class="row mb-4">
    <x-form-field class="col-md-6">
      <x-form-label for="first_name">First name</x-form-label>
      <x-form-input type="text" name="first_name" id="first_name" placeholder="John" minlength="3" maxlength="15" pattern="[a-zA-Z0-9]{3,15}" required />
    </x-form-field>

    <x-form-field class="col-md-6">
      <x-form-label for="last_name">Last name</x-form-label>
      <x-form-input type="text" name="last_name" id="last_name" placeholder="Smith" minlength="3" maxlength="15" pattern="[a-zA-Z0-9]{3,15}" required />
    </x-form-field>
  </div>

    <x-form-field class="mb-4">
      <x-form-label for="password">Password</x-form-label>
      <x-form-input type="password" name="password" id="password" placeholder="Password" minlength="6" maxlength="20" pattern="[a-zA-Z0-9]{6,20}" required />
      <small class="form-text text-muted">Your password must be 6-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
    </x-form-field>

        <x-form-field class="mb-4">
      <x-form-label for="password_confirmation">Confirm password</x-form-label>
      <x-form-input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password" minlength="6" maxlength="20" pattern="[a-zA-Z0-9]{6,20}" required />
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
    <x-form-button class="btn-primary">Register</x-form-button>
  </div>

</div>


</form>
</div>
</x-layout>