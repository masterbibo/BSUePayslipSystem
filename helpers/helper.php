<?php
function popUp($message_type, $title = "Message", $message){
$headercolor = "";
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

$str = '<div class="modal fade in" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">';
$str += '<div class="modal-dialog modal-sm">';
$str += '   <div class="modal-content">';
$str += '      <div class="modal-header '. $headercolor .'">';
$str += '        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
$str += '        <h4 class="modal-title" id="myModalLabel">'. $title .'</h4>';
$str += '      </div>';
$str += '      <div class="modal-body">';
$str += '        <h3>'. $message .'</h3>';
$str += '      </div>';
$str += '      <div class="modal-footer">';
$str += '        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
$str += '      </div>';
$str += '    </div>';
$str += '  </div>';
$str += '</div>';

echo $str;

}

?>