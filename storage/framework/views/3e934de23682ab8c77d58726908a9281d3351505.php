<?php /* Side Navigation */ ?>
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="<?php echo e(route('admin.index')); ?>"><i class="glyphicon glyphicon-home"></i>
                    Kontrolna tabla</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Jela
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="<?php echo e(route('admin.index')); ?>">Dodaj jelo</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->