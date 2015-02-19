<h3 class="sub-header"><div class="row"><div class="col-xs-10">Заявки <small> 6 февраля 2015г.</small></div><div class="col-xs-2"><button class="btn btn-sm btn-success btn-block" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span> Новая</button></div></h3>         
<!--            <div class="row">
              <div class="col-xs-5">
                <input type="text" class="form-control input-sm" name='request[adress_load]' placeholder="Поиск">
              </div>
              <div class="col-xs-2">
                <button class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span>Поиск</button>
              </div>
            </div> 
<h5 class="sub-header"></h5> -->
          <div class="table-responsive">
            <table id='reqtable' class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Заказчик</th>
                  <th>Адрес загрузки</th>
                  <th>Адрес разгрузки</th>
                  <th>Отправитель</th>
                  <th>Получатель</th>
                  <th>Исполнитель</th>
                  <th>Сумма</th>
                </tr>
              </thead>
              <tbody>
              [_while]
                <tr>
                  <td>[_id]</td>
                  <td>[_req_client]</td>
                  <td>[_req_adress_load]</td>
                  <td>[_req_adress_unload]</td>
                  <td>[_req_shipper]</td>
                  <td>[_req_consignee]</td>
                  <td>[_req_executor]</td>
                  <td>[_req_cost]</td>
                </tr>
                [_while]
              </tbody>
            </table>
          </div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">×</button>
                <h3 class="modal-title">Новая заявка</h3>
            </div>
            <div class="panel-body">
            <div class="modal-body" >
            <form id='request_add' name='request_add' class='request_add' action='add' method='post' onsubmit="FormSendOK()">
            <div class="row">
              <div class="col-xs-7">
                <label class="">Клиент:</label>
                  [_contragent]
              </div>
              <div class="col-xs-5">
                <label class="">Тип т/с:</label>
                  <select name='request[am]'class="form-control">
                   <option value="0">Выберите тип т/c</option>
                   <option value="1">Газель 1,5т.</option>
                   <option value="2">Бычок 3т.</option>
                   <option value="3">Зил 5т.</option>
                   <option value="4">Камаз 10т.</option>
                   <option value="5">Фура 20т.</option>
                  </select>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <label class="">Маршрут:</label>
                <input type="text" class="form-control input-sm" name='request[adress_load]' placeholder="Адрес загрузки">
              </div>
              <div class="col-xs-5">
                <label class="">Контактная информация:</label>
                <input type="text" class="form-control input-sm" name='request[shipper]' placeholder="Грузоотправитель">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <input type="text" class="form-control" name='request[adress_unload]' placeholder="Адрес разгрузки">
              </div>
              <div class="col-xs-5">
                <input type="text" class="form-control" name='request[consignee]' placeholder="Грузополучатель">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-4">
                <label class="">Наименование груза:</label>
                <input type="text" class="form-control" name='request[cargo]' placeholder="Наименование груза">
              </div>
              <div class="col-xs-4">
                <label class="">Вес:</label>
                <input type="text" class="form-control" name='request[weight]' placeholder="Вес">
              </div>
              <div class="col-xs-4">
                <label class="">Объем:</label>
                <input type="text" class="form-control" name='request[volume]' placeholder="Объем">
              </div>
            </div>
              <div class="row"> 
              <div class="col-xs-7">
                <label class="">Исполнитель:</label>
                <select class="form-control" name='request[perfomer]'>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
              <div class="col-xs-5">
                <label class="">ФИО водителя:</label>
                <input type="text" class="form-control" name='request[driver]' placeholder="Водитель">
              </div>
             </div>
            <div class="row">  
              <div class="col-xs-7">
                <label class="">Паспорт:</label>
                <input type="text" class="form-control" name='request[driver_passport]' placeholder="Паспорт">
              </div>
              <div class="col-xs-5">
                <label class="">Марка и гос. номер т/с:</label>
                <input type="text" class="form-control" name='request[driver_ts]' placeholder="">
              </div>
            </div>
            <label class="">Примечание:</label>
            <textarea class="form-control" name='request[note]'></textarea>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
        <button class="btn btn-primary">OK</button>
            </div>
        </form>
      </div>
    </div>
</div>

<script>
    var RequestAddForm = {
        type: 'POST',
        resetForm: 'true',
        url: 'add',
        success:    function(){
        }
      }

    function FormSendOK() {
        $("#Request_add").ajaxSubmit(RequestAddForm);
        $("#myModal").modal('hide');
      }
</script>
