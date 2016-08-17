    			<h3>$username's Tickets</h3></br>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Assigned To</th>
                            <th>Priority</th>
                            <th>Subject</th>
                            <th>Catagory</th>
                            <th>Last Update</th>
                            <th>Status</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $myarray = array("a","b","c","d","e","f","g","1");
                        foreach($myarray as $value): ?>
                        <tr>
                            <td class="text-center"><?=$value?></td>
                            <td><?=$value?></td>
                            <td><?=$value?></td>
                            <td><?=$value?></td>
                            <td><?=$value?></td>
                            <td><?=$value?></td>
                            <td><?=$value?></td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Assign" class="btn btn-info btn-simple btn-xs">
                                    <i class="fa fa-user"></i>
                                </button>
                                <button type="button" rel="tooltip" title="Edit" class="btn btn-success btn-simple btn-xs">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" rel="tooltip" title="Close" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>