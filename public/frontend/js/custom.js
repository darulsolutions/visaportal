$(document).ready(function(){
    var date =  new Date(new Date().toLocaleString("en-US", {timeZone: "Asia/Karachi"}));
    var dd = date.getDate();
    var mm = date.getMonth()+1;
    var yy = date.getFullYear();
    var h  = date.getHours();
    var i  = date.getMinutes();
    var s  = date.getSeconds();

    if(dd < 10){
        dd = '0'+dd;
    }

    if(mm < 10 ){
        mm = '0'+mm;
    }

    if(h < 10){
        h = '0'+h;
    }

    if(i < 10 ){
        i = '0'+i;
    }

    if(s < 10 ){
        s = '0'+s;
    }

    date = dd + '-' + mm + '-' + yy + ' ' + h + ':' + i + ':' + s;
    $("input[name='date']").val(date);

    $(".add_file").on("click",function(){
    });

    $(".add_more_employment").on("click", function(){
        console.log($("div.foreign_employment_details ").length);
        $(".foreign_employment_details_section").append(`
        <div  class="foreign_employment_details">

        <hr>
        <div>
            <input type="button" value="Remove" class="btn_remove">
        </div>
        <br>

        <div class="row">
            <div class="form-group col-6">
                <label for="">Total Visas</label>
                <input type="number" name="total_visa[]" class="form-control" id="" placeholder="">
            </div>
            <div class="form-group col-6">
                <label>Occupation</label>
                <select name="category[]" class="form-control select2" style="width: 100%;">
                    <option value="1" >Category A /الفئة</option>
                    <option value="2">Category B /الفئة</option>
                </select>
            </div>
        </div>

        <div class="row">

            <div class="form-group col-6">
                <label for="">Salary</label>
                <div class="input-group-append">
                    <input type="number" name="salary[]" class="form-control" id="" placeholder="">
                    <select name="salary_unit[]" class="form-control select2">
                        <option value="Monthly" selected="selected">Monthly</option>
                        <option value="Daily Wages">Daily Wages</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-3">
                <label for="">Period Of Contract (Years)</label>
                <input type="text" name="contract_year[]" class="form-control" id="" placeholder="No of Years">
            </div>
            <div class="form-group col-3">
                <label for="">Period Of Contract (Months)</label>
                <input type="text" name="contract_month[]" class="form-control" id="" placeholder="No of Months">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-1">
                <label>Commision</label>
                <select name="commision[]" class="form-control select2" style="width: 100%;">
                    <option value="Yes">Yes</option>
                    <option value="No"selected="selected">No</option>
                </select>
            </div>
            <!-- <div class="form-group col-4 hide" id="commision_detail_section">
                <label>Details</label>
                <input type="text" name="commision_detail[]" value="{{ old('commision_detail') }}" class="form-control">
                @if($errors->has('commision_detail'))
                    <span class="error">{{ $errors->first('commision_detail') }}<span>
                @endif
            </div> -->
            <div class="form-group col-1">
                <label>Overtime</label>
                <select name="overtime[]" value="{{ old('overtime') }}" class="form-control select2" style="width: 100%;">
                    <option value="Yes">Yes</option>
                    <option value="No" selected="selected">No</option>
                </select>
            </div>
            <div class="form-group col-2">
                <label>Free Accommodation</label>
                <select name="free_accommodation[]" class="form-control select2 details"
                    style="width: 100%;">
                    <option value="Yes">Yes</option>
                    <option value="No" selected="selected">No</option>
                </select>
            </div>
            <!-- <div class="form-group col-4 hide" id="free_accommodation_detail_section">
                <label>Details</label>
                <input type="text" name="free_accommodation_detail[]" value="{{ old('free_accommodation_detail') }}" class="form-control">
                @if($errors->has('free_accommodation_detail'))
                    <span class="error">{{ $errors->first('free_accommodation_detail') }}<span>
                @endif
            </div> -->
            <div class="form-group col-1">
                <label>Free Food</label>
                <select name="free_food[]" class="form-control select2 details"
                    style="width: 100%;">
                    <option value="Yes">Yes</option>
                    <option value="No" selected="selected">No</option>
                </select>
            </div>
            <!-- <div class="form-group col-4 hide" id="free_food_detail_section">
                <label>Details</label>
                <input type="text" name="free_food_detail[]" value="{{ old('free_food_detail') }}" class="form-control">
                @if($errors->has('free_food_detail'))
                    <span class="error">{{ $errors->first('free_food_detail') }}<span>
                @endif
            </div> -->
            <div class="form-group col-1">
                <label>Work Place City</label>
                <select name="working_place[]" class="form-control select2 details"
                    style="width: 100%;">
                    <option value="Makkah">Makkah</option>
                    <option value="Jeddah" selected="selected">Jeddah</option>
                </select>
            </div>
            <!-- <div class="form-group col-4 hide" id="working_place_detail_section">
                <label for="">Details</label>
                <input type="text" name="working_place_detail[]" value="{{ old('working_place_detail') }}" class="form-control">
                @if($errors->has('working_place_detail'))
                    <span class="error">{{ $errors->first('working_place_detail') }}<span>
                @endif
            </div> -->
            <div class="form-group col-2">
                <label>Duty Time(In Hours)</label>
                <input type="text" name="duty_time[]" class="form-control" id="" placeholder="No of Hours">
            </div>
            <div class="form-group col-1 hide" id="duty_time_detail_section">
                <label for="">Details</label>
                <input type="text" name="duty_time_detail[]" class="form-control" id="" placeholder="No of Months">
            </div>
            <div class="form-group col-1">
                <label>Other Benefits</label>
                <select name="other_benefits[]" class="form-control select2 details" style="width: 100%;">
                    <option value="Yes">Yes</option>
                    <option value="No" selected="selected">No</option>
                </select>
            </div>
            <!-- <div class="form-group col-4 hide" id="other_benefits_section">
                <label for="">Details</label>
                <input type="text" name="other_benefits_detail[]" value="{{ old('other_benefits_detail') }}" class="form-control" id="" placeholder="No of Months">
                @if($errors->has('other_benefits_detail'))
                    <span class="error">{{ $errors->first('other_benefits_detail') }}<span>
                @endif
            </div> -->
            <div class="form-group col-1">
                <label>Free Tickets</label>
                <select name="free_tickets[]" class="form-control select2" style="width: 100%;">
                    <option value="Yes">Yes</option>
                    <option value="No" selected="selected">No</option>
                </select>
            </div>
            <!-- <div class="form-group col-4 hide">
                <label for="">Details</label>
                <input type="text" name="free_tickets_detail[]" value="{{ old('free_tickets_detail') }}" class="form-control" id="free_tickets_detail_section" placeholder="No of Months">
                @if($errors->has('free_tickets_detail'))
                    <span class="error">{{ $errors->first('free_tickets_detail') }}<span>
                @endif
            </div> -->
            <div class="form-group col-1">
                <label>Medical Insurance</label>
                <select name="medical_insurance[]" class="form-control select2" style="width: 100%;">
                    <option value="Yes">Yes</option>
                    <option value="No" selected="selected">No</option>
                </select>
            </div>
            <!-- <div class="form-group col-4 hide">
                <label for="">Details</label>
                <input type="text" name="medical_insurance_detail[]" value="{{ old('medical_insurance_detail') }}" class="form-control" id="medical_insurance_detail_section" placeholder="No of Months">
                @if($errors->has('medical_insurance_detail'))
                    <span class="error">{{ $errors->first('medical_insurance_detail') }}<span>
                @endif
            </div> -->
            <div class="form-group col-1">
                <label>Transpotation</label>
                <select name="transportaion[]" class="form-control select2" style="width: 100%;">
                    <option value="Yes">Yes</option>
                    <option value="No" selected="selected">No</option>
                </select>
            </div>
            <!-- <div class="form-group col-4 hide">
                <label for="">Details</label>
                <input type="text" name="transportaion_detail[]" value="{{ old('transportaion_detail') }}" class="form-control" id="transportaion_detail_section" placeholder="No of Months">
                @if($errors->has('transportaion_detail'))
                    <span class="error">{{ $errors->first('transportaion_detail') }}<span>
                @endif
            </div> -->
        </div>
    </div>`
        );

        var employment_details=$("div.foreign_employment_details");
        for (var i = 0; i < $("div.foreign_employment_details").length; i++){

            var row=$(employment_details[i]).children();
            for (var j =0 ; j < $(employment_details[i]).children().length; j++){

                var div=$(row[j]).children();
                for (var k =0 ; k < $(row[j]).children().length; k++){
                    console.log($(div[k]));
                    // console.log($(div[0]).find("select").val());
                }

            }
        }
    });

    $("body").on("click",".btn_remove", function(){
        console.log("click");
        $this = $(this);
        var id = $this.attr("id");
        $(this).parents('div.foreign_employment_details').fadeOut();
        // $(".foreign_employment_details_"+id).remove();
        // foreign_employment_details_section
        // console.log(id);
    });

    // $(".btn_add_file").on("click", function(e){
    //    e.preventDefault();
    //     $this = $(this);

    // });

});
