
<li class="aa_dir <?php if ($current_page == "General.php"){ echo "active "; }?>">
		<div class="aa_dir__dirNameGroup">
			<i class="aa_dir__dirNameGroup__icon  fa fa-folder-o"></i>
			<a class="aa_dir__dirNameGroup__name" href="atomic-core/General.php">General</a>
		</div>
		<ul class="aa_fileSection">
      <li class="aa_addFileItem">
        <a class="aa_addFile aa_js-actionOpen aa_actionBtn" href="atomic-core/categories/General/form-General.php"><span class="fa fa-plus"></span> Add Component</a>
      </li>
			<?php
				$orig = "../components/General";
				if ($dir = opendir($orig)) {
				while ($file = readdir($dir)) {
				$ok = "true";	
				$filename = $file;
				$filename = basename($filename, ".php");
				if ($file == "."){
				$ok = "false";
				}
				else if ($file == ".."){
				$ok = "false";	
				}
				if ($ok == "true"){
					
				$filename = str_replace(".php", "", $filename );

				echo "<li class='aa_fileSection__file'><a class='aa_js-actionOpen aa_actionBtn fa fa-pencil-square-o' href='atomic-core/categories/General/form-$filename.php'></a><a href='atomic-core/General.php#$filename'>$filename</a></li>";
				}
				}
				closedir($dir);
				}
			?>
		</ul>
</li>
