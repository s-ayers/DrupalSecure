<!DOCTYPE html>
<html class="" lang="en">
<head prefix="og: http://ogp.me/ns#">
<meta charset="utf-8">
<link as="style" href="https://git.drupalcode.org/assets/application-4990bb27037f3d5f1bffc0625162173ad8043166a1ae5c8505aabe6384935ce2.css" rel="preload">
<link as="style" href="https://git.drupalcode.org/assets/highlight/themes/white-b3993639b265e6a0de95d667365bc0dc4a707b70202945298c5715dc0d1f6159.css" rel="preload">

<meta content="IE=edge" http-equiv="X-UA-Compatible">

<meta content="object" property="og:type">
<meta content="GitLab" property="og:site_name">
<meta content="DrupalSecure/Sniffs/XSS/VariableGetSniff.php · master · sandbox / coltrane-1921926" property="og:title">
<meta content="For more information about this repository, visit the project page at https://www.drupal.org/sandbox/coltrane/1921926" property="og:description">
<meta content="https://git.drupalcode.org/assets/gitlab_logo-7ae504fe4f68fdebb3c2034e36621930cd36ea87924c11ff65dbcb8ed50dca58.png" property="og:image">
<meta content="64" property="og:image:width">
<meta content="64" property="og:image:height">
<meta content="https://git.drupalcode.org/sandbox/coltrane-1921926/-/blob/master/DrupalSecure/Sniffs/XSS/VariableGetSniff.php" property="og:url">
<meta content="summary" property="twitter:card">
<meta content="DrupalSecure/Sniffs/XSS/VariableGetSniff.php · master · sandbox / coltrane-1921926" property="twitter:title">
<meta content="For more information about this repository, visit the project page at https://www.drupal.org/sandbox/coltrane/1921926" property="twitter:description">
<meta content="https://git.drupalcode.org/assets/gitlab_logo-7ae504fe4f68fdebb3c2034e36621930cd36ea87924c11ff65dbcb8ed50dca58.png" property="twitter:image">

