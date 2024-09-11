<div id="printableArea7">
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

    <form action=""style="padding:20px">
    <p style="text-align: center;font-weight: bold;">GOVERNMENT OF PAKISTAN </p>
    <P style="text-align: center;font-weight: bold;text-decoration: underline;">OFFICE OFTHE PROTECTOR OF EMIGRANTS, KÅRACHI</P>

        <div class="row">
            <!-- <div class="col col-sm-1">1.</div> -->
            <div class="col col-sm-1"> <span style="margin-right:5%">1.</span> Name of OEP <span style="margin-left: 50%;">M/s.</span></div>
            <div class="col col-sm-2" style="border-bottom: 1px solid;text-align: center;font-weight: 600;"> Bashir Ibrahim Enterprises</div>

        </div>
        <div class="row" style="margin-bottom: 20px;">
            <!-- <div class="col col-sm-1"></div> -->
            <div class="col col-sm-1"> <span style="margin-right:5%; color: #fff;">20.</span>with Licence No.</div>
            <div class="col col-sm-2" style="border-bottom: 1px solid;text-align: center;font-weight: 600;">1328 / KAR </div>

        </div>
        <!--  -->
        <div class="row">
            <!-- <div class="col col-sm-1">2.</div> -->
            <div class="col col-sm-2"> <span style="margin-right:5%">2</span> Name of Principal </div>
            <div class="col col-sm-2" style="border-bottom: 1px solid;border-bottom: 1px solid #000;color: white;"> Bashir Ibrahim Enterprises</div>

        </div>
        <div class="row" style="margin-bottom: 20px;">
            <!-- <div class="col col-sm-1"></div> -->
            <div class="col col-sm-1"><span style="margin-right:5%; color: #fff;">20.</span>with full address </div>
            <div class="col col-sm-2" style="border-bottom: 1px solid;text-align: center;">KSA </div>

        </div>
        <!--  -->
        <div class="row">
            <!-- <div class="col col-sm-1">3.</div> -->
            <div class="col col-sm-2"> <span style="margin-right:5%">3.</span> Whether Permission letter </div>
            <div class="col col-sm-2" style="border-bottom: 1px solid;border-bottom: 1px solid #000; text-align: center;"> Yes / No.</div>

        </div>
        <div class="row" style="margin-bottom: 20px;" >
            <!-- <div class="col col-sm-1"></div> -->
            <div class="col col-sm-1"><span style="margin-right:5%; color: #fff;">20.</span>signed by the OEP </div>
            <div class="col col-sm-2" style="border-bottom: 1px solid;">  </div>

        </div>
        <!--  -->
        <div class="row" style="margin-bottom: 20px;">
            <!-- <div class="col col-sm-1">4.</div> -->
            <div class="col col-sm-2"><span style="margin-right:5%">4.</span>Date of receipt </div>
            <div class="col col-sm-2" style="border-bottom: 1px solid;border-bottom: 1px solid #000; text-align: center;"> </div>

        </div>
        <!--  -->
        <div class="row">
            <!-- <div class="col col-sm-1">5.</div> -->
            <div class="col col-sm-2"><span style="margin-right:5%">5.</span>Country for which </div>
            <div class="col col-sm-2"> </div>

        </div>
        <div class="row"style="margin-bottom:20px">
            <!-- <div class="col col-sm-1"></div> -->
            <div class="col col-sm-1"><span style="margin-right:5%; color: #fff;">2.</span>recruitment is to be done </div>
            <div class="col col-sm-2" style="border-bottom: 1px solid;text-align: center;"> K.S.A </div>

        </div>
        <!--  -->
        <div class="row">
            <!-- <div class="col col-sm-1">6.</div> -->
            <div class="col col-sm-4"><span style="margin-right:5%">6.</span>CATEGORIES OF DEMAND </div>
            <div class="col col-sm-2"> i) Unskilled </div>
            <div class="col col-sm-2" style="border-bottom: 1px solid;">  </div>


        </div>
        <div class="row">
            <!-- <div class="col col-sm-1"></div> -->
            <div class="col col-sm-4"></div>
            <div class="col col-sm-2"> ii) Semiskilled</div>
            <div class="col col-sm-2" style="border-bottom: 1px solid;text-align: center;"> </div>

        </div>
        <div class="row">
            <!-- <div class="col col-sm-1"></div> -->
            <div class="col col-sm-4"></div>
            <div class="col col-sm-2"> iii) Skilled</div>
            <div class="col col-sm-2" style="border-bottom: 1px solid;text-align: center;"> </div>

        </div>
        <div class="row">
            <!-- <div class="col col-sm-1"></div> -->
            <div class="col col-sm-4"></div>
            <div class="col col-sm-2"> iv) Highly Skilled</div>
            <div class="col col-sm-2" style="border-bottom: 1px solid;text-align: center;"> </div>

        </div>
        <div class="row">
            <!-- <div class="col col-sm-1"></div> -->
            <div class="col col-sm-4"></div>
            <div class="col col-sm-2"> iv) Highly Qualified.</div>
            <div class="col col-sm-2" style="border-bottom: 1px solid;text-align: center;"> </div>

        </div>
        <div class="row"style="margin-bottom:20px">
            <!-- <div class="col col-sm-1"></div> -->
            <div class="col col-sm-4"></div>
            <div class="col col-sm-2"> <span style="color:#fff">6.</span> Total:</div>
            <div class="col col-sm-2" style="border-bottom: 1px solid;text-align: center;"> </div>

        </div>
        <!--  -->
        <div class="row">

            <!-- <div class="col col-sm-1">7.</div> -->
            <div class="col col-sm-1"> <span>7.</span> Status of Power of Attorney:</div>
            <div class="col col-sm-11">Duly Attested / Approved Principal / Electronic Wakala / Visa.</div>

        </div>
        <div class="row">

            <!-- <div class="col col-sm-1">7.</div> -->
            <div class="col col-sm-1"> <span>8.</span> Status of Demand Letter:</div>
            <div class="col col-sm-11">Duly Attested / Fax / Email / D/L from the OEP with U/T</div>

        </div>

        <div class="row">

            <!-- <div class="col col-sm-1">7.</div> -->
            <div class="col col-sm-2"> <span>9.</span> Whether Wages Favorable </div>
            <div class="col col-sm-7">________________Yes/No___________________</div>

        </div>
        <div class="row">

            <!-- <div class="col col-sm-1">7.</div> -->
            <div class="col col-sm-2"> <span>10.</span> Whether other fringe benefits </div>
            <div class="col col-sm-7">________________Yes/No___________________</div>

        </div>

        <div class="row">

            <!-- <div class="col col-sm-1">7.</div> -->
            <div class="col col-sm-2"> <span></span> are provided as in Bureau's </div>
            <div class="col col-sm-7">________________        <span style="color: white;">Yes/No</span>   ___________________</div>

        </div>

        <div class="row">

            <!-- <div class="col col-sm-1">11.</div> -->
            <div class="col col-sm-2"> <span></span> schedule Guaranteed. </div>
            <div class="col col-sm-7">________________        <span>Yes/No</span>   ___________________</div>

        </div>



        <div class="row">

            <!-- <div class="col col-sm-1">7.</div> -->
            <div class="col col-sm-2"> <span>11.</span> Whether visa available guaranteed </div>
            <div class="col col-sm-7">________________Yes/No___________________</div>

        </div>
        <div class="row">

            <!-- <div class="col col-sm-1">7.</div> -->
            <div class="col col-sm-2"> <span>12.</span> Whether selection be made </div>
            <div class="col col-sm-7">________________Yes/No___________________</div>

        </div>
        <div class="row">

            <!-- <div class="col col-sm-1">7.</div> -->
            <div class="col col-sm-2"> through advertisment </div>
            <!-- <div class="col col-sm-7">________________Yes/No___________________</div> -->

        </div>
        <div class="row">

            <!-- <div class="col col-sm-1">7.</div> -->
            <div class="col col-sm-5"> <span>13.</span> Observation / Recommendation </div>
            <!-- <div class="col col-sm-7">________________Yes/No___________________</div> -->

        </div>
        <div class="row">

            <!-- <div class="col col-sm-1">7.</div> -->
            <div class="col col-sm-5">  of dealing Officer:- Permission for _________________ worker(s) may please be granted</div>
            <!-- <div class="col col-sm-7">________________Yes/No___________________</div> -->

        </div>
        <div class="row">

            <!-- <div class="col col-sm-1">7.</div> -->
            <div class="col col-sm-12"> __________________________________________________________________________________ </div>
            <!-- <div class="col col-sm-7">________________Yes/No___________________</div> -->

        </div>
        <div class="row">

            <!-- <div class="col col-sm-1">7.</div> -->
            <div class="col col-sm-12"> __________________________________________________________________________________ </div>
            <!-- <div class="col col-sm-7">________________Yes/No___________________</div> -->

        </div>
        <div class="row">

            <!-- <div class="col col-sm-1">7.</div> -->
            <div class="col col-sm-12"> __________________________________________________________________________________ </div>
            <!-- <div class="col col-sm-7">________________Yes/No___________________</div> -->

        </div>
        <div class="row">

            <!-- <div class="col col-sm-1">7.</div> -->
            <div class="col col-sm-12"> __________________________________________________________________________________ </div>
            <!-- <div class="col col-sm-7">________________Yes/No___________________</div> -->

        </div>




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

