             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Quản lý Ghế</h3>
                      </div>
                       
                       <div class="module-body table">
                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table display"
                                width="100%">
                                    <?php
                                        $query = "SELECT * FROM `phieudatve` JOIN ghe on phieudatve.ghe_id = ghe.id JOIN toa ON toa.id = phieudatve.tentoa_id";
                                        $rows=$db->query($query);
                                      ?>
                                    <thead>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                               Số Ghế
                                            </th>
                                            <th>
                                               Ma toa
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($rows as $key => $value): ?>
                                            <tr>
                                                <td><?= $value['ghe_id']?></td>
                                                <td><?= $value['soghe']?></td>
                                                <td><?= $value['matoa']?></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    </table>
                                    <a href='index.php?page=themghe'><button type='submit' class='btn-inverse'>Thêm mới</button></a>
                 </div>

            </div> 
         </div>
     </div>

  