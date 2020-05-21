@extends('dashboard.app')

@section('content')
    <section class="m-b-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1>Lugares en renta</h1>
                </div>
            </div>
            <div class="dt-datatables">
                <div class="container-fluid p-0 m-b-3">
                    <div class="dt-header">
                        <div class="btn-group" role="group" aria-label="First group">
                            <div class="input-group">
                                <div class="input-group-prepend d-none d-sm-block">
                                    <span class="input-group-text" id="basic-addon1">Filas</span>
                                </div>
                                <select id="tbl-length" name="tbl-user_length" aria-controls="tbl-user" class="custom-select">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="btn-group">
                            <div class="btn-toolbar">
                                <div class="input-group mr-2 pull-right">
                                    <input type="search" class="form-control" placeholder="Búsqueda Rápida">
                                </div>
                                <div class="btn-group pull-right">
                                    <!--
                                    <button type="button" data-toggle="collapse" data-target="#dt-filter" aria-expanded="false" aria-controls="dt-filter" class="btn btn-sm btn-outline-dark" style="">
                                        <i class="fa fa-filter"></i>
                                    </button>-->
                                    <div class="btn-group" role="group">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-sm btn-outline-dark dropdown-toggle">
                                            <i class="fa fa-download"></i>
                                        </button>
                                        <div id="dt-btn-export" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink"></div>
                                    </div>

                                    <div class="btn-group" role="group">
                                        <button type="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" class="btn btn-sm btn-outline-dark dropdown-toggle">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <div id="dt-list-vis" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="dt-filter" class="collapse">
                        <div class="toolbar-2">
                            <!-- Filtros Aqui -->

                            <div class="btn-group" style="margin-right: 1em; display: flex;">
                                <button id="dt-btn-search" type="button" class="btn btn-primary btn-apply" style="align-self: center;">Aplicar</button>
                            </div>
                            <div class="btn-group" style="margin-right: 1em; display: flex;">
                                <button id="dt-clear" type="button" class="btn btn-outline-dark btn-clear" style="align-self: center;">Limpiar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table table-sm" id="myTable">
                    <thead class="thead">
                    <tr>
                        <th >#</th>
                        <th >Ciudad</th>
                        <th >Rentador</th>
                        <th >Dirección</th>
                        <th >Plan</th>
                        <th >Precio</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td >1</td>
                        <td>Cancún</td>
                        <td>Ernesto Alejandro Pech Angulo</td>
                        <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                        <td>Mensual</td>
                        <td>5,000</td>
                    </tr>
                    <tr>
                        <td >2</td>
                        <td>Cancún</td>
                        <td>Jesus Manuel España</td>
                        <td>MZ4 SM 74 LT181 AV.Tulum</td>
                        <td>Mensual</td>
                        <td>10,000</td>
                    </tr>
                    <tr>
                        <td >3</td>
                        <td>Cancún</td>
                        <td>Fernando García Marquez</td>
                        <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                        <td>Quincenal</td>
                        <td>5,000</td>
                    </tr>
                    <tr>
                        <td >4</td>
                        <td>Cancún</td>
                        <td>Fernando García Marquez</td>
                        <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                        <td>Quincenal</td>
                        <td>5,000</td>
                    </tr>
                    <tr>
                        <td >5</td>
                        <td>Cancún</td>
                        <td>Fernando García Marquez</td>
                        <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                        <td>Quincenal</td>
                        <td>5,000</td>
                    </tr>
                    <tr>
                        <td >6</td>
                        <td>Cancún</td>
                        <td>Fernando García Marquez</td>
                        <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                        <td>Quincenal</td>
                        <td>5,000</td>
                    </tr>
                    <tr>
                        <td >7</td>
                        <td>Cancún</td>
                        <td>Fernando García Marquez</td>
                        <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                        <td>Quincenal</td>
                        <td>5,000</td>
                    </tr>
                    <tr>
                        <td >8</td>
                        <td>Cancún</td>
                        <td>Fernando García Marquez</td>
                        <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                        <td>Quincenal</td>
                        <td>5,000</td>
                    </tr>
                    <tr>
                        <td >9</td>
                        <td>Cancún</td>
                        <td>Fernando García Marquez</td>
                        <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                        <td>Quincenal</td>
                        <td>5,000</td>
                    </tr>
                    <tr>
                        <td >10</td>
                        <td>Cancún</td>
                        <td>Fernando García Marquez</td>
                        <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                        <td>Quincenal</td>
                        <td>5,000</td>
                    </tr>
                    <tr>
                        <td >11</td>
                        <td>Cancún</td>
                        <td>Fernando García Marquez</td>
                        <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                        <td>Quincenal</td>
                        <td>5,000</td>
                    </tr>
                    <tr>
                        <td >12</td>
                        <td>Cancún</td>
                        <td>Fernando García Marquez</td>
                        <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                        <td>Quincenal</td>
                        <td>5,000</td>
                    </tr>
                    <tr>
                        <td >13</td>
                        <td>Cancún</td>
                        <td>Fernando García Marquez</td>
                        <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                        <td>Quincenal</td>
                        <td>5,000</td>
                    </tr>
                    <tr>
                        <td >14</td>
                        <td>Cancún</td>
                        <td>Fernando García Marquez</td>
                        <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                        <td>Quincenal</td>
                        <td>5,000</td>
                    </tr>
                    <tr>
                        <td >15</td>
                        <td>Cancún</td>
                        <td>Fernando García Marquez</td>
                        <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                        <td>Quincenal</td>
                        <td>5,000</td>
                    </tr>
                    <tr>
                        <td >16</td>
                        <td>Cancún</td>
                        <td>Fernando García Marquez</td>
                        <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                        <td>Quincenal</td>
                        <td>5,000</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection

@section('javascript')
    <script>
        function dt_header(table) {
            if($.fn.DataTable.isDataTable(table)) {
                var container = $(table.table().header()).parents('.dt-datatables');

                new $.fn.dataTable.Buttons( table, {
                    name: 'save',
                    buttons: [
                        {
                            extend: 'copy',
                            text: '<i class="fa fa-copy"></i>&nbsp; Copiar',
                            className: 'dropdown-item buttons-copy buttons-html5',
                            attr:  {
                                title: 'Copiar filas de la tabla',
                                tabindex:'-1',
                                type:'button'
                            },
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'csv',
                            text: '<i class="fa fa-file-text-o"></i>&nbsp; CSV',
                            className: 'dropdown-item buttons-html5',
                            attr: {
                                title: 'Exportar a CSV',
                                tabindex:'-1',
                                type:'button'
                            },
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'excel',
                            text: '<i class="fa fa-file-excel-o"></i>&nbsp; Excel',
                            className: 'dropdown-item buttons-html5',
                            attr: {
                                title: 'Exportar a Excel',
                                tabindex:'-1',
                                type:'button'
                            },
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'pdf',
                            text: '<i class="fa fa-file-pdf-o"></i>&nbsp; PDF',
                            className: 'dropdown-item buttons-html5',
                            attr: {
                                title: 'Exportar a PDF',
                                tabindex:'-1',
                                type:'button'
                            },
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'print',
                            text: '<i class="fa fa-print"></i>&nbsp; Imprimir',
                            className: 'dropdown-item buttons-html5',
                            attr: {
                                title: 'Imprimir la tabla',
                                tabindex:'-1',
                                type:'button'
                            },
                            exportOptions: {
                                columns: ':visible'
                            }
                        }
                    ]
                } );

                table.buttons().containers().appendTo( container.find('#dt-btn-export') );

                var colvis = container.find("#dt-list-vis");
                $.each($(table.table().header()).find('th'), function(i, col){
                    colvis.append(
                        $("<a/>", {"data-targets":i, "class":"dropdown-item text-default", "href":"javascript:void(0)", "data-visible":1})
                        .append(
                            $("<p/>").html('<i class="fa fa-eye"></i> ' + col.innerHTML)
                )
                .click(function(e){
                        var a = $(this);
                        if(this.dataset.visible==1) {
                            table.column(this.dataset.targets).visible(false);
                            a.attr('data-visible', 0).removeClass('text-default').addClass('text-muted');
                            a.find('.fa').removeClass('fa-eye').addClass('fa-eye-slash');
                        }
                        else {
                            table.column(this.dataset.targets).visible(true);
                            a.attr('data-visible', 1).addClass('text-default').removeClass('text-muted');
                            a.find('.fa').removeClass('fa-eye-slash').addClass('fa-eye');
                        }
                    })
                );
                });

                container.find('#dt-btn-search').click( function () {
                    table.search( container.find('input[type=search]').val() ).draw();
                } );

                container.find('#tbl-length').on( 'change', function () {
                    table.page.len( this.value ).draw();
                } );

                container.find('.dt-header input[type=search]').on( 'keyup', function (e) {
                    _loader(false); // To prevent multiple loaders

                    clearTimeout($.data(this, 'timer'));
                    var search = this.value;
                    if(search!==table.search())
                    {
                        if (e.keyCode == 13) {
                            table.search( search ).draw();
                        }
                        else {
                            $(this).data('timer', setTimeout(function(){
                                table.search( search ).draw();
                            }, 1000));
                        }
                    }
                } );

                container.find('#dt-filter .dtf-sel').change(function() {
                    var col = this.dataset.col;
                    if(col) {
                        table.column(col).search(this.value).draw();
                    }
                });

                container.find('#dt-filter #dtf-clear').click( function() {
                    table.columns().header().each( function (rowIndex, colIndex) {
                        table.column(colIndex).search('');
                    });

                    table.draw();
                });
            }
        }

        const formatter = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
            minimumFractionDigits: 2
        });

        $(document).ready( function () {
            $('#myTable').DataTable({
                serverSide: false, destroy: true, orderCellsTop: false, sType:'string', autoWidth: false, scrollY: 381, scrollX: true,
                ordering: true,
                'dom': "<'#dt_header'>  <'#dt_body 'tr>  <'#dt_footer container-fluid' <'row' <'col-12 col-md-7'i><'col-12 col-md-5'p> > >",
                columns: [
                    {},
                    {},
                    {},
                    {},
                    {},
                    { className: 'text-right', render: function (d) {
                            var money = d.replace(',', '');
                            d = parseFloat(money);
                            return formatter.format(d);
                        }
                    },
                ],
                'language': {
                    'lengthMenu': 'Mostrando _MENU_ registros por página',
                    'zeroRecords': 'No hay ningún registro',
                    'info': 'Mostrando página _PAGE_ de _PAGES_',
                    'infoEmpty': 'Sin registros',
                    'infoFiltered': '( <small class=\'text-muted\'>filtrado de _MAX_ registro(s)</small> )',
                    'paginate': {
                        'previous': 'Anterior',
                        'next': 'Siguiente',
                    },
                },
                'drawCallback': function (set) {
                    //_loader(false);
                },
                'initComplete': function () {
                    dt_header(this.api());
                }
            });
        } );
    </script>
@endsection
