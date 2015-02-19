<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="[_ROOT_DIR]/public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="[_ROOT_DIR]/public/css/request_add.css" rel="stylesheet">
    <link href="[_ROOT_DIR]/public/bootstrap/css/dataTables.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="[_ROOT_DIR]/public/css/dashboard.css" rel="stylesheet">
  </head>

  <body>

<!--ВЕРХНЯЯ НАВИГАЦИЯ -->

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BVCtrans</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-stats"></span> Dashboard</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
      </div>
    </div>

<!-- БОКОВАЯ НАВИГАЦИЯ -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            [_menu]
          </ul>
        </div>

<!-- ДАШБОРД -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          [_content]
        </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="[_ROOT_DIR]/public/bootstrap/js/bootstrap.min.js"></script>
    <script src="[_ROOT_DIR]/public/bootstrap/js/docs.min.js"></script>
    <script src="[_ROOT_DIR]/public/bootstrap/js/jquery.dataTables.min.js"></script>
    <script src="[_ROOT_DIR]/public/bootstrap/js/dataTables.bootstrap.js"></script>
    <script>
$(function () {
    $("table").tablework();
});
$.fn.tablework = function() {
    return this.each(function() {
        var $table = $(this),
            $thead = $table.find('thead');
        !$thead.length && ($thead = $('<thead/>').prependTo($table));
        var $tr = $('<tr/>').prependTo($thead),
            hide = {};
        $("tbody tr:first>", $table).each(function(indx, element) {
            var range = ['Без выбора'],
                $td = $("tbody tr :nth-of-type(" + (indx + 1) + ")", $table),
                temp = {};
            $td.each(function(i, el) {
                var text = $(this).text()
                if (!temp[text]) {
                    range.unshift(text);
                    temp[text] = true
                };
            });
            var $select = $('<select class="form-control input-sm"/>', {
                'change': function() {
                    var val = this.value;
                    hide[indx] = [];
                    this.selectedIndex && $td.each(function(i, el) {
                        $(this).text() != val && hide[indx].push(i)
                    });
                    var range = [];
                    for (var k in hide) range = range.concat(hide[k]);
                    var $tr = $("tbody tr", $table);
                    $tr.show();
                    $.each(range, function(i, el) {
                        $tr.eq(el).hide()
                    });
                }
            });
            $.each(range, function() {
                $('<option/>', {
                    text: this
                }).prependTo($select);
            });
            $('<td/>').append($select).appendTo($tr);
        });
    });
};
// $(document).ready(function() {
//     $('#reqtable').dataTable( {
//         "language": {
//             "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Russian.json"
//         }
//     } );
// } );
</script>
  </body>
</html>
