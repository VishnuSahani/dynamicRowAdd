<?php 
ob_start();
require('head_section.php');



?>

<style>
  .loader{
    height:100%;
    width:100%;
    position:fixed;
    top:0;
    left:0;
    background:#838b83ad;
    z-index:10000;
}

.loader-spinner{
    margin: 20% auto;
    display:block;
    /* background:red; */
    /* height:100vh; */
}
</style>




<div id="loader_show" class="loader d-none">
    <div class="spinner-border text-primary loader-spinner " role="status">
      <span class="sr-only">Loading...</span>
    </div>
</div>

<script>
        $("#loader_show").addClass('d-none')

</script>

<?php 

if (@$_GET['course']=='')
{
  header('location:recruitment.php');
  exit();
}

 ?>
<script>
function respo()
{
    $('#ResponseModal').modal({
      backdrop: 'static'
    });
  }

</script>

<script>  
  
function ageCalculator() {  
    //collect input from HTML form and convert into date format  
    var userinput = document.getElementById("dob").value;  
    var dob = new Date(userinput);  
      
    //check user provide input or not  
    if(userinput==null || userinput==''){  
      document.getElementById("agecal").innerHTML = "**Choose a date please!";    
      return false;   
    }   
      
    //execute if user entered a date   
    else {  
    //extract and collect only date from date-time string  
    var mdate = userinput.toString(); 
     
    // var dobYear = parseInt(mdate.substring(0,4), 10);  
    // var dobMonth = parseInt(mdate.substring(5,7), 10);  
    // var dobDate = parseInt(mdate.substring(8,10), 10);  
    var dobYear = parseInt(mdate.substring(6,10), 10);  
    var dobMonth = parseInt(mdate.substring(3,5), 10);  
     var dobDate = parseInt(mdate.substring(0,2), 10);  
      
      
    //get the current date from system  
    var today = new Date("2015-07-01");  
    //date string after broking  
    var birthday = new Date(dobYear, dobMonth-1, dobDate);  
      
    //calculate the difference of dates  
    var diffInMillisecond = today.valueOf() - birthday.valueOf();  
  
    //convert the difference in milliseconds and store in day and year variable          
    var year_age = Math.floor(diffInMillisecond / 31536000000);  
    var day_age = Math.floor((diffInMillisecond % 31536000000) / 86400000);  
  
    //when birth date and month is same as today's date        
    if ((today.getMonth() == birthday.getMonth()) && (today.getDate() == birthday.getDate())) {  
            alert("Happy Birthday!");  
        }  
          
     var month_age = Math.floor(day_age/30);          
     day_ageday_age = day_age % 30;  
          
     var tMnt= (month_age + (year_age*12));  
     var tDays =(tMnt*30) + day_age;  
       
    //DOB is greater than today's date, generate an error: Invalid date    
     if (dob>today) {  
        document.getElementById("result").innerHTML = ("Invalid date input - Please try again!");  
      }  
      else {  
        //document.getElementById("result").innerHTML = year_age + " years " + month_age + " months " + day_age + " days" 
        document.reg.agecal.value=year_age + " years " + month_age + " months " + day_ageday_age + " days"  
      }  
   }  
}  
</script>

<style>
 .card-body a{
text-decoration:none;
}



</style>

<script type="text/javascript">
   $(document).ready(function(){ 
     $('#check-address').click(function(){ 
     if ($('#check-address').is(":checked")) {
      $('#cinputAddress').val($('#inputAddress').val());

       $('#cinputAddress2').val($('#inputAddress2').val());

         $('#cinputCity').val($('#inputCity').val());
         $('#cinputDist').val($('#inputDist').val());
         $('#cinputZip').val($('#inputZip').val());
         var country = $('#inputState option:selected').val();
         
      //$('#cinputState option[value='+country+']').attr('selected','selected');
      $("#cinputState option[value='"+country+"']").attr('selected','selected');
       
      
     } else { //Clear on uncheck
      $('#cinputAddress').val("");
       $('#cinputAddress2').val("");
       $('#cinputCity').val("");
       $('#cinputDist').val("");
       $('#cinputZip').val("");
       $('#cinputState option[value=""]').attr('selected','selected');
     };
    });
 
   });
</script>


<script type="text/javascript">



  function makeupper()
 {
 document.reg.stname.value=document.reg.stname.value.toUpperCase();
 }
  function makeupper2()
 {
 document.reg.fname.value=document.reg.fname.value.toUpperCase();
 }
  function makeupper3()
 {
 document.reg.mname.value=document.reg.mname.value.toUpperCase();
 }
  function makeupper222()
 {
 document.reg.caste.value=document.reg.caste.value.toUpperCase();
 }
  function makeupper4()
 {
 document.reg.email.value=document.reg.email.value.toLowerCase();
 }
 
 function makeupper5()
 {
 document.reg.loc.value=document.reg.loc.value.toUpperCase();
 }
  
 function makeupper6()
 {
 document.reg.dist.value=document.reg.dist.value.toUpperCase();
 }
   function makeupper7()
 {
 document.reg.fop.value=document.reg.fop.value.toUpperCase();
 }
   function makeupper8()
 {
 document.reg.inputAddress.value=document.reg.inputAddress.value.toUpperCase();
 }

  function makeupper9()
 {
 document.reg.inputAddress2.value=document.reg.inputAddress2.value.toUpperCase();
 }


 function makeupper10()
 {
 document.reg.inputCity.value=document.reg.inputCity.value.toUpperCase();
 }



 function makeupper11()
 {
 document.reg.inputDist.value=document.reg.inputDist.value.toUpperCase();
}

  function makeupper17()
 {
 document.reg.cinputDist.value=document.reg.cinputDist.value.toUpperCase();
 }

  function makeupper18()
 {
 document.reg.cinputAddress.value=document.reg.cinputAddress.value.toUpperCase();
 }

  function makeupper19()
 {
 document.reg.cinputAddress2.value=document.reg.cinputAddress2.value.toUpperCase();
 }


 function makeupper20()
 {
 document.reg.cinputCity.value=document.reg.cinputCity.value.toUpperCase();
 }
 
 
 /////////added/////////////////
function makeupper21()
 {
 document.reg.school1.value=document.reg.school1.value.toUpperCase();
 }
function makeupper21subject()
 {
 document.reg.itisubject.value=document.reg.itisubject.value.toUpperCase();
 }
 function makeupper21board()
 {
 document.reg.iti.value=document.reg.iti.value.toUpperCase();
 }

 function makeupper21school()
 {
 document.reg.schooliti.value=document.reg.schooliti.value.toUpperCase();
 }
  function makeupper22()
 {
 document.reg.school2.value=document.reg.school2.value.toUpperCase();
 }

function makeupper23()
 {
 document.reg.school3.value=document.reg.school3.value.toUpperCase();
 }

 function makeupper23xtwo()
 {
 document.reg.xtwoboard.value=document.reg.xtwoboard.value.toUpperCase();
 }

 function makeupper21xtwosubject()
 {
 document.reg.xtwosubject.value=document.reg.xtwosubject.value.toUpperCase();
 }

 function makeupper23pg()
 {
 document.reg.pschool3.value=document.reg.pschool3.value.toUpperCase();
 }

 function makeupper23phd()
 {
 document.reg.phschool3.value=document.reg.phschool3.value.toUpperCase();
 }


 function makeupper24()
 {
 document.reg.graduated.value=document.reg.graduated.value.toUpperCase();
 }

function makeupper24pg()
 {
 document.reg.pggraduated.value=document.reg.pggraduated.value.toUpperCase();
 }
function makeupper24phd()
 {
 document.reg.phdgraduated.value=document.reg.phdgraduated.value.toUpperCase();
 }

 function makeupperpan()
 {
 document.reg.pnum.value=document.reg.pnum.value.toUpperCase();
 }

