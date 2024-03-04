<!-- container-->
<div class="container">
	<div class="left_navi">
		<div class="left_menu">
			<h2>Components</h2>
<?php
	$view_template = "";
	for ($i=0; $i<count($side_menu_list); $i++) {
		$category_title = $side_menu_list[$i]["category_title"];
		$sub_menu_list = $side_menu_list[$i]["menu_list"];
		$sub_menu_html = "";
		for ($j=0; $j<count($sub_menu_list); $j++) {
			$template = $sub_menu_list[$j]["template"];
			$sub_menu_title = $sub_menu_list[$j]["sub_menu_title"];
			if (isset($_GET["view"]) && $_GET["view"] == $sub_menu_list[$j]["template"]) $view_template = $sub_menu_list[$j]["template"];
			$href = (!$template || $template == "#") ? "#" : "?view=".rawurlencode($template);
			$sub_menu_html .= "<li><a href=\"$href\">$sub_menu_title</a></li>";
		}
?>
			<div class="components_l">
				<a  class="first_menu"><?=$category_title?></a>
				<button type="button">
					<span class="plus" style="display:none;"></span>
					<span class="minus"></span>
				</button>
			</div>
			<div class="components_l on">
				<ul>
					<?=$sub_menu_html?>
				</ul>
			</div>
<?php
	}
?>
		</div>
	</div>
<?php
	$view_template ?
		include("./side_menu/$page_title/$view_template") :
		include("./side_menu/$page_title/index.html");
?>
</div>
<!-- //container-->