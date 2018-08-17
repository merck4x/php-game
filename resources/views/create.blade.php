<h1>ADD NEW Contact</h1>
<a href="{{ route('contacts.index') }}">Back to Home page</a>

@if($errors)
<ul>
   @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
  @endforeach
  </ul>
@endif
<form method="POST" action="{{ route('contacts.store') }}">
    @csrf
    @method('POST')
<p>
    <label>Name *</label>
    <input type="text" name="name" required />
</p>
<p>
    <label>Email *</label>
    <input type="email" name="email" required />
</p>
<p>
    <label>Phone *</label>
    <input type="text" name="phone" required />
</p>
<p>
    <label>Country</label>
    <input type="text" name="country" />
</p>
<p>
    <label>City</label>
    <input type="text" name="city" />
</p>
<p>
    <label>State</label>
    <input type="text" name="state" />
</p>
<p>
    <label>Zip</label>
    <input type="text" name="zip" />
</p>
<input type="submit" name="Save">
</form>