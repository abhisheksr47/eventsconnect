<?php

class Filters{
    private $filtervariable;

    public function __construct($filtervariable)
    {
        $this->filtervariable=$filtervariable;
    }
    public function getData() {
        
        include("connectdb.php");
        // $query = "SELECT * FROM events";
        // if (!empty($this->filtervariable)) {
        //   $query .= " WHERE ev_category = '$this->filtervariable ORDER BY ev_id DESC'";
        // }
        // $query .= " ORDER BY ev_id DESC";

        $query="SELECT * FROM events where ev_category='$this->filtervariable' ORDER BY ev_id DESC";
        $result1=mysqli_query($con,$query);
    
        if(mysqli_num_rows($result1) > 0){
        $rows = array();
        while($row1=mysqli_fetch_assoc($result1)){
              $query2 = "SELECT org_name,logo,head_name FROM events INNER JOIN organization ON organization.org_id = {$row1['org_id']}";
              $result2=mysqli_query($con,$query2);
              $row2=mysqli_fetch_assoc($result2);
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
            <p class="nocontentmsg" ><i class="fa-solid fa-circle-info" id="info" ></i> Check back later for updates on exciting <?php echo $this->filtervariable ?> events! </p>

        <?php
            }
        }
    }
        ?>
        
        
      </div>
    
    </div>
  </div>