<?php
function popUp($message_type, $title, $message , $href){
//$message_type
// - success
// - warning
// - info

//$title (optional)
// - Any Title

//$message
// - Any message

//$href (optional)
// - Any URL Link redirect after click close


if($href == null || $href == ""){
    $href = "#";
}

$headercolor = "";
$str= "";
$uniqID = $message_type . "_" . uniqid('xxx') . "_" . uniqid('yyy');
if ($message_type == 'success'){
    $headercolor = "bg-success";
}
else if ($message_type == 'warning'){
    $headercolor = "bg-warning";
}
else if ($message_type == 'error'){
    $headercolor = "bg-error";
}
else if ($message_type == 'info'){
    $headercolor = "bg-info";
}

$str .= '<div class="modal fade in" id="'. $uniqID .'" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">';
$str .= '<div class="modal-dialog">';
$str .= '   <div class="modal-content">';
$str .= '      <div class="modal-header '. $headercolor .'">';
$str .= '        <h4 class="modal-title" id="myModalLabel">'. $title .'</h4>';
$str .= '        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
$str .= '      </div>';
$str .= '      <div class="modal-body">';
$str .= '        <h4>'. $message .'</h4>';
$str .= '      </div>';
$str .= '      <div class="modal-footer">';
$str .= '        <a href="'. $href .'" class="btn '. $headercolor .'">Close</a>';
$str .= '      </div>';
$str .= '    </div>';
$str .= '  </div>';
$str .= '</div>';
$str .= '<script>$(document).ready(function(){ $("#'. $uniqID .'").modal("show"); }); </script>';
return $str;
}



?>