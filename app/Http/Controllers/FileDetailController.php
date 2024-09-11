<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Models\FileDetail as FileDetail;
use App\Models\EmployerDetail as EmployerDetail;
use App\Models\EmploymentDetail as EmploymentDetail;
use App\Models\EmployeeDetail as EmployeeDetail;
use App\Models\SenderDetail as SenderDetail;
use App\Models\Category as Category;
use DB;

class FileDetailController extends Controller
{
    public function addFile(Request $request){

        if($request->country && $request->city){
            $rules = array(
                'country'                => 'required',
                'city'                   => 'required',
                'date'                   => 'required',
                'name'                   => 'required|max:255',
                'ar_name'                => 'required',
                'type'                   => 'required',
                'visa_number'            => 'required|max:50',
                'issue_date'             => 'required',
                'id_number'              => 'required|max:50',
                'employer_city'          => 'required',
                'address'                => 'required|max:255',
                'fax_number'             => 'required|max:50',
                'mobile_number'          => 'required|max:20',
                'phone_number'           => 'required|max:20',
                'email'                  => 'required|email|unique:employer_details|max:100',
                'website'                => 'required|max:50',
                'sender_name'            => 'required|max:100',
                'sender_nationality'     => 'required|max:50',
                'sender_mobile_number'   => 'required|max:10',
                'sender_city'            => 'required',
                'processing_recruitment' => 'required',
                'amount'                 => 'required',
                'other_expense'          => 'required|max:100',
                'other_details'          => 'required|max:100',
                'permission_number'      => 'required|max:50',
                'permission_date'        => 'required',

            );
            date_default_timezone_set("Asia/Karachi");
            $add_file = new FileDetail;
            $add_file->country_id  = $request->country;
            $add_file->city_id     = $request->city;
            $add_file->status_id   = 1;
            $add_file->created_at  = date('Y-m-d H:i:s');
            $add_file->save();

            if($add_file->id){

                $add_employer = new EmployerDetail;
                $add_employer->file_id       = $add_file->id;
                $add_employer->name          = $request->name;
                $add_employer->ar_name       = $request->ar_name;
                $add_employer->type          = $request->type;
                $add_employer->visa_number   = $request->visa_number;
                $add_employer->issue_date    = $request->issue_date;
                $add_employer->id_number     = $request->id_number;
                $add_employer->city_id       = $request->city;
                $add_employer->address       = $request->address;
                $add_employer->fax_number    = $request->fax_number;
                $add_employer->mobile_number = $request->mobile_number;
                $add_employer->phone_number  = $request->phone_number;
                $add_employer->email         = $request->email;
                $add_employer->website       = $request->website;
                $add_employer->save();

                if($add_employer->id){

                    for($i = 0; $i < count($request->category); $i++){

                        $add_employment = new EmploymentDetail;
                        $add_employment->file_id                   = $add_file->id;
                        $add_employment->category_id               = $request->category[$i];
                        $add_employment->job_title                 = $request->job_title[$i];
                        $add_employment->total_visa                = $request->total_visa[$i];
                        $add_employment->salary                    = $request->salary[$i];
                        $add_employment->salary_unit               = $request->salary_unit[$i];
                        $add_employment->commision                 = $request->commision[$i];
                        $add_employment->overtime                  = $request->overtime[$i];
                        $add_employment->contract_period           = $request->contract_year[$i].','.$request->contract_month[$i];
                        $add_employment->free_accommodation        = $request->free_accommodation[$i];
                        $add_employment->free_food                 = $request->free_food[$i];
                        $add_employment->working_place             = $request->working_place[$i];
                        $add_employment->duty_time                 = $request->duty_time[$i];
                        $add_employment->other_benefits            = $request->other_benefits[$i];
                        $add_employment->free_tickets              = $request->free_tickets[$i];
                        $add_employment->medical_insurance         = $request->medical_insurance[$i];
                        $add_employment->transportaion             = $request->transportaion[$i];
                        $add_employment->save();
                    }

                    if($add_employment->id){
                        $add_sender_detail = new SenderDetail;
                        $add_sender_detail->file_id           = $add_file->id;
                        $add_sender_detail->name              = $request->sender_name;
                        $add_sender_detail->nationality       = $request->sender_nationality;
                        $add_sender_detail->mobile_number     = $request->sender_mobile_number;
                        $add_sender_detail->city_id           = $request->sender_city;
                        $add_sender_detail->type              = $request->processing_recruitment;
                        $add_sender_detail->amount            = $request->amount;
                        $add_sender_detail->other_expense     = $request->other_expense;
                        $add_sender_detail->other_details     = $request->other_details;
                        $add_sender_detail->permission_number = $request->permission_number;
                        $add_sender_detail->permission_date   = $request->permission_date;
                        $add_sender_detail->save();

                        if($add_sender_detail->id){
                            // return "yes";
                            return redirect()->back()->with('success','File # '.$add_file->id.' has been added successfully.');
                        }
                        else{
                            return redirect()->back()->with('error','Error Occured');
                        }
                    }
                    else{
                        //Delete file
                        //Delete Employer
                        //Delete Employement
                    }
                }
                else{
                    //Delete file
                    //Delete Employer
                }
            }
            else{
            }

            // $json = array();
            // return response()->json($json);
        }
        else{
            $title = 'File Entry';
            $page  = 'File Entry';
            $link  = '';
            $categories = Category::all();
            return view('frontend.file.add_file',compact('title','page','link','categories'));
            // return redirect()->route('frontend.file.addFile')->with(compact('title','page','link'));
        }

    }
    public function file_permission_print($id){
        // DB::table('file_statuses')->insert(['status'=>'Approved']);
        // return "";
        $FileList =  FileDetail::select('*')->where('id',$id)->get();

        // dd($filesList);
        $title = 'Employee List';
        $page  = 'Employee List';
        $link  = '';
        return view('frontend.file.file_permission_print',compact('title','page','link','FileList'));
    }
    public function employeeList(){
        // DB::table('file_statuses')->insert(['status'=>'Approved']);
        // return "";
        $employeeList =  EmployeeDetail::select('*')->get();

        // dd($filesList);
        $title = 'Employee List';
        $page  = 'Employee List';
        $link  = '';
        return view('frontend.file.employee_listing',compact('title','page','link','employeeList'));
    }
    public function filesList(){
        // DB::table('file_statuses')->insert(['status'=>'Approved']);
        // return "";
        $filesList =  FileDetail::
                        select('*','file_details.id as id',
                                   'countries.name as country',
                                   'cities.name as city',
                                   'file_details.created_at as created_at')
                        ->Join('countries','countries.id','=','file_details.country_id')
                        ->Join('cities','cities.id','=','file_details.city_id')
                        ->get();

        // dd($filesList);
        $title = 'Files List';
        $page  = 'Files List';
        $link  = '';
        return view('frontend.file.file_listing',compact('title','page','link','filesList'));
    }
    public function employee_details($id = 2){
        // DB::table('file_statuses')->insert(['status'=>'Approved']);
        // return "";
        $employee_details = EmployeeDetail::select('*','employee_details.name as name','categories.name as category',
                                        'categories.ar_name as ar_category','cities.name as employer_city')
                                ->Join('categories','categories.id','=','employee_details.category_id')
                                ->Join('cities','cities.id','=','employee_details.employer_city_id')
                                ->where('employee_details.id',$id)
                                ->get();

        // dd($filesList);
        $title = 'EmployeeDetail';
        $page  = 'EmployeeDetail';
        $link  = '';
        return view('frontend.file.employee_details',compact('title','page','link','employee_details'));
    }

