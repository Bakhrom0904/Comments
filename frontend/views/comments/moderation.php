<div class="br-mainpanel">
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Moderation</h4>
    </div>
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="bd bd-gray-300 rounded table-responsive">
                <table class="table mg-b-0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Moderation</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($comments as $comment):?>
                        <tr>
                            <td><?=$comment->id;?></td>
                            <td><?=$comment->name;?></td>
                            <td><?=$comment->email;?></td>
                            <td><?=$comment->phone;?></td>
                            <td><?=$comment->message;?></td>
                            <td><?=date("d.m.Y H:i",$comment->created_at);?></td>
                            <td>
                                <?php if($comment->status == 0): ?>

                                    <a href="/comments/confirm?id=<?=$comment->id;?>"><button type="button" class="btn btn-success">Confirm</button></a>
                                    <a href="/comments/cancel?id=<?=$comment->id;?>"><button type="button" class="btn btn-danger">Cancel</button></a>

                                <?php elseif($comment->status == 1): ?>

                                    <button type="button" class="btn btn-primary">Confirmed</button>

                                <?php elseif($comment->status == 2): ?>

                                    <button type="button" class="btn btn-warning">Cancelled</button>  

                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>