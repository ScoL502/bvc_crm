  <html>
  <head>
   <!-- Custom styles for this template -->
    <link href="[_ROOT_DIR]/public/css/request_add.css" rel="stylesheet">
  </head>

  <body>
    <h1 class="page-header">Новая заявка</h1>
          <form class='request_add' action='add' method='post'>

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
                <input type="text" class="form-control" name='request[shipper_adress]' placeholder="Адрес загрузки">
              </div>
              <div class="col-xs-5">
                <label class="">Контактная информация:</label>
                <input type="text" class="form-control" name='request[shipper]' placeholder="Грузоотправитель">
              </div>
            </div>

            <div class="row">
            
              <div class="col-xs-7">
                <input type="text" class="form-control" name='request[consignee_adress]' placeholder="Адрес разгрузки">
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

            <button class="btn btn-lg btn-success btn-block">Создать</button>
          </form>
          </div>
          </body></html>