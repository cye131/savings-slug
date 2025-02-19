<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html */
class __TwigTemplate_a55cd274f18e742922e2e27c899e01278db6731180d7fa49b74effd8e61bb72b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'staticlinks' => [$this, 'block_staticlinks'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">

<head>
    <meta http-equiv=Content-Type content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <title>";
        // line 8
        echo twig_escape_filter($this->env, ($context["title"] ?? null));
        echo "</title>
    <link rel=\"icon\" type=image/ico href=\"/static/favicon2.png\"/>
    <meta name=description content=\"Content.\" />
    <meta name=keywords content=\"keyword1 keyword2 keyword3 keyword4\" />
    
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/style.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\"/> 

\t<script src=\"//code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>

\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
\t<script src=\"//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>

\t<script src=\"//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\"></script>
\t<script src=\"//cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js\"></script>
\t
\t<script src=\"//cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js\"></script>
\t<!-- <script src=\"//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script> --> <!-- Excel export -->
\t<script src=\"//cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js\"></script> <!-- HTML export buttons -->
\t<!-- <script src=\"//cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js\"></script> -->
\t\t
\t\t<!--
    <script src=\"//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js\"></script>
    <script src=\"//cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js\"></script>
\t\t-->
    <script src=\"//code.highcharts.com/stock/highstock.js\"></script>
\t
\t\t<script src=\"https://cye131.github.io/gradient.js/gradient-min.js\"></script>
\t\t
\t\t<link href=\"https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css\" rel=\"stylesheet\">
\t\t<script src=\"https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js\"></script>

    ";
        // line 43
        echo ($context["pageJS"] ?? null);
        echo "

    ";
        // line 45
        $this->displayBlock('staticlinks', $context, $blocks);
        // line 46
        echo "</head>

<body>
\t<header>
\t\t<div class=\"container-fluid\" style=\"height:.25rem;background-color:rgba(10, 24, 66,1);\"></div>        
\t\t<nav class=\"navbar navbar-expand-md navbar-dark sticky-top\">
\t\t\t<a class=\"navbar-brand\" href=\"/\">
\t\t\t\t<img src=\"/static/slug3.png\" class=\"py-0\" height=\"30\" width=\"100\"></img>
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsingNavbarLg\"><span class=\"navbar-toggler-icon\"></span></button>
\t\t\t
\t\t\t<div class=\"navbar-collapse collapse\" id=\"collapsingNavbarLg\">
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/\">Work In Progress</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/about\">Work in Progress</a>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/about\"><span class=\"fa fa-bank fa-fw mr-2\"></span>Accounts Summary</a>
\t\t\t\t\t</li>


\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbar-detailed-accounts-label\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"fa fa-list fa-fw mr-2\"></span>Detailed Accounts
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbar-detailed-accounts-label\" id=\"navbar-detailed-accounts\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Accounts Summary</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- Sidebar Replacement for Smaller Devices: d-none d-xs-block d-md-none will show from only XS and S screens, hide for all else. See bootstrap 4 docs for details.-->
\t\t\t\t\t<li class=\"nav-item dropdown d-none d-xs-block d-md-none\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"sidebarReplacement1\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"sidebarReplacement1\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t</header>
    
\t<div class=\"container-fluid\">
\t<div class=\"row flex-xl-nowrap\">
\t\t<nav class=\"sidebar col-md-3 col-lg-2 d-none d-md-block px-0 py-2\" id=\"sidebar\"> <!-- Hide Sidebar for XS and S Devices -->
\t\t\t<ul class=\"list-group\">
\t\t\t\t<a href=\"/accounts\" class=\"font-weight-bold list-group-item list-group-item-action flex-column bg-transparent\">
\t\t\t\t\t<div class=\"d-flex w-100 justify-content-start align-items-center\">
\t\t\t\t\t\t<span class=\"fa fa-bank fa-fw mr-3\"></span> 
\t\t\t\t\t\t<span>Accounts Summary</span>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t
\t\t\t\t<a href=\"#transactions-links\" data-toggle=\"collapse\"class=\"nav-link font-weight-bold list-group-item list-group-item-action flex-column align-items-start bg-transparent\" aria-expanded=\"false\">
\t\t\t\t\t<div class=\"d-flex w-100 justify-content-start align-items-center\">
\t\t\t\t\t\t<span class=\"fa fa-list fa-fw mr-3\"></span> 
\t\t\t\t\t\t<span class=\"menu-collapsed\">Detailed Accounts</span>
\t\t\t\t\t\t<span class=\"submenu-icon ml-auto\"></span>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<div id='transactions-links' class=\"collapse sidebar-submenu\">
\t\t\t\t\t<!--<a class=\"list-group-item list-group-item-action\" href=\"/transactions\"><span>Transactions 1</span></a>-->
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<!--
\t\t\t\t<a href=\"/construction\" class=\"nav-link font-weight-bold list-group-item list-group-item-action flex-column align-items-start bg-transparent\">
\t\t\t\t\t<img height=\"14\" width=\"16\" class=\"mr-3\" src=\"https://img.icons8.com/ios-filled/50/000000/normal-distribution-histogram.png\">
\t\t\t\t\t<span>Monthly Budget</span>
\t\t\t\t</a>
\t\t\t\t-->
\t\t\t\t<a href=\"/error\" class=\"font-weight-bold list-group-item list-group-item-action flex-column bg-transparent\">
\t\t\t\t\t<div class=\"d-flex w-100 justify-content-start align-items-center\">
\t\t\t\t\t\t<span class=\"fa fa-money fa-fw mr-3\"></span> 
\t\t\t\t\t\t<span>Monthly Budget</span>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t
\t\t\t\t<a href=\"/login\" class=\"font-weight-bold list-group-item list-group-item-action flex-column bg-transparent\">
\t\t\t\t\t<div class=\"d-flex w-100 justify-content-start align-items-center\">
\t\t\t\t\t\t<span class=\"fa fa-power-off fa-fw mr-3\"></span> 
\t\t\t\t\t\t<span>Log Out</span>
\t\t\t\t\t</div>
\t\t\t\t</a>
       </ul>
    </nav>
      
\t\t<main class=\"col-md-9 col-lg-10 ml-sm-auto pt-3 px-2\" id=\"main\">
      ";
        // line 142
        $this->displayBlock('content', $context, $blocks);
        // line 144
        echo "    </main>
\t</div>
\t\t<div class=\"row flex-xl-nowrap\">
\t\t\t<div class=\"col-12 font-small pt-4\" style=\"background: rgba(10, 24, 66,1);\">
\t\t\t\t<div class=\"row\">
\t\t
\t\t\t\t\t<div class=\"col-md-6 mt-md-0 mt-3\">
\t\t\t\t\t\t<h5 class=\"text-uppercase\">CHIMPS v5.2</h5>
\t\t\t\t\t\t<p>Under development</p>
\t\t\t\t\t</div>\t\t
\t\t\t\t\t<div class=\"col-md-6 mb-md-0 mb-3\">
\t\t\t\t\t\t<h5 class=\"text-uppercase\">Links</h5>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\">Link 1</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"footer-copyright text-center\">© 2019
\t\t\t\t\t<a href=\"test\">Email</a>
\t\t\t\t</div>\t\t\t
\t\t\t</div>
\t\t</div>
\t\t\t
\t\t\t

\t\t</div>
\t</div>

        
        
        
<div class=\"overlay h-100\" id=\"overlay\" style=\"display:none\">
    <div class=\"row h-25\">
        <div class=\"\"></div>
    </div>
    <div class=\"row\">
        <div class=\"text-center col-12\"><h4 style=\"text-align:center\" id=\"loadmessage\">Loading ...</h4></div>
    </div>
    <div class=\"row\">
        <div class=\"sk-circle\">
            <div class=\"sk-circle1 sk-child\"></div>
            <div class=\"sk-circle2 sk-child\"></div>
            <div class=\"sk-circle3 sk-child\"></div>
            <div class=\"sk-circle4 sk-child\"></div>
            <div class=\"sk-circle5 sk-child\"></div>
            <div class=\"sk-circle6 sk-child\"></div>
            <div class=\"sk-circle7 sk-child\"></div>
            <div class=\"sk-circle8 sk-child\"></div>
            <div class=\"sk-circle9 sk-child\"></div>
            <div class=\"sk-circle10 sk-child\"></div>
            <div class=\"sk-circle11 sk-child\"></div>
            <div class=\"sk-circle12 sk-child\"></div>
        </div>
    </div>
</div>


<script>
  ";
        // line 205
        echo ($context["bodyScript"] ?? null);
        echo "
</script>

</body>

</html>";
    }

    // line 45
    public function block_staticlinks($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 142
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "      ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 143,  272 => 142,  266 => 45,  256 => 205,  193 => 144,  191 => 142,  93 => 46,  91 => 45,  86 => 43,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en-US\">

<head>
    <meta http-equiv=Content-Type content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <title>{{ title|e }}</title>
    <link rel=\"icon\" type=image/ico href=\"/static/favicon2.png\"/>
    <meta name=description content=\"Content.\" />
    <meta name=keywords content=\"keyword1 keyword2 keyword3 keyword4\" />
    
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/style.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\"/> 

\t<script src=\"//code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>

\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
\t<script src=\"//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>

\t<script src=\"//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\"></script>
\t<script src=\"//cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js\"></script>
\t
\t<script src=\"//cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js\"></script>
\t<!-- <script src=\"//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script> --> <!-- Excel export -->
\t<script src=\"//cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js\"></script> <!-- HTML export buttons -->
\t<!-- <script src=\"//cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js\"></script> -->
\t\t
\t\t<!--
    <script src=\"//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js\"></script>
    <script src=\"//cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js\"></script>
\t\t-->
    <script src=\"//code.highcharts.com/stock/highstock.js\"></script>
\t
\t\t<script src=\"https://cye131.github.io/gradient.js/gradient-min.js\"></script>
\t\t
\t\t<link href=\"https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css\" rel=\"stylesheet\">
\t\t<script src=\"https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js\"></script>

    {{ pageJS | raw }}

    {% block staticlinks %}{% endblock %}
</head>

<body>
\t<header>
\t\t<div class=\"container-fluid\" style=\"height:.25rem;background-color:rgba(10, 24, 66,1);\"></div>        
\t\t<nav class=\"navbar navbar-expand-md navbar-dark sticky-top\">
\t\t\t<a class=\"navbar-brand\" href=\"/\">
\t\t\t\t<img src=\"/static/slug3.png\" class=\"py-0\" height=\"30\" width=\"100\"></img>
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsingNavbarLg\"><span class=\"navbar-toggler-icon\"></span></button>
\t\t\t
\t\t\t<div class=\"navbar-collapse collapse\" id=\"collapsingNavbarLg\">
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/\">Work In Progress</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/about\">Work in Progress</a>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/about\"><span class=\"fa fa-bank fa-fw mr-2\"></span>Accounts Summary</a>
\t\t\t\t\t</li>


\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbar-detailed-accounts-label\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"fa fa-list fa-fw mr-2\"></span>Detailed Accounts
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbar-detailed-accounts-label\" id=\"navbar-detailed-accounts\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Accounts Summary</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- Sidebar Replacement for Smaller Devices: d-none d-xs-block d-md-none will show from only XS and S screens, hide for all else. See bootstrap 4 docs for details.-->
\t\t\t\t\t<li class=\"nav-item dropdown d-none d-xs-block d-md-none\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"sidebarReplacement1\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"sidebarReplacement1\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t</header>
    
\t<div class=\"container-fluid\">
\t<div class=\"row flex-xl-nowrap\">
\t\t<nav class=\"sidebar col-md-3 col-lg-2 d-none d-md-block px-0 py-2\" id=\"sidebar\"> <!-- Hide Sidebar for XS and S Devices -->
\t\t\t<ul class=\"list-group\">
\t\t\t\t<a href=\"/accounts\" class=\"font-weight-bold list-group-item list-group-item-action flex-column bg-transparent\">
\t\t\t\t\t<div class=\"d-flex w-100 justify-content-start align-items-center\">
\t\t\t\t\t\t<span class=\"fa fa-bank fa-fw mr-3\"></span> 
\t\t\t\t\t\t<span>Accounts Summary</span>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t
\t\t\t\t<a href=\"#transactions-links\" data-toggle=\"collapse\"class=\"nav-link font-weight-bold list-group-item list-group-item-action flex-column align-items-start bg-transparent\" aria-expanded=\"false\">
\t\t\t\t\t<div class=\"d-flex w-100 justify-content-start align-items-center\">
\t\t\t\t\t\t<span class=\"fa fa-list fa-fw mr-3\"></span> 
\t\t\t\t\t\t<span class=\"menu-collapsed\">Detailed Accounts</span>
\t\t\t\t\t\t<span class=\"submenu-icon ml-auto\"></span>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<div id='transactions-links' class=\"collapse sidebar-submenu\">
\t\t\t\t\t<!--<a class=\"list-group-item list-group-item-action\" href=\"/transactions\"><span>Transactions 1</span></a>-->
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<!--
\t\t\t\t<a href=\"/construction\" class=\"nav-link font-weight-bold list-group-item list-group-item-action flex-column align-items-start bg-transparent\">
\t\t\t\t\t<img height=\"14\" width=\"16\" class=\"mr-3\" src=\"https://img.icons8.com/ios-filled/50/000000/normal-distribution-histogram.png\">
\t\t\t\t\t<span>Monthly Budget</span>
\t\t\t\t</a>
\t\t\t\t-->
\t\t\t\t<a href=\"/error\" class=\"font-weight-bold list-group-item list-group-item-action flex-column bg-transparent\">
\t\t\t\t\t<div class=\"d-flex w-100 justify-content-start align-items-center\">
\t\t\t\t\t\t<span class=\"fa fa-money fa-fw mr-3\"></span> 
\t\t\t\t\t\t<span>Monthly Budget</span>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t
\t\t\t\t<a href=\"/login\" class=\"font-weight-bold list-group-item list-group-item-action flex-column bg-transparent\">
\t\t\t\t\t<div class=\"d-flex w-100 justify-content-start align-items-center\">
\t\t\t\t\t\t<span class=\"fa fa-power-off fa-fw mr-3\"></span> 
\t\t\t\t\t\t<span>Log Out</span>
\t\t\t\t\t</div>
\t\t\t\t</a>
       </ul>
    </nav>
      
\t\t<main class=\"col-md-9 col-lg-10 ml-sm-auto pt-3 px-2\" id=\"main\">
      {% block content %}
      {% endblock %}
    </main>
\t</div>
\t\t<div class=\"row flex-xl-nowrap\">
\t\t\t<div class=\"col-12 font-small pt-4\" style=\"background: rgba(10, 24, 66,1);\">
\t\t\t\t<div class=\"row\">
\t\t
\t\t\t\t\t<div class=\"col-md-6 mt-md-0 mt-3\">
\t\t\t\t\t\t<h5 class=\"text-uppercase\">CHIMPS v5.2</h5>
\t\t\t\t\t\t<p>Under development</p>
\t\t\t\t\t</div>\t\t
\t\t\t\t\t<div class=\"col-md-6 mb-md-0 mb-3\">
\t\t\t\t\t\t<h5 class=\"text-uppercase\">Links</h5>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\">Link 1</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"footer-copyright text-center\">© 2019
\t\t\t\t\t<a href=\"test\">Email</a>
\t\t\t\t</div>\t\t\t
\t\t\t</div>
\t\t</div>
\t\t\t
\t\t\t

\t\t</div>
\t</div>

        
        
        
<div class=\"overlay h-100\" id=\"overlay\" style=\"display:none\">
    <div class=\"row h-25\">
        <div class=\"\"></div>
    </div>
    <div class=\"row\">
        <div class=\"text-center col-12\"><h4 style=\"text-align:center\" id=\"loadmessage\">Loading ...</h4></div>
    </div>
    <div class=\"row\">
        <div class=\"sk-circle\">
            <div class=\"sk-circle1 sk-child\"></div>
            <div class=\"sk-circle2 sk-child\"></div>
            <div class=\"sk-circle3 sk-child\"></div>
            <div class=\"sk-circle4 sk-child\"></div>
            <div class=\"sk-circle5 sk-child\"></div>
            <div class=\"sk-circle6 sk-child\"></div>
            <div class=\"sk-circle7 sk-child\"></div>
            <div class=\"sk-circle8 sk-child\"></div>
            <div class=\"sk-circle9 sk-child\"></div>
            <div class=\"sk-circle10 sk-child\"></div>
            <div class=\"sk-circle11 sk-child\"></div>
            <div class=\"sk-circle12 sk-child\"></div>
        </div>
    </div>
</div>


<script>
  {{ bodyScript |raw }}
</script>

</body>

</html>", "base.html", "/var/www/budget.macrodawg.com/public/templates/base.html");
    }
}
