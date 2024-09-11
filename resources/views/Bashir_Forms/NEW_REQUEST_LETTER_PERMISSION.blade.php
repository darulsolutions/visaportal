
  <div id="printableArea3">

    @php
    $categories = DB::table('categories')->get();
    $sender = DB::table('sender_details')->where('file_id',$FileList[0]->id)->get();
    $employer = DB::table('employer_details')->where('file_id',$FileList[0]->id)->get();
    $employment_details = DB::table('employment_details')->where('file_id',$FileList[0]->id)->get();

    $count = 0;
    @endphp
    <style>
            thead { display: table-header-group; top: 0; height: 100px; line-height: 100px;}
            tfoot { display: table-footer-group; bottom: 0;height: 100px; line-height: 100px;}
      </style>
    <table>
           <thead><tr><td style="color: white;z-index: -1;">
             |
           </td></tr></thead>
           <tbody>
             <tr><td>
      <div class="mainSection"style="padding: 30px;font-size:20px">
        <form action="" style="width:70%;margin: 0 auto;">
        <p>
              To, <span class="dateToday"style="float: right;" >Date: <span id="demo1"></span> </span>  <br>
              The Protector of Emigrants; <br>
              Government of Pakistan; <br>
              Karachi;

          </p>
          <p>Subject: <span class="permission" style="text-decoration: underline;font-weight: 600;
            padding-left: 10%;">GRANT OF PERMISSION</span></p>
            <p style="padding-top:10px">
                Your Excellency,
            </p>
            <p>
                We request you to kindly grant the Permission No. <span style="font-weight: 600;">
                    @isset($sender[0]->permission_number)
                    {{ $sender[0]->permission_number }}
                    @endisset</span>  Dated: <span style="font-weight: 600;">
                        @isset($sender[0]->permission_number)
                        {{ $sender[0]->permission_date }}
                    @endisset</span> M/s <span style="font-weight: 600;"> {{ $employer[0]->name }}.</span> for enables us to interview and registration.


            </p>
            <p style="padding-top:10px">
                Furthermore, this is to inform you that we shall working for the protector process against this permission.
            </p>
            <p style="padding-top:20px">
                We have attached required documents with this letter and requested to kindly grant the permission.
            </p>
            <p style="padding-top: 100px;">
                BASHIR IBRAHIM ENTERPRISES <br>
                PROPRIETOR

            </p>
        </form>
      </div>

    </td></tr>
</tbody>
<tfoot>
    <tr><td style="color: white;z-index: -1;">
    |
    </td></tr>
</tfoot>
</table>

</div>
<script>
    const months = ["JAN", "FEB", "MAR","APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];
    let current_datetime = new Date()
    let formatted_date = current_datetime.getDate() + "-" + months[current_datetime.getMonth()] + "-" + current_datetime.getFullYear()

    document.getElementById("demo1").innerHTML = formatted_date;
    </script>
