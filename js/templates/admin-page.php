<div class="wrap">
    <h1>Content Visualizer</h1>
    <h2 class="nav-tab-wrapper">
        <a href="#treeview" class="nav-tab nav-tab-active">Tree View</a>
        <a href="#graphview" class="nav-tab">Graph View</a>
    </h2>

    <div id="treeview" class="cv-tab-content" style="display: block;">
        <input type="text" id="tree-search" placeholder="Search...">
        <div id="cv-tree-container"></div>
    </div>

    <div id="graphview" class="cv-tab-content" style="display: none;">
        <input type="text" id="graph-search" placeholder="Search...">
        <div id="cv-graph-container" style="height: 600px;"></div>
    </div>
</div>

<script>
jQuery(document).ready(function ($) {
    $('.nav-tab').click(function (e) {
        e.preventDefault();
        $('.nav-tab').removeClass('nav-tab-active');
        $(this).addClass('nav-tab-active');
        $('.cv-tab-content').hide();
        $($(this).attr('href')).show();
    });
});
</script>
