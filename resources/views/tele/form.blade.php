
<div class="row">
    <h1>Teleconsultation Form</h1>
</div>
<div class="row">
    <div class="col-md-5 col-sm-12">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="encounter_date">Encounter Date <span class="text-danger">*</span> </label>
                <input required type="date" class="form-control" id="encounter_date" name="encounter_date" placeholder="" value="{{ isset($teleconsult->encounter_date)? $teleconsult->encounter_date : old('encounter_date') }}" >
                @error('encounter_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="facility_opd_no">Facility OPD no.</label>
                <input type="text" class="form-control" id="facility_opd_no" name="facility_opd_no" placeholder="" value="{{ isset($teleconsult->facility_opd_no)? $teleconsult->facility_opd_no : old('facility_opd_no') }}" >
                @error('facility_opd_no')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="community">Community</label>
                <input type="text" class="form-control" id="community" name="community" placeholder="" value="{{ isset($teleconsult->community )? $teleconsult->community  : old('community ') }}" >
                @error('community ')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="facility">Facility <span class="text-danger">*</span></label>
                <input type="text" required class="form-control" id="facility" name="facility" placeholder="" value="{{ isset($teleconsult->facility )? $teleconsult->facility  : old('facility ') }}" >
                @error('facility ')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="patient_first_name">Patient: First name <span class="text-danger">*</span></label>
                <input type="text" required class="form-control" id="patient_first_name" name="patient_first_name" placeholder="" value="{{ isset($teleconsult->patient_first_name )? $teleconsult->patient_first_name  : old('patient_first_name ') }}" >
                @error('patient_first_name ')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="patient_middle_name">Middle name</label>
                <input type="text" class="form-control" id="patient_middle_name" name="patient_middle_name" placeholder="" value="{{ isset($teleconsult->patient_middle_name )? $teleconsult->patient_middle_name  : old('patient_middle_name ') }}" >
                @error('patient_middle_name ')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-md-7 col-sm-12">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <label for="tcc_serial_no">TCC Serial no.</label>
                <input type="text" class="form-control" id="tcc_serial_no" name="tcc_serial_no" placeholder="" value="{{ isset($teleconsult->tcc_serial_no)? $teleconsult->tcc_serial_no : old('tcc_serial_no') }}" >
                @error('tcc_serial_no')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div><div class="col-md-4 col-sm-12">
                <label for="nhis_no">NHIS no.</label>
                <input type="text" class="form-control" id="nhis_no" name="nhis_no" placeholder="" value="{{ isset($teleconsult->nhis_no )? $teleconsult->nhis_no  : old('nhis_no ') }}" >
                @error('nhis_no ')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12">
                <label for="national_id">National ID</label>
                <input type="text" class="form-control" id="national_id" name="national_id" placeholder="" value="{{ isset($teleconsult->national_id )? $teleconsult->national_id  : old('national_id ') }}" >
                @error('national_id ')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <label for="sub_district">Sub-district</label>
                <input type="text" class="form-control" id="sub_district" name="sub_district" placeholder="" value="{{ isset($teleconsult->sub_district )? $teleconsult->sub_district  : old('sub_district ') }}" >
                @error('sub_district ')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div><div class="col-md-4 col-sm-12">
                <label for="district">District <span class="text-danger">*</span></label>
                <input type="text" required class="form-control" id="district" name="district" placeholder="" value="{{ isset($teleconsult->district)? $teleconsult->district : old('district') }}" >
                @error('district')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12">
                <label for="region">Region</label>
                <input type="text" class="form-control" id="region" name="region" placeholder="" value="{{ isset($teleconsult->region )? $teleconsult->region  : old('region ') }}" >
                @error('region ')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
{{--            <div class="row">--}}
                <div class="col-md-4 col-sm-12">
                    <label for="family_name">Family Name</label>
                    <input type="text" class="form-control" id="family_name" name="family_name" placeholder="" value="{{ isset($teleconsult->family_name )? $teleconsult->family_name  : old('family_name ') }}" >
                    @error('family_name ')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-4 col-sm-12">
                    <label for="date_of_birth">DOB</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="" value="{{ isset($teleconsult->date_of_birth )? $teleconsult->name : old('date_of_birth ') }}" >
                    @error('date_of_birth ')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-2 col-sm-12">
                    <label for="age">Age<span class="text-danger">*</span></label>
                    <input type="number" required min="1" class="form-control" id="age" name="age" placeholder="" value="{{ isset($teleconsult->age )? $teleconsult->age  : old('age ') }}" >
                    @error('age ')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-2 col-sm-12">
                    <label for="sex">Sex<span class="text-danger">*</span></label>
                    <select required class="custom-select d-block w-100" id="sex" name="sex"  >
                        <option value="" selected disabled>Choose...</option>
                        <option value="male" @if (isset($teleconsult->sex)) {{ $teleconsult->sex === 'male'? 'selected' : null}} @endif >Male</option>
                        <option value="female" @if (isset($teleconsult->sex)) {{ $teleconsult->sex === 'female'? 'selected' : null}} @endif >Female</option>
                    </select>
                    @error('sex ')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
{{--            </div>--}}
{{--            <div class="row">--}}
                <div class="col-md-2 col-sm-6">
                    <label for="weight">Weight</label>
                    <input type="number" min="1" class="form-control" id="weight" name="weight" placeholder="" value="{{ isset($teleconsult->weight )? $teleconsult->weight  : old('weight ') }}" >
                    @error('weight ')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-2 col-sm-6">
                    <label for="temperature">Temperature</label>
                    <input type="number" min="1" class="form-control" id="temperature" name="temperature" placeholder="" value="{{ isset($teleconsult->temperature )? $teleconsult->temperature  : old('temperature ') }}" >
                    @error('temperature ')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-2 col-sm-6">
                    <label for="blood_pressure">BP(mmHg)</label>
                    <input type="number" min="1" class="form-control" id="blood_pressure" name="blood_pressure" placeholder="" value="{{ isset($teleconsult->blood_pressure )? $teleconsult->blood_pressure  : old('blood_pressure ') }}" >
                    @error('blood_pressure ')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-2 col-sm-6">
                    <label for="heart_rate">Heart rate</label>
                    <input type="number" min="1" class="form-control" id="heart_rate" name="heart_rate" placeholder="" value="{{ isset($teleconsult->heart_rate )? $teleconsult->heart_rate  : old('heart_rate ') }}" >
                    @error('heart_rate ')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-2 col-sm-6">
                    <label for="respiratory_rate">Resp. Rate</label>
                    <input type="number" min="1" class="form-control" id="respiratory_rate" name="respiratory_rate" placeholder="" value="{{ isset($teleconsult->respiratory_rate )? $teleconsult->respiratory_rate  : old('respiratory_rate ') }}" >
                    @error('respiratory_rate ')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
{{--            </div>--}}
        </div>
    </div>
    <div class="col-12 pt-4">
        <h3>Complaint, Observation and Diagnosis</h3>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="complaint">Complaint<span class="text-danger">*</span></label>
                <textarea required class="form-control" id="complaint" name="complaint" rows="3" >{{ isset($teleconsult->complaint )? $teleconsult->complaint  : old('complaint ') }}</textarea>
                @error('complaint ')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="diagnosis">Diagnosis<span class="text-danger">*</span></label>
                <textarea class="form-control" required  id="diagnosis" name="diagnosis" rows="3">{{ isset($teleconsult->diagnosis )? $teleconsult->diagnosis  : old('diagnosis ') }}</textarea>
                @error('diagnosis ')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="tg_condition">Telemedicine group / Condition</label>
                <input type="text" min="1" class="form-control" id="tg_condition" name="tg_condition" placeholder="" value="{{ isset($teleconsult->tg_condition )? $teleconsult->tg_condition  : old('tg_condition ') }}" >
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-check col-md-3 col-sm-12 text-center pt-4">
                <input class="form-check-input" type="checkbox" value="1" @if(isset($teleconsult )){{ ($teleconsult->cc_physician === 1) ? 'checked'  : null }}@endif id="cc_physician" name="cc_physician">
                <label class="form-check-label" for="cc_physician">
                    call conf. to physician
                </label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3 col-sm-12">
                <label for="physician_name">Physician's Name</label>
                <input type="text" min="1" class="form-control" id="physician_name" placeholder="" value="{{ isset($teleconsult->physician_name )? $teleconsult->physician_name  : old('physician_name ') }}" >
                @error('physician_name ')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-12 pt-4">
        <h3>Medication/Lab done prior to teleconsulation</h3>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label for="medication">Medication/Supplies</label>

                        <input type="text"  class="form-control mt-2 mb-2" id="medication" name="prior_medication[]" placeholder="" value="{{isset($teleconsult->priorTeleconsult) ? $teleconsult->priorTeleconsult[0]['medication']  : old('prior_medication')  }}" >
                        <input type="text"  class="form-control mt-2 mb-2" id="medication" name="prior_medication[]" placeholder="" value="{{isset($teleconsult->priorTeleconsult) ? $teleconsult->priorTeleconsult[1]['medication']  : old('prior_medication')  }}" >
                        <input type="text"  class="form-control mt-2 mb-2" id="medication" name="prior_medication[]" placeholder="" value="{{isset($teleconsult->priorTeleconsult) ? $teleconsult->priorTeleconsult[2]['medication']  : old('prior_medication')  }}" >
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label for="dosage">Dosage</label>
                        <input type="text"  class="form-control mt-2 mb-2" id="dosage" name="dosage[]" placeholder="" value="{{isset($teleconsult->priorTeleconsult) ? $teleconsult->priorTeleconsult[0]['dosage']  : old('dosage')  }}" >
                        <input type="text"  class="form-control mt-2 mb-2" id="dosage" name="dosage[]" placeholder="" value="{{isset($teleconsult->priorTeleconsult) ? $teleconsult->priorTeleconsult[1]['dosage']  : old('dosage')  }}" >
                        <input type="text"  class="form-control mt-2 mb-2" id="dosage" name="dosage[]" placeholder="" value="{{isset($teleconsult->priorTeleconsult) ? $teleconsult->priorTeleconsult[2]['dosage']  : old('dosage')  }}" >
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label for="med_form">Medication Form</label>
                        <input type="text"  class="form-control mt-2 mb-2" id="med_form" name="medication_form[]" placeholder="" value="{{isset($teleconsult->priorTeleconsult) ? $teleconsult->priorTeleconsult[0]['medication_form']  : old('medication_form')  }}" >
                        <input type="text"  class="form-control mt-2 mb-2" id="med_form" name="medication_form[]" placeholder="" value="{{isset($teleconsult->priorTeleconsult) ? $teleconsult->priorTeleconsult[1]['medication_form']  : old('medication_form')  }}" >
                        <input type="text"  class="form-control mt-2 mb-2" id="med_form" name="medication_form[]" placeholder="" value="{{isset($teleconsult->priorTeleconsult) ? $teleconsult->priorTeleconsult[2]['medication_form']  : old('medication_form')  }}" >
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label for="amount_dispensed">Amount Dispensed</label>
                        <input type="text" class="form-control mt-2 mb-2" id="amount_dispensed" name="amount_dispensed[]" placeholder="" value="{{isset($teleconsult->priorTeleconsult) ? $teleconsult->priorTeleconsult[0]['amount_dispensed']  : old('amount_dispensed')  }}" >
                        <input type="text" class="form-control mt-2 mb-2" id="amount_dispensed" name="amount_dispensed[]" placeholder="" value="{{isset($teleconsult->priorTeleconsult) ? $teleconsult->priorTeleconsult[1]['amount_dispensed']  : old('amount_dispensed')  }}" >
                        <input type="text" class="form-control mt-2 mb-2" id="amount_dispensed" name="amount_dispensed[]" placeholder="" value="{{isset($teleconsult->priorTeleconsult) ? $teleconsult->priorTeleconsult[2]['amount_dispensed']  : old('amount_dispensed')  }}" >
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check col-md-12 col-sm-12 text-center pt-4">
                    <input class="form-check-input" type="checkbox" value="1" @if(isset($teleconsult )){{ ($teleconsult->prior_referred_to_hospital===1) ? 'checked'  : null  }}@endif id="prior_referred_to_hospital" name="prior_referred_to_hospital">
                    <label class="form-check-label" for="prior_referred_to_hospital">
                        Patient Referred to hospital?
                    </label>
                    @error('prior_referred_to_hospital ')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-check col-md-12 col-sm-12 text-center pt-4">
                    <input class="form-check-input" type="checkbox" value="0" @if(isset($teleconsult )){{ ($teleconsult->referral_priority === 1) ? 'checked' : null}}@endif id="referral_priority" name="referral_priority">
                    <label class="form-check-label" for="referral_priority">
                        Referral priority: Emergency
                    </label>
                    @error('referral_priority')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="row">
                    <h5 class="pt-2 pb-2">Emergency Transportation</h5>
                    <div class="form-check col-md-12 col-sm-12 ml-3">
                        <input class="form-check-input" type="checkbox" value="1" @if(isset($teleconsult )){{ ($teleconsult->ambulance === 1) ? 'checked'  : null }}@endif id="ambulance" name="ambulance">
                        <label class="form-check-label" for="ambulance">
                            Ambulance
                        </label>
                        @error('ambulance ')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label for="other">Other</label>
                        <input type="text" min="1" class="form-control" id="other" name="other" placeholder="" value="{{ isset($teleconsult->other )? $teleconsult->other  : old('other ') }}" >
                        @error('other ')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 pt-4">
        <h3>Medication/lab ordered during teleconsulation</h3>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <label for="medication">Medication/Supplies</label>
                        <input type="text"  class="form-control mt-2 mb-2" id="medication" name="medication[]" placeholder="" value="{{isset($teleconsult->duringTeleconsult) ? $teleconsult->duringTeleconsult[0]['medication']  : old('medication')  }}" >
                        <input type="text"  class="form-control mt-2 mb-2" id="medication" name="medication[]" placeholder="" value="{{isset($teleconsult->duringTeleconsult) ? $teleconsult->duringTeleconsult[1]['medication']  : old('medication')  }}" >
                        <input type="text"  class="form-control mt-2 mb-2" id="medication" name="medication[]" placeholder="" value="{{isset($teleconsult->duringTeleconsult) ? $teleconsult->duringTeleconsult[2]['medication']  : old('medication')  }}" >
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="quantity">Quantity</label>
                        <input type="number"  class="form-control mt-2 mb-2" id="quantity" name="quantity[]" placeholder="" value="{{isset($teleconsult->duringTeleconsult) ? $teleconsult->duringTeleconsult[0]['quantity']  : old('quantity')  }}" >
                        <input type="number"  class="form-control mt-2 mb-2" id="quantity" name="quantity[]" placeholder="" value="{{isset($teleconsult->duringTeleconsult) ? $teleconsult->duringTeleconsult[0]['quantity']  : old('quantity')  }}" >
                        <input type="number"  class="form-control mt-2 mb-2" id="quantity" name="quantity[]" placeholder="" value="{{isset($teleconsult->duringTeleconsult) ? $teleconsult->duringTeleconsult[0]['quantity']  : old('quantity')  }}" >
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="row">
                    <div class="form-check col-md-12 col-sm-12 text-center pt-4">
                        <input class="form-check-input" type="checkbox" @if(isset($teleconsult )){{ ($teleconsult->referred_to_hospital === 1) ? 'checked' : null }}@endif  id="referred_to_hospital" name="referred_to_hospital" value="1">
                        <label class="form-check-label" for="referred_to_hospital">
                            Is Patient Referred To Hospital?
                        </label>
                        @error('referral_priority')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row pt-4" >
                    <div class="col-md-4 col-sm-12">
                        <label for="name_of_caller">Name of Caller<span class="text-danger">*</span></label>
                        <input type="text" required class="form-control" id="name_of_caller" name="name_of_caller" placeholder="" value="{{ isset($teleconsult->name_of_caller )? $teleconsult->name_of_caller  : old('name_of_caller ') }}" >
                        @error('name_of_caller ')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <label for="contact_of_caller">Contact no. of caller<span class="text-danger">*</span></label>
                        <input  type="tel" required pattern="[0-9]{10}" class="form-control" id="contact_of_caller" name="contact_of_caller" placeholder="" value="{{ isset($teleconsult->contact_of_caller )? $teleconsult->contact_of_caller  : old('') }}" >
                        @error('contact_of_caller ')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <label for="tcc_staff">Name of TCC Staff<span class="text-danger">*</span></label>
                        <input type="text" disabled required min="1" class="form-control" id="tcc_staff" name="tcc_staff" placeholder="" value="{{ auth()->user()->name}}" >
                        @error('tcc_staff')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
    <div class="col-6">
        <button type="submit" class="btn btn-primary ml-3">Save</button>
    </div>
        </div>
    </div>
</div>
