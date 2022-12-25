<?php require("header.php");?>
<?php require("./database/connection.php");?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-warning h6 text-center mt-2">
                Town Polytechnic Form....
            </div>

            <div class="card">
                <div class="card-body">
                <form id="myForm">
                    <div class="sci_content">

                        <div class="form-group">
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="sci_journls">
                        <label class="custom-control-label" for="sci_journls"> Publication in SCI Journls</label>
                        </div>
                        </div>

                        <div class="table-responsive" id="sci_journls_table">  
                            <table class="table table-info">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>
                                            S.No
                                        </th>
                                        <th>
                                            Paper Headline
                                        </th>
                                        <th>
                                            Publication Name
                                        </th>
                                        <th>
                                            Publication Year
                                        </th>
                                        <th>
                                            Publication Type (National / International)
                                        </th>
                                        <th>
                                            ISBN/ISSN
                                        </th>

                                    </tr>
                                </thead>

                                <tbody id="sci_journl_tbody">
                                    <tr class="sci_journl_tr" id="sci_journl_tr1">
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_sci_journl sci_journl_paper_heading" id="sci_journl_1_paper_headline">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_sci_journl sci_journl_publ_name" id="sci_journl_1_publ_name">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_sci_journl sci_journl_publ_year" id="sci_journl_1_publ_year">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_sci_journl sci_journl_publ_type" id="sci_journl_1_publ_type">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_sci_journl sci_journl_publ_isbn_issn" id="sci_journl_1_isbn_issn">
                                        </td>

                                    </tr>
                                </tbody>


                            </table> 

                            <div class="text-right">
                            <button type="button" id="delete_sci_journl_row" class="btn btn-danger btn-sm">-</button>
                                <button type="button" id="add_sci_journl_row" class="btn btn-success btn-sm">+</button>
                                
                            </div>

                        </div>
                        <!-- table div -->

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>

                        
                    </div>

                    <div class="nonsci">
                        <!-- //non sci -->
                        <div class="form-group">
                       

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"  id="nonSci_journls">
                                <label class="form-check-label" for="nonSci_journls">
                                Non SC 2 Journls (UGC/AICTE) Approval jounerals
                                </label>
                            </div>
                        </div>

                        <div class="table-responsive" id="nonSci_journls_table">  
                            <table class="table table-info">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>
                                            S.No
                                        </th>
                                        <th>
                                            Paper Headline
                                        </th>
                                        <th>
                                            Publication Name
                                        </th>
                                        <th>
                                            Publication Year
                                        </th>
                                        <th>
                                            Publication Type (National / International)
                                        </th>
                                        <th>
                                            ISBN/ISSN
                                        </th>

                                    </tr>
                                </thead>

                                <tbody id="nonSci_journl_tbody">
                                    <tr class="nonSci_journl_tr" id="nonSci_journl_tr1">
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_nonSci_journl nonSci_journl_paper_heading" id="nonSci_journl_1_paper_headline">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_nonSci_journl nonSci_journl_publ_name" id="nonSci_journl_1_publ_name">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_nonSci_journl nonSci_journl_publ_year" id="nonSci_journl_1_publ_year">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_nonSci_journl nonSci_journl_publ_type" id="nonSci_journl_1_publ_type">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_nonSci_journl nonSci_journl_publ_isbn_issn" id="nonSci_journl_1_isbn_issn">
                                        </td>

                                    </tr>
                                </tbody>


                            </table> 

                            <div class="text-right">
                            <button type="button" id="delete_nonSci_journl_row" class="btn btn-danger btn-sm">-</button>
                                <button type="button" id="add_nonSci_journl_row" class="btn btn-success btn-sm">+</button>
                                
                            </div>

                        </div>
                        <!-- table nonSci div -->

                        

                    
                    </div>
                    <!-- non sci end -->
                </form>
                </div>

            </div>


            

        </div>
        <!-- col -->
    </div>
</div>




