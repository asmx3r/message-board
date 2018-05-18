// http://blog.teamtreehouse.com/create-ajax-contact-form
$(function() {
    // Get the form.
    var post = $('#postas');

    // Get the messages div.
    var pranesimai = $('#pranesimai');

    // Set up an event listener for the contact form.
    $(post).submit(function(e) {
        // Stop the browser from submitting the form.
        e.preventDefault();
        // TODO
    });

    // Serialize the form data.
    var duomenys = $(post).serialize();

    // Submit the form using AJAX.
    $.ajax({
        type: 'POST',
        url: $(post).attr('action'),
        data: duomenys
    });

    .done(function(atsakas) {
        // Make sure that the formMessages div has the 'success' class.
        $(pranesimai).removeClass('error');
        $(pranesimai).addClass('success');

        // Set the message text.
        $(pranesimai).text(atsakas);

        // Clear the form.
        $('#fullname').val('');
        $('#birthdate').val('');
        $('#email').val('');
        $('#message').val('');
    });

    .fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(pranesimai).removeClass('success');
			$(pranesimai).addClass('error');

			// Set the message text.
			if (data.pranesimas !== '') {
				$(pranesimai).text(data.pranesimas);
			} else {
				$(pranesimai).text('Klaida! Jūsų žinutė neįrašyta.');
			}
		});
});
