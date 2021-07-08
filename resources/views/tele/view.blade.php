@extends('layout.base')
@section('content')
      <div class="bg-white p-4">
          <div class="row">
              <h1>Teleconsultation Form</h1>
          </div>
          <div class="row">
              <div class="col-md-5 col-sm-12">
                  <div class="row">
                      <div class="col-md-6 col-sm-12">
                          <h5>Encounter Date</h5>
                          <p>{{$teleconsult->encounter_date }}</p>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <h5>Facility OPD no.</h5>
                          <p>{{$teleconsult->facility_opd_no  }}</p>
                          </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 col-sm-12">
                          <h5>Community</h5>
                          <p>{{$teleconsult->community   }}</p>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <h5>Facility</h5>
                          <p>{{$teleconsult->facility   }}</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 col-sm-12">
                          <h5>Patient: First name</h5>
                          <p>{{$teleconsult->patient_first_name   }}</p>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <h5>Middle name</h5>
                          <p>{{$teleconsult->patient_middle_name   }}</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-7 col-sm-12">
                  <div class="row">
                      <div class="col-md-4 col-sm-12">
                          <h5>TCC Serial no.</h5>
                          <p>{{$teleconsult->tcc_serial_no   }}</p>
                      </div>
                      <div class="col-md-4 col-sm-12">
                          <h5>NHIS no.</h5>
                          <p>{{$teleconsult->nhis_no   }}</p>
                      </div>
                      <div class="col-md-4 col-sm-12">
                          <h5>National ID</h5>
                          <p>{{$teleconsult->national_id   }}</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4 col-sm-12">
                          <h5>Sub-district</h5>
                          <p>{{$teleconsult->sub_district   }}</p>
                      </div><div class="col-md-4 col-sm-12">
                          <h5>District</h5>
                          <p>{{$teleconsult->district   }}</p>
                      </div>
                      <div class="col-md-4 col-sm-12">
                          <h5>Region</h5>
                          <p>{{$teleconsult->region   }}</p>
                      </div>
                  </div>
                  <div class="row">
                      {{--            <div class="row">--}}
                      <div class="col-md-6 col-sm-12">
                          <h5>Family Name</h5>
                          <p>{{$teleconsult->family_name    }}</p>
                      </div>
                      <div class="col-md-2 col-sm-12">
                          <h5>DOB</h5>
                          <p>{{$teleconsult->date_of_birth   }}</p>
                      </div>
                      <div class="col-md-2 col-sm-12">
                          <h5>Age</h5>
                          <p>{{$teleconsult->age   }}</p>
                      </div>
                      <div class="col-md-2 col-sm-12">
                          <h5>Sex</h5>
                          <p>{{$teleconsult->sex }}</p>
                      </div>
                      {{--            </div>--}}
                      {{--            <div class="row">--}}
                      <div class="col-md-6 col-sm-6">
                          <h5>Weight</h5>
                          <p>{{$teleconsult->weight   }}</p>
                      </div>
                      <div class="col-md-6 col-sm-6">
                          <h5>Temperature</h5>
                          <p>{{$teleconsult->temperature   }}</p>
                      </div>
                      <div class="col-md-6 col-sm-6">
                          <h5>BP(mmHg)</h5>
                          <p>{{$teleconsult-> blood_pressure  }}</p>
                      </div>
                      <div class="col-md-6 col-sm-6">
                          <h5>Heart rate</h5>
                          <p>{{$teleconsult->heart_rate   }}</p>
                      </div>
                      <div class="col-md-6 col-sm-6">
                          <h5>Resp. Rate</h5>
                          <p>{{$teleconsult->respiratory_rate   }}</p>
                      </div>
                      {{--            </div>--}}
                  </div>
              </div>
              <div class="col-12 pt-4">
                  <h3>Complaint, observation and Diagnosis</h3>
                  <div class="row">
                      <div class="col-md-6 col-sm-12">
                          <h5>Complaint</h5>
                          <p>{{$teleconsult->complaint   }}</p>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <h5>Diagnosis</h5>
                          <p>{{$teleconsult->diagnosis   }}</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 col-sm-12">
                          <h5>Telemedicine group/ condition</h5>
                          <p>{{$teleconsult->tg_condition   }}</p>
                      </div>
                      <div class="form-check col-md-3 col-sm-12 text-center ">
                          <p class="form-check" >
                              call conf. to physician:  <span>{{$teleconsult->cc_physician   ?'Yes':'No'}}</span>
                          </p>
                      </div>
                      <div class="col-md-3 col-sm-12">
                          <h5>Physician's Name</h5>
                          <p>{{$teleconsult->physician_name   }}</p>
                      </div>
                  </div>
              </div>
              <div class="col-12 pt-4">
                  <h3>Medication/lab done prior to teleconsulation</h3>
                  <div class="row">
                      <div class="col-md-8">
                          <div class="row">
                              <div class="col-md-3 col-sm-12">
                                  <h5 >Medication / Supplies</h5>
                                  @foreach($teleconsult->proirTeleconsult as $prior)
                                      <p>{{$prior->medication}}</p>
                                  @endforeach

                               </div>
                              <div class="col-md-3 col-sm-12">
                                  <h5 >Dosage</h5> <br>
                                  @foreach($teleconsult->proirTeleconsult as $prior)
                                      <p>{{$prior->dosage}}</p>
                                  @endforeach
                             </div>
                              <div class="col-md-3 col-sm-12">
                                  <h5 >Medication Form</h5>
                                  @foreach($teleconsult->proirTeleconsult as $prior)
                                      <p>{{$prior->medication_form}}</p>
                                  @endforeach
                                </div>
                              <div class="col-md-3 col-sm-12">
                                  <h5 >Amount Dispensed</h5>
                                  @foreach($teleconsult->proirTeleconsult as $prior)
                                      <p>{{$prior->amount_dispensed}}</p>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-check col-md-12 col-sm-12  ">
                              <p class="form-check" >
                                  Referred to hospital:  <span>{{$teleconsult->prior_referred_to_hospital  ?'Yes':'No'}}</span>
                              </p>
                          </div>
                          <div class="form-check col-md-12 col-sm-12  ">
                              <p class="form-check- " for="defaultCheck1">
                                  Referral priority: Emergency:  <span>{{$teleconsult->referral_priority ?'Yes':'No'}}</span>
                              </p>
                          </div>
                          <div class="row">
                              <h5 class="pt-2 pb-2">Emergency Transportation</h5>
                              <div class="form-check col-md-12 col-sm-12 ">
                                 <p>
                                      Ambulance: <span>{{$teleconsult->ambulance ?'Yes':'No'}}</span>
                                  </p>
                              </div>
                              <div class="col-md-12 col-sm-12">
                                  <h5>Other</h5>
                                  <p>{{$teleconsult->other  }}</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-12 pt-4">
                  <h3>Medication/lab ordered during teleconsulation</h3>
                  <div class="row">
                      <div class="col-md-4 col-sm-12 ">
                          <div class="row">
                              <div class="col-md-6 col-sm-12">
                                  <h5 class="text-wrap" >Medication / Supplies</h5>
                                  @foreach($teleconsult->duringTeleconsult as $during)
                                      <p>{{$during->medication}}</p>
                                  @endforeach
                            </div>
                              <div class="col-md-6 col-sm-12">
                                  <h5 >Quantity</h5> <br>
                                  @foreach($teleconsult->duringTeleconsult as $during)
                                      <p>{{$during->quantity}}</p>
                                  @endforeach
                             </div>
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-12">
                          <div class="row">
                              <div class="form-check col-md-12 col-sm-12 text-center ">
                                  <p class="form-check" >
                                      Referred to hospital:  <span>{{$teleconsult->referred_to_hospital ?'Yes':'No'}}</span>
                                  </p>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-4 col-sm-12">
                                  <h5>Name of Caller</h5>
                                  <p>{{$teleconsult->name_of_caller   }}</p>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                  <h5>Contact no. of caller</h5>
                                  <p>{{$teleconsult->contact_of_caller }}</p>
                             </div>
                              <div class="col-md-4 col-sm-12">
                                  <h5>Name of TCC Staff</h5>
                                  <p>{{$teleconsult->user->name  }}</p>
                             </div>
                          </div>
                      </div>
                  </div>
              </div>
{{--              <button type="submit" class="btn btn-primary ml-3">Save</button>--}}
          </div>

      </div>
@endsection
