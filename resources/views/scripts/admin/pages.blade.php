<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });

    $(document).on('click', '#sitePages .del-page', function(e){
      e.preventDefault();
      var v = $(this);
      bootbox.confirm({
        message: 'Are you sure wanted to delete this page ?',
        className: 'modal-danger',
        callback: function(result){
          if(result){
            $.ajax({
                type: "DELETE",
                url: $.data('url'),
                data:'_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    bootbox.alert('deleted');
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
          }
        },
        buttons: {
          cancel: {
            label: '<i class="fa fa-times"></i> No',
            className: 'btn btn-success pull-left'
          },
          confirm: {
            label: '<i class="fa fa-check"></i> Confirm',
            className: 'btn btn-outline align-right'
          }
        },
      });
    });

  });
</script>