//////////////////////////////
 
 
 
 
function ValidateAlpha(evt)
{
 var keycode=(evt.which)? evt.which: evt.keycode //check browser
 if((keycode>=65&&keycode<=91)|| keycode==32 ||(keycode>=97&&keycode<=122 || keycode==8))
 return true;
 return false;
} 
function Validanumber(evt)
{
var keycode=(evt.which)? evt.which: evt.keycode //check browser
if((keycode>=48&&keycode<=57)||keycode==8)
return true;
return false;
}
  
</script>
 <script>
function _(id)
{ 
return document.getElementById(id);
 }


function submitForm22(){
  var formdata = new FormData();

  // sci start

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

                    return
                }else{

                    $(".commonClass_sci_journl").css("border","1px solid #ced4da");

                    console.log("All Right")

                }


            }

  // sci end

//   non sci start


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




// non sci end

//  Conference Proceedings  start 

var confProValue = $('#confPro:checked').val();

            var confPro_paper_headline = ''
            var confPro_publ_name = ''
            var confPro_publ_year = ''
            var confPro_publ_type = ''
            var confPro_publ_isbn_issn = ''
           
            if(confProValue == 'on'){
                var tmp_confPro_paper_headline = [];
                var tmp_confPro_publ_name = [];
                var tmp_confPro_publ_year = [];
                var tmp_confPro_publ_type = [];
                var tmp_confPro_publ_isbn_issn = []; 
                let confProerror_list =[];              

                $('.confPro_paper_heading').each(function(){
                    let val = $(this).val().trim();
                    if(val== '' || val == undefined || val == null){
                        confProerror_list.push($(this).attr("id"))
                    }
                    tmp_confPro_paper_headline.push(val);
                });

                console.log("confProerror_list err",confProerror_list)

                
                $('.confPro_publ_name').each(function(){
                    let val = $(this).val().trim();

                    if(val== '' || val == undefined || val == null){
                        confProerror_list.push($(this).attr("id"))
                    }

                    tmp_confPro_publ_name.push(val);
                });

                $('.confPro_publ_year').each(function(){
                    let val = $(this).val().trim();

                    if(val== '' || val == undefined || val == null){
                        confProerror_list.push($(this).attr("id"))
                    }

                    tmp_confPro_publ_year.push(val);
                });

                $('.confPro_publ_type').each(function(){
                    let val = $(this).val().trim();
                    if(val== '' || val == undefined || val == null){
                        confProerror_list.push($(this).attr("id"))
                    }
                    tmp_confPro_publ_type.push(val);
                });

                $('.confPro_publ_isbn_issn').each(function(){
                    let val = $(this).val().trim();

                    if(val== '' || val == undefined || val == null){
                        confProerror_list.push($(this).attr("id"))
                    }

                    tmp_confPro_publ_isbn_issn.push(val);
                });                
                
              

                confPro_paper_headline = tmp_confPro_paper_headline.join(",");
                confPro_publ_name = tmp_confPro_publ_name.join(",");
                confPro_publ_year = tmp_confPro_publ_year.join(",");
                confPro_publ_type = tmp_confPro_publ_type.join(",");
                confPro_publ_isbn_issn = tmp_confPro_publ_isbn_issn.join(",");

                console.log("after conf Pro join the array====");

                console.log(confPro_paper_headline);
                console.log(confPro_publ_name);
                console.log(confPro_publ_year);
                console.log(confPro_publ_type);
                console.log(confPro_publ_isbn_issn);


                if(confProerror_list.length != 0){
                    // alert("erro");
                    for(let i=0 ; i < confProerror_list.length ; i++){

                    $("#"+confProerror_list[i]).css("border","2px solid red"); //normal 1px solid #ced4da;
                    $("#"+confProerror_list[i]).prop("placeholder","Error ! Fill this box..");
                    }
                }else{

                    $(".commonClass_confPro").css("border","1px solid #ced4da");

                    console.log("All Right")

                }


            }

            //  Conference Proceedings  end

//   book publication  start-->


            var book_publValue = $('#book_publ_check:checked').val();

            var book_publ_paper_headline = ''
            var book_publ_publ_name = ''
            var book_publ_publ_year = ''
            var book_publ_publ_type = ''
            var book_publ_publ_isbn_issn = ''
           
            if(book_publValue == 'on'){
                var tmp_book_publ_paper_headline = [];
                var tmp_book_publ_publ_name = [];
                var tmp_book_publ_publ_year = [];
                var tmp_book_publ_publ_type = [];
                var tmp_book_publ_publ_isbn_issn = []; 
                let book_publerror_list =[];              

                $('.book_publ_paper_heading').each(function(){
                    let val = $(this).val().trim();
                    if(val== '' || val == undefined || val == null){
                        book_publerror_list.push($(this).attr("id"))
                    }
                    tmp_book_publ_paper_headline.push(val);
                });

                console.log("book_publerror_list err",book_publerror_list)

                
                $('.book_publ_publ_name').each(function(){
                    let val = $(this).val().trim();

                    if(val== '' || val == undefined || val == null){
                        book_publerror_list.push($(this).attr("id"))
                    }

                    tmp_book_publ_publ_name.push(val);
                });

                $('.book_publ_publ_year').each(function(){
                    let val = $(this).val().trim();

                    if(val== '' || val == undefined || val == null){
                        book_publerror_list.push($(this).attr("id"))
                    }

                    tmp_book_publ_publ_year.push(val);
                });

                $('.book_publ_publ_type').each(function(){
                    let val = $(this).val().trim();
                    if(val== '' || val == undefined || val == null){
                        book_publerror_list.push($(this).attr("id"))
                    }
                    tmp_book_publ_publ_type.push(val);
                });

                $('.book_publ_publ_isbn_issn').each(function(){
                    let val = $(this).val().trim();

                    if(val== '' || val == undefined || val == null){
                        book_publerror_list.push($(this).attr("id"))
                    }

                    tmp_book_publ_publ_isbn_issn.push(val);
                });                
                
              

                book_publ_paper_headline = tmp_book_publ_paper_headline.join(",");
                book_publ_publ_name = tmp_book_publ_publ_name.join(",");
                book_publ_publ_year = tmp_book_publ_publ_year.join(",");
                book_publ_publ_type = tmp_book_publ_publ_type.join(",");
                book_publ_publ_isbn_issn = tmp_book_publ_publ_isbn_issn.join(",");

                console.log("after book_publ join the array====");

                console.log(book_publ_paper_headline);
                console.log(book_publ_publ_name);
                console.log(book_publ_publ_year);
                console.log(book_publ_publ_type);
                console.log(book_publ_publ_isbn_issn);


                if(book_publerror_list.length != 0){
                    // alert("erro");
                    for(let i=0 ; i < book_publerror_list.length ; i++){

                    $("#"+book_publerror_list[i]).css("border","2px solid red"); //normal 1px solid #ced4da;
                    $("#"+book_publerror_list[i]).prop("placeholder","Error ! Fill this box..");
                    }
                }else{

                    $(".commonClass_book_publ").css("border","1px solid #ced4da");

                    console.log("All Right")

                }


            }
            
//   book publication  end-->

            
//  national international seminar start -->

var national_semiValue = $('#national_semi_check:checked').val();

var national_semi_paper_headline = ''
var national_semi_publ_name = ''
var national_semi_publ_year = ''
var national_semi_publ_type = ''
var national_semi_publ_isbn_issn = ''

