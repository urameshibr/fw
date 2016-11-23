<div class="x_panel">
    <div class="x_title">
        <h2>Clientes</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>

    <div class="x_content">

        <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
                <thead>
                <tr class="headings">
                    <th>
                        <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                    </th>
                    <th class="column-title" style="display: table-cell;">Nome </th>
                    <th class="column-title" style="display: table-cell;">Telefone </th>
                    <th class="column-title" style="display: table-cell;">Tipo </th>
                    <th class="column-title" style="display: table-cell;">Endereços </th>
                    <th class="column-title" style="display: table-cell;">Emails </th>
                    <th class="column-title no-link last" style="display: table-cell;"><span class="nobr">Ação</span>
                    </th>
                    <th class="bulk-actions" colspan="7" style="display: none;">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">1 Records Selected</span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                </tr>
                </thead>

                <tbody>
                <tr class="">
                    <?php foreach($data['customers'] as $customer): ?>
                    <td class="a-center ">
                        <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                    </td>

                        <td class=" "><?php echo $customer['name'] ?></td>
                        <td class=" "><?php echo $customer['phone_number'] ?></td>
                        <td class=" "><?php echo $customer['type'] ?> <i class="success fa fa-user"></i></td>
                        <td class=" ">
                            <?php foreach ($customer['addresses'] as $address): ?>
                                <p><?php echo $address ?></p>
                            <?php endforeach; ?>
                        </td>
                        <td class=" ">
                            <?php foreach ($customer['emails'] as $email): ?>
                                <p><?php echo $email ?></p>
                            <?php endforeach; ?>
                        </td>
                        <td class=" last"><a href="#">View</a></td>

                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
