
$(document).ready(function(){








        //
    // //jquery for adding or removing textfield dynamic
    // $(document).ready(function(){
    //     var maxField = 10; //Input fields increment limitation
    //     var addButton = $('.add_button'); //Add button selector
    //     var wrapper = $('.field_wrapper'); //Input field wrapper
    //     var fieldHTML = '<div style=""><input type="text" name="sku[]" id="sku" placeholder="SKU" style="width:120px; margin-right:3px; margin-top:5px;"/>' +
    //         '<input type="text" name="size[]" id="size" placeholder="Size" style="width:120px; margin-right:3px; margin-top:5px;"/>' +
    //         '<input type="text" name="price[]" id="price" placeholder="Price" style="width:120px; margin-right:3px; margin-top:5px;"/>' +
    //         '<input type="text" name="stock[]" id="stock" placeholder="Stock" style="width:120px; margin-right:1px; margin-top:5px;"/>' +
    //         '<a href="javascript:void(0);" class="remove_button">remove</a></div>'; //New input field html
    //     var x = 1; //Initial field counter is 1 title="Add field">Add
    //
    //     //Once add button is clicked
    //     $(addButton).click(function(){
    //         //Check maximum number of input fields
    //         if(x < maxField){
    //             x++; //Increment field counter
    //             $(wrapper).append(fieldHTML); //Add field html
    //         }
    //     });
    //
    //     //Once remove button is clicked
    //     $(wrapper).on('click', '.remove_button', function(e){
    //         e.preventDefault();
    //         $(this).parent('div').remove(); //Remove field html
    //         x--; //Decrement field counter
    //     });
    // });//closing
    //




	//admin check password ajax
	$("#current_pwd").keyup(function(){
		var current_pwd = $("#current_pwd").val();
		$.ajax({
				type:'get',
			url:'/admin/check-pwd',
			data:{current_pwd:current_pwd},
				success:function(resp){
					//alert(resp);
					if(resp=="false"){
						$("#chkPwd").html("<font color-'red'>Current Password is Incorrect</font>");
					}else if(resp=="true"){

                        $("#chkPwd").html("<font color-'red'>Current Password is Correct</font>");
					}

                },error:function(){
					alert("error");
			}
		});
	});
	//closing
	
	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();
	
	// Form Validation
    $("#basic_validate").validate({
		rules:{
			required:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			date:{
				required:true,
				date: true
			},
			url:{
				required:true,
				url: true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

    // add category validation
    $("#add_category").validate({
        rules:{
            category_name:{
                required:true
            },
            description:{
                required:true,
            },

            url:{
                required:true,

            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });//





    // edit product validation
    $("#edit_product").validate({
        rules:{
            cat:{

                required:true
            },
            product_name:{
                required:true
            },
            // description:{
            //     required:true,
            // },

            price:{
                required:true,
				number:true

            },
            product_brand:{
                required:true,

            },

            product_code:{
                required:true,

            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });


    // add product validation
    $("#add_product").validate({
        rules:{
            cat:{

                required:true
            },
            product_name:{
                required:true
            },
            // description:{
            //     required:true,
            // },

            price:{
                required:true,
                number:true

            },
            product_brand:{
                required:true,

            },
            stock:{
                required:true,
                number:true

            },
            image:{
                required:true,

            },
            product_code:{
                required:true,

            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });


    // add category validation

    //measurement
    $("#me").validate({
        rules:{
            mname:{
                required:true
            },
            mcode:{
                required:true,
            },


        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });//

    $("#number_validate").validate({
		rules:{
			min:{
				required: true,
				min:10
			},
			max:{
				required:true,
				max:24
			},
			number:{
				required:true,
				number:true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	$("#password_validate").validate({
		rules:{
            current_pwd:{
                required: true,
                minlength:6,
                maxlength:20
            },
			new_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			confirm_pwd:{
				required:true,
				minlength:6,
				maxlength:20,
				equalTo:"#new_pwd"
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
/*
//delete
             $("#DEL_CAT").click(function(){
             if(confirm('Are you sure to delete this category?'))
             {
            return true;
             }
               return false;
               });
     //del


     */
/*
      //first delete product code
        $("#delProduct").click(function(){
            // alert('tedt');
        if(confirm('Are you sure to delete this product?'))
        {
            return true;
        }
        return false;
         });
            //del
    */
        //you dont need to write again the sweetalert function everytime you use it
    //becuase everything is passing on the route(rel)(rel1)which both carries our routes and call our function
    $(document).on('click','.deleteRecord',function(e){
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        swal({
                title: "Are you sure?",
                text: "Your will not be able to recover this Record Again!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
            function(){
                window.location.href="/admin/"+deleteFunction+"/"+id;
            });
    });//sweetalert closing

    //
    // //jquery for adding or removing textfield dynamic
    // $(document).ready(function(){
    //     var maxField = 10; //Input fields increment limitation
    //     var addButton = $('.add_button'); //Add button selector
    //     var wrapper = $('.field_wrapper'); //Input field wrapper
    //     var fieldHTML = '<div style=""><input type="text" name="sku[]" id="sku" placeholder="SKU" style="width:120px; margin-right:3px; margin-top:5px;"/>' +
    //         '<input type="text" name="size[]" id="size" placeholder="Size" style="width:120px; margin-right:3px; margin-top:5px;"/>' +
    //         '<input type="text" name="price[]" id="price" placeholder="Price" style="width:120px; margin-right:3px; margin-top:5px;"/>' +
    //         '<input type="text" name="stock[]" id="stock" placeholder="Stock" style="width:120px; margin-right:1px; margin-top:5px;"/>' +
    //         '<a href="javascript:void(0);" class="remove_button">remove</a></div>'; //New input field html
    //     var x = 1; //Initial field counter is 1
    //
    //     //Once add button is clicked
    //     $(addButton).click(function(){
    //         //Check maximum number of input fields
    //         if(x < maxField){
    //             x++; //Increment field counter
    //             $(wrapper).append(fieldHTML); //Add field html
    //         }
    //     });
    //
    //     //Once remove button is clicked
    //     $(wrapper).on('click', '.remove_button', function(e){
    //         e.preventDefault();
    //         $(this).parent('div').remove(); //Remove field html
    //         x--; //Decrement field counter
    //     });
    // });//closing




    });
