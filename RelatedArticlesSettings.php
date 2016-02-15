<?php
// ~/Documents/gerrit/mediawiki/vagrant/settings.d/RelatedArticlesSettings.php
wfLoadExtension( 'Cards' );
wfLoadExtension( 'RelatedArticles' );
$wgRelatedArticlesLoggingSamplingRate = 1;
$wgRelatedArticlesShowInFooter = true;
$wgRelatedArticlesShowInSidebar = true;
$wgRelatedArticlesUseCirrusSearch = true;
