<h1>EDIT Contact</h1>
<a href="{{ route('contacts.index') }}">Back to Home page</a>
@if($errors)
<ul>
   @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
  @endforeach
  </ul>
@endif
<form method="POST" action="{{ route('contacts.update', $contact->id) }}">
    @csrf
    @method('PUT')
<p>
    <label>Name *</label>
    <input type="text" name="name" value="{{ $contact->name }}" required />
</p>
<p>
    <label>Email *</label>
    <input type="email" name="email" value="{{ $contact->email }}" required />
</p>
<p>
    <label>Phone *</label>
    <input type="text" name="phone" value="{{ $contact->phone }}" required />
</p>
<p>
    <label>Country</label>
    <input type="text" name="country" value="{{ $contact->country }}" />
</p>
<p>
    <label>City</label>
    <input type="text" name="city" value="{{ $contact->city }}"/>
</p>
<p>
    <label>State</label>
    <input type="text" name="state" value="{{ $contact->state }}"/>
</p>
<p>
    <label>Zip</label>
    <input type="text" name="zip" value="{{ $contact->zip }}"/>
</p>
<input type="submit" name="Save">
</form>