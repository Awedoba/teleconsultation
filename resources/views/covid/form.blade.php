
<div class="row">
    <h1>COVID Teleconsult Form</h1>
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
                <label for="contact_of_caller">Contact number</label>
                <input type="number" required class="form-control" id="contact_of_caller" name="contact_of_caller" placeholder="contact_of_caller" value="{{ isset($covid->contact_of_caller)? $covid->contact_of_caller  : old('contact_of_caller') }}" >
                @error('contact_of_caller')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                    <label for="age">Age<span class="text-danger">*</span></label>
                    <input type="number" required min="1" class="form-control" id="age" name="age" placeholder="" value="{{ isset($covid->age )? $covid->age  : old('age ') }}" >
                    @error('age ')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="unit">Unit(Age)<span class="text-danger">*</span></label>
                    <select required class="custom-select d-block w-100" id="unit" name="unit"  >
                        <option value="" selected disabled>Choose...</option>
                        <option value="months" @if (isset($covid->unit)) {{ $covid->unit === 'months'? 'selected' : null}} @endif >Months</option>
                        <option value="years" @if (isset($covid->unit)) {{ $covid->unit === 'years'? 'selected' : null}} @endif >Years</option>
                    </select>
                    @error('unit ')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            <div class="col-md-6 col-sm-12">
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
            <div class="col-md-6 col-sm-12">
                <label for="vaccine">Vaccine Status<span class="text-danger">*</span></label>
                <select required class="custom-select d-block w-100" id="vaccine" name="vaccine"  >
                    <option value="" selected disabled>Choose...</option>
                    <option value="fully vaccinated" @if (isset($covid->vaccine)) {{ $covid->vaccine === 'fully vaccinated'? 'selected' : null}} @endif >Fully Vaccinated</option>
                    <option value="partially vaccinated" @if (isset($covid->vaccine)) {{ $covid->vaccine === 'partially vaccinated'? 'selected' : null}} @endif >Partially Vaccinated</option>
                    <option value="not vaccinated" @if (isset($covid->vaccine)) {{ $covid->vaccine === 'not vaccinated'? 'selected' : null}} @endif >Not Vaccinated</option>
                </select>
                    @error('sex ')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <label for="complaints">Complaints</label>
                <textarea required class="form-control" id="complaints" name="complaints" rows="3" >{{ isset($covid->complaints)? $covid->complaints  : old('complaints ') }}</textarea>

                @error('complaints')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-12 col-sm-12">
                <label for="assistance_offered">Assistance Offered</label>
                <textarea required class="form-control" id="assistance_offered" name="assistance_offered" rows="3" >{{ isset($covid->assistance_offered )? $covid->assistance_offered  : old('assistance_offered') }}</textarea>
                @error('assistance_offered')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>

{{--            </div>--}}
<div class="col-md-2 col-sm-12 m-4">
                        <button type="submit" class="btn btn-primary ">Submit</button>
</div>
{{--            <div class="row">--}}
</div>
