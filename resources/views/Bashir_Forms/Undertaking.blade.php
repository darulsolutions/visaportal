<div id="printableArea6">
    <style>
            thead { display: table-header-group; top: 0; height: 150px; line-height: 150px;}
            tfoot { display: table-footer-group; bottom: 0;height: 150px; line-height: 150px;}
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
    $total = 0;
    @endphp

      <form action="" style="width: 80%;padding:10px" >
    <!-- <div class="row" style="font-weight: bold;">
        <div class="col">
            <img src="../bashir.JPG" alt="">
        </div>
        <div class="col">
            <img src="../bie.JPG" alt="">
        </div>
        <div class="col">
            <img src="../bashir arabic.JPG" alt="">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <span style="font-weight: bold;"> Karachi Office</span> <br>
            Office # 5 Ground Floor Trade Center, Blocl 7-8, <br>
            Baluch Colony, Shahrah-e-Faisal, Karachi. <br>
            Ph: +92-21 34388455-34388587, 34533519 Fax :+92-21-34525160

        </div>
        <div class="col">
            <span style="font-weight: bold;"> Rawalpindi Office</span> <br>
            Office # 1 & 2, 2nd Floor Al-Falah, Centre, Rehmanbad, <br> Satellite Town, Rawalpindi Ph : 92-51-4842058 <br>
            Fax :+92-51-4842059

        </div>

    </div>
    <div class="row" style="font-size: 15px; display: grid;grid-auto-flow: column;justify-content: start;">
        <span style="background-color: black;color: #fff;">
            E-mail : bashiribrahim1328@live.com,
        </span>
        <span style="background-color: black;color: #fff;">
            info@bieoep.com
        </span>
        <span style="background-color: black;color: #fff;">
            Web : www.bieoep.com
         </div>
    </span> -->
    <div class="innerSection "style="font-size:15px">
        <p style="text-align: center;font-size: 30px;text-decoration: underline;font-weight: bold;margin: 30px 0px;">Undertaking</p>
        <p>1. <span style="text-decoration: underline;font-weight: bold;"> Waqas Bashir </span> Proprietor / Managing, Partner / Director
        <span style="text-decoration: underline;font-weight: bold;">of M/s 	Bashir Ibrahim Enterprises</span>
        O.P.E. Lic. No 	<span style="text-decoration: underline;"> 1328 </span>	Have received a demand for
        @foreach ($employment_details as $row)
            @forelse ($categories as $item)
                @if ($item->id == $row->category_id)
                    @php
                        $total += $row->total_visa;
                    @endphp

                @endif
            @empty

            @endforelse

        @endforeach
        <span style="font-weight: bold">{{ $total }}</span>
        Worker Through
        Electronic Visa Slip from the Principal. <br>
        Whose Name. Address, Telephone & Fax No. E-mail Address are given below: <br>
        <span style="margin-left: 5%;">I Name of Employer <span style="margin-left: 5%;font-weight: bold">{{ $employer[0]->name }}</span> </span><br>
        <span style="margin-left: 5%;">II Address with P.O. Box <span style="margin-left: 5%;font-weight: bold">{{ $employer[0]->address }} </span></span> <br>
        <span style="margin-left: 5%;">III Telephone No  <span style="margin-left: 5%;font-weight: bold">{{ $employer[0]->phone_number }}</span>  </span> <br>
        <span style="margin-left: 5%;">Fax No 	 <span style="margin-left: 5%;font-weight: bold">{{ $employer[0]->fax_number }}</span>  </span> <br>
        <span style="margin-left: 5%;">E-mail 	  <span style="margin-left: 5%;font-weight: bold">{{ $employer[0]->email }}</span>  </span> <br>
        2. I undertake that the above information are correct and demand received through Electronic
        Visa slip is genuine. I we further undertake that . <br>
        <span style="margin-left: 5%;">I In the event of the aforesaid information being found false or incorrect in any  </span> <br>
        <span style="margin-left: 5%;">respect, the recruitment permission shall be liable to legal and disciplinary action.  </span> <br> <br> <br>
        <span style="margin-left: 5%;">II In case any worker proceeding abroad in according with the permission is unable   </span> <br>
        <span style="margin-left: 5%;">to secure job under the employment contract, I shall bear all the cost of his/her    </span> <br>
        <span style="margin-left: 5%;">repatriation     </span> <br>



        </p>
    </div>
        <span>
         <p style="text-align: center;font-weight: bold;"> (Seal & Signature of OEP)</p>
        </span>


</form>
</td></tr>
</tbody>
<tfoot>
    <tr><td style="color: white;z-index: -1;">
    |
    </td></tr>
</tfoot>
</table>


</div>
