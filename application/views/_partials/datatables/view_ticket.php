<!-- Standar Table -->
<div class="hpanel">
    <div class="panel-heading">
        <div class="panel-tools">
            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
            <a class="closebox"><i class="fa fa-times"></i></a>
        </div>
    </div>
    <div class="panel-body">
        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
                <div class="col-sm-6">
                    <div class="dataTables_length" id="example2_length"><label>Show <select name="example2_length" aria-controls="example2" class="form-control input-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries</label></div>
                </div>
                <div class="col-sm-6">
                    <div id="example2_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example2"></label></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 3%;">No</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nama Surat: activate to sort column ascending" style="width: 25%;">
                                    Departement</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Tujuan: activate to sort column ascending" style="width: 10%;">Subject
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Aksi: activate to sort column ascending" style="width: 20%;">Status</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Aksi: activate to sort column ascending" style="width: 20%;">Last Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            <a href="">
                                <tr role=" row" class="odd" class="<?php if (@$active === 4) {
                                        echo 'active';
                                        } ?>">
                                    
                                        <a href="<?= site_url('ticket/') ?>">
                                            <td class="sorting_1" >1</td>
                                            <span>TIK</span>
                                            <td>#34567</td>
                                            <td>Answerd</td>
                                            <td>Monday, 14 August 2023 (07:23)</td>
                                        </a>
                                    
                                </tr>
                            </a>
                            <tr role=" row" class="odd">
                                <td class="sorting_1" href="">2</td>
                                <td>KEPEG</td>
                                <td>#34567</td>
                                <td>Answerd</td>
                                <td>Monday, 14 August 2023 (08:05)</td>
                            </tr>
                            <tr role=" row" class="odd">
                                <td class="sorting_1" href="">3</td>
                                <td>BAAK</td>
                                <td>#34567</td>
                                <td>Answerd</td>
                                <td>Monday, 14 August 2023 (08:24)</td>
                            </tr>
                            <tr role=" row" class="odd">
                                <td class="sorting_1" href="">4</td>
                                <td>LOGISTIK</td>
                                <td>#34567</td>
                                <td>Answerd</td>
                                <td>Monday, 14 August 2023 (08:56)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 5 of 5
                        entries</div>
                </div>
                <div class="col-sm-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                        <ul class="pagination">
                            <li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li>
                            <li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li>
                            <li class="paginate_button next disabled" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>