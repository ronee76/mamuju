<div class="x_panel">
                  <div class="x_title">
                    <h2>DATA YANG HARUS DI DISTRIBUSIKAN KE MASING MASING LAB</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display: block;">
               <div>

                      
                      
                      <!-- end of user-activity-graph -->

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">DISTRIBUSI BAKTERI</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">DISTRIBUSI JAMUR</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">DISTRIBUSI PARASIT</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">DISTRIBUSI VIRUS</a>
                          </li>
                        
                        </ul>
                          
                      <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                         <?php $this->load->view('V_manajer/V_distribusi_bakteri');?>
                         <!-- end recent activity -->

                       </div>
                      
                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <!-- start user projects -->
                            <?php $this->load->view('V_manajer/V_distribusi_jamur');?>
                       
                            <!-- end user projects -->

                     </div>
                     
                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            
                         <?php $this->load->view('V_manajer/V_distribusi_parasit');?>
                                
                      </div>
                        
                      <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                            
                         <?php $this->load->view('V_manajer/V_distribusi_virus');?>
                          
                      </div>
                       </div>
                      </div>
                    </div>
                  </div>
                </div>

</div>