if(national_semiValue == 'on'){
    var tmp_national_semi_paper_headline = [];
    var tmp_national_semi_publ_name = [];
    var tmp_national_semi_publ_year = [];
    var tmp_national_semi_publ_type = [];
    var tmp_national_semi_publ_isbn_issn = []; 
    let national_semierror_list =[];              

    $('.national_semi_paper_heading').each(function(){
        let val = $(this).val().trim();
        if(val== '' || val == undefined || val == null){
            national_semierror_list.push($(this).attr("id"))
        }
        tmp_national_semi_paper_headline.push(val);
    });

    console.log("national_semierror_list err",national_semierror_list)

    
    $('.national_semi_publ_name').each(function(){
        let val = $(this).val().trim();

        if(val== '' || val == undefined || val == null){
            national_semierror_list.push($(this).attr("id"))
        }

        tmp_national_semi_publ_name.push(val);
    });

    $('.national_semi_publ_year').each(function(){
        let val = $(this).val().trim();

        if(val== '' || val == undefined || val == null){
            national_semierror_list.push($(this).attr("id"))
        }

        tmp_national_semi_publ_year.push(val);
    });

    $('.national_semi_publ_type').each(function(){
        let val = $(this).val().trim();
        if(val== '' || val == undefined || val == null){
            national_semierror_list.push($(this).attr("id"))
        }
        tmp_national_semi_publ_type.push(val);
    });

    $('.national_semi_publ_isbn_issn').each(function(){
        let val = $(this).val().trim();

        if(val== '' || val == undefined || val == null){
            national_semierror_list.push($(this).attr("id"))
        }

        tmp_national_semi_publ_isbn_issn.push(val);
    });                
    
  

    national_semi_paper_headline = tmp_national_semi_paper_headline.join(",");
    national_semi_publ_name = tmp_national_semi_publ_name.join(",");
    national_semi_publ_year = tmp_national_semi_publ_year.join(",");
    national_semi_publ_type = tmp_national_semi_publ_type.join(",");
    national_semi_publ_isbn_issn = tmp_national_semi_publ_isbn_issn.join(",");

    console.log("after national semi join the array====");

    console.log(national_semi_paper_headline);
    console.log(national_semi_publ_name);
    console.log(national_semi_publ_year);
    console.log(national_semi_publ_type);
    console.log(national_semi_publ_isbn_issn);


    if(national_semierror_list.length != 0){
        // alert("erro");
        for(let i=0 ; i < national_semierror_list.length ; i++){

        $("#"+national_semierror_list[i]).css("border","2px solid red"); //normal 1px solid #ced4da;
        $("#"+national_semierror_list[i]).prop("placeholder","Error ! Fill this box..");
        }
    }else{

        $(".commonClass_national_semi").css("border","1px solid #ced4da");

        console.log("All Right")

    }


}




//  national international seminar end -->


            


            formdata.append( "sci_journl_paper_headline", sci_journl_paper_headline );
            
            formdata.append( "sci_journl_publ_name", sci_journl_publ_name );
            formdata.append( "sci_journl_publ_year", sci_journl_publ_year );
            formdata.append( "sci_journl_publ_type", sci_journl_publ_type );
            formdata.append( "sci_journl_publ_isbn_issn", sci_journl_publ_isbn_issn );


            formdata.append( "nonSci_journl_paper_headline", nonSci_journl_paper_headline );
            
            formdata.append( "nonSci_journl_publ_name", nonSci_journl_publ_name );
            formdata.append( "nonSci_journl_publ_year", nonSci_journl_publ_year );
            formdata.append( "nonSci_journl_publ_type", nonSci_journl_publ_type );
            formdata.append( "nonSci_journl_publ_isbn_issn", nonSci_journl_publ_isbn_issn );


 formdata.append( "national_semi_paper_headline", national_semi_paper_headline );
  formdata.append( "national_semi_publ_name", national_semi_publ_name );
  formdata.append( "national_semi_publ_year", national_semi_publ_year );
  formdata.append( "national_semi_publ_type", national_semi_publ_type);
  formdata.append( "national_semi_publ_isbn_issn", national_semi_publ_isbn_issn);


  formdata.append( "book_publ_paper_headline", book_publ_paper_headline);
  formdata.append( "book_publ_publ_name", book_publ_publ_name);
  formdata.append( "book_publ_publ_year", book_publ_publ_year);
  formdata.append( "book_publ_publ_type", book_publ_publ_type);
  formdata.append( "book_publ_publ_isbn_issn", book_publ_publ_isbn_issn);



 formdata.append( "confPro_paper_headline", confPro_paper_headline);
  formdata.append( "confPro_publ_name", confPro_publ_name);
  formdata.append( "confPro_publ_year", confPro_publ_year);
  formdata.append( "confPro_publ_type", confPro_publ_type);
  formdata.append( "confPro_publ_isbn_issn", confPro_publ_isbn_issn);


  formdata.append( "sname", _("sname").value );
  formdata.append( "fname", _("fname").value );
  formdata.append( "mname", _("mname").value );
  formdata.append( "caste", _("caste").value );
  formdata.append( "gen", _("gen").value );
  formdata.append( "married", _("married").value );
  
  formdata.append( "cat", _("cat").value );
  formdata.append( "rel", _("rel").value );
  formdata.append( "mail", _("mail").value );
  formdata.append( "num", _("num").value );
  formdata.append( "anum", _("anum").value );
  formdata.append( "dob", _("dob").value );
  formdata.append( "agecal", _("agecal").value );
  formdata.append( "pnum", _("pnum").value );
  formdata.append( "cname", _("cname").value );
  
  ///////////////added/////////////////

  formdata.append( "xb", _("xb").value );
  formdata.append( "xs", _("xs").value );
  formdata.append( "xpassing", _("xpassing").value );
  formdata.append( "xsubject", _("xsubject").value );
  formdata.append( "xmarks", _("xmarks").value );
  formdata.append( "xobtmarks", _("xobtmarks").value );
  formdata.append( "xper", _("xper").value );

formdata.append( "iti", _("iti").value );
  formdata.append( "itis", _("itis").value );
  formdata.append( "itipassing", _("itipassing").value );
  formdata.append( "itisubject", _("itisubject").value );
  formdata.append( "itimarks", _("itimarks").value );
  formdata.append( "itiobtmarks", _("itiobtmarks").value );
  formdata.append( "itiper", _("itiper").value );



formdata.append( "xtwob", _("xtwob").value );
  formdata.append( "xtwo", _("xtwo").value );
  formdata.append( "xtwopassing", _("xtwopassing").value );
  formdata.append( "xtwosubject", _("xtwosubject").value );
  formdata.append( "xtwomarks", _("xtwomarks").value );
  formdata.append( "xtwoobtmarks", _("xtwoobtmarks").value );
  formdata.append( "xtwop", _("xtwop").value );


  formdata.append( "college", _("college").value );
  formdata.append( "cpassing", _("cpassing").value );
  formdata.append( "graduated", _("graduated").value );
  formdata.append( "cmarks", _("cmarks").value );
  formdata.append( "cobtmarks", _("cobtmarks").value );
  formdata.append( "cper", _("cper").value );


   formdata.append( "pcollege", _("pcollege").value );
  formdata.append( "pgpassing", _("pgpassing").value );
   formdata.append( "pggraduated", _("pggraduated").value );
  formdata.append( "pgmarks", _("pgmarks").value );
  formdata.append( "pgobtmarks", _("pgobtmarks").value );
  formdata.append( "pgper", _("pgper").value );
 

  formdata.append( "phcollege", _("phcollege").value );
  formdata.append( "phdpassing", _("phdpassing").value );
  formdata.append( "phdgraduated", _("phdgraduated").value );
  formdata.append( "phdmarks", _("phdmarks").value );
  formdata.append( "phdobtmarks", _("phdobtmarks").value );
  formdata.append( "phdper", _("phdper").value );
  formdata.append( "net", _("net").value );
  formdata.append( "gate", _("gate").value );
 
 ////////////dd//////////////////////

formdata.append( "ddno", _("ddno").value );
  formdata.append( "ddamount", _("ddamount").value );
  formdata.append( "dddate", _("dddate").value );
 
////////////// added ///////////////////////////////
  
  
  
  formdata.append( "inputAddress", _("inputAddress").value );
  formdata.append( "inputAddress2", _("inputAddress2").value );
  formdata.append( "inputCity", _("inputCity").value );
  formdata.append( "inputDist", _("inputDist").value );

  formdata.append( "inputState", _("inputState").value );
  formdata.append( "inputZip", _("inputZip").value );
 
  
  formdata.append( "cinputAddress", _("cinputAddress").value );
  formdata.append( "cinputAddress2", _("cinputAddress2").value );
  formdata.append( "cinputCity", _("cinputCity").value );
  formdata.append( "cinputDist", _("cinputDist").value );

  formdata.append( "cinputState", _("cinputState").value );
  formdata.append( "cinputZip", _("cinputZip").value );
  
  $("#loader_show").removeClass('d-none');
  _("mybtn").disabled = true;


  var ajax = new XMLHttpRequest();
  ajax.open( "POST", "personal-detail-db.php" );

 


ajax.onreadystatechange = function() {
    if(ajax.readyState == 4 && ajax.status == 200) {
  
  $("#loader_show").addClass('d-none')

    
    $('#ResponseModal').modal('show');
     $('#statuss').html(ajax.responseText);


      
    }
  }
  ajax.send( formdata );
  }//function close
</script>

<script>
       $(document).ready(function(){
            $("#xmarks,#xobtmarks").change(function () {
                debugger;
                var num1 = parseFloat($("#xobtmarks").val());
                var num2 = parseFloat($("#xmarks").val());
                if(num1>num2)
                {
                    alert("Obtained Marks Should Not More Than Maximum Marks");
                    this.value=""
                }
                else
                {
                
                $("#xper").val((num1*100) / num2);
              }
            })
        });


        $(document).ready(function(){
            $("#itimarks,#itiobtmarks").change(function () {
                debugger;
                var num11iti = parseFloat($("#itiobtmarks").val());
                var num12iti = parseFloat($("#itimarks").val());
                if(num11iti>num12iti)
                {
                    alert("Obtained Marks Should Not More Than Maximum Marks");
                    this.value=""
                }
                else
                {
                
                $("#itiper").val((num11iti*100) / num12iti);
              }
            })
        });


        $(document).ready(function(){
            $("#xtwomarks,#xtwoobtmarks").change(function () {
                debugger;
                var num11 = parseFloat($("#xtwoobtmarks").val());
                var num12 = parseFloat($("#xtwomarks").val());
                if(num11>num12)
                {
                    alert("Obtained Marks Should Not More Than Maximum Marks");
                    this.value=""
                }
                else
                {
                
                $("#xtwop").val((num11*100) / num12);
              }
            })
        });



        $(document).ready(function(){
            $("#cmarks,#cobtmarks").change(function () {
                debugger;
                var num111 = parseFloat($("#cobtmarks").val());
                var num122 = parseFloat($("#cmarks").val());
                if(num111>num122)
                {
                    alert("Obtained Marks Should Not More Than Maximum Marks");
                    this.value=""
                }
                else
                {
                
                $("#cper").val((num111*100) / num122);
              }
            })
        });



         $(document).ready(function(){
            $("#pgmarks,#pgobtmarks").change(function () {
                debugger;
                var num111pg = parseFloat($("#pgobtmarks").val());
                var num122pg = parseFloat($("#pgmarks").val());
                if(num111pg>num122pg)
                {
                    alert("Obtained Marks Should Not More Than Maximum Marks");
                    this.value=""
                }
                else
                {
                
                $("#pgper").val((num111pg*100) / num122pg);
              }
            })
        });



          $(document).ready(function(){
            $("#phdmarks,#phdobtmarks").change(function () {
                debugger;
                var num111phd = parseFloat($("#phdobtmarks").val());
                var num122phd = parseFloat($("#phdmarks").val());
                if(num111phd>num122phd)
                {
                    alert("Obtained Marks Should Not More Than Maximum Marks");
                    this.value=""
                }
                else
                {
                
                $("#phdper").val((num111phd*100) / num122phd);
              }
            })
        });
    </script>





<div class=" container-fluid row3" style="padding:20px;">
  
    <div class="row">
      <!---------->
          
    <div class="col-lg-12">
    <div class="card">
          <div class="card-heading bg-success" style="color:#FFFFFF;">
       <center> <i class="fa fa-external-link" style="font-size:36px; color:#ffffff;"></i><font style="font-size:30px;">  <strong>Registration For The Post- <?php echo @$_GET['course']; ?></strong></font></center>
           </div>
              <div class="card-body ">
              <!--  -->


<div class="card alert alert-secondary">

<div class="card-body">
<form name="reg"  id="my_form"  method="post" onSubmit="submitForm22(); return false;" > 

<div class="row">
<?php
    //Include database configuration file
    include('include/db_config.php');

    ?>


<div class="col-sm-12">
  <h4 style="color:blue;">Personal Details:</h4>
<hr>
<div class="form-group">
<label for="sname">Applicant Name (As per 10th Certificate)<span style="color:red;">*</span></label>
<Input type="text" name="stname" id="sname"  class="form-control" placeholder="Enter Your Name " onkeypress="return ValidateAlpha(event);" onkeyup="makeupper();" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"required />
</div> 
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label for="fname">Fathers Name/Husband Name<span style="color:red;">*</span></label>
<input type="text" name="fname" id="fname"  class="form-control" placeholder="Enter Your Fathers/Husband Name" onkeypress="return ValidateAlpha(event);" onkeyup="makeupper2();" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required/>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="mname">Mothers Name<span style="color:red;">*</span></label>
<input type="text" name="mname" id="mname"  class="form-control" placeholder="Enter Your Mothers Name" onkeypress="return ValidateAlpha(event);" onkeyup="makeupper3();" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required/>
</div>
</div>
</div>
<!---new addition--------------->
<div class="row">


<div class="col-sm-6">
<div class="form-group">
<label for="married">Married(Yes/No)<span style="color:red;">*</span></label>

 <select name="married" id="married" class="form-control" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required   >
            <option value="">Select Yes/No </option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
</select>
</div>
</div>
<div class="col-sm-6 ">
<div class="form-group">

<label for="gen">Gender<span style="color:red;">*</span></label>
 <select name="gender" id="gen" class="form-control" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required   >
            <option value="">Select Your Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
</select>
</div>
</div>
</div>

<!----------------------------------------->
<div class="row">

<div class="col-sm-6">
<div class="form-group">

<label for="cat"> Category<span style="color:red;">*</span></label>
 <select name="category" id="cat"  class="form-control" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required   >
 <?php
 
    $record=mysqli_query($con,"select * from caste_category");
     echo"<option value=''>Select Your Category</option>";
    while($rec=mysqli_fetch_array($record))
    {
    echo"<option value='".$rec["catname"]."'>".$rec["catname"]."</option>";
    
    }
      
      
      ?>
</select>
</div>

</div>

<div class="col-sm-3">
<div class="form-group">

<label for="rel">Religion<span style="color:red;">*</span></label>
 <select name="rel" id="rel"  class="form-control" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required>
 <?php
 
    $record=mysqli_query($con,"select * from religion");
        echo"<option value=''>Select Your Religion</option>";

    while($rec=mysqli_fetch_array($record))
    {
    echo"<option value='".$rec["religion"]."'>".$rec["religion"]."</option>";
    
    }
      
      
      ?>
</select>
</div>

</div>

<div class="col-sm-3">
<div class="form-group">
<label for="caste">Caste<span style="color:red;">*</span></label>
<input type="text" name="caste" id="caste"  class="form-control" placeholder="Enter Your Caste" onkeypress="return ValidateAlpha(event);" onkeyup="makeupper222();" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required/>
</div>
</div>


</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label for="mail">Email Id<span style="color:red;">*</span></label>
<input type="email" name="email" id="mail"  class="form-control" placeholder="Enter Your Email Id" onkeyup="makeupper4();" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required />
</div>

</div>
<div class="col-sm-6">
<div class="form-group">
<label for="num">Contact Number<span style="color:red;">*</span></label>
<input  type="text" name="number" id="num"  class="form-control" placeholder="Enter Your Contact Number" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" onkeypress="return Validanumber(event);" maxlength="10" minlength="10" required  />
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label for="anum">Aadhaar Number<span style="color:red;">*</span></label>
<input  type="text" name="anum" id="anum"  class="form-control" placeholder="Enter Aadhaar No" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" onkeypress="return Validanumber(event);" maxlength="12" minlength="12" required  />
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label for="pnum">PAN Number<span style="color:red;">*</span></label>
<input  type="text" name="pnum" id="pnum"  class="form-control" placeholder="Enter PAN No" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" onkeyup="makeupperpan();" maxlength="10" minlength="10"  required  />
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label for="dob">D.O.B<span style="color:red;">*</span></label>
<div id="demos.css">
<input type="text" name="datepicker2" id="dob"  class="form-control" placeholder="Enter Your DOB(DD-MM-YYYY)" autocomplete="off" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" onchange = "ageCalculator()" required/>

<script>
     $(function() 
    {
    $( "#dob" ).datepicker({
        dateFormat: 'dd-mm-yy' , 
        changeMonth: true,
      changeYear: true,
      yearRange:'-100y:c+nn',
      maxDate: '-2400d'
        
    });
  
  });
    </script>
</div>

<!-- <input type="date" name="datepicker2" id="dob"  class="form-control" placeholder="Enter Your DOB" autocomplete="off" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" onchange = "ageCalculator()" required/> -->
</div>
</div>



  <div class="col-sm-6">
<div class="form-group">
<label for="agecal">Your Age as on 01.07.2015?<span style="color:red;">*</span></label>
<input type="text" name="agecal" id="agecal"  class="form-control" placeholder="Your Age as on 01.07.2015" value="" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" readonly />

</div>
</div>

</div>

<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label for="cname">Post Applied For<span style="color:red;">*</span></label>
<input type="text" name="cname" id="cname"  class="form-control" placeholder="Enter Your Course Name" value="<?php echo @$_GET['course']; ?>" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" readonly />
</div>
</div>

</div>

<!-- paste -->

<!-- paste -->
<hr>
<h4 style="color:blue;">Educational Details</h4>

<div class="row">
<div class="col-sm-3">
<h6 style="color:red;">10th Standard &lowast;</h6>
</div>
<div class="col-sm-3">
<div class="form-group">

<label for="xb">Board</label>
 <select name="board"  class="form-control" id="xb" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required >
            <option value="">Select Board</option>
            <option value="UP BOARD">UP BOARD</option>
            <option value="CBSE">CBSE</option>
            <option value="ICSE">ICSE</option>
             <option value="OTHER">OTHER</option>


</select>
</div>
</div>
<div class="col-sm-3">
<div class="form-group">
<label for="xs">School</label>
<input type="text" name="school1" id="xs"  class="form-control" placeholder="School" onkeyup="makeupper21();" onkeypress="return ValidateAlpha(event);" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required  />
</div>
</div>


<div class="col-sm-3">
<div class="form-group">
<label for="xpassing">Year Of Passing</label>
<input type="text" name="xpassing" id="xpassing"  class="form-control" onkeypress="return Validanumber(event);" maxlength="4" minlength="4"  placeholder="Enter Year Of Passing" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required  />
</div>
</div>
</div>

<div class="row">
<div class="col-sm-3">
</div>


<div class="col-sm-3">
<div class="form-group">
<label for="xsubject">Subject</label>
<select name="xsubject"  class="form-control" id="xsubject" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required >
            <option value="">Select Subject in 10th</option>
            <option value="UP BOARD">Science</option>
            <option value="CBSE">Art</option>
          </select>
</div>
</div>




<div class="col-sm-2">
<div class="form-group">
<label for="xmarks">Maximum Marks</label>
<input type="text" name="xmarks" id="xmarks"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Enter Maximaum Marks in 10th" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required  />
</div>
</div>

<div class="col-sm-2">
<div class="form-group">
<label for="xobtmarks">Marks Obtained</label>
<input type="text" name="xobtmarks" id="xobtmarks"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Enter Obtained Marks in 10th"  style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required  />
</div>
</div>

<div class="col-sm-2">
<div class="form-group">
<label for="xper">Percentage(%)</label>
<input type="text" name="xper" id="xper"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Percentage in 10th" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" readonly  />
</div>
</div>
</div>
<hr>

<!-- ITI -->
<div class="row">
<div class="col-sm-3">
<h6 style="color:green;">I.T.I (optional) &lowast;</h6>
</div>
<div class="col-sm-3">
<div class="form-group">

<label for="iti">Board</label>

<input type="text" name="iti" id="iti"  class="form-control" placeholder="Enter Board/university" onkeyup="makeupper21board();" onkeypress="return ValidateAlpha(event);" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"   />
</div>
</div>
<div class="col-sm-3">
<div class="form-group">
<label for="itis">School/ITI</label>
<input type="text" name="schooliti" id="itis"  class="form-control" placeholder="School" onkeyup="makeupper21school();" onkeypress="return ValidateAlpha(event);" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"   />
</div>
</div>


<div class="col-sm-3">
<div class="form-group">
<label for="xpassing">Year Of Passing</label>
<input type="text" name="itipassing" id="itipassing"  class="form-control" onkeypress="return Validanumber(event);" maxlength="4" minlength="4"  placeholder="Enter Year Of Passing" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"  />
</div>
</div>
</div>

<div class="row">
<div class="col-sm-3">
</div>


<div class="col-sm-3">
<div class="form-group">
<label for="itisubject">Subject/Branch</label>

<input type="text" name="itisubject" id="itisubject"  class="form-control" onkeyup="makeupper21subject();" onkeypress="return ValidateAlpha(event);" placeholder="Enter Subject/ Branch" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"  />          
</div>
</div>




<div class="col-sm-2">
<div class="form-group">
<label for="itimarks">Maximum Marks</label>
<input type="text" name="itimarks" id="itimarks"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Enter Maximaum Marks in ITI" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" />
</div>
</div>

<div class="col-sm-2">
<div class="form-group">
<label for="itiobtmarks">Marks Obtained</label>
<input type="text" name="itiobtmarks" id="itiobtmarks"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Enter Obtained Marks in ITI"  style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"  />
</div>
</div>

<div class="col-sm-2">
<div class="form-group">
<label for="itiper">Percentage(%)</label>
<input type="text" name="itiper" id="itiper"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Percentage in I.T.I." style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" readonly  />
</div>
</div>
</div>
<hr>

<!-- 12th  -->

<!-- 12th  -->

<div class="row">
<div class="col-sm-3">
<h6 style="color:red;">12th Standard/ Diploma Engg. &lowast;</h6>
</div>
<div class="col-sm-3">
<div class="form-group">

<label for="xtwob">Board</label>
<!--  <select name="xtwoboard"  class="form-control" id="xtwob" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required >
            <option value="">Select Board</option>
            <option value="UP BOARD">UP BOARD</option>
            <option value="CBSE">CBSE</option>
            <option value="ICSE">ICSE</option>
             <option value="OTHER">OTHER</option>


</select> -->
<input type="text" name="xtwoboard" id="xtwob"  class="form-control" placeholder="College/University" onkeyup="makeupper23xtwo();" onkeypress="return ValidateAlpha(event);" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"  required />
</div>
</div>
<div class="col-sm-3">
<div class="form-group">
<label for="xtwo">School</label>
<input type="text" name="school2" id="xtwo"  class="form-control" placeholder="School" onkeyup="makeupper22();" onkeypress="return ValidateAlpha(event);" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required  />
</div>
</div>


<div class="col-sm-3">
<div class="form-group">
<label for="xtwopassing">Year Of Passing</label>
<input type="text" name="xtwopassing" id="xtwopassing"  class="form-control" onkeypress="return Validanumber(event);" maxlength="4" minlength="4"  placeholder="Enter Year Of Passing" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required  />
</div>
</div>
</div>

<div class="row">
<div class="col-sm-3">
</div>


<div class="col-sm-3">
<div class="form-group">
<label for="xtwosubject">Subject/Branch</label>

  <input type="text" name="xtwosubject" id="xtwosubject"  class="form-control" onkeyup="makeupper21xtwosubject();" onkeypress="return ValidateAlpha(event);" placeholder="Enter Subject/ Branch" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"  />         
</div>
</div>




<div class="col-sm-2">
<div class="form-group">
<label for="xtwomarks">Maximum Marks</label>
<input type="text" name="xtwomarks" id="xtwomarks"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Enter Maximaum Marks in 12th" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required  />
</div>
</div>

<div class="col-sm-2">
<div class="form-group">
<label for="xtwoobtmarks">Marks Obtained</label>
<input type="text" name="xtwoobtmarks" id="xtwoobtmarks"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Enter Obtained Marks in 12th" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required  />
</div>
</div>

<div class="col-sm-2">
<div class="form-group">
<label for="xtwop">Percentage(%)</label>
<input type="text" name="xtwop" id="xtwop"  class="form-control" onkeypress="return Validanumber1(event);" maxlength="5" minlength="2"  placeholder="Percentage in 12th" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" readonly  />
</div>
</div>
</div>
<hr>
<!-- Graduation -->
<div class="row">
<div class="col-sm-3">
<h6 style="color:red;">Graduation &lowast;</h6>
</div>

<div class="col-sm-3">
<div class="form-group">
<label for="college">College/University</label>
<input type="text" name="school3" id="college"  class="form-control" placeholder="College/University" onkeyup="makeupper23();" onkeypress="return ValidateAlpha(event);" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"  required />
</div>
</div>


<div class="col-sm-3">
<div class="form-group">
<label for="cpassing">Year Of Passing</label>
<input type="text" name="cpassing" id="cpassing"  class="form-control" onkeypress="return Validanumber(event);" maxlength="4" minlength="4"  placeholder="Enter Year Of Passing" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required  />
</div>
</div>


<div class="col-sm-3">
<div class="form-group">
<label for="graduated">Graduated In</label>
<input type="text" name="graduated" id="graduated"  class="form-control" placeholder="Graduation Completed In" onkeyup="makeupper24();" onkeypress="return ValidateAlpha(event);" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"  required  />

</div>
</div>



</div>

<div class="row">
<div class="col-sm-3">
</div>







<div class="col-sm-3">
<div class="form-group">
<label for="cmarks">Maximum Marks</label>
<input type="text" name="cmarks" id="cmarks"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Enter Maximaum Marks in Graduation" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"  required  />
</div>
</div>

<div class="col-sm-3">
<div class="form-group">
<label for="cobtmarks">Marks Obtained</label>
<input type="text" name="cobtmarks" id="cobtmarks"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Enter Obtained Marks in Graduation" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"  required  />
</div>
</div>

<div class="col-sm-3">
<div class="form-group">
<label for="cper">Percentage(%)</label>
<input type="text" name="cper" id="cper"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Percentage in Graduation" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" readonly />
</div>
</div>
</div>




<!-- Post Graduation -->

<div class="row">
<div class="col-sm-3">
<h6 style="color:green;">Post Graduation &lowast;</h6>
</div>

<div class="col-sm-3">
<div class="form-group">
<label for="pcollege">College/University</label>
<input type="text" name="pschool3" id="pcollege"  class="form-control" placeholder="College/University" onkeyup="makeupper23pg();" onkeypress="return ValidateAlpha(event);" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"   />
</div>
</div>


<div class="col-sm-3">
<div class="form-group">
<label for="pgpassing">Year Of Passing</label>
<input type="text" name="pgpassing" id="pgpassing"  class="form-control" onkeypress="return Validanumber(event);" maxlength="4" minlength="4"  placeholder="Enter Year Of Passing" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"   />
</div>
</div>


<div class="col-sm-3">
<div class="form-group">
<label for="pggraduated">Post Graduated In</label>
<input type="text" name="pggraduated" id="pggraduated"  class="form-control" placeholder="Post Graduation Completed In" onkeyup="makeupper24pg();" onkeypress="return ValidateAlpha(event);" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"    />

</div>
</div>



</div>

<div class="row">
<div class="col-sm-3">
</div>


<div class="col-sm-3">
<div class="form-group">
<label for="pgmarks">Maximum Marks</label>
<input type="text" name="pgmarks" id="pgmarks"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Enter Maximaum Marks in  Post Graduation" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" />
</div>
</div>

<div class="col-sm-3">
<div class="form-group">
<label for="pgobtmarks">Marks Obtained</label>
<input type="text" name="pgobtmarks" id="pgobtmarks"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Enter Obtained Marks in Graduation" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"  />
</div>
</div>

<div class="col-sm-3">
<div class="form-group">
<label for="cper">Percentage(%)</label>
<input type="text" name="pgper" id="pgper"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Percentage in Graduation" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" readonly />
</div>
</div>
</div>



<!-- PHD  -->
<!-- Post Graduation -->

<div class="row">
<div class="col-sm-3">
<h6 style="color:green;">PHD &lowast;</h6>
</div>

<div class="col-sm-3">
<div class="form-group">
<label for="phcollege">College/University</label>
<input type="text" name="phschool3" id="phcollege"  class="form-control" placeholder="College/University" onkeyup="makeupper23phd();" onkeypress="return ValidateAlpha(event);" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"  />
</div>
</div>


<div class="col-sm-3">
<div class="form-group">
<label for="phdpassing">Year Of Passing</label>
<input type="text" name="phdpassing" id="phdpassing"  class="form-control" onkeypress="return Validanumber(event);" maxlength="4" minlength="4"  placeholder="Enter Year Of Passing" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"   />
</div>
</div>


<div class="col-sm-3">
<div class="form-group">
<label for="phdgraduated">PHD In</label>
<input type="text" name="phdgraduated" id="phdgraduated"  class="form-control" placeholder="PHD Completed In" onkeyup="makeupper24phd();" onkeypress="return ValidateAlpha(event);" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"   />

</div>
</div>



</div>

<div class="row">
<div class="col-sm-3">
</div>


<div class="col-sm-3">
<div class="form-group">
<label for="phdmarks">Maximum Marks</label>
<input type="text" name="phdmarks" id="phdmarks"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Enter Maximaum Marks in  PHD" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"   />
</div>
</div>

<div class="col-sm-3">
<div class="form-group">
<label for="phdobtmarks">Marks Obtained</label>
<input type="text" name="phdobtmarks" id="phdobtmarks"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Enter Obtained Marks in PHD" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"    />
</div>
</div>

<div class="col-sm-3">
<div class="form-group">
<label for="phdper">Percentage(%)</label>
<input type="text" name="phdper" id="phdper"  class="form-control" onkeypress="return Validanumber(event);" maxlength="5" minlength="2"  placeholder="Percentage in PHD" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" readonly />
</div>
</div>
</div>

<!-- educational details above -->
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label for="net">NET Score<span style="color:green;">*</span></label>
<input  type="text" name="net" id="net"  class="form-control" placeholder="Enter GATE Score if Any" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"  />
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label for="gate">GATE Score<span style="color:green;">*</span></label>
<input  type="text" name="gate" id="gate"  class="form-control" placeholder="Enter GATE Score if Any" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"   />
</div>
</div>
</div>

<!-- sci manul -->
<hr>
<div class="row">

    
                        <div class="form-group">
                        

                         
    <div class="form-check">
      <input class="form-check-input" type="checkbox"  id="sci_journls">
      <label class="form-check-label" for="sci_journls">
        <span class="h4 text-primary">Publication in SCI Journls- If Yes</span>
      </label>
    </div>
  
                        </div>

                        <div class="table-responsive d-none" id="sci_journls_table">  
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

                     

                    
    
</div>



<!-- sci end -->

