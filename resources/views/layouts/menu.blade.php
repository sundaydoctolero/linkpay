<style>
    .sidebar .sidebar-menu li a {
        font-weight: bold;
    }
    .sidebar .sidebar-menu li a:hover {

        background-color: #85CE36;
        color: black;
        font-weight: bolder;

    }

</style>


<nav class="menu">
    <ul class="sidebar-menu metismenu" id="sidebar-menu">
        <li class="active">
            <a href="{{ url('/dashboard') }}">
                <i class="fa fa-home"></i> Dashboard </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-pencil-square-o"></i> Leave </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-pencil-square-o"></i> Overtime </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-pencil-square-o"></i> Reports </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-th-large"></i> Manage Payroll
                <i class="fa arrow"></i>
            </a>
            <ul class="sidebar-nav">
                <li>
                    <a href="#"> Payroll </a>
                </li>
                <li>
                    <a href="#"> Payroll Period </a>
                </li>
                <li>
                    <a href="#"> Shift Schedule </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="">
                <i class="fa fa-pencil-square-o"></i> Holidays </a>
        </li>
        <li>
            <a href="">
                <i class="fa fa-pencil-square-o"></i> Employee </a>
        </li>
        <li>
            <a href="">
                <i class="fa fa-th-large"></i> Setup
                <i class="fa arrow"></i>
            </a>
            <ul class="sidebar-nav">
                <li>
                    <a href="#"> SSS Table </a>
                </li>
                <li>
                    <a href="#"> BIR </a>
                </li>
                <li>
                    <a href="#"> PHIL Health </a>
                </li>
                <li>
                    <a href="#"> PAGIBIG </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="">
                <i class="fa fa-pencil-square-o"></i> Calendar </a>
        </li>

        {{---------------------------------------Hidden Menus----------------------------------------}}
 {{--       <li>
            <a href="">
                <i class="fa fa-area-chart"></i> Charts
                <i class="fa arrow"></i>
            </a>
            <ul class="sidebar-nav">
                <li>
                    <a href="charts-flot.html"> Flot Charts </a>
                </li>
                <li>
                    <a href="charts-morris.html"> Morris Charts </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="">
                <i class="fa fa-table"></i> Tables
                <i class="fa arrow"></i>
            </a>
            <ul class="sidebar-nav">
                <li>
                    <a href="static-tables.html"> Static Tables </a>
                </li>
                <li>
                    <a href="responsive-tables.html"> Responsive Tables </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="forms.html">
                <i class="fa fa-pencil-square-o"></i> Forms </a>
        </li>
        <li>
            <a href="">
                <i class="fa fa-desktop"></i> UI Elements
                <i class="fa arrow"></i>
            </a>
            <ul class="sidebar-nav">
                <li>
                    <a href="buttons.html"> Buttons </a>
                </li>
                <li>
                    <a href="cards.html"> Cards </a>
                </li>
                <li>
                    <a href="typography.html"> Typography </a>
                </li>
                <li>
                    <a href="icons.html"> Icons </a>
                </li>
                <li>
                    <a href="grid.html"> Grid </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="">
                <i class="fa fa-file-text-o"></i> Pages
                <i class="fa arrow"></i>
            </a>
            <ul class="sidebar-nav">
                <li>
                    <a href="login.html"> Login </a>
                </li>
                <li>
                    <a href="signup.html"> Sign Up </a>
                </li>
                <li>
                    <a href="reset.html"> Reset </a>
                </li>
                <li>
                    <a href="error-404.html"> Error 404 App </a>
                </li>
                <li>
                    <a href="error-404-alt.html"> Error 404 Global </a>
                </li>
                <li>
                    <a href="error-500.html"> Error 500 App </a>
                </li>
                <li>
                    <a href="error-500-alt.html"> Error 500 Global </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="">
                <i class="fa fa-sitemap"></i> Menu Levels
                <i class="fa arrow"></i>
            </a>
            <ul class="sidebar-nav">
                <li>
                    <a href="#"> Second Level Item
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="#"> Third Level Item </a>
                        </li>
                        <li>
                            <a href="#"> Third Level Item </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"> Second Level Item </a>
                </li>
                <li>
                    <a href="#"> Second Level Item
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="#"> Third Level Item </a>
                        </li>
                        <li>
                            <a href="#"> Third Level Item </a>
                        </li>
                        <li>
                            <a href="#"> Third Level Item
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="#"> Fourth Level Item </a>
                                </li>
                                <li>
                                    <a href="#"> Fourth Level Item </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>--}}
    </ul>
</nav>