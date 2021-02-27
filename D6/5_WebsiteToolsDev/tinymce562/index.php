<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/tinymce562/js/tinymce/tinymce.min.js"></script>
    <script>
            tinymce.init({
            selector: 'textarea#mytextarea',
            width: 800,
            height: 500,
            menubar: true,
            entity_encoding:'raw',
            language:'el',
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
        ],
        toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
        toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
        image_advtab: true ,
        
        external_filemanager_path:"/tinymce562/filemanager/",
        filemanager_title:"Responsive Filemanager" ,
        external_plugins: { "filemanager" : "/tinymce562//filemanager/plugin.min.js"}
        });
    </script>

    <title>Document</title>
</head>
<body>
<h1>TinyMCE Quick Start Guide</h1>
<form method="post">
    <textarea id="mytextarea">
        Hello, World!
    </textarea>
</form>
</body>
</html>