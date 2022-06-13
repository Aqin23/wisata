@extends('admin/layout.template')
@section('main')
<form class="needs-validation" novalidate="">
    <div class="card-header">
      <h4>JavaScript Validation (Horizontal Form)</h4>
    </div>
    <div class="card-body">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Your Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" required="">
          <div class="invalid-feedback">
            What's your name?
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
          <input type="email" class="form-control" required="">
          <div class="invalid-feedback">
            Oh no! Email is invalid.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Subject</label>
        <div class="col-sm-9">
          <input type="email" class="form-control">
          <div class="valid-feedback">
            Good job!
          </div>
        </div>
      </div>
      <div class="form-group mb-0 row">
        <label class="col-sm-3 col-form-label">Message</label>
        <div class="col-sm-9">
          <textarea class="form-control" required=""></textarea>
          <div class="invalid-feedback">
            What do you wanna say?
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer text-right">
      <button class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection
