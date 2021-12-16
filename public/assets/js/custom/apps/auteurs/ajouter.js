"use strict";
function remove(){
    $('.modal-backdrop').remove();
}
var KTModalCustomersAdd=function(){
    var t,e,o,n,r,i;return{
        init:function(){
            i=new bootstrap.Modal(document.querySelector("#kt_modal_add_customer_form")),
                r=document.querySelector("#myform"),
                t=r.querySelector("#kt_modal_add_customer_submit"),
                e=r.querySelector("#kt_modal_add_customer_cancel"),
                o=r.querySelector("#kt_modal_add_customer_close"),
                n=FormValidation.formValidation(r,{
                        fields:{
                            name:{
                                validators:{
                                    notEmpty:{
                                        message:"Customer name is required"}},


                            },
                        },
                        plugins:{
                            trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({
                                rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}
                    }
                ),
                $(r.querySelector('[name="country"]')).on("change",(function(){
                        n.revalidateField("country")}
                )),
                t.addEventListener("click",(function(e){
                        e.preventDefault(),n&&n.validate().then((function(e){
                            console.log("validated!"),"Valid"==e?(t.setAttribute("data-kt-indicator","on"),t.disabled=!0,setTimeout((function(){
                                t.removeAttribute("data-kt-indicator"),Swal.fire({
                                    text:"Form has been successfully submitted!",icon:"success",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                        confirmButton:"btn btn-primary"}}).then((function(e){
                                    e.isConfirmed&&(i.hide(),i.hide(),remove(),t.disabled=!1)

                                    var data = $('#myform').serialize();
                                    $.ajax({
                                        type:'post',
                                        url:"{{ route('AddAuteurForm.store') }}",
                                        data:data,
                                        beforeSend:function(data){
                                            $(document).find('.reset').text('');
                                        },
                                        success:function (data){
                                            alert(data)

                                        },
                                        error:function (reject){
                                            if (reject.status == 422) {
                                                $.each(reject.responseJSON.errors, function (i, error) {
                                                    $('#'+i).text(error[0]);
                                                    $('#'+i+'Event').css("border-color", "red");

                                                });

                                            }
                                        }
                                    });

                                }))}),2e3)):Swal.fire({
                                text:"Sorry, looks like there are some errors detected, please try again.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                    confirmButton:"btn btn-primary"}})}))
                    }
                )),e.addEventListener("click",(function(t){
                t.preventDefault(),Swal.fire({
                    text:"Are you sure you would like to cancel?",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, cancel it!",cancelButtonText:"No, return",customClass:{
                        confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}}).then((function(t){
                    t.value?(r.reset(),i.hide(),remove()):"cancel"===t.dismiss&&Swal.fire({
                        text:"Your form has not been cancelled!.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                            confirmButton:"btn btn-primary"}})}))})),
                o.addEventListener("click",(function(t){
                    t.preventDefault(),Swal.fire({
                        text:"Are you sure you would like to cancel?",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, cancel it!",cancelButtonText:"No, return",customClass:{
                            confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}}).then((function(t){
                        t.value?(r.reset(),i.hide(),remove()):"cancel"===t.dismiss&&Swal.fire({
                            text:"Your form has not been cancelled!.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                confirmButton:"btn btn-primary"}})}))}))}}}();KTUtil.onDOMContentLoaded((function(){
    KTModalCustomersAdd.init()}));
