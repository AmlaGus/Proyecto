// disparador par agregar un tema
$(document).ready(function () {

    $('body').on('click', '.agregar_tema_materia', function (e) {
        var random_number = Math.floor(Math.random() * 10000000001);
        var row_html = '' +
            '<tr class="tema_'+random_number+'">' +
                '<td>' +
                    '<textarea class="put" rows="2" placeholder="Nombre" name="tema[' + random_number + '][nombre]" required/>' +
                '</td>' +
                '<td>' +
                    ' <textarea class="put" rows="3" id="comment" placeholder="Descripcion" name="tema[' + random_number + '][descripcion]" required/> ' +
                '</td>' +
                '<td>' +
                    ' <a href="#" class="agregar_subtemas_nuevos_materia" id="boton" ' +
                        'data-identificador_tema="'+random_number+'"' +
                        'data-toggle="modal" data-target="#subtemasModal">' +
                        '<span class="glyphicon glyphicon-plus-sign"></span>Ver/Editar' +
                    '</a>' +
                '</td>' +
                '<td>' +
                    ' <a href="#" class="agregar_subtema_materia" id="boton"><span class="glyphicon glyphicon-remove-sign"></span>Subtema</a>' +
                '</td>' +
                '<td style="display: none">'+
                    '<table class="lista_subtemas">' +
                    '</table>'+
                '</td>';
            '</tr>';
        $('.tbodyListaTemas').append(row_html);
    });

    $('body').on('click', '.agregar_subtemas_nuevos_materia', function(){
        var identificador_tema = $(this).data('identificador_tema');
        $('input.identificador_tema').val(identificador_tema);
        $('.tbodySubtemas').html('');
    });

    $('body').on('click', '.agregar_subtema_materia', function (e) {

        var row_html =
            '<tr>' +
                '<td>' +
                    '<textarea class="put nombre" rows="2" required placeholder="Nombre tema" /> ' +
                '</td>' +
                '<td>' +
                    '<textarea class="put descripcion" rows="3" required placeholder="Descripcion" /> '+
                '</td>' +
            '</tr>';
        $('.tbodySubtemas').append(row_html);
    });

    $('body').on('click','.guardar_subtemas',function(){

        var subtemas_html = '<tr>';

        var identificador_tema = $('input.identificador_tema').val(); //obtengo a quer registro de temas tengo que mandar estos subtemas de forma oculta
        //el each es un similar al foreach  (ciclo)
        $('.tbodySubtemas').find('tr').each(function(){
            var random_number = Math.floor(Math.random() * 10000000001); //random para variso subtemas
            var nombre_tema = $(this).find('textarea.nombre').val();
            var descripcion_tema = $(this).find('textarea.descripcion').val();
            subtemas_html += '<td><textarea style="display: none;" name="tema['+identificador_tema+'][subtema]['+random_number+'][nombre]">'+nombre_tema+'</textarea>';
            subtemas_html += '<textarea style="display: none;" name="tema['+identificador_tema+'][subtema]['+random_number+'][descripcion]">'+descripcion_tema+'</textarea></td>';
        });
        subtemas_html += '</tr>';
        $('tr.tema_'+identificador_tema).find('table.lista_subtemas').html(subtemas_html);
    });

});