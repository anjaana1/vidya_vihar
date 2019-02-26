<div class="container mt-1" id="my_profile">
    <div class="row" style="height:420px;">
       <?php foreach($user_profile as $u): ?>
        <div class="card mx-auto p-1" id="cover_pic" style="width:70%;height:308px;">
            <img src="<?= base_url('assets/img/'.$u->cover_pic); ?>" style="width:790px;;height:298px;" />
        </div>
        <div class="card mx-auto" id="display_image">
            <img src="<?= base_url('assets/img/'.$u->display_pic); ?>" style="position:absolute;" /> 
        </div>
        <?php endforeach; ?>
    </div>
    <div class="row mt-3">
        <div class="col-lg-6 mx-auto text-center">
       <?php foreach($user_accounts as $u): ?>
            <h5 class="text-uppercase"><?= $u->first_name; ?>&nbsp;<?= $u->last_name; ?></h5>
            <hr class="w-75 p-0" />
                <i class="fas fa-envelope-open text-secondary mr-2 d-inline"></i>
                <?= $u->email; ?>
        <?php endforeach; ?>
       <?php foreach($user_profile as $u): ?>
                <p class="mt-3">
                    <i class="fas fa-user-circle text-secondary mr-2"></i><?= $u->intro; ?>
                </p>
                <p class="mt-2 inline-group">
                        <i class="fas fa-graduation-cap text-secondary d-inline mr-2"></i><label class="text-uppercase"><?= $u->course; ?></label> in <label><?= $u->semester; ?></label><sup>th</sup> semester
                </p>
        <?php endforeach; ?>
               <br />
                <button class="btn btn-secondary btn-sm px-4 mb-2 mx-auto" data-toggle="modal" data-target="#exampleModal1">
                    Edit Profile
                </button>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="<?= base_url('home/edit_profile'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-header p-1">
        <h6 class="modal-title ml-3 mt-1" id="exampleModalLabel">Update Profile</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <div class="row p-1">
                  <div class="input-group">
                      <div class="container row">
                          <div class="col-lg-4">
                              <label class="mt-2 h6 text-secondary">Course</label>
                          </div>
                          <div class="col-lg-8">
                              <select class="form-control" name="course">
                                 <option disabled>Select Course</option>
                                  <option value="B.Tech">B.Tech</option>
                                  <option value="BBA">BBA</option>
                                  <option value="BCA">BCA</option>
                              </select>
                              <?= form_error('course'); ?>
                          </div>
                      </div>
                      <div class="container row mt-2">
                          <div class="col-lg-4">
                              <label class="mt-2 h6 text-secondary">Semester</label>
                          </div>
                          <div class="col-lg-8">
                              <select class="form-control" name="semester" value="<?= set_value('semester'); ?>">
                                 <option disabled>Select Semester</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                              </select>
                              <?= form_error('semester'); ?>
                          </div>
                      </div>
                      <div class="container row mt-2">
                          <div class="col-lg-4">
                              <label class="mt-2 h6 text-secondary">Profile Image</label>
                          </div>
                          <div class="col-lg-8">
                              <input type="file" class="form-control" name="profile_pic" value="<?= set_value('profile_pic'); ?>" />
                              <?= form_error('profile_pic'); ?>
                          </div>
                      </div>
                      <div class="container row mt-2">
                          <div class="col-lg-4">
                              <label class="mt-2 h6 text-secondary">Cover Image</label>
                          </div>
                          <div class="col-lg-8">
                              <input type="file" class="form-control" name="cover_pic" value="<?= set_value('cover_pic'); ?>" />
                              <?= form_error('cover_pic'); ?>
                          </div>
                      </div>
                       <div class="container row mt-2">
                          <div class="col-lg-4 mr-auto">
                              <label class="mt-2 h6 text-secondary">Intro</label>
                          </div>
                          <div class="col-lg-8">
                              <textarea class="form-control" name="intro" rows="2" placeholder="Introduce yourself in not more than 100 characters" value="<?= set_value('intro'); ?>"></textarea>
                              <?= form_error('intro'); ?>
                          </div>
                      </div>
                  </div>
               </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-md btn-success" value="UPDATE" />
      </div>
    </form>
    </div>
  </div>
</div>
       
       <h6 class="mt-2">
           My Profile
       </h6>
       <hr class="w-50 text-secondary" />
           <?php foreach($user_posts as $u): ?>
           <?php foreach($user_profile as $p): ?>
       <div class="card mb-2">
           <div class="card-header p-2 bg-light">
                  <img src="<?= base_url('assets/img/'.$p->display_pic); ?>" class="ml-2 float-left" style="width:40px;height:40px;border-radius:50%;" />
                   <div class="float-left" style="line-height:5px;">
                       <h6 class="pr-5 ml-2 text-uppercase"><?= $p->first_name; ?>&nbsp;<?= $p->last_name; ?></h6>
                       <p class="ml-2"><?= $p->email; ?></p>
                   </div>
           </div>
           <div class="card-body p-2">
               <p><?= $u->descr; ?></p>
               <img src="<?= base_url('assets/img/'.$u->file); ?>" class="p-0" style="width:100%;height:350px;" />
           </div>
       </div>
           <?php endforeach; ?>
           <?php endforeach; ?>
        </div>
    </div>
</div>