<?php

function paging_start_row($current_page, $rows_per_page) {

	return ($current_page - 1) * $rows_per_page;
	
}

function paging_stop_row($start_row, $rows_per_page, $total_rows) {

	return (($start_row + $rows_per_page) < $total_rows) ? ($start_row + $rows_per_page) : $total_rows;
	
}

function paging_total_pages($total_rows, $rows_per_page) {

 	return ceil($total_rows / $rows_per_page);
	
}

function paging_pagenum($current_page, $total_pages, $page_range, $query_string) {

	$page_start = $current_page - $page_range;
	$page_end = $current_page + $page_range;

	if($page_start < 1) {	
		$page_end += 1 - $page_start;  
 		$page_start = 1;
	}

	if($page_end > $total_pages) {
 		$diff = $page_end - $total_pages;
		$page_start -= $diff;
		if($page_start < 1) {
			$page_start = 1;
		}

		$page_end = $total_pages;
	}
	
	$url = $_SERVER['PHP_SELF'] . "?" . $query_string;

	$result = "";
	
	 if($current_page > 1) {
 		$page = $current_page - 1;
		$result .= "&nbsp;";
 		$result .= "<a href=\"$url&page=$page\">Previous</a>";
	}

	if($page_start > 1) {
		$page = $page_start - 1;
		$result .= "&nbsp;";
		$result .= "<a href=\"$url&page=$page\">...</a>";
	}

	for($i = $page_start; $i <= $page_end; $i++) {
		$result .= "&nbsp;";
		if($i == $current_page) {
			$result .= $i;
		}
		else {
			$result .= "<a href=\"$url&page=$i\">$i</a>";
		}
		$result .= "&nbsp;";
	}

	if($page_end < $total_pages) {
		$page = $page_end + 1;
		$result .= "&nbsp;"; 
		$result .= "<a href=\"$url&page=$page\">...</a>";		
	}

	if($current_page < $total_pages) {
 		$page = $current_page + 1;
		$result .= "&nbsp;";
 		$result .= "<a href=\"$url&page=$page\">Next</a>";
	}
	
 	if($result == "") {
		return "1";
	}
	else {
 		return $result;
	}
}
 
 ?>