<?php include('header.php'); ?>

<!-- Start div -->
<div id="div" class="container mt-3 mb-5" >
    <h1 class="title1">Add Question</h1>
    <div class="card">
       <form action="add_question_code.php" method="POST">
        <div class="row p-3">
           <div class="mb-3 col-lg-6">
              <td><label for="category"><h5>Category </h5></label></td>
              <td><select class="form-control" name="category_id">
                <?php 
                include('conn.php');
                $query="SELECT * FROM categories";
                $result= mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($result))
                {
                  ?>

                  <option value="<?= $row['category_id']; ?>"> <?= $row['title']; ?></option>

              <?php }?>
          </select></td>
      </div>
    
      <div class="mb-3 col-lg-12">
          <td><label for="title"><h5>Title</h5></label> </td>
          <td><input type="text" id="title" name="title" class="form-control"  required> </td>
      </div>

      <div class="mb-3 col-lg-6">
        <td> <label for="option"><h5>Option A</h5></label> </td>
        <td> <input type="text" id="option_a" name="option_a" class="form-control"  required></td>
    </div>
    <div class="mb-3 col-lg-6">
        <td> <label for="option"><h5>Option B</h5></label> </td>
        <td> <input type="text" id="option_b" name="option_b" class="form-control"  required></td>
    </div>
    <div class="mb-3 col-lg-6">
        <td> <label for="option"><h5>Option C</h5></label> </td>
        <td> <input type="text" id="option_c" name="option_c" class="form-control"  required></td>
    </div>
    <div class="mb-3 col-lg-6">
        <td> <label for="option"><h5>Option D</h5></label> </td>
        <td> <input type="text" id="option_d" name="option_d" class="form-control"  required></td>
    </div>
    <div class="mb-3 col-lg-6">
        <td> <label for="option"><h5>Correct Option</h5></label> </td>
        <td> <input type="text" id="correct_option" name="correct_option" class="form-control"  required></td>
    </div>
    <div class="mb-3 col-lg-12">
        <td>
         <button type="submit" class="btn btn-primary mt-2 ml-2">Submit</button>
         <button type="reset" class="btn btn-danger  mt-2 ml-2">Reset</button>
     </td>
 </div>
</div>

</form>
</div>

</div>

<?php include('footer.php'); ?>