<title>DrupalSecure/Sniffs/XSS/VariableGetSniff.php · master · sandbox / coltrane-1921926 · GitLab</title>
<meta content="For more information about this repository, visit the project page at https://www.drupal.org/sandbox/coltrane/1921926" name="description">
<link rel="shortcut icon" type="image/png" href="/uploads/-/system/appearance/favicon/1/da-gitlab-logo-32x32.png" id="favicon" data-original-href="/uploads/-/system/appearance/favicon/1/da-gitlab-logo-32x32.png" />
<style type="text/css">
@keyframes blinking-dot{0%{opacity:1}25%{opacity:0.4}75%{opacity:0.4}100%{opacity:1}}@keyframes blinking-scroll-button{0%{opacity:0.2}50%{opacity:1}100%{opacity:0.2}}@keyframes gl-spinner-rotate{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}body.ui-indigo .navbar-gitlab{background-color:#292961}body.ui-indigo .navbar-gitlab .navbar-collapse{color:#d1d1f0}body.ui-indigo .navbar-gitlab .container-fluid .navbar-toggler{border-left:1px solid #6868b9}body.ui-indigo .navbar-gitlab .container-fluid .navbar-toggler svg{fill:#d1d1f0}body.ui-indigo .navbar-gitlab .navbar-sub-nav>li>a:hover,body.ui-indigo .navbar-gitlab .navbar-sub-nav>li>a:focus,body.ui-indigo .navbar-gitlab .navbar-sub-nav>li>button:hover,body.ui-indigo .navbar-gitlab .navbar-sub-nav>li>button:focus,body.ui-indigo .navbar-gitlab .navbar-nav>li>a:hover,body.ui-indigo .navbar-gitlab .navbar-nav>li>a:focus,body.ui-indigo .navbar-gitlab .navbar-nav>li>button:hover,body.ui-indigo .navbar-gitlab .navbar-nav>li>button:focus{background-color:rgba(209,209,240,0.2)}body.ui-indigo .navbar-gitlab .navbar-sub-nav>li.active>a,body.ui-indigo .navbar-gitlab .navbar-sub-nav>li.active>button,body.ui-indigo .navbar-gitlab .navbar-sub-nav>li.dropdown.show>a,body.ui-indigo .navbar-gitlab .navbar-sub-nav>li.dropdown.show>button,body.ui-indigo .navbar-gitlab .navbar-nav>li.active>a,body.ui-indigo .navbar-gitlab .navbar-nav>li.active>button,body.ui-indigo .navbar-gitlab .navbar-nav>li.dropdown.show>a,body.ui-indigo .navbar-gitlab .navbar-nav>li.dropdown.show>button{color:#292961;background-color:#fff}body.ui-indigo .navbar-gitlab .navbar-sub-nav>li.line-separator,body.ui-indigo .navbar-gitlab .navbar-nav>li.line-separator{border-left:1px solid rgba(209,209,240,0.2)}body.ui-indigo .navbar-gitlab .navbar-sub-nav{color:#d1d1f0}body.ui-indigo .navbar-gitlab .nav>li{color:#d1d1f0}body.ui-indigo .navbar-gitlab .nav>li>a .notification-dot{border:2px solid #292961}body.ui-indigo .navbar-gitlab .nav>li>a.header-help-dropdown-toggle .notification-dot{background-color:#d1d1f0}body.ui-indigo .navbar-gitlab .nav>li>a.header-user-dropdown-toggle .header-user-avatar{border-color:#d1d1f0}@media (min-width: 576px){body.ui-indigo .navbar-gitlab .nav>li>a:hover,body.ui-indigo .navbar-gitlab .nav>li>a:focus{background-color:rgba(209,209,240,0.2)}}body.ui-indigo .navbar-gitlab .nav>li>a:hover svg,body.ui-indigo .navbar-gitlab .nav>li>a:focus svg{fill:currentColor}body.ui-indigo .navbar-gitlab .nav>li>a:hover .notification-dot,body.ui-indigo .navbar-gitlab .nav>li>a:focus .notification-dot{will-change:border-color, background-color;border-color:#4a4a82}body.ui-indigo .navbar-gitlab .nav>li>a:hover.header-help-dropdown-toggle .notification-dot,body.ui-indigo .navbar-gitlab .nav>li>a:focus.header-help-dropdown-toggle .notification-dot{background-color:#fff}body.ui-indigo .navbar-gitlab .nav>li.active>a,body.ui-indigo .navbar-gitlab .nav>li.dropdown.show>a{color:#292961;background-color:#fff}body.ui-indigo .navbar-gitlab .nav>li.active>a:hover svg,body.ui-indigo .navbar-gitlab .nav>li.dropdown.show>a:hover svg{fill:#292961}body.ui-indigo .navbar-gitlab .nav>li.active>a .notification-dot,body.ui-indigo .navbar-gitlab .nav>li.dropdown.show>a .notification-dot{border-color:#fff}body.ui-indigo .navbar-gitlab .nav>li.active>a.header-help-dropdown-toggle .notification-dot,body.ui-indigo .navbar-gitlab .nav>li.dropdown.show>a.header-help-dropdown-toggle .notification-dot{background-color:#292961}body.ui-indigo .navbar-gitlab .nav>li .impersonated-user svg,body.ui-indigo .navbar-gitlab .nav>li .impersonated-user:hover svg{fill:#292961}body.ui-indigo .navbar .title>a:hover,body.ui-indigo .navbar .title>a:focus{background-color:rgba(209,209,240,0.2)}body.ui-indigo .search form{background-color:rgba(209,209,240,0.2)}body.ui-indigo .search form:hover{background-color:rgba(209,209,240,0.3)}body.ui-indigo .search .search-input::placeholder{color:rgba(209,209,240,0.8)}body.ui-indigo .search .search-input-wrap .search-icon,body.ui-indigo .search .search-input-wrap .clear-icon{fill:rgba(209,209,240,0.8)}body.ui-indigo .search.search-active form{background-color:#fff}body.ui-indigo .search.search-active .search-input-wrap .search-icon{fill:rgba(209,209,240,0.8)}body.ui-indigo .nav-sidebar li.active{box-shadow:inset 4px 0 0 #4b4ba3}body.ui-indigo .nav-sidebar li.active>a{color:#393982}body.ui-indigo .nav-sidebar li.active .nav-icon-container svg{fill:#393982}body.ui-indigo .sidebar-top-level-items>li.active .badge.badge-pill{color:#393982}body.ui-indigo .nav-links li.active a,body.ui-indigo .nav-links li.md-header-tab.active button,body.ui-indigo .nav-links li a.active{border-bottom:2px solid #6666c4}body.ui-indigo .nav-links li.active a .badge.badge-pill,body.ui-indigo .nav-links li.md-header-tab.active button .badge.badge-pill,body.ui-indigo .nav-links li a.active .badge.badge-pill{font-weight:600}body.ui-indigo .branch-header-title{color:#4b4ba3}body.ui-indigo .ide-sidebar-link.active{color:#4b4ba3;box-shadow:inset 3px 0 #4b4ba3}body.ui-indigo .ide-sidebar-link.active.is-right{box-shadow:inset -3px 0 #4b4ba3}

*,*::before,*::after{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15}header,nav,section{display:block}body{margin:0;font-family:-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Noto Sans", Ubuntu, Cantarell, "Helvetica Neue", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#303030;text-align:left;background-color:#fff}h1,h2,h3{margin-top:0;margin-bottom:0.25rem}p{margin-top:0;margin-bottom:1rem}ul{margin-top:0;margin-bottom:1rem}ul ul{margin-bottom:0}strong{font-weight:bolder}sub{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sub{bottom:-.25em}a{color:#007bff;text-decoration:none;background-color:transparent}a:not([href]){color:inherit;text-decoration:none}pre,code{font-family:"Menlo", "DejaVu Sans Mono", "Liberation Mono", "Consolas", "Ubuntu Mono", "Courier New", "andale mono", "lucida console", monospace;font-size:1em}pre{margin-top:0;margin-bottom:1rem;overflow:auto}img{vertical-align:middle;border-style:none}svg{overflow:hidden;vertical-align:middle}table{border-collapse:collapse}th{text-align:inherit}button{border-radius:0}input,button,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button{text-transform:none}button:not(:disabled),[type="button"]:not(:disabled),[type="reset"]:not(:disabled){cursor:pointer}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner{padding:0;border-style:none}textarea{overflow:auto;resize:vertical}[type="search"]{outline-offset:-2px}summary{display:list-item;cursor:pointer}template{display:none}[hidden]{display:none !important}h1,h2,h3,.h1,.h2,.h3{margin-bottom:0.25rem;font-weight:600;line-height:1.2;color:#303030}h1,.h1{font-size:2.1875rem}h2,.h2{font-size:1.75rem}h3,.h3{font-size:1.53125rem}.list-unstyled{padding-left:0;list-style:none}code{font-size:90%;color:#1f1f1f;word-wrap:break-word}a>code{color:inherit}pre{display:block;font-size:90%;color:#303030}pre code{font-size:inherit;color:inherit;word-break:normal}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width: 576px){.container{max-width:540px}}@media (min-width: 768px){.container{max-width:720px}}@media (min-width: 992px){.container{max-width:960px}}@media (min-width: 1200px){.container{max-width:1140px}}.container-fluid{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width: 576px){.container{max-width:540px}}@media (min-width: 768px){.container{max-width:720px}}@media (min-width: 992px){.container{max-width:960px}}@media (min-width: 1200px){.container{max-width:1140px}}.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.table{width:100%;margin-bottom:0.5rem;color:#303030}.table th,.table td{padding:0.75rem;vertical-align:top;border-top:1px solid #dbdbdb}.search form{display:block;width:100%;height:34px;padding:0.375rem 0.75rem;font-size:0.875rem;font-weight:400;line-height:1.5;color:#303030;background-color:#fff;background-clip:padding-box;border:1px solid #dbdbdb;border-radius:0.25rem}.search form:-moz-focusring{color:transparent;text-shadow:0 0 0 #303030}.search form::placeholder{color:#5e5e5e;opacity:1}.search form:disabled{background-color:#fafafa;opacity:1}.form-inline{display:flex;flex-flow:row wrap;align-items:center}@media (min-width: 576px){.form-inline .search form,.search .form-inline form{display:inline-block;width:auto;vertical-align:middle}}.btn{display:inline-block;font-weight:400;color:#303030;text-align:center;vertical-align:middle;cursor:pointer;user-select:none;background-color:transparent;border:1px solid transparent;padding:0.375rem 0.75rem;font-size:1rem;line-height:20px;border-radius:0.25rem}.btn.disabled,.btn:disabled{opacity:0.65}a.btn.disabled{pointer-events:none}.collapse:not(.show){display:none}.dropdown{position:relative}.dropdown-menu-toggle{white-space:nowrap}.dropdown-menu-toggle::after{display:inline-block;margin-left:0.255em;vertical-align:0.255em;content:"";border-top:0.3em solid;border-right:0.3em solid transparent;border-bottom:0;border-left:0.3em solid transparent}.dropdown-menu-toggle:empty::after{margin-left:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:0.5rem 0;margin:0.125rem 0 0;font-size:1rem;color:#303030;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,0.15);border-radius:0.25rem}.dropdown-menu-right{right:0;left:auto}.divider{height:0;margin:4px 0;overflow:hidden;border-top:1px solid #dbdbdb}.dropdown-menu.show{display:block}.nav{display:flex;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.navbar{position:relative;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;padding:0.25rem 0.5rem}.navbar .container,.navbar .container-fluid{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between}.navbar-nav{display:flex;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .dropdown-menu{position:static;float:none}.navbar-collapse{flex-basis:100%;flex-grow:1;align-items:center}.navbar-toggler{padding:0.25rem 0.75rem;font-size:1.25rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:0.25rem}@media (max-width: 575.98px){.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid{padding-right:0;padding-left:0}}@media (min-width: 576px){.navbar-expand-sm{flex-flow:row nowrap;justify-content:flex-start}.navbar-expand-sm .navbar-nav{flex-direction:row}.navbar-expand-sm .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid{flex-wrap:nowrap}.navbar-expand-sm .navbar-collapse{display:flex !important;flex-basis:auto}.navbar-expand-sm .navbar-toggler{display:none}}.card{position:relative;display:flex;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid #dbdbdb;border-radius:0.25rem}.badge{display:inline-block;padding:0.25em 0.4em;font-size:75%;font-weight:600;line-height:1;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:0.25rem}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.badge-pill{padding-right:0.6em;padding-left:0.6em;border-radius:10rem}.media{display:flex;align-items:flex-start}.close{float:right;font-size:1.5rem;font-weight:600;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5}button.close{padding:0;background-color:transparent;border:0;appearance:none}a.close.disabled{pointer-events:none}.modal-dialog{position:relative;width:auto;margin:0.5rem;pointer-events:none}@media (min-width: 576px){.modal-dialog{max-width:500px;margin:1.75rem auto}}.bg-transparent{background-color:transparent !important}.border{border:1px solid #dbdbdb !important}.border-top{border-top:1px solid #dbdbdb !important}.border-right{border-right:1px solid #dbdbdb !important}.border-bottom{border-bottom:1px solid #dbdbdb !important}.border-left{border-left:1px solid #dbdbdb !important}.rounded{border-radius:0.25rem !important}.clearfix::after{display:block;clear:both;content:""}.d-none{display:none !important}.d-inline-block{display:inline-block !important}.d-block{display:block !important}@media (min-width: 576px){.d-sm-none{display:none !important}}@media (min-width: 768px){.d-md-block{display:block !important}}@media (min-width: 992px){.d-lg-none{display:none !important}.d-lg-block{display:block !important}}@media (min-width: 1200px){.d-xl-block{display:block !important}}.flex-wrap{flex-wrap:wrap !important}.float-right{float:right !important}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border:0}.m-auto{margin:auto !important}.text-nowrap{white-space:nowrap !important}.visible{visibility:visible !important}.search form.focus{color:#303030;background-color:#fff;border-color:#80bdff;outline:0;box-shadow:0 0 0 0.2rem rgba(0,123,255,0.25)}.gl-badge{display:inline-flex;align-items:center;font-size:0.75rem;font-weight:400;line-height:1rem;padding-top:0.25rem;padding-bottom:0.25rem;padding-left:0.5rem;padding-right:0.5rem;outline:none}body,.search form,.search form{font-size:0.875rem}button,html [type='button'],[type='reset'],[role='button']{cursor:pointer}h1,.h1,h2,.h2,h3,.h3{margin-top:20px;margin-bottom:10px}input[type='file']{line-height:1}strong{font-weight:bold}a{color:#1068bf}code{padding:2px 4px;color:#1f1f1f;background-color:#f0f0f0;border-radius:4px}.code>code{background-color:inherit;padding:unset}table{border-spacing:0}.hidden{display:none !important;visibility:hidden !important}.hide{display:none}.dropdown-menu-toggle::after{display:none}.badge:not(.gl-badge){padding:4px 5px;font-size:12px;font-style:normal;font-weight:400;display:inline-block}pre code{white-space:pre-wrap}.toggle-sidebar-button .collapse-text,.toggle-sidebar-button .icon-chevron-double-lg-left,.toggle-sidebar-button .icon-chevron-double-lg-right{color:#666}svg{vertical-align:baseline}html{overflow-y:scroll}body{text-decoration-skip:ink}.content-wrapper{margin-top:40px;padding-bottom:100px}.container{padding-top:0;z-index:5}.container .content{margin:0}@media (max-width: 575.98px){.container .content{margin-top:20px}}@media (max-width: 575.98px){.container .container .title{padding-left:15px !important}}.btn{border-radius:4px;font-size:0.875rem;font-weight:400;padding:6px 10px;background-color:#fff;border-color:#dbdbdb;color:#303030;color:#303030;white-space:nowrap}.btn:active,.btn.active{box-shadow:rgba(0,0,0,0.16);background-color:#eaeaea;border-color:#e3e3e3;color:#303030}.btn svg{height:15px;width:15px}.btn svg:not(:last-child),.btn .fa:not(:last-child){margin-right:5px}.badge.badge-pill:not(.gl-badge){font-weight:400;background-color:rgba(0,0,0,0.07);color:#525252;vertical-align:baseline}.hint{font-style:italic;color:#bfbfbf}.bold{font-weight:600}pre.wrap{word-break:break-word;white-space:pre-wrap}table a code{position:relative;top:-2px;margin-right:3px}.loading{margin:20px auto;height:40px;color:#525252;font-size:32px;text-align:center}.highlight{text-shadow:none}.chart{overflow:hidden;height:220px}.break-word{word-wrap:break-word}.center{text-align:center}.block{display:block}.flex{display:flex}.flex-grow{flex-grow:1}.dropdown{position:relative}.show.dropdown .dropdown-menu{transform:translateY(0);display:block;min-height:40px;max-height:312px;overflow-y:auto}@media (max-width: 575.98px){.show.dropdown .dropdown-menu{width:100%}}.show.dropdown .dropdown-menu-toggle,.show.dropdown .dropdown-menu-toggle{border-color:#c4c4c4}.show.dropdown [data-toggle='dropdown']{outline:0}.search-input-container .dropdown-menu{margin-top:11px}.dropdown-menu-toggle{padding:6px 8px 6px 10px;background-color:#fff;color:#303030;font-size:14px;text-align:left;border:1px solid #dbdbdb;border-radius:0.25rem;white-space:nowrap}.no-outline.dropdown-menu-toggle{outline:0}.dropdown-menu-toggle .fa{color:#c4c4c4}.dropdown-menu-toggle{padding-right:25px;position:relative;width:160px;text-overflow:ellipsis;overflow:hidden}.dropdown-menu-toggle .fa{position:absolute}.dropdown-menu{display:none;position:absolute;width:auto;top:100%;z-index:300;min-width:240px;max-width:500px;margin-top:4px;margin-bottom:24px;font-size:14px;font-weight:400;padding:8px 0;background-color:#fff;border:1px solid #dbdbdb;border-radius:0.25rem;box-shadow:0 2px 4px rgba(0,0,0,0.1)}.dropdown-menu ul{margin:0;padding:0}.dropdown-menu li{display:block;text-align:left;list-style:none;padding:0 1px}.dropdown-menu li>a,.dropdown-menu li button{background:transparent;border:0;border-radius:0;box-shadow:none;display:block;font-weight:400;position:relative;padding:8px 12px;color:#303030;line-height:16px;white-space:normal;overflow:hidden;text-align:left;width:100%}.dropdown-menu .divider{height:1px;margin:0.25rem 0;padding:0;background-color:#dbdbdb}.dropdown-menu .badge.badge-pill+span:not(.badge.badge-pill){margin-right:40px}.dropdown-select{width:300px}@media (max-width: 767.98px){.dropdown-select{width:100%}}.dropdown-content{max-height:252px;overflow-y:auto}.dropdown-loading{position:absolute;top:0;right:0;bottom:0;left:0;display:none;z-index:9;background-color:rgba(255,255,255,0.6);font-size:28px}.dropdown-loading .fa{position:absolute;top:50%;left:50%;margin-top:-14px;margin-left:-14px}@media (max-width: 575.98px){.navbar-gitlab li.dropdown{position:static}header.navbar-gitlab .dropdown .dropdown-menu{width:100%;min-width:100%}}@media (max-width: 767.98px){.dropdown-menu-toggle{width:100%}}textarea{resize:vertical}input{border-radius:0.25rem;color:#303030;background-color:#fff}.search form{border-radius:4px;padding:6px 10px}.search form::placeholder{color:#868686}.navbar-gitlab{padding:0 16px;z-index:1000;margin-bottom:0;min-height:40px;border:0;border-bottom:1px solid #dbdbdb;position:fixed;top:0;left:0;right:0;border-radius:0}.navbar-gitlab .logo-text{line-height:initial}.navbar-gitlab .logo-text svg{width:55px;height:14px;margin:0;fill:#fff}.navbar-gitlab .close-icon{display:none}.navbar-gitlab .header-content{width:100%;display:flex;justify-content:space-between;position:relative;min-height:40px;padding-left:0}.navbar-gitlab .header-content .title-container{display:flex;align-items:stretch;flex:1 1 auto;padding-top:0;overflow:visible}.navbar-gitlab .header-content .title{padding-right:0;color:currentColor;display:flex;position:relative;margin:0;font-size:18px;vertical-align:top;white-space:nowrap}.navbar-gitlab .header-content .title img{height:28px}.navbar-gitlab .header-content .title img+.logo-text{margin-left:8px}.navbar-gitlab .header-content .title.wrap{white-space:normal}.navbar-gitlab .header-content .title a{display:flex;align-items:center;padding:2px 8px;margin:5px 2px 5px -8px;border-radius:4px}.navbar-gitlab .header-content .dropdown.open>a{border-bottom-color:#fff}.navbar-gitlab .header-content .navbar-collapse>ul.nav>li:not(.d-none){margin:0 2px}.navbar-gitlab .navbar-collapse{flex:0 0 auto;border-top:0;padding:0}@media (max-width: 575.98px){.navbar-gitlab .navbar-collapse{flex:1 1 auto}}.navbar-gitlab .navbar-collapse .nav{flex-wrap:nowrap}@media (max-width: 575.98px){.navbar-gitlab .navbar-collapse .nav>li:not(.d-none) a{margin-left:0}}.navbar-gitlab .container-fluid{padding:0}.navbar-gitlab .container-fluid .user-counter svg{margin-right:3px}.navbar-gitlab .container-fluid .navbar-toggler{position:relative;right:-10px;border-radius:0;min-width:45px;padding:0;margin:8px -7px 8px 0;font-size:14px;text-align:center;color:currentColor}@media (max-width: 575.98px){.navbar-gitlab .container-fluid .navbar-nav{display:flex;padding-right:10px;flex-direction:row}}.navbar-gitlab .container-fluid .navbar-nav li .badge.badge-pill{box-shadow:none;font-weight:600}@media (max-width: 575.98px){.navbar-gitlab .container-fluid .nav>li.header-user{padding-left:10px}}.navbar-gitlab .container-fluid .nav>li>a{will-change:color;margin:4px 0;padding:6px 8px;height:32px}@media (max-width: 575.98px){.navbar-gitlab .container-fluid .nav>li>a{padding:0}}.navbar-gitlab .container-fluid .nav>li>a.header-user-dropdown-toggle{margin-left:2px}.navbar-gitlab .container-fluid .nav>li>a.header-user-dropdown-toggle .header-user-avatar{margin-right:0}.navbar-gitlab .container-fluid .nav>li .header-new-dropdown-toggle{margin-right:0}.navbar-sub-nav>li>a,.navbar-sub-nav>li>button,.navbar-nav>li>a,.navbar-nav>li>button{display:flex;align-items:center;justify-content:center;padding:6px 8px;margin:4px 2px;font-size:12px;color:currentColor;border-radius:4px;height:32px;font-weight:600}.navbar-sub-nav>li>button,.navbar-nav>li>button{background:transparent;border:0}.navbar-sub-nav .dropdown-menu,.navbar-nav .dropdown-menu{position:absolute}.navbar-sub-nav{display:flex;margin:0 0 0 6px}.caret-down,.btn .caret-down{top:0;height:11px;width:11px;margin-left:4px;fill:currentColor}.header-user .dropdown-menu,.header-new .dropdown-menu{margin-top:4px}.btn-sign-in{background-color:#ebebfa;color:#292961;font-weight:600;line-height:18px;margin:4px 0 4px 2px}.title-container .badge.badge-pill:not(.merge-request-badge),.navbar-nav .badge.badge-pill:not(.merge-request-badge){position:inherit;font-weight:400;margin-left:-6px;font-size:11px;color:#fff;padding:0 5px;line-height:12px;border-radius:7px;box-shadow:0 1px 0 rgba(76,78,84,0.2)}.title-container .badge.badge-pill.green-badge,.navbar-nav .badge.badge-pill.green-badge{background-color:#108548}.title-container .badge.badge-pill.merge-requests-count,.navbar-nav .badge.badge-pill.merge-requests-count{background-color:#de7e00}.title-container .badge.badge-pill.todos-count,.navbar-nav .badge.badge-pill.todos-count{background-color:#1f75cb}.title-container .canary-badge .badge,.navbar-nav .canary-badge .badge{font-size:12px;line-height:16px;padding:0 0.5rem}@media (max-width: 575.98px){.navbar-gitlab .container-fluid{font-size:18px}.navbar-gitlab .container-fluid .navbar-nav{table-layout:fixed;width:100%;margin:0;text-align:right}.navbar-gitlab .container-fluid .navbar-collapse{margin-left:-8px;margin-right:-10px}.navbar-gitlab .container-fluid .navbar-collapse .nav>li:not(.d-none){flex:1}.header-user-dropdown-toggle{text-align:center}.header-user-avatar{float:none}}.header-user.show .dropdown-menu{margin-top:4px;color:#303030;left:auto;max-height:445px}.header-user.show .dropdown-menu svg{vertical-align:text-top}.header-user-avatar{float:left;margin-right:5px;border-radius:50%;border:1px solid #f5f5f5}.media{display:flex;align-items:flex-start}.card{margin-bottom:16px}.content-wrapper{width:100%}.content-wrapper .container-fluid{padding:0 16px}@media (min-width: 768px){.page-with-contextual-sidebar{padding-left:50px}}@media (min-width: 1200px){.page-with-contextual-sidebar{padding-left:220px}}.context-header{position:relative;margin-right:2px;width:220px}.context-header>a,.context-header>button{font-weight:600;display:flex;width:100%;align-items:center;padding:10px 16px 10px 10px;color:#303030;background-color:transparent;border:0;text-align:left}.context-header .avatar-container{flex:0 0 40px;background-color:#fff}.context-header .sidebar-context-title{overflow:hidden;text-overflow:ellipsis}.context-header .sidebar-context-title.text-secondary{font-weight:normal;font-size:0.8em}.nav-sidebar{position:fixed;z-index:600;width:220px;top:40px;bottom:0;left:0;background-color:#fafafa;box-shadow:inset -1px 0 0 #dbdbdb;transform:translate3d(0, 0, 0)}@media (min-width: 576px) and (max-width: 576px){.nav-sidebar:not(.sidebar-collapsed-desktop){box-shadow:inset -1px 0 0 #dbdbdb,2px 1px 3px rgba(0,0,0,0.1)}}.nav-sidebar.sidebar-collapsed-desktop{width:50px}.nav-sidebar.sidebar-collapsed-desktop .nav-sidebar-inner-scroll{overflow-x:hidden}.nav-sidebar.sidebar-collapsed-desktop .badge.badge-pill:not(.fly-out-badge),.nav-sidebar.sidebar-collapsed-desktop .sidebar-context-title,.nav-sidebar.sidebar-collapsed-desktop .nav-item-name{border:0;clip:rect(0, 0, 0, 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;white-space:nowrap;width:1px}.nav-sidebar.sidebar-collapsed-desktop .sidebar-top-level-items>li>a{min-height:45px}.nav-sidebar.sidebar-collapsed-desktop .fly-out-top-item{display:block}.nav-sidebar.sidebar-collapsed-desktop .avatar-container{margin:0 auto}.nav-sidebar.sidebar-expanded-mobile{left:0}.nav-sidebar a{text-decoration:none}.nav-sidebar ul{padding-left:0;list-style:none}.nav-sidebar li{white-space:nowrap}.nav-sidebar li a{display:flex;align-items:center;padding:12px 16px;color:#666}.nav-sidebar li .nav-item-name{flex:1}.nav-sidebar li.active>a{font-weight:600}@media (max-width: 767.98px){.nav-sidebar{left:-220px}}.nav-sidebar .nav-icon-container{display:flex;margin-right:8px}.nav-sidebar .fly-out-top-item{display:none}.nav-sidebar svg{height:16px;width:16px}@media (min-width: 768px) and (max-width: 1199px){.nav-sidebar:not(.sidebar-expanded-mobile){width:50px}.nav-sidebar:not(.sidebar-expanded-mobile) .nav-sidebar-inner-scroll{overflow-x:hidden}.nav-sidebar:not(.sidebar-expanded-mobile) .badge.badge-pill:not(.fly-out-badge),.nav-sidebar:not(.sidebar-expanded-mobile) .sidebar-context-title,.nav-sidebar:not(.sidebar-expanded-mobile) .nav-item-name{border:0;clip:rect(0, 0, 0, 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;white-space:nowrap;width:1px}.nav-sidebar:not(.sidebar-expanded-mobile) .sidebar-top-level-items>li>a{min-height:45px}.nav-sidebar:not(.sidebar-expanded-mobile) .fly-out-top-item{display:block}.nav-sidebar:not(.sidebar-expanded-mobile) .avatar-container{margin:0 auto}.nav-sidebar:not(.sidebar-expanded-mobile) .context-header{height:60px;width:50px}.nav-sidebar:not(.sidebar-expanded-mobile) .context-header a{padding:10px 4px}.nav-sidebar:not(.sidebar-expanded-mobile) .sidebar-top-level-items>li .sidebar-sub-level-items:not(.flyout-list){display:none}.nav-sidebar:not(.sidebar-expanded-mobile) .nav-icon-container{margin-right:0}.nav-sidebar:not(.sidebar-expanded-mobile) .toggle-sidebar-button{padding:16px;width:49px}.nav-sidebar:not(.sidebar-expanded-mobile) .toggle-sidebar-button .collapse-text,.nav-sidebar:not(.sidebar-expanded-mobile) .toggle-sidebar-button .icon-chevron-double-lg-left{display:none}.nav-sidebar:not(.sidebar-expanded-mobile) .toggle-sidebar-button .icon-chevron-double-lg-right{display:block;margin:0}}.nav-sidebar-inner-scroll{height:100%;width:100%;overflow:auto}.sidebar-sub-level-items{display:none;padding-bottom:8px}.sidebar-sub-level-items>li a{padding:8px 16px 8px 40px}.sidebar-top-level-items{margin-bottom:60px}@media (min-width: 576px){.sidebar-top-level-items>li>a{margin-right:1px}}.sidebar-top-level-items>li .badge.badge-pill{background-color:rgba(0,0,0,0.08);color:#666}.sidebar-top-level-items>li.active{background:rgba(0,0,0,0.04)}.sidebar-top-level-items>li.active>a{margin-left:4px;padding-left:12px}.sidebar-top-level-items>li.active .badge.badge-pill{font-weight:600}.sidebar-top-level-items>li.active .sidebar-sub-level-items:not(.is-fly-out-only){display:block}.toggle-sidebar-button,.close-nav-button{width:219px;position:fixed;height:48px;bottom:0;padding:0 16px;background-color:#fafafa;border:0;border-top:1px solid #dbdbdb;color:#666;display:flex;align-items:center}.toggle-sidebar-button svg,.close-nav-button svg{margin-right:8px}.toggle-sidebar-button .icon-chevron-double-lg-right,.close-nav-button .icon-chevron-double-lg-right{display:none}.collapse-text{white-space:nowrap;overflow:hidden}.sidebar-collapsed-desktop .context-header{height:60px;width:50px}.sidebar-collapsed-desktop .context-header a{padding:10px 4px}.sidebar-collapsed-desktop .sidebar-top-level-items>li .sidebar-sub-level-items:not(.flyout-list){display:none}.sidebar-collapsed-desktop .nav-icon-container{margin-right:0}.sidebar-collapsed-desktop .toggle-sidebar-button{padding:16px;width:49px}.sidebar-collapsed-desktop .toggle-sidebar-button .collapse-text,.sidebar-collapsed-desktop .toggle-sidebar-button .icon-chevron-double-lg-left{display:none}.sidebar-collapsed-desktop .toggle-sidebar-button .icon-chevron-double-lg-right{display:block;margin:0}.fly-out-top-item>a{display:flex}.fly-out-top-item .fly-out-badge{margin-left:8px}.fly-out-top-item-name{flex:1}.close-nav-button{display:none}@media (max-width: 767.98px){.close-nav-button{display:flex}.toggle-sidebar-button{display:none}}table.table{margin-bottom:16px}table.table .dropdown-menu a{text-decoration:none}table.table .success,table.table .info{color:#fff}table.table .success a:not(.btn),table.table .info a:not(.btn){text-decoration:underline;color:#fff}pre{font-family:"Menlo", "DejaVu Sans Mono", "Liberation Mono", "Consolas", "Ubuntu Mono", "Courier New", "andale mono", "lucida console", monospace;display:block;padding:8px 12px;margin:0 0 8px;font-size:13px;word-break:break-all;word-wrap:break-word;color:#303030;background-color:#fafafa;border:1px solid #dbdbdb;border-radius:2px}.monospace{font-family:"Menlo", "DejaVu Sans Mono", "Liberation Mono", "Consolas", "Ubuntu Mono", "Courier New", "andale mono", "lucida console", monospace}input::-moz-placeholder,textarea::-moz-placeholder{color:#868686;opacity:1}input::-ms-input-placeholder,textarea::-ms-input-placeholder{color:#868686}input:-ms-input-placeholder,textarea:-ms-input-placeholder{color:#868686}svg{fill:currentColor}svg.s12{width:12px;height:12px}svg.s16{width:16px;height:16px}svg.s18{width:18px;height:18px}svg.s12{vertical-align:-1px}svg.s16{vertical-align:-3px}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}table.code{width:100%;font-family:"Menlo", "DejaVu Sans Mono", "Liberation Mono", "Consolas", "Ubuntu Mono", "Courier New", "andale mono", "lucida console", monospace;border:0;border-collapse:separate;margin:0;padding:0;table-layout:fixed;border-radius:0 0 4px 4px}.frame .badge.badge-pill{position:absolute;background-color:#428fdc;color:#fff;border:#fff 1px solid;min-height:16px;padding:5px 8px;border-radius:12px}.frame .badge.badge-pill{transform:translate(-50%, -50%)}.color-label{padding:0 0.5rem;line-height:16px;border-radius:100px;color:#fff}.label-link{display:inline-flex;vertical-align:text-bottom}.milestones{padding:8px;margin-top:8px;border-radius:4px;background-color:#dbdbdb}.search{margin:0 8px}.search form{margin:0;padding:4px;width:200px;line-height:24px;height:32px;border:0;border-radius:4px}@media (min-width: 1200px){.search form{width:320px}}.search .search-input{border:0;font-size:14px;padding:0 20px 0 0;margin-left:5px;line-height:25px;width:98%;color:#fff;background:none}.search .search-input-container{display:flex;position:relative}.search .search-input-wrap{width:100%}.search .search-input-wrap .search-icon,.search .search-input-wrap .clear-icon{position:absolute;right:5px;top:4px}.search .search-input-wrap .search-icon{-moz-user-select:none;user-select:none}.search .search-input-wrap .clear-icon{display:none}.search .search-input-wrap .dropdown{position:static}.search .search-input-wrap .dropdown-menu{left:-5px;max-height:400px;overflow:auto}@media (min-width: 1200px){.search .search-input-wrap .dropdown-menu{width:320px}}.search .search-input-wrap .dropdown-content{max-height:382px}.settings{border-top:1px solid #dbdbdb}.settings:first-of-type{margin-top:10px;border:0}.settings+div .settings:first-of-type{margin-top:0;border-top:1px solid #dbdbdb}.avatar,.avatar-container{float:left;margin-right:16px;border-radius:50%;border:1px solid #f5f5f5}.s16.avatar,.s16.avatar-container{width:16px;height:16px;margin-right:8px}.s18.avatar,.s18.avatar-container{width:18px;height:18px;margin-right:8px}.s40.avatar,.s40.avatar-container{width:40px;height:40px;margin-right:8px}.avatar{transition-property:none;width:40px;height:40px;padding:0;background:#fdfdfd;overflow:hidden;border-color:rgba(0,0,0,0.1)}.avatar.center{font-size:14px;line-height:1.8em;text-align:center}.avatar.avatar-tile{border-radius:0;border:0}.avatar-container{overflow:hidden;display:flex}.avatar-container a{width:100%;height:100%;display:flex;text-decoration:none}.avatar-container .avatar{border-radius:0;border:0;height:auto;width:100%;margin:0;align-self:center}.avatar-container.s40{min-width:40px;min-height:40px}.rect-avatar{border-radius:2px}.rect-avatar.s16{border-radius:2px}.rect-avatar.s18{border-radius:2px}.rect-avatar.s40{border-radius:4px}.tab-width-8{-moz-tab-size:8;tab-size:8}.gl-sr-only{border:0;clip:rect(0, 0, 0, 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;white-space:nowrap;width:1px}.gl-ml-3{margin-left:0.5rem}.content-wrapper>.alert-wrapper,#content-body,.modal-dialog{display:block}.content-wrapper>.alert-wrapper,#content-body,.modal-dialog{display:none}

</style>

<link rel="stylesheet" media="print" href="/assets/application-4990bb27037f3d5f1bffc0625162173ad8043166a1ae5c8505aabe6384935ce2.css" />

<link rel="stylesheet" media="print" href="/assets/application_utilities-f2ab88b0f668460fa0d89dd616e14b67fa46b659fceda63f6dce4e3e8eb2231f.css" />

<link rel="stylesheet" media="print" href="/assets/highlight/themes/white-b3993639b265e6a0de95d667365bc0dc4a707b70202945298c5715dc0d1f6159.css" />
<script>
//<![CDATA[
document.querySelectorAll('link[media="print"]').forEach(linkTag => {
  linkTag.setAttribute('data-startupcss', 'loading');
  const startupLinkLoadedEvent = new CustomEvent('CSSStartupLinkLoaded');
  linkTag.addEventListener('load',function(){this.media='all';this.setAttribute('data-startupcss', 'loaded');document.dispatchEvent(startupLinkLoadedEvent);},{once: true});
})

//]]>
</script>

<script>
//<![CDATA[
window.gon={};
//]]>
</script>



<script src="/assets/webpack/runtime.81ed1365.bundle.js" defer="defer"></script>
<script src="/assets/webpack/main.7548156d.chunk.js" defer="defer"></script>
<script src="/assets/webpack/commons-pages.admin-pages.admin.abuse_reports-pages.admin.application_settings-pages.admin.applicati-dc2946ab.1b545af0.chunk.js" defer="defer"></script>
<script src="/assets/webpack/commons-globalSearch-pages.admin.abuse_reports-pages.admin.application_settings.ci_cd-pages.admin.gr-ccd72cfb.dc7f7470.chunk.js" defer="defer"></script>
<script src="/assets/webpack/commons-pages.groups.boards-pages.groups.details-pages.groups.show-pages.groups.wikis-pages.projects-81ad1b0a.6ae37696.chunk.js" defer="defer"></script>
<script src="/assets/webpack/commons-pages.admin.application_settings-pages.admin.application_settings.ci_cd-pages.admin.applicat-43ba9593.4c287b33.chunk.js" defer="defer"></script>
<script src="/assets/webpack/commons-pages.groups.epics.index-pages.groups.epics.new-pages.groups.epics.show-pages.groups.iterati-85c41ccb.842bafc7.chunk.js" defer="defer"></script>
<script src="/assets/webpack/commons-pages.projects.blame.show-pages.projects.blob.edit-pages.projects.blob.new-pages.projects.bl-c6edf1dd.38a48b10.chunk.js" defer="defer"></script>
<script src="/assets/webpack/pages.projects.blob.show.ca6ff29c.chunk.js" defer="defer"></script>


<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="+OEPjMQZJpRUb+b9Yw1Pp7dgnk0Djhe5Nnss7Hvkgca9AEUtrdktl35wLnq9MZZ2Fb2/Da3wuyeS8Aj7Tbnapw==" />
<meta name="csp-nonce" />
<meta name="action-cable-url" content="/-/cable" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
<meta content="#474D57" name="theme-color">
<link rel="apple-touch-icon" type="image/x-icon" href="/assets/touch-icon-iphone-5a9cee0e8a51212e70b90c87c12f382c428870c0ff67d1eb034d884b78d2dae7.png" />
<link rel="apple-touch-icon" type="image/x-icon" href="/assets/touch-icon-ipad-a6eec6aeb9da138e507593b464fdac213047e49d3093fc30e90d9a995df83ba3.png" sizes="76x76" />
<link rel="apple-touch-icon" type="image/x-icon" href="/assets/touch-icon-iphone-retina-72e2aadf86513a56e050e7f0f2355deaa19cc17ed97bbe5147847f2748e5a3e3.png" sizes="120x120" />
<link rel="apple-touch-icon" type="image/x-icon" href="/assets/touch-icon-ipad-retina-8ebe416f5313483d9c1bc772b5bbe03ecad52a54eba443e5215a22caed2a16a2.png" sizes="152x152" />
<link color="rgb(226, 67, 41)" href="/assets/logo-d36b5212042cebc89b96df4bf6ac24e43db316143e89926c0db839ff694d2de4.svg" rel="mask-icon">
<meta content="/assets/msapplication-tile-1196ec67452f618d39cdd85e2e3a542f76574c071051ae7effbfde01710eb17d.png" name="msapplication-TileImage">
<meta content="#30353E" name="msapplication-TileColor">




</head>

<body class="ui-indigo tab-width-8  gl-browser-generic gl-platform-other" data-find-file="/sandbox/coltrane-1921926/-/find_file/master" data-group="sandbox" data-namespace-id="3" data-page="projects:blob:show" data-page-type-id="master/DrupalSecure/Sniffs/XSS/VariableGetSniff.php" data-project="coltrane-1921926" data-project-id="36270">

<script>
//<![CDATA[
gl = window.gl || {};
gl.client = {"isGeneric":true,"isOther":true};


//]]>
</script>


<header class="navbar navbar-gitlab navbar-expand-sm js-navbar" data-qa-selector="navbar">
<a class="sr-only gl-accessibility" href="#content-body" tabindex="1">Skip to content</a>
<div class="container-fluid">
<div class="header-content">
<div class="title-container">
<h1 class="title">
<span class="gl-sr-only">GitLab</span>
<a title="Dashboard" id="logo" href="/"><img class="brand-header-logo lazy" data-src="/uploads/-/system/appearance/header_logo/1/da-gitlab-logo.png" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
</a></h1>
<ul class="list-unstyled navbar-sub-nav">
<li class="home"><a title="Projects" class="dashboard-shortcuts-projects" href="/explore">Projects
</a></li><li class=""><a title="Groups" class="dashboard-shortcuts-groups" href="/explore/groups">Groups
</a></li><li class=""><a title="Snippets" class="dashboard-shortcuts-snippets" href="/explore/snippets">Snippets
</a></li><li>
<a title="About GitLab CE" href="/help">Help</a>
</li>
</ul>

</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li class="nav-item d-none d-lg-block m-auto">
<div class="search search-form" data-track-event="activate_form_input" data-track-label="navbar_search" data-track-value="">
<form class="form-inline" action="/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" /><div class="search-input-container">
<div class="search-input-wrap">
<div class="dropdown" data-url="/search/autocomplete">
<input type="search" name="search" id="search" placeholder="Search or jump to…" class="search-input dropdown-menu-toggle no-outline js-search-dashboard-options" spellcheck="false" autocomplete="off" data-issues-path="/dashboard/issues" data-mr-path="/dashboard/merge_requests" data-qa-selector="search_term_field" aria-label="Search or jump to…" />
<button class="hidden js-dropdown-search-toggle" data-toggle="dropdown" type="button"></button>
<div class="dropdown-menu dropdown-select" data-testid="dashboard-search-options">
<div class="dropdown-content"><ul>
<li class="dropdown-menu-empty-item">
<a>
Loading...
</a>
</li>
</ul>
</div><div class="dropdown-loading"><div class="gl-spinner-container"><span class="gl-spinner gl-spinner-orange gl-spinner-md gl-mt-7" aria-label="Loading"></span></div></div>
</div>
<svg class="s16 search-icon" data-testid="search-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#search"></use></svg>
<svg class="s16 clear-icon js-clear-input" data-testid="close-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#close"></use></svg>
</div>
</div>
</div>
<input type="hidden" name="group_id" id="group_id" value="3" class="js-search-group-options" data-group-path="sandbox" data-name="sandbox" data-issues-path="/groups/sandbox/-/issues" data-mr-path="/groups/sandbox/-/merge_requests" />
<input type="hidden" name="project_id" id="search_project_id" value="36270" class="js-search-project-options" data-project-path="coltrane-1921926" data-name="coltrane-1921926" data-issues-path="/sandbox/coltrane-1921926/-/issues" data-mr-path="/sandbox/coltrane-1921926/-/merge_requests" data-issues-disabled="true" />
<input type="hidden" name="scope" id="scope" />
<input type="hidden" name="search_code" id="search_code" value="true" />
<input type="hidden" name="snippets" id="snippets" value="false" />
<input type="hidden" name="repository_ref" id="repository_ref" value="master" />
<input type="hidden" name="nav_source" id="nav_source" value="navbar" />
<div class="search-autocomplete-opts hide" data-autocomplete-path="/search/autocomplete" data-autocomplete-project-id="36270" data-autocomplete-project-ref="master"></div>
</form></div>

</li>
<li class="nav-item d-inline-block d-lg-none">
<a title="Search" aria-label="Search" data-toggle="tooltip" data-placement="bottom" data-container="body" href="/search?project_id=36270"><svg class="s16" data-testid="search-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#search"></use></svg>
</a></li>
<li class="nav-item header-help dropdown d-none d-md-block">
<a class="header-help-dropdown-toggle" data-toggle="dropdown" href="/help"><span class="gl-sr-only">
Help
</span>
<svg class="s16" data-testid="question-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#question"></use></svg>
<span class="notification-dot rounded-circle gl-absolute"></span>
<svg class="s16 caret-down" data-testid="chevron-down-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#chevron-down"></use></svg>
</a><div class="dropdown-menu dropdown-menu-right">
<ul>

<li>
<a href="/help">Help</a>
</li>
<li>
<a href="https://about.gitlab.com/getting-help/">Support</a>
</li>
<li>
<a target="_blank" class="text-nowrap" rel="noopener noreferrer" data-track-event="click_forum" data-track-property="question_menu" href="https://forum.gitlab.com/">Community forum</a>

</li>
<li>
<button class="js-shortcuts-modal-trigger" type="button">
Keyboard shortcuts
<span aria-hidden class="text-secondary float-right">?</span>
</button>
</li>
<li class="divider"></li>
<li>
<a href="https://about.gitlab.com/submit-feedback">Submit feedback</a>
</li>
<li>

</li>

</ul>

</div>
</li>
<li class="nav-item">
<div>
<a class="btn btn-sign-in" href="/users/sign_in?redirect_to_referer=yes">Sign in</a>
</div>
</li>
</ul>
</div>
<button class="navbar-toggler d-block d-sm-none" type="button">
<span class="sr-only">Toggle navigation</span>
<svg class="s12 more-icon js-navbar-toggle-right" data-testid="ellipsis_h-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#ellipsis_h"></use></svg>
<svg class="s12 close-icon js-navbar-toggle-left" data-testid="close-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#close"></use></svg>
</button>
</div>
</div>
</header>

<div class="layout-page page-with-contextual-sidebar">
<div class="nav-sidebar">
<div class="nav-sidebar-inner-scroll">
<div class="context-header">
<a title="coltrane-1921926" href="/sandbox/coltrane-1921926"><div class="avatar-container rect-avatar s40 project-avatar">
<div class="avatar s40 avatar-tile identicon bg4">C</div>
</div>
<div class="sidebar-context-title">
coltrane-1921926
</div>
</a></div>
<ul class="sidebar-top-level-items qa-project-sidebar">
<li class="home"><a class="shortcuts-project rspec-project-link" data-qa-selector="project_link" href="/sandbox/coltrane-1921926"><div class="nav-icon-container">
<svg class="s16" data-testid="home-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#home"></use></svg>
</div>
<span class="nav-item-name">
Project overview
</span>
</a><ul class="sidebar-sub-level-items">
<li class="fly-out-top-item"><a href="/sandbox/coltrane-1921926"><strong class="fly-out-top-item-name">
Project overview
</strong>
</a></li><li class="divider fly-out-top-item"></li>
<li class=""><a title="Project details" class="shortcuts-project" href="/sandbox/coltrane-1921926"><span>Details</span>
</a></li><li class=""><a title="Activity" class="shortcuts-project-activity" data-qa-selector="activity_link" href="/sandbox/coltrane-1921926/activity"><span>Activity</span>
</a></li><li class=""><a title="Releases" class="shortcuts-project-releases" href="/sandbox/coltrane-1921926/-/releases"><span>Releases</span>
</a></li></ul>
</li><li class="active"><a class="shortcuts-tree" data-qa-selector="repository_link" href="/sandbox/coltrane-1921926/-/tree/master"><div class="nav-icon-container">
<svg class="s16" data-testid="doc-text-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#doc-text"></use></svg>
</div>
<span class="nav-item-name" id="js-onboarding-repo-link">
Repository
</span>
</a><ul class="sidebar-sub-level-items">
<li class="fly-out-top-item active"><a href="/sandbox/coltrane-1921926/-/tree/master"><strong class="fly-out-top-item-name">
Repository
</strong>
</a></li><li class="divider fly-out-top-item"></li>
<li class="active"><a href="/sandbox/coltrane-1921926/-/tree/master">Files
</a></li><li class=""><a id="js-onboarding-commits-link" href="/sandbox/coltrane-1921926/-/commits/master">Commits
</a></li><li class=""><a data-qa-selector="branches_link" id="js-onboarding-branches-link" href="/sandbox/coltrane-1921926/-/branches">Branches
</a></li><li class=""><a data-qa-selector="tags_link" href="/sandbox/coltrane-1921926/-/tags">Tags
</a></li><li class=""><a href="/sandbox/coltrane-1921926/-/graphs/master">Contributors
</a></li><li class=""><a href="/sandbox/coltrane-1921926/-/network/master">Graph
</a></li><li class=""><a href="/sandbox/coltrane-1921926/-/compare?from=master&amp;to=master">Compare
</a></li><li class=""><a data-qa-selector="path_locks_link" href="/sandbox/coltrane-1921926/path_locks">Locked Files
</a></li>
</ul>
</li><li class=""><a target="_blank" rel="noopener noreferrer" class="shortcuts-external_tracker" href="https://www.drupal.org/sandbox/coltrane/1921926"><div class="nav-icon-container">
<svg class="s16" data-testid="external-link-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#external-link"></use></svg>
</div>
<span class="nav-item-name">
Custom Issue Tracker
</span>
</a><ul class="sidebar-sub-level-items is-fly-out-only">
<li class="fly-out-top-item"><a target="_blank" rel="noopener noreferrer" href="https://www.drupal.org/sandbox/coltrane/1921926"><strong class="fly-out-top-item-name">
Custom Issue Tracker
</strong>
</a></li></ul>
</li><li class=""><a title="Labels" class="shortcuts-labels qa-labels-items" href="/sandbox/coltrane-1921926/-/labels"><div class="nav-icon-container">
<svg class="s16" data-testid="label-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#label"></use></svg>
</div>
<span class="nav-item-name" id="js-onboarding-labels-link">
Labels
</span>
</a></li><li class=""><a class="shortcuts-merge_requests" data-qa-selector="merge_requests_link" href="/sandbox/coltrane-1921926/-/merge_requests"><div class="nav-icon-container">
<svg class="s16" data-testid="git-merge-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#git-merge"></use></svg>
</div>
<span class="nav-item-name" id="js-onboarding-mr-link">
Merge Requests
</span>
<span class="badge badge-pill count merge_counter js-merge-counter">
0
</span>
</a><ul class="sidebar-sub-level-items is-fly-out-only">
<li class="fly-out-top-item"><a href="/sandbox/coltrane-1921926/-/merge_requests"><strong class="fly-out-top-item-name">
Merge Requests
</strong>
<span class="badge badge-pill count merge_counter js-merge-counter fly-out-badge">
0
</span>
</a></li></ul>
</li><li class=""><a class="qa-project-requirements-link" href="/sandbox/coltrane-1921926/-/requirements_management/requirements"><div class="nav-icon-container">
<svg class="s16" data-testid="requirements-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#requirements"></use></svg>
</div>
<span class="nav-item-name">
Requirements
</span>
</a><ul class="sidebar-sub-level-items">
<li class="fly-out-top-item"><a href="/sandbox/coltrane-1921926/-/requirements_management/requirements"><strong class="fly-out-top-item-name">Requirements</strong>
</a></li><li class="divider fly-out-top-item"></li>
<li class="home"><a title="List" href="/sandbox/coltrane-1921926/-/requirements_management/requirements"><span>List</span>
</a></li></ul>
</li>
<li class=""><a data-qa-selector="dependency_list_link" href="/sandbox/coltrane-1921926/-/dependencies"><div class="nav-icon-container">
<svg class="s16" data-testid="shield-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#shield"></use></svg>
</div>
<span class="nav-item-name">
Security &amp; Compliance
</span>
</a><ul class="sidebar-sub-level-items">
<li class="fly-out-top-item"><a href="/sandbox/coltrane-1921926/-/dependencies"><strong class="fly-out-top-item-name">
Security &amp; Compliance
</strong>
</a></li><li class="divider fly-out-top-item"></li>
<li class=""><a title="Dependency List" data-qa-selector="dependency_list_link" href="/sandbox/coltrane-1921926/-/dependencies"><span>Dependency List</span>
</a></li><li class=""><a title="License Compliance" data-qa-selector="licenses_list_link" href="/sandbox/coltrane-1921926/-/licenses"><span>License Compliance</span>
</a></li></ul>
</li>

<li class=""><a class="shortcuts-analytics" data-qa-selector="analytics_anchor" href="/sandbox/coltrane-1921926/-/value_stream_analytics"><div class="nav-icon-container">
<svg class="s16" data-testid="chart-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#chart"></use></svg>
</div>
<span class="nav-item-name" data-qa-selector="analytics_link">
Analytics
</span>
</a><ul class="sidebar-sub-level-items" data-qa-selector="analytics_sidebar_submenu">
<li class="fly-out-top-item"><a href="/sandbox/coltrane-1921926/-/value_stream_analytics"><strong class="fly-out-top-item-name">
Analytics
</strong>
</a></li><li class="divider fly-out-top-item"></li>
<li class=""><a title="Code Review" href="/sandbox/coltrane-1921926/-/analytics/code_reviews"><span>Code Review</span>
</a></li><li class=""><a class="shortcuts-project-insights" data-qa-selector="project_insights_link" title="Insights" href="/sandbox/coltrane-1921926/insights/"><span>Insights</span>
</a></li><li class=""><a title="Issue" href="/sandbox/coltrane-1921926/-/analytics/issues_analytics"><span>Issue</span>
</a></li><li class=""><a class="shortcuts-repository-charts" title="Repository" href="/sandbox/coltrane-1921926/-/graphs/master/charts"><span>Repository</span>
</a></li><li class=""><a class="shortcuts-project-cycle-analytics" title="Value Stream" href="/sandbox/coltrane-1921926/-/value_stream_analytics"><span>Value Stream</span>
</a></li></ul>
</li>
<li class=""><a title="Members" class="qa-members-link" id="js-onboarding-members-link" href="/sandbox/coltrane-1921926/-/project_members"><div class="nav-icon-container">
<svg class="s16" data-testid="users-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#users"></use></svg>
</div>
<span class="nav-item-name">
Members
</span>
</a><ul class="sidebar-sub-level-items is-fly-out-only">
<li class="fly-out-top-item"><a href="/sandbox/coltrane-1921926/-/project_members"><strong class="fly-out-top-item-name">
Members
</strong>
</a></li></ul>
</li>
<a class="toggle-sidebar-button js-toggle-sidebar qa-toggle-sidebar rspec-toggle-sidebar" role="button" title="Toggle sidebar" type="button">
<svg class="s16 icon-chevron-double-lg-left" data-testid="chevron-double-lg-left-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#chevron-double-lg-left"></use></svg>
<svg class="s16 icon-chevron-double-lg-right" data-testid="chevron-double-lg-right-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#chevron-double-lg-right"></use></svg>
<span class="collapse-text">Collapse sidebar</span>
</a>
<button name="button" type="button" class="close-nav-button"><svg class="s16" data-testid="close-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#close"></use></svg>
<span class="collapse-text">Close sidebar</span>
</button>
<li class="hidden">
<a title="Activity" class="shortcuts-project-activity" href="/sandbox/coltrane-1921926/activity"><span>
Activity
</span>
</a></li>
<li class="hidden">
<a title="Network" class="shortcuts-network" href="/sandbox/coltrane-1921926/-/network/master">Graph
</a></li>
<li class="hidden">
<a title="Commits" class="shortcuts-commits" href="/sandbox/coltrane-1921926/-/commits/master">Commits
</a></li>
</ul>
</div>
</div>

<div class="content-wrapper">
<div class="mobile-overlay"></div>

<div class="alert-wrapper gl-force-block-formatting-context">















<nav class="breadcrumbs container-fluid container-limited" role="navigation">
<div class="breadcrumbs-container">
<button name="button" type="button" class="toggle-mobile-nav"><span class="sr-only">Open sidebar</span>
<svg class="s18" data-testid="hamburger-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#hamburger"></use></svg>
</button><div class="breadcrumbs-links js-title-container" data-qa-selector="breadcrumb_links_content">
<ul class="list-unstyled breadcrumbs-list js-breadcrumbs-list">
<li><a class="group-path breadcrumb-item-text js-breadcrumb-item-text " href="/sandbox">sandbox</a><svg class="s8 breadcrumbs-list-angle" data-testid="angle-right-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#angle-right"></use></svg></li> <li><a href="/sandbox/coltrane-1921926"><span class="breadcrumb-item-text js-breadcrumb-item-text">coltrane-1921926</span></a><svg class="s8 breadcrumbs-list-angle" data-testid="angle-right-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#angle-right"></use></svg></li>

<li>
<h2 class="breadcrumbs-sub-title">
<a href="/sandbox/coltrane-1921926/-/blob/master/DrupalSecure/Sniffs/XSS/VariableGetSniff.php">Repository</a>
</h2>
</li>
</ul>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"sandbox","item":"https://git.drupalcode.org/sandbox"},{"@type":"ListItem","position":2,"name":"coltrane-1921926","item":"https://git.drupalcode.org/sandbox/coltrane-1921926"},{"@type":"ListItem","position":3,"name":"Repository","item":"https://git.drupalcode.org/sandbox/coltrane-1921926/-/blob/master/DrupalSecure/Sniffs/XSS/VariableGetSniff.php"}]}

