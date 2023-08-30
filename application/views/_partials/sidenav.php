<aside id="menu">
    <div id="navigation">
        <div class="profile-picture">
            <a href="<?= base_url() ?>">
                <img src="<?= base_url('assets/images/profile.jpg') ?>" class="img-circle m-b" alt="logo" />
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase">Robert Razer</span>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <small class="text-muted">Founder of App <b class="caret"></b></small>
                    </a>
                    <ul class="dropdown-menu animated flipInX m-t-xs">
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="analytics.html">Analytics</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>

                <div id="sparkline1" class="small-chart m-t-sm"></div>
                <!-- <div>
                    <h4 class="font-extra-bold m-b-xs">$260 104,200</h4>
                    <small class="text-muted">Your income from the last year in sales product X.</small>
                </div> -->
            </div>
        </div>

        <ul class="nav" id="side-menu">
            <li class="<?= @is_null($active) ? 'active' : '' ?>">
                <a href="<?= site_url() ?>">
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="<?= @isset($active) ? 'active' : '' ?>">
                <a href="#"><span class="nav-label">Support</span><span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class="<?php if (@$active === 1) {
                                    echo 'active';
                                } ?>">
                        <a href="<?= site_url('open_ticket/') ?>">Calender</a>
                    </li>
                    <li class="<?php if (@$active === 2) {
                                    echo 'active';
                                } ?>">
                        <a href="<?= site_url('view_ticket/') ?>">View Tickets</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Logout</a>
            </li>
        </ul>
    </div>
</aside>