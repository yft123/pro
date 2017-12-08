@extends('admin.index')
@section('title')
  <h3 class="page-header"><i class="fa fa-laptop"></i> 用户列表</h3>
@endsection

@section('title2')
  <li><i class="fa fa-laptop"></i>user lists</li> 
@endsection

 
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    <tr class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Firefox 1.0</td>
                                            <td class=" ">Win 98+ / OSX.2+</td>
                                            <td class="center ">1.7</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA even">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Firefox 1.5</td>
                                            <td class=" ">Win 98+ / OSX.2+</td>
                                            <td class="center ">1.8</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Firefox 2.0</td>
                                            <td class=" ">Win 98+ / OSX.2+</td>
                                            <td class="center ">1.8</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA even">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Firefox 3.0</td>
                                            <td class=" ">Win 2k+ / OSX.3+</td>
                                            <td class="center ">1.9</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Camino 1.0</td>
                                            <td class=" ">OSX.2+</td>
                                            <td class="center ">1.8</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA even">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Camino 1.5</td>
                                            <td class=" ">OSX.3+</td>
                                            <td class="center ">1.8</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Netscape 7.2</td>
                                            <td class=" ">Win 95+ / Mac OS 8.6-9.2</td>
                                            <td class="center ">1.7</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA even">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Netscape Browser 8</td>
                                            <td class=" ">Win 98SE+</td>
                                            <td class="center ">1.7</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Netscape Navigator 9</td>
                                            <td class=" ">Win 98+ / OSX.2+</td>
                                            <td class="center ">1.8</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA even">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Mozilla 1.0</td>
                                            <td class=" ">Win 95+ / OSX.1+</td>
                                            <td class="center ">1</td>
                                            <td class="center ">A</td>
                                        </tr></tbody>
                                </table><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div></div>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

@endsection