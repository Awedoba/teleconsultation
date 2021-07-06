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
                          <p>17/07/2020</p>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <h5>Facility OPD no.</h5>
                          <p>adadadadadadad</p>
                          </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 col-sm-12">
                          <h5>Community</h5>
                          <p>adadadadadadad</p>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <h5>Facility</h5>
                          <p>adadadadadadad</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 col-sm-12">
                          <h5>Patient: First name</h5>
                          <p>adadadadadadad</p>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <h5>Middle name</h5>
                          <p>adadadadadadad</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-7 col-sm-12">
                  <div class="row">
                      <div class="col-md-4 col-sm-12">
                          <h5>TCC Serial no.</h5>
                          <p>adadadadadadad</p>
                      </div>
                      <div class="col-md-4 col-sm-12">
                          <h5>NHIS no.</h5>
                          <p>adadadadadadad</p>
                      </div>
                      <div class="col-md-4 col-sm-12">
                          <h5>National ID</h5>
                          <p>adadadadadadad</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4 col-sm-12">
                          <h5>Sub-district</h5>
                          <p>adadadadadadad</p>
                      </div><div class="col-md-4 col-sm-12">
                          <h5>District</h5>
                          <p>adadadadadadad</p>
                      </div>
                      <div class="col-md-4 col-sm-12">
                          <h5>Region</h5>
                          <p>adadadadadadad</p>
                      </div>
                  </div>
                  <div class="row">
                      {{--            <div class="row">--}}
                      <div class="col-md-6 col-sm-12">
                          <h5>Family Name</h5>
                          <p>adadadadadadad</p>
                      </div>
                      <div class="col-md-2 col-sm-12">
                          <h5>DOB</h5>
                          <p>adadadadadadad</p>
                      </div>
                      <div class="col-md-2 col-sm-12">
                          <h5>Age</h5>
                          <p>adadadadadadad</p>
                      </div>
                      <div class="col-md-2 col-sm-12">
                          <h5>Sex</h5>
                          <p>Male</p>
                      </div>
                      {{--            </div>--}}
                      {{--            <div class="row">--}}
                      <div class="col-md-6 col-sm-6">
                          <h5>Weight</h5>
                          <p>adadadadadadad</p>
                      </div>
                      <div class="col-md-6 col-sm-6">
                          <h5>Temperature</h5>
                          <p>adadadadadadad</p>
                      </div>
                      <div class="col-md-6 col-sm-6">
                          <h5>BP(mmHg)</h5>
                          <p>adadadadadadad</p>
                      </div>
                      <div class="col-md-6 col-sm-6">
                          <h5>Heart rate</h5>
                          <p>adadadadadadad</p>
                      </div>
                      <div class="col-md-6 col-sm-6">
                          <h5>Resp. Rate</h5>
                          <p>adadadadadadad</p>
                      </div>
                      {{--            </div>--}}
                  </div>
              </div>
              <div class="col-12 pt-4">
                  <h3>Complaint, observation and Diagnosis</h3>
                  <div class="row">
                      <div class="col-md-6 col-sm-12">
                          <h5>Complaint</h5>
                          <p>adadadadadadad</p>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <h5>Diagnosis</h5>
                          <p>adadadadadadad</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 col-sm-12">
                          <h5>Telemedicine group/ condition</h5>
                          <p>adadadadadadad</p>
                      </div>
                      <div class="form-check col-md-3 col-sm-12 text-center ">
                          <h5 class="form-check- h5" for="defaultCheck1">
                              call conf. to physician
                          </h5>
                          <p>yes</p>
                      </div>
                      <div class="col-md-3 col-sm-12">
                          <h5>Physician's Name</h5>
                          <p>adadadadadadad</p>
                      </div>
                  </div>
              </div>
              <div class="col-12 pt-4">
                  <h3>Medication/lab done prior to teleconsulation</h3>
                  <div class="row">
                      <div class="col-md-8">
                          <div class="row">
                              <div class="col-md-3 col-sm-12">
                                  <h5 for="medication">Medication / Supplies</h5>
                                  <p>adadadadadadad</p>
                                  <p>adadadadadadad</p>
                                  <p>adadadadadadad</p>
                               </div>
                              <div class="col-md-3 col-sm-12">
                                  <h5 >Dosage</h5> <br>
                                  <p>adadadadadadad</p>
                                  <p>adadadadadadad</p>
                                  <p>adadadadadadad</p>
                             </div>
                              <div class="col-md-3 col-sm-12">
                                  <h5 for="med_form">Medication Form</h5>
                                  <p>adadadadadadad</p>
                                  <p>adadadadadadad</p>
                                  <p>adadadadadadad</p>
                                </div>
                              <div class="col-md-3 col-sm-12">
                                  <h5 for="amount_dispensed">Amount Dispensed</h5>
                                  <p>adadadadadadad</p>
                                  <p>adadadadadadad</p>
                                  <p>adadadadadadad</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-check col-md-12 col-sm-12 text-center ">
                              <h5 class="form-check- h5" for="defaultCheck1">
                                  Patient Referred to hospital?
                              </h5>
                              <p>adadadadadadad</p>
                          </div>
                          <div class="form-check col-md-12 col-sm-12 text-center ">
                              <p class="form-check- h5" for="defaultCheck1">
                                  Referral priority: Emergency:  <span>Yes</span>
                              </p>
                          </div>
                          <div class="row">
                              <h5 class="pt-2 pb-2">Emergency Transportation</h5>
                              <div class="form-check col-md-12 col-sm-12 ">
                                 <p>
                                      Ambulance: <span>Yes</span>
                                  </p>
                              </div>
                              <div class="col-md-12 col-sm-12">
                                  <h5>Other</h5>
                                  <p>adadadadadadad</p>
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
                                  <p>adadadadadadad</p>
                                  <p>adadadadadadad</p>
                                  <p>adadadadadadad</p>
                            </div>
                              <div class="col-md-6 col-sm-12">
                                  <h5 >Quantity</h5> <br>
                                  <p>adadadadadadad</p>
                                  <p>adadadadadadad</p>
                                  <p>adadadadadadad</p>
                             </div>
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-12">
                          <div class="row">
                              <div class="form-check col-md-12 col-sm-12 text-center ">
                                  <p class="form-check" >
                                      Referral priority: Emergency <span>Yes</span>
                                  </p>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-4 col-sm-12">
                                  <h5>Name of Caller</h5>
                                  <p>adadadadadadad</p>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                  <h5>Contact no. of caller</h5>
                                  <p>adadadadadadad</p>
                             </div>
                              <div class="col-md-4 col-sm-12">
                                  <h5>Name of TCC Staff</h5>
                                  <p>adadadadadadad</p>
                             </div>
                          </div>
                      </div>
                  </div>
              </div>
              <button type="submit" class="btn btn-primary ml-3">Save</button>
          </div>

      </div>
@endsection
