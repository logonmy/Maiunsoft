




<!DOCTYPE html>
<html lang="en" class="   ">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    
    
    <title>jquery-browser-plugin/jquery.browser.js at master · gabceb/jquery-browser-plugin · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="gabceb/jquery-browser-plugin" name="twitter:title" /><meta content="jquery-browser-plugin - A jQuery plugin for browser detection" name="twitter:description" /><meta content="https://avatars3.githubusercontent.com/u/470852?v=2&amp;s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars3.githubusercontent.com/u/470852?v=2&amp;s=400" property="og:image" /><meta content="gabceb/jquery-browser-plugin" property="og:title" /><meta content="https://github.com/gabceb/jquery-browser-plugin" property="og:url" /><meta content="jquery-browser-plugin - A jQuery plugin for browser detection" property="og:description" />

    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035">
    

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="repo_source" data-pjax-transient>
      <meta name="google-analytics" content="UA-3769691-2">

    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="74EA7A1F:4A81:23B0BEC:53E2F05F" name="octolytics-dimension-request_id" />
    

    
    
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">


    <meta content="authenticity_token" name="csrf-param" />
<meta content="cSJmJJV58j4c/0NEN0cikQYxBxulep4vQKupa3vDsWzTcyWlcIJPZOGP20JSYvOYQsfwoy1WW3zH4hdo45/eYQ==" name="csrf-token" />

    <link href="https://assets-cdn.github.com/assets/github-f38c27913e0b514000d08540798e55d5376dc1f6.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://assets-cdn.github.com/assets/github2-70310ffa048905015103bec46ba323a29c7e6a67.css" media="all" rel="stylesheet" type="text/css" />
    


    <meta http-equiv="x-pjax-version" content="a6356a189c6d97129e556a8eb65878e2">

      
  <meta name="description" content="jquery-browser-plugin - A jQuery plugin for browser detection">


  <meta content="470852" name="octolytics-dimension-user_id" /><meta content="gabceb" name="octolytics-dimension-user_login" /><meta content="8426095" name="octolytics-dimension-repository_id" /><meta content="gabceb/jquery-browser-plugin" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="8426095" name="octolytics-dimension-repository_network_root_id" /><meta content="gabceb/jquery-browser-plugin" name="octolytics-dimension-repository_network_root_nwo" />

  <link href="https://github.com/gabceb/jquery-browser-plugin/commits/master.atom" rel="alternate" title="Recent Commits to jquery-browser-plugin:master" type="application/atom+xml">

  </head>


  <body class="logged_out  env-production macintosh vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions">
        <a class="button primary" href="/join">Sign up</a>
      <a class="button signin" href="/login?return_to=%2Fgabceb%2Fjquery-browser-plugin%2Fblob%2Fmaster%2Fdist%2Fjquery.browser.js">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">

      <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
          <li class="features"><a href="/features">Features</a></li>
          <li class="enterprise"><a href="https://enterprise.github.com/">Enterprise</a></li>
          <li class="blog"><a href="/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<div class="commandbar">
  <span class="message"></span>
  <input type="text" data-hotkey="s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    
    data-repo="gabceb/jquery-browser-plugin"
  >
  <div class="display hidden"></div>
</div>

    <input type="hidden" name="nwo" value="gabceb/jquery-browser-plugin">

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target" role="button" aria-haspopup="true">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container" aria-hidden="true">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked">
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global">
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="help tooltipped tooltipped-s" aria-label="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
    </div>

  </div>
