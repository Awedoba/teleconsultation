<div class="row">
    <h1>Teleconsultation Form</h1>
</div>
<div class="row">
    <div class="col-md-5 col-sm-12">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="firstName">Encounter Date</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="firstName">Facility OPD no.</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="firstName">Community</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="firstName">Facility</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="firstName">Patient: First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="firstName">Middle name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                @error('name')
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
                <label for="firstName">TCC Serial no.</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div><div class="col-md-4 col-sm-12">
                <label for="firstName">NHIS no.</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12">
                <label for="firstName">National ID</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <label for="firstName">Sub-district</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div><div class="col-md-4 col-sm-12">
                <label for="firstName">District</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12">
                <label for="firstName">Region</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
{{--            <div class="row">--}}
                <div class="col-md-6 col-sm-12">
                    <label for="firstName">Family Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-2 col-sm-12">
                    <label for="firstName">DOB</label>
                    <input type="date" class="form-control" id="firstName" placeholder="" value="" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-2 col-sm-12">
                    <label for="firstName">Age</label>
                    <input type="number" min="1" class="form-control" id="firstName" placeholder="" value="" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-2 col-sm-12">
                    <label for="country">Sex</label>
                    <select class="custom-select d-block w-100" id="country"  >
                        <option value="">Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
{{--            </div>--}}
{{--            <div class="row">--}}
                <div class="col-md-2 col-sm-6">
                    <label for="firstName">Weight</label>
                    <input type="number" min="1" class="form-control" id="firstName" placeholder="" value="" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-2 col-sm-6">
                    <label for="firstName">Temperature</label>
                    <input type="number" min="1" class="form-control" id="firstName" placeholder="" value="" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-2 col-sm-6">
                    <label for="firstName">BP(mmHg)</label>
                    <input type="number" min="1" class="form-control" id="firstName" placeholder="" value="" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-2 col-sm-6">
                    <label for="firstName">Heart rate</label>
                    <input type="number" min="1" class="form-control" id="firstName" placeholder="" value="" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-2 col-sm-6">
                    <label for="firstName">Resp. Rate</label>
                    <input type="number" min="1" class="form-control" id="firstName" placeholder="" value="" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
{{--            </div>--}}
        </div>
    </div>
    <div class="col-12 pt-4">
        <h3>Complaint, observation and Diagnosis</h3>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="firstName">Complaint</label>
                <textarea class="form-control" id="firstName" rows="3"></textarea>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="firstName">Diagnosis</label>
                <textarea class="form-control" id="firstName" rows="3"></textarea>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="firstName">Telemedicine group/ condition</label>
                <input type="text" min="1" class="form-control" id="firstName" placeholder="" value="" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-check col-md-3 col-sm-12 text-center pt-4">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    call conf. to physician
                </label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3 col-sm-12">
                <label for="firstName">Physician's Name</label>
                <input type="text" min="1" class="form-control" id="firstName" placeholder="" value="" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-12 pt-4">
        <h3>Medication/lab done prior to teleconsulation</h3>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label for="medication">Medication/Supplies</label>
                        <input type="text"  class="form-control mt-2 mb-2" id="medication" name="medication[]" placeholder="" value="" required>
                        <input type="text"  class="form-control mt-2 mb-2" id="medication" name="medication[]" placeholder="" value="" required>
                        <input type="text"  class="form-control mt-2 mb-2" id="medication" name="medication[]" placeholder="" value="" required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label for="dosage">Dosage</label>
                        <input type="text"  class="form-control mt-2 mb-2" id="dosage" name="dosage[]" placeholder="" value="" required>
                        <input type="text"  class="form-control mt-2 mb-2" id="firstName" name="dosage[]" placeholder="" value="" required>
                        <input type="text"  class="form-control mt-2 mb-2" id="firstName" name="dosage[]" placeholder="" value="" required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label for="med_form">Medication Form</label>
                        <input type="text"  class="form-control mt-2 mb-2" id="med_form" name="med_form[]" placeholder="" value="" required>
                        <input type="text"  class="form-control mt-2 mb-2" id="med_form" name="med_form[]" placeholder="" value="" required>
                        <input type="text"  class="form-control mt-2 mb-2" id="med_form" name="med_form[]" placeholder="" value="" required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label for="amount_dispensed">Amount Dispensed</label>
                        <input type="text" class="form-control mt-2 mb-2" id="amount_dispensed" name="amount_dispensed[]" placeholder="" value="" required>
                        <input type="text" class="form-control mt-2 mb-2" id="amount_dispensed" name="amount_dispensed[]" placeholder="" value="" required>
                        <input type="text" class="form-control mt-2 mb-2" id="amount_dispensed" name="amount_dispensed[]" placeholder="" value="" required>
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
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Patient Referred to hospital?
                    </label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-check col-md-12 col-sm-12 text-center pt-4">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Referral priority: Emergency
                    </label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="row">
                    <h5 class="pt-2 pb-2">Emergency Transportation</h5>
                    <div class="form-check col-md-12 col-sm-12 ml-3">
                        <input class="form-check-input " type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Ambulance
                        </label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label for="firstName">Other</label>
                        <input type="text" min="1" class="form-control" id="firstName" placeholder="" value="" required>
                        @error('name')
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
            <div class="col-md-4 col-sm-12 ">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <label for="medication">Medication/Supplies</label>
                        <input type="text"  class="form-control mt-2 mb-2" id="medication" name="medication[]" placeholder="" value="" required>
                        <input type="text"  class="form-control mt-2 mb-2" id="medication" name="medication[]" placeholder="" value="" required>
                        <input type="text"  class="form-control mt-2 mb-2" id="medication" name="medication[]" placeholder="" value="" required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="quantity">Quantity</label>
                        <input type="text"  class="form-control mt-2 mb-2" id="quantity" name="quantity[]" placeholder="" value="" required>
                        <input type="text"  class="form-control mt-2 mb-2" id="quantity" name="quantity[]" placeholder="" value="" required>
                        <input type="text"  class="form-control mt-2 mb-2" id="quantity" name="quantity[]" placeholder="" value="" required>
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
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Referral priority: Emergency
                        </label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <label for="firstName">Name of Caller</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <label for="firstName">Contact no. of caller</label>
                        <input  type="tel" pattern="[0-9]{10}" class="form-control" id="firstName" placeholder="" value="" required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <label for="firstName">Name of TCC Staff</label>
                        <input type="text" min="1" class="form-control" id="firstName" placeholder="" value="" required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
