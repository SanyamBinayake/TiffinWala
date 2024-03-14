$(function(){

	var $regform=$("#frm");
	$regform.validate({
		rules:{
			name:{
				required:true,
				lettersonly:true
			},
			number:{
				required:true
			},
			email:{
				required:true
			},
			add:{
				required:true
			}
			
		},messagess:{
			name:{
				required: "Full name must be required",
				lettersonly:'invalid name'
			},
			number:
			{
				required:"number must be requied"
			},
			email:{
				required:"Email is required"
			},
			add:{
				required:"Address is required"
			}
		}
	})
	jQuery.validator.addMethod('lerrersonly',function(value,element){
		return /^[a-zA-z\s]+$/.test(value);
	})

})