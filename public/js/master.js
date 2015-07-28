/* Predefined variables */
/* global domainURL */

/* Contact Form */
$('.form').submit(function(event)
{
	event.preventDefault();
	$('.form .alert').addClass('hidden').empty();
	$('.form .form-group').removeClass('has-error');
	$.ajax({
        type: 'POST',
        url: domainURL+'/submit',
        data: $('.form').serialize(),
        dataType: 'json',
        async: true,
        success: function(result)
        {
        	if(!result.success)
        	{
        		if(result.errors.first_name)
        		{
        			$('#first_name').parent().addClass('has-error');
        			$('#first_name').parent().find('.alert').removeClass('hidden');
        			for (var i = 0; i < result.errors.first_name.length; i++)
        			{
        				$('#first_name').parent().find('.alert').append(result.errors.first_name[i]+'<br>');
        			}
        		}
        		if(result.errors.email)
        		{
        			$('#email').parent().addClass('has-error');
        			$('#email').parent().find('.alert').removeClass('hidden');
        			for (var i = 0; i < result.errors.email.length; i++)
        			{
        				$('#email').parent().find('.alert').append(result.errors.email[i]+'<br>');
        			}
        		}
        		if(result.errors.phone)
        		{
        			$('#phone').parent().addClass('has-error');
        			$('#phone').parent().find('.alert').removeClass('hidden');
        			for (var i = 0; i < result.errors.phone.length; i++)
        			{
        				$('#phone').parent().find('.alert').append(result.errors.phone[i]+'<br>');
        			}
        		}

        	} else {
                $('#modal .thanks-name').html(result.data.first_name);
                $('#modal').modal('show');
        	}
        	console.log(result);
            /*$('.contact-container .form .has-error').removeClass('has-error');
            $('.contact-container .form .btn-submit').button('reset');
            $('#contactModal .thanks-name').html(result.name);
            $('#contactModal').modal('show');*/
        }
    });
});
$('#modal').on('hide.bs.modal', function ()
{
	$('.form').trigger("reset");
	$('#modal .thanks-name').html('');
});