<?php require("footer.php");?>
<script>

    $(document).ready(function(){

        // for sci journls start

        var sci_jourml_num=1;

        $("#sci_journls").change(function(){

            // var checkedValue = document.querySelector('#sci_journls:checked').value;
            // $("#sci_journls:checked").val()
            var sci_journlsValue = $('#sci_journls:checked').val();
            if(sci_journlsValue == 'on'){
                
                $("#sci_journls_table").removeClass("d-none")
                
            }else{
                $("#sci_journls_table").addClass("d-none")
                // alert("undifine")
            }
        });

        $("#add_sci_journl_row").click(function() {
            sci_jourml_num = sci_jourml_num + 1;
            
            let createHtml ="<tr  class='sci_journl_tr' id='sci_journl_tr"+sci_jourml_num+"'>";
            createHtml +="<td>"+sci_jourml_num+"</td>";
             createHtml +="<td><input type='text' class='form-control commonClass_sci_journl sci_journl_paper_heading' id='sci_journl_"+sci_jourml_num+"__paper_headline'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_sci_journl sci_journl_publ_name' id='sci_journl_"+sci_jourml_num+"_publ_name'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_sci_journl sci_journl_publ_year' id='sci_journl_"+sci_jourml_num+"_publ_year'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_sci_journl sci_journl_publ_type' id='sci_journl_"+sci_jourml_num+"_publ_type'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_sci_journl sci_journl_publ_isbn_issn' id='sci_journl_"+sci_jourml_num+"_publ_isbn_issn'></td>";
             
             createHtml += "</tr>";
             
             $("#sci_journl_tbody").append(createHtml);
            
            });

            
            $("#delete_sci_journl_row").click(function() {

                if(sci_jourml_num > 1){
                    $("#sci_journl_tr"+sci_jourml_num).remove();
                    sci_jourml_num = sci_jourml_num - 1;

                }            
        });

        $(".commonClass_sci_journl").keypress(function(params) {
            // console.log(params)
            // let $this = $(this);
           
           if (params.which == 44) {
                params.preventDefault();
           }else{

           $("#"+$(this).attr("id")).css("border","1px solid #ced4da");
           $("#"+$(this).attr("id")).prop("placeholder","");

           }

        })

        
        $("#myForm").submit(function(params) {
            params.preventDefault();
            var sci_journlsValue = $('#sci_journls:checked').val();

            var sci_journl_paper_headline = ''
            var sci_journl_publ_name = ''
            var sci_journl_publ_year = ''
            var sci_journl_publ_type = ''
            var sci_journl_publ_isbn_issn = ''
           
            if(sci_journlsValue == 'on'){
                var tmp_sci_journl_paper_headline = [];
                var tmp_sci_journl_publ_name = [];
                var tmp_sci_journl_publ_year = [];
                var tmp_sci_journl_publ_type = [];
                var tmp_sci_journl_publ_isbn_issn = []; 
                let error_list =[];              

                $('.sci_journl_paper_heading').each(function(){
                    let val = $(this).val().trim();
                    if(val== '' || val == undefined || val == null){
                        error_list.push($(this).attr("id"))
                    }
                    tmp_sci_journl_paper_headline.push(val);
                });

                console.log("err",error_list)

                
                $('.sci_journl_publ_name').each(function(){
                    let val = $(this).val().trim();

                    if(val== '' || val == undefined || val == null){
                        error_list.push($(this).attr("id"))
                    }

                    tmp_sci_journl_publ_name.push(val);
                });

                $('.sci_journl_publ_year').each(function(){
                    let val = $(this).val().trim();

                    if(val== '' || val == undefined || val == null){
                        error_list.push($(this).attr("id"))
                    }

                    tmp_sci_journl_publ_year.push(val);
                });

                $('.sci_journl_publ_type').each(function(){
                    let val = $(this).val().trim();
                    if(val== '' || val == undefined || val == null){
                        error_list.push($(this).attr("id"))
                    }
                    tmp_sci_journl_publ_type.push(val);
                });

                $('.sci_journl_publ_isbn_issn').each(function(){
                    let val = $(this).val().trim();

                    if(val== '' || val == undefined || val == null){
                        error_list.push($(this).attr("id"))
                    }

                    tmp_sci_journl_publ_isbn_issn.push(val);
                });                
                
                console.log(tmp_sci_journl_paper_headline);
                console.log(tmp_sci_journl_publ_name);
                console.log(tmp_sci_journl_publ_year);
                console.log(tmp_sci_journl_publ_type);
                console.log(tmp_sci_journl_publ_isbn_issn);

                sci_journl_paper_headline = tmp_sci_journl_paper_headline.join(",");
                sci_journl_publ_name = tmp_sci_journl_publ_name.join(",");
                sci_journl_publ_year = tmp_sci_journl_publ_year.join(",");
                sci_journl_publ_type = tmp_sci_journl_publ_type.join(",");
                sci_journl_publ_isbn_issn = tmp_sci_journl_publ_isbn_issn.join(",");

                console.log("after join the array====");

                console.log(sci_journl_paper_headline);
                console.log(sci_journl_publ_name);
                console.log(sci_journl_publ_year);
                console.log(sci_journl_publ_type);
                console.log(sci_journl_publ_isbn_issn);


                if(error_list.length != 0){
                    // alert("erro");
                    for(let i=0 ; i < error_list.length ; i++){

                    $("#"+error_list[i]).css("border","2px solid red"); //normal 1px solid #ced4da;
                    $("#"+error_list[i]).prop("placeholder","Error ! Fill this box..");
                    }
                }else{

                    $(".commonClass_sci_journl").css("border","1px solid #ced4da");

                    console.log("All Right")

                }


            }
            

            
        });

        // for sci journls end

        


    });

