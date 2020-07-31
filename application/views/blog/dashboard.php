
<section class="content-page">
  <div class="title_box wow fadeInUp">
    <div class="container">
      <div class="breadcrumbs"> <span><a class="home" href="index.html">Home</a></span>/<span>My Account</span> </div>
      <div class="title_wr">
        <h1>Dashboard</h1>
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
                <li><a href="logout"><i class="fa fa-power-off"></i> Logout</a></li>
              </ul>
            </div>
            <div class="triangleBottomleft firstItem"></div>
          </div>
          <div class="right-my-account">
            <div class="right-my-account-blocks">
              <div class="detail-heading">
                <section class="title-left">
                  <h1 style="display:inline-block;">Sophia Lopez</h1>
                </section>
                <div class="clearfix"></div>
              </div>
              <div class="right-my-account-blocks-inner">
                <div id="profilePic">
                  <div class="pro-pic"><img class="propic_img" src="images/profile-pic.jpg" alt="">
                    <div class="chang-but btn-success"><a href="#">Change Photo</a>
                      <input type="file" style="cursor:pointer;" title="" id="uploadedfile" name="profile_image">
                    </div>
                    <div class="wait-photo" style="display: none;" id="waiting-div"> <span>Please wait<br>
                      <img alt="Loader" title="Loader" width="64" height="64" src="images/loading-bubbles.svg"> </span> </div>
                  </div>
                </div>
                  
                <section class="profile-info">
                   <?php foreach ($data as $user ) :?>
                 
                  <ul>
                    <li><span class="s-left1">Name :</span><span class="s-right"><?php echo $name = $user->name;?> </span>
                      <section class="clearfix"></section>
                    </li>
                    <li><span class="s-left1"> Email Address :</span><span class="s-right"> <?php echo $email = $user->email;?></span>
                      <section class="clearfix"></section>
                    </li>
                    <li><span class="s-left1">Date of Birth :</span><span class="s-right"><?php echo $date_Of_Birth = $user->date_Of_Birth ;?> </span>
                      <section class="clearfix"></section>
                    </li>
                    <li><span class="s-left1"> Contact No. :</span><span class="s-right"><?php echo $contact_No = $user->contact_No ;?></span>
                      <section class="clearfix"></section>
                    </li>
                    <li><span class="s-left1"> Address :</span><span class="s-right"> <?php echo $address = $user->address ;?> </span>
                      <section class="clearfix"></section>
                    </li>
                    <li><span class="s-left1">Account Status :</span><span class="s-right"> Active</span>
                      <section class="clearfix"></section>
                    </li>
                    <li><span class="s-left1">Last Logged in :</span><span class="s-right"> 1 Days ago </span>
                      <section class="clearfix"></section>
                    </li>
                  </ul>
                   <?php endforeach; ?>
              
                </section>
                <div class="clearfix"></div>
                <div class="heading-section clearfix">
                  <h2>Recent <span>Booking History</span></h2>
                </div>
                <div class="table-responsive for-service">
                  <div class="table-responsive">
                    <table class="table table-vcenter table-striped">
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
                          <td>Lorem ipsum dolor sit amet</td>
                          <td>Rob Roy Salon</td>
                          <td>19-Aug-2015 10:00</td>
                          <td><label class="label-danger">Pending</label></td>
                          <td><label class="label-default">NA</label></td>
                          <td><a href="#" class="btn btn-info"><i class="fa fa-eye"></i> View</a></td>
                        </tr>
                        <tr>
                          <td>Lorem ipsum dolor sit amet</td>
                          <td>Waterlilly Spa Center</td>
                          <td>06-Jul-2015 11:00</td>
                          <td><label class="label-danger">Pending</label></td>
                          <td><label class="label-default">NA</label></td>
                          <td><a href="#" class="btn btn-info"><i class="fa fa-eye"></i> View</a></td>
                        </tr>
                        <tr>
                          <td>Lorem ipsum dolor sit amet</td>
                          <td>Grace's Auto Mobile</td>
                          <td>10-May-2015 10:00</td>
                          <td><label class="label-danger">Pending</label></td>
                          <td><label class="label-default">NA</label></td>
                          <td><a href="#" class="btn btn-info"><i class="fa fa-eye"></i> View</a></td>
                        </tr>
                      </tbody>
                    </table>
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
  