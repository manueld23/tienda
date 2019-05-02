<?php ?>
    <div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('Main/update')?>/<?php echo $row->id; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" class="form-control" name="descripcion" value="<?php echo $row->descripcion; ?>" aria-describedby="emailHelp" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" class="form-control" name="precio" value="<?php echo $row->precio; ?>" aria-describedby="emailHelp" placeholder="Enter first name">
            </div>
            
            <button type="submit" class="btn btn-primary" value="save">Submit</button>
            <a href="<?php echo site_url('Main')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
        </form>  
    </div>


  </body>
</html>