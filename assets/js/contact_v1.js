$(function () {

    // init the validator
    // validator files are included in the download package
    // otherwise download from http://1000hz.github.io/bootstrap-validator

     //$('#needs-validation').validator();


    // when the form is submitted
    $('#needs-validation').on('submit', function (e) {

        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            // POST values in the background the the script URL
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data) {
                    // data = JSON object that contact.php returns
					const obj = JSON.parse(data);
                    // we recieve the type of the message: success x danger and apply it to the 
                    var messageAlert = 'alert-' + obj.type;
                    var messageText = obj.message;

                    // let's compose Bootstrap alert box HTML
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
					
                    // If we have messageAlert and messageText
                    if (messageAlert && messageText) {
						if(obj.type=='success'){
							$('#needs-validation')[0].reset();
							location.href='https://www.nextbrick.com/thank-you';	
						}else{
                        // inject the alert to .messages div in our form
                        $('#needs-validation').find('.messages').html(alertBox);
						$('#security_code').val('');
                        // empty the form
                        //$('#needs-validation')[0].reset();
						return true;
						}
                    }
                }
            });
            return false;
        }
    })
});