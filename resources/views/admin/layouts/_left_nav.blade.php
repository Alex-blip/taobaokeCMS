<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="nav-close"><i class="fa fa-times-circle"></i>
    </div>
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span><img alt="image" class="img-circle" src="/adminstyle/img/avatar.jpg" /></span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                       <span class="block m-t-xs"><strong class="font-bold">{{ $name }}</strong></span>
                        <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="J_menuItem" href="{{ route('adminers.update.password', $adminerId)}}">修改密码</a>
                        </li>
                        <li><a class="J_menuItem" href="{{ route('adminers.edit', $adminerId)}}">编辑个人资料</a>
                        </li>
                        <li><a class="J_menuItem" href="{{ route('adminers.show', $adminerId) }}">个人资料</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ route('admin.logout') }}">安全退出</a>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                  <i class="glyphicon glyphicon-plus-sign"></i>
                </div>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span class="nav-label">数据面板</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="J_menuItem" href="{{ route('admin.dashbard.index') }}" data-index="0">主页示例一</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="{{ route('admin.dashbard.index') }}">主页示例二</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span class="nav-label">用户管理</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="J_menuItem" href="{{ route('adminers.show', $adminerId) }}" data-index="0">用户详情</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="{{ route('adminers.update.password', $adminerId) }}">修改密码</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="{{ route('adminers.edit', $adminerId) }}">编辑个人资料</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">优惠券商品</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="J_menuItem" href="{{ route('admin.coupons.index') }}" data-index="0">优惠券商品列表</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="{{ route('couponCategorys.index') }}">优惠券分类类别</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="{{ route('couponCategorys.create') }}">添加优惠分类</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">优惠券数据库</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="J_menuItem" href="{{ route('admin.coupons.create') }}" data-index="0">增加优惠券</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="{{ route('admin.coupons.delete.show') }}">删除优惠券</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
