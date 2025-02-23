<x-layout>
  <div class="form-control-md">
    <div class="jumbotron text-center mt-5">
      <h2 class="display-2">Register new insurance</h2>
    </div>
    <form class="p-3 mt-5 col-md-10 mx-auto" method="POST" action="/client">
      @csrf


<div class="card p-5 mb-5">
  <div class="jumbotron mb-5">
    <h2 class="display-4">Personal Information</h2>
    <p class="lead">Provide your personal information</p>
    <hr>
  </div>
  <div class="row mb-4">

    <x-form-field class="col-md-6">
      <x-form-label for="first_name">First Name</x-form-label>
      <x-form-input type="text" name="first_name" class="bg-readonly" id="first_name" placeholder="First name" minlength="3" maxlength="50" pattern="[a-zA-Z]{3,50}" :value="$currentUser->first_name" required readonly/>
    </x-form-field>

    <x-form-field class="col-md-6">
      <x-form-label for="last_name">Last name</x-form-label>
      <x-form-input type="text" name="last_name" class="bg-readonly" id="last_name" placeholder="Last name" minlength="3" maxlength="50" pattern="[a-zA-Z]{3,50}" :value="$currentUser->last_name" required readonly/>
    </x-form-field>
  </div>

  <div class="row mb-4">
    <x-form-field class="col-md-6">
      <x-form-label for="email">E-mail</x-form-label>
      <x-form-input type="email" name="email" class="bg-readonly" id="email" placeholder="example@mail.com" :value="$currentUser->email" required readonly/>
    </x-form-field>
    <x-form-field class="col-md-6">
      <x-form-label for="phone_number">Phone number</x-form-label>
      <x-form-input type="text" name="phone_number" id="phone_number" placeholder="111222333" minlength="9" maxlength="9" pattern="[0-9]{9}" :value="old('phone_number')" required/>
    </x-form-field>
  </div>

  <div class="row mb-4">
    <x-form-field class="col-md-6">
    <x-form-label for="address">Address</x-form-label>
    <x-form-input type="text" name="address" id="address" placeholder="1234 Main St" minlength="3" pattern="[a-zA-Z0-9\s]{3,91}" :value="old('address')" required />
    </x-form-field>

    <x-form-field class="col-md-4">
      <x-form-label for="city">City</x-form-label>
      <x-form-input type="text" name="city" id="city" placeholder="Prague" minlength="3" pattern="[a-zA-Z]{3,33}" :value="old('city')" required />
    </x-form-field>

    <x-form-field class="col-md-2">
      <x-form-label for="zip">Zip</x-form-label>
      <x-form-input type="text" name="zip" id="zip" placeholder="111 11" minlength="5" maxlength="5" pattern="[0-9]{5}" :value="old('zip')" required />
    </x-form-field>
  </div>

    <div class="jumbotron mb-5">
    <h2 class="display-4">Identification</h2>
    <p class="lead">Provide your identification</p>
    <hr>
  </div>

  <x-form-field class="mb-4">
    <x-form-label for="identification_number">Identification number</x-form-label>
    <x-form-input type="text" name="identification_number" id="identification_number" placeholder="ID card number" minlength="10" maxlength="10" pattern="[0-9]{10}" :value="old('identification_number')" required />
  </x-form-field>

  <x-form-field class="mb-4">
    <x-form-label for="has_spouse">Are you married ?</x-form-label>
    <x-form-select id="has_spouse" name="has_spouse" required>
        <option selected disabled value="">Choose...</option>
        <option value="1">Yes</option>
        <option value="0">No</option>
    </x-form-select>
  </x-form-field>

  <x-form-field class="mb-5">
    <x-form-label for="policy_type">Type of insurance</x-form-label>
    <x-form-select id="policy_type" name="policy_type" required>
        <option selected disabled value="">Choose...</option>
        <option value="Life">Life</option>
        <option value="Health">Health</option>
      </x-form-select>
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
    <x-form-button class="btn-primary">Send</x-form-button>
  </div>

</div>
</form>
</div>
</x-layout>