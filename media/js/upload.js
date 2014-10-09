$(function(){
        $('#multi').MultiFile({
          accept:'jpg|gif|bmp|png', max:15, STRING: {
            remove:'<img src="/kohana/media/images/delete2.png"> ',
            selected:'Выбраны: $file',
            denied:'Неверный тип файла: $ext!',
            duplicate:'Этот файл уже выбран:\n$file!'
        }});
    });