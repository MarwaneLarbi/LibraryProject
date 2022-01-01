"use strict";var KTSigninGeneral=function(){
    var t,e,i;return{
        init:function(){
            t=document.querySelector("#kt_sign_in_form"),e=document.querySelector("#kt_sign_in_submit"),i=FormValidation.formValidation(t,{
                    fields:{
                        'user_id': {
                            validators: {
                                notEmpty: {
                                    message: 'champ requis'
                                },
                                numeric: {
                                    message: 'The value is not a number',

                                },
                            }
                        }
                        ,password:{
                            validators:{
                                notEmpty:{
                                    message:"The password is required"}
                            }
                        }
                    }
                    ,plugins:{
                    declarative: new FormValidation.plugins.Declarative({
                        html5Input: true,
                    }),
                        trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({
                            rowSelector:".fv-row"}
                        ),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                }
                }
            ),e.addEventListener("click",(function(n){
                    n.preventDefault(),i.validate().then((function(i){
                        if ("Valid"==i){
                            e.setAttribute("data-kt-indicator","on"),e.disabled=!0,
                                t.submit();
                        }
                        else
                        {
                            toastr.error('Sorry, looks like there are some errors detected, please try again'),
                                Swal.fire({
                                        text:"Sorry, looks like there are some errors detected, please try again.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                            confirmButton:"btn btn-primary"}
                                    }
                                )
                        }
                    }
                    ))}
            ))}
    }
}
();KTUtil.onDOMContentLoaded((function(){
        KTSigninGeneral.init()}
));
