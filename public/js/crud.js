function crud() {

    var table;

    this.init = function () {
        table = this.table();



    }
    this.table = function () {
        return $('#table').DataTable({
            "processing": true,
            "serverSide": true,
            destroy: true,
            "ajax": "Crud/getData",
            aoColumnDefs: [
                {
                    "aTargets": [1],
                    "mRender": function (data, type, full) {
                        return '<a href="#" onclick="obj.gestion(' + full.id + ')">' + data + '</a>';
                    }
                }
            ],

        });
    }

    this.gestion = function (id) {
        var data = {};
        data.id = id;
        $.ajax({
            url: "Crud/getDataId",
            type: 'GET',
            dataType: 'JSON',
            data: data,
            success: function (data) {

            },
            error: function () {

            }

        })
    }

    this.edita = function () {
        var data = $("#frmgestion").serialize();

        $.ajax({
            url: "Crud/getDataId",
            type: 'PUT',
            dataType: 'JSON',
            data: data,
            success: function (data) {

            },
            error: function () {

            }

        })

    }

    this.delete = function () {

    }

}

var obj = new crud();
obj.init();