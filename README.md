# API Line Notify
NaeLike เนไลก์

# API GET URL

# Developer
<div class="row">
            <div class="col-lg-4">
              <img src="<?php echo $dataUser['profile_img']; ?>" class="img-fluid" alt="<?php echo $dataUser['name_two']; ?>">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content mt-4">
              <h3><?php echo $dataUser['italic_content']; ?></h3>
              <p class="font-italic">
                <?php echo $dataUser['italic']; ?>
              </p>
              <div class="row">
                <div class="col-lg-6 col-12">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>ชื่อกลาง:</strong> <?php echo $dataUser['name_one']; ?></li>
                    <li><i class="icofont-rounded-right"></i> <strong>ชื่อในวงการ:</strong> <?php echo $dataUser['name_two']; ?></li>
                    <li>
                      <i class="icofont-rounded-right"></i> <strong>เว็บไซต์:</strong>
                      <a href="<?php echo $dataUser['web']; ?>" target="_blank"><?php echo $dataUser['web']; ?></a>
                    </li>
                    <li><i class="icofont-rounded-right"></i> <strong>สัญชาติ:</strong> <?php echo $dataUser['nationality']; ?></li>
                    <li>
                      <i class="icofont-rounded-right"></i> <strong>การติดต่อ:</strong>
                      <a href="<?php echo $dataUser['line_account_url']; ?>" target="_blank"><?php echo $dataUser['line_account']; ?></a>
                    </li>
                  </ul>
                </div>
              </div>
              <p>
                <?php echo $dataUser['italic_p']; ?>
              </p>
            </div>
          </div>
