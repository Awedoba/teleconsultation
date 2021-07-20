
<div class="row">
    <h1>Teleconsultation Form</h1>
</div>
<div class="row">
    <div class="col-md-5 col-sm-12">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="encounter_date">Encounter Date <span class="text-danger">*</span> </label>
                <input required type="date" class="form-control" max="{{$date}}" id="encounter_date" name="encounter_date" placeholder="" value="{{ isset($covid->encounter_date)? $covid->encounter_date : old('encounter_date') }}" >
                @error('encounter_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="name">Fullname</label>
                <input type="text" class="form-control" id="facility_opd_no" name="name" placeholder="Fullname" value="{{ isset($covid->name)? $covid->name : old('name') }}" >
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="Location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="" value="{{ isset($covid->location)? $covid->location  : old('location') }}" >
                @error('location')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="contact">Contact number</span></label>
                <input type="number" required class="form-control" id="contact_of_caller" name="contact_of_caller" placeholder="contact_of_caller" value="{{ isset($teleconsult->contact_of_caller)? $teleconsult->contact_of_caller  : old('contact_of_caller') }}" >
                @error('contact_of_caller')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="complaints">Complaints</span></label>
                <input type="text" required class="form-control" id="complaints" name="complaints" placeholder="Complaints" value="{{ isset($covid->complaints)? $covid->complaints  : old('patient_first_name ') }}" >
                @error('complaints')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="assistance_offered">Assistance Offered</label>
                <input type="text" class="form-control" id="assistance_offered" name="assistance_offered" placeholder="Assistance Offered" value="{{ isset($covid->assistance_offered )? $covid->assistance_offered  : old('assistance_offered') }}" >
                @error('assistance_offered')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
            <div class="col-md-2 col-sm-12">
                    <label for="sex">Sex<span class="text-danger">*</span></label>
                    <select required class="custom-select d-block w-100" id="sex" name="sex"  >
                        <option value="" selected disabled>Choose...</option>
                        <option value="male" @if (isset($covid->sex)) {{ $covid->sex === 'male'? 'selected' : null}} @endif >Male</option>
                        <option value="female" @if (isset($covid->sex)) {{ $covid->sex === 'female'? 'selected' : null}} @endif >Female</option>
                    </select>
                    @error('sex')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
{{--            </div>--}}

<div class="col-md-2 col-sm-12 m-4">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>
{{--            <div class="row">--}}

    