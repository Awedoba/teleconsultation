@extends('layout.base')
@section('content')
      <div class="bg-white p-4 mb-5">
          <div class="row">
              <h1>COVID Teleconsultation Form</h1>
          </div>
          <div class="row pt-3 pb-3">
              <div class="col-md-5 col-sm-12 pt-3 pb-3">
                  <div class="row pt-3 pb-3">
                      <div class="col-md-6 col-sm-12">
                          <h5>Encounter Date</h5>
                          <p>{{$covid->encounter_date }}</p>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <h5>Fullname</h5>
                          <p>{{$covid->name }}</p>
                          </div>
                  </div>
                  <div class="row pt-3 pb-3">
                      <div class="col-md-6 col-sm-12">
                          <h5>Location</h5>
                          <p>{{$covid->location   }}</p>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <h5>Contact</h5>
                          <p>{{$covid->contact_of_caller  }}</p>
                      </div>
                  </div>
                  <div class="row pt-3 pb-3">
                      <div class="col-md-6 col-sm-12">
                          <h5>Complaints</h5>
                          <p>{{$covid->complaints }}</p>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <h5>Assistance Offered</h5>
                          <p>{{$covid->assistance_offered }}</p>
                      </div>
                  </div>
                </div>
                    <div class="col-md-2 col-sm-12">
                          <h5>Sex</h5>
                          <p>{{$covid->sex }}</p>
                      </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
@endsection