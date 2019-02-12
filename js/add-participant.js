jQuery(document).ready(function() {

  $("#add-participant").click(function() {

    let newParticipant = $(
    `<h4 class="pt-3 participant-header"></h4>
      <div class="d-flex flex-wrap">
        <div class="col-md-12">
          <label for="participant-name">Name*</label>
          <input type="text" class="form-control new-participant-name" id="participant-name" name="participant_name">
        </div>
        <div class="col-md-4">
          <label for="participant-phone">Phone*</label>
          <input type="number" class="form-control new-participant-phone" id="participant-phone" name="participant_phone">
        </div>
        <div class="col-md-8">
          <label for="participant-email">E-mail*</label>
          <input type="email" class="form-control new-participant-email" id="participant-email" name="participant_email">
        </div>
      </div>`
    );

    $('#append-here').append(newParticipant);


    // Set unique ID for every new participant header and increment h4 tag
    let participantNumber = 0;

    $('.participant-header').each(function(){
      participantNumber++;
      let newId='participant-number-'+participantNumber;
      $(this).attr('id', newId);
      $(this).val(participantNumber);
    });

    document.getElementById("participant-number-"+participantNumber).innerHTML = "Participant #" + participantNumber;


    // Set unique ID and name
    $('.new-participant-name').each(function(){
      let newId='participant-name-'+participantNumber;
      let newParticipantName = 'participant_name_'+participantNumber;
      $(this).attr('id', newId);
      $(this).attr('name', newParticipantName);
    });

    document.getElementById("participant-name-"+participantNumber);


    // Set unique ID and phone
    $('.new-participant-phone').each(function(){
      let newId='participant-phone-'+participantNumber;
      let newParticipantName = 'participant_phone_'+participantNumber;
      $(this).attr('id', newId);
      $(this).attr('name', newParticipantName);
    });

    document.getElementById("participant-phone-"+participantNumber);


    // Set unique ID and email
    $('.new-participant-email').each(function(){
      let newId='participant-email-'+participantNumber;
      let newParticipantName = 'participant_email_'+participantNumber;
      $(this).attr('id', newId);
      $(this).attr('name', newParticipantName);
    });

    document.getElementById("participant-email-"+participantNumber);

  })

});