    public function addEmployee(Request $request){

        if($request->isMethod('post')){
            $employment = EmploymentDetail::where('category_id',$request->category)
                                        ->where('file_id',$request->id)
                                        ->get();


            if(count($employment) > 0){
            // return $employment[0]->total_visa;
            $employees = EmployeeDetail::where('category_id',$request->category)
                        ->where('file_id',$request->id)
                        ->get();
            if(count($employees) < $employment[0]->total_visa){
                $add_employee = new EmployeeDetail;

                $add_employee->file_id            =    $request->id;
                $add_employee->name               =    $request->name;
                $add_employee->father_name        =    $request->father_name;
                $add_employee->name_ar            =    $request->name;
                $add_employee->father_name_ar     =    $request->father_name;
                $add_employee->emp_phone          =    $request->emp_phone;
                $add_employee->cnic               =    $request->cnic;
                $add_employee->address            =    $request->address;
                $add_employee->district           =    $request->district;
                $add_employee->dob                =    $request->dob;
                $add_employee->pob                =    $request->pob;
                $add_employee->passport           =    $request->passport;
                $add_employee->passport_old       =    $request->passport_old;
                $add_employee->sex                =    $request->sex;
                $add_employee->married_status                =    $request->married_status;
                $add_employee->doi                =    $request->doi;
                $add_employee->poi                =    $request->poi;
                $add_employee->doe                =    $request->doe;
                $add_employee->province           =    $request->province;
                $add_employee->contract_period    =    $request->contract_period;
                $add_employee->category_id        =    $request->category;
                $add_employee->salary             =    $request->salary;
                $add_employee->salary_unit        =    $request->salary_unit;
                $add_employee->permission_number  =    $request->permission_number;
                $add_employee->permission_date               =    $request->permission_date;
                $add_employee->visa_status               =    $request->visa_status;
                $add_employee->objection_note               =    $request->objection_note;
                $add_employee->employer_name      =    $request->employer_name;
                $add_employee->E_Number           =    $request->E_Number;
                $add_employee->other_E_Number     =    $request->other_E_Number;
                $add_employee->E_Number_date      =    $request->E_Number_date;
                $add_employee->employer_city_id   =    $request->employer_city_id;
                $add_employee->recived_passport   =    $request->recived_passport;
                $add_employee->nomination_name    =    $request->nomination_name;
                $add_employee->nomination_cnic    =    $request->nomination_cnic;
                $add_employee->relation           =    $request->relation;
                $add_employee->nomination_address =    $request->nomination_address;
                $add_employee->Airline_Name =    $request->Airline_Name;
                $add_employee->emp_date           =    $request->emp_date;
                $add_employee->sex_nomination     =    $request->sex_nomination;
                $add_employee->Ticket_no     =    $request->Ticket_no;
                $add_employee->Ticket_From     =    $request->Ticket_From;
                $add_employee->Ticket_To     =    $request->Ticket_To;
                $add_employee->Date_Of_Departure     =    $request->Date_Of_Departure;
                $add_employee->Departure_Time     =    $request->Departure_Time;
                $add_employee->Arrival_Time     =    $request->Arrival_Time;
                $add_employee->Passport_Delivery_Type     =    $request->Passport_Delivery_Type;
                $add_employee->Passport_Delivery_To_Name     =    $request->Passport_Delivery_To_Name;
                $add_employee->Date_Of_Delivery     =    $request->Date_Of_Delivery;
                $add_employee->created_at  = date('Y-m-d H:i:s');
                $add_employee->save();

                if($add_employee->id){
                    return "Employee Added";

                }
            }
            else{
                return "You can't add more employment";
                return redirect()->back()->with('error',"You can't add more employment");
            }

            }
            else{
                return 'No employment';
                return redirect()->back()->with('error','No employment');
            }
            return "Outside";
            $add_employee = new EmployeeDetail;

            $add_employee->file_id            =    $request->id;
            $add_employee->name               =    $request->name;
            $add_employee->father_name        =    $request->father_name;
            $add_employee->name_ar            =    $request->name;
            $add_employee->father_name_ar     =    $request->father_name;
            $add_employee->emp_phone          =    $request->emp_phone;
            $add_employee->cnic               =    $request->cnic;
            $add_employee->address            =    $request->address;
            $add_employee->district           =    $request->district;
            $add_employee->dob                =    $request->dob;
            $add_employee->pob                =    $request->pob;
            $add_employee->passport           =    $request->passport;
            $add_employee->passport_old       =    $request->passport_old;
            $add_employee->sex                =    $request->sex;
            $add_employee->married_status                =    $request->married_status;
            $add_employee->doi                =    $request->doi;
            $add_employee->poi                =    $request->poi;
            $add_employee->doe                =    $request->doe;
            $add_employee->province           =    $request->province;
            $add_employee->contract_period    =    $request->contract_period;
            $add_employee->category_id        =    $request->category;
            $add_employee->salary             =    $request->salary;
            $add_employee->salary_unit        =    $request->salary_unit;
            $add_employee->permission_number  =    $request->permission_number;
            $add_employee->permission_date               =    $request->permission_date;
            $add_employee->visa_status               =    $request->visa_status;
            $add_employee->objection_note               =    $request->objection_note;
            $add_employee->employer_name      =    $request->employer_name;
            $add_employee->E_Number           =    $request->E_Number;
            $add_employee->other_E_Number     =    $request->other_E_Number;
            $add_employee->E_Number_date      =    $request->E_Number_date;
            $add_employee->employer_city_id   =    $request->employer_city_id;
            $add_employee->recived_passport   =    $request->recived_passport;
            $add_employee->nomination_name    =    $request->nomination_name;
            $add_employee->nomination_cnic    =    $request->nomination_cnic;
            $add_employee->relation           =    $request->relation;
            $add_employee->nomination_address =    $request->nomination_address;
            $add_employee->Airline_Name =    $request->Airline_Name;
            $add_employee->emp_date           =    $request->emp_date;
            $add_employee->sex_nomination     =    $request->sex_nomination;
            $add_employee->Ticket_no     =    $request->Ticket_no;
            $add_employee->Ticket_From     =    $request->Ticket_From;
            $add_employee->Ticket_To     =    $request->Ticket_To;
            $add_employee->Date_Of_Departure     =    $request->Date_Of_Departure;
            $add_employee->Departure_Time     =    $request->Departure_Time;
            $add_employee->Arrival_Time     =    $request->Arrival_Time;
            $add_employee->Passport_Delivery_Type     =    $request->Passport_Delivery_Type;
            $add_employee->Passport_Delivery_To_Name     =    $request->Passport_Delivery_To_Name;
            $add_employee->Date_Of_Delivery     =    $request->Date_Of_Delivery;
            $add_employee->created_at  = date('Y-m-d H:i:s');
            $add_employee->save();
            if($add_employee->id){
                // EmployeeDetail EmployeeDetail

            }
            // $title = 'Add Employee';
            // $page  = 'Add Employee';
            // $link  = '';
            // return view('frontend.file.add_employee',compact('title','page','link'));
        }
        else{
            $title = 'Add Employee';
            $page  = 'Add Employee';
            $link  = '';
            if(!empty($request->id)){
                $id = $request->id;
                return view('frontend.file.add_employee',compact('title','page','link','id'));
            }
            return redirect()->back();
        }

    }

