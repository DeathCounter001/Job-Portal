<?php include 'header.php'?>    
<!-- Page content -->
<div class="content">
<p>
  <button class="btn btn-primary" type = "button" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
Post Job  </button>
  
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action= "" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name = "cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name = "pos">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Desciption</label>
  <textarea name="Jdesc" id="" cols="30" rows="10" class="form-control" name = "Jdesc"></textarea>
  </div>
  <div class="mb-3">
        <label for="skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="skills" name = "skills">
  </div>
  <div class="mb-3">
        <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name = "CTC">
  </div>

  <button type="submit" class="btn btn-primary" name = "job">Submit</button>
</form>
 </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th> 
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>

  
    <?php

    $sql = "Select `cname` , `position` , `CTC` from `jobs` ";
    $result = mysqli_query($conn,$sql);
    $i=0;
    if($result -> num_rows > 0){

      //output data of each row
      while($row = $result -> fetch_assoc()){
        echo" 
         
            <tr>
              <td>" .++$i. "</td>
              <td>" .$row['cname']." </td>
              <td>" .$row['position']."</td>
              <td>" .$row['CTC']."</td>
          </tr>";
      }
    }

else{
  echo"";
}
   

    ?>
    
  </tbody>
</table>
</div>


  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
    crossorigin="anonymous"></script>
  
    
</body>
</html>