<section class="content-page">
  <div class="title_box wow fadeInUp">
    <div class="container">
      <div class="breadcrumbs"> <span><a class="home" href="index.html">Home</a></span>/<span>My Account</span> </div>
      <div class="title_wr">
        <h1>My Booked Services</h1>
      </div>
    </div>
  </div>
  <section class="container">
    <section class="white-main-box">
      <div class="inner-content-box clearfix">
        <div class="my-account-part">
          <div class="left-my-account-menu-m">
            <div class="triangleBottomRight firstItem"></div>
            <div class="left-my-account-menu">
              <ul>
               <li><a href="displaydata" class="active"><i class="fa fa-home"></i> Dashboard</a></li>
                <li><a href="my_booked_services"><i class="fa fa-bookmark"></i> My Booked Services</a></li>
                <li><a href="my_favorite_services"><i class="fa fa-heart"></i> My Favorite Services</a></li>
                <li><a href="my_favorite_providers"><i class="fa fa-list-alt"></i> My Favorite Providers</a></li>
                <li><a href="my_reviews"><i class="fa fa-comment"></i> My Reviews</a></li>
                <li><a href="user_Setting"><i class="fa fa-cogs"></i> Account Settings</a></li>
                <li><a href="logout"><i class="fa fa-power-off"></i> Logout</a></li>    </ul>
            </div>
            <div class="triangleBottomleft firstItem"></div>
          </div>
          <div class="right-my-account">
            <div class="right-my-account-blocks">
              <div class="detail-heading">
                <section class="title-left">
                  <h1 style="display:inline-block;">My Booked Services</h1>
                </section>
                <div class="clearfix"></div>
              </div>
              <div class="right-my-account-blocks-inner">
                <div class="z-content-inner">
                  <div class="table-responsive for-service">
                    <div class="table-responsive">
                      <table class="table table-vcenter table-striped">
                        <?php foreach ($data as $pre ) :?>
                 
                        <thead>
                          <tr>
                            <th>Service Name</th>
                            <th>Provider</th>
                            <th>Booking Date</th>
                            <th>Service Status</th>
                            <th>Review Status</th>
                            <th>Option</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $service_Name = $pre->service_Name;?></td>
                            <td><?php echo $provider_Name = $pre->provider_Name;?></td>
                            <td><?php echo $booking_Date = $pre->booking_Date;?></td>
                           <td><?php $service_Status = $pre->service_Status;
                          if($service_Status=='0'){?>
                         <label class='label-danger'><?php echo 'pending';}
                          else{?>
                             <label class='label-success'><?php echo 'completed';}?></label></td>
                          <td><label class="label-default"><?php $review_Status = $pre->review_Status;
                          if($review_Status=='0')
                          { 
                            echo "NA";
                          }
                        else{
                          if($review_Status=='1'){?>
                         <label class='label-danger'><?php echo 'review pending';}
                          else{?>
                             <label class='label-success'><?php echo 'review submitted';}}?></label></td>
                           <td><a href="#" class="btn btn-info"><i class="fa fa-eye">view</i></a></td>
                        </tr>
                            
                        </tbody>
                         <?php  endforeach; ?>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>
  </section>
</section>