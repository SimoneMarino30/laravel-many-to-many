@extends('layouts.app')

@section('title', 'Create a new Project to show:')

@section('content')
  <h1 class="my-3">Insert details :</h1>
<form 
action="{{ route('types.store') }}" 
enctype="multipart/form-data" 
method="POST" class="row gy-3">

@csrf

{{-- LABEL --}}
  <div class="my-3">
    <label for="marca" class="form-label badge text-bg-primary fs-6">TYPE</label>
    <input type="text" id="type_id" name="type_id" value="">
    @error('type_id')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  {{-- SELECT COLOR --}}
  
  <label for="type_id" class="form-label">Color</label>
  <input type="color" >
  
  @error('type_id')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
<div class="col-12 d-flex">
  <button type="submit" class="btn btn-outline-success ms-auto">Save</button>
</div>



</form>
@endsection