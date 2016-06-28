<div class="compWrap"><span id="Grid" class="compTitle">Grid <span class="js-hideAll fa fa-eye"></span></span><p class="compNotes">The basic setup of every page in Clockwise. The class <span class="italic">container</span> is always centered on the screen. In order to get proper formatting of the cells, the <span class="italic">row</span> class needs to be used for every row defined on the site.</br>The layout was inspired by skeleton.css and edited by the Clockwise team. For more information about skeleton visit <a href="http://getskeleton.com" class="link" target="_blank">getskeleton.com</a></p><div class="component" style="background-color:"><?php include("../components/Layout/Grid.php");?></div><div class="compCodeBox"> <ul class="nav nav-tabs" role="tablist"> <li role="presentation" class="active"><a href="#Grid-markup" aria-controls="Grid-markup" role="tab" data-toggle="tab">Markup</a></li><li role="presentation"><a href="#Grid-css" aria-controls="Grid-css" role="tab" data-toggle="tab">scss</a></li></ul> <div class="tab-content"> <div role="tabpanel" class="tab-pane active markup-display" id="Grid-markup"></div><div role="tabpanel" class="tab-pane" id="Grid-css"><pre><code class="language-css"><?php include("../scss/Layout/_Grid.scss");?></code></pre></div></div></div></div>
<div class="compWrap"><span id="Cards" class="compTitle">Cards <span class="js-hideAll fa fa-eye"></span></span><p class="compNotes">The card system used in Clockwise is dependent on the <a href="atomic-core/Layout.php#Grid" class="link">grid</a> system (at least the <span class="italic">four</span> columns part needs to be implemented). Down below you see three cards that are aligned vertically and change their size according to the size of the display. Note that the <span class="italic">row</span> class is given a margin so that the rows do not stick together. This margin however should be zeroed when decreasing the display size as the cards should then be in an equal distance to each other. (the last feature is still being worked on, as well as the responsiveness)</p><div class="component" style="background-color:"><?php include("../components/Layout/Cards.php");?></div><div class="compCodeBox"> <ul class="nav nav-tabs" role="tablist"> <li role="presentation" class="active"><a href="#Cards-markup" aria-controls="Cards-markup" role="tab" data-toggle="tab">Markup</a></li><li role="presentation"><a href="#Cards-css" aria-controls="Cards-css" role="tab" data-toggle="tab">scss</a></li></ul> <div class="tab-content"> <div role="tabpanel" class="tab-pane active markup-display" id="Cards-markup"></div><div role="tabpanel" class="tab-pane" id="Cards-css"><pre><code class="language-css"><?php include("../scss/Layout/_Cards.scss");?></code></pre></div></div></div></div>