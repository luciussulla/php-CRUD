<?php
  $user = selectSingle(1); 
  $welcome = "Welcome ".$user['fName']; 

?>
<header>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        [logo here]
      </div>
      <div class="col-md-8 text-right">
          <nav>
            <ul>
              <li><a href="/">Dashboard</a></li>
              <li><a href="/crud/create.php">Create New</a></li>
              <li><?php echo $welcome ?></li>
            </ul>
          </nav>
      </div>
    </div>
  </div>
</header>
