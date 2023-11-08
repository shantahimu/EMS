@extends('admin.master')

@section('content')

<form action="{{route('servicecategory.store')}}" method='post'>
    @csrf 
    <div class="form-row">
      <div class="form-group ">
        <label for="inputEmail4">Service Category ID </label>
        <input required  name="service_category_id" type="int" class="form-control" id="inputEmail4" placeholder="id_list">
      </div>
      <div class="form-group ">
        <label for="inputPassword4">Service Category Name</label>
        <input required name="service_category_name" type="string" class="form-control" id="inputPassword4" placeholder="">
        <select class="custom-select" required>
          <option value="">Open this select menu</option>
          <option>1. Event Planning and Coordination </option>
          <option>2. Venue Selection and Management</option>
          <option>3. Catering Services</option>
          <option>4. Decor and Design</option>
          <option>5. Entertainment</option>
          <option>6. Photography and Videography </option>
          <option>7. Guest Management</option>
          <option>8. Transportation Services </option>
          <option>9. Event Security and Safety</option>
          <option>10. Themed Events</option>
          <option>11. Grooming Service </option>
          </select>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Description</label>
      <input name="description" type="text" class="form-control" id="inputAddress" placeholder="">
    </div>
    <div class="custom-file">
        <input name="image" type="file" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
      </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection