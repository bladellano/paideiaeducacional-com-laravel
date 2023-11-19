$(function () {

    // Script geral da area de admin.

    var traducaoDataTable = {
        "sEmptyTable": "Nenhum dado disponível na tabela",
        "sInfo": "Mostrando _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
        "sInfoPostFix": "",
        "sInfoThousands": ".",
        "sLengthMenu": "_MENU_ resultados por página",
        "sLoadingRecords": "Carregando...",
        "sProcessing": "Processando...",
        "sZeroRecords": "Nenhum registro correspondente encontrado",
        "sSearch": "Pesquisar:",
        "oPaginate": {
            "sNext": "Próximo",
            "sPrevious": "Anterior",
            "sFirst": "Primeiro",
            "sLast": "Último"
        },
        "oAria": {
            "sSortAscending": ": Ordenar colunas de forma ascendente",
            "sSortDescending": ": Ordenar colunas de forma descendente"
        },
        "select": {
            "rows": {
                "_": "%d linhas selecionadas",
                "0": "Nenhuma linha selecionada",
                "1": "1 linha selecionada"
            }
        }
    };

    // Instancia DataTable

    $('.table.active-datatable').DataTable({
        "order": [[0, 'desc']],
        "language": traducaoDataTable,
        "columnDefs": [
            { "orderable": false, "targets": [-1, -2] } // Desativa a ordenação nas últimas duas colunas
        ],
    });



});