</script>

</div>
</nav>

</div>
<div class="container-fluid container-limited ">
<div class="content" id="content-body" itemscope itemtype="http://schema.org/SoftwareSourceCode">
<div class="flash-container flash-container-page sticky" data-qa-selector="flash_container">
</div>

<div class="js-signature-container" data-signatures-path="/sandbox/coltrane-1921926/-/commits/efd5b24686898f3221b1a1575de8c5334cf74bab/signatures?limit=1"></div>

<div class="tree-holder" id="tree-holder">
<div class="nav-block">
<div class="tree-ref-container">
<div class="tree-ref-holder">
<form class="project-refs-form" action="/sandbox/coltrane-1921926/-/refs/switch" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="destination" id="destination" value="blob" />
<input type="hidden" name="path" id="path" value="DrupalSecure/Sniffs/XSS/VariableGetSniff.php" />
<div class="dropdown">
<button class="dropdown-menu-toggle js-project-refs-dropdown qa-branches-select" type="button" data-toggle="dropdown" data-selected="master" data-ref="master" data-refs-url="/sandbox/coltrane-1921926/refs?sort=updated_desc" data-field-name="ref" data-submit-form-on-click="true" data-visit="true"><span class="dropdown-toggle-text ">master</span><svg class="s16 dropdown-menu-toggle-icon gl-top-3" data-testid="chevron-down-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#chevron-down"></use></svg></button>
<div class="dropdown-menu dropdown-menu-paging dropdown-menu-selectable git-revision-dropdown qa-branches-dropdown">
<div class="dropdown-page-one">
<div class="dropdown-title gl-display-flex"><span class="gl-ml-auto">Switch branch/tag</span><button class="dropdown-title-button dropdown-menu-close gl-ml-auto" aria-label="Close" type="button"><svg class="s16 dropdown-menu-close-icon" data-testid="close-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#close"></use></svg></button></div>
<div class="dropdown-input"><input type="search" id="" class="dropdown-input-field qa-dropdown-input-field" placeholder="Search branches and tags" autocomplete="off" /><svg class="s16 dropdown-input-search" data-testid="search-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#search"></use></svg><svg class="s16 dropdown-input-clear js-dropdown-input-clear" data-testid="close-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#close"></use></svg></div>
<div class="dropdown-content"></div>
<div class="dropdown-loading"><div class="gl-spinner-container"><span class="gl-spinner gl-spinner-orange gl-spinner-md gl-mt-7" aria-label="Loading"></span></div></div>
</div>
</div>
</div>
</form>
</div>
<ul class="breadcrumb repo-breadcrumb">
<li class="breadcrumb-item">
<a href="/sandbox/coltrane-1921926/-/tree/master">coltrane-1921926
</a></li>
<li class="breadcrumb-item">
<a href="/sandbox/coltrane-1921926/-/tree/master/DrupalSecure">DrupalSecure</a>
</li>
<li class="breadcrumb-item">
<a href="/sandbox/coltrane-1921926/-/tree/master/DrupalSecure/Sniffs">Sniffs</a>
</li>
<li class="breadcrumb-item">
<a href="/sandbox/coltrane-1921926/-/tree/master/DrupalSecure/Sniffs/XSS">XSS</a>
</li>
<li class="breadcrumb-item">
<a href="/sandbox/coltrane-1921926/-/blob/master/DrupalSecure/Sniffs/XSS/VariableGetSniff.php"><strong>VariableGetSniff.php</strong>
</a></li>
</ul>
</div>
<div class="tree-controls gl-children-ml-sm-3"><a class="gl-button btn shortcuts-find-file" rel="nofollow" href="/sandbox/coltrane-1921926/-/find_file/master">Find file
</a><a class="gl-button btn js-blob-blame-link" href="/sandbox/coltrane-1921926/-/blame/master/DrupalSecure/Sniffs/XSS/VariableGetSniff.php">Blame</a><a class="gl-button btn" href="/sandbox/coltrane-1921926/-/commits/master/DrupalSecure/Sniffs/XSS/VariableGetSniff.php">History</a><a class="gl-button btn js-data-file-blob-permalink-url" href="/sandbox/coltrane-1921926/-/blob/782f704806bf8fd6a7ec34ad4a16b1f5410f3daf/DrupalSecure/Sniffs/XSS/VariableGetSniff.php">Permalink</a></div>
</div>

