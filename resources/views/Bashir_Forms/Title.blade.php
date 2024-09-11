
<div id="printableArea4">
    <style>
            thead { display: table-header-group; top: 0; height: 0px; line-height: 0px;}
            tfoot { display: table-footer-group; bottom: 0;height: 0px; line-height: 0px;}
            .box{
                background: #eaeaea;
                display: flex;
                align-items: top;
                justify-content: top;
                flex-basis: 17%;
                height: 100%;
                margin-bottom: 1em;
                margin-top: 0px;
                border: 5px outset orange;
            }
      </style>
    <table>
           <thead><tr><td style="color: white;z-index: -1;">
             |
           </td></tr></thead>
           <tbody>
             <tr><td>

    @php
    $categories = DB::table('categories')->get();
    $sender = DB::table('sender_details')->where('file_id',$FileList[0]->id)->get();
    $employer = DB::table('employer_details')->where('file_id',$FileList[0]->id)->get();
    $employment_details = DB::table('employment_details')->where('file_id',$FileList[0]->id)->get();

    $count = 0;
    @endphp
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <div class="formContainer box" >
        <form action="" style="width: 75%; font-size: 20px;padding: 10px;">
            <div style="margin-bottom: 30px;" class="row">
                <div class="col col-5">
                    File #: <span style="border-bottom: 1px solid;width: 100%;font-weight: bold;font-size: 35px">{{ $FileList[0]->id }} </span> <br>
                   </div>
                   <div class="col col-7">
                       Permission Number: <span style="border-bottom: 1px solid;width: 100%;font-weight: bold;">@isset($sender[0]->permission_number)
                        {{ $sender[0]->permission_number }}
                        @endisset   </span><br>
                       <!-- Permission Date: <span style="border-bottom: 1px solid;">08-01-2021   </span> -->
                   </div>
          </div>
          <div style="margin-bottom: 30px;" class="row">
            <div class="col col-5">
                Date:  <span style="border-bottom: 1px solid;width: 100%;font-weight: bold;">{{ $FileList[0]->created_at }}   </span>  <br> <br>
                <!-- Date:  <span style="border-bottom: 1px solid;">08-01-2021   </span>  <br> <br> -->
               </div>
               <div class="col col-7">
                   Permission Date: <span style="border-bottom: 1px solid;width: 100%;font-weight: bold;">@isset($sender[0]->permission_number)
                    {{ $sender[0]->permission_date }}
                @endisset </span>
               </div>
      </div>

<!--
        </div> -->
        <div class="content row">
           <div class="col col-5"> Kafil Name: </div>
           <div class="col col-7" style="margin-bottom: 10px;"> <span style="border-bottom: 1px solid;width: 100%;font-weight: bold; font-size: 25px">{{ $employer[0]->name }}   </span>  </div>
           <div class="col col-5">  Visa Category: </div>
           <div class="col col-7" style="margin-bottom: 10px;"><span style="border-bottom: 1px solid;width: 100%;font-weight: bold; font-size: 25px">
            @foreach ($employment_details as $row)
                @forelse ($categories as $item)
                    @if ($item->id == $row->category_id)
                            {{ $item->name }},
                            @php
                                $count = $count + $row->total_visa;
                            @endphp
                    @endif
                @empty

                @endforelse

            @endforeach
            </span></div>
            <div class="col col-5"> Total Visa: </div>
           <div class="col col-7" style="margin-bottom: 10px;"> <span style="border-bottom: 1px solid;width: 100%;font-weight: bold; font-size: 25px">{{ $count }}    </span> </div>
           <div class="col col-5">  Visa Sender: </div>
           <div class="col col-7" style="margin-bottom: 10px;"> <span style="border-bottom: 1px solid;width: 100%;font-weight: bold;"> @isset($sender[0]->name )
                    {{ $sender[0]->name }}
                @endisset   </span></div>
           <div class="col col-5">  Sender Phone: </div>
           <div class="col col-7" style="margin-bottom: 10px;"> <span style="border-bottom: 1px solid;width: 100%;font-weight: bold;">@isset($sender[0]->mobile_number)
                    {{ $sender[0]->mobile_number }}
                @endisset   </span> </div>
           <div class="col col-5"> Vias Number: </div>
           <div class="col col-7" style="margin-bottom: 10px;"> <span style="border-bottom: 1px solid;width: 100%;font-weight: bold;">{{ $employer[0]->visa_number }}   </span> </div>
           <div class="col col-5"> ID Number: </div>
           <div class="col col-7" style="margin-bottom: 10px;"> <span style="border-bottom: 1px solid;width: 100%;font-weight: bold;">{{ $employer[0]->id_number }}   </span></div>
           <div class="col col-5">Other Details:</div>
           <div class="col col-7" style="margin-bottom: 10px;">  <span style="border-bottom: 1px solid;width: 100%;font-weight: bold;">
            @isset($sender[0]->other_details )
                    {{ $sender[0]->other_details }}
                @endisset  </span> </div>
        </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</td></tr>
</tbody>
<tfoot>
    <tr><td style="color: white;z-index: -1;">
    |
    </td></tr>
</tfoot>
</table>


</div>
