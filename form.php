
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
  </head>
  <body>


  <form action="thanks.php" method="post">
 

<div>
    <p>
      <label  for="fisrtname">Fisrtname</label>
      <input  type="text"  id="fisrtname"  name="User_firstname">
  </p>
</div>


<div>
    <p>
      <label  for="lastname">Lastname</label>
      <input  type="text" id="lastname"  name="User_lastname">
    </p>
</div>


<div>
   <p> 
      <label for="sujet">Select your choice </label>
        <select id="sujet-select" name="User_sujet">
          <option value="Shoes">Shoes</option>
          <option value="Pants">Pants</option>
          <option value="Sweats">Sweats</option> 
   </p>     
</div>


<div>
    <p>
      <label for="email">Email </label>
      <input type="email"  id="email"  name="User_email">
   </p>  
</div>

     
<div>
    <p>
      <label  for="phone">Phone </label>
        <input  type="text"  id="phone"  name="User_phone">
    </p>   
</div>


    <div>
      <label  for="message">Message </label>
      <textarea  id="message"  name="User_message"></textarea>
    </div>

    <div  class="button">
      <p>
      <button  type="submit"> Go one ! </button>
     </p>
    </div>
  </form>


  </body>
</html>