<div class="info-well d-none d-sm-block">
<div class="well-segment">
<ul class="blob-commit-info">
<li class="commit flex-row js-toggle-container" id="commit-efd5b246">
<div class="avatar-cell d-none d-sm-block">
<a href="/coltrane"><img alt="coltrane&#39;s avatar" src="/uploads/-/system/user/avatar/8244/picture-91990-1450304755.jpg?width=40" class="avatar s40 d-none d-sm-inline-block" title="coltrane" /></a>
</div>
<div class="commit-detail flex-list">
<div class="commit-content" data-qa-selector="commit_content">
<a class="commit-row-message item-title js-onboarding-commit-item " href="/sandbox/coltrane-1921926/-/commit/efd5b24686898f3221b1a1575de8c5334cf74bab">Intial commit of secure_cs: DrupalSecure PHP_CodeSniffer coding standard for...</a>
<span class="commit-row-message d-inline d-sm-none">
&middot;
efd5b246
</span>
<button class="text-expander js-toggle-button">
<svg class="s12" data-testid="ellipsis_h-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#ellipsis_h"></use></svg>
</button>
<div class="committer">
<a class="commit-author-link js-user-link" data-user-id="8244" href="/coltrane">coltrane</a> authored <time class="js-timeago" title="Feb 20, 2013 1:36am" datetime="2013-02-20T01:36:19Z" data-toggle="tooltip" data-placement="bottom" data-container="body">Feb 19, 2013</time>
</div>