</div>



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        
<ul class="pagehead-actions">


  <li>
      <a href="/login?return_to=%2Fgabceb%2Fjquery-browser-plugin"
    class="minibutton with-count star-button tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>
    Star
  </a>

    <a class="social-count js-social-count" href="/gabceb/jquery-browser-plugin/stargazers">
      162
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Fgabceb%2Fjquery-browser-plugin"
        class="minibutton with-count js-toggler-target fork-button tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-repo-forked"></span>
        Fork
      </a>
      <a href="/gabceb/jquery-browser-plugin/network" class="social-count">
        144
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="mega-octicon octicon-repo"></span>
          <span class="author"><a href="/gabceb" class="url fn" itemprop="url" rel="author"><span itemprop="title">gabceb</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/gabceb/jquery-browser-plugin" class="js-current-repository js-repo-home-link">jquery-browser-plugin</a></strong>

          <span class="page-context-loader">
            <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders" data-issue-count-url="/gabceb/jquery-browser-plugin/issues/counts">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped tooltipped-w" aria-label="Code">
        <a href="/gabceb/jquery-browser-plugin" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /gabceb/jquery-browser-plugin">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped tooltipped-w" aria-label="Issues">
          <a href="/gabceb/jquery-browser-plugin/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /gabceb/jquery-browser-plugin/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class="js-issue-replace-counter"></span>
            <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/gabceb/jquery-browser-plugin/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g p" data-selected-links="repo_pulls /gabceb/jquery-browser-plugin/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class="js-pull-replace-counter"></span>
            <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


        <li class="tooltipped tooltipped-w" aria-label="Wiki">
          <a href="/gabceb/jquery-browser-plugin/wiki" aria-label="Wiki" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g w" data-selected-links="repo_wiki /gabceb/jquery-browser-plugin/wiki">
            <span class="octicon octicon-book"></span> <span class="full-word">Wiki</span>
            <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>
    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/gabceb/jquery-browser-plugin/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /gabceb/jquery-browser-plugin/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/gabceb/jquery-browser-plugin/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /gabceb/jquery-browser-plugin/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="input-group">
    <input type="text" class="input-mini input-monospace js-url-field"
           value="https://github.com/gabceb/jquery-browser-plugin.git" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/gabceb/jquery-browser-plugin.git" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="input-group">
    <input type="text" class="input-mini input-monospace js-url-field"
           value="https://github.com/gabceb/jquery-browser-plugin" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/gabceb/jquery-browser-plugin" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <a href="https://help.github.com/articles/which-remote-url-should-i-use" class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <span class="octicon octicon-question"></span>
  </a>
</p>

  <a href="http://mac.github.com" data-url="github-mac://openRepo/https://github.com/gabceb/jquery-browser-plugin" class="minibutton sidebar-button js-conduit-rewrite-url" title="Save gabceb/jquery-browser-plugin to your computer and use it in GitHub Desktop." aria-label="Save gabceb/jquery-browser-plugin to your computer and use it in GitHub Desktop.">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>


                <a href="/gabceb/jquery-browser-plugin/archive/master.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download gabceb/jquery-browser-plugin as a zip file"
                   title="Download gabceb/jquery-browser-plugin as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<a href="/gabceb/jquery-browser-plugin/blob/81adf4da390608a97bf7d72cfa8caab006e39a35/dist/jquery.browser.js" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:56896554ca77e1475894dc856fe0099d -->

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target css-truncate" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    title="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button css-truncate-target">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-x js-menu-close" role="button" aria-label="Close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/gabceb/jquery-browser-plugin/blob/master/dist/jquery.browser.js"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/gabceb/jquery-browser-plugin/tree/v0.05/dist/jquery.browser.js"
                 data-name="v0.05"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v0.05">v0.05</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/gabceb/jquery-browser-plugin/tree/v0.0.6/dist/jquery.browser.js"
                 data-name="v0.0.6"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v0.0.6">v0.0.6</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/gabceb/jquery-browser-plugin/tree/v0.0.5/dist/jquery.browser.js"
                 data-name="v0.0.5"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v0.0.5">v0.0.5</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/gabceb/jquery-browser-plugin/tree/v0.0.4/dist/jquery.browser.js"
                 data-name="v0.0.4"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v0.0.4">v0.0.4</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/gabceb/jquery-browser-plugin/tree/v0.0.3/dist/jquery.browser.js"
                 data-name="v0.0.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v0.0.3">v0.0.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/gabceb/jquery-browser-plugin/tree/0.0.1/dist/jquery.browser.js"
                 data-name="0.0.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.0.1">0.0.1</a>
            </div> <!-- /.select-menu-item -->
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="button-group right">
    <a href="/gabceb/jquery-browser-plugin/find/master"
          class="js-show-file-finder minibutton empty-icon tooltipped tooltipped-s"
          data-pjax
          data-hotkey="t"
          aria-label="Quickly jump between files">
      <span class="octicon octicon-list-unordered"></span>
    </a>
    <button class="js-zeroclipboard minibutton zeroclipboard-button"
          data-clipboard-text="dist/jquery.browser.js"
          aria-label="Copy to clipboard"
          data-copied-hint="Copied!">
      <span class="octicon octicon-clippy"></span>
    </button>
  </div>

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/gabceb/jquery-browser-plugin" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">jquery-browser-plugin</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/gabceb/jquery-browser-plugin/tree/master/dist" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">dist</span></a></span><span class="separator"> / </span><strong class="final-path">jquery.browser.js</strong>
  </div>