</script>

<script>

    $(document).ready(function(){

        // for nonSci journls start

        var nonSci_jourml_num=1;

        $("#nonSci_journls").change(function(){

           
            var nonSci_journlsValue = $('#nonSci_journls:checked').val();
            if(nonSci_journlsValue == 'on'){
                
                $("#nonSci_journls_table").removeClass("d-none")
                
            }else{
                $("#nonSci_journls_table").addClass("d-none")
                // alert("undifine")
            }
        });

        $("#add_nonSci_journl_row").click(function() {
            nonSci_jourml_num = nonSci_jourml_num + 1;
            
            let createHtml ="<tr  class='nonSci_journl_tr' id='nonSci_journl_tr"+nonSci_jourml_num+"'>";
            createHtml +="<td>"+nonSci_jourml_num+"</td>";
             createHtml +="<td><input type='text' class='form-control commonClass_nonSci_journl nonSci_journl_paper_heading' id='nonSci_journl_"+nonSci_jourml_num+"__paper_headline'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_nonSci_journl nonSci_journl_publ_name' id='nonSci_journl_"+nonSci_jourml_num+"_publ_name'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_nonSci_journl nonSci_journl_publ_year' id='nonSci_journl_"+nonSci_jourml_num+"_publ_year'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_nonSci_journl nonSci_journl_publ_type' id='nonSci_journl_"+nonSci_jourml_num+"_publ_type'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_nonSci_journl nonSci_journl_publ_isbn_issn' id='nonSci_journl_"+nonSci_jourml_num+"_publ_isbn_issn'></td>";
             
             createHtml += "</tr>";
             
             $("#nonSci_journl_tbody").append(createHtml);
            
            });

            
            $("#delete_nonSci_journl_row").click(function() {

                if(nonSci_jourml_num > 1){
                    $("#nonSci_journl_tr"+nonSci_jourml_num).remove();
                    nonSci_jourml_num = nonSci_jourml_num - 1;

                }            
        });

        $(".commonClass_nonSci_journl").keypress(function(params) {
            // console.log(params)
            // let $this = $(this);
           
           if (params.which == 44) {
                params.preventDefault();
           }else{

           $("#"+$(this).attr("id")).css("border","1px solid #ced4da");
           $("#"+$(this).attr("id")).prop("placeholder","");

           }

        })

        
        $("#myForm").submit(function(params) {
            params.preventDefault();
            var nonSci_journlsValue = $('#nonSci_journls:checked').val();

            var nonSci_journl_paper_headline = ''
            var nonSci_journl_publ_name = ''
            var nonSci_journl_publ_year = ''
            var nonSci_journl_publ_type = ''
            var nonSci_journl_publ_isbn_issn = ''
           
            if(nonSci_journlsValue == 'on'){
                var tmp_nonSci_journl_paper_headline = [];
                var tmp_nonSci_journl_publ_name = [];
                var tmp_nonSci_journl_publ_year = [];
                var tmp_nonSci_journl_publ_type = [];
                var tmp_nonSci_journl_publ_isbn_issn = []; 
                let nonScierror_list =[];              

                $('.nonSci_journl_paper_heading').each(function(){
                    let val = $(this).val().trim();
                    if(val== '' || val == undefined || val == null){
                        nonScierror_list.push($(this).attr("id"))
                    }
                    tmp_nonSci_journl_paper_headline.push(val);
                });

                console.log("nonScierror_list err",nonScierror_list)

                
                $('.nonSci_journl_publ_name').each(function(){
                    let val = $(this).val().trim();

                    if(val== '' || val == undefined || val == null){
                        nonScierror_list.push($(this).attr("id"))
                    }

                    tmp_nonSci_journl_publ_name.push(val);
                });

                $('.nonSci_journl_publ_year').each(function(){
                    let val = $(this).val().trim();

                    if(val== '' || val == undefined || val == null){
                        nonScierror_list.push($(this).attr("id"))
                    }

                    tmp_nonSci_journl_publ_year.push(val);
                });

                $('.nonSci_journl_publ_type').each(function(){
                    let val = $(this).val().trim();
                    if(val== '' || val == undefined || val == null){
                        nonScierror_list.push($(this).attr("id"))
                    }
                    tmp_nonSci_journl_publ_type.push(val);
                });

                $('.nonSci_journl_publ_isbn_issn').each(function(){
                    let val = $(this).val().trim();

                    if(val== '' || val == undefined || val == null){
                        nonScierror_list.push($(this).attr("id"))
                    }

                    tmp_nonSci_journl_publ_isbn_issn.push(val);
                });                
                
              

                nonSci_journl_paper_headline = tmp_nonSci_journl_paper_headline.join(",");
                nonSci_journl_publ_name = tmp_nonSci_journl_publ_name.join(",");
                nonSci_journl_publ_year = tmp_nonSci_journl_publ_year.join(",");
                nonSci_journl_publ_type = tmp_nonSci_journl_publ_type.join(",");
                nonSci_journl_publ_isbn_issn = tmp_nonSci_journl_publ_isbn_issn.join(",");

                console.log("after nonSci join the array====");

                console.log(nonSci_journl_paper_headline);
                console.log(nonSci_journl_publ_name);
                console.log(nonSci_journl_publ_year);
                console.log(nonSci_journl_publ_type);
                console.log(nonSci_journl_publ_isbn_issn);


                if(nonScierror_list.length != 0){
                    // alert("erro");
                    for(let i=0 ; i < nonScierror_list.length ; i++){

                    $("#"+nonScierror_list[i]).css("border","2px solid red"); //normal 1px solid #ced4da;
                    $("#"+nonScierror_list[i]).prop("placeholder","Error ! Fill this box..");
                    }
                }else{

                    $(".commonClass_nonSci_journl").css("border","1px solid #ced4da");

                    console.log("All Right")

                }


            }
            

            
        });

        // myform nonsci journls end

        


    });

</script>