<pre class="commit-row-description gl-mb-3 js-toggle-content">Intial commit of secure_cs: DrupalSecure PHP_CodeSniffer coding standard for security-related analysis of Drupal code</pre>
</div>
<div class="commit-actions flex-row">

<div class="js-commit-pipeline-status" data-endpoint="/sandbox/coltrane-1921926/-/commit/efd5b24686898f3221b1a1575de8c5334cf74bab/pipelines?ref=master"></div>
<div class="commit-sha-group btn-group d-none d-sm-flex">
<div class="label label-monospace monospace">
efd5b246
</div>
<button class="btn gl-button btn btn-default" data-toggle="tooltip" data-placement="bottom" data-container="body" data-title="Copy commit SHA" data-class="gl-button btn btn-default" data-clipboard-text="efd5b24686898f3221b1a1575de8c5334cf74bab" type="button" title="Copy commit SHA" aria-label="Copy commit SHA"><svg class="s16" data-testid="copy-to-clipboard-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#copy-to-clipboard"></use></svg></button>

</div>
</div>
</div>
</li>

</ul>
</div>


</div>
<div class="blob-content-holder" id="blob-content-holder">
<article class="file-holder">
<div class="js-file-title file-title-flex-parent">
<div class="file-header-content">
<svg class="s16" data-testid="doc-text-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#doc-text"></use></svg>
<strong class="file-title-name gl-word-break-all" data-qa-selector="file_name_content">
VariableGetSniff.php
</strong>
<button class="btn btn-clipboard btn-transparent" data-toggle="tooltip" data-placement="bottom" data-container="body" data-class="btn-clipboard btn-transparent" data-title="Copy file path" data-clipboard-text="{&quot;text&quot;:&quot;DrupalSecure/Sniffs/XSS/VariableGetSniff.php&quot;,&quot;gfm&quot;:&quot;`DrupalSecure/Sniffs/XSS/VariableGetSniff.php`&quot;}" type="button" title="Copy file path" aria-label="Copy file path"><svg class="s16" data-testid="copy-to-clipboard-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#copy-to-clipboard"></use></svg></button>
<small class="mr-1">
2.9 KB
</small>
</div>

