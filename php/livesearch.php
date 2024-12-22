<?php
  include("connectdb.php");
  if(isset($_POST['input'])){

    $input=mysqli_real_escape_string($con,$_POST['input']);
    $input=str_replace('[', '!', $input);
    $input=addslashes($input);
    
    // $query = "SELECT org_name, org_details, dp2 FROM organizer_details WHERE org_name LIKE '%{$input}%'";
    $query="SELECT * FROM events JOIN organization ON events.org_id = organization.org_id WHERE events.ev_name REGEXP '[[:<:]]{$input}' OR organization.org_name REGEXP '[[:<:]]{$input}'";

    $result1=mysqli_query($con,$query);

   
    if(mysqli_num_rows($result1) > 0){
      $rows = array();
      while($row1=mysqli_fetch_assoc($result1)){
          $query2 = "SELECT org_name,logo,head_name FROM events INNER JOIN organization ON organization.org_id = {$row1['org_id']}";
          $result2=mysqli_query($con,$query2);
          $row2=mysqli_fetch_assoc($result2);
          $rows[] = array('row1' => $row1, 'row2' => $row2);
      }
  
      for($i = count($rows) - 1; $i >= 0; $i--){
          $row1 = $rows[$i]['row1'];
          $row2 = $rows[$i]['row2'];
          // Use $row1 and $row2 as needed

  ?>
  
  
    <div class="card">
      <div class="head">
        <div>
          <img src="data:image/jpeg;base64,<?php echo base64_encode($row2['logo']); ?>" alt="" />

          <label class="club_name"><?php echo $row2['org_name']?></label>
        </div>
        <div>
          <i class="material-symbols-outlined">person</i>
          <label class="assigned">Assigned by :</label>
          <label class="handler"><?php echo $row2['head_name']?></label>
        </div>
      </div>
      <div class="content">
        <h1 class="event_title"><?php echo $row1['ev_name']?></h1>
        <div class="info_div">
          <div id="first" class="info">
            <i class="material-symbols-outlined">event</i>
            <label><?php echo (new DateTime($row1['start_date']))->format('d F')?></label>
          </div>
          <div class="info">
            <i class="material-symbols-outlined">schedule</i>
            <label><?php echo (new DateTime($row1['start_time']))->format('h:i A')?></label>
          </div>
          <div id="last" class="info">
            <i class="material-symbols-outlined">location_on</i>
            <label><?php echo $row1['venue']?></label>
          </div>
        </div>
        <div class="description">
          <p><?php echo $row1['ev_details']?></p>
        </div>
        <div class="footer">
          <button class="view1" value="" onclick="valuetaken('<?php echo $row1['ev_id']; ?>', '<?php echo $row1['ev_name']; ?>')">
            <label>View</label><i class="bi bi-arrow-right"></i>
          </button>
          <button class="view2" >
            <label class="material-icons">keyboard_arrow_right </label>
          </button>
          
          <label id="bookmark" class="material-symbols-outlined"
            >bookmark</label>
          
        </div>
      </div>
    </div>
    
    <?php
        }
        }
        else{
    ?>
      
      <p class="nocontentmsg" ><i class="fa-solid fa-circle-info" id="info" ></i> No Such Events or Organization</p>

        <?php
            }
          }
        ?>
        
        
      </div>
    
    </div>
  </div>