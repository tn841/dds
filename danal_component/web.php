<?php
    include("./header.php");
?>
<!-- container-->
<div class="container">
    <div class="left_navi">
        <div class="left_menu">
            <h2>Web</h2>
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
                    <li><a href="?view=checkbox.html">Checkbox</a></li>
                    <li><a href="?view=radiobox.html">Radio</a></li>
                    <li><a href="?view=text.html">Text_field</a></li>
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
                    <li><a href="?view=tabs.html">Tab</a></li>
                    <li><a href="?view=page_navigtion.html">Page_navigtion</a></li>
                    <li><a href="?view=footer.html">Footer</a></li>
                    <li><a href="?view=popup.html">Popup</a></li>
                    <li><a href="javascript:;">Mail_form</a></li>
                    <li><a href="?view=loading.html">loading</a></li>
                    <li><a href="?view=terms.html">Terms</a></li>
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
                    <li><a href="javascript:;">Tab bar</a></li>
                    <li><a href="javascript:;">Input box</a></li>
                    <li><a href="javascript:;">Top app bar</a></li>
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
            <div class="components_l">
                <a class="first_menu">Plug-in</a>
                <button type="button">
                    <span class="plus" style="display:none;"></span>
                    <span class="minus"></span>
                </button>
            </div>
            <div class="components_l on">
                <ul>
                    <li><a href="?view=datepicker.html">Datepicker</a></li>
                    <li><a href="?view=datatable.html">Datatable</a></li>
                    <li><a href="?view=highchart.html">Highchart</a></li>
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
