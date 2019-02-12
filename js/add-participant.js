jQuery(document).ready(function() {

  $("#add-participant").click(function() {

    let newParticipant = $(
    `<h4 class="pt-3 participant-header"></h4>
      <div class="d-flex flex-wrap">
        <div class="col-md-12">
          <label for="company-name">Name*</label>
          <input type="text" class="form-control" id="company-name" name="company_name">
        </div>
        <div class="col-md-4">
          <label for="company-phone">Phone*</label>
          <input type="number" class="form-control" id="company-phone" name="company_phone">
        </div>
        <div class="col-md-8">
          <label for="company-email">E-mail*</label>
          <input type="email" class="form-control" id="company-email" name="company_email">
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

  })

});