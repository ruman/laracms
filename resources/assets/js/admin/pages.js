// function adminpopupconfirm($title, $message){
// 	if($("#adminconfirmbox").length)
// 		$("#adminconfirmbox").stop().remove();
// 	var confirmbox = '<div id="adminconfirmbox" class="modal modal-danger"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span></button> <h4 class="modal-title">$title</h4> </div> <div class="modal-body"> <p>$message</p> </div> <div class="modal-footer"> <button type="button" class="btn btn-success pull-left" data-dismiss="modal">No</button> <button type="button" class="btn btn-outline">Yes</button> </div> </div> </div> </div>';
// 	$('body').append('confirmbox');
// 	$("#adminconfirmbox").modal({
// 		show: true,
// 		backdrop: 'static'
// 	});
// }