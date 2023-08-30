<head>
    <style>
        .title{
            color : #1062FE;
            font-size : 20px;
        }
    </style>
</head>

<div class="hpanel">
    <div class="panel-heading">
        <div class="panel-tools">
            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
            <a class="closebox"><i class="fa fa-times"></i></a>
        </div>
    </div>
    <div class="panel-body" style="background: #C1D0B5;">
        <div class="d-flex justify-content-between align-items-baseline">
            <div class="user">
                <span>Dzaky Zaidan</span>
                <p>client</p>
            </div>
            <div class="info">
                <span>client</span>
           </div>
           
        </div>
    </div>
        <div class="panel-body">
            <div class="user">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis distinctio accusamus ratione possimus dolor omnis beatae quibusdam impedit velit necessitatibus.</span>   
            </div>
           
        </div>
        <div class="panel-body">
            <li class="<?php if (@$active === 3) {
                            echo 'active';
                        } ?>">
                <a href="<?= site_url('form_ticket/') ?>">
                    <span class="title"> KEPEG </span>
                    <p> Pertanyaan mengenai ...</p>
                </a>
            </li>
        </div>
    <a href="">
        <div class="panel-body">
            <li class="<?php if (@$active === 3) {
                            echo 'active';
                        } ?>">
                <a href="<?= site_url('form_ticket/') ?>">
                    <span class="title"> BAAK </span>
                    <p> Pertanyaan mengenai ...</p>
                </a>
            </li>
        </div>
    </a>
</div>