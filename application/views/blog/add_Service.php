<section class="content-page">
  <div class="title_box wow fadeInUp">
    <div class="container">
      <div class="breadcrumbs"> <span><a class="home" href="index.html">Home</a></span>/<span>My Account</span> </div>
      <div class="title_wr">
        <h1>Add a Service</h1>
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
                <li><a href="dashboard.html"><i class="fa fa-home"></i> Dashboard</a></li>
                <li><a href="add-a-service.html" class="active"><i class="fa fa-plus"></i> Add a Service</a></li>
                <li><a href="manage-services.html"><i class="fa fa-tasks"></i> Manage Services</a></li>
                <li><a href="manage-bookings.html"><i class="fa fa-bookmark"></i> Manage Bookings</a></li>
                <li><a href="my-calendar.html"><i class="fa fa-calendar"></i> My Calendar</a></li>
                <li><a href="account-settings.html"><i class="fa fa-cogs"></i> Account Settings</a></li>
                <li><a href="index.html"><i class="fa fa-power-off"></i> Logout</a></li>
              </ul>
            </div>
            <div class="triangleBottomleft firstItem"></div>
          </div>
          <div class="right-my-account">
            <div class="right-my-account-blocks">
              <div class="detail-heading">
                <section class="title-left">
                  <h1 style="display:inline-block;">Add a Service</h1>
                </section>
                <div class="clearfix"></div>
              </div>
              <div class="right-my-account-blocks-inner">
                <section class="register-form-part">
                  <div class="smart-forms smart-flat">
                    <form method="post" action="#">
                      <div class="form-body">
                        <div class="frm-row">
                          <label class="field-label colm colm3">Main Category:</label>
                          <div class="section colm colm9">
                            <label class="field select">
                              <select id="main-category" name="main-category">
                                <option value="">Select Main Category</option>
                                <option value="">Hairdresser</option>
                                <option value="">Nailsalon</option>
                                <option value="">Massage</option>
                                <option value="">Spa</option>
                                <option value="">Cleaning</option>
                                <option value="">Other</option>
                              </select>
                              <i class="arrow"></i> </label>
                            <span class="input-hint"> <strong>Hint:</strong> Please choose appropriate category for your service.</span> <a href="#" class="btn"><i class="fa fa-plus"></i> Request A Category</a> </div>
                        </div>
                        <div class="frm-row">
                          <label class="field-label colm colm3">Service Name:</label>
                          <div class="section colm colm9">
                            <label class="field">
                              <input type="text" placeholder="Enter service name" class="gui-input" id="names" name="names">
                            </label>
                            <span class="input-hint"> <strong>Hint:</strong> Please enter service name here.</span> </div>
                        </div>
                        <div class="frm-row">
                          <label class="field-label colm colm3">Service Description:</label>
                          <div class="section colm colm9">
                            <label class="field">
                              <textarea class="gui-textarea" id="comment" name="comment" placeholder="Enter Service Description"></textarea>
                            </label>
                            <span class="input-hint"> <strong>Hint:</strong> Please enter description up to 300 characters of the service.</span> </div>
                        </div>
                        <div class="frm-row">
                          <label class="field-label colm colm3">Service Location:</label>
                          <div class="section colm colm9">
                            <div class="option-group field">
                              <label class="option">
                                <input type="radio" name="service-location" value="incall" class="post_type">
                                <span class="radio"></span> Incall Service <span style="color: #777; display: block; font-family: Arial,Helvetica,sans-serif; font-size: 11px; padding-left: 25px;"> <strong>Hint:</strong> At your company premises.</span> </label>
                              <label class="option">
                                <input type="radio" name="service-location" value="outcall" class="post_type">
                                <span class="radio"></span> Outcall Service <span style="color: #777; display: block; font-family: Arial,Helvetica,sans-serif; font-size: 11px; padding-left: 25px;"> <strong>Hint:</strong> At customer’s door step.</span> </label>
                            </div>
                          </div>
                        </div>
                        <div class="frm-row hide outcall-range-input">
                          <label class="field-label colm colm3">Outcall Service Range:</label>
                          <div class="section colm colm9">
                            <label class="field select">
                              <select id="service-range" name="service-range">
                                <option value="">Select Outcll Service Range</option>
                                <option value="">5 Km</option>
                                <option value="">10 Km</option>
                                <option value="">25 Km</option>
                                <option value="">50 Km</option>
                                <option value="">75 Km</option>
                                <option value="">100 Km</option>
                              </select>
                              <i class="arrow"></i> </label>
                            <span class="input-hint"> <strong>Hint:</strong> Please select outcall km range.</span> </div>
                        </div>
                        <div class="frm-row">
                          <label class="field-label colm colm3">Service Time:</label>
                          <div class="section colm colm9">
                            <label class="field select">
                              <select id="service-time" name="service-time">
                                <option value="">Select Service Time</option>
                                <option value="">15 Mins</option>
                                <option value="">30 Mins</option>
                                <option value="">45 Mins</option>
                                <option value="">60 Mins</option>
                                <option value="">120 Mins</option>
                                <option value="">150 Mins</option>
                              </select>
                              <i class="arrow"></i> </label>
                            <span class="input-hint"> <strong>Hint:</strong> How long does it take(minutes).</span> </div>
                        </div>
                        <div class="frm-row">
                          <label class="field-label colm colm3">Service Preperation Time:</label>
                          <div class="section colm colm9">
                            <label class="field select">
                              <select id="service-preperation" name="service-preperation">
                                <option value="">Select Service Preperation Time</option>
                                <option value="">15 Mins</option>
                                <option value="">30 Mins</option>
                                <option value="">45 Mins</option>
                                <option value="">60 Mins</option>
                              </select>
                              <i class="arrow"></i> </label>
                            <span class="input-hint"> <strong>Hint:</strong> How long is the preparation for the service man before he can begin.</span> </div>
                        </div>
                        <div class="frm-row">
                          <label class="field-label colm colm3">Service Degrading Time:</label>
                          <div class="section colm colm9">
                            <label class="field select">
                              <select id="service-degrading " name="service-degrading ">
                                <option value="">Select Service Degrading Time</option>
                                <option value="">15 Mins</option>
                                <option value="">30 Mins</option>
                                <option value="">45 Mins</option>
                                <option value="">60 Mins</option>
                              </select>
                              <i class="arrow"></i> </label>
                            <span class="input-hint"> <strong>Hint:</strong> How long does it take after the customer leaves f.e to clean everything.</span> </div>
                        </div>
                        <div class="frm-row">
                          <label class="field-label colm colm3">Service Pricing:</label>
                          <div class="section colm colm9">
                            <label class="field">
                              <input type="text" placeholder="Enter service price" class="gui-input" id="price" name="price">
                            </label>
                            <span class="input-hint"> <strong>Hint:</strong> Please enter price range or starting price.</span> </div>
                        </div>
                        <div class="frm-row">
                          <label class="field-label colm colm3">Booking Confirmation:</label>
                          <div class="section colm colm9">
                            <div class="option-group field">
                              <label class="option">
                                <input type="radio" name="booking-confirmation">
                                <span class="radio"></span> Accept Automatic Booking <span style="color: #777; display: block; font-family: Arial,Helvetica,sans-serif; font-size: 11px; padding-left: 25px;"> <strong>Hint:</strong> Each booking will be accepted without need of your prior approval.</span> </label>
                              <label class="option">
                                <input type="radio" name="booking-confirmation">
                                <span class="radio"></span> Confirmation on Booking is must <span style="color: #777; display: block; font-family: Arial,Helvetica,sans-serif; font-size: 11px; padding-left: 25px;"> <strong>Hint:</strong> To confirm booking request your acknowledgement is necessary on this specific timeslot.</span> </label>
                            </div>
                          </div>
                        </div>
                        <div class="frm-row">
                          <label class="field-label colm colm3">Upload Servie Photo 1:</label>
                          <div class="section colm colm9">
                            <label class="field prepend-icon file">
                            <span class="button"> Choose File </span>
                            <input type="file" class="gui-file" name="file1" id="file1" onChange="document.getElementById('uploader1').value = this.value;">
                            <input type="text" class="gui-input" id="uploader1" placeholder="no file selected" readonly>
                            <label class="field-icon"><i class="fa fa-upload"></i></label>
                            </label>
                          </div>
                        </div>
                        <div class="frm-row">
                          <label class="field-label colm colm3">Upload Servie Photo 2:</label>
                          <div class="section colm colm9">
                            <label class="field prepend-icon file">
                            <span class="button"> Choose File </span>
                            <input type="file" class="gui-file" name="file2" id="file2" onChange="document.getElementById('uploader2').value = this.value;">
                            <input type="text" class="gui-input" id="uploader2" placeholder="no file selected" readonly>
                            <label class="field-icon"><i class="fa fa-upload"></i></label>
                            </label>
                          </div>
                        </div>
                        <div class="frm-row">
                          <label class="field-label colm colm3">Upload Servie Photo 2:</label>
                          <div class="section colm colm9">
                            <label class="field prepend-icon file">
                            <span class="button"> Choose File </span>
                            <input type="file" class="gui-file" name="file3" id="file3" onChange="document.getElementById('uploader3').value = this.value;">
                            <input type="text" class="gui-input" id="uploader3" placeholder="no file selected" readonly>
                            <label class="field-icon"><i class="fa fa-upload"></i></label>
                            </label>
                          </div>
                        </div>
                        <div class="frm-row">
                          <label class="field-label colm colm3"></label>
                          <div class="section colm colm9">
                            <div class="option-group field">
                              <label class="option block">
                                <input type="checkbox" name="mobileos" value="FR">
                                <span class="checkbox"></span> <strong>I agree to the <a href="terms.html">Terms &amp; Conditions</a>.</strong></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-footer provider-btn" style="text-align:left;">
                        <button type="submit" class="btn btn-info">Add Service <i class="fa fa-angle-right"></i></button>
                      </div>
                    </form>
                  </div>
                </section>
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