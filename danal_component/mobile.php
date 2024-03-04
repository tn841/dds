<?php
    include("./header.php");
?>
<!-- container-->
<div class="container">
    <div class="left_navi">
        <div class="left_menu">
            <h2>Mobile</h2>
            <div class="components_l">
                <a class="first_menu">Controls</a>
                <button type="button">
                    <span class="plus" style="display:none;"></span>
                    <span class="minus"></span>
                </button>
            </div>
            <div class="components_l on">
                <ul>
                    <li><a href="?view=button.html">Button</a></li>
                    <li><a href="?view=select.html">Select</a></li>
                    <li><a href="?view=">Checkbox</a></li>
                    <li><a href="?view=">Radio</a></li>
                    <li><a href="?view=textfield.html">Text_field</a></li>
                    <li><a href="?view=textarea.html">Text_area</a></li>
                    <li><a href="?view=table.html">Table</a></li>
                    <li><a href="?view=list.html">list</a></li>
                </ul>
            </div>
            <div class="components_l">
                <a class="first_menu">Resources</a>
                <button type="button">
                    <span class="plus" style="display:none;"></span>
                    <span class="minus"></span>
                </button>
            </div>
            <div class="components_l on">
                <ul>
                    <li><a href="?view=navi.html">Navigation</a></li>
                    <li><a href="?view=footer.html">Footer</a></li>
                    <li><a href="?view=popup.html">Popup</a></li>
                </ul>
            </div>
            <div class="components_l">
                <a class="first_menu">Icon</a>
                <button type="button">
                    <span class="plus" style="display:none;"></span>
                    <span class="minus"></span>
                </button>
            </div>
            <div class="components_l on">
                <ul>
                    <li><a href="?view=icon.html">Icon</a></li>
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