</div>


  <div class="commit file-history-tease">
      <img alt="Gabriel Cebrian" class="main-avatar js-avatar" data-user="470852" height="24" src="https://avatars3.githubusercontent.com/u/470852?s=140" width="24" />
      <span class="author"><a href="/gabceb" rel="author">gabceb</a></span>
      <time datetime="2014-03-30T18:11:40-07:00" is="relative-time">March 30, 2014</time>
      <div class="commit-title">
          <a href="/gabceb/jquery-browser-plugin/commit/1efa52dee883e8d3e4929b644ff1350bf203a62b" class="message" data-pjax="true" title="Bumped to v0.0.6">Bumped to v0.0.6</a>
      </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>2</strong>  contributors</a></p>
          <a class="avatar tooltipped tooltipped-s" aria-label="le717" href="/gabceb/jquery-browser-plugin/commits/master/dist/jquery.browser.js?author=le717"><img alt="Triangle717" class=" js-avatar" data-user="3382464" height="20" src="https://avatars0.githubusercontent.com/u/3382464?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="gabceb" href="/gabceb/jquery-browser-plugin/commits/master/dist/jquery.browser.js?author=gabceb"><img alt="Gabriel Cebrian" class=" js-avatar" data-user="470852" height="20" src="https://avatars3.githubusercontent.com/u/470852?s=140" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="Triangle717" class=" js-avatar" data-user="3382464" height="24" src="https://avatars0.githubusercontent.com/u/3382464?s=140" width="24" />
            <a href="/le717">le717</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Gabriel Cebrian" class=" js-avatar" data-user="470852" height="24" src="https://avatars3.githubusercontent.com/u/470852?s=140" width="24" />
            <a href="/gabceb">gabceb</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
          <span>112 lines (91 sloc)</span>
          <span class="meta-divider"></span>
        <span>2.916 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
          <a href="/gabceb/jquery-browser-plugin/raw/master/dist/jquery.browser.js" class="minibutton " id="raw-url">Raw</a>
            <a href="/gabceb/jquery-browser-plugin/blame/master/dist/jquery.browser.js" class="minibutton js-update-url-with-hash">Blame</a>
          <a href="/gabceb/jquery-browser-plugin/commits/master/dist/jquery.browser.js" class="minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->

          <a class="octicon-button tooltipped tooltipped-nw js-conduit-openfile-check"
             href="http://mac.github.com"
             data-url="github-mac://openRepo/https://github.com/gabceb/jquery-browser-plugin?branch=master&amp;filepath=dist%2Fjquery.browser.js"
             aria-label="Open this file in GitHub for Mac"
             data-failed-title="Your version of GitHub for Mac is too old to open this file. Try checking for updates.">
              <span class="octicon octicon-device-desktop"></span>
          </a>

            <a class="octicon-button disabled tooltipped tooltipped-w" href="#"
               aria-label="You must be signed in to make or propose changes"><span class="octicon octicon-pencil"></span></a>

          <a class="octicon-button danger disabled tooltipped tooltipped-w" href="#"
             aria-label="You must be signed in to make or propose changes">
          <span class="octicon octicon-trashcan"></span>
        </a>
      </div><!-- /.actions -->
    </div>
      

  <div class="blob-wrapper data type-javascript">
       <table class="file-code file-diff tab-size-8 js-file-line-container">
         <tr class="file-code-line">
           <td class="blob-line-nums">
             <span id="L1" class="js-line-number">1</span>
