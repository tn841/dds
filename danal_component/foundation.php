<?php
    include("./header.php");
?>
<!-- container-->
<div class="container">
    <div class="left_navi">
        <div class="left_menu">
            <h2>foundation</h2>
            <div class="components_l">
                <a class="first_menu">Guidelines</a>
                <button type="button">
                    <span class="plus" style="display:none;"></span>
                    <span class="minus"></span>
                </button>
            </div>
            <div class="components_l on">
                <ul>
                    <li><a href="?view=index.html">Guide/Layout</a></li>
                    <li><a href="?view=typography.html">Typography</a></li>
                    <li><a href="?view=color.html">Color</a></li>
                </ul>
            </div>
            <div class="components_l">
                <a class="first_menu">Web</a>
                <button type="button">
                    <span class="plus" style="display:none;"></span>
                    <span class="minus"></span>
                </button>
            </div>
            <div class="components_l on">
                <ul>
                    <li><a href="?view=index.html">Guide/Layout</a></li>
                    <li><a href="?view=typography.html">Typography</a></li>
                    <li><a href="?view=color.html">Color</a></li>
                </ul>
            </div>
           	<div class="components_l">
                <a class="first_menu">Mobile</a>
                <button type="button">
                    <span class="plus" style="display:none;"></span>
                    <span class="minus"></span>
                </button>
            </div>
            <div class="components_l on">
                <ul>
                    <li><a href="?view=index.html">Guide/Layout</a></li>
                    <li><a href="?view=typography.html">Typography</a></li>
                    <li><a href="?view=color.html">Color</a></li>
                </ul>
            </div>
        </div>
    </div>
<?php
    $view_template = isset($_GET['view']) ? $_GET['view'] : "index.html";
    include("./side_menu/$page_title/$view_template");
?>
</div>
<!-- //container-->
<?php
    include("./footer.php");
?>
