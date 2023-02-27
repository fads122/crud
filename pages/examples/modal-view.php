 <!-- Large Size -->
 <div class="modal fade" id="myModal<?php echo $row['ID'] ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="card" style='background:#f0f0f5'>
                        <div class="modal-header ">
                            <h2 class="title" id="largeModalLabel">Student's Profile</h2>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex flex-row profile-icon p-20" >
                                <div class="p-2 icon"><i class="far fa-user-circle" style='font-size:200px;'></i></div>
                                            
                            </div>
                            <div class="d-flex flex-row profile-icon p-20" >
                                    <p><h2><?php echo $row['firstname']; ?>&nbsp;<?php echo $row['miname']; ?>&nbsp;<?php echo $row['lastname']; ?> <h2></p>
                            </div>
                            <div class="d-flex flex-row profile-icon1 p-2" >
                            <ul class="list-unstyled">
                                <li><h4>Born on <?php echo $row['birthdate']; ?> <h4></li>
                                <li><h4><?php echo $row['gender']; ?> <h4></li>
                                <li><h4>Lives in <?php echo $row['address']; ?> <h4></li>
                                <li><h4>Studies in <?php echo $row['school']; ?> <h4></li>
                               
                                    <ul>
                                   
                            </div>
                          
                            </div>
                        <div class="modal-footer">
                           
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