<div class="file-actions gl-display-flex gl-flex-fill-1 gl-align-self-start gl-md-justify-content-end"><a class="btn btn-primary js-edit-blob gl-mr-3  btn-sm" data-track-event="click_edit" data-track-label="Edit" href="/sandbox/coltrane-1921926/-/edit/master/DrupalSecure/Sniffs/XSS/VariableGetSniff.php">Edit</a><a class="btn btn-primary ide-edit-button gl-mr-3 btn-inverted btn-sm" data-track-event="click_edit_ide" data-track-label="Web IDE" data-track-property="secondary" href="/-/ide/project/sandbox/coltrane-1921926/edit/master/-/DrupalSecure/Sniffs/XSS/VariableGetSniff.php">Web IDE</a><div class="btn-group ml-2" role="group">


</div><div class="btn-group ml-2" role="group">
<button class="btn btn btn-sm js-copy-blob-source-btn" data-toggle="tooltip" data-placement="bottom" data-container="body" data-class="btn btn-sm js-copy-blob-source-btn" data-title="Copy file contents" data-clipboard-target=".blob-content[data-blob-id=&#39;51b897c4b8777104d416d95dfda68b949481fcff&#39;] &gt; pre" type="button" title="Copy file contents" aria-label="Copy file contents"><svg class="s16" data-testid="copy-to-clipboard-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#copy-to-clipboard"></use></svg></button>
<a class="btn btn-sm has-tooltip" target="_blank" rel="noopener noreferrer" aria-label="Open raw" title="Open raw" data-container="body" href="/sandbox/coltrane-1921926/-/raw/master/DrupalSecure/Sniffs/XSS/VariableGetSniff.php"><svg class="s16" data-testid="doc-code-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#doc-code"></use></svg></a>
<a download="DrupalSecure/Sniffs/XSS/VariableGetSniff.php" class="btn btn-sm has-tooltip" target="_blank" rel="noopener noreferrer" aria-label="Download" title="Download" data-container="body" href="/sandbox/coltrane-1921926/-/raw/master/DrupalSecure/Sniffs/XSS/VariableGetSniff.php?inline=false"><svg class="s16" data-testid="download-icon"><use xlink:href="/assets/icons-2fb014ce49a3e87b1e47aae4b8adfa35e6b59f49e1474a18a2518ad2285bce08.svg#download"></use></svg></a>

