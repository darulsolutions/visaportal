
  <div id="printableArea">

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
        To, <span class="dateToday"style="float: right;text-decoration:underline">Date: <span style="font-weight: 600;" id="demo">  </span> </span>  <br>
        The Director, <br>
        Protector of Emigrants<br>
        Karachi.

        </p>

        @php
        $categories = DB::table('categories')->get();
        $employer = DB::table('employer_details')->where('file_id',$FileList[0]->id)->get();
        $employment_details = DB::table('employment_details')->where('file_id',$FileList[0]->id)->get();
        @endphp
        <script>
        const months = ["JAN", "FEB", "MAR","APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];
        let current_datetime = new Date()
        let formatted_date = current_datetime.getDate() + "-" + months[current_datetime.getMonth()] + "-" + current_datetime.getFullYear()

        document.getElementById("demo").innerHTML = formatted_date;
        </script>
        <p>Subject: <span class="permission" style="text-decoration: underline;font-weight: 600; font-size: 18px;
      padding-left: 2%;">UNDERTAKING REGARDING ACTUAL EXPENDITURE ON RECRUITMENT</span></p>
      <p style="padding-left: 5%; font-size: 10px;">With reference to the BEOE, HQS letter No: BE-Ops (PCY) 68/2018 Dated 20-01-2020
        Regarding cost of Migration from Pakistan.
        </p>
        <p style="padding-left: 5%;font-size: 15px;font-size: 15px;">
        I undertake that following are the details of actual expenditures incurred without any profit/commission on the recruitment of intending emigrants for <span style="font-weight: bold;">

            {{ $employer[0]->name }}

        </span></p>
        <p> <span style="text-decoration: underline;" style="font-size: 15px;"> Categories:</span> (
            @foreach ($employment_details as $row)
                @forelse ($categories as $item)
                    @if ($item->id == $row->category_id)
                        {{ $item->name }},
                    @endif
                @empty

                @endforelse

            @endforeach
            )</p>
        <table style="width: 100%; border-collapse: collapse;text-align: center;">
            <tr style="border:1px solid;">
                <td style="border:1px solid">S.#</td>
                <td style="border:1px solid">Details</td>
                <td style="border:1px solid">Cost of <span style="font-weight: 600;"> (@foreach ($employment_details as $row)
                    @forelse ($categories as $item)
                        @if ($item->id == $row->category_id)
                            {{ $item->name }},
                        @endif
                    @empty

                    @endforelse

                @endforeach)</span> (RS)</td>
                <td style="border:1px solid black;width: 30px!important">  </td>
                <td style="border:1px solid black;width: 30px!important"></td>
                <td style="border:1px solid black;width: 30px!important"></td>
            </tr>
            <tr style="border:1px solid;">
                <td style="border:1px solid">1</td>
                <td style="border:1px solid;text-align: left;padding-left:10px">Air Ticketing</td>
                <td style="border:1px solid;font-weight: 600;">Candidate Purchase by Self </td>
                <td style="border:1px solid black;width: 30px!important">  </td>
                <td style="border:1px solid black;width: 30px!important"></td>
                <td style="border:1px solid black;width: 30px!important"></td>
            </tr>
            <tr style="border:1px solid;">
                <td style="border:1px solid">2</td>
                <td style="border:1px solid;text-align: left;padding-left:10px">Medical</td>
                <td style="border:1px solid;font-weight: 600;text-decoration: underline;">From Candidate </td>
                <td style="border:1px solid black;width: 30px!important">  </td>
                <td style="border:1px solid black;width: 30px!important"></td>
                <td style="border:1px solid black;width: 30px!important"></td>
            </tr>
            <tr style="border:1px solid;">
                <td style="border:1px solid">3</td>
                <td style="border:1px solid;text-align: left;padding-left:10px">Work Permit</td>
                <td style="border:1px solid;font-weight: 600;">Visa Arranged by Candidate </td>
                <td style="border:1px solid black;width: 30px!important">  </td>
                <td style="border:1px solid black;width: 30px!important"></td>
                <td style="border:1px solid black;width: 30px!important"></td>
            </tr>
            <tr style="border:1px solid;">
                <td style="border:1px solid">4</td>
                <td style="border:1px solid;text-align: left;padding-left:10px">Levy (If Applicable)</td>
                <td style="border:1px solid;font-weight: 600;">NILL </td>
                <td style="border:1px solid black;width: 30px!important">  </td>
                <td style="border:1px solid black;width: 30px!important"></td>
                <td style="border:1px solid black;width: 30px!important"></td>
            </tr>
            <tr style="border:1px solid;">
                <td style="border:1px solid">5</td>
                <td style="border:1px solid;text-align: left;padding-left:10px">Visa Expenditure </td>
                <td style="border:1px solid;font-weight: 600;text-decoration: underline;">5,000 </td>
                <td style="border:1px solid black;width: 30px!important">  </td>
                <td style="border:1px solid black;width: 30px!important"></td>
                <td style="border:1px solid black;width: 30px!important"></td>
            </tr>
            <tr style="border:1px solid;">
                <td style="border:1px solid">6</td>
                <td style="border:1px solid;text-align: left;padding-left:10px">Documentation Expenditure</td>
                <td style="border:1px solid;font-weight: 600;">800 </td>
                <td style="border:1px solid black;width: 30px!important">  </td>
                <td style="border:1px solid black;width: 30px!important"></td>
                <td style="border:1px solid black;width: 30px!important"></td>
            </tr>
            <tr style="border:1px solid;">
                <td style="border:1px solid">7</td>
                <td style="border:1px solid;text-align: left;padding-left:10px">Protector Fee</td>
                <td style="border:1px solid;font-weight: 600;">5,200 </td>
                <td style="border:1px solid black;width: 30px!important">  </td>
                <td style="border:1px solid black;width: 30px!important"></td>
                <td style="border:1px solid black;width: 30px!important"></td>
            </tr>
            <tr style="border:1px solid;">
                <td style="border:1px solid">8</td>
                <td style="border:1px solid;text-align: left;padding-left:10px">Service Charges</td>
                <td style="border:1px solid;font-weight: 600;">6,000 </td>
                <td style="border:1px solid black;width: 30px!important">  </td>
                <td style="border:1px solid black;width: 30px!important"></td>
                <td style="border:1px solid black;width: 30px!important"></td>
            </tr>
            <tr style="border:1px solid;">
                <td style="border:1px solid">9</td>
                <td style="border:1px solid;text-align: left;padding-left:10px">Other (Specify if any)</td>
                <td style="border:1px solid;font-weight: 600;text-decoration: underline;">NILL </td>
                <td style="border:1px solid black;width: 30px!important">  </td>
                <td style="border:1px solid black;width: 30px!important"></td>
                <td style="border:1px solid black;width: 30px!important"></td>
            </tr>
            <tr style="border:1px solid;">
                <td style="border:1px solid"></td>
                <td style="border:1px solid;font-weight: 600;">TOTAL</td>
                <td style="border:1px solid;font-weight: 600;text-decoration: underline;">17,000 </td>
                <td style="border:1px solid black;width: 30px!important">  </td>
                <td style="border:1px solid black;width: 30px!important"></td>
                <td style="border:1px solid black;width: 30px!important"></td>
            </tr>
        </table>
        <p style="padding-left: 1%;padding-top:0px;font-size: 15px;">
            I also undertake that there are no any hidden charges including above mentioned details and there is no any involvement of middle man in the purchase of visas from the host country.
        </p>
        <p style="padding-top: -5px;font-weight: 600;text-decoration: underline;">
            M/s Bashir Ibrahim Enterprises
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
