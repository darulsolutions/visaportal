    @extends('frontend.layout.app')
    @section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Employee</h1>
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

                                    <h4 class="add_file_section"> Employee Details: File# {{ isset($id) && !empty($id) ? $id : ''}}</h4>
                                    <hr>
                                    <input class="form-control" type="hidden" name="id" value="{{ isset($id) && !empty($id) ? $id : ''}}">
                                    <div class="row">
                                        <div class="form-group col-2">
                                            <label for="">Date Of Passport Detail Entry</label>
                                            <input class="form-control" type="date" name="created_at" value="{{ old('created_at') }}" class="form-control {{ isset($errors) && $errors->has('created_at') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('created_at'))
                                                <span class="error">{{ $errors->first('created_at') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-2">
                                            <label for="">Date Of Orignal Passport Received</label>
                                            <input class="form-control" type="date" name="recived_passport" value="{{ old('recived_passport') }}" class="form-control {{ isset($errors) && $errors->has('recived_passport') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('recived_passport'))
                                                <span class="error">{{ $errors->first('recived_passport') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-3">
                                            <label for="">E Number</label>
                                            <input class="form-control" type="number" name="E_Number" value="{{ old('E_Number') }}" class="form-control {{ isset($errors) && $errors->has('E_Number') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('E_Number'))
                                                <span class="error">{{ $errors->first('E_Number') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-3">
                                            <label for="">Other E Number</label>
                                            <input class="form-control" type="number" name="other_E_Number" value="{{ old('other_E_Number') }}" class="form-control {{ isset($errors) && $errors->has('other_E_Number') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('other_E_Number'))
                                                <span class="error">{{ $errors->first('other_E_Number') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-2">
                                            <label for="">E Number Date</label>
                                            <input class="form-control" type="date" name="E_Number_date" value="{{ old('E_Number_date') }}" class="form-control {{ isset($errors) && $errors->has('E_Number_date') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('E_Number_date'))
                                                <span class="error">{{ $errors->first('E_Number_date') }}<span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="form-group col-4">
                                            <label for="">Name</label>
                                            <input class="form-control" type="text" name="name" value="{{ old('name') }}"class="form-control {{ isset($errors) && $errors->has('name') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('name'))
                                                <span class="error">{{ $errors->first('name') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">Father Name</label>
                                            <input class="form-control" type="text" name="father_name" value="{{ old('father_name') }}" class="form-control {{ isset($errors) && $errors->has('father_name') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('father_name'))
                                                <span class="error">{{ $errors->first('father_name') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">CNIC Number</label>
                                            <input class="form-control" type="text" name="cnic" value="{{ old('cnic') }}" class="form-control {{ isset($errors) && $errors->has('cnic') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('cnic'))
                                                <span class="error">{{ $errors->first('cnic') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">Name(Arabic)</label>
                                            <input class="form-control" type="text" name="name_ar" value="{{ old('name_ar') }}"class="form-control {{ isset($errors) && $errors->has('name_ar') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('name_ar'))
                                                <span class="error">{{ $errors->first('name_ar') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">Father Name(Arabic)</label>
                                            <input class="form-control" type="text" name="father_name_ar" value="{{ old('father_name_ar') }}" class="form-control {{ isset($errors) && $errors->has('father_name_ar') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('father_name_ar'))
                                                <span class="error">{{ $errors->first('father_name_ar') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-3">
                                            <label for="">Phone Number</label>
                                            <input class="form-control" type="text" name="emp_phone" class="form-control {{ isset($errors) && $errors->has('emp_phone') ? 'has_error' : ''}}" id="" placeholder="Phone Numberr">
                                            @if($errors->has('emp_phone'))
                                                <span class="error">{{ $errors->first('emp_phone') }}<span>
                                            @endif
                                        </div>
                                    </div>

                                    <h6 class="add_file_section"> Passport Details</h6>
                                    <hr>
                                    <div class="row">

                                        <div class="form-group col-4">
                                            <label for="">Passport Number</label>
                                            <input class="form-control" type="number" name="passport" value="{{ old('passport') }}" class="form-control {{ isset($errors) && $errors->has('passport') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('passport'))
                                                <span class="error">{{ $errors->first('passport') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">Old Passport Number</label>
                                            <input class="form-control" type="number" name="passport_old" value="{{ old('passport_old') }}" class="form-control {{ isset($errors) && $errors->has('passport_old') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('passport_old'))
                                                <span class="error">{{ $errors->first('passport_old') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">Date Of Birth</label>
                                            <input class="form-control" type="date" name="dob" value="{{ old('dob') }}" class="form-control {{ isset($errors) && $errors->has('dob') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('dob'))
                                                <span class="error">{{ $errors->first('dob') }}<span>
                                            @endif
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label for="">Place Of Birth</label>
                                            <input class="form-control" type="text" name="pob" value="{{ old('pob') }}" class="form-control {{ isset($errors) && $errors->has('pob') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('pob'))
                                                <span class="error">{{ $errors->first('pob') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">Passport Date Of Issue</label>
                                            <input class="form-control" type="date" name="doi" value="{{ old('doi') }}" class="form-control {{ isset($errors) && $errors->has('doi') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('doi'))
                                                <span class="error">{{ $errors->first('doi') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">Passport Date Of Expiry</label>
                                            <input class="form-control" type="date" name="doe" value="{{ old('doe') }}" class="form-control {{ isset($errors) && $errors->has('doe') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('doe'))
                                                <span class="error">{{ $errors->first('doe') }}<span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="form-group col-4">
                                            <label for="">Passport Place Of Issue</label>
                                            <input class="form-control" type="text" name="poi" value="{{ old('poi') }}" class="form-control {{ isset($errors) && $errors->has('poi') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('poi'))
                                                <span class="error">{{ $errors->first('poi') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-4">
                                            <label for="">Gender</label>
                                            <select name="sex" id='sex' class="form-control select2 {{ isset($errors) && $errors->has('sex') ? 'has_error' : ''}}" style="width: 100%;">
                                                <option value="Male" selected="selected">Male</option>
                                                <option value="Female" >Female</option>
                                            </select>
                                            @if($errors->has('sex'))
                                                <span class="error">{{ $errors->first('sex') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-4">
                                            <label for="">Married/Single</label>
                                            <select name="married_status" id='married_status' class="form-control select2 {{ isset($errors) && $errors->has('married_status') ? 'has_error' : ''}}" style="width: 100%;">
                                                <option value="Single" >Single</option>
                                                <option value="Married" selected="selected">Married</option>
                                            </select>
                                            @if($errors->has('married_status'))
                                                <span class="error">{{ $errors->first('married_status') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">Province</label>
                                            <input class="form-control" type="text" name="province" value="{{ old('province') }}" class="form-control {{ isset($errors) && $errors->has('province') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('province'))
                                                <span class="error">{{ $errors->first('province') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label>City</label>
                                            <select name="employer_city_id" class="form-control select2 {{ isset($errors) && $errors->has('employer_city_id') ? 'has_error' : ''}}" style="width: 100%;">
                                                <option value="1" selected="selected">Karachi</option>
                                                <option value="2" >Islamabad</option>
                                            </select>
                                            @if($errors->has('employer_city_id'))
                                                <span class="error">{{ $errors->first('employer_city_id') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-2">
                                            <label for="">District</label>
                                            <input class="form-control" type="text" name="district" value="{{ old('district') }}" class="form-control {{ isset($errors) && $errors->has('district') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('district'))
                                                <span class="error">{{ $errors->first('district') }}<span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="">Address</label>
                                            <input class="form-control" type="text" name="address" value="{{ old('address') }}" class="form-control {{ isset($errors) && $errors->has('address') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('address'))
                                                <span class="error">{{ $errors->first('address') }}<span>
                                            @endif
                                        </div>

                                    </div>
                                    <h6 class="add_file_section">Employment Details</h6>
                                    <hr>
                                    <div class="row">
                                        @if (isset($id))
                                            @php
                                                $employer = DB::table('employer_details')->where('file_id',$id)->get();
                                                $sender_details = DB::table('sender_details')->where('file_id',$id)->get();
                                            @endphp
                                        @endif

                                        <div class="form-group col-4">
                                            <label for="">Employer Name</label>
                                            <input class="form-control" type="text" name="employername" value="{{ $employer[0]->name }}" class="form-control {{ isset($errors) && $errors->has('employername') ? 'has_error' : ''}}" id="" placeholder="" disabled>
                                            @if($errors->has('employername'))
                                                <span class="error">{{ $errors->first('employername') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">Visa Number</label>
                                            <input class="form-control" type="text" name="visa_number" value="{{ $employer[0]->visa_number }}" class="form-control {{ isset($errors) && $errors->has('visa_number') ? 'has_error' : ''}}" id="" placeholder="" disabled>
                                            @if($errors->has('visa_number'))
                                                <span class="error">{{ $errors->first('visa_number') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">ID Number</label>
                                            <input class="form-control" type="text" name="id_number" value="{{ $employer[0]->id_number }}" class="form-control {{ isset($errors) && $errors->has('id_number') ? 'has_error' : ''}}" id="" placeholder="" disabled>
                                            @if($errors->has('id_number'))
                                                <span class="error">{{ $errors->first('id_number') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Occupation</label>
                                                @php
                                                    $categories = DB::table('categories')->select('*')->get();
                                                @endphp
                                                <select name="category" class="form-control select2" style="width: 100%;">
                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->id }}" >{{ $item->name }}/{{ $item->ar_name }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        {{-- <div class="form-group col-4">
                                            <label for="">Contract Period</label>
                                            <input class="form-control" type="text" name="contract_period" value="{{ old('contract_period') }}" class="form-control {{ isset($errors) && $errors->has('contract_period') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('contract_period'))
                                                <span class="error">{{ $errors->first('contract_period') }}<span>
                                            @endif
                                        </div> --}}

                                        <div class="form-group col-4">
                                            <label for="">Salary</label>
                                            <input class="form-control" type="number" name="salary" value="{{ old('salary') }}" class="form-control {{ isset($errors) && $errors->has('salary') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('salary'))
                                                <span class="error">{{ $errors->first('salary') }}<span>
                                            @endif
                                        </div>
                                         <div class="form-group col-4" style="display: none">
                                            <label>Salary Unit</label>
                                            <select name="salary_unit" class="form-control select2 {{ isset($errors) && $errors->has('salary_unit') ? 'has_error' : ''}}" style="width: 100%;">
                                                <option value="Monthly" selected="selected">Monthly</option>
                                                <option value="Daily">Daily Wages</option>
                                            </select>
                                            @if($errors->has('salary_unit'))
                                                <span class="error">{{ $errors->first('salary_unit') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-2">
                                            <label for="">Permission Number</label>
                                            <input class="form-control" type="text" name="permission_number" value="{{ $sender_details[0]->permission_number }}" class="form-control {{ isset($errors) && $errors->has('permission_number') ? 'has_error' : ''}}" id="" placeholder="" disabled>
                                            @if($errors->has('permission_number'))
                                                <span class="error">{{ $errors->first('permission_number') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-2">
                                            <label for="">Permission Date</label>
                                            <input class="form-control" type="text" name="permission_date" value="{{ $sender_details[0]->permission_date }}" class="form-control {{ isset($errors) && $errors->has('permission_date') ? 'has_error' : ''}}" id="" placeholder="" disabled>
                                            @if($errors->has('permission_date'))
                                                <span class="error">{{ $errors->first('permission_date') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label>VISA STATUS</label>
                                            <select name="visa_status" id='visa_status' class="form-control select2 {{ isset($errors) && $errors->has('visa_status') ? 'has_error' : ''}}" style="width: 100%;">
                                                <option value="Pending" selected="selected">Pending</option>
                                                <option value="Visa Submitted to Embassy" >Visa Submitted to Embassy</option>
                                                <option value="Visa Stamped" >Visa Stamped</option>
                                                <option value="Visa Rejected" >Visa Rejected</option>
                                                <option value="Visa Objection" >Visa Objection</option>
                                            </select>
                                            @if($errors->has('visa_status'))
                                                <span class="error">{{ $errors->first('visa_status') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4" id="showcontent" sty>
                                            <label for="">Objection Note</label>
                                            <input class="form-control" type="text" name="objection_note" value="{{ old('objection_note') }}" class="form-control {{ isset($errors) && $errors->has('objection_note') ? 'has_error' : ''}}" id="" placeholder="" >
                                            @if($errors->has('objection_note'))
                                                <span class="error">{{ $errors->first('objection_note') }}<span>
                                            @endif
                                        </div>
                                    </div>
                                    <script>
                                        $('#visa_status').change(function() {
                                        if ($(this).val() == 4) {
                                            $('#showcontent').show();
                                        } else {
                                            $('#showcontent').hide();
                                        }
                                        });
                                    </script>
                                    <h6 class="add_file_section">Insurance Details</h6>
                                    <hr>
                                    <div class="row">
                                      <div class="form-group col-4">
                                            <label for="">Name</label>
                                            <input class="form-control" type="text" name="employer_name" value="{{ old('employer_name') }}" class="form-control {{ isset($errors) && $errors->has('employer_name') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('employer_name'))
                                                <span class="error">{{ $errors->first('employer_name') }}<span>
                                            @endif
                                        </div>

                                         <div class="form-group col-4">
                                            <label for="">Father Name/ Husband Name</label>
                                            <input class="form-control" type="text" name="nomination_name" value="{{ old('nomination_name') }}" class="form-control {{ isset($errors) && $errors->has('nomination_name') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('nomination_name'))
                                                <span class="error">{{ $errors->first('nomination_name') }}<span>
                                            @endif
                                        </div>

                                          <div class="form-group col-4">
                                            <label for="">Nomination Cnic</label>
                                            <input class="form-control" type="number" name="nomination_cnic" value="{{ old('nomination_cnic') }}" class="form-control {{ isset($errors) && $errors->has('nomination_cnic') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('nomination_cnic'))
                                                <span class="error">{{ $errors->first('nomination_cnic') }}<span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label for="">Relation</label>
                                            <input class="form-control" type="text" name="relation" value="{{ old('relation') }}" class="form-control {{ isset($errors) && $errors->has('relation') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('relation'))
                                                <span class="error">{{ $errors->first('relation') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">Gender</label>
                                            <select name="sex_nomination" id='sex_nomination' class="form-control select2 {{ isset($errors) && $errors->has('sex_nomination') ? 'has_error' : ''}}" style="width: 100%;">
                                                <option value="Male" selected="selected">Male</option>
                                                <option value="Female" >Female</option>
                                            </select>
                                            @if($errors->has('sex_nomination'))
                                                <span class="error">{{ $errors->first('sex_nomination') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-4">
                                            <label for="">Nomination Address</label>
                                            <input class="form-control" type="text" name="nomination_address" value="{{ old('nomination_address') }}" class="form-control {{ isset($errors) && $errors->has('nomination_address') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('nomination_address'))
                                                <span class="error">{{ $errors->first('nomination_address') }}<span>
                                            @endif
                                        </div>
                                    </div>

                                    <h6 class="add_file_section">Ticket Details</h6>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-3">
                                            <label for="">Airline Name</label>
                                            <input class="form-control" type="text" name="Airline_Name" value="{{ old('Airline_Name') }}" class="form-control {{ isset($errors) && $errors->has('Airline_Name') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('Airline_Name'))
                                                <span class="error">{{ $errors->first('Airline_Name') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-3">
                                            <label for="">Ticket Number</label>
                                            <input class="form-control" type="text" name="Ticket_no" value="{{ old('Ticket_no') }}" class="form-control {{ isset($errors) && $errors->has('Ticket_no') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('Ticket_no'))
                                                <span class="error">{{ $errors->first('Ticket_no') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-3">
                                            <label for="">Ticket From</label>
                                            <input class="form-control" type="text" name="Ticket_From" value="{{ old('Ticket_From') }}" class="form-control {{ isset($errors) && $errors->has('Ticket_From') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('Ticket_From'))
                                                <span class="error">{{ $errors->first('Ticket_From') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-3">
                                            <label for="">Ticket To</label>
                                            <input class="form-control" type="text" name="Ticket_To" value="{{ old('Ticket_To') }}" class="form-control {{ isset($errors) && $errors->has('Ticket_To') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('Ticket_To'))
                                                <span class="error">{{ $errors->first('Ticket_To') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">Date Of Departure</label>
                                            <input class="form-control" type="date" name="Date_Of_Departure" value="{{ old('Date_Of_Departure') }}" class="form-control {{ isset($errors) && $errors->has('Date_Of_Departure') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('Date_Of_Departure'))
                                                <span class="error">{{ $errors->first('Date_Of_Departure') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">Departure Time</label>
                                            <input class="form-control" type="text" name="Departure_Time" value="{{ old('Departure_Time') }}" class="form-control {{ isset($errors) && $errors->has('Ticket_From') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('Departure_Time'))
                                                <span class="error">{{ $errors->first('Departure_Time') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="">Arrival Time</label>
                                            <input class="form-control" type="text" name="Arrival_Time" value="{{ old('Arrival_Time') }}" class="form-control {{ isset($errors) && $errors->has('Arrival_Time') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('Arrival_Time'))
                                                <span class="error">{{ $errors->first('Arrival_Time') }}<span>
                                            @endif
                                        </div>
                                    </div>

                                    <h6 class="add_file_section">Passport Delivery</h6>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label for="">Passport Delivery Type</label>
                                            <select name="Passport_Delivery_Type" id='Passport_Delivery_Type' class="form-control select2 {{ isset($errors) && $errors->has('Passport_Delivery_Type') ? 'has_error' : ''}}" style="width: 100%;">
                                                <option value="Couriers" selected="selected">Couriers</option>
                                                <option value="Couriers" >By Hand</option>
                                            </select>
                                            @if($errors->has('Passport_Delivery_Type'))
                                                <span class="error">{{ $errors->first('Passport_Delivery_Type') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-3">
                                            <label for="">Passport Delivered To Name</label>
                                            <input class="form-control" type="text" name="Passport_Delivery_To_Name" value="{{ old('Passport_Delivery_To_Name') }}" class="form-control {{ isset($errors) && $errors->has('Passport_Delivery_To_Name') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('Passport_Delivery_To_Name'))
                                                <span class="error">{{ $errors->first('Passport_Delivery_To_Name') }}<span>
                                            @endif
                                        </div>

                                        <div class="form-group col-4">
                                            <label for="">Date Of Delivery</label>
                                            <input class="form-control" type="date" name="Date_Of_Delivery" value="{{ old('Date_Of_Delivery') }}" class="form-control {{ isset($errors) && $errors->has('Date_Of_Delivery') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('Date_Of_Delivery'))
                                                <span class="error">{{ $errors->first('Date_Of_Delivery') }}<span>
                                            @endif
                                        </div>
                                    </div>

                                    </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
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
