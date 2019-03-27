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

/* base.html.twig */
class __TwigTemplate_736e632945d8cb0df8b5730309410a1ee82171209e8e43cb5033059c05d4866f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'extrastylesheets' => [$this, 'block_extrastylesheets'],
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 218
        echo "        ";
        $this->displayBlock('extrastylesheets', $context, $blocks);
        // line 220
        echo "    </head>
    <body>
        ";
        // line 222
        $this->displayBlock('navbar', $context, $blocks);
        // line 252
        echo "
        ";
        // line 253
        $this->displayBlock('content', $context, $blocks);
        // line 256
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 259
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

            <style type=\"text/css\">
                body{
                    background: #eeeeee;
                    font-family: 'Varela Round', sans-serif;
                }
                .form-inline {
                    display: inline-block;
                }
                .navbar-header.col {
                    padding: 0 !important;
                }
                .navbar {
                    color: #fff;
                    background: #2fa360;
                    padding: 5px 16px;
                    border-radius: 0;
                    border: none;
                    box-shadow: 0 0 4px rgba(0,0,0,.1);
                }
                .navbar img {
                    border-radius: 50%;
                    width: 36px;
                    height: 36px;
                    margin-right: 10px;
                }
                .navbar .navbar-brand {
                    color: #efe5ff;
                    padding-left: 0;
                    padding-right: 50px;
                    font-size: 24px;
                }
                .navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
                    color: #fff;
                }
                .navbar .navbar-brand i {
                    font-size: 25px;
                    margin-right: 5px;
                }
                .search-box {
                    position: relative;
                }
                .search-box input {
                    padding-right: 35px;
                    min-height: 38px;
                    border: none;
                    background: #faf7fd;
                    border-radius: 3px !important;
                }
                .search-box input:focus {
                    background: #fff;
                    box-shadow: none;
                }
                .search-box .input-group-addon {
                    min-width: 35px;
                    border: none;
                    background: transparent;
                    position: absolute;
                    right: 0;
                    z-index: 9;
                    padding: 10px 7px;
                    height: 100%;
                }
                .search-box i {
                    color: #a0a5b1;
                    font-size: 19px;
                }
                .navbar .nav-item i {
                    font-size: 18px;
                }
                .navbar .nav-item span {
                    position: relative;
                    top: 3px;
                }
                .navbar .nav > li a {
                    color: #efe5ff;
                    padding: 8px 15px;
                    font-size: 14px;
                }
                .navbar .nav > li a:hover, .navbar .nav > li a:focus {
                    color: #fff;
                    text-shadow: 0 0 4px rgba(255,255,255,0.3);
                }
                .navbar .nav > li > a > i {
                    display: block;
                    text-align: center;
                }
                .navbar .dropdown-item i {
                    font-size: 16px;
                    min-width: 22px;
                }
                .navbar .dropdown-item .material-icons {
                    font-size: 21px;
                    line-height: 16px;
                    vertical-align: middle;
                    margin-top: -2px;
                }
                .navbar .nav-item.open > a, .navbar .nav-item.open > a:hover, .navbar .nav-item.open > a:focus {
                    color: #fff;
                    background: none !important;
                }
                .navbar .dropdown-menu {
                    border-radius: 1px;
                    border-color: #e5e5e5;
                    box-shadow: 0 2px 8px rgba(0,0,0,.05);
                }
                .navbar .dropdown-menu li a {
                    color: #777 !important;
                    padding: 8px 20px;
                    line-height: normal;
                }
                .navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:focus {
                    color: #333 !important;
                    background: transparent !important;
                }
                .navbar .nav .active a, .navbar .nav .active a:hover, .navbar .nav .active a:focus {
                    color: #fff;
                    text-shadow: 0 0 4px rgba(255,255,255,0.2);
                    background: transparent !important;
                }
                .navbar .nav .user-action {
                    padding: 9px 15px;
                }
                .navbar .navbar-toggle {
                    border-color: #fff;
                }
                .navbar .navbar-toggle .icon-bar {
                    background: #fff;
                }
                .navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {
                    background: transparent;
                }
                .navbar .navbar-nav .open .dropdown-menu {
                    background: #faf7fd;
                    border-radius: 1px;
                    border-color: #faf7fd;
                    box-shadow: 0 2px 8px rgba(0,0,0,.05);
                }
                .navbar .divider {
                    background-color: #e9ecef !important;
                }
                @media (min-width: 1200px){
                    .form-inline .input-group {
                        width: 350px;
                        margin-left: 30px;
                    }
                }
                @media (max-width: 1199px){
                    .navbar .nav > li > a > i {
                        display: inline-block;
                        text-align: left;
                        min-width: 30px;
                        position: relative;
                        top: 4px;
                    }
                    .navbar .navbar-collapse {
                        border: none;
                        box-shadow: none;
                        padding: 0;
                    }
                    .navbar .navbar-form {
                        border: none;
                        display: block;
                        margin: 10px 0;
                        padding: 0;
                    }
                    .navbar .navbar-nav {
                        margin: 8px 0;
                    }
                    .navbar .navbar-toggle {
                        margin-right: 0;
                    }
                    .input-group {
                        width: 100%;
                    }
                }

                .myButton {
                    background-color:#44c767;
                    -moz-border-radius:28px;
                    -webkit-border-radius:28px;
                    border-radius:28px;
                    border:1px solid #18ab29;
                    display:inline-block;
                    cursor:pointer;
                    color:#ffffff;
                    font-family:Arial;
                    font-size:17px;
                    padding:10px 10px;
                    text-decoration:none;
                    text-shadow:0px 1px 0px #2f6627;
                }
                .myButton:hover {
                    background-color:#5cbf2a;
                }
                .myButton:active {
                    position:relative;
                    top:1px;
                }

            </style>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_extrastylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrastylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrastylesheets"));

        // line 219
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 222
    public function block_navbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 223
        echo "
            <nav class=\"navbar navbar-inverse navbar-expand-xl navbar-dark\">
                <div class=\"navbar-header d-flex col\">
                    <a class=\"navbar-brand\" href=\"/\"><i class=\"fa fa\"></i>Environmental <b>protection</b></a>
                    <button type=\"button\" data-target=\"#navbarCollapse\" data-toggle=\"collapse\" class=\"navbar-toggle navbar-toggler ml-auto\">
                        <span class=\"navbar-toggler-icon\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <!-- Collection of nav links, forms, and other content for toggling -->
                <div id=\"navbarCollapse\" class=\"collapse navbar-collapse justify-content-start\">

                    <ul class=\"nav navbar-nav navbar-right ml-auto\">
                        ";
        // line 238
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 238, $this->source); })()), "user", [])) {
            // line 239
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_article");
            echo "\" class=\"myButton\">Create article</a>
                        ";
        }
        // line 241
        echo "                        <li class=\"nav-item active\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("documents");
        echo "\" class=\"nav-link\"><i></i><span>Documents</span></a></li>
                        <li class=\"nav-item\"><a href=\"";
        // line 242
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("presentations");
        echo "\" class=\"nav-link\"><i></i><span>Presentations</span></a></li>
                        ";
        // line 243
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 243, $this->source); })()), "user", [])) {
            // line 244
            echo "                            <a href=\"/logout\" class=\"myButton\">Logout</a>
                        ";
        } else {
            // line 246
            echo "                            <a href=\"/login\" class=\"myButton\">Admin login</a>
                        ";
        }
        // line 248
        echo "                    </ul>
                </div>
            </nav>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 253
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 254
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 256
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 257
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  448 => 257,  439 => 256,  428 => 254,  419 => 253,  406 => 248,  402 => 246,  398 => 244,  396 => 243,  392 => 242,  387 => 241,  381 => 239,  379 => 238,  362 => 223,  353 => 222,  343 => 219,  334 => 218,  114 => 7,  105 => 6,  88 => 5,  76 => 259,  73 => 256,  71 => 253,  68 => 252,  66 => 222,  62 => 220,  59 => 218,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}{% endblock %}</title>
        {% block stylesheets %}
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

            <style type=\"text/css\">
                body{
                    background: #eeeeee;
                    font-family: 'Varela Round', sans-serif;
                }
                .form-inline {
                    display: inline-block;
                }
                .navbar-header.col {
                    padding: 0 !important;
                }
                .navbar {
                    color: #fff;
                    background: #2fa360;
                    padding: 5px 16px;
                    border-radius: 0;
                    border: none;
                    box-shadow: 0 0 4px rgba(0,0,0,.1);
                }
                .navbar img {
                    border-radius: 50%;
                    width: 36px;
                    height: 36px;
                    margin-right: 10px;
                }
                .navbar .navbar-brand {
                    color: #efe5ff;
                    padding-left: 0;
                    padding-right: 50px;
                    font-size: 24px;
                }
                .navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
                    color: #fff;
                }
                .navbar .navbar-brand i {
                    font-size: 25px;
                    margin-right: 5px;
                }
                .search-box {
                    position: relative;
                }
                .search-box input {
                    padding-right: 35px;
                    min-height: 38px;
                    border: none;
                    background: #faf7fd;
                    border-radius: 3px !important;
                }
                .search-box input:focus {
                    background: #fff;
                    box-shadow: none;
                }
                .search-box .input-group-addon {
                    min-width: 35px;
                    border: none;
                    background: transparent;
                    position: absolute;
                    right: 0;
                    z-index: 9;
                    padding: 10px 7px;
                    height: 100%;
                }
                .search-box i {
                    color: #a0a5b1;
                    font-size: 19px;
                }
                .navbar .nav-item i {
                    font-size: 18px;
                }
                .navbar .nav-item span {
                    position: relative;
                    top: 3px;
                }
                .navbar .nav > li a {
                    color: #efe5ff;
                    padding: 8px 15px;
                    font-size: 14px;
                }
                .navbar .nav > li a:hover, .navbar .nav > li a:focus {
                    color: #fff;
                    text-shadow: 0 0 4px rgba(255,255,255,0.3);
                }
                .navbar .nav > li > a > i {
                    display: block;
                    text-align: center;
                }
                .navbar .dropdown-item i {
                    font-size: 16px;
                    min-width: 22px;
                }
                .navbar .dropdown-item .material-icons {
                    font-size: 21px;
                    line-height: 16px;
                    vertical-align: middle;
                    margin-top: -2px;
                }
                .navbar .nav-item.open > a, .navbar .nav-item.open > a:hover, .navbar .nav-item.open > a:focus {
                    color: #fff;
                    background: none !important;
                }
                .navbar .dropdown-menu {
                    border-radius: 1px;
                    border-color: #e5e5e5;
                    box-shadow: 0 2px 8px rgba(0,0,0,.05);
                }
                .navbar .dropdown-menu li a {
                    color: #777 !important;
                    padding: 8px 20px;
                    line-height: normal;
                }
                .navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:focus {
                    color: #333 !important;
                    background: transparent !important;
                }
                .navbar .nav .active a, .navbar .nav .active a:hover, .navbar .nav .active a:focus {
                    color: #fff;
                    text-shadow: 0 0 4px rgba(255,255,255,0.2);
                    background: transparent !important;
                }
                .navbar .nav .user-action {
                    padding: 9px 15px;
                }
                .navbar .navbar-toggle {
                    border-color: #fff;
                }
                .navbar .navbar-toggle .icon-bar {
                    background: #fff;
                }
                .navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {
                    background: transparent;
                }
                .navbar .navbar-nav .open .dropdown-menu {
                    background: #faf7fd;
                    border-radius: 1px;
                    border-color: #faf7fd;
                    box-shadow: 0 2px 8px rgba(0,0,0,.05);
                }
                .navbar .divider {
                    background-color: #e9ecef !important;
                }
                @media (min-width: 1200px){
                    .form-inline .input-group {
                        width: 350px;
                        margin-left: 30px;
                    }
                }
                @media (max-width: 1199px){
                    .navbar .nav > li > a > i {
                        display: inline-block;
                        text-align: left;
                        min-width: 30px;
                        position: relative;
                        top: 4px;
                    }
                    .navbar .navbar-collapse {
                        border: none;
                        box-shadow: none;
                        padding: 0;
                    }
                    .navbar .navbar-form {
                        border: none;
                        display: block;
                        margin: 10px 0;
                        padding: 0;
                    }
                    .navbar .navbar-nav {
                        margin: 8px 0;
                    }
                    .navbar .navbar-toggle {
                        margin-right: 0;
                    }
                    .input-group {
                        width: 100%;
                    }
                }

                .myButton {
                    background-color:#44c767;
                    -moz-border-radius:28px;
                    -webkit-border-radius:28px;
                    border-radius:28px;
                    border:1px solid #18ab29;
                    display:inline-block;
                    cursor:pointer;
                    color:#ffffff;
                    font-family:Arial;
                    font-size:17px;
                    padding:10px 10px;
                    text-decoration:none;
                    text-shadow:0px 1px 0px #2f6627;
                }
                .myButton:hover {
                    background-color:#5cbf2a;
                }
                .myButton:active {
                    position:relative;
                    top:1px;
                }

            </style>
        {% endblock %}
        {% block extrastylesheets %}
        {% endblock %}
    </head>
    <body>
        {% block navbar %}

            <nav class=\"navbar navbar-inverse navbar-expand-xl navbar-dark\">
                <div class=\"navbar-header d-flex col\">
                    <a class=\"navbar-brand\" href=\"/\"><i class=\"fa fa\"></i>Environmental <b>protection</b></a>
                    <button type=\"button\" data-target=\"#navbarCollapse\" data-toggle=\"collapse\" class=\"navbar-toggle navbar-toggler ml-auto\">
                        <span class=\"navbar-toggler-icon\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <!-- Collection of nav links, forms, and other content for toggling -->
                <div id=\"navbarCollapse\" class=\"collapse navbar-collapse justify-content-start\">

                    <ul class=\"nav navbar-nav navbar-right ml-auto\">
                        {% if app.user %}
                        <a href=\"{{ path('create_article')}}\" class=\"myButton\">Create article</a>
                        {% endif %}
                        <li class=\"nav-item active\"><a href=\"{{ path('documents')}}\" class=\"nav-link\"><i></i><span>Documents</span></a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('presentations')}}\" class=\"nav-link\"><i></i><span>Presentations</span></a></li>
                        {% if app.user %}
                            <a href=\"/logout\" class=\"myButton\">Logout</a>
                        {% else %}
                            <a href=\"/login\" class=\"myButton\">Admin login</a>
                        {% endif  %}
                    </ul>
                </div>
            </nav>
        {% endblock %}

        {% block content %}

        {% endblock %}
        {% block javascripts %}

        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/environmental_protection/templates/base.html.twig");
    }
}
