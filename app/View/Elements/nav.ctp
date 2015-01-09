<?php 
$controller=$this->params['controller'];
$action=$this->params['action'];
?>
<nav id="subnavbar" class="navbar">
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li <?php if(($controller==='dashboard' && $action==='index')||($controller==='dashboard' && $action==='')){?>class="active"<?php }?>><a href="<?php echo HTTP_ROOT?>dashboard">Feedback</a></li>
        <li><a href="#">My Site</a></li>
        <li <?php if($controller==='dashboard' && $action==='manageUser'){?>class="active"<?php }?>><a href="<?php echo HTTP_ROOT?>dashboard/manageUser">Manage Users</a></li>
        <li><a href="#">Reporting</a></li>
        <li><a href="#">Admin</a></li>
        <li><a href="#">Training</a></li>
        <li><a href="#">Visibility</a></li>
      </ul>
    </div>
</nav>