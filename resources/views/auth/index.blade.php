<x-layout>
    <div class="jumbotron text-center mt-5">
      <h2 class="display-4">Account information</h2>
    </div>
  @if(!$insurances->isEmpty())
    @foreach($insurances as $insurance)
      <div class="card p-5 mb-5 mt-5 col-md-10 mx-auto">

        <div class="jumbotron mt-2">
          <h2 class="display-6">{{$insurance->policy_type}} insurance</h2>
          <hr>
        </div>

        {{-- Row 1 --}}
        <div class="row mb-4">
          <x-form-field class="col-md-6">
            <x-form-label for="first_name">First Name</x-form-label>
            <x-form-input type="text" name="first_name" class="bg-readonly" id="first_name" pattern="[a-zA-Z]{3,50}" :value="$insurance->first_name" readonly/>
          </x-form-field>

          <x-form-field class="col-md-6">
            <x-form-label for="last_name">Last name</x-form-label>
            <x-form-input type="text" name="last_name" class="bg-readonly" id="last_name" minlength="3" maxlength="50" pattern="[a-zA-Z]{3,50}" :value="$insurance->last_name" readonly/>
          </x-form-field>
        </div>

        {{-- Row 2 --}}
        <div class="row mb-4">
          <x-form-field class="col-md-6">
            <x-form-label for="email">E-mail</x-form-label>
            <x-form-input type="email" name="email" class="bg-readonly" id="email" :value="$insurance->email" readonly/>
          </x-form-field>
          <x-form-field class="col-md-6">
            <x-form-label for="phone_number">Phone number</x-form-label>
            <x-form-input type="text" name="phone_number" class="bg-readonly" id="phone_number" pattern="[0-9]{9}" :value="$insurance->phone_number" readonly/>
          </x-form-field>
        </div>

        {{-- Row 3 --}}
        <div class="row mb-4">
          <x-form-field class="col-md-6">
          <x-form-label for="address">Address</x-form-label>
          <x-form-input type="text" name="address" class="bg-readonly" id="address" minlength="3" pattern="[a-zA-Z0-9\s]{3,91}" :value="$insurance->address" readonly />
          </x-form-field>

          <x-form-field class="col-md-4">
            <x-form-label for="city">City</x-form-label>
            <x-form-input type="text" name="city" class="bg-readonly" id="city" minlength="3" pattern="[a-zA-Z]{3,33}" :value="$insurance->city" readonly />
          </x-form-field>

          <x-form-field class="col-md-2">
            <x-form-label for="zip">Zip</x-form-label>
            <x-form-input type="text" name="zip" class="bg-readonly" id="zip" minlength="5" maxlength="5" pattern="[0-9]{5}" :value="$insurance->zip" readonly />
          </x-form-field>
        </div>

        <div class="row mb-4">
          <x-form-field class="col-md-6">
            <x-form-label for="identification_number">Identification number</x-form-label>
            <x-form-input type="text" name="identification_number" class="bg-readonly" id="identification_number" minlength="10" maxlength="10" pattern="[0-9]{10}" :value="$insurance->identification_number" readonly />
          </x-form-field>

          <x-form-field class="col-md-6">
            <x-form-label for="has_spouse">Married</x-form-label>
            <x-form-input type="text" name="identification_number" class="bg-readonly" id="identification_number" minlength="10" maxlength="10" pattern="[0-9]{10}" :value="$insurance->has_spouse == 0 ? 'No' : 'Yes'" readonly />
          </x-form-field>
        </div>
        <div class="d-flex justify-content-between">
          <form method="POST" action="/account/{{ $insurance->id }}">
            @csrf
            @method('DELETE')

            <x-form-button class="btn-danger">Delete</x-form-button>
          </form>
          <a href="/account/{{$insurance->id}}/edit" class="btn btn-primary">Edit</a>
        </div>

      </div>

    @endforeach
  @else
  <div class="text-center mt-5">
    <a href="/client/create" class="btn btn-primary text-center">New insurance</a>
  </div>
  @endif
</x-layout>