<!-- non sci start -->


<div class="nonsci row">
                        <!-- //non sci -->
                        
                        <div class="form-group">
                       

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"  id="nonSci_journls">
                                <label class="form-check-label" for="nonSci_journls">
                                <span class="h4 text-primary">Non SC 2 Journls (UGC/AICTE) Approval jounerals- If Yes</span>
                                </label>
                            </div>
                        </div>

                        <div class="table-responsive d-none" id="nonSci_journls_table">  
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

<!-- non sci end -->


 <!-- Conference Proceedings start -->
                    <div class="conferencePro">
                        <!-- // --> 
                        <div class="form-group">
                       

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"  id="confPro">
                                <label class="form-check-label" for="confPro">
                                <span class="h4 text-primary">Conference Proceedings</span>

                                    
                                </label>
                            </div>
                        </div>

                        <div class="table-responsive d-none" id="confPro_table">  
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

                                <tbody id="confPro_tbody">
                                    <tr class="confPro_tr" id="confPro_tr1">
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_confPro confPro_paper_heading" id="confPro_1_paper_headline">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_confPro confPro_publ_name" id="confPro_1_publ_name">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_confPro confPro_publ_year" id="confPro_1_publ_year">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_confPro confPro_publ_type" id="confPro_1_publ_type">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_confPro confPro_publ_isbn_issn" id="confPro_1_isbn_issn">
                                        </td>

                                    </tr>
                                </tbody>


                            </table> 

                            <div class="text-right">
                            <button type="button" id="delete_confPro_row" class="btn btn-danger btn-sm">-</button>
                                <button type="button" id="add_confPro_row" class="btn btn-success btn-sm">+</button>
                                
                            </div>

                        </div>
                        <!-- table Conference Proceedings  div -->

                        

                    
                    </div>
                   
                     <!-- Conference Proceedings end -->


                         <!-- book publication start -->
                    <div class="book_publ">
                        <!-- // book_publ -->
                        <div class="form-group">
                       

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"  id="book_publ_check">
                                <label class="form-check-label" for="book_publ_check">
                                <span class="h4 text-primary">Book Publication Information</span>

                                </label>
                            </div>
                        </div>

                        <div class="table-responsive d-none" id="book_publ_table">  
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

                                <tbody id="book_publ_tbody">
                                    <tr class="book_publ_tr" id="book_publ_tr1">
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_book_publ book_publ_paper_heading" id="book_publ_1_paper_headline">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_book_publ book_publ_publ_name" id="book_publ_1_publ_name">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_book_publ book_publ_publ_year" id="book_publ_1_publ_year">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_book_publ book_publ_publ_type" id="book_publ_1_publ_type">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_book_publ book_publ_publ_isbn_issn" id="book_publ_1_isbn_issn">
                                        </td>

                                    </tr>
                                </tbody>


                            </table> 

                            <div class="text-right">
                            <button type="button" id="delete_book_publ_row" class="btn btn-danger btn-sm">-</button>
                                <button type="button" id="add_book_publ_row" class="btn btn-success btn-sm">+</button>
                                
                            </div>

                        </div>
                        <!-- table book_publ div -->


                    
                    </div>
                    <!-- book publication end -->

                         <!-- national seminar start -->
                         <div class="national_semi">
                        <!-- // national semi -->
                        <div class="form-group">
                       

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"  id="national_semi_check">
                                <label class="form-check-label" for="national_semi_check">
                                
                                <span class="h4 text-primary">Educational National / International Seminar</span>

                                </label>
                            </div>
                        </div>

                        <div class="table-responsive d-none" id="national_semi_table">  
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

                                <tbody id="national_semi_tbody">
                                    <tr class="national_semi_tr" id="national_semi_tr1">
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_national_semi national_semi_paper_heading" id="national_semi_1_paper_headline">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_national_semi national_semi_publ_name" id="national_semi_1_publ_name">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_national_semi national_semi_publ_year" id="national_semi_1_publ_year">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_national_semi national_semi_publ_type" id="national_semi_1_publ_type">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control commonClass_national_semi national_semi_publ_isbn_issn" id="national_semi_1_isbn_issn">
                                        </td>

                                    </tr>
                                </tbody>


                            </table> 

                            <div class="text-right">
                            <button type="button" id="delete_national_semi_row" class="btn btn-danger btn-sm">-</button>
                                <button type="button" id="add_national_semi_row" class="btn btn-success btn-sm">+</button>
                                
                            </div>

                        </div>
                        <!-- table national semi div -->

                    
                    </div>
                    <!-- national seminar end -->



<hr>
<h4 style="color:blue;">Payment Details( Demand Draft Details)</h4>
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="ddno">DD Number<span style="color:red;">*</span></label>
      <input type="text" class="form-control" id="ddno" name="ddno" placeholder="Enter Demand Draft Number" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"  onkeypress="return Validanumber(event);" required="">
    </div>
  <!-- <div class="form-row"> -->
    <div class="form-group col-md-4">
      <label for="ddamount">DD Amount<span style="color:red;">*</span></label>
      <input type="text" class="form-control" id="ddamount" name="ddamount" placeholder="Enter Demand Draft Amount" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" onkeypress="return Validanumber(event);" required="">
    </div>

    <div class="form-group col-md-4">
      <label for="dddate">DD <span style="color:red;">*</span></label>
      <input type="date" class="form-control" id="dddate" name="dddate" placeholder="Enter Demand Draft Date" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"  required="">
    </div>
</div>
<!-- DD Details above -->

<hr>
<h4 style="color:blue;">Permanent Address</h4>

  <div class="form-group">
    <label for="inputAddress">Address<span style="color:red;">*</span></label>
    <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Address Line 1" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" onkeyup="makeupper8();" required="">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address (Optional)</label>
    <input type="text" class="form-control" id="inputAddress2" name="inputAddress2" placeholder="Address Line 2" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" onkeyup="makeupper9();">
  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputCity">Village/City<span style="color:red;">*</span></label>
      <input type="text" class="form-control" id="inputCity" name="inputCity" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" onkeyup="makeupper10();" onkeypress="return ValidateAlpha(event);" required="">
    </div>
  <!-- <div class="form-row"> -->
    <div class="form-group col-md-3">
      <label for="inputDist">District<span style="color:red;">*</span></label>
      <input type="text" class="form-control" id="inputDist" name="inputDist" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" onkeyup="makeupper11();" onkeypress="return ValidateAlpha(event);" required="">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State<span style="color:red;">*</span></label>
      <select id="inputState" class="form-control" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" required="">
       <!--  <option selected>Choose...</option>
        <option>...</option> -->
        <option value=''>Select Your State</option>
       <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Pincode<span style="color:red;">*</span></label>
      <input type="text" class="form-control" id="inputZip" name="inputZip" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" maxlength="6" minlength="6" onkeypress="return Validanumber(event);" required="">
    </div>

</div>


<hr>
<h4 style="color:blue;">Communication Address</h4>
 <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="check-address">
      <label class="form-check-label" for="check-address">
        Same As Permanent Address
      </label>
    </div>
  </div>
  
 <!-- second -->

  <div class="form-group">
    <label for="cinputAddress">Address<span style="color:red;">*</span></label>
    <input type="text" class="form-control" id="cinputAddress" name="cinputAddress"placeholder="Address Line 1" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" onkeyup="makeupper18();" required="">
  </div>
  <div class="form-group">
    <label for="cinputAddress2">Address (Optional)</label>
    <input type="text" class="form-control" id="cinputAddress2" name="cinputAddress2" placeholder="Address Line 2" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" onkeyup="makeupper19();">
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="cinputCity">Village/City<span style="color:red;">*</span></label>
      <input type="text" class="form-control" id="cinputCity" name="cinputCity" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;"  onkeyup="makeupper20();" required="">
    </div>
  <!-- <div class="form-row"> -->
    <div class="form-group col-md-3">
      <label for="cinputDist">District<span style="color:red;">*</span></label>
      <input type="text" class="form-control" id="cinputDist" name="cinputDist" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" onkeyup="makeupper17();" onkeypress="return ValidateAlpha(event);" required="">
    </div>
    <div class="form-group col-md-4">
      <label for="cinputState">State<span style="color:red;">*</span></label>
      <select id="cinputState" class="form-control" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;">
   <option value=''>Select Your State</option>
   <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="cinputZip">Pincode<span style="color:red;">*</span></label>
      <input type="text" class="form-control" id="cinputZip" name="cinputZip" style="margin-top:10px;border:1px solid #af0202;border-left:3px solid #af0202;border-right:3px solid #af0202;" maxlength="6" minlength="6" onkeypress="return Validanumber(event);" required="">
    </div>