</div></div>
</div>

<script id="js-file-lock" type="application/json">
{"path":"DrupalSecure/Sniffs/XSS/VariableGetSniff.php","toggle_path":"/sandbox/coltrane-1921926/path_locks/toggle"}
</script>


<div class="blob-viewer" data-path="DrupalSecure/Sniffs/XSS/VariableGetSniff.php" data-type="simple" data-url="/sandbox/coltrane-1921926/-/blob/master/DrupalSecure/Sniffs/XSS/VariableGetSniff.php?format=json&amp;viewer=simple">
<div class="text-center gl-mt-4 gl-mb-3">
<span class="gl-spinner gl-spinner-orange gl-spinner-md qa-spinner" aria-label="Loading"></span>
</div>

</div>


</article>
</div>

<div class="modal" id="modal-upload-blob">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h3 class="page-title">Replace VariableGetSniff.php</h3>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden>&times;</span>
</button>
</div>
<div class="modal-body">
<form class="js-quick-submit js-upload-blob-form" data-method="put" action="/sandbox/coltrane-1921926/-/update/master/DrupalSecure/Sniffs/XSS/VariableGetSniff.php" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="authenticity_token" value="OqUbHA8EyH3g/TZa9EphMqIieEzFi3ruFxDQ2WEEUfB/RFG9ZsTDfsri/t0qdrjjAP9ZDGv11nCzm/TOV1kKkQ==" /><div class="dropzone">
<div class="dropzone-previews blob-upload-dropzone-previews">
<p class="dz-message light">
Attach a file by drag &amp; drop or <a class="markdown-selector" href="#">click to upload</a>
</p>
</div>
</div>
<br>
<div class="dropzone-alerts gl-alert gl-alert-danger gl-mb-5 data" style="display:none"></div>
<div class="form-group row commit_message-group">
<label class="col-form-label col-sm-2" for="commit_message-236fc0df92da49dea99391aa5321486a">Commit message
</label><div class="col-sm-10">
<div class="commit-message-container">
<div class="max-width-marker"></div>
<textarea name="commit_message" id="commit_message-236fc0df92da49dea99391aa5321486a" class="form-control js-commit-message" placeholder="Replace VariableGetSniff.php" required="required" rows="3">
Replace VariableGetSniff.php</textarea>
</div>
</div>
</div>

