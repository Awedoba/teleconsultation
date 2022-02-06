@extends('layout.base')
@section('content')
      <div class="bg-white p-4 mb-5">
          <div class="row">
              <h1>Teleconsultation Form</h1>
          </div>
          <div class="row pt-3 pb-3">
              <div class="col-md-5 col-sm-12 pt-3 pb-3">
                  <div class="row pt-3 pb-3">
                      <div class="col-md-6 col-sm-12">
                          <h5>Encounter Date</h5>
                          <p>{{$teleconsult->encounter_date }}</p>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <h5>Facility OPD no.</h5>
                          <p>{{$teleconsult->facility_opd_no  }}</p>
                          </div>
                  </div>
                  <div class="row pt-3 pb-3">
                      <div class="col-md-6 col-sm-12">
                          <h5>Community</h5>
                          <p>{{$teleconsult->community   }}</p>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <h5>Facility</h5>
                          <p>{{$teleconsult->facility   }}</p>
                      </div>
                  </div>
                  <div class="row pt-3 pb-3">
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
              <div class="col-md-7 col-sm-12 pt-3 pb-3">
                  <div class="row pt-3 pb-3">
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
                  <div class="row pt-3 pb-3">
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
                  <div class="row pt-3 pb-3">
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
                          <h5>Unit (Age)</h5>
                          <p>{{$teleconsult->unit   }}</p>
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
              <div class="col-12 pt-3 pb-3">
                  <h3>Complaint, observation and Diagnosis</h3>
                  <div class="row pt-3 pb-3">
                      <div class="col-md-6 col-sm-12">
                          <h5>Complaint</h5>
                          <p>{{$teleconsult->complaint   }}</p>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <h5>Diagnosis</h5>
                          <p>{{$teleconsult->diagnosis   }}</p>
                      </div>
                  </div>
                  <div class="row pt-3 pb-3">
                      <div class="col-md-6 col-sm-12">
                          <h5>Telemedicine group/ condition</h5>
                          <p>{{$teleconsult->tg_condition   }}</p>
                      </div>
                      <div class="form-check col-md-3 col-sm-12  ">
                          <p >
                              Call conf. to physician:  <span>{{$teleconsult->cc_physician   ?'Yes':'No'}}</span>
                          </p>
                      </div>
                      <div class="col-md-3 col-sm-12">
                          <h5>Physician's Name</h5>
                          <p>{{$teleconsult->physician_name   }}</p>
                      </div>
                      <div class="col-md-3 col-sm-12">
                          <h5>FHR</h5>
                          <p>{{$teleconsult->fhr   }}</p>
                      </div>
                      <div class="col-md-3 col-sm-12">
                          <h5>GCS</h5>
                          <p>{{$teleconsult->gcs   }}</p>
                      </div>
                      <div class="col-md-3 col-sm-12">
                          <h5>APGAR Score</h5>
                          <p>{{$teleconsult->apgar   }}</p>
                      </div>
                  </div>
              </div>
              <div class="col-12 pt-3 pb-3">
                  <h3>Medication/lab done prior to teleconsulation</h3>
                  <div class="row pt-3 pb-3">
                      <div class="col-md-8 pt-3 pb-3">
                          <div class="row pt-3 pb-3">
{{--                              asa--}}
                              <table class="table">
                                  <thead>
                                  <tr>
                                      <th scope="col">Medication / Supplies</th>
                                      <th scope="col">Dosage</th>
                                      <th scope="col">Medication Form</th>
                                      <th scope="col">Amount Dispensed</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @if(isset($teleconsult->priorTeleconsult))
                                      @foreach($teleconsult->priorTeleconsult as $prior)
                                          <tr>
                                              <td>{{$prior->medication }}</td>
                                              <td>{{$prior->dosage }}</td>
                                              <td>{{$prior->medication_form }}</td>
                                              <td>{{$prior->amount_dispensed }}</td>
                                          </tr>
                                      @endforeach
                                  @endif
                                  </tbody>
                              </table>
                          </div>
                      </div>
                      <div class="col-md-4 pt-3 pb-3">
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
                              <div class="col-12">
                                  <div class="row">
                                      <div class="form-check col-md-4 col-sm-12 ">
                                          <p>
                                              Ambulance: <span>{{$teleconsult->ambulance ?'Yes':'No'}}</span>
                                          </p>
                                      </div>
                                      <div class="form-check col-md-6 col-sm-12 ">
                                          <p>
                                              Ambulance Status: <span>{{$teleconsult->ambulance_status }}</span>
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12 col-sm-12">
                                  <h5>Other</h5>
                                  <p>{{$teleconsult->other  }}</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-12 pt-3 pb-3">
                  <h3>Medication/lab ordered during teleconsulation</h3>
                  <div class="row pt-3 pb-3">
                      <div class="col-md-4 col-sm-12 pt-3 pb-3">
                          <table class="table">
                              <thead>
                              <tr>
                                  <th scope="col">Medication / Supplies</th>
                                  <th scope="col">Quantity</th>
                              </tr>
                              </thead>
                              <tbody>
                              @if(isset($teleconsult->duringTeleconsult))
                                  @foreach($teleconsult->duringTeleconsult as $during)
                                      <tr>
                                          <td>{{$during->medication }}</td>
                                          <td>{{$during->quantity }}</td>

                                      </tr>
                                  @endforeach
                              @endif
                              </tbody>
                          </table>
                      </div>
                      <div class="col-md-8 col-sm-12 pt-3 pb-3">
                          <div class="row pt-3 pb-3">
                              <div class="form-check col-md-12 col-sm-12 text-center ">
                                  <p class="form-check" >
                                      Referred to hospital:  <span>{{$teleconsult->referred_to_hospital ?'Yes':'No'}}</span>
                                  </p>
                              </div>
                          </div>
                          <div class="row pt-3 pb-3">
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
              <div class="col-12 pt-2 pb-4">
                  <div class="row">
                      <div class="col-md-5 col-sm-12">
                          <h5 >Outcome</h5>
                          <p >{{ $teleconsult->outcome }}</p>

                      </div>
                      <div class="col-md-6 col-sm-12 pt-3 pb-3" >
                          <div class="row">
                              <div class="col-md-6 col-sm-12 pt-3 pb-3">
                                  <h5 >Purpose</h5>
                                  <p class="text-capitalize">{{ $teleconsult->purpose }}</p>
                              </div>
                              <div class="col-md-6 col-sm-12 pt-3 pb-3">
                                  <h5 >Facility referred to:</h5>
                                  <p class="text-capitalize">{{ $teleconsult->referred_to }}</p>
                              </div>
                              <div class="col-md-6 col-sm-12 pt-3 pb-3">
                                      <h5 >Referral Status</h5>
                                      <p class="text-capitalize">{{ $teleconsult->referral_status }}</p>
                              </div>
                              <div class="col-md-6 col-sm-12 pt-3 pb-3">
                                      <h5 >Type of case</h5>
                                      <p class="text-capitalize">{{ $teleconsult->case }}</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
@endsection
