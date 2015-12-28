<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
<!--            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                 
            </li>-->
            <li>
                <?php echo CHtml::link('<i class="fa fa-dashboard fa-fw"></i> Dashboard', array('admin/dashboard'), array('class' => '')); ?>

            </li>
             <li>
                <?php echo CHtml::link('<i class="fa fa-list fa-fw"></i> Banners', array('atBanner/admin'), array('class' => '')); ?>

            </li>
            <li>
                <?php echo CHtml::link('<i class="fa fa-list fa-fw"></i> Activity', array('atActivity/admin'), array('class' => '')); ?>

            </li>
             <li>
                <?php echo CHtml::link('<i class="fa fa-list fa-fw"></i> Mail Content', array('atMailContent/admin'), array('class' => '')); ?>

            </li>
            <li>
                <?php echo CHtml::link('<i class="fa fa-list fa-fw"></i> Pages', array('atPages/admin'), array('class' => '')); ?>

            </li>
             <li>
                <?php echo CHtml::link('<i class="fa fa-list fa-fw"></i> Transaction', array('atPayment/admin'), array('class' => '')); ?>

            </li>
            <li>
                <?php echo CHtml::link('<i class="fa fa-list fa-fw"></i> How it works', array('atHowItWorks/admin'), array('class' => '')); ?>

            </li>
            <li>
                <?php echo CHtml::link('<i class="fa fa-list fa-fw"></i> Kids Activities', array('atKidsActivities/admin'), array('class' => '')); ?>

            </li>
             <li>
                <?php echo CHtml::link('<i class="fa fa-list fa-fw"></i> Site Settings', array('atSiteSettings/admin'), array('class' => '')); ?>

            </li>
            <li>
                <?php echo CHtml::link('<i class="fa fa-list fa-fw"></i> Membership Value', array('atAuthvalue/admin'), array('class' => '')); ?>

            </li>
            
             <li>
                <?php echo CHtml::link('<i class="fa fa-list fa-fw"></i> Additional Membership Value', array('atAuthvalueChild/admin'), array('class' => '')); ?>

            </li>
            
             <li>
                <?php echo CHtml::link('<i class="fa fa-list fa-fw"></i>User Membership', array('atMembershipInfo/admin'), array('class' => '')); ?>

            </li>
            
            <li>
                <?php echo CHtml::link('<i class="fa fa-list fa-fw"></i> Users', array('atUsers/admin'), array('class' => '')); ?>

            </li>
            
            <li>
                <?php echo CHtml::link('<i class="fa fa-list fa-fw"></i> Partners', array('atUsers/partner'), array('class' => '')); ?>

            </li>
            
            
            
<!--            <li>
                <?php echo CHtml::link('<i class="fa fa-list"></i> Site Contacts', array('mcContactus/admin'), array('class' => '')); ?>

            </li>
            <li>
                <?php echo CHtml::link('<i class="fa fa-heart"></i> Social Links', array('mcSocialLinks/admin'), array('class' => '')); ?>

            </li>
            <li>
                <?php echo CHtml::link('<i class="fa fa-wrench fa-fw"></i> Site Settings', array('mcSiteSettings/admin'), array('class' => '')); ?>

            </li>
           


            <li>
                <a href="#"><i class="fa fa-list"></i> Registration <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <?php echo CHtml::link('New Registration', array('mrCourseRegistration/create'), array('class' => '')); ?>

                    </li>
                    <li>
                        <?php echo CHtml::link('All Registrations', array('mrCourseRegistration/admin'), array('class' => '')); ?>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="#"><i class="fa fa-list"></i> Course<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <?php echo CHtml::link('All Course', array('mrCourse/admin'), array('class' => '')); ?>

                    </li>
                    <li>
                        <?php echo CHtml::link('Add Course', array('mrCourse/create'), array('class' => '')); ?>
                    </li>
                </ul>
            </li>
             <li>
                <a href="#"><i class="fa fa-list"></i> Classes <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <?php echo CHtml::link('All Classes', array('mrClass/admin'), array('class' => '')); ?>

                    </li>
                    <li>
                        <?php echo CHtml::link('Add Classes', array('mrClass/create'), array('class' => '')); ?>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-list"></i> Students<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <?php echo CHtml::link('All Students', array('mrStudents/admin'), array('class' => '')); ?>

                    </li>
                    <li>
                        <?php echo CHtml::link('Add Students', array('mrStudents/create'), array('class' => '')); ?>
                    </li>
                    <li>
                        <?php echo CHtml::link('Route of Entry', array('mrProfessionType/admin'), array('class' => '')); ?>
                    </li>
                </ul>
            </li>
                     
            
             <li>
                <a href="#"><i class="fa fa-list"></i> User <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <?php echo CHtml::link('Add New', array('mrUsers/create'), array('class' => '')); ?>

                    </li>
                    <li>
                        <?php echo CHtml::link('All Users', array('mrUsers/admin'), array('class' => '')); ?>
                    </li>
                </ul>
            </li>
            
            

            <li>
                <?php echo CHtml::link('<i class="fa fa-list"></i> Mail Notifications', array('mcMailContent/admin'), array('class' => '')); ?>

            </li>
            
            <li>
                <?php echo CHtml::link('<i class="fa fa-list"></i> Pages', array('mcPages/admin'), array('class' => '')); ?>

            </li>
             <li>
                <?php echo CHtml::link('<i class="fa fa-list"></i> Users', array('mcUsers/admin'), array('class' => '')); ?>

            </li>
             <li>
                <?php echo CHtml::link('<i class="fa fa-list"></i> Membership', array('mcMembership/admin'), array('class' => '')); ?>

            </li>-->
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>