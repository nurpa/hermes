$(function init() {

  var
    $btn = $('#submit'),
    choice = {
      information: document.getElementById('letter_type_info').checked,
      opposition: document.getElementById('letter_type_opposition').checked,
      complaint: document.getElementById('letter_type_complaint').checked
    };


  // Hide the step by step block
  $('#step-by-step, li[id^=step]').hide();


  // Listen to click to the checkboxes in order to enable or disable the submit button
  $(':checkbox').on('click', function(e) {
    choice[this.value] = this.checked;
    // If no choice was made, disable the submit button
    $btn.prop('disabled', (!choice.information && !choice.opposition && !choice.complaint));
  });


  // Checks for mandatory values
  $('.contact_details :input').each(function(i, elt) {
    $(elt).on('change, blur', function(e) {
      var $this = $(this), value = $.trim($this.val());
      if (!!value) {
        $this.attr('class', 'ok');
      }
      else {
        $this.attr('class', 'error');
      }
    });
  });


  $('form').on('submit', function(e) {
    // Tests
    // e.preventDefault();

    // Hide the step by step block
    $('#step-by-step, li[id^=step]').hide();

    // If some values are missing, cancel everything
    $('.contact_details :input').trigger('blur');
    if ($(':input.error').length) {
      e.preventDefault();
      return false;
    }

    // If no choice involving PDFs was made, cancel the submit
    if (!choice.opposition && !choice.complaint) {
      e.preventDefault();
    }

    // We will display the different steps according to what choices were made

    // Print the PDF, print a copy of the ID card and send letter(s)
    if (choice.opposition || choice.complaint) {
      $('#step-print-pdf, #step-print-id, #step-send-letters').show();
    }
    // Optional mail to the CPP
    if (choice.opposition && !choice.information) {
      $('#step-mail-cpvp').show();
    }
    // Optional mail to the SNCB
    if (choice.complaint && !choice.information) {
      $('#step-mail-sncb').show();
    }
    // Optional mails to both
    if (choice.information) {
      $('#step-mails').show();
    }
    // If we have both an opposition and a complaint, no mail is needed
    if (choice.opposition && choice.complaint) {
      $('#step-mail-cpvp, #step-mail-sncb, #step-mails').hide();
    }

    // Wait step
    $('#step-wait').show();


    // Prepare contents of e-mails
    var mail_cpvp = window.lang.mail_cpvp;
    var mail_sncb = window.lang.mail_sncb;
    var tags = {
      firstname:      $.trim($('#firstname').val()),
      lastname:       $.trim($('#lastname').val()),
      postal_address: $.trim($('#postal-address').val()),
      postal_code:    $.trim($('#postal-code').val()),
      city:           $.trim($('#city').val()),
      country:        $.trim($('#country').val()),
      email:          $.trim($('#email').val())
    };

    // Special case for postal address
    tags.postal_address = tags.postal_address.replace('\n', '<br />');

    for (var key in tags) {
      var reg = new RegExp('__' + key + '__');
      mail_cpvp = mail_cpvp.replace(reg, tags[key]);
      mail_sncb = mail_sncb.replace(reg, tags[key]);
    }

    $('.mail-cpvp').each(function(i, elt) {
      $(elt).html(mail_cpvp);
    });
    $('.mail-sncb').each(function(i, elt) {
      $(elt).html(mail_sncb);
    });


    // Show the step by step block
    $('#step-by-step').show();

    // location.hash = '#step-by-step';
    $('html, body').animate({scrollTop: $('#step-by-step').offset().top}, 500);

  });
});