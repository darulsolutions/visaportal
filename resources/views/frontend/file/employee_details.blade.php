@extends('frontend.layout.app')
    @section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Employee / Visa Details</h1>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!--New File Entry Form Start-->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- form start -->
                            <form role="form" method="post" action="{{ url('add-employee') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <h4 class="add_file_section">Employee Visa Details</h4>
                                        </div>
                                        <div class="form-group col-6">
                                            <div class="card-footer">
                                                <a href="" type="submit" class="btn btn-primary">Print Forms</a>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Name:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->name) && !empty($employee_details[0]->name) ? $employee_details[0]->name : ''}}" id="" placeholder="">
                                            @if($errors->has('name'))
                                                <span class="error">{{ $errors->first('name') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Father Name:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->father_name) && !empty($employee_details[0]->father_name) ? $employee_details[0]->father_name : ''}}" id="" placeholder="">
                                            @if($errors->has('father_name'))
                                                <span class="error">{{ $errors->first('father_name') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>CNIC Number:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->cnic) && !empty($employee_details[0]->cnic) ? $employee_details[0]->cnic : ''}}" id="" placeholder="">
                                            <!-- <input type="text" name="cnic" value="{{ old('cnic') }}" class="form-control {{ isset($errors) && $errors->has('cnic') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('cnic'))
                                                <span class="error">{{ $errors->first('cnic') }}<span>
                                            @endif
                                        </div>
                                        {{-- <div class="form-group col-3">
                                            <label style='font-weight:bold;'>Waqala or Deligation Number:</label>
                                            <!-- <input type="text" name="" class="form-control {{ isset($errors) && $errors->has('date') ? 'has_error' : ''}}" id="" placeholder="Enter Waqala or Deligation Numberr"> -->
                                            @if($errors->has('country'))
                                                <span class="error">{{ $errors->first('country') }}<span>
                                            @endif
                                        </div> --}}
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label style='font-weight:bold;'>Address:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->address) && !empty($employee_details[0]->address) ? $employee_details[0]->address : ''}}" id="" placeholder="">
                                            <!-- <input type="text" name="address" value="{{ old('address') }}" class="form-control {{ isset($errors) && $errors->has('address') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('address'))
                                                <span class="error">{{ $errors->first('address') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Category:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->category) && !empty($employee_details[0]->category) ? $employee_details[0]->category : ''}}" id="" placeholder="">
                                            <!-- <select name="category" class="form-control select2" style="width: 100%;">
                                                <option value="1" >Category A</option>
                                                <option value="2">Category B</option>
                                            </select> -->
                                        </div>
                                         <div class="form-group col-2">
                                            <label style='font-weight:bold;'>District:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->district) && !empty($employee_details[0]->district) ? $employee_details[0]->district : ''}}" id="" placeholder="">
                                            <!-- <input type="text" name="district" value="{{ old('district') }}" class="form-control {{ isset($errors) && $errors->has('district') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('district'))
                                                <span class="error">{{ $errors->first('district') }}<span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Date Of Birth:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->dob) && !empty($employee_details[0]->dob) ? $employee_details[0]->dob : ''}}" id="" placeholder="">
                                            <!-- <input type="date" name="dob" value="{{ old('dob') }}" class="form-control {{ isset($errors) && $errors->has('dob') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('dob'))
                                                <span class="error">{{ $errors->first('dob') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Place Of Birth:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->pob) && !empty($employee_details[0]->pob) ? $employee_details[0]->pob : ''}}" id="" placeholder="">
                                            <!-- <input type="text" name="pob" value="{{ old('pob') }}" class="form-control {{ isset($errors) && $errors->has('pob') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('pob'))
                                                <span class="error">{{ $errors->first('pob') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Passport Number:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->passport) && !empty($employee_details[0]->passport) ? $employee_details[0]->passport : ''}}" id="" placeholder="">
                                            <!-- <input type="number" name="passport" value="{{ old('passport') }}" class="form-control {{ isset($errors) && $errors->has('passport') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('passport'))
                                                <span class="error">{{ $errors->first('passport') }}<span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Date Of Issue:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->doi) && !empty($employee_details[0]->doi) ? $employee_details[0]->doi : ''}}" id="" placeholder="">
                                            <!-- <input type="date" name="doi" value="{{ old('doi') }}" class="form-control {{ isset($errors) && $errors->has('doi') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('doi'))
                                                <span class="error">{{ $errors->first('doi') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Place Of Issue:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->poi) && !empty($employee_details[0]->poi) ? $employee_details[0]->poi : ''}}" id="" placeholder="">
                                            <!-- <input type="text" name="poi" value="{{ old('poi') }}" class="form-control {{ isset($errors) && $errors->has('poi') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('poi'))
                                                <span class="error">{{ $errors->first('poi') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Date Of E:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->doe) && !empty($employee_details[0]->doe) ? $employee_details[0]->doe : ''}}" id="" placeholder="">
                                            <!-- <input type="date" name="doe" value="{{ old('doe') }}" class="form-control {{ isset($errors) && $errors->has('doe') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('doe'))
                                                <span class="error">{{ $errors->first('doe') }}<span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Province:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->province) && !empty($employee_details[0]->province) ? $employee_details[0]->province : ''}}" id="" placeholder="">
                                            <!-- <input type="text" name="province" value="{{ old('province') }}" class="form-control {{ isset($errors) && $errors->has('province') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('province'))
                                                <span class="error">{{ $errors->first('province') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label style='font-weight:25px;'>City:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->father_name) && !empty($employee_details[0]->father_name) ? $employee_details[0]->father_name : ''}}" id="" placeholder="">
                                            <!-- <select name="employer_city_id" class="form-control select2 {{ isset($errors) && $errors->has('employer_city_id') ? 'has_error' : ''}}" style="width: 100%;">
                                                <option value="1" selected="selected">Karachi</option>
                                                <option value="2" >Islamabad</option>
                                            </select> -->
                                            @if($errors->has('employer_city_id'))
                                                <span class="error">{{ $errors->first('employer_city_id') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Contract Period:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->contract_period) && !empty($employee_details[0]->contract_period) ? $employee_details[0]->contract_period : ''}}" id="" placeholder="">
                                            <!-- <input type="text" name="contract_period" value="{{ old('contract_period') }}" class="form-control {{ isset($errors) && $errors->has('contract_period') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('contract_period'))
                                                <span class="error">{{ $errors->first('contract_period') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Salary:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->salary) && !empty($employee_details[0]->salary) ? $employee_details[0]->salary : ''}}" id="" placeholder="">
                                            <!-- <input type="number" name="salary" value="{{ old('salary') }}" class="form-control {{ isset($errors) && $errors->has('salary') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('salary'))
                                                <span class="error">{{ $errors->first('salary') }}<span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                         <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Salary Unit:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->salary_unit) && !empty($employee_details[0]->salary_unit) ? $employee_details[0]->salary_unit : ''}}" id="" placeholder="">
                                            @if($errors->has('salary_unit'))
                                                <span class="error">{{ $errors->first('salary_unit') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Permission Number:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->permission_number) && !empty($employee_details[0]->permission_number) ? $employee_details[0]->permission_number : ''}}" id="" placeholder="">
                                            @if($errors->has('permission_number'))
                                                <span class="error">{{ $errors->first('permission_number') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Date:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->date) && !empty($employee_details[0]->date) ? $employee_details[0]->date : ''}}" id="" placeholder="">
                                            @if($errors->has('date'))
                                                <span class="error">{{ $errors->first('date') }}<span>
                                            @endif
                                        </div>
                                    </div>

                                    <h4 class="add_file_section">Insurance Details                                    </h4>

                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Name:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->employer_name) && !empty($employee_details[0]->employer_name) ? $employee_details[0]->employer_name : ''}}" id="" placeholder="">
                                            @if($errors->has('employer_name'))
                                                <span class="error">{{ $errors->first('employer_name') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Nomination Father Name/ Husband Name:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->nomination_name) && !empty($employee_details[0]->nomination_name) ? $employee_details[0]->nomination_name : ''}}" id="" placeholder="">
                                            @if($errors->has('nomination_name'))
                                                <span class="error">{{ $errors->first('nomination_name') }}<span>
                                            @endif
                                        </div>

                                          <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Nomination Cnic:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->nomination_cnic) && !empty($employee_details[0]->nomination_cnic) ? $employee_details[0]->nomination_cnic : ''}}" id="" placeholder="">
                                            <!-- <input type="number" name="nomination_cnic" value="{{ old('nomination_cnic') }}" class="form-control {{ isset($errors) && $errors->has('nomination_cnic') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('nomination_cnic'))
                                                <span class="error">{{ $errors->first('nomination_cnic') }}<span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Relation:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->relation) && !empty($employee_details[0]->relation) ? $employee_details[0]->relation : ''}}" id="" placeholder="">
                                            <!-- <input type="text" name="relation" value="{{ old('relation') }}" class="form-control {{ isset($errors) && $errors->has('relation') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('relation'))
                                                <span class="error">{{ $errors->first('relation') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Nomination Address:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->nomination_address) && !empty($employee_details[0]->nomination_address) ? $employee_details[0]->nomination_address : ''}}" id="" placeholder="">
                                            <!-- <input type="number" name="kd_number" value="{{ old('nomination_address') }}" class="form-control {{ isset($errors) && $errors->has('nomination_address') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('nomination_address'))
                                                <span class="error">{{ $errors->first('nomination_address') }}<span>
                                            @endif
                                        </div>

                                      <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Employee Date:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->emp_date) && !empty($employee_details[0]->emp_date) ? $employee_details[0]->emp_date : ''}}" id="" placeholder="">
                                            <!-- <input type="date" name="emp_date" value="{{ old('emp_date') }}" class="form-control {{ isset($errors) && $errors->has('emp_date') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('emp_date'))
                                                <span class="error">{{ $errors->first('emp_date') }}<span>
                                            @endif
                                      </div>
                                    </div>
                                    <div class="row">
                                        {{-- <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Husband:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->husband) && !empty($employee_details[0]->husband) ? $employee_details[0]->husband : ''}}" id="" placeholder="">
                                            <!-- <input type="text" name="husband" value="{{ old('husband') }}" class="form-control {{ isset($errors) && $errors->has('husband') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('husband'))
                                                <span class="error">{{ $errors->first('husband') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Religion:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->religion) && !empty($employee_details[0]->religion) ? $employee_details[0]->religion : ''}}" id="" placeholder="">
                                            <!-- <input type="text" name="religion" value="{{ old('religion') }}" class="form-control {{ isset($errors) && $errors->has('religion') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('religion'))
                                                <span class="error">{{ $errors->first('religion') }}<span>
                                            @endif
                                        </div>
                                         <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Marital:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->marital) && !empty($employee_details[0]->marital) ? $employee_details[0]->marital : ''}}" id="" placeholder="">
                                            <!-- <input type="text" name="marital" value="{{ old('marital') }}" class="form-control {{ isset($errors) && $errors->has('marital') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('marital'))
                                                <span class="error">{{ $errors->first('marital') }}<span>
                                            @endif
                                        </div> --}}
                                         {{-- <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Nationality:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->nationality) && !empty($employee_details[0]->nationality) ? $employee_details[0]->nationality : ''}}" id="" placeholder="">
                                            <!-- <input type="text" name="nationality" value="{{ old('nationality') }}" class="form-control {{ isset($errors) && $errors->has('nationality') ? 'has_error' : ''}}" id="" placeholder=> -->
                                            @if($errors->has('nationality'))
                                                <span class="error">{{ $errors->first('nationality') }}<span>
                                            @endif
                                        </div> --}}
                                         <div class="form-group col-4">
                                            <label style='font-weight:bold;'>Gender:</label>
                                            <input type="text"  class="form-control"  value="{{ isset($employee_details[0]->sex) && !empty($employee_details[0]->sex) ? $employee_details[0]->sex : ''}}" id="" placeholder="">
                                            <!-- <input type="text" name="sex" value="{{ old('sex') }}" class="form-control {{ isset($errors) && $errors->has('sex') ? 'has_error' : ''}}" id="" placeholder=""> -->
                                            @if($errors->has('sex'))
                                                <span class="error">{{ $errors->first('sex') }}<span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- /.content-wrapper -->
    @stop
