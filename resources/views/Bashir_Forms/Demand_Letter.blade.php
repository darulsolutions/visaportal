<div id="printableArea5">
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

        <form action="" style="width: 100%;font-size: 15px;">

        <div style="float: left;">Ref.:<span style="text-decoration: underline">{{ $FileList[0]->id }}</span></div>
        <div style="float: right" > Date:<span> {{ date('d/m/y') }}</span></div>
        <p style="text-align: center;font-size: 30px;font-weight: 600;"> DEMAND LETTER</p>
        <div style="float: left;">We M/s.<span style="font-weight: bold;text-decoration: underline">  Bashir Ibrahim Enterprises </span></div>
        <div style="float: right">do hereby confirm that</div> <br>
        <p>we have authorized by our principal M/s.<span style="font-weight: bold;text-decoration: underline">  {{ $employer[0]->name }}</span>

            person for them against Visa No. <span style="font-weight: bold;text-decoration: underline">{{ $employer[0]->visa_number }}</span> Dated: <span style="font-weight: bold;text-decoration: underline">{{ $employer[0]->issue_date }}</span> on the terms and conditions mention below:
        </p>
        <div style="margin-bottom: 80px;">
        <div style="display: grid;grid-template-columns: repeat(4,1fr); border-bottom: 1px solid;">
            <div>CATEGORY:</div>
            <div>DEMAND:</div>
            <div>SALARY:</div>
            <div>OTHER BENEFITS CONTRACT:</div>

        </div>
        <div style="display: grid;grid-template-columns: repeat(4,1fr);">
            <div>@foreach ($employment_details as $row)
                @forelse ($categories as $item)
                    @if ($item->id == $row->category_id)
                    <span style="font-weight: bold">{{ $item->name }}</span>:<br>
                    @endif
                @empty

                @endforelse

            @endforeach</div>
            <div></div>
            <div style="font-size: 15px">@foreach ($employment_details as $row)
                @forelse ($categories as $item)
                    @if ($item->id == $row->category_id)
                        <span style="font-weight: bold">SAR {{ $row->salary }}</span><br>
                        @php
                            $total += $row->salary;
                        @endphp
                    @endif
                @empty

                @endforelse

            @endforeach</div>
            <div style="display: grid;grid-template-columns: repeat(2,1fr);">
                <div>FOOD,</div>
                <div>
                 2 YEARS
                </div>
            </div>

        </div>
        <div style="display: grid;grid-template-columns: repeat(4,1fr);">
            <div></div>
            <div></div>
            <div></div>
            <div>ACCOMMODATION,</div>
        </div>
        <div style="display: grid;grid-template-columns: repeat(4,1fr);;">
            <div></div>
            <div></div>
            <div></div>
            <div>MEDICAL,</div>
        </div>
        <div style="display: grid;grid-template-columns: repeat(4,1fr);;">
            <div></div>
            <div></div>
            <div></div>
            <div>TRANSPORT,</div>
        </div>
        <div style="display: grid;grid-template-columns: repeat(4,1fr);;">
            <div></div>
            <div></div>
            <div></div>
            <div>FREE AIR PASSAGE,</div>
        </div>
    </div>
        <div>-----------------------------</div>
        Total : {{ $total }}
        <div>-----------------------------</div>
        <span style="text-decoration: underline;">The above terms and condition have provided by the principal, fulfill by him in Case beach of any.</span> <br>
        <p>We hereby undertake on him behalf that terms and condition shall be fulfill by him, in case
            beach of any of the terms we shall be fully responsible for action the emigrants ordinance and
            rules 1979.</p>
        <p style="margin-bottom: 30px;"> <span style="font-weight:600">M/s.</span><span style="font-weight: bold"> Waqas Bashir</span></p>
        <p>Proprietor</p>
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
