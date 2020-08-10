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
        <form action="<?php echo base_url('Client/store');?>" name="user_create" id="user_create" method="post" accept-charset="utf-8">
 
          <div class="form-group">
            <label for="formGroupExampleInput"> Nom client</label>
            <input type="text" name="nomclient" class="form-control" id="formGroupExampleInput" placeholder="Please enter nom_client">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Prenom client</label>
            <input type="text" name="prenomclient" class="form-control" id="formGroupExampleInput" placeholder="Please enter Prenom_client">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Adresse client</label>
            <input type="text" name="adresseclient" class="form-control" id="formGroupExampleInput" placeholder="Please enter Adresse_client">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Email client</label>
            <input type="text" name="emailclient" class="form-control" id="formGroupExampleInput" placeholder="Please enter Email_client">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Numero telephone</label>
            <input type="text" name="phoneclient" class="form-control" id="formGroupExampleInput" placeholder="Please enter numero telephone">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Profession</label>
            <input type="text" name="professionclient" class="form-control" id="formGroupExampleInput" placeholder="Please enter Profession">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> CNI(n° d'identité)</label>
            <input type="text" name="numident" class="form-control" id="formGroupExampleInput" placeholder="Please enter CNI">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Date de naissance</label>
            <input type="date" name="datenais" class="form-control" id="formGroupExampleInput" placeholder="Please enter Date_naissance">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Salaire Client</label>
            <input type="text" name="salaireclient" class="form-control" id="formGroupExampleInput" placeholder="Please enter Salaire_client">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Nom_moral</label>
            <input type="text" name="moral" class="form-control" id="formGroupExampleInput" placeholder="Please enter Nom_moral">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Raison-Social</label>
            <input type="text" name="raismoral" class="form-control" id="formGroupExampleInput" placeholder="Please enter Raison-social">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Telephone-moral</label>
            <input type="text" name="telemoral" class="form-control" id="formGroupExampleInput" placeholder="Please enter Telephone-moral">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> Adresse-moral</label>
            <input type="text" name="adresemoral" class="form-control" id="formGroupExampleInput" placeholder="Please enter Adresse-moral">
             
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput"> NINEA</label>
            <input type="text" name="ninea" class="form-control" id="formGroupExampleInput" placeholder="Please enter NINEA">
             
          </div> 


 
          <div class="form-group">
            <label for="email">Email </label>
            <input type="text" name="emailmoral" class="form-control" id="email" placeholder="Please enter email-moral">
             
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