    public function fileDetails($id){

        if(isset($id) && !empty($id) && $id!=0)
        {
            // $fileDetails =  FileDetail::
            //             select('*',
            //                     'file_details.id as id',
            //                     'file_details.created_at as created_at',
            //                     'file_details.updated_at as updated_at',
            //                     'countries.name as country',
            //                     'cities.name as city',
            //                     'employer_details.name as name',
            //                     'employer_details.mobile_number as mobile_number',
            //                     'employer_details.type as type',
            //                     'employer_details.city_id as city_id',
            //                     'sender_details.name as sender_name',
            //                     'sender_details.mobile_number as sender_mobile_number',
            //                     'sender_details.type as sender_type',
            //                     'sender_details.city_id as sender_city_id')
            //             ->Join('employer_details','file_details.id','=','employer_details.file_id')
            //             ->Join('employment_details','file_details.id','=','employment_details.file_id')
            //             ->Join('sender_details','file_details.id','=','sender_details.file_id')
            //             ->Join('file_statuses','file_details.status_id','=','file_statuses.id')
            //             ->Join('countries','countries.id','=','file_details.country_id')
            //             ->Join('cities','cities.id','=','file_details.city_id')
            //             ->Join('categories','categories.id','=','employment_details.category_id')
            //             ->where('file_details.id',$id)
            //             ->get();

            $arr_details = array();
            $arr_details['fileDetails'] =  FileDetail::
                        select('*',
                                'file_details.id as id',
                                'countries.name as country',
                                'cities.name as city',
                                'file_details.created_at as created_at')
                        ->Join('file_statuses','file_details.status_id','=','file_statuses.id')
                        ->Join('countries','countries.id','=','file_details.country_id')
                        ->Join('cities','cities.id','=','file_details.city_id')
                        ->where('file_details.id',$id)
                        ->get();

            $arr_details['employerDetails'] = EmployerDetail::
                                select('*','cities.name as city','employer_details.name as name')
                                ->Join('cities','cities.id','=','employer_details.city_id')
                                ->where('file_id',$id)
                                ->get();

            $arr_details['employmentDetails'] = EmploymentDetail::
                                    select('*','categories.name as category','categories.ar_name as ar_category')
                                    ->Join('categories','categories.id','=','employment_details.category_id')
                                    ->where('file_id',$id)
                                    ->get();

            $arr_details['employeeDetails'] = EmployeeDetail::
                                    select('*','employee_details.name as name','categories.name as category',
                                               'categories.ar_name as ar_category','cities.name as employer_city')
                                    ->Join('categories','categories.id','=','employee_details.category_id')
                                    ->Join('cities','cities.id','=','employee_details.employer_city_id')
                                    ->where('file_id',$id)
                                    ->get();
            $arr_details['senderDetails'] = SenderDetail::
                                    select('*','sender_details.name as name','cities.name as city')
                                    ->Join('cities','cities.id','=','sender_details.city_id')
                                    ->where('file_id',$id)
                                    ->get();

            $title = 'File Details';
            $page  = 'File Details';
            $link  = '';
            // return $arr_details;
            return view('frontend.file.file_details',compact('title','page','link','arr_details'));
        }
        else{
            return redirect()->back();
        }
    }

