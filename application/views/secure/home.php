<div class="container" id="homepage">
    <div class="row mt-1">
        <div class="col-lg-3 p-0">
            <div class="card">
               <div class="card-header text-center bg-light">
                   <span class="inline-group text-dark p-1">
                       <i class="fas fa-bars text-secondary"></i>
                       <p class="ml-2 d-inline">CATEGORY</p>
                   </span>
               </div>
                <div class="card-body p-1">
                    <ul class="list-group">
                    <a href="#" class="list-group-item p-0">
                        <span class="inline-group text-dark p-2 px-5">
                            <i class="fab fa-facebook-messenger text-primary"></i>
                            <p class="ml-2 d-inline">Messenger</p>
                        </span>
                    </a>
                    <a href="#" class="list-group-item p-0">
                        <span class="inline-group text-dark p-2 px-5">
                            <i class="fas fa-file-alt text-warning"></i>
                            <p class="ml-2 d-inline">Pages</p>
                        </span>
                    </a>
                    <a href="#" class="list-group-item p-0">
                        <span class="inline-group text-dark p-2 px-5">
                            <i class="fas fa-users text-success"></i>
                            <p class=" d-inline">Groups</p>
                        </span>
                    </a>
                    <a href="#" class="list-group-item p-0">
                        <span class="inline-group text-dark p-2 px-5">
                            <i class="fas fa-calendar text-danger"></i>
                            <p class="ml-2 d-inline">Events</p>
                        </span>
                    </a>
                </ul>
                </div>
            </div>
            <div class="card py-3 px-2">
                <div class="card-header">
                    <div class="inline-group">
                        <center>
                            <i class="fas fa-globe d-inline mr-2 text-secondary"></i><p class="d-inline">My Profile</p>
                        </center>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group">
                        <li class="list-group-item inline-group p-1">
                        <?php foreach($user_profile as $u): ?>
                            <img src="<?= base_url('assets/img/'.$u->display_pic); ?>"  style="width:50px;height:50px;border-radius:50%;margin-bottom:3px;" class="d-inline ml-3" />
                <?php foreach($user_accounts as $u): ?>
                            <h6 class="h6 text-uppercase d-inline ml-2"><?= $u->first_name; ?>&nbsp;&nbsp;<?= $u->last_name; ?></h6>
                        </li>
                        <?php endforeach; ?>
                        <li class="list-group-item p-1 px-2">
                            <div class="inline-group">
                                <label class="text-secondary"><i class="fas fa-envelope-open mr-1"></i></label>
                                <p class="text-lowercase d-inline"><?= $u->email; ?></p>
                            </div>
                        </li>
                        <li class="list-group-item p-1 px-2">
                            <div class="inline-group">
                                <label class="text-secondary"><i class="fas fa-phone mr-1"></i></label>
                                <p class="text-lowercase d-inline"><?= $u->phone; ?></p>
                            </div>
                        </li>
                        <?php endforeach; ?>
                        <?php foreach($user_profile as $u): ?>
                        <li class="list-group-item p-1 px-2">
                            <div class="inline-group">
                                <label class="text-secondary"><i class="fas fa-graduation-cap mr-1"></i></label>
                                <p class="d-inline"><label class="text-uppercase"><?= $u->course; ?></label> in <label><?= $u->semester; ?></label><sup>th</sup> semester</p>
                            </div>
                        </li>
                    </ul>
                    <center>
                        <a href="#" class="btn btn-secondary text-white btn-sm col-lg-6 mt-2">Edit Profile</a>
                    </center>
                </div>
            </div>
                <?php endforeach; ?>
        </div>
        <div class="col-lg-6">
            <div class="card" data-toggle="modal" data-target="#exampleModal">
                <div class="card-header p-0">
                    <h6 class="ml-4 mt-2">Create Post</h6>
                </div>
                <div class="card-body p-1">
                   <div class="row">
                       <div class="col-lg-1">
                        <?php foreach($user_profile as $u): ?>
                           <img src="<?= base_url('assets/img/'.$u->display_pic); ?>" style="width:35px;height:35px;border-radius:50%;" />
                        <?php endforeach; ?>
                       </div>
                       <div class="col-lg-11">
                           <textarea class="form-control py-2" rows="1" placeholder="Write something here..." name="create_post" style="border:none;"></textarea>
                       </div>
                   </div>
                    <hr class="w-100" />
                    <div class="row">
                        <div class="col-lg-4">
                           <button class="btn btn-light px-4">
                               <i class="fas fa-camera text-primary"></i>
                               Photo/Video
                           </button> 
                        </div>
                        <div class="col-lg-4">
                           <button class="btn btn-light px-4">
                               <i class="fas fa-user-tag text-success"></i>
                               Tag Friends
                           </button> 
                        </div>
                        <div class="col-lg-4">
                           <button class="btn btn-light">
                               <i class="fas fa-smile text-warning"></i>
                               Feeling Activity
                           </button> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
          <form action="<?= base_url('home/index'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-header p-1">
        <h6 class="modal-title ml-3 mt-1" id="exampleModalLabel">Create Post</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-2">
              <div class="row">
                    <?php foreach($user_profile as $u): ?>
                       <div class="col-lg-1">
                           <center>
                               <img src="<?= base_url('assets/img/'.$u->display_pic); ?>" class="p-1" style="width:55px;height:55px;border-radius:50%;" />
                           </center>
                     <?php endforeach; ?>
                       </div>
                       <div class="col-lg-11">
                                   <textarea class="form-control p-1 ml-2" rows="1" placeholder="Write something here..." name="create_post" style="border:none;"></textarea>
                                   <input type="file" class="form-control mt-2 p-1 m-1" name="post_file" style="border:none;"/>
                       </div>
                   </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="POST" />
      </div>
          </form>
    </div>
  </div>
</div>
                   <?php foreach($user_posts as $p): ?>
            <div class="card mt-2">
                <div class="card-header p-2">
                    <div class="float-left mt-1" style="line-height:5px;">
                    <h6 class="text-uppercase">
                        <?= $p->first_name; ?>&nbsp;<?= $p->last_name; ?>
                    </h6>
                    <p class="text-secondary">
                        <?= $p->email; ?>
                    </p>
                    </div>
                </div>
                <div class="card-body p-2">
                    <p class="text-center"><?= $p->descr; ?></p>
                    <img src="<?= base_url('assets/img/'.$p->file); ?>" class="p-0" style="width:100%;height:350px;" />
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>