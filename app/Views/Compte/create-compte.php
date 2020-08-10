<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 User Form With Validation Example</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
 
</head>
<body>
 <div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>
 
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
 
    <div class="row">
      <div class="col-md-9">
        <form action="<?php echo base_url('Compte/store');?>" name="user_create" id="user_create" method="post" accept-charset="utf-8">
 
          <div class="form-group">
            <label for="formGroupExampleInput"> Numero_Agence</label>
            <input type="text" name="numagence" class="form-control" id="formGroupExampleInput" placeholder="Please enter numero-agence">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Numero_Compte</label>
            <input type="text" name="numcompte" class="form-control" id="formGroupExampleInput" placeholder="Please enter numero-compte">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Cle_Rib</label>
            <input type="text" name="rib" class="form-control" id="formGroupExampleInput" placeholder="Please enter Cle-Rib">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Date_Ouverture</label>
            <input type="date" name="date" class="form-control" id="formGroupExampleInput" placeholder="Please enter Date-Ouverture">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Montant_Initial</label>
            <input type="text" name="montant" class="form-control" id="formGroupExampleInput" placeholder="Please enter Montant_Initial">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Frais_Ouverture</label>
            <input type="text" name="frais" class="form-control" id="formGroupExampleInput" placeholder="Please enter Frais_Ouverture">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Agios</label>
            <input type="text" name="agios" class="form-control" id="formGroupExampleInput" placeholder="Please enter l'agios">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Date_Bloquage</label>
            <input type="date" name="date1" class="form-control" id="formGroupExampleInput" placeholder="Please enter Date_Bloquage">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Date_Debloquage</label>
            <input type="date" name="date2" class="form-control" id="formGroupExampleInput" placeholder="Please enter Date_DeBloquage">
             
          </div> 

           
 
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Envoyer</button>
          </div>
          
        </form>
      </div>
 
    </div>
  
</div>
 <script>
   if ($("#user_create").length > 0) {
      $("#user_create").validate({
      
    rules: {
      name: {
        required: true,
      },
  
      email: {
        required: true,
        maxlength: 50,
        email: true,
      },   
    },
    messages: {
        
      name: {
        required: "Please enter name",
      },
      email: {
        required: "Please enter valid email",
        email: "Please enter valid email",
        maxlength: "The email name should less than or equal to 50 characters",
        }, 
    },
  })
}
</script>
</body>
</html>