    public function employeeDetails($id){

        if(isset($id) && !empty($id) && $id!=0)
        {
            $arr_details = array();
            $arr_details['fileDetails'] = array();
            $arr_details['employerDetails'] = array();
            $arr_details['employmentDetails'] = array();
            $arr_details['senderDetails'] = array();

            $arr_details['employeeDetails'] = EmployeeDetail::
                                        select('*','categories.name as category','cities.name as employer_city')
                                        ->Join('categories','categories.id','=','employee_details.category_id')
                                        ->Join('cities','cities.id','=','employee_details.employer_city_id')
                                        ->where('employee_details.id',$id)
                                        ->get();

            if(!empty($arr_details['employeeDetails'])){

                $arr_details['fileDetails'] =  FileDetail::
                            select('*',
                                    'file_details.id as id',
                                    'countries.name as country',
                                    'cities.name as city')
                            ->Join('file_statuses','file_details.status_id','=','file_statuses.id')
                            ->Join('countries','countries.id','=','file_details.country_id')
                            ->Join('cities','cities.id','=','file_details.city_id')
                            ->where('file_details.id',$arr_details['employeeDetails'][0]->file_id)
                            ->get();

                if(!empty($arr_details['fileDetails'])){
                    $arr_details['employerDetails'] = EmployerDetail::
                                        select('*','cities.name as city','employer_details.name as name')
                                        ->Join('cities','cities.id','=','employer_details.city_id')
                                        ->where('employer_details.file_id',$arr_details['fileDetails'][0]->id)
                                        ->get();

                    $arr_details['employmentDetails'] = EmploymentDetail::
                                            select('*','categories.name as category')
                                            ->Join('categories','categories.id','=','employment_details.category_id')
                                            ->where('file_id',$arr_details['fileDetails'][0]->id)
                                            ->get();


                    $arr_details['senderDetails'] = SenderDetail::
                                            select('*','cities.name as city')
                                            ->Join('cities','cities.id','=','sender_details.city_id')
                                            ->where('file_id',$arr_details['fileDetails'][0]->id)
                                            ->get();
                }

                $title = 'File Details';
                $page  = 'File Details';
                $link  = '';
                return $arr_details;
                return view('frontend.file.file_details',compact('title','page','link','fileDetails'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect()->back();
        }
    }

    public function updatefileStatus($file_id , $status){
        // return $file_id.' '.$status;
        if(!empty($file_id) && !empty($status)){

            $updatefileStatus =  FileDetail::where('id',$file_id)->update(['status_id'=>$status]);
            if($updatefileStatus){
                return "File Status has been updated succesfully.";
            }
        }
        else{
            return redirect()->back();
        }
    }


}
