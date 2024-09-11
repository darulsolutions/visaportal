
<div id="printableArea2">
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

$count = 0;
@endphp

      <div class="content">
          <div>
            <div class="mainSection"style="padding: 30px;font-size:20px">
                <form action="" style="width:70%;margin: 0 auto;">
                    <p style="text-align: center;font-weight: 600;text-decoration: underline;">APPLICATION UNDER RULE (19) OF EMIGRATION RULES 1979</p>
            <p>
                To,<br>
                The Protector of Emigrants, <br>
                Karachi.

            </p>
            <p>Subject: <span class="permission" style="text-decoration: underline;font-weight: 600;
            padding-left: 10%;">PERMISSION TO PROCESS EMPLOYMENT FOR ABROAD</span></p>
            <p>
                Dear Sir,
            </p>
            <p style="padding-left: 5%;">
                We have been advised by <span class="permission" style="text-decoration: underline;">M/s {{ $employer[0]->name }} </span>through <span class="permission" style="text-decoration: underline;"> M/s Bashir Ibrahim Enterprises </span> to process placement of workers, detailed below, for employment with them (Copies of demand letter attached).
            </p>
            <table style="width: 100%; border-collapse: collapse;text-align: center;">
                <tr style="border:1px solid;">
                    <td style="border:1px solid;font-weight: 600;">S.No.</td>
                    <td style="border:1px solid;font-weight: 600;">Category of Worker(s)</td>
                    <td style="border:1px solid;font-weight: 600;">Number required</td>
                    <td style="border:1px solid black;font-weight: 600"> Monthly Salary </td>
                    <td style="border:1px solid black;font-weight: 600">Contract Period</td>
                    <td style="border:1px solid black;font-weight: 600">Remarks</td>
                </tr>
                @foreach ($employment_details as $row)
                @php

                    $arr= explode(",",$row->contract_period);
                @endphp
                    @forelse ($categories as $item)
                        @if ($item->id == $row->category_id)
                            <tr style="border:1px solid;">
                                <td style="border:1px solid">{{ ++$count }}</td>
                                <td style="border:1px solid">{{ $item->name }}</td>
                                <td style="border:1px solid;font-weight: 600;">{{ $row->total_visa }} </td>
                                <td style="border:1px solid black;"> {{ $row->salary }} SAR</td>
                                <td style="border:1px solid black;">{{ $arr[0] }} YEARS</td>
                                <td style="border:1px solid black;width: 30px!important">{{ $row->other_benefits_detail }}</td>
                            </tr>
                        @endif
                    @empty

                    @endforelse

                @endforeach
            </table>
            <p style="margin-left: 2%;font-size: 15px;"> <span style="font-weight: 600;"> Other Fringe Benefits: </span>Accommodation Free: Food Free or 25% of the pay:
                Medical Free: Transport Free: Economy Class Round Air Trip Free or Free Passage
                Not provided: Return Air Passage Free: Overtime and other fringe benefits according to Local Labour Laws.
                </p>
                <p style="margin-left: 2%; font-size: 15px;">The process will be carried out through:</p>
                <p style="margin-left: 7%;font-size: 15px;">(a) Advertisement, Collection of CVs. Interview/Test and Recruitment <br>
                    (b) Advertisement, Interview/Test and Recruitment <br>
                    (c) Recruitment from left over CVs against a previous demand <br>
                    (d) Nominees of the employer <br>
        </p>
        <p style="margin-left: 2%;font-size: 15px;">The process will be completed in the following premises:</p>
        <p style="margin-left: 7%;font-size: 15px;">
            (i) Approved Head Office at ____________________ <br>
            (ii) Approved Branch Office at __________________ <br>
            (iii) Other place(s)  ___________________________ <br>

        </p>
        <p style="margin-left: 2%;margin-bottom: 70px;font-size: 15px;"> <span style="font-weight: 600;">NOTE: </span> Strike out which is nor relevant and authenticate it with stamp and signature.</p>

            <p style="text-align: end;font-size: 15px;"> Stamp & Signature of OEP</p>
            <p style="margin-left: 2%;font-size: 15px;"> The permission has been granted on the following conditions. The Permission is valid for 120 days. Please get it revalidated, of required, immediately on its expiry.</p>
            <p style="text-align: center;font-weight: 600;font-size: 15px;">OR</p>
            <p> <span style="font-weight: 600;margin-left: 2%;margin-bottom: 70px;font-size: 15px;">The</span>  permission has not been granted due to the following reasons:</p>
            <p style="text-align: end;font-size: 15px;">Protector of Emigrants</p>


            </form>
            </div>
            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        -->

    </div>
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
