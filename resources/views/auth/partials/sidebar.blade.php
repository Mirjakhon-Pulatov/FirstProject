<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Меню</li>

                <li>
                    <a href="{{ route('admin') }}" class="waves-effect">
                        <i class="fa fa-house"></i>
                        <span>Главная</span>
                    </a>
                </li>


                <li class="menu-title" key="t-apps">Страницы</li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span key="t-projects">Проекты</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('project.index') }}" key="t-create-new">Добавить проект</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('messages') }}" class="waves-effect">
                        <i class="bx bx-chat fa-2x"></i>
                        <span key="t-messages">Cообщения</span>
                    </a>
                </li>

                <li class="menu-title" key="t-pages">Настройки</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-solid fa-2x fa-gear"></i>
                        <span key="t-settings">Настройки</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('profile.edit',Auth::user()->id)}}" key="t-profile">Профиль</a></li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