</div>

<!-- paster -->

<center><input type="submit" class="btn btn-lg btn-outline-primary" name="submit" id="mybtn" value="Register" /></center>
<!-- <span id="statuss"></span> -->

</form>


</div>
</div>
             <!--  -->
  
    </div>
    </div>
   </div>


   <!----->
      </div>
      
      
      
      </div>




    <!-- Modal -->
<div class="modal fade" data-keyboard="false" data-backdrop="static"  id="ResponseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Your Registration Status</h5>
       
      </div>
      <div class="modal-body">
                <span id="statuss" class="text-danger"></span>

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ok</button>
      </div> -->
    </div>
  </div>
</div>
<!--  -->

<script>
    // sci script start

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

        


        // for sci journls end

        


    });

// end sci 

</script>

<!-- non sci start -->

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

        
       

        


    });

</script>

<!--  Conference Proceedings  start -->
<script>

    $(document).ready(function(){

        // for conf Pro journls start

        var confPro_num=1;

        $("#confPro").change(function(){

           
            var confProValue = $('#confPro:checked').val();
            if(confProValue == 'on'){
                
                $("#confPro_table").removeClass("d-none")
                
            }else{
                $("#confPro_table").addClass("d-none")
                // alert("undifine")
            }
        });

        $("#add_confPro_row").click(function() {
            confPro_num = confPro_num + 1;
            
            let createHtml ="<tr  class='confPro_tr' id='confPro_tr"+confPro_num+"'>";
            createHtml +="<td>"+confPro_num+"</td>";
             createHtml +="<td><input type='text' class='form-control commonClass_confPro confPro_paper_heading' id='confPro_"+confPro_num+"__paper_headline'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_confPro confPro_publ_name' id='confPro_"+confPro_num+"_publ_name'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_confPro confPro_publ_year' id='confPro_"+confPro_num+"_publ_year'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_confPro confPro_publ_type' id='confPro_"+confPro_num+"_publ_type'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_confPro confPro_publ_isbn_issn' id='confPro_"+confPro_num+"_publ_isbn_issn'></td>";
             
             createHtml += "</tr>";
             
             $("#confPro_tbody").append(createHtml);
            
            });

            
            $("#delete_confPro_row").click(function() {

                if(confPro_num > 1){
                    $("#confPro_tr"+confPro_num).remove();
                    confPro_num = confPro_num - 1;

                }            
        });

        $(".commonClass_confPro").keypress(function(params) {
            // console.log(params)
            // let $this = $(this);
           
           if (params.which == 44) {
                params.preventDefault();
           }else{

           $("#"+$(this).attr("id")).css("border","1px solid #ced4da");
           $("#"+$(this).attr("id")).prop("placeholder","");

           }

        })

        
      


    });

</script>


<!-- book publication  start-->
<script>

    $(document).ready(function(){

        // for book_publ journls start

        var book_publ_num=1;

        $("#book_publ_check").change(function(){

           
            var book_publValue = $('#book_publ_check:checked').val();
            if(book_publValue == 'on'){
                
                $("#book_publ_table").removeClass("d-none")
                
            }else{
                $("#book_publ_table").addClass("d-none")
                // alert("undifine")
            }
        });

        $("#add_book_publ_row").click(function() {
            book_publ_num = book_publ_num + 1;
            
            let createHtml ="<tr  class='book_publ_tr' id='book_publ_tr"+book_publ_num+"'>";
            createHtml +="<td>"+book_publ_num+"</td>";
             createHtml +="<td><input type='text' class='form-control commonClass_book_publ book_publ_paper_heading' id='book_publ_"+book_publ_num+"__paper_headline'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_book_publ book_publ_publ_name' id='book_publ_"+book_publ_num+"_publ_name'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_book_publ book_publ_publ_year' id='book_publ_"+book_publ_num+"_publ_year'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_book_publ book_publ_publ_type' id='book_publ_"+book_publ_num+"_publ_type'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_book_publ book_publ_publ_isbn_issn' id='book_publ_"+book_publ_num+"_publ_isbn_issn'></td>";
             
             createHtml += "</tr>";
             
             $("#book_publ_tbody").append(createHtml);
            
            });

            
            $("#delete_book_publ_row").click(function() {

                if(book_publ_num > 1){
                    $("#book_publ_tr"+book_publ_num).remove();
                    book_publ_num = book_publ_num - 1;

                }            
        });

        $(".commonClass_book_publ").keypress(function(params) {
            // console.log(params)
            // let $this = $(this);
           
           if (params.which == 44) {
                params.preventDefault();
           }else{

           $("#"+$(this).attr("id")).css("border","1px solid #ced4da");
           $("#"+$(this).attr("id")).prop("placeholder","");

           }

        });     
        

    });

</script>


<!-- national seminar  start-->
<script>

    $(document).ready(function(){

        // for national semi  start

        var national_semi_num=1;

        $("#national_semi_check").change(function(){

           
            var national_semiValue = $('#national_semi_check:checked').val();
            if(national_semiValue == 'on'){
                
                $("#national_semi_table").removeClass("d-none")
                
            }else{
                $("#national_semi_table").addClass("d-none")
                // alert("undifine")
            }
        });

        $("#add_national_semi_row").click(function() {
            national_semi_num = national_semi_num + 1;
            
            let createHtml ="<tr  class='national_semi_tr' id='national_semi_tr"+national_semi_num+"'>";
            createHtml +="<td>"+national_semi_num+"</td>";
             createHtml +="<td><input type='text' class='form-control commonClass_national_semi national_semi_paper_heading' id='national_semi_"+national_semi_num+"__paper_headline'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_national_semi national_semi_publ_name' id='national_semi_"+national_semi_num+"_publ_name'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_national_semi national_semi_publ_year' id='national_semi_"+national_semi_num+"_publ_year'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_national_semi national_semi_publ_type' id='national_semi_"+national_semi_num+"_publ_type'></td>";
             createHtml +="<td><input type='text' class='form-control commonClass_national_semi national_semi_publ_isbn_issn' id='national_semi_"+national_semi_num+"_publ_isbn_issn'></td>";
             
             createHtml += "</tr>";
             
             $("#national_semi_tbody").append(createHtml);
            
            });

            
            $("#delete_national_semi_row").click(function() {

                if(national_semi_num > 1){
                    $("#national_semi_tr"+national_semi_num).remove();
                    national_semi_num = national_semi_num - 1;

                }            
        });

        $(".commonClass_national_semi").keypress(function(params) {
            // console.log(params)
            // let $this = $(this);
            
           
           if (params.which == 44) {
                params.preventDefault();
           }else{

           $("#"+$(this).attr("id")).css("border","1px solid #ced4da");
           $("#"+$(this).attr("id")).prop("placeholder","");

           }

        })

        
       

        // myform national semi  end

        


    });

</script>



<script>
 
 
  /*$(function() 
    {
    $( '#dob' ).datepicker({
        dateFormat: 'yy-mm-dd' , 
        changeMonth: true,
      changeYear: true,
      yearRange:'-100y
        :c+nn',
      maxDate: '366d'
    });
  
  });*/
</script>
 
<?php require('footer.php');?>