<span id="L2" class="js-line-number">2</span>
<span id="L3" class="js-line-number">3</span>
<span id="L4" class="js-line-number">4</span>
<span id="L5" class="js-line-number">5</span>
<span id="L6" class="js-line-number">6</span>
<span id="L7" class="js-line-number">7</span>
<span id="L8" class="js-line-number">8</span>
<span id="L9" class="js-line-number">9</span>
<span id="L10" class="js-line-number">10</span>
<span id="L11" class="js-line-number">11</span>
<span id="L12" class="js-line-number">12</span>
<span id="L13" class="js-line-number">13</span>
<span id="L14" class="js-line-number">14</span>
<span id="L15" class="js-line-number">15</span>
<span id="L16" class="js-line-number">16</span>
<span id="L17" class="js-line-number">17</span>
<span id="L18" class="js-line-number">18</span>
<span id="L19" class="js-line-number">19</span>
<span id="L20" class="js-line-number">20</span>
<span id="L21" class="js-line-number">21</span>
<span id="L22" class="js-line-number">22</span>
<span id="L23" class="js-line-number">23</span>
<span id="L24" class="js-line-number">24</span>
<span id="L25" class="js-line-number">25</span>
<span id="L26" class="js-line-number">26</span>
<span id="L27" class="js-line-number">27</span>
<span id="L28" class="js-line-number">28</span>
<span id="L29" class="js-line-number">29</span>
<span id="L30" class="js-line-number">30</span>
<span id="L31" class="js-line-number">31</span>
<span id="L32" class="js-line-number">32</span>
<span id="L33" class="js-line-number">33</span>
<span id="L34" class="js-line-number">34</span>
<span id="L35" class="js-line-number">35</span>
<span id="L36" class="js-line-number">36</span>
<span id="L37" class="js-line-number">37</span>
<span id="L38" class="js-line-number">38</span>
<span id="L39" class="js-line-number">39</span>
<span id="L40" class="js-line-number">40</span>
<span id="L41" class="js-line-number">41</span>
<span id="L42" class="js-line-number">42</span>
<span id="L43" class="js-line-number">43</span>
<span id="L44" class="js-line-number">44</span>
<span id="L45" class="js-line-number">45</span>
<span id="L46" class="js-line-number">46</span>
<span id="L47" class="js-line-number">47</span>
<span id="L48" class="js-line-number">48</span>
<span id="L49" class="js-line-number">49</span>
<span id="L50" class="js-line-number">50</span>
<span id="L51" class="js-line-number">51</span>
<span id="L52" class="js-line-number">52</span>
<span id="L53" class="js-line-number">53</span>
<span id="L54" class="js-line-number">54</span>
<span id="L55" class="js-line-number">55</span>
<span id="L56" class="js-line-number">56</span>
<span id="L57" class="js-line-number">57</span>
<span id="L58" class="js-line-number">58</span>
<span id="L59" class="js-line-number">59</span>
<span id="L60" class="js-line-number">60</span>
<span id="L61" class="js-line-number">61</span>
<span id="L62" class="js-line-number">62</span>
<span id="L63" class="js-line-number">63</span>
<span id="L64" class="js-line-number">64</span>
<span id="L65" class="js-line-number">65</span>
<span id="L66" class="js-line-number">66</span>
<span id="L67" class="js-line-number">67</span>
<span id="L68" class="js-line-number">68</span>
<span id="L69" class="js-line-number">69</span>
<span id="L70" class="js-line-number">70</span>
<span id="L71" class="js-line-number">71</span>
<span id="L72" class="js-line-number">72</span>
<span id="L73" class="js-line-number">73</span>
<span id="L74" class="js-line-number">74</span>
<span id="L75" class="js-line-number">75</span>
<span id="L76" class="js-line-number">76</span>
<span id="L77" class="js-line-number">77</span>
<span id="L78" class="js-line-number">78</span>
<span id="L79" class="js-line-number">79</span>
<span id="L80" class="js-line-number">80</span>
<span id="L81" class="js-line-number">81</span>
<span id="L82" class="js-line-number">82</span>
<span id="L83" class="js-line-number">83</span>
<span id="L84" class="js-line-number">84</span>
<span id="L85" class="js-line-number">85</span>
<span id="L86" class="js-line-number">86</span>
<span id="L87" class="js-line-number">87</span>
<span id="L88" class="js-line-number">88</span>
<span id="L89" class="js-line-number">89</span>
<span id="L90" class="js-line-number">90</span>
<span id="L91" class="js-line-number">91</span>
<span id="L92" class="js-line-number">92</span>
<span id="L93" class="js-line-number">93</span>
<span id="L94" class="js-line-number">94</span>
<span id="L95" class="js-line-number">95</span>
<span id="L96" class="js-line-number">96</span>
<span id="L97" class="js-line-number">97</span>
<span id="L98" class="js-line-number">98</span>
<span id="L99" class="js-line-number">99</span>
<span id="L100" class="js-line-number">100</span>
<span id="L101" class="js-line-number">101</span>
<span id="L102" class="js-line-number">102</span>
<span id="L103" class="js-line-number">103</span>
<span id="L104" class="js-line-number">104</span>
<span id="L105" class="js-line-number">105</span>
<span id="L106" class="js-line-number">106</span>
<span id="L107" class="js-line-number">107</span>
<span id="L108" class="js-line-number">108</span>
<span id="L109" class="js-line-number">109</span>
<span id="L110" class="js-line-number">110</span>
<span id="L111" class="js-line-number">111</span>
<span id="L112" class="js-line-number">112</span>

           </td>
           <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line js-file-line' id='LC1'><span class="cm">/*!</span></div><div class='line js-file-line' id='LC2'><span class="cm"> * jQuery Browser Plugin v0.0.6</span></div><div class='line js-file-line' id='LC3'><span class="cm"> * https://github.com/gabceb/jquery-browser-plugin</span></div><div class='line js-file-line' id='LC4'><span class="cm"> *</span></div><div class='line js-file-line' id='LC5'><span class="cm"> * Original jquery-browser code Copyright 2005, 2013 jQuery Foundation, Inc. and other contributors</span></div><div class='line js-file-line' id='LC6'><span class="cm"> * http://jquery.org/license</span></div><div class='line js-file-line' id='LC7'><span class="cm"> *</span></div><div class='line js-file-line' id='LC8'><span class="cm"> * Modifications Copyright 2013 Gabriel Cebrian</span></div><div class='line js-file-line' id='LC9'><span class="cm"> * https://github.com/gabceb</span></div><div class='line js-file-line' id='LC10'><span class="cm"> *</span></div><div class='line js-file-line' id='LC11'><span class="cm"> * Released under the MIT license</span></div><div class='line js-file-line' id='LC12'><span class="cm"> *</span></div><div class='line js-file-line' id='LC13'><span class="cm"> * Date: 2013-07-29T17:23:27-07:00</span></div><div class='line js-file-line' id='LC14'><span class="cm"> */</span></div><div class='line js-file-line' id='LC15'><br></div><div class='line js-file-line' id='LC16'><span class="p">(</span><span class="kd">function</span><span class="p">(</span> <span class="nx">jQuery</span><span class="p">,</span> <span class="nb">window</span><span class="p">,</span> <span class="kc">undefined</span> <span class="p">)</span> <span class="p">{</span></div><div class='line js-file-line' id='LC17'>&nbsp;&nbsp;<span class="s2">&quot;use strict&quot;</span><span class="p">;</span></div><div class='line js-file-line' id='LC18'><br></div><div class='line js-file-line' id='LC19'>&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">matched</span><span class="p">,</span> <span class="nx">browser</span><span class="p">;</span></div><div class='line js-file-line' id='LC20'><br></div><div class='line js-file-line' id='LC21'>&nbsp;&nbsp;<span class="nx">jQuery</span><span class="p">.</span><span class="nx">uaMatch</span> <span class="o">=</span> <span class="kd">function</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="p">{</span></div><div class='line js-file-line' id='LC22'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">ua</span> <span class="o">=</span> <span class="nx">ua</span><span class="p">.</span><span class="nx">toLowerCase</span><span class="p">();</span></div><div class='line js-file-line' id='LC23'><br></div><div class='line js-file-line' id='LC24'>&nbsp;&nbsp;	<span class="kd">var</span> <span class="nx">match</span> <span class="o">=</span> <span class="sr">/(opr)[\/]([\w.]+)/</span><span class="p">.</span><span class="nx">exec</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="o">||</span></div><div class='line js-file-line' id='LC25'>&nbsp;&nbsp;		<span class="sr">/(chrome)[ \/]([\w.]+)/</span><span class="p">.</span><span class="nx">exec</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="o">||</span></div><div class='line js-file-line' id='LC26'>&nbsp;&nbsp;		<span class="sr">/(version)[ \/]([\w.]+).*(safari)[ \/]([\w.]+)/</span><span class="p">.</span><span class="nx">exec</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="o">||</span></div><div class='line js-file-line' id='LC27'>&nbsp;&nbsp;		<span class="sr">/(webkit)[ \/]([\w.]+)/</span><span class="p">.</span><span class="nx">exec</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="o">||</span></div><div class='line js-file-line' id='LC28'>&nbsp;&nbsp;		<span class="sr">/(opera)(?:.*version|)[ \/]([\w.]+)/</span><span class="p">.</span><span class="nx">exec</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="o">||</span></div><div class='line js-file-line' id='LC29'>&nbsp;&nbsp;		<span class="sr">/(msie) ([\w.]+)/</span><span class="p">.</span><span class="nx">exec</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="o">||</span></div><div class='line js-file-line' id='LC30'>&nbsp;&nbsp;		<span class="nx">ua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s2">&quot;trident&quot;</span><span class="p">)</span> <span class="o">&gt;=</span> <span class="mi">0</span> <span class="o">&amp;&amp;</span> <span class="sr">/(rv)(?::| )([\w.]+)/</span><span class="p">.</span><span class="nx">exec</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="o">||</span></div><div class='line js-file-line' id='LC31'>&nbsp;&nbsp;		<span class="nx">ua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s2">&quot;compatible&quot;</span><span class="p">)</span> <span class="o">&lt;</span> <span class="mi">0</span> <span class="o">&amp;&amp;</span> <span class="sr">/(mozilla)(?:.*? rv:([\w.]+)|)/</span><span class="p">.</span><span class="nx">exec</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="o">||</span></div><div class='line js-file-line' id='LC32'>&nbsp;&nbsp;		<span class="p">[];</span></div><div class='line js-file-line' id='LC33'><br></div><div class='line js-file-line' id='LC34'>&nbsp;&nbsp;	<span class="kd">var</span> <span class="nx">platform_match</span> <span class="o">=</span> <span class="sr">/(ipad)/</span><span class="p">.</span><span class="nx">exec</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="o">||</span></div><div class='line js-file-line' id='LC35'>&nbsp;&nbsp;		<span class="sr">/(iphone)/</span><span class="p">.</span><span class="nx">exec</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="o">||</span></div><div class='line js-file-line' id='LC36'>&nbsp;&nbsp;		<span class="sr">/(android)/</span><span class="p">.</span><span class="nx">exec</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="o">||</span></div><div class='line js-file-line' id='LC37'>&nbsp;&nbsp;		<span class="sr">/(windows phone)/</span><span class="p">.</span><span class="nx">exec</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="o">||</span></div><div class='line js-file-line' id='LC38'>&nbsp;&nbsp;		<span class="sr">/(win)/</span><span class="p">.</span><span class="nx">exec</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="o">||</span></div><div class='line js-file-line' id='LC39'>&nbsp;&nbsp;		<span class="sr">/(mac)/</span><span class="p">.</span><span class="nx">exec</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="o">||</span></div><div class='line js-file-line' id='LC40'>&nbsp;&nbsp;		<span class="sr">/(linux)/</span><span class="p">.</span><span class="nx">exec</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="o">||</span></div><div class='line js-file-line' id='LC41'>&nbsp;&nbsp;		<span class="sr">/(cros)/i</span><span class="p">.</span><span class="nx">exec</span><span class="p">(</span> <span class="nx">ua</span> <span class="p">)</span> <span class="o">||</span></div><div class='line js-file-line' id='LC42'>&nbsp;&nbsp;		<span class="p">[];</span></div><div class='line js-file-line' id='LC43'><br></div><div class='line js-file-line' id='LC44'>&nbsp;&nbsp;	<span class="k">return</span> <span class="p">{</span></div><div class='line js-file-line' id='LC45'>&nbsp;&nbsp;		<span class="nx">browser</span><span class="o">:</span> <span class="nx">match</span><span class="p">[</span> <span class="mi">3</span> <span class="p">]</span> <span class="o">||</span> <span class="nx">match</span><span class="p">[</span> <span class="mi">1</span> <span class="p">]</span> <span class="o">||</span> <span class="s2">&quot;&quot;</span><span class="p">,</span></div><div class='line js-file-line' id='LC46'>&nbsp;&nbsp;		<span class="nx">version</span><span class="o">:</span> <span class="nx">match</span><span class="p">[</span> <span class="mi">2</span> <span class="p">]</span> <span class="o">||</span> <span class="s2">&quot;0&quot;</span><span class="p">,</span></div><div class='line js-file-line' id='LC47'>&nbsp;&nbsp;		<span class="nx">platform</span><span class="o">:</span> <span class="nx">platform_match</span><span class="p">[</span> <span class="mi">0</span> <span class="p">]</span> <span class="o">||</span> <span class="s2">&quot;&quot;</span></div><div class='line js-file-line' id='LC48'>&nbsp;&nbsp;	<span class="p">};</span></div><div class='line js-file-line' id='LC49'>&nbsp;&nbsp;<span class="p">};</span></div><div class='line js-file-line' id='LC50'><br></div><div class='line js-file-line' id='LC51'>&nbsp;&nbsp;<span class="nx">matched</span> <span class="o">=</span> <span class="nx">jQuery</span><span class="p">.</span><span class="nx">uaMatch</span><span class="p">(</span> <span class="nb">window</span><span class="p">.</span><span class="nx">navigator</span><span class="p">.</span><span class="nx">userAgent</span> <span class="p">);</span></div><div class='line js-file-line' id='LC52'>&nbsp;&nbsp;<span class="nx">browser</span> <span class="o">=</span> <span class="p">{};</span></div><div class='line js-file-line' id='LC53'><br></div><div class='line js-file-line' id='LC54'>&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="nx">matched</span><span class="p">.</span><span class="nx">browser</span> <span class="p">)</span> <span class="p">{</span></div><div class='line js-file-line' id='LC55'>&nbsp;&nbsp;	<span class="nx">browser</span><span class="p">[</span> <span class="nx">matched</span><span class="p">.</span><span class="nx">browser</span> <span class="p">]</span> <span class="o">=</span> <span class="kc">true</span><span class="p">;</span></div><div class='line js-file-line' id='LC56'>&nbsp;&nbsp;	<span class="nx">browser</span><span class="p">.</span><span class="nx">version</span> <span class="o">=</span> <span class="nx">matched</span><span class="p">.</span><span class="nx">version</span><span class="p">;</span></div><div class='line js-file-line' id='LC57'>&nbsp;&nbsp;	<span class="nx">browser</span><span class="p">.</span><span class="nx">versionNumber</span> <span class="o">=</span> <span class="nb">parseInt</span><span class="p">(</span><span class="nx">matched</span><span class="p">.</span><span class="nx">version</span><span class="p">);</span></div><div class='line js-file-line' id='LC58'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line js-file-line' id='LC59'><br></div><div class='line js-file-line' id='LC60'>&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="nx">matched</span><span class="p">.</span><span class="nx">platform</span> <span class="p">)</span> <span class="p">{</span></div><div class='line js-file-line' id='LC61'>&nbsp;&nbsp;	<span class="nx">browser</span><span class="p">[</span> <span class="nx">matched</span><span class="p">.</span><span class="nx">platform</span> <span class="p">]</span> <span class="o">=</span> <span class="kc">true</span><span class="p">;</span></div><div class='line js-file-line' id='LC62'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line js-file-line' id='LC63'><br></div><div class='line js-file-line' id='LC64'>&nbsp;&nbsp;<span class="c1">// These are all considered mobile platforms, meaning they run a mobile browser</span></div><div class='line js-file-line' id='LC65'>&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="nx">browser</span><span class="p">.</span><span class="nx">android</span> <span class="o">||</span> <span class="nx">browser</span><span class="p">.</span><span class="nx">ipad</span> <span class="o">||</span> <span class="nx">browser</span><span class="p">.</span><span class="nx">iphone</span> <span class="o">||</span> <span class="nx">browser</span><span class="p">[</span> <span class="s2">&quot;windows phone&quot;</span> <span class="p">]</span> <span class="p">)</span> <span class="p">{</span></div><div class='line js-file-line' id='LC66'>&nbsp;&nbsp;	<span class="nx">browser</span><span class="p">.</span><span class="nx">mobile</span> <span class="o">=</span> <span class="kc">true</span><span class="p">;</span></div><div class='line js-file-line' id='LC67'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line js-file-line' id='LC68'><br></div><div class='line js-file-line' id='LC69'>&nbsp;&nbsp;<span class="c1">// These are all considered desktop platforms, meaning they run a desktop browser</span></div><div class='line js-file-line' id='LC70'>&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="nx">browser</span><span class="p">.</span><span class="nx">cros</span> <span class="o">||</span> <span class="nx">browser</span><span class="p">.</span><span class="nx">mac</span> <span class="o">||</span> <span class="nx">browser</span><span class="p">.</span><span class="nx">linux</span> <span class="o">||</span> <span class="nx">browser</span><span class="p">.</span><span class="nx">win</span> <span class="p">)</span> <span class="p">{</span></div><div class='line js-file-line' id='LC71'>&nbsp;&nbsp;	<span class="nx">browser</span><span class="p">.</span><span class="nx">desktop</span> <span class="o">=</span> <span class="kc">true</span><span class="p">;</span></div><div class='line js-file-line' id='LC72'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line js-file-line' id='LC73'><br></div><div class='line js-file-line' id='LC74'>&nbsp;&nbsp;<span class="c1">// Chrome, Opera 15+ and Safari are webkit based browsers</span></div><div class='line js-file-line' id='LC75'>&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="nx">browser</span><span class="p">.</span><span class="nx">chrome</span> <span class="o">||</span> <span class="nx">browser</span><span class="p">.</span><span class="nx">opr</span> <span class="o">||</span> <span class="nx">browser</span><span class="p">.</span><span class="nx">safari</span> <span class="p">)</span> <span class="p">{</span></div><div class='line js-file-line' id='LC76'>&nbsp;&nbsp;	<span class="nx">browser</span><span class="p">.</span><span class="nx">webkit</span> <span class="o">=</span> <span class="kc">true</span><span class="p">;</span></div><div class='line js-file-line' id='LC77'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line js-file-line' id='LC78'><br></div><div class='line js-file-line' id='LC79'>&nbsp;&nbsp;<span class="c1">// IE11 has a new token so we will assign it msie to avoid breaking changes</span></div><div class='line js-file-line' id='LC80'>&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="nx">browser</span><span class="p">.</span><span class="nx">rv</span> <span class="p">)</span></div><div class='line js-file-line' id='LC81'>&nbsp;&nbsp;<span class="p">{</span></div><div class='line js-file-line' id='LC82'>&nbsp;&nbsp;	<span class="kd">var</span> <span class="nx">ie</span> <span class="o">=</span> <span class="s2">&quot;msie&quot;</span><span class="p">;</span></div><div class='line js-file-line' id='LC83'><br></div><div class='line js-file-line' id='LC84'>&nbsp;&nbsp;	<span class="nx">matched</span><span class="p">.</span><span class="nx">browser</span> <span class="o">=</span> <span class="nx">ie</span><span class="p">;</span></div><div class='line js-file-line' id='LC85'>&nbsp;&nbsp;	<span class="nx">browser</span><span class="p">[</span><span class="nx">ie</span><span class="p">]</span> <span class="o">=</span> <span class="kc">true</span><span class="p">;</span></div><div class='line js-file-line' id='LC86'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line js-file-line' id='LC87'><br></div><div class='line js-file-line' id='LC88'>&nbsp;&nbsp;<span class="c1">// Opera 15+ are identified as opr</span></div><div class='line js-file-line' id='LC89'>&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="nx">browser</span><span class="p">.</span><span class="nx">opr</span> <span class="p">)</span></div><div class='line js-file-line' id='LC90'>&nbsp;&nbsp;<span class="p">{</span></div><div class='line js-file-line' id='LC91'>&nbsp;&nbsp;	<span class="kd">var</span> <span class="nx">opera</span> <span class="o">=</span> <span class="s2">&quot;opera&quot;</span><span class="p">;</span></div><div class='line js-file-line' id='LC92'><br></div><div class='line js-file-line' id='LC93'>&nbsp;&nbsp;	<span class="nx">matched</span><span class="p">.</span><span class="nx">browser</span> <span class="o">=</span> <span class="nx">opera</span><span class="p">;</span></div><div class='line js-file-line' id='LC94'>&nbsp;&nbsp;	<span class="nx">browser</span><span class="p">[</span><span class="nx">opera</span><span class="p">]</span> <span class="o">=</span> <span class="kc">true</span><span class="p">;</span></div><div class='line js-file-line' id='LC95'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line js-file-line' id='LC96'><br></div><div class='line js-file-line' id='LC97'>&nbsp;&nbsp;<span class="c1">// Stock Android browsers are marked as Safari on Android.</span></div><div class='line js-file-line' id='LC98'>&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="nx">browser</span><span class="p">.</span><span class="nx">safari</span> <span class="o">&amp;&amp;</span> <span class="nx">browser</span><span class="p">.</span><span class="nx">android</span> <span class="p">)</span></div><div class='line js-file-line' id='LC99'>&nbsp;&nbsp;<span class="p">{</span></div><div class='line js-file-line' id='LC100'>&nbsp;&nbsp;	<span class="kd">var</span> <span class="nx">android</span> <span class="o">=</span> <span class="s2">&quot;android&quot;</span><span class="p">;</span></div><div class='line js-file-line' id='LC101'><br></div><div class='line js-file-line' id='LC102'>&nbsp;&nbsp;	<span class="nx">matched</span><span class="p">.</span><span class="nx">browser</span> <span class="o">=</span> <span class="nx">android</span><span class="p">;</span></div><div class='line js-file-line' id='LC103'>&nbsp;&nbsp;	<span class="nx">browser</span><span class="p">[</span><span class="nx">android</span><span class="p">]</span> <span class="o">=</span> <span class="kc">true</span><span class="p">;</span></div><div class='line js-file-line' id='LC104'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line js-file-line' id='LC105'><br></div><div class='line js-file-line' id='LC106'>&nbsp;&nbsp;<span class="c1">// Assign the name and platform variable</span></div><div class='line js-file-line' id='LC107'>&nbsp;&nbsp;<span class="nx">browser</span><span class="p">.</span><span class="nx">name</span> <span class="o">=</span> <span class="nx">matched</span><span class="p">.</span><span class="nx">browser</span><span class="p">;</span></div><div class='line js-file-line' id='LC108'>&nbsp;&nbsp;<span class="nx">browser</span><span class="p">.</span><span class="nx">platform</span> <span class="o">=</span> <span class="nx">matched</span><span class="p">.</span><span class="nx">platform</span><span class="p">;</span></div><div class='line js-file-line' id='LC109'><br></div><div class='line js-file-line' id='LC110'><br></div><div class='line js-file-line' id='LC111'>&nbsp;&nbsp;<span class="nx">jQuery</span><span class="p">.</span><span class="nx">browser</span> <span class="o">=</span> <span class="nx">browser</span><span class="p">;</span></div><div class='line js-file-line' id='LC112'><span class="p">})(</span> <span class="nx">jQuery</span><span class="p">,</span> <span class="nb">window</span> <span class="p">);</span></div></pre></div></td>
         </tr>
       </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/" aria-label="Homepage">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.02602s from github-fe137-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-suggester-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents js-suggester-field" placeholder=""></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-x close js-ajax-error-dismiss" aria-label="Dismiss error"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-12d5fda141e78e513749dddbc56445fe172cbd9a.js" type="text/javascript"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-cd3ffb6a4f095e325a8e723bb7d274c8a4521646.js" type="text/javascript"></script>
      
      
        <script async src="https://www.google-analytics.com/analytics.js"></script>
  </body>
</html>

