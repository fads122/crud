
<body>

            <div class="modal fade" id="modal_ko<?php echo $row['ID']?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">NOTICE!</h4>
                        </div>
                        <div class="modal-body">
                        <h1>ARE YOU SURE YOU WANT TO DELETE THIS STUDENT?</h1>
                        </div>
                        <div class="modal-footer">
                            
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                            <a href= "delete.php?u_id=<?php echo $u_id; ?>">
                                            <button type="button" data-color="blue" class="btn bg-red waves-effect">CONFIRM DELETION</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>