<input type="hidden" name="branch_name" id="branch_name" />
<input type="hidden" name="create_merge_request" id="create_merge_request" value="1" />
<input type="hidden" name="original_branch" id="original_branch" value="master" class="js-original-branch" />

<div class="form-actions">
<button name="button" type="button" class="btn gl-button btn-success btn-upload-file" id="submit-all"><div class="spinner spinner-sm gl-mr-2 js-loading-icon hidden"></div>
Replace file
</button><a class="btn gl-button btn-cancel" data-dismiss="modal" href="#">Cancel</a>
<div class="inline gl-ml-3">
A new branch will be created in your fork and a new merge request will be started.
</div>

</div>
</form></div>
</div>
</div>
</div>

</div>


</div>
</div>
</div>
</div>


<script>
//<![CDATA[
if ('loading' in HTMLImageElement.prototype) {
  document.querySelectorAll('img.lazy').forEach(img => {
    img.loading = 'lazy';
    let imgUrl = img.dataset.src;
    // Only adding width + height for avatars for now
    if (imgUrl.indexOf('/avatar/') > -1 && imgUrl.indexOf('?') === -1) {
      const targetWidth = img.getAttribute('width') || img.width;
      imgUrl += `?width=${targetWidth}`;
    }
    img.src = imgUrl;
    img.removeAttribute('data-src');
    img.classList.remove('lazy');
    img.classList.add('js-lazy-loaded', 'qa-js-lazy-loaded');
  });
}

//]]>
